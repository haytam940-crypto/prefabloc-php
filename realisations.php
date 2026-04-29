<?php
$meta_title = 'Réalisations — Prefabloc';
$meta_desc  = 'Plus de 120 ouvrages réceptionnés en 15 ans : immeubles résidentiels, bâtiments industriels, voirie, hôtels rénovés. Consultez notre portfolio de chantiers réalisés au Maroc.';
include 'includes/header.php';

$projects = [
  ['residence-jardins-palmeraie','Résidence Les Jardins','Résidentiel','residential','Réalisé','Marrakech','18 mois','3 800 m²','assets/images/realisations/IMG_1342.jpg'],
  ['complexe-palm-casablanca','Complexe Palm Résidences','Résidentiel','residential','Réalisé','Casablanca','22 mois','5 200 m²','assets/images/realisations/IMG_4201.jpg'],
  ['residence-prestige-pool','Résidence Prestige avec Piscine','Résidentiel','residential','Réalisé','Rabat','20 mois','4 400 m²','assets/images/realisations/IMG_4202.jpg'],
  ['immeuble-belveder','Immeuble Belvédère R+7','Résidentiel','residential','En cours','Casablanca','24 mois','4 800 m²','assets/images/realisations/IMG_4170.jpg'],
  ['immeuble-structure-ba','Immeuble R+5 Structure BA','Résidentiel','residential','En cours','Casablanca','26 mois','3 600 m²','assets/images/realisations/IMG_4171.jpg'],
  ['facade-residence-moderne','Résidence Moderne Façade Mixte','Résidentiel','residential','Réalisé','Rabat','16 mois','2 900 m²','assets/images/realisations/IMG_4194.jpg'],
  ['villa-prestige-piscine','Villa Prestige & Aménagement','Résidentiel','residential','Réalisé','Marrakech','14 mois','620 m²','assets/images/realisations/IMG_4527.jpg'],
  ['lotissement-maisons','Lotissement Villas Individuelles','Résidentiel','residential','En cours','Casablanca','30 mois','8 500 m²','assets/images/realisations/IMG_5070.jpg'],
  ['residence-al-waha','Résidence Al Waha','Résidentiel','residential','Réalisé','Mohammedia','18 mois','3 200 m²','assets/images/realisations/IMG_5076.jpg'],
  ['immeuble-commerces-rdc','Immeuble Mixte Commerces R+4','Commercial','commercial','Réalisé','Casablanca','20 mois','2 800 m²','assets/images/realisations/IMG_4544.jpg'],
  ['gros-oeuvre-structure','Gros Œuvre Poteaux-Dalles','Résidentiel','residential','En cours','Tanger','12 mois','2 400 m²','assets/images/realisations/IMG_0295.jpg'],
  ['chantier-structure-marrakech','Chantier Structure Marrakech','Résidentiel','residential','En cours','Marrakech','15 mois','3 000 m²','assets/images/realisations/IMG_4458.jpg'],
];

$cats = ['all' => 'Tous les projets', 'residential' => 'Résidentiel', 'commercial' => 'Commercial', 'industrial' => 'Industriel', 'tp' => 'Travaux Publics', 'renovation' => 'Rénovation'];
$counts = ['all' => count($projects)];
foreach ($projects as $p) {
  $counts[$p[3]] = ($counts[$p[3]] ?? 0) + 1;
}

// Pattern de tailles : large(2col) small(1col) medium(1col) ...
// On va utiliser un layout bento : certains projets span 2 colonnes
$sizes = ['large','small','small','small','large','small','small','small','large','small','small','small'];
?>

<!-- Hero éditorial -->
<div class="rl-hero">
  <div class="rl-hero-bg">
    <img src="assets/images/realisations/IMG_4201.jpg" alt="Réalisations Prefabloc">
    <div class="rl-hero-overlay"></div>
  </div>
  <div class="container rl-hero-inner">
    <div class="breadcrumb" style="margin-bottom:20px"><a href="index.php">Accueil</a><span>›</span><span>Réalisations</span></div>
    <div class="rl-hero-content">
      <div>
        <div class="rl-hero-tag">Portfolio — 15 ans de terrain</div>
        <h1 class="rl-hero-title">NOS CHANTIERS<br><span>LIVRÉS & EN COURS</span></h1>
        <p class="rl-hero-sub">120+ ouvrages réceptionnés dans 8 régions du Maroc — du logement individuel à la plateforme logistique.</p>
      </div>
      <div class="rl-hero-stats">
        <div class="rl-stat"><div class="rl-stat-val">120+</div><div class="rl-stat-lbl">Ouvrages livrés</div></div>
        <div class="rl-stat-sep"></div>
        <div class="rl-stat"><div class="rl-stat-val">15</div><div class="rl-stat-lbl">Ans d'expérience</div></div>
        <div class="rl-stat-sep"></div>
        <div class="rl-stat"><div class="rl-stat-val">8</div><div class="rl-stat-lbl">Régions actives</div></div>
        <div class="rl-stat-sep"></div>
        <div class="rl-stat"><div class="rl-stat-val"><?= count($projects) ?></div><div class="rl-stat-lbl">Fiches détaillées</div></div>
      </div>
    </div>
  </div>
</div>

<!-- Navigation filtres tabs -->
<div class="rl-tabs-bar">
  <div class="container">
    <div class="rl-tabs" role="tablist">
      <?php foreach ($cats as $key => $label): ?>
      <button class="rl-tab <?= $key === 'all' ? 'active' : '' ?>" data-filter="<?= $key ?>" role="tab">
        <?= $label ?>
        <?php if (isset($counts[$key])): ?>
        <span class="rl-tab-count"><?= $counts[$key] ?></span>
        <?php endif ?>
      </button>
      <?php endforeach ?>
    </div>
    <div class="rl-view-toggle">
      <button class="rl-view-btn active" id="btnBento" title="Vue bento"><?= icon('columns',16) ?></button>
      <button class="rl-view-btn" id="btnList" title="Vue liste"><?= icon('menu',16) ?></button>
    </div>
  </div>
</div>

<!-- Grille Bento -->
<div class="rl-section">
  <div class="container">
    <div class="rl-bento" id="rlBento">
      <?php foreach ($projects as $i => [$slug, $title, $cat, $catClass, $status, $city, $dur, $surf, $img]):
        $isDone = $status === 'Réalisé';
        $sz = $sizes[$i] ?? 'small';
      ?>
      <div class="rl-card rl-<?= $sz ?>" data-category="<?= $catClass ?>">
        <a href="projet.php?slug=<?= $slug ?>" class="rl-card-link" aria-label="<?= htmlspecialchars($title) ?>"></a>
        <img class="rl-card-img" src="<?= $img ?>" alt="<?= htmlspecialchars($title) ?>" loading="lazy">
        <div class="rl-card-overlay"></div>

        <!-- Badges top -->
        <div class="rl-card-top">
          <span class="rl-badge-cat"><?= $cat ?></span>
          <span class="rl-badge-status <?= $isDone ? 'done' : 'ongoing' ?>"><?= $isDone ? 'Réalisé' : 'En cours' ?></span>
        </div>

        <!-- Info bottom -->
        <div class="rl-card-bottom">
          <div class="rl-card-city"><?= icon('pin',12) ?> <?= $city ?></div>
          <h3 class="rl-card-title"><?= htmlspecialchars($title) ?></h3>
          <div class="rl-card-meta">
            <span><?= $surf ?></span>
            <span class="rl-dot">·</span>
            <span><?= $dur ?></span>
          </div>
          <div class="rl-card-cta">Voir la fiche <?= icon('arrow-right',14) ?></div>
        </div>
      </div>
      <?php endforeach ?>
    </div>

    <!-- Vue liste (cachée par défaut) -->
    <div class="rl-list" id="rlList" style="display:none">
      <?php foreach ($projects as $i => [$slug, $title, $cat, $catClass, $status, $city, $dur, $surf, $img]):
        $isDone = $status === 'Réalisé';
      ?>
      <a href="projet.php?slug=<?= $slug ?>" class="rl-list-item" data-category="<?= $catClass ?>">
        <div class="rl-list-num"><?= str_pad($i+1, 2, '0', STR_PAD_LEFT) ?></div>
        <div class="rl-list-thumb">
          <img src="<?= $img ?>" alt="<?= htmlspecialchars($title) ?>">
        </div>
        <div class="rl-list-info">
          <div class="rl-list-cat"><?= $cat ?></div>
          <div class="rl-list-title"><?= htmlspecialchars($title) ?></div>
        </div>
        <div class="rl-list-details">
          <span><?= icon('pin',13) ?> <?= $city ?></span>
          <span><?= icon('timer',13) ?> <?= $dur ?></span>
          <span><?= $surf ?></span>
        </div>
        <div class="rl-list-status <?= $isDone ? 'done' : 'ongoing' ?>"><?= $status ?></div>
        <div class="rl-list-arrow"><?= icon('arrow-right',16) ?></div>
      </a>
      <?php endforeach ?>
    </div>
  </div>
</div>

<script>
// Filtre
document.querySelectorAll('.rl-tab').forEach(btn => {
  btn.addEventListener('click', () => {
    document.querySelectorAll('.rl-tab').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
    const filter = btn.dataset.filter;
    document.querySelectorAll('.rl-card, .rl-list-item').forEach(el => {
      const show = filter === 'all' || el.dataset.category === filter;
      el.style.display = show ? '' : 'none';
    });
  });
});

// Toggle vue bento / liste
const btnBento = document.getElementById('btnBento');
const btnList  = document.getElementById('btnList');
const bento    = document.getElementById('rlBento');
const list     = document.getElementById('rlList');

btnBento.addEventListener('click', () => {
  bento.style.display = ''; list.style.display = 'none';
  btnBento.classList.add('active'); btnList.classList.remove('active');
});
btnList.addEventListener('click', () => {
  list.style.display = ''; bento.style.display = 'none';
  btnList.classList.add('active'); btnBento.classList.remove('active');
});
</script>

<section class="cta-banner">
  <div class="container">
    <h2 class="reveal up">VOTRE PROJET REJOINDRA<br>CES <span class="gold">RÉFÉRENCES</span></h2>
    <p class="reveal up reveal-delay-1">Promoteurs, industriels ou collectivités — soumettez votre programme et obtenez une offre technique et financière complète sous 48h ouvrées.</p>
    <div class="cta-btns reveal up reveal-delay-2">
      <a href="contact.php" class="btn btn-gold">Soumettre mon projet →</a>
      <a href="services.php" class="btn btn-outline-white">Nos domaines d'intervention</a>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
