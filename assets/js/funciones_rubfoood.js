//animacion  section
const images = document.querySelectorAll('.animated-image');

const imageObserver = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
        } else {
            entry.target.classList.remove('visible');
        }
    });
});

images.forEach(image => {
    imageObserver.observe(image);
});

 