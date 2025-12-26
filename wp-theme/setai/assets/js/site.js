(function(){
  const y=document.getElementById('year');
  if(y) y.textContent=new Date().getFullYear();

  const path=(location.pathname.replace(/\/$/,'')||'/').toLowerCase();
  document.querySelectorAll('[data-nav]').forEach(a=>{
    try{
      const href=new URL(a.getAttribute('href'), location.origin).pathname.replace(/\/$/,'').toLowerCase();
      if(href===path) a.classList.add('active');
    }catch(err){/* no-op */}
  });
})();
