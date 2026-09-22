const toggle = document.querySelector('.projects-toggle');
const projects = document.querySelector('#project-list');

if (toggle && projects) {
  let open = true;

  toggle.addEventListener('click', () => {
    open = !open;
    toggle.setAttribute('aria-expanded', String(open));
    toggle.setAttribute('aria-label', open ? 'Hide projects' : 'Show projects');
    projects.classList.toggle('is-collapsed', !open);
  });
}
