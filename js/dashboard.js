const navLink = document.querySelectorAll('.nav_link'),
      dashboard = document.querySelector('.dashboard'),
      nav = document.querySelector('nav'),
      profile = document.querySelector('.profile'),
      menu = document.querySelector('.menu'),
      navLinkA = document.querySelectorAll('.nav_link_a');
for (let i = 0; i < navLink.length; i++) {
    navLink[i].addEventListener('click', function(){
        navLinkA[i].click();
    });
}
profile.addEventListener('click', function(){
    window.location = this.getAttribute('data-href');
});
document.addEventListener('click', function(e){
    if (e.target != menu.querySelector('i') && e.target != nav) {
        dashboard.classList.remove('active');
    } else{
        dashboard.classList.add('active');
    }
});