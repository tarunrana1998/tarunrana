import './bootstrap';

// Theme handling is kept client-side for instant switch and zero backend coupling.
const storageKey = 'portfolio-theme';
const root = document.documentElement;

const applyTheme = (theme) => {
    root.dataset.theme = theme;
    root.style.colorScheme = theme;
    const toggle = document.querySelector('[data-theme-toggle]');
    if (toggle) {
        toggle.setAttribute('aria-pressed', theme === 'dark' ? 'true' : 'false');
        toggle.querySelector('[data-theme-label]').textContent = theme === 'dark' ? 'Dark' : 'Light';
    }
};

const storedTheme = localStorage.getItem(storageKey);
applyTheme(storedTheme || 'dark');

document.addEventListener('DOMContentLoaded', () => {
    const toggle = document.querySelector('[data-theme-toggle]');
    if (toggle) {
        toggle.addEventListener('click', () => {
            const nextTheme = root.dataset.theme === 'dark' ? 'light' : 'dark';
            localStorage.setItem(storageKey, nextTheme);
            applyTheme(nextTheme);
        });
    }

    // Intersection observer keeps motion subtle and performance-friendly.
    const revealItems = document.querySelectorAll('[data-reveal]');
    if (revealItems.length) {
        revealItems.forEach((item) => item.classList.add('reveal'));
        const observer = new IntersectionObserver(
            (entries, obs) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        obs.unobserve(entry.target);
                    }
                });
            },
            { threshold: 0.12 }
        );
        revealItems.forEach((item) => observer.observe(item));
    }
});
