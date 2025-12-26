# SETai WordPress-tema

Dette er et lettvekts WordPress-tema som speiler SETai-landingene i dette repoet.

## Strukturerte sider
- Forside (`front-page.php`)
- AI-agent (`page-templates/ai-agent.php`)
- Tjenester (`page-templates/tjenester.php`)
- Moduler (`page-templates/moduler.php`)
- Kurs (`page-templates/kurs.php`)
- Kontakt med skjema (`page-templates/kontakt.php`)

## Installasjon
1. Pakk mappen `setai` som en ZIP eller kopier hele katalogen inn i `wp-content/themes/` på WordPress-installasjonen din.
2. Aktiver temaet i **Utseende → Temaer**.
3. Opprett sider i WordPress og tildel relevant sidemal under **Sideattributter**.
4. Sett forsiden til siden som bruker malen «Front page» under **Innstillinger → Lesing**.
5. Opprett en meny i **Utseende → Menyer** og koble den til plasseringen «Primary Menu» (valgfritt; fallback-meny følger med).

## Tilpasning
- Logoen ligger i `assets/images/logo.svg`. Bytt den gjerne ut med din egen fil.
- Farger, typografi og layout finner du i `style.css`.
- Navigasjonslogikken og årstallet i footer settes i `assets/js/site.js`.
