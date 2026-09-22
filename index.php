<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Curio — playful software development and digital design.">
    <title>Curio — Software development</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <header class="topbar">
        <div class="container">
            <a class="brand" href="#top" aria-label="Curio home">
                <svg class="brand-mark" viewBox="0 0 48 48" aria-hidden="true">
                    <rect x="6" y="11" width="36" height="26" rx="3" />
                    <path d="M12 17h3M20 17h3M28 17h3M36 17h0M12 23h3M20 23h3M28 23h3M36 23h0M12 29h15M31 29h5" />
                </svg>
                <span>Curio</span>
            </a>
            <nav class="nav" aria-label="Main navigation">
                <a href="#home">Home</a>
                <a href="#services">Vakken</a>
                <a href="#work">Huiswerk</a>
                <a href="#about">Versnellen</a>
            </nav>
        </div>
    </header>

    <main id="top">
        <section class="hero" id="home">
            <div class="container">
                <p class="eyebrow">Software development</p>
                <h1>Curio</h1>
                <p class="hero-intro">
                    Open-dag website gemaakt door Famke van Den Keijbus.
                </p>
            </div>
        </section>

        <section class="services" id="services" aria-label="Vakken">
            <div class="container services-grid">
                <article class="service">
                    <span class="circle">
                        <svg class="service-logo" viewBox="0 0 48 48" aria-hidden="true">
                            <path d="M17 16h-3a3 3 0 0 0-3 3v3a3 3 0 0 0 3 3h6a3 3 0 0 1 3 3v3a3 3 0 0 1-3 3h-3" />
                            <path d="M31 32h3a3 3 0 0 0 3-3v-3a3 3 0 0 0-3-3h-6a3 3 0 0 1-3-3v-3a3 3 0 0 1 3-3h3" />
                        </svg>
                    </span>
                    <h2>Native</h2>
                    <p>Python, C#.<br>
                Grotendeels programmas en zelfs games!</p>
                </article>
                <article class="service">
                    <span class="circle">
                        <svg class="service-logo" viewBox="0 0 48 48" aria-hidden="true">
                            <path d="m20 14-10 10 10 10" />
                            <path d="m28 14 10 10-10 10" />
                            <path d="M26 11 22 37" />
                        </svg>
                    </span>
                    <h2>Web</h2>
                    <p>HTML, CSS, JAVASCRIPT, PHP.<br>Alles over website development.</p>
                </article>
                <article class="service">
                    <span class="circle">
                        <svg class="service-logo" viewBox="0 0 48 48" aria-hidden="true">
                            <path d="M14 10h15l6 6v22H14z" />
                            <path d="M29 10v7h6M19 24h11M19 30h11" />
                        </svg>
                    </span>
                    <h2>Pro</h2>
                    <p>Trello, Github, Plannen<br>Alle stappen dat je moet maken voor het project begint.</p>
                </article>
            </div>
        </section>

        <section class="work" id="work">
            <div class="container">
                <div class="work-grid">
                    <div>
                        <h2>Huiswerk</h2>
                        <p>
                            Voorbeelden van het huiswerk voor de studie Software Development.<br>
                            HTML, CSS, PYTHON, ETC.
                        </p>
                    </div>

                    <div class="project-list" id="project-list">
                        <article class="project">
                            <div class="project-thumb">
                                <img class="project-image" src="Useless%20Box.png" alt="Useless Box project">
                            </div>
                            <div>
                                <h3>Useless Box</h3>
                                <p>Veel doet het niet, maar toch is het code!</p>
                            </div>
                        </article>
                        <article class="project">
                            <div class="project-thumb">
                                <img class="project-image" src="Week%206%20Website.png" alt="Week 6 Website project">
                            </div>
                            <div>
                                <h3>BoodschApp</h3>
                                <p>Je boodschappen lijstje, maar als een website!</p>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
            <button class="projects-toggle" type="button" aria-controls="project-list" aria-expanded="true" aria-label="Hide projects">
                <span class="toggle-icon" aria-hidden="true">⌄</span>
            </button>
        </section>

        <section class="about" id="about">
            <div class="container">
                <h2>Versnellen</h2>
                <p>
                    Als je goed genoeg bent in programmeren, kan je de opleiding versnellen. Hierdoor sla je ongeveer een half-jaar aan school over en mag je eerder eindstage doen.
                </p>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container footer-inner">
            <a class="back-to-top" href="#top">Terug naar boven ↑</a>
            <p>© 2026 Curio</p>
        </div>
    </footer>
</body>
</html>
