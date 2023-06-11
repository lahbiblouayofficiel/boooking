const toggleButton = document.getElementsByClassName('toggle-button')[0]
const navbarLinks = document.getElementsByClassName('nav-links')[0]

toggleButton.addEventListener('click', () => {
  navbarLinks.classList.toggle('active')
})

const navbar = document.getElementById('navbar');
let prevScrollPos = window.pageYOffset;

window.addEventListener('scroll', () => {
    const currentScrollPos = window.pageYOffset;

    if (prevScrollPos > currentScrollPos) {
        navbar.classList.remove('hidden');
    } else {
        navbar.classList.add('hidden');
    }

    prevScrollPos = currentScrollPos;
});
