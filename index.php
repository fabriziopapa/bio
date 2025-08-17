<?php
// ----- Config rapida -----
$name        = "Fabrizio Papa";
$role        = "Ufficio Stipendi · Università Parthenope";
$tagline     = "Etica prima di tutto. Curiosità come carburante.";
$email       = "tuo@email.it";       // opzionale, per il link contatti
$linkedin    = "https://www.linkedin.com/in/tuo-profilo";
"github"     = "https://github.com/fabriziopapa";
$location    = "Napoli, Italia";

// Data ultimo update (dal file)
$last_update = date("d/m/Y H:i", filemtime(__FILE__));
?>
<!doctype html>
<html lang="it">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= htmlspecialchars($name) ?> — Sito personale</title>
  <meta name="description" content="Pagina personale di <?= htmlspecialchars($name) ?>. <?= htmlspecialchars($tagline) ?>">
  <meta property="og:title" content="<?= htmlspecialchars($name) ?>">
  <meta property="og:description" content="<?= htmlspecialchars($tagline) ?>">
  <meta property="og:type" content="website">
  <meta name="theme-color" content="#0ea5e9">

  <!-- Font: system stack per performance, fallback gradevole -->
  <style>
    :root{
      --bg: #0b0f14;
      --panel:#0f1720;
      --text:#e6edf3;
      --muted:#94a3b8;
      --accent:#0ea5e9;
      --ring: rgba(14,165,233,.35);
      --card:#111926;
      --card-border:#1f2a37;
    }
    @media (prefers-color-scheme: light){
      :root{
        --bg:#f8fafc; --panel:#ffffff; --text:#0f172a; --muted:#475569;
        --accent:#0ea5e9; --ring:rgba(14,165,233,.25);
        --card:#ffffff; --card-border:#e2e8f0;
      }
    }
    *{box-sizing:border-box}
    html,body{height:100%}
    body{
      margin:0; background:var(--bg); color:var(--text);
      font: 16px/1.6 ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, "Helvetica Neue", Arial;
      letter-spacing:.1px;
    }
    a{color:var(--accent); text-decoration:none}
    a:hover{text-decoration:underline}
    .container{max-width:1024px;margin:0 auto;padding:24px}
    header{
      position:sticky; top:0; z-index:50;
      backdrop-filter: blur(8px);
      background: color-mix(in oklab, var(--bg) 85%, transparent);
      border-bottom:1px solid var(--card-border);
    }
    nav{display:flex;align-items:center;gap:16px;justify-content:space-between}
    .brand{display:flex;align-items:center;gap:12px}
    .logo{
      width:40px;height:40px;border-radius:12px;
      background: radial-gradient(80% 80% at 30% 30%, #67e8f9 0%, #0ea5e9 60%, #1e293b 100%);
      box-shadow:0 0 0 6px var(--ring);
    }
    .menu{display:flex;gap:16px;flex-wrap:wrap}
    .btn{
      display:inline-flex;align-items:center;gap:8px;
      padding:10px 14px;border:1px solid var(--card-border);border-radius:12px;
      background:linear-gradient(180deg, color-mix(in oklab, var(--panel) 92%, transparent), var(--panel));
    }
    .btn:hover{box-shadow:0 0 0 6px var(--ring)}
    .hero{
      display:grid;grid-template-columns:1.2fr .8fr;gap:32px;align-items:center;
      padding-block:48px;border-bottom:1px solid var(--card-border);
    }
    .hero h1{font-size:clamp(28px,4vw,44px);line-height:1.15;margin:0 0 12px}
    .muted{color:var(--muted)}
    .pill{
      display:inline-block;padding:6px 10px;border-radius:999px;
      border:1px solid var(--card-border); background:var(--panel); font-size:12px;
    }
    .card{
      border:1px solid var(--card-border); border-radius:16px; padding:18px;
      background:var(--card);
    }
    .grid{display:grid;gap:16px}
    .grid-3{grid-template-columns:repeat(3,1fr)}
    .grid-2{grid-template-columns:repeat(2,1fr)}
    .section{padding-block:36px;border-bottom:1px solid var(--card-border)}
    footer{padding-block:28px;color:var(--muted);font-size:.95rem}
    img,video{max-width:100%;height:auto;border-radius:14px;border:1px solid var(--card-border)}
    @media (max-width:900px){
      .hero{grid-template-columns:1fr}
      .grid-3{grid-template-columns:1fr}
      .grid-2{grid-template-columns:1fr}
    }
  </style>
</head>
<body>
  <header>
    <div class="container">
      <nav>
        <div class="brand">
          <div class="logo" aria-hidden="true"></div>
          <div>
            <strong><?= htmlspecialchars($name) ?></strong><br>
            <span class="muted" style="font-size:.9rem"><?= htmlspecialchars($role) ?></span>
          </div>
        </div>
        <div class="menu">
          <a class="btn" href="#about">Chi sono</a>
          <a class="btn" href="#projects">Progetti</a>
          <a class="btn" href="#contact">Contatti</a>
        </div>
      </nav>
    </div>
  </header>

  <main class="container">
    <section class="hero">
      <div>
        <span class="pill">👋 Ciao, sono <?= htmlspecialchars($name) ?></span>
        <h1><?= htmlspecialchars($tagline) ?></h1>
        <p class="muted">Ricercatore eclettico tra scienza, tecnologia e umanesimo.  
          Lavoro a soluzioni pulite, chiare e utili. <?= htmlspecialchars($location) ?>.</p>
        <div style="display:flex;gap:12px;flex-wrap:wrap;margin-top:12px">
          <a class="btn" href="#projects">Vedi i progetti</a>
          <a class="btn" href="<?= htmlspecialchars($github) ?>" target="_blank" rel="noopener">GitHub</a>
          <a class="btn" href="<?= htmlspecialchars($linkedin) ?>" target="_blank" rel="noopener">LinkedIn</a>
        </div>
      </div>
      <div class="card">
        <!-- Sostituisci con una tua immagine (caricala in /www/assets/portrait.jpg) -->
        <img src="assets/portrait.jpg" alt="Ritratto di <?= htmlspecialchars($name) ?>" loading="lazy"
             onerror="this.src='data:image/svg+xml;utf8,<?xml version=&quot;1.0&quot;?><svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;800&quot; height=&quot;600&quot;><rect width=&quot;100%&quot; height=&quot;100%&quot; fill=&quot;%23111926&quot;/><text x=&quot;50%&quot; y=&quot;50%&quot; dominant-baseline=&quot;middle&quot; text-anchor=&quot;middle&quot; fill=&quot;%2394a3b8&quot; font-family=&quot;Arial&quot; font-size=&quot;22&quot;>Carica assets/portrait.jpg</text></svg>';">
      </div>
    </section>

    <section id="about" class="section">
      <h2>Chi sono</h2>
      <div class="grid grid-2">
        <div class="card">
          <p>Sono <?= htmlspecialchars($name) ?>. Mi occupo di processi e dati, con attenzione all’etica
          e alla qualità. Mi piace costruire strumenti semplici che risolvono problemi reali.</p>
          <ul>
            <li>🎯 Focus: automazione, web e dati</li>
            <li>🧰 Stack: PHP, Python/Flask, HTML/CSS/JS</li>
            <li>📍 <?= htmlspecialchars($location) ?></li>
          </ul>
        </div>
        <div class="card">
          <p><strong>Principi:</strong></p>
          <ul>
            <li>Etica prima del risultato</li>
            <li>Chiarezza e manutenzione nel tempo</li>
            <li>Imparare e condividere</li>
          </ul>
        </div>
      </div>
    </section>

    <section id="projects" class="section">
      <h2>Progetti</h2>
      <div class="grid grid-3">
        <div class="card">
          <h3>CSV → TXT App</h3>
          <p class="muted">Piccola utility per convertire CSV in TXT pronta per batch.</p>
          <a class="btn" href="https://github.com/fabriziopapa/csv-to-txt-app" target="_blank" rel="noopener">Repository</a>
        </div>
        <div class="card">
          <h3>Pagina personale</h3>
          <p class="muted">Questo template minimal, ottimizzato per hosting condivisi (Aruba).</p>
          <a class="btn" href="#contact">Richiedi il codice</a>
        </div>
        <div class="card">
          <h3>Esperimenti</h3>
          <p class="muted">Spazio per prove su dati, API e UI accessibili.</p>
          <a class="btn" href="<?= htmlspecialchars($github) ?>" target="_blank" rel="noopener">Vedi su GitHub</a>
        </div>
      </div>
    </section>

    <section id="contact" class="section">
      <h2>Contatti</h2>
      <div class="card">
        <p>Scrivimi per collaborazioni o idee.</p>
        <ul>
          <?php if (!empty($email)): ?>
          <li>📧 <a href="mailto:<?= htmlspecialchars($email) ?>"><?= htmlspecialchars($email) ?></a></li>
          <?php endif; ?>
          <li>🔗 <a href="<?= htmlspecialchars($linkedin) ?>" target="_blank" rel="noopener">LinkedIn</a></li>
          <li>💻 <a href="<?= htmlspecialchars($github) ?>" target="_blank" rel="noopener">GitHub</a></li>
        </ul>
      </div>
    </section>

    <footer>
      <div style="display:flex;gap:8px;align-items:center;flex-wrap:wrap">
        <span>© <?= date("Y") ?> <?= htmlspecialchars($name) ?></span>
        <span class="muted">·</span>
        <span class="muted">Ultimo aggiornamento: <?= $last_update ?></span>
      </div>
    </footer>
  </main>

  <script>
    // Scroll dolce
    document.querySelectorAll('a[href^="#"]').forEach(a=>{
      a.addEventListener('click', e=>{
        const id = a.getAttribute('href').slice(1);
        const el = document.getElementById(id);
        if(el){ e.preventDefault(); el.scrollIntoView({behavior:'smooth', block:'start'}); }
      });
    });
  </script>
</body>
</html>
