#!/usr/bin/env bash
# WordPress REST API helper — legge credenziali da .env nella root del tema.
set -euo pipefail

ROOT="$(cd "$(dirname "$0")/.." && pwd)"
ENV_FILE="$ROOT/.env"

if [[ ! -f "$ENV_FILE" ]]; then
  echo "Errore: file .env non trovato. Copia .env.example in .env e compila le credenziali." >&2
  exit 1
fi

# shellcheck disable=SC1090
source "$ENV_FILE"

if [[ -z "${WP_URL:-}" || -z "${WP_USER:-}" || -z "${WP_APP_PASSWORD:-}" ]]; then
  echo "Errore: WP_URL, WP_USER e WP_APP_PASSWORD devono essere impostati in .env" >&2
  exit 1
fi

API_BASE="${WP_URL%/}/wp-json/wp/v2"
AUTH=(-u "${WP_USER}:${WP_APP_PASSWORD}")

cmd="${1:-help}"
shift || true

case "$cmd" in
  me)
    curl -s "${AUTH[@]}" "${API_BASE}/users/me" | python3 -m json.tool
    ;;
  pages)
    curl -s "${AUTH[@]}" "${API_BASE}/pages?per_page=100&_fields=id,slug,title,template,status" | python3 -m json.tool
    ;;
  page)
    slug="${1:?Usage: wp-api.sh page <slug>}"
    curl -s "${AUTH[@]}" "${API_BASE}/pages?slug=${slug}" | python3 -m json.tool
    ;;
  get)
    id="${1:?Usage: wp-api.sh get <page-id>}"
    curl -s "${AUTH[@]}" "${API_BASE}/pages/${id}" | python3 -m json.tool
    ;;
  update)
    id="${1:?Usage: wp-api.sh update <page-id> <json-file>}"
    json_file="${2:?Usage: wp-api.sh update <page-id> <json-file>}"
    curl -s -X POST "${AUTH[@]}" \
      -H "Content-Type: application/json" \
      -d @"${json_file}" \
      "${API_BASE}/pages/${id}" | python3 -m json.tool
    ;;
  raw)
    method="${1:-GET}"
    endpoint="${2:?Usage: wp-api.sh raw <METHOD> <endpoint> [json-file]}"
    json_file="${3:-}"
    url="${WP_URL%/}/wp-json/${endpoint#/}"
    if [[ -n "$json_file" ]]; then
      curl -s -X "$method" "${AUTH[@]}" -H "Content-Type: application/json" -d @"${json_file}" "$url" | python3 -m json.tool
    else
      curl -s -X "$method" "${AUTH[@]}" "$url" | python3 -m json.tool
    fi
    ;;
  help|*)
    cat <<EOF
WordPress REST API — ${WP_URL}

Comandi:
  me                          Verifica autenticazione
  pages                       Elenco pagine (id, slug, template)
  page <slug>                 Dettaglio pagina per slug
  get <id>                    Dettaglio pagina per ID
  update <id> <json-file>     Aggiorna pagina (POST con body JSON)
  raw <METHOD> <endpoint> [json-file]
                              Chiamata libera (es. raw GET wp/v2/pages/123)

Esempi:
  ./scripts/wp-api.sh me
  ./scripts/wp-api.sh page test
  ./scripts/wp-api.sh update 123 payload.json
EOF
    ;;
esac
