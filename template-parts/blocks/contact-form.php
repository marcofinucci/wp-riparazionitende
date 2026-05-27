<?php
defined('ABSPATH') || exit;

$contact_status = isset($_GET['contact']) ? sanitize_key(wp_unslash($_GET['contact'])) : '';
?>

<section class="bg-canvas py-14 lg:py-16" aria-labelledby="form-heading">
  <div class="container-site">
    <div class="grid grid-cols-1 lg:grid-cols-5 gap-10 lg:gap-14">

      <div class="lg:col-span-3">
        <h2 id="form-heading" class="section-subheading mb-2">Scrivici un messaggio</h2>
        <p class="text-muted text-sm  mb-8">
          Compila il modulo per inviarci una richiesta via email. Per inviare foto della tenda usa WhatsApp.
        </p>

        <?php if ($contact_status === 'success') : ?>
          <div role="status" class="mb-6 rounded-2xl border border-olive/30 bg-olive/10 px-5 py-4 flex items-start gap-3">
            <?php rtc_icon('check', 'w-5 h-5 text-olive flex-shrink-0 mt-0.5'); ?>
            <p class="text-dark text-sm ">Messaggio inviato correttamente. Ti risponderemo al più presto.</p>
          </div>
        <?php elseif ($contact_status === 'error') : ?>
          <div role="alert" class="mb-6 rounded-2xl border border-red-300 bg-red-50 px-5 py-4 flex items-start gap-3">
            <?php rtc_icon('circle-alert', 'w-5 h-5 text-red-600 flex-shrink-0 mt-0.5'); ?>
            <p class="text-dark text-sm ">Non è stato possibile inviare il messaggio. Riprova o contattaci su WhatsApp.</p>
          </div>
        <?php endif; ?>

        <form method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" class="space-y-5" novalidate>
          <?php wp_nonce_field('rtc_contact_form', 'rtc_contact_nonce'); ?>
          <input type="hidden" name="action" value="rtc_contact">

          <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
            <div>
              <label for="contact-name" class="form-label">Nome e cognome <span class="text-olive" aria-hidden="true">*</span></label>
              <input type="text" id="contact-name" name="contact_name" required autocomplete="name" class="form-input" value="">
            </div>
            <div>
              <label for="contact-email" class="form-label">Email <span class="text-olive" aria-hidden="true">*</span></label>
              <input type="email" id="contact-email" name="contact_email" required autocomplete="email" class="form-input" value="">
            </div>
          </div>

          <div>
            <label for="contact-phone" class="form-label">Telefono <span class="text-muted font-normal">(facoltativo)</span></label>
            <input type="tel" id="contact-phone" name="contact_phone" autocomplete="tel" class="form-input" value="">
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

          <button type="submit" class="btn-primary">Invia messaggio</button>
        </form>
      </div>

      <aside class="lg:col-span-2 space-y-6">
        <div class=" rounded-2xl p-6 border border-canvas-dark/30">
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
                <span class="text-muted  pt-0.5"><?php echo esc_html($tip); ?></span>
              </li>
            <?php endforeach; ?>
          </ol>
        </div>

        <div class="bg-forest/5 border border-forest/15 rounded-2xl p-6">
          <h3 class="font-heading font-semibold text-forest text-base mb-3">Laboratorio</h3>
          <p class="text-muted text-sm  mb-4">
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