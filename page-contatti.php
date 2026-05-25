<?php

/**
 * Template: Contatti
 * URL: /contatti
 */
defined('ABSPATH') || exit;

$wa_message = 'Salve, vorrei una valutazione per la riparazione di una tenda.';
$wa_url     = rtc_whatsapp_link($wa_message);
if (!preg_match('/wa\.me\/\d+/', $wa_url)) {
  $wa_url = esc_url('https://wa.me/393000000000?text=' . rawurlencode($wa_message));
}

$email = rtc_contact_email();
$phone = rtc_contact_phone();

$contact_status = isset($_GET['contact']) ? sanitize_key(wp_unslash($_GET['contact'])) : '';

get_header();
?>

<main id="main">

  <!-- Header -->
  <section class="bg-forest py-16 lg:py-20">
    <div class="container-site">
      <nav aria-label="Breadcrumb" class="mb-5">
        <ol class="flex items-center gap-2 text-white/50 text-sm font-body flex-wrap">
          <li><a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-canvas transition-colors">Home</a></li>
          <li aria-hidden="true"><span class="mx-1">/</span></li>
          <li class="text-canvas/80" aria-current="page">Contatti</li>
        </ol>
      </nav>
      <h1 class="font-heading font-bold text-3xl md:text-4xl lg:text-5xl text-white leading-tight max-w-3xl text-balance">
        Contattaci per la riparazione della tua tenda
      </h1>
      <p class="mt-4 text-white/65 text-lg leading-relaxed max-w-2xl">
        Invia foto e una breve descrizione per ricevere una valutazione preliminare. Rispondiamo in ordine di arrivo.
      </p>
    </div>
  </section>

  <!-- Canali di contatto -->
  <section class="bg-cream py-14 lg:py-16" aria-labelledby="canali-heading">
    <div class="container-site">
      <h2 id="canali-heading" class="section-subheading mb-8">Contattaci</h2>
      <?php
      $canali = [
        [
          'href'   => $wa_url,
          'target' => '_blank',
          'rel'    => 'noopener noreferrer',
          'icon'   => 'whatsapp',
          'bg'     => 'bg-forest/10',
          'color'  => 'text-forest',
          'title'  => 'WhatsApp',
          'desc'   => 'Canale preferito per foto, preventivi e aggiornamenti sulle lavorazioni.',
          'action' => ['label' => 'Scrivici ora', 'chevron' => true],
        ],
        [
          'href'   => 'mailto:' . $email,
          'icon'   => 'mail',
          'bg'     => 'bg-forest/10',
          'color'  => 'text-forest',
          'title'  => 'Email',
          'desc'   => 'Per schede cliente, documentazione e comunicazioni formali.',
          'action' => ['label' => $email, 'break_all' => true],
        ],
        [
          'href'   => rtc_phone_link($phone),
          'icon'   => 'phone',
          'bg'     => 'bg-olive/10',
          'color'  => 'text-olive',
          'title'  => 'Telefono',
          'desc'   => 'Per informazioni rapide negli orari di apertura del laboratorio.',
          'action' => ['label' => $phone],
        ],
      ];
      ?>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <?php foreach ($canali as $canale) :
          $attrs = sprintf(
            ' href="%s"%s%s',
            esc_url($canale['href']),
            !empty($canale['target']) ? ' target="' . esc_attr($canale['target']) . '"' : '',
            !empty($canale['rel']) ? ' rel="' . esc_attr($canale['rel']) . '"' : ''
          );
          $action = $canale['action'];
          $action_class = 'text-forest group-hover:text-olive font-heading font-medium text-sm transition-colors';
          if (!empty($action['chevron'])) {
            $action_class = 'inline-flex items-center gap-1.5 ' . $action_class;
          }
          if (!empty($action['break_all'])) {
            $action_class .= ' break-all';
          }
        ?>
          <a class="service-card group cursor-pointer" <?php echo $attrs; ?>>
            <div class="w-12 h-12 rounded-xl <?php echo esc_attr($canale['bg']); ?> flex items-center justify-center">
              <?php
              $icon_class = 'w-6 h-6 ' . $canale['color'];
              if ($canale['icon'] === 'whatsapp') {
                rtc_whatsapp_icon($icon_class);
              } else {
                rtc_icon($canale['icon'], $icon_class);
              }
              ?>
            </div>
            <div>
              <h3 class="font-heading font-semibold text-forest text-lg mb-1"><?php echo esc_html($canale['title']); ?></h3>
              <p class="text-muted text-sm leading-relaxed mb-3"><?php echo esc_html($canale['desc']); ?></p>
              <span class="<?php echo esc_attr($action_class); ?>">
                <?php echo esc_html($action['label']); ?>
                <?php if (!empty($action['chevron'])) : ?>
                  <?php rtc_icon('chevron-right', 'w-4 h-4 group-hover:translate-x-0.5 transition-transform'); ?>
                <?php endif; ?>
              </span>
            </div>
          </a>
        <?php endforeach; ?>
      </div>

      <div class="mt-8 bg-forest/5 border border-forest/15 rounded-2xl p-6 flex items-start gap-4 max-w-3xl">
        <?php rtc_icon('clock', 'w-5 h-5 text-olive flex-shrink-0 mt-0.5'); ?>
        <div>
          <h3 class="font-heading font-semibold text-forest text-base mb-1">Tempi di risposta</h3>
          <p class="text-muted text-sm leading-relaxed">
            Rispondiamo di norma entro <strong class="text-dark font-medium">1–2 giorni lavorativi</strong>.
            In periodi di alta richiesta i tempi possono allungarsi: ti aggiorniamo appena possibile.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Form + info -->
  <section class="bg-canvas py-14 lg:py-16" aria-labelledby="form-heading">
    <div class="container-site">
      <div class="grid grid-cols-1 lg:grid-cols-5 gap-10 lg:gap-14">

        <div class="lg:col-span-3">
          <h2 id="form-heading" class="section-subheading mb-2">Scrivici un messaggio</h2>
          <p class="text-muted text-sm leading-relaxed mb-8">
            Compila il modulo per inviarci una richiesta via email. Per inviare foto della tenda usa WhatsApp.
          </p>

          <?php if ($contact_status === 'success') : ?>
            <div role="status" class="mb-6 rounded-2xl border border-olive/30 bg-olive/10 px-5 py-4 flex items-start gap-3">
              <?php rtc_icon('check', 'w-5 h-5 text-olive flex-shrink-0 mt-0.5'); ?>
              <p class="text-dark text-sm leading-relaxed">
                Messaggio inviato correttamente. Ti risponderemo al più presto.
              </p>
            </div>
          <?php elseif ($contact_status === 'error') : ?>
            <div role="alert" class="mb-6 rounded-2xl border border-red-300 bg-red-50 px-5 py-4 flex items-start gap-3">
              <?php rtc_icon('circle-alert', 'w-5 h-5 text-red-600 flex-shrink-0 mt-0.5'); ?>
              <p class="text-dark text-sm leading-relaxed">
                Non è stato possibile inviare il messaggio. Riprova o contattaci su WhatsApp.
              </p>
            </div>
          <?php endif; ?>

          <form method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" class="space-y-5" novalidate>
            <?php wp_nonce_field('rtc_contact_form', 'rtc_contact_nonce'); ?>
            <input type="hidden" name="action" value="rtc_contact">

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
              <div>
                <label for="contact-name" class="form-label">Nome e cognome <span class="text-olive" aria-hidden="true">*</span></label>
                <input type="text" id="contact-name" name="contact_name" required autocomplete="name"
                  class="form-input" value="">
              </div>
              <div>
                <label for="contact-email" class="form-label">Email <span class="text-olive" aria-hidden="true">*</span></label>
                <input type="email" id="contact-email" name="contact_email" required autocomplete="email"
                  class="form-input" value="">
              </div>
            </div>

            <div>
              <label for="contact-phone" class="form-label">Telefono <span class="text-muted font-normal">(facoltativo)</span></label>
              <input type="tel" id="contact-phone" name="contact_phone" autocomplete="tel"
                class="form-input" value="">
            </div>

            <div>
              <label for="contact-subject" class="form-label">Oggetto <span class="text-olive" aria-hidden="true">*</span></label>
              <select id="contact-subject" name="contact_subject" required class="form-input cursor-pointer">
                <option value="">Seleziona un argomento</option>
                <option value="Valutazione riparazione tenda">Valutazione riparazione tenda</option>
                <option value="Gruppo scout / associazione">Gruppo scout / associazione</option>
                <option value="Spedizione e consegna">Spedizione e consegna</option>
                <option value="Collaborazione / punto raccolta">Collaborazione / punto raccolta</option>
                <option value="Altro">Altro</option>
              </select>
            </div>

            <div>
              <label for="contact-message" class="form-label">Messaggio <span class="text-olive" aria-hidden="true">*</span></label>
              <textarea id="contact-message" name="contact_message" rows="5" required
                class="form-input resize-y min-h-[8rem]"
                placeholder="Descrivi il tipo di tenda, i danni e se hai già inviato foto…"></textarea>
            </div>

            <button type="submit" class="btn-primary">
              Invia messaggio
            </button>
          </form>
        </div>

        <aside class="lg:col-span-2 space-y-6">
          <div class="bg-cream rounded-2xl p-6 border border-canvas-dark/30">
            <h3 class="font-heading font-semibold text-forest text-base mb-4">Prima di scriverci</h3>
            <ol class="space-y-4">
              <?php
              $tips = [
                'Invia foto chiare della tenda e dei danni',
                'Indica marca, modello e tipo di tenda',
                'Non spedire prima di aver ricevuto conferma',
                'Compila la scheda cliente se richiesta',
              ];
              foreach ($tips as $i => $tip) : ?>
                <li class="flex items-start gap-3 text-sm">
                  <span class="step-number w-7 h-7 text-xs"><?php echo $i + 1; ?></span>
                  <span class="text-muted leading-relaxed pt-0.5"><?php echo esc_html($tip); ?></span>
                </li>
              <?php endforeach; ?>
            </ol>
          </div>

          <div class="bg-forest/5 border border-forest/15 rounded-2xl p-6">
            <h3 class="font-heading font-semibold text-forest text-base mb-3">Laboratorio</h3>
            <p class="text-muted text-sm leading-relaxed mb-4">
              Lavoriamo su appuntamento e tramite spedizione da tutta Italia. Non è un punto vendita al dettaglio.
            </p>
            <a href="<?php echo esc_url(home_url('/come-spedire-tenda-da-riparare')); ?>"
              class="inline-flex items-center gap-2 text-forest hover:text-olive font-heading font-medium text-sm transition-colors cursor-pointer">
              Come spedire il materiale
              <?php rtc_icon('chevron-right', 'w-4 h-4'); ?>
            </a>
          </div>
        </aside>

      </div>
    </div>
  </section>

  <!-- FAQ contatti -->
  <section class="bg-cream py-14 lg:py-16" aria-labelledby="faq-contatti-heading">
    <div class="container-site max-w-3xl">
      <h2 id="faq-contatti-heading" class="section-subheading mb-8">Domande frequenti</h2>
      <div class="rounded-2xl border border-canvas-dark/30 bg-cream overflow-hidden">
        <?php
        $faqs = [
          [
            'q' => 'Posso inviare solo le foto senza compilare il modulo?',
            'a' => 'Sì. WhatsApp è il canale più rapido per foto e valutazioni preliminari. Il modulo email è utile per richieste dettagliate o documentazione.',
          ],
          [
            'q' => 'Quanto tempo serve per una risposta?',
            'a' => 'Di norma entro 1–2 giorni lavorativi. In alta stagione i tempi possono variare; ti comunichiamo eventuali ritardi.',
          ],
          [
            'q' => 'Posso spedire la tenda senza avervi contattato?',
            'a' => 'No. Prima di qualsiasi spedizione è necessario contattarci, inviare foto e attendere le istruzioni.',
          ],
        ];
        foreach ($faqs as $i => $faq) : ?>
          <div class="faq-item px-5" data-faq-item>
            <button type="button" data-faq-trigger
              class="w-full flex items-center justify-between gap-4 py-5 text-left cursor-pointer"
              aria-expanded="false" aria-controls="faq-contatti-<?php echo $i; ?>">
              <span class="font-heading font-medium text-forest text-sm md:text-base leading-snug">
                <?php echo esc_html($faq['q']); ?>
              </span>
              <?php rtc_icon('chevron-down', 'w-5 h-5 text-olive flex-shrink-0 transition-transform duration-200', ['data-faq-icon' => '']); ?>
            </button>
            <div id="faq-contatti-<?php echo $i; ?>" data-faq-content class="hidden pb-5">
              <p class="text-muted text-sm leading-relaxed"><?php echo esc_html($faq['a']); ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Link utili -->
  <section class="bg-canvas py-12 lg:py-14">
    <div class="container-site">
      <div class="max-w-3xl">
        <h3 class="font-heading font-semibold text-forest text-base mb-5">Link utili</h3>
        <div class="flex flex-wrap gap-3">
          <?php
          $links = [
            ['/come-spedire-tenda-da-riparare',  'Come spedire'],
            ['/condizioni-lavorazione-tende',     'Condizioni di lavorazione'],
            ['/garanzia-riparazioni-tende',       'Garanzia'],
            ['/collaborazioni-punti-raccolta',    'Collaborazioni'],
          ];
          foreach ($links as [$url, $label]) : ?>
            <a href="<?php echo esc_url(home_url($url)); ?>"
              class="inline-flex items-center gap-2 text-forest hover:text-olive text-sm font-heading font-medium transition-colors border border-forest/20 hover:border-olive/30 px-4 py-2 rounded-full cursor-pointer">
              <?php echo esc_html($label); ?>
              <?php rtc_icon('chevron-right', 'w-3.5 h-3.5'); ?>
            </a>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA WhatsApp -->
  <section class="bg-forest py-16 lg:py-20">
    <div class="container-site text-center">
      <h2 class="font-heading font-bold text-2xl md:text-3xl text-white mb-4">Hai già le foto della tenda?</h2>
      <p class="text-white/65 mb-8 max-w-lg mx-auto leading-relaxed">
        Inviale su WhatsApp per una valutazione più rapida.
      </p>
      <a href="<?php echo esc_url($wa_url); ?>" target="_blank" rel="noopener noreferrer"
        class="btn-whatsapp">
        <?php rtc_whatsapp_icon('w-5 h-5'); ?>
        Invia foto su WhatsApp
      </a>
    </div>
  </section>

</main>

<?php get_footer(); ?>