document.querySelectorAll('.description-toggle').forEach(button => {
    button.addEventListener('click', () => {
        const content = document.querySelector(button.dataset.target);
        content.classList.toggle('active');
    });
});