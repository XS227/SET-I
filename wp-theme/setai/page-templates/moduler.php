<?php
/**
 * Template Name: Moduler
 * Description: Landingsside for moduler.
 *
 * @package SETai
 */

global $post;
get_header();
?>
<header class="hero">
  <div class="heroCard">
    <span class="kicker"><span class="dot" aria-hidden="true"></span> <?php esc_html_e('Ferdige byggeklosser', 'setai'); ?></span>
    <h1><?php esc_html_e('Moduler som gjør lanseringen raskere', 'setai'); ?></h1>
    <p class="sub"><?php esc_html_e('Koble på ferdige moduler for autentisering, betaling, analyse og læring. Vi tilpasser til ditt miljø og sikrer at alt spiller sammen.', 'setai'); ?></p>
    <div class="btnrow">
      <a class="cta" href="<?php echo esc_url(home_url('/kontakt/')); ?>"><?php esc_html_e('Få et modulforslag', 'setai'); ?></a>
      <a class="cta secondary" href="<?php echo esc_url(home_url('/ai-agent/')); ?>"><?php esc_html_e('Se AI-agent', 'setai'); ?></a>
    </div>
  </div>
  <div class="sideCard">
    <h3><?php esc_html_e('Hvordan vi leverer', 'setai'); ?></h3>
    <ul class="list">
      <li><?php esc_html_e('Behovskartlegging', 'setai'); ?><small><?php esc_html_e('Velger riktig modul og avklarer krav.', 'setai'); ?></small></li>
      <li><?php esc_html_e('Tilpasning og integrasjon', 'setai'); ?><small><?php esc_html_e('Kobler til dine API-er, design og rutiner.', 'setai'); ?></small></li>
      <li><?php esc_html_e('Test og drift', 'setai'); ?><small><?php esc_html_e('QA, observability og dokumentasjon.', 'setai'); ?></small></li>
    </ul>
  </div>
</header>

<section aria-labelledby="moduler-liste">
  <div class="grid3">
    <div class="card">
      <h3><?php esc_html_e('Betaling og checkout', 'setai'); ?></h3>
      <p><?php esc_html_e('Vipps, kortbetaling og faktura. Klar med kvitteringer, rapporter og webhooker.', 'setai'); ?></p>
      <span class="tag"><?php esc_html_e('Vipps / Stripe', 'setai'); ?></span>
    </div>
    <div class="card">
      <h3><?php esc_html_e('Autentisering og tilgang', 'setai'); ?></h3>
      <p><?php esc_html_e('Innlogging, tilgangsstyring og brukeradministrasjon med beste praksis for sikkerhet.', 'setai'); ?></p>
      <span class="tag"><?php esc_html_e('SSO / RBAC', 'setai'); ?></span>
    </div>
    <div class="card">
      <h3><?php esc_html_e('Dashboards og rapportering', 'setai'); ?></h3>
      <p><?php esc_html_e('Viser KPI-er, agentdata og operasjonelle tall. Kan kobles til analyseverktøyene dine.', 'setai'); ?></p>
      <span class="tag"><?php esc_html_e('Data & innsikt', 'setai'); ?></span>
    </div>
    <div class="card">
      <h3><?php esc_html_e('Skjemaer og onboarding', 'setai'); ?></h3>
      <p><?php esc_html_e('Smart skjema med validering, utsjekk og integrasjon mot CRM eller service desk.', 'setai'); ?></p>
      <span class="tag"><?php esc_html_e('Lead & support', 'setai'); ?></span>
    </div>
    <div class="card">
      <h3><?php esc_html_e('Kurs og læring', 'setai'); ?></h3>
      <p><?php esc_html_e('Modul for kurs, læringsstier og quiz. Kan kobles til AI for tilpasset læring.', 'setai'); ?></p>
      <span class="tag"><?php esc_html_e('LMS-light', 'setai'); ?></span>
    </div>
    <div class="card">
      <h3><?php esc_html_e('Observability', 'setai'); ?></h3>
      <p><?php esc_html_e('Monitorering, logger og varsler. Viser driftstatus på AI-agenten og modulene.', 'setai'); ?></p>
      <span class="tag"><?php esc_html_e('Reliabilitet', 'setai'); ?></span>
    </div>
  </div>
</section>

<section aria-labelledby="moduler-call">
  <div class="callout">
    <h3 id="moduler-call"><?php esc_html_e('Bygg en stack som passer', 'setai'); ?></h3>
    <p class="muted"><?php esc_html_e('Vi setter sammen modulene og sikrer at design, sikkerhet og drift er på plass fra start.', 'setai'); ?></p>
    <div class="btnrow">
      <a class="cta" href="<?php echo esc_url(home_url('/kontakt/')); ?>"><?php esc_html_e('Snakk med oss', 'setai'); ?></a>
      <a class="cta secondary" href="<?php echo esc_url(home_url('/tjenester/')); ?>"><?php esc_html_e('Se tjenestene', 'setai'); ?></a>
    </div>
  </div>
</section>
<?php
get_footer();
