<?php
/**
 * Front page template
 *
 * @package SETai
 */

global $post;
get_header();
?>
<header class="hero">
  <div class="heroCard">
    <span class="kicker"><span class="dot" aria-hidden="true"></span> <?php esc_html_e('Produktstudio • AI • Design', 'setai'); ?></span>
    <h1><?php esc_html_e('Design, AI og utvikling levert som ett team', 'setai'); ?></h1>
    <p class="sub"><?php esc_html_e('Vi bygger AI-agenter, digitale tjenester og moduler som kobler strategi til faktiske leveranser. Raskt, målbart og med kontroll.', 'setai'); ?></p>
    <div class="btnrow">
      <a class="cta" href="<?php echo esc_url(home_url('/kontakt/')); ?>"><?php esc_html_e('Book et møte', 'setai'); ?></a>
      <a class="cta secondary" href="<?php echo esc_url(home_url('/tjenester/')); ?>"><?php esc_html_e('Se hva vi leverer', 'setai'); ?></a>
    </div>
    <p class="micro"><?php esc_html_e('Standardisert prosess, tydelige leveranser, og en partner som følger deg fra idé til drift.', 'setai'); ?></p>
  </div>
  <div class="sideCard">
    <h3><?php esc_html_e('Hva du kan forvente', 'setai'); ?></h3>
    <ul class="list">
      <li><?php esc_html_e('Roadmap på dager, ikke uker', 'setai'); ?><small><?php esc_html_e('Prioriterer gevinst og risiko.', 'setai'); ?></small></li>
      <li><?php esc_html_e('Designsystem og UX klart til sprint 1', 'setai'); ?><small><?php esc_html_e('Komponenter, tokens og skjermbilder.', 'setai'); ?></small></li>
      <li><?php esc_html_e('Produksjonsklare AI-moduler', 'setai'); ?><small><?php esc_html_e('Agent, datakilder, evaluering og logging.', 'setai'); ?></small></li>
      <li><?php esc_html_e('Trygg overlevering til eget team', 'setai'); ?><small><?php esc_html_e('Repo, dokumentasjon og opplæring.', 'setai'); ?></small></li>
    </ul>
  </div>
</header>

<section aria-labelledby="hjem-tjenester">
  <div class="card">
    <h2 id="hjem-tjenester"><?php esc_html_e('Tre raske måter å bruke SETai', 'setai'); ?></h2>
    <p class="sub"><?php esc_html_e('Velg det som treffer behovet ditt best – eller kombiner alt i én stream.', 'setai'); ?></p>
    <div class="grid3" style="margin-top:14px">
      <div class="card">
        <h3><?php esc_html_e('AI-agent som håndterer kundereisen', 'setai'); ?></h3>
        <p><?php esc_html_e('Vi bygger en spesialisert agent for support, salg eller onboarding – koblet til dine kilder, med evaluering og drift.', 'setai'); ?></p>
        <span class="tag"><?php esc_html_e('Oppsett, kvalitet, drift', 'setai'); ?></span>
      </div>
      <div class="card">
        <h3><?php esc_html_e('Produkt- og tjenesteutvikling', 'setai'); ?></h3>
        <p><?php esc_html_e('Workshops, design, prototyper og implementasjon. Alltid med målinger og læring innebygd fra dag én.', 'setai'); ?></p>
        <span class="tag"><?php esc_html_e('UX, utvikling, analyse', 'setai'); ?></span>
      </div>
      <div class="card">
        <h3><?php esc_html_e('Moduler og integrasjoner', 'setai'); ?></h3>
        <p><?php esc_html_e('Vipps, autentisering, dashboards, dataflyt eller kursportal. Ferdig pakket og tilpasset ditt miljø.', 'setai'); ?></p>
        <span class="tag"><?php esc_html_e('Klar til å kobles på', 'setai'); ?></span>
      </div>
    </div>
  </div>
</section>

<section aria-labelledby="hjem-prosess">
  <div class="split">
    <div class="callout">
      <h3 id="hjem-prosess"><?php esc_html_e('Hvordan vi jobber', 'setai'); ?></h3>
      <p class="muted"><?php esc_html_e('En tydelig rekkefølge som gir deg verdi raskt – og dokumentasjon som gjør det enkelt å drifte videre.', 'setai'); ?></p>
      <div class="hr" aria-hidden="true"></div>
      <ul class="list">
        <li><?php esc_html_e('Oppstart og prioritering', 'setai'); ?><small><?php esc_html_e('Roadmap, målbilder og avklaringer på data og sikkerhet.', 'setai'); ?></small></li>
        <li><?php esc_html_e('Design og prototyping', 'setai'); ?><small><?php esc_html_e('Skjermbilder, flows og komponenter som kan godkjennes før bygging.', 'setai'); ?></small></li>
        <li><?php esc_html_e('Leveranse i sprint', 'setai'); ?><small><?php esc_html_e('Repo, moduler, agent og koblinger til analyse/monitorering.', 'setai'); ?></small></li>
        <li><?php esc_html_e('Overlevering og opplæring', 'setai'); ?><small><?php esc_html_e('Workshop for teamet ditt + plan for videreutvikling.', 'setai'); ?></small></li>
      </ul>
    </div>
    <div class="callout">
      <h3><?php esc_html_e('Resultater vi optimaliserer for', 'setai'); ?></h3>
      <p class="muted"><?php esc_html_e('Vi jobber tett på forretning og team, med fokus på det som flytter KPI-ene dine.', 'setai'); ?></p>
      <div class="grid3" style="margin-top:12px">
        <div class="card">
          <h3><?php esc_html_e('Lavere kost per henvendelse', 'setai'); ?></h3>
          <p><?php esc_html_e('AI-assistanse og bedre selvhjelp gir færre saker og raskere responstid.', 'setai'); ?></p>
        </div>
        <div class="card">
          <h3><?php esc_html_e('Høyere konvertering', 'setai'); ?></h3>
          <p><?php esc_html_e('Personlige flows, bedre UX og klare microcopyer gjør det enkelt å velge deg.', 'setai'); ?></p>
        </div>
        <div class="card">
          <h3><?php esc_html_e('Hurtigere leveransetempo', 'setai'); ?></h3>
          <p><?php esc_html_e('Standardiserte pakker, gjenbrukbare moduler og et team som tar ansvar.', 'setai'); ?></p>
        </div>
      </div>
    </div>
  </div>
</section>

<section aria-labelledby="hjem-call">
  <div class="callout">
    <h3 id="hjem-call"><?php esc_html_e('Klar for neste steg?', 'setai'); ?></h3>
    <p class="sub"><?php esc_html_e('La oss kartlegge gevinstene, lage et konkret forslag og sette første sprint.', 'setai'); ?></p>
    <div class="btnrow">
      <a class="cta" href="<?php echo esc_url(home_url('/kontakt/')); ?>"><?php esc_html_e('Start en prat', 'setai'); ?></a>
      <a class="cta secondary" href="<?php echo esc_url(home_url('/ai-agent/')); ?>"><?php esc_html_e('Se AI-agenten', 'setai'); ?></a>
    </div>
    <p class="micro"><?php esc_html_e('Vi svarer innen én arbeidsdag.', 'setai'); ?></p>
  </div>
</section>
<?php
get_footer();
