<?php
/**
 * Template Name: AI-agent
 * Description: Landingsside for AI-agenten.
 *
 * @package SETai
 */

global $post;
get_header();
?>
<header class="hero">
  <div class="heroCard">
    <span class="kicker"><span class="dot" aria-hidden="true"></span> <?php esc_html_e('AI-agent for kunde- og driftsopplevelser', 'setai'); ?></span>
    <h1><?php esc_html_e('En agent som svarer, veileder og registrerer – med kvalitetssikring bygd inn', 'setai'); ?></h1>
    <p class="sub"><?php esc_html_e('Vi designer og bygger en agent som kjenner produktene dine, håndterer henvendelser, utfører oppgaver og lærer av responsen.', 'setai'); ?></p>
    <div class="btnrow">
      <a class="cta" href="<?php echo esc_url(home_url('/kontakt/')); ?>"><?php esc_html_e('Start et pilotprosjekt', 'setai'); ?></a>
      <a class="cta secondary" href="<?php echo esc_url(home_url('/moduler/')); ?>"><?php esc_html_e('Koble på moduler', 'setai'); ?></a>
    </div>
    <p class="micro"><?php esc_html_e('Evaluering, logging og forbedringssløyfer følger med.', 'setai'); ?></p>
  </div>
  <div class="sideCard">
    <h3><?php esc_html_e('Leveransen inkluderer', 'setai'); ?></h3>
    <ul class="list">
      <li><?php esc_html_e('Datasett og kunnskapsbase', 'setai'); ?><small><?php esc_html_e('Utvalg, strukturering og oppdateringsrutiner.', 'setai'); ?></small></li>
      <li><?php esc_html_e('Prompter og verktøybruk', 'setai'); ?><small><?php esc_html_e('Oppsett for kilder, API-er og handlinger agenten kan utføre.', 'setai'); ?></small></li>
      <li><?php esc_html_e('Trygg test & kvalitet', 'setai'); ?><small><?php esc_html_e('Eval, guardrails, kjøreregler og fallback.', 'setai'); ?></small></li>
      <li><?php esc_html_e('Monitorering og drift', 'setai'); ?><small><?php esc_html_e('Dashboards, alarmer og rapporter.', 'setai'); ?></small></li>
    </ul>
  </div>
</header>

<section aria-labelledby="agent-usecases">
  <div class="card">
    <h2 id="agent-usecases"><?php esc_html_e('Typiske use cases', 'setai'); ?></h2>
    <div class="grid3" style="margin-top:12px">
      <div class="card">
        <h3><?php esc_html_e('Support og selvhjelp', 'setai'); ?></h3>
        <p><?php esc_html_e('Agenten svarer på FAQs, løser enkle saker og samler data til saksbehandlere når den må eskalere.', 'setai'); ?></p>
        <span class="tag"><?php esc_html_e('Reduser kø og håndteringstid', 'setai'); ?></span>
      </div>
      <div class="card">
        <h3><?php esc_html_e('Salg og onboarding', 'setai'); ?></h3>
        <p><?php esc_html_e('Veileder kunder til riktig produkt, reserverer demoer og starter onboarding med riktig dokumentasjon.', 'setai'); ?></p>
        <span class="tag"><?php esc_html_e('Øk konvertering', 'setai'); ?></span>
      </div>
      <div class="card">
        <h3><?php esc_html_e('Operasjonelle oppgaver', 'setai'); ?></h3>
        <p><?php esc_html_e('Oppdaterer CRM, oppretter saker, følger opp betalinger eller sjekker status i interne systemer.', 'setai'); ?></p>
        <span class="tag"><?php esc_html_e('Automatiser manuelt arbeid', 'setai'); ?></span>
      </div>
    </div>
  </div>
</section>

<section aria-labelledby="agent-prosess">
  <div class="split">
    <div class="callout">
      <h3 id="agent-prosess"><?php esc_html_e('Slik bygger vi agenten', 'setai'); ?></h3>
      <ul class="list">
        <li><?php esc_html_e('Analyse', 'setai'); ?><small><?php esc_html_e('Brukerbehov, datakilder og policyer.', 'setai'); ?></small></li>
        <li><?php esc_html_e('Design av samtaler', 'setai'); ?><small><?php esc_html_e('Flows, tone of voice og roller.', 'setai'); ?></small></li>
        <li><?php esc_html_e('Verktøy & integrasjoner', 'setai'); ?><small><?php esc_html_e('API-er, databaser og oppgavesteg.', 'setai'); ?></small></li>
        <li><?php esc_html_e('Test og tuning', 'setai'); ?><small><?php esc_html_e('Eval-sett, guardrails og forbedringssykluser.', 'setai'); ?></small></li>
      </ul>
    </div>
    <div class="callout">
      <h3><?php esc_html_e('Lansering og forvaltning', 'setai'); ?></h3>
      <p class="muted"><?php esc_html_e('Du får full kontroll over endringer og tilgang til dataene du trenger.', 'setai'); ?></p>
      <div class="hr" aria-hidden="true"></div>
      <ul class="list">
        <li><?php esc_html_e('Dashboard for status', 'setai'); ?><small><?php esc_html_e('Observability, varsler og rapporter.', 'setai'); ?></small></li>
        <li><?php esc_html_e('Overlevering og opplæring', 'setai'); ?><small><?php esc_html_e('Teamet ditt får playbooks og rutiner.', 'setai'); ?></small></li>
        <li><?php esc_html_e('Videre utvikling', 'setai'); ?><small><?php esc_html_e('Plan for nye flows og moduler.', 'setai'); ?></small></li>
      </ul>
      <div class="btnrow" style="margin-top:10px">
        <a class="cta" href="<?php echo esc_url(home_url('/kontakt/')); ?>"><?php esc_html_e('Book en gjennomgang', 'setai'); ?></a>
        <a class="cta secondary" href="<?php echo esc_url(home_url('/tjenester/')); ?>"><?php esc_html_e('Se alle tjenester', 'setai'); ?></a>
      </div>
    </div>
  </div>
</section>
<?php
get_footer();
