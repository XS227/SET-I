<?php
/**
 * Template Name: Tjenester
 * Description: Landingsside for tjenester.
 *
 * @package SETai
 */

global $post;
get_header();
?>
<header class="hero">
  <div class="heroCard">
    <span class="kicker"><span class="dot" aria-hidden="true"></span> <?php esc_html_e('Strategi, design og teknologi', 'setai'); ?></span>
    <h1><?php esc_html_e('Tjenester for å planlegge, bygge og lansere', 'setai'); ?></h1>
    <p class="sub"><?php esc_html_e('Fra strategi til produksjonsklar levering. Vi jobber tett med deg for å bygge digitale produkter og AI-løsninger som fungerer i praksis.', 'setai'); ?></p>
    <div class="btnrow">
      <a class="cta" href="<?php echo esc_url(home_url('/kontakt/')); ?>"><?php esc_html_e('La oss starte', 'setai'); ?></a>
      <a class="cta secondary" href="<?php echo esc_url(home_url('/ai-agent/')); ?>"><?php esc_html_e('Utforsk AI-agent', 'setai'); ?></a>
    </div>
  </div>
  <div class="sideCard">
    <h3><?php esc_html_e('Standard pakker', 'setai'); ?></h3>
    <ul class="list">
      <li><?php esc_html_e('Produkt- og tjenestestrategi', 'setai'); ?><small><?php esc_html_e('Research, mål og roadmap.', 'setai'); ?></small></li>
      <li><?php esc_html_e('UX/UI designsystem', 'setai'); ?><small><?php esc_html_e('Skjermbilder, komponenter og microcopy.', 'setai'); ?></small></li>
      <li><?php esc_html_e('AI-implementasjon', 'setai'); ?><small><?php esc_html_e('Prompter, datakilder, integrasjoner og drift.', 'setai'); ?></small></li>
      <li><?php esc_html_e('Lansering og vekst', 'setai'); ?><small><?php esc_html_e('Eksperimenter, analyse og optimalisering.', 'setai'); ?></small></li>
    </ul>
  </div>
</header>

<section aria-labelledby="tjenester-detaljer">
  <div class="grid3">
    <div class="card">
      <h3><?php esc_html_e('Strategi & produkt', 'setai'); ?></h3>
      <p><?php esc_html_e('Workshop, prioritering, roadmap og målbilde. Vi sørger for at hvert tiltak kan måles og kobles til forretning.', 'setai'); ?></p>
      <span class="tag"><?php esc_html_e('Fra idé til prioritering', 'setai'); ?></span>
    </div>
    <div class="card">
      <h3><?php esc_html_e('Design & innhold', 'setai'); ?></h3>
      <p><?php esc_html_e('Designsystem, flows, prototyper og microcopy. Leveres klart for utvikling med tokens og komponenter.', 'setai'); ?></p>
      <span class="tag"><?php esc_html_e('Design klart for sprint', 'setai'); ?></span>
    </div>
    <div class="card">
      <h3><?php esc_html_e('Utvikling & QA', 'setai'); ?></h3>
      <p><?php esc_html_e('Full stack-team som bygger, tester og dokumenterer. Inkluderer observability, feilvarsling og sikkerhetspraksis.', 'setai'); ?></p>
      <span class="tag"><?php esc_html_e('Produksjonsklart', 'setai'); ?></span>
    </div>
  </div>
</section>

<section aria-labelledby="tjenester-prosess">
  <div class="split">
    <div class="callout">
      <h3 id="tjenester-prosess"><?php esc_html_e('Leveranseprosesser', 'setai'); ?></h3>
      <ul class="list">
        <li><?php esc_html_e('Discovery', 'setai'); ?><small><?php esc_html_e('Research, innsikt og hypoteser.', 'setai'); ?></small></li>
        <li><?php esc_html_e('Designsprint', 'setai'); ?><small><?php esc_html_e('Prototype, brukertest og beslutning.', 'setai'); ?></small></li>
        <li><?php esc_html_e('Build', 'setai'); ?><small><?php esc_html_e('Iterativ utvikling med demoer hver uke.', 'setai'); ?></small></li>
        <li><?php esc_html_e('Scale', 'setai'); ?><small><?php esc_html_e('Feature flagging, eksperimenter og forbedringer.', 'setai'); ?></small></li>
      </ul>
    </div>
    <div class="callout">
      <h3><?php esc_html_e('Hvor vi passer best', 'setai'); ?></h3>
      <p class="muted"><?php esc_html_e('Teams som vil ha et lite, senior team som leverer raskt uten å miste kvalitet.', 'setai'); ?></p>
      <div class="hr" aria-hidden="true"></div>
      <ul class="list">
        <li><?php esc_html_e('Startups og scaleups', 'setai'); ?><small><?php esc_html_e('Behov for fart, modularitet og måling.', 'setai'); ?></small></li>
        <li><?php esc_html_e('Produktteam som mangler kapasitet', 'setai'); ?><small><?php esc_html_e('Vi kobles på som ekstra kapasitet.', 'setai'); ?></small></li>
        <li><?php esc_html_e('Forretningsteam som vil teste AI', 'setai'); ?><small><?php esc_html_e('Pilot på uker, ikke måneder.', 'setai'); ?></small></li>
      </ul>
      <div class="btnrow" style="margin-top:10px">
        <a class="cta" href="<?php echo esc_url(home_url('/moduler/')); ?>"><?php esc_html_e('Se moduler', 'setai'); ?></a>
        <a class="cta secondary" href="<?php echo esc_url(home_url('/kontakt/')); ?>"><?php esc_html_e('Snakk med oss', 'setai'); ?></a>
      </div>
    </div>
  </div>
</section>
<?php
get_footer();
