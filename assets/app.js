(function(){
  const I18N = {
    no: {
      nav_product: "Produkt",
      nav_scope: "Scope",
      nav_market: "Marked",
      nav_contact: "Kontakt",
      kicker: "B2B • Domene-til-live nettside på minutter",
      h1: "LiveMesh gjør domenet ditt til en levende nettside",
      h1_sub: "Koble domenet. Fyll inn firmainfo. La AI generere, oppdatere og publisere nettsiden automatisk – med kontroll, logging og raske deploys.",
      cta_access: "Be om early access",
      cta_scope: "Se scope",
      hero_card_title: "Kjernen i plattformen",
      hero_card_body: "Vi hoster GitHub + VPS + deploy. Kunden eier kun domenet, og bruker sin egen GPT-konto til å lage og vedlikeholde nettsiden.",
      m1: "Sekund-raske deploys",
      m1s: "Atomic deploy + rollback og status i dashboard.",
      m2: "BYO-AI",
      m2s: "Kunden kobler sin GPT/AI for innhold og oppdateringer.",
      m3: "Moduler",
      m3s: "Vipps, analytics, skjema, chat og mer – på minutter.",

      f_title: "Hvorfor LiveMesh",
      f1t:"Du eier domenet. Vi tar resten.",
      f1b:"Hosting, repo, CI/CD, SSL og drift i én automatisert flyt.",
      f2t:"Oppdater med AI – med kontroll.",
      f2b:"Endringer kan gå via PR/preview før publisering (trygt og profesjonelt).",
      f3t:"Skalerbar B2B-modell.",
      f3b:"Multi-tenant dashboard, logging, moduler og standardisert onboarding.",

      partners_title:"Tidligere samarbeid / miljø",
      partners_sub:"Bytt ut navnene med dine faktiske samarbeidspartnere når du ønsker.",

      build_title:"MVP → lansering",
      build_left_title:"MVP (nå)",
      build_left_body:"Onboarding (domene/DNS), repo fra template, CI/CD til VPS, SSL, status og rollback.",
      build_right_title:"V1 (lansering)",
      build_right_body:"AI PR-flow, modul-system (Vipps m.m.), multi-tenant admin og skalerbar drift.",

      footer_note:"LiveMesh er et produktkonsept under utvikling. Innhold og spesifikasjoner kan oppdateres."
    },
    en: {
      nav_product: "Product",
      nav_scope: "Scope",
      nav_market: "Market",
      nav_contact: "Contact",
      kicker: "B2B • Domain-to-live website in minutes",
      h1: "LiveMesh turns your domain into a living website",
      h1_sub: "Connect your domain, provide business info, and let AI generate, update, and publish automatically — with approvals, audit logs, and fast releases.",
      cta_access: "Request early access",
      cta_scope: "View scope",
      hero_card_title: "Platform core",
      hero_card_body: "We host GitHub + VPS + deploy. The customer only owns the domain and uses their own GPT account to create and maintain the website.",
      m1: "Fast releases",
      m1s: "Atomic deploy + rollback and dashboard status.",
      m2: "BYO-AI",
      m2s: "Customers connect their own GPT/AI for content updates.",
      m3: "Modules",
      m3s: "Vipps, analytics, forms, chat and more — in minutes.",

      f_title: "Why LiveMesh",
      f1t:"You own the domain. We handle the rest.",
      f1b:"Hosting, repo, CI/CD, SSL, and operations in one automated flow.",
      f2t:"AI updates — with governance.",
      f2b:"Changes can go through PR/preview before publishing (safe and professional).",
      f3t:"Scalable B2B model.",
      f3b:"Multi-tenant dashboard, audit logs, modules, and standardized onboarding.",

      partners_title:"Partners / ecosystem",
      partners_sub:"Replace the names with your real partner logos when ready.",

      build_title:"MVP → launch",
      build_left_title:"MVP (now)",
      build_left_body:"Onboarding (domain/DNS), repo from template, CI/CD to VPS, SSL, status and rollback.",
      build_right_title:"V1 (launch)",
      build_right_body:"AI PR-flow, module system (Vipps etc.), multi-tenant admin, and scalable operations.",

      footer_note:"LiveMesh is a product concept in development. Content and specifications may change."
    }
  };

  function setActiveNav(){
    const path = location.pathname.split("/").pop() || "index.html";
    document.querySelectorAll("[data-nav]").forEach(a=>{
      const target = a.getAttribute("href");
      if(target === path) a.classList.add("active");
      else a.classList.remove("active");
    });
  }

  function applyLang(lang){
    const dict = I18N[lang] || I18N.no;
    document.documentElement.setAttribute("lang", lang === "en" ? "en" : "no");
    localStorage.setItem("lm_lang", lang);

    document.querySelectorAll("[data-i18n]").forEach(el=>{
      const key = el.getAttribute("data-i18n");
      if(dict[key] !== undefined) el.textContent = dict[key];
    });

    // Flag swap: show the opposite flag icon as the toggle indicator
    const flag = document.getElementById("langFlag");
    if(flag){
      flag.src = lang === "en" ? "data:image/svg+xml;utf8," + encodeURIComponent(flagNO()) : "data:image/svg+xml;utf8," + encodeURIComponent(flagEN());
      flag.alt = lang === "en" ? "Norsk" : "English";
    }
  }

  // Minimal inline SVG flags (no external assets)
  function flagEN(){
    return `<svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64">
      <rect width="64" height="64" fill="#0A2A66"/>
      <path d="M0 0 L64 64 M64 0 L0 64" stroke="#fff" stroke-width="14"/>
      <path d="M0 0 L64 64 M64 0 L0 64" stroke="#D11F2D" stroke-width="8"/>
      <rect x="0" y="26" width="64" height="12" fill="#fff"/>
      <rect x="26" y="0" width="12" height="64" fill="#fff"/>
      <rect x="0" y="28.5" width="64" height="7" fill="#D11F2D"/>
      <rect x="28.5" y="0" width="7" height="64" fill="#D11F2D"/>
    </svg>`;
  }
  function flagNO(){
    return `<svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64">
      <rect width="64" height="64" fill="#C8102E"/>
      <rect x="0" y="26" width="64" height="12" fill="#fff"/>
      <rect x="18" y="0" width="12" height="64" fill="#fff"/>
      <rect x="0" y="28.5" width="64" height="7" fill="#003087"/>
      <rect x="20.5" y="0" width="7" height="64" fill="#003087"/>
    </svg>`;
  }

  function initLang(){
    const saved = localStorage.getItem("lm_lang");
    const lang = saved || "no";
    applyLang(lang);

    const btn = document.getElementById("langBtn");
    if(btn){
      btn.addEventListener("click", ()=>{
        const current = localStorage.getItem("lm_lang") || "no";
        applyLang(current === "no" ? "en" : "no");
      });
    }
  }

  // Protected contact rendering (harder to copy, but clickable)
  function renderProtectedContacts(){
    const emailEl = document.getElementById("protEmail");
    const phoneEl = document.getElementById("protPhone");
    const waEl = document.getElementById("protWA");

    // Customize here:
    const email = ["khabat","setaei.com"].join("@"); // khabat@setaei.com
    const phone = "+4741227175";
    const waPhone = "+4741227175";

    if(emailEl){
      emailEl.textContent = email;
      emailEl.setAttribute("href", "mailto:" + email);
      emailEl.classList.add("protected");
      emailEl.addEventListener("copy", (e)=>e.preventDefault());
    }
    if(phoneEl){
      phoneEl.textContent = phone;
      phoneEl.setAttribute("href", "tel:" + phone.replace(/\s/g,""));
      phoneEl.classList.add("protected");
      phoneEl.addEventListener("copy", (e)=>e.preventDefault());
    }
    if(waEl){
      const clean = waPhone.replace(/[^\d]/g,"");
      waEl.setAttribute("href", "https://wa.me/" + clean);
      waEl.classList.add("protected");
      waEl.addEventListener("copy", (e)=>e.preventDefault());
    }
  }

  // Duplicate ticker content for seamless loop
  function initTicker(){
    const track = document.querySelector(".ticker-track");
    if(!track) return;
    const items = Array.from(track.children);
    items.forEach(node => track.appendChild(node.cloneNode(true)));
  }

  document.addEventListener("DOMContentLoaded", ()=>{
    setActiveNav();
    initLang();
    initTicker();
    renderProtectedContacts();
  });
})();
