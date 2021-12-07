const navLink = document.querySelectorAll('.nav_link'),
      navLinkA = document.querySelectorAll('.nav_link_a');
for (let i = 0; i < navLink.length; i++) {
    navLink[i].addEventListener('click', function(){
        navLinkA[i].click();
    });
}