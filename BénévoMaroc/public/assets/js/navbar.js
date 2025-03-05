
const mobileMenuButton = document.getElementById('mobile-menu-button');
const mobileMenu = document.getElementById('mobile-menu');
const menuOpenIcon = document.getElementById('menu-open-icon');
const menuCloseIcon = document.getElementById('menu-close-icon');

mobileMenuButton.addEventListener('click', () => {
    mobileMenu.classList.toggle('open');
    menuOpenIcon.classList.toggle('hidden');
    menuCloseIcon.classList.toggle('hidden');
});

const mobileLinks = mobileMenu.querySelectorAll('a');
mobileLinks.forEach(link => {
    link.addEventListener('click', () => {
        mobileMenu.classList.remove('open');
        menuOpenIcon.classList.remove('hidden');
        menuCloseIcon.classList.add('hidden');
    });
});

document.addEventListener('click', (e) => {
    if (!mobileMenu.contains(e.target) && e.target !== mobileMenuButton && !mobileMenuButton.contains(e.target)) {
        mobileMenu.classList.remove('open');
        menuOpenIcon.classList.remove('hidden');
        menuCloseIcon.classList.add('hidden');
    }
});
