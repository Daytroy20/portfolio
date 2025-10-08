import AOS from 'aos'
import 'aos/dist/aos.css'

document.addEventListener('DOMContentLoaded', function () {
    AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true
    })

    const hamburger = document.querySelector('.hamburger')
    const navLinks = document.querySelector('.links')

    if (hamburger && navLinks) {
        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('active')
            navLinks.classList.toggle('active')
        })

        document.querySelectorAll('.links a').forEach(link => {
            link.addEventListener('click', () => {
                hamburger.classList.remove('active')
                navLinks.classList.remove('active')
            })
        })
    }
})
