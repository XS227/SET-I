<?php
/**
 * Template Name: Kontakt
 * Description: Kontaktside med forespørselskjema.
 *
 * @package SETai
 */

global $post;
get_header();
?>
<header class="hero" style="grid-template-columns: 1fr;">
  <div class="heroCard">
    <span class="kicker"><span class="dot" aria-hidden="true"></span> <?php esc_html_e('Kontakt', 'setai'); ?></span>
    <h1><?php esc_html_e('Start med én konkret arbeidsflyt', 'setai'); ?></h1>
    <p class="sub"><?php esc_html_e('Skriv hva som er manuelt i dag, og hva du ønsker at en AI-agent skal gjøre.', 'setai'); ?></p>

    <div class="split" style="margin-top:12px">
      <div class="callout">
        <h2><?php esc_html_e('Rask avklaring', 'setai'); ?></h2>
        <p><?php esc_html_e('Jeg svarer med et forslag til agent/modul, estimert effekt og neste steg.', 'setai'); ?></p>
        <div class="notice"><strong><?php esc_html_e('Tips:', 'setai'); ?></strong> <?php esc_html_e('Legg ved lenke til nettside + hvilke verktøy dere bruker (CRM, e-post, booking, osv.).', 'setai'); ?></div>
      </div>

      <div class="card">
        <h2><?php esc_html_e('Send forespørsel', 'setai'); ?></h2>

        <form action="https://formsubmit.co/khabat.setaei@gmail.com" method="POST">
          <input type="hidden" name="_subject" value="Ny forespørsel: SETai (AI-agent)" />
          <input type="hidden" name="_captcha" value="false" />
          <input type="hidden" name="_template" value="table" />

          <div class="formRow">
            <div>
              <label for="name"><?php esc_html_e('Navn', 'setai'); ?></label>
              <input id="name" name="Navn" autocomplete="name" required />
            </div>
            <div>
              <label for="company"><?php esc_html_e('Bedrift', 'setai'); ?></label>
              <input id="company" name="Bedrift" autocomplete="organization" />
            </div>
          </div>

          <div class="formRow">
            <div>
              <label for="email"><?php esc_html_e('E-post', 'setai'); ?></label>
              <input id="email" name="E-post" type="email" autocomplete="email" required />
            </div>
            <div>
              <label for="type"><?php esc_html_e('Hva gjelder det?', 'setai'); ?></label>
              <select id="type" name="Type" required>
                <option value="" disabled selected><?php esc_html_e('Velg', 'setai'); ?></option>
                <option><?php esc_html_e('AI-agent / modul', 'setai'); ?></option>
                <option><?php esc_html_e('Nettside som system', 'setai'); ?></option>
                <option><?php esc_html_e('Synlighet (SEO/AEO)', 'setai'); ?></option>
                <option><?php esc_html_e('Kurs for bedrift', 'setai'); ?></option>
              </select>
            </div>
          </div>

          <div>
            <label for="msg"><?php esc_html_e('Kort beskrivelse', 'setai'); ?></label>
            <textarea id="msg" name="Melding" placeholder="<?php esc_attr_e('Hva er manuelt i dag? Hva vil du automatisere?', 'setai'); ?>" required></textarea>
          </div>

          <button class="cta" type="submit"><?php esc_html_e('Send', 'setai'); ?></button>
          <div class="tiny"><?php esc_html_e('Ved å sende godtar du at jeg kan kontakte deg på e-post.', 'setai'); ?></div>
        </form>
      </div>
    </div>

    <div class="card" style="margin-top:12px">
      <h2 id="apningstider"><?php esc_html_e('Åpningstider', 'setai'); ?></h2>
      <p class="muted"><?php esc_html_e('Jeg er tilgjengelig for nye henvendelser mellom 09:00 og 13:00. Fredager er stengt.', 'setai'); ?></p>
      <ul class="list" aria-labelledby="apningstider" style="margin-top:12px">
        <li><strong><?php esc_html_e('Mandag–torsdag:', 'setai'); ?></strong> <?php esc_html_e('09:00–13:00', 'setai'); ?></li>
        <li><strong><?php esc_html_e('Fredag:', 'setai'); ?></strong> <?php esc_html_e('Stengt', 'setai'); ?></li>
        <li><strong><?php esc_html_e('Lørdag–søndag:', 'setai'); ?></strong> <?php esc_html_e('09:00–13:00', 'setai'); ?></li>
      </ul>
    </div>
  </div>
</header>
<?php
get_footer();
