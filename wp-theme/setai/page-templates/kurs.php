<?php
/**
 * Template Name: Kurs
 * Description: Landingsside for kurs og opplæring.
 *
 * @package SETai
 */

global $post;
get_header();
?>
<header class="hero">
  <div class="heroCard">
    <span class="kicker"><span class="dot" aria-hidden="true"></span> <?php esc_html_e('Kurs og opplæring', 'setai'); ?></span>
    <h1><?php esc_html_e('Gi teamet ditt kompetansen til å levere med AI', 'setai'); ?></h1>
    <p class="sub"><?php esc_html_e('Praktiske kurs for produkt-, design- og teknologiteam. Vi lærer bort metodene vi selv bruker til å levere raskt.', 'setai'); ?></p>
    <div class="btnrow">
      <a class="cta" href="<?php echo esc_url(home_url('/kontakt/')); ?>"><?php esc_html_e('Book et kurs', 'setai'); ?></a>
      <a class="cta secondary" href="<?php echo esc_url(home_url('/ai-agent/')); ?>"><?php esc_html_e('Se AI-agenten', 'setai'); ?></a>
    </div>
  </div>
  <div class="sideCard">
    <h3><?php esc_html_e('Kursformater', 'setai'); ?></h3>
    <ul class="list">
      <li><?php esc_html_e('Workshop (3 timer)', 'setai'); ?><small><?php esc_html_e('Én problemstilling, tydelige leveranser.', 'setai'); ?></small></li>
      <li><?php esc_html_e('Bootcamp (1–2 dager)', 'setai'); ?><small><?php esc_html_e('Fra idé til prototype og test.', 'setai'); ?></small></li>
      <li><?php esc_html_e('Team enablement', 'setai'); ?><small><?php esc_html_e('Sprintstøtte, pairing og review.', 'setai'); ?></small></li>
    </ul>
  </div>
</header>

<section aria-labelledby="kurs-innhold">
  <div class="grid3">
    <div class="card">
      <h3><?php esc_html_e('AI i produktarbeid', 'setai'); ?></h3>
      <p><?php esc_html_e('Hypoteser, testing og måling med AI som assistent. Hvordan bruke AI i research, design og analyse.', 'setai'); ?></p>
      <span class="tag"><?php esc_html_e('Produkt + AI', 'setai'); ?></span>
    </div>
    <div class="card">
      <h3><?php esc_html_e('Designsystem og UX', 'setai'); ?></h3>
      <p><?php esc_html_e('Tokens, komponenter og flows. Vi viser hvordan du bygger klare skjermbilder som er enkle å utvikle.', 'setai'); ?></p>
      <span class="tag"><?php esc_html_e('UX / UI', 'setai'); ?></span>
    </div>
    <div class="card">
      <h3><?php esc_html_e('Agent- og modulbygging', 'setai'); ?></h3>
      <p><?php esc_html_e('Fra datasett og prompter til evaluering og monitorering. Praktiske øvelser med dine cases.', 'setai'); ?></p>
      <span class="tag"><?php esc_html_e('Hands-on', 'setai'); ?></span>
    </div>
  </div>
</section>

<section aria-labelledby="kurs-utbytte">
  <div class="split">
    <div class="callout">
      <h3 id="kurs-utbytte"><?php esc_html_e('Dette sitter teamet igjen med', 'setai'); ?></h3>
      <ul class="list">
        <li><?php esc_html_e('Metodikk', 'setai'); ?><small><?php esc_html_e('Ferdige oppskrifter og maler.', 'setai'); ?></small></li>
        <li><?php esc_html_e('Eksempler fra egen hverdag', 'setai'); ?><small><?php esc_html_e('Vi bruker deres data, flows og verktøy.', 'setai'); ?></small></li>
        <li><?php esc_html_e('Plan for neste sprint', 'setai'); ?><small><?php esc_html_e('Vi lager konkrete backlog-oppgaver.', 'setai'); ?></small></li>
      </ul>
    </div>
    <div class="callout">
      <h3><?php esc_html_e('Vi tilpasser til bransjen din', 'setai'); ?></h3>
      <p class="muted"><?php esc_html_e('Finans, eiendom, retail eller SaaS – vi tar med relevante eksempler og krav.', 'setai'); ?></p>
      <div class="btnrow" style="margin-top:10px">
        <a class="cta" href="<?php echo esc_url(home_url('/kontakt/')); ?>"><?php esc_html_e('Snakk om et opplegg', 'setai'); ?></a>
        <a class="cta secondary" href="<?php echo esc_url(home_url('/tjenester/')); ?>"><?php esc_html_e('Se tjenester', 'setai'); ?></a>
      </div>
    </div>
  </div>
</section>
<?php
get_footer();
