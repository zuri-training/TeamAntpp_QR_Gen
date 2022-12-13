function menuOpen(){
    document.querySelector('.h-menu').classList.toggle('o-menu');
    document.querySelector('.h-nav-overflow').classList.toggle('unsee');
}

function profileDrop(){
    document.querySelector('.dropdown-content').classList.toggle('unsee');
}

function mobileMenu(){
    document.querySelector('.nav-links-parent').classList.toggle('unsee-mobile');
    document.querySelector('.dropdown-content').classList.toggle('unsee-mobile');
}