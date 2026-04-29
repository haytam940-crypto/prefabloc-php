<?php
$meta_title = 'Réalisations — Prefabloc';
$meta_desc  = 'Plus de 120 ouvrages réceptionnés en 15 ans : immeubles résidentiels, bâtiments industriels, voirie, hôtels rénovés. Consultez notre portfolio de chantiers réalisés au Maroc.';
include 'includes/header.php';

$projects = [
  ['residence-jardins-palmeraie','Résidence Les Jardins','Résidentiel','residential','Réalisé','Marrakech','18 mois','assets/images/realisations/IMG_1342.jpg'],
  ['complexe-palm-casablanca','Complexe Palm Résidences','Résidentiel','residential','Réalisé','Casablanca','22 mois','assets/images/realisations/IMG_4201.jpg'],
  ['residence-prestige-pool','Résidence Prestige avec Piscine','Résidentiel','residential','Réalisé','Rabat','20 mois','assets/images/realisations/IMG_4202.jpg'],
  ['immeuble-belveder','Immeuble Résidentiel Belvédère','Résidentiel','residential','En cours','Casablanca','24 mois','assets/images/realisations/IMG_4170.jpg'],
  ['immeuble-structure-ba','Immeuble R+5 Structure BA','Résidentiel','residential','En cours','Casablanca','26 mois','assets/images/realisations/IMG_4171.jpg'],
  ['facade-residence-moderne','Résidence Moderne Façade Mixte','Résidentiel','residential','Réalisé','Rabat','16 mois','assets/images/realisations/IMG_4194.jpg'],
  ['villa-prestige-piscine','Villa Prestige & Aménagement','Résidentiel','residential','Réalisé','Marrakech','14 mois','assets/images/realisations/IMG_4527.jpg'],
  ['lotissement-maisons','Lotissement Villas Individuelles','Résidentiel','residential','En cours','Casablanca','30 mois','assets/images/realisations/IMG_5070.jpg'],
  ['residence-al-waha','Résidence Al Waha','Résidentiel','residential','Réalisé','Mohammedia','18 mois','assets/images/realisations/IMG_5076.jpg'],
  ['immeuble-commerces-rdc','Immeuble Mixte Commerces R+4','Commercial','commercial','Réalisé','Casablanca','20 mois','assets/images/realisations/IMG_4544.jpg'],
  ['gros-oeuvre-structure','Gros Œuvre — Structure Poteaux-Dalles','Résidentiel','residential','En cours','Tanger','12 mois','assets/images/realisations/IMG_0295.jpg'],
  ['chantier-structure-marrakech','Chantier Structure Marrakech','Résidentiel','residential','En cours','Marrakech','15 mois','assets/images/realisations/IMG_4458.jpg'],
];

$cats = ['all' => 'Tous', 'residential' => 'Résidentiel', 'commercial' => 'Commercial', 'industrial' => 'Industriel', 'tp' => 'Travaux Publics', 'renovation' => 'Rénovation'];
$counts = ['all' => count($projects)];
foreach ($projects as $p) {
  $counts[$p[3]] = ($counts[$p[3]] ?? 0) + 1;
}
?>

<div class="page-hero">
  <div class="container">
    <div class="breadcrumb"><a href="index.php">Accueil</a><span>›</span><span>Réalisations</span></div>
    <h1>Nos Références de Chantiers</h1>
    <p>Plus de 120 ouvrages réceptionnés en 15 ans dans 8 régions du Maroc — du logement individuel à la plateforme logistique de grande envergure.</p>
  </div>
</div>

<section class="section">
  <div class="container">
    <div class="sec-head">
      <span class="sec-tag reveal up">Portfolio</span>
      <h2 class="sec-title reveal up reveal-delay-1">OUVRAGES LIVRÉS<br>& EN COURS</h2>
      <div class="divider-line reveal up reveal-delay-2"></div>
      <p class="sec-sub reveal up reveal-delay-3"><?= count($projects) ?> fiches chantier détaillées : programme, superficie, durée d'exécution et photos de réalisation.</p>
    </div>

    <!-- Filtres -->
    <div class="filters reveal up">
      <?php foreach ($cats as $key => $label): ?>
      <button class="filter-btn <?= $key === 'all' ? 'active' : '' ?>" data-filter="<?= $key ?>">
        <?= $label ?>
        <?php if ($key !== 'all' && isset($counts[$key])): ?>
        <span class="count">(<?= $counts[$key] ?>)</span>
        <?php endif ?>
      </button>
      <?php endforeach ?>
    </div>

    <!-- Grille -->
    <div class="projects-grid" id="projectsGrid">
      <?php foreach ($projects as $i => [$slug, $title, $cat, $catClass, $status, $city, $dur, $img]):
        $statusClass = $status === 'Réalisé' ? 'badge-status-done' : 'badge-status-ongoing';
      ?>
      <div class="project-card reveal scale reveal-delay-<?= ($i % 3) + 1 ?>" data-category="<?= $catClass ?>">
        <img class="project-img" src="<?= $img ?>" alt="<?= htmlspecialchars($title) ?>" loading="lazy">
        <div class="project-overlay"></div>
        <div class="project-badges">
          <span class="badge badge-cat"><?= $cat ?></span>
          <span class="badge <?= $statusClass ?>"><?= $status ?></span>
        </div>
        <div class="project-info">
          <div class="project-cat-label"><?= $cat ?></div>
          <h3 class="project-title"><?= htmlspecialchars($title) ?></h3>
          <div class="project-meta">
            <span><?= icon('pin',14) ?> <?= $city ?></span>
            <span><?= icon('timer',14) ?> <?= $dur ?></span>
          </div>
          <span class="project-see">Fiche chantier →</span>
        </div>
        <a href="projet.php?slug=<?= $slug ?>" style="position:absolute;inset:0;z-index:5" aria-label="Voir <?= htmlspecialchars($title) ?>"></a>
      </div>
      <?php endforeach ?>
    </div>
  </div>
</section>

<!-- Galerie Photos -->
<section class="section">
  <div class="container">
    <div class="sec-head">
      <span class="sec-tag reveal up">Galerie</span>
      <h2 class="sec-title reveal up reveal-delay-1">PHOTOS<br>DE CHANTIERS</h2>
      <div class="divider-line reveal up reveal-delay-2"></div>
    </div>

    <div class="gallery-grid reveal up reveal-delay-1">
      <?php
      $gallery = [
        'IMG_4201','IMG_1342','IMG_5076','IMG_4527',
        'IMG_4170','IMG_4194','IMG_5070','IMG_4202',
        'IMG_4171','IMG_4544','IMG_0295','IMG_4458',
      ];
      foreach ($gallery as $idx => $f): ?>
      <div class="gallery-item" onclick="openLightbox('assets/images/realisations/<?= $f ?>.jpg')">
        <img src="assets/images/realisations/<?= $f ?>.jpg" alt="Chantier Prefabloc" loading="lazy">
        <div class="gallery-zoom"><?= icon('search',18) ?></div>
      </div>
      <?php endforeach ?>
    </div>
  </div>
</section>

<!-- Lightbox -->
<div id="lightbox" onclick="closeLightbox()" style="display:none;position:fixed;inset:0;background:rgba(0,0,0,.92);z-index:9999;align-items:center;justify-content:center;cursor:zoom-out;">
  <img id="lightbox-img" src="" alt="" style="max-width:90vw;max-height:90vh;object-fit:contain;border-radius:8px;box-shadow:0 0 60px rgba(0,0,0,.8);">
  <button onclick="closeLightbox()" style="position:fixed;top:20px;right:28px;background:none;border:none;color:#fff;font-size:36px;cursor:pointer;line-height:1;">×</button>
</div>

<script>
function openLightbox(src){
  document.getElementById('lightbox-img').src = src;
  const lb = document.getElementById('lightbox');
  lb.style.display = 'flex';
  document.body.style.overflow = 'hidden';
}
function closeLightbox(){
  document.getElementById('lightbox').style.display = 'none';
  document.body.style.overflow = '';
}
document.addEventListener('keydown', e => { if(e.key==='Escape') closeLightbox(); });
</script>

<section class="cta-banner">
  <div class="container">
    <h2 class="reveal up">VOTRE PROJET REJOINDRA<br>CES <span class="gold">RÉFÉRENCES</span></h2>
    <p class="reveal up reveal-delay-1">Promoteurs, industriels ou collectivités — soumettez votre programme et obtenez une offre technique et financière complète sous 48h ouvrées.</p>
    <div class="cta-btns reveal up reveal-delay-2">
      <a href="contact.php" class="btn btn-gold">Soumettre mon projet →</a>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
