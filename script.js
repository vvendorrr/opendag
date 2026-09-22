const toggle = document.querySelector('.projects-toggle');
const projects = document.querySelector('#project-list');
let open = true;

//gemaakt met ai ik ga eerlijk zijn :cry:
toggle.addEventListener('click', () => {
    open = !open;

    toggle.setAttribute('aria-expanded', open);
    toggle.setAttribute('aria-label', open ? 'Hide projects' : 'Show projects');
    projects.classList.toggle('is-collapsed', !open);
});
