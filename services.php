<?php
$meta_title = 'Nos Services — Prefabloc';
$meta_desc  = 'Gros œuvre, charpente, VRD, rénovation, bureau d\'études : découvrez les cinq métiers de Prefabloc, entreprise générale de BTP au Maroc depuis 2009.';
include 'includes/header.php';

$services = [
  [
    'id'    => 'residentiel',
    'num'   => '01',
    'icon'  => 'home',
    'tag'   => 'Logement & Habitat',
    'title' => 'Construction Résidentielle',
    'img'   => 'assets/images/realisations/IMG_5076.jpg',
    'desc1' => 'De la villa individuelle à l\'immeuble R+10, notre département résidentiel prend en charge l\'ensemble des corps d\'état : terrassement et fouilles, fondations semelles filantes ou radier général, coulage des voiles et poteaux en béton armé dosé à 350 kg/m³, planchers hourdis, maçonnerie briques et finitions intérieures.',
    'desc2' => 'Notre bureau d\'études calcule les armatures conformément au BAEL 91 et au RPS 2011. Chaque lot est suivi par un conducteur de travaux certifié et un laborantin béton qui prélève les éprouvettes à la sortie du malaxeur.',
    'feats' => ['Fouilles et fondations profondes','Voiles BA calculés RPS 2011','Planchers hourdis et dalles pleines','Maçonnerie briques et parpaings','Isolation thermique RTCM','Menuiseries PVC/ALU et revêtements'],
  ],
  [
    'id'    => 'commercial',
    'num'   => '02',
    'icon'  => 'office',
    'tag'   => 'Bureaux & Commerce',
    'title' => 'Commercial, Tertiaire & Hôtellerie',
    'img'   => 'assets/images/realisations/IMG_4544.jpg',
    'desc1' => 'Bureaux, hôtels, centres commerciaux et cliniques imposent des contraintes spécifiques : grandes portées, charges d\'exploitation élevées et second œuvre de représentation. Prefabloc maîtrise les structures mixtes acier-béton, les fondations sur radier et les façades vitrées type rideau.',
    'desc2' => 'Nous intégrons dès la phase études les prescriptions CVC, électricité CFO/CFA, plomberie et sprinklers afin d\'éviter les reprises coûteuses. Nos équipes de second œuvre réalisent les cloisons sèches Knauf, faux plafonds suspendus et peintures époxy.',
    'feats' => ['Structures grandes portées (jusqu\'à 24 m)','Radiers sur sol compressible','Façades rideaux aluminium','Cloisons sèches et faux plafonds T15','Coordination CVC et fluides','Finitions marbre et pierre naturelle'],
  ],
  [
    'id'    => 'industriel',
    'num'   => '03',
    'icon'  => 'factory',
    'tag'   => 'Industrie & Logistique',
    'title' => 'Bâtiments Industriels & Logistiques',
    'img'   => 'assets/images/realisations/IMG_0295.jpg',
    'desc1' => 'Entrepôts, usines et plateformes cross-dock : nos ingénieurs structure dimensionnent des charpentes métalliques HEA/HEB pouvant atteindre 40 m de portée libre, sur fondations profondes adaptées à chaque nature de sol (pieux battus, micropieux ou puits marocains).',
    'desc2' => 'Nous réalisons les dallages industriels au laser screed, les fosses de maintenance, les quais de chargement et les réseaux incendie sprinklers conformes à la réglementation des zones industrielles et franches.',
    'feats' => ['Charpentes métalliques jusqu\'à 40 m','Dallages industriels Q4-Q5 laser screed','Fosses de décantation et bassins','Quais de chargement hydrauliques','Couvertures bac acier isolés','Réseaux incendie sprinklers certifiés'],
  ],
  [
    'id'    => 'vrd',
    'num'   => '04',
    'icon'  => 'road',
    'tag'   => 'VRD & Infrastructure',
    'title' => 'Travaux Publics & Infrastructure',
    'img'   => 'assets/images/realisations/IMG_4458.jpg',
    'desc1' => 'Notre division infrastructure répond aux appels d\'offres des communes, agences urbaines et opérateurs délégués. Terrassements mécanisés, réseaux d\'assainissement en béton armé centrifugé (DN 400 à DN 1200), chaussées en bicouche et béton bitumineux, ouvrages de franchissement.',
    'desc2' => 'Nous travaillons selon les prescriptions du CCDG Maroc et les normes NM pour les matériaux de voirie. Chaque lot fait l\'objet d\'un dossier d\'exécution, fiches de contrôle et rapport d\'autocontrôle remis à la réception.',
    'feats' => ['Terrassements mécanisés','Assainissement EU/EP DN 300 à 1200','Chaussées bicouche et BBSG','Trottoirs, bordures, mobilier urbain','Éclairage public LED','Ponts cadres et dalots BA'],
  ],
  [
    'id'    => 'renovation',
    'num'   => '05',
    'icon'  => 'wrench',
    'tag'   => 'Rénovation & Restauration',
    'title' => 'Rénovation, Réhabilitation & Renforcement',
    'img'   => 'assets/images/realisations/IMG_4194.jpg',
    'desc1' => 'Nous intervenons sur le bâti existant avec des techniques de diagnostic et de renforcement : carottage et sondage des structures, injection de résines époxy dans les fissures structurelles, chemisage de poteaux par béton projeté, ajout de voiles de contreventement et mise aux normes parasismiques RPS 2011.',
    'desc2' => 'Pour les bâtiments historiques et riads, nos artisans maîtrisent les techniques traditionnelles : pose de zelliges sur mortier de chaux, taille du marbre Khenifra, moulage du stuc Tadelakt et menuiserie bois de cèdre — dans le respect de l\'authenticité architecturale.',
    'feats' => ['Diagnostic structurel et sondages','Injection époxy et agrafage fissures','Chemisage poteaux et renforts BA','Mise aux normes RPS 2011','Traitement humidité et remontées','Restauration zellige, stuc et gébs'],
  ],
];
?>

<!-- ── HERO ── -->
<div class="sv2-hero">
  <img src="assets/images/realisations/IMG_4170.jpg" alt="Chantier Prefabloc" class="sv2-hero-img">
  <div class="sv2-hero-overlay"></div>
  <div class="container sv2-hero-inner">
    <div class="breadcrumb"><a href="index.php">Accueil</a><span>›</span><span>Services</span></div>
    <div class="sv2-hero-tag">Expertise BTP — Maroc depuis 2009</div>
    <h1 class="sv2-hero-title">NOS DOMAINES<br><span>D'INTERVENTION</span></h1>
    <p class="sv2-hero-sub">Du terrassement à la réception des clés — Prefabloc maîtrise l'intégralité de la chaîne constructive avec ses propres équipes et son bureau d'études intégré.</p>
  </div>
</div>

<!-- ── NAV services ancres ── -->
<div class="sv2-nav">
  <div class="container">
    <div class="sv2-nav-inner">
      <?php foreach ($services as $s): ?>
      <a href="#<?= $s['id'] ?>" class="sv2-nav-item">
        <span class="sv2-nav-num"><?= $s['num'] ?></span>
        <span class="sv2-nav-lbl"><?= $s['tag'] ?></span>
      </a>
      <?php endforeach ?>
    </div>
  </div>
</div>

<!-- ── SERVICES sections alternées ── -->
<?php foreach ($services as $i => $s):
  $rev = $i % 2 !== 0;
?>
<section class="sv2-service" id="<?= $s['id'] ?>" style="<?= $rev ? 'background:#F5F6FA' : 'background:#fff' ?>">
  <div class="sv2-service-inner <?= $rev ? 'sv2-reverse' : '' ?>">

    <!-- Photo -->
    <div class="sv2-service-photo">
      <img src="<?= $s['img'] ?>" alt="<?= htmlspecialchars($s['title']) ?>">
      <div class="sv2-service-num-bg"><?= $s['num'] ?></div>
    </div>

    <!-- Contenu -->
    <div class="sv2-service-content">
      <span class="sv2-tag"><?= icon($s['icon'], 15) ?> <?= $s['tag'] ?></span>
      <h2 class="sv2-h2"><?= htmlspecialchars($s['title']) ?></h2>
      <div class="sv2-divider"></div>
      <p class="sv2-desc"><?= $s['desc1'] ?></p>
      <p class="sv2-desc"><?= $s['desc2'] ?></p>
      <ul class="sv2-feats">
        <?php foreach ($s['feats'] as $f): ?>
        <li><?= icon('check-circle', 14) ?> <?= htmlspecialchars($f) ?></li>
        <?php endforeach ?>
      </ul>
      <a href="contact.php" class="btn btn-primary" style="margin-top:28px;display:inline-flex">Demander un devis →</a>
    </div>

  </div>
</section>
<?php endforeach ?>

<!-- ── GARANTIES bande sombre ── -->
<div class="sv2-garanties">
  <div class="container">
    <div class="sv2-garanties-grid">
      <div class="sv2-garantie">
        <div class="sv2-garantie-icon"><?= icon('medal',32) ?></div>
        <div class="sv2-garantie-val">15 ans</div>
        <div class="sv2-garantie-lbl">d'expérience terrain</div>
      </div>
      <div class="sv2-garantie">
        <div class="sv2-garantie-icon"><?= icon('check-circle',32) ?></div>
        <div class="sv2-garantie-val">ISO 9001</div>
        <div class="sv2-garantie-lbl">SMQ certifié</div>
      </div>
      <div class="sv2-garantie">
        <div class="sv2-garantie-icon"><?= icon('lightning',32) ?></div>
        <div class="sv2-garantie-val">48h</div>
        <div class="sv2-garantie-lbl">délai de remise d'offre</div>
      </div>
      <div class="sv2-garantie">
        <div class="sv2-garantie-icon"><?= icon('handshake',32) ?></div>
        <div class="sv2-garantie-val">100%</div>
        <div class="sv2-garantie-lbl">réceptions sans réserve</div>
      </div>
    </div>
  </div>
</div>

<section class="cta-banner">
  <div class="container">
    <h2>UN PROJET EN COURS<br>DE MONTAGE ?</h2>
    <p>Transmettez-nous vos plans ou votre programme — notre bureau d'études vous adresse un avant-métré et une offre de prix complète en moins de 48h ouvrées.</p>
    <div class="cta-btns">
      <a href="contact.php" class="btn btn-gold">Soumettre mon dossier →</a>
      <a href="realisations.php" class="btn btn-outline-white">Voir nos références</a>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
