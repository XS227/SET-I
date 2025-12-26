// site.js
(function () {
  // year
  const y = document.getElementById("year");
  if (y) y.textContent = new Date().getFullYear();

  // active nav link
  const path = (location.pathname.split("/").pop() || "index.html").toLowerCase();
  document.querySelectorAll("[data-nav]").forEach(a => {
    const href = (a.getAttribute("href") || "").toLowerCase();
    if (href === path) a.classList.add("active");
    if (path === "" && href === "index.html") a.classList.add("active");
  });
})();
