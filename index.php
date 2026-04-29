<?php
$meta_title = 'Prefabloc — Constructeur de référence au Maroc depuis 2009';
$meta_desc  = 'Gros œuvre, charpente métallique, VRD et rénovation — Prefabloc, entreprise générale de BTP certifiée ISO 9001, livre plus de 120 ouvrages dans 8 régions du Maroc. Devis sous 48h.';
include 'includes/header.php';
?>

<!-- ══ HERO ══ -->
<section class="hero">
  <video class="hero-bg" autoplay muted loop playsinline preload="auto">
    <source src="assets/videos/chantier-primavera-web.mp4" type="video/mp4">
  </video>
  <div class="hero-overlay"></div>

  <div class="hero-content">
    <div class="container">
      <div class="hero-text">
        <div class="hero-tag">
          <span class="dot"></span>
          Agréé FNBTP · ISO 9001 · 120+ Ouvrages Réceptionnés
        </div>
        <h1>CONSTRUIRE JUSTE,<br>LIVRER À <span class="accent">TEMPS</span></h1>
        <p class="hero-sub">Prefabloc — entreprise générale de BTP fondée à Casablanca en 2009. Fondations, structure béton armé, charpente, second œuvre et finitions : chaque phase est assurée par nos propres ingénieurs et nos propres équipes terrain, dans 8 régions du Maroc.</p>
        <div class="hero-btns">
          <a href="realisations.php" class="btn btn-gold">Voir nos réalisations →</a>
          <a href="contact.php" class="btn btn-outline-white">Devis gratuit sous 48h</a>
        </div>
      </div>
      <div class="hero-visual">
        <div class="hero-card">
          <div class="hero-card-title">Nos indicateurs terrain</div>
          <div class="hero-stat-row">
            <div class="hero-stat-item">
              <div>
                <div class="hero-stat-num" data-counter>120</div>
                <div class="hero-stat-lbl">Ouvrages livrés</div>
              </div>
            </div>
            <div class="hero-stat-item">
              <div>
                <div class="hero-stat-num" data-counter>180</div>
                <div class="hero-stat-lbl">Techniciens & ouvriers</div>
              </div>
            </div>
            <div class="hero-stat-item">
              <div>
                <div class="hero-stat-num" data-counter>15</div>
                <div class="hero-stat-lbl">Années sur le terrain</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="hero-bottom">
    <div class="container">
      <div class="hero-bottom-item">
        <div>
          <div class="hero-bottom-num">120+</div>
          <div class="hero-bottom-lbl">Ouvrages réceptionnés</div>
        </div>
      </div>
      <div class="hero-bottom-item">
        <div>
          <div class="hero-bottom-num">8</div>
          <div class="hero-bottom-lbl">Régions couvertes</div>
        </div>
      </div>
      <div class="hero-bottom-item">
        <div>
          <div class="hero-bottom-num">48h</div>
          <div class="hero-bottom-lbl">Délai de remise d'offre</div>
        </div>
      </div>
      <div class="hero-bottom-item">
        <div>
          <div class="hero-bottom-num">2009</div>
          <div class="hero-bottom-lbl">Fondée à Casablanca</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══ TICKER ══ -->
<div class="ticker">
  <div class="ticker-track">
    <?php
    $items = ['Gros Œuvre & Béton Armé','Charpente Métallique','VRD & Réseaux','Rénovation Structurelle','Bureau d\'Études Intégré','Certification ISO 9001','Terrassement & Fondations','Second Œuvre Tous Corps d\'État','RPS 2011 · BAEL 91','Délai Garanti Contractuellement'];
    $all = array_merge($items, $items);
    foreach ($all as $item): ?>
    <div class="ticker-item"><span class="dot">◆</span><?= $item ?></div>
    <?php endforeach ?>
  </div>
</div>

<!-- ══ ABOUT ══ -->
<section class="section">
  <div class="container">
    <div class="about-grid">
      <div class="about-text">
        <span class="sec-tag reveal up">Qui sommes-nous</span>
        <h2 class="sec-title reveal up reveal-delay-1">UN CONSTRUCTEUR<br>QUI ENGAGE<br>SA SIGNATURE</h2>
        <div class="divider-line reveal up reveal-delay-2"></div>
        <p class="about-lead reveal up reveal-delay-2">Depuis 2009, Prefabloc construit ce qu'il promet. Fondée par des ingénieurs génie civil diplômés de l'EHTP, notre entreprise prend en charge chaque phase de votre projet — de la fouille jusqu'aux finitions — avec ses propres équipes. Aucun lot stratégique n'est sous-traité.</p>
        <p class="about-para reveal up reveal-delay-3">Notre bureau d'études interne calcule les armatures selon le BAEL 91 et le RPS 2011. Nos laborantins prélèvent des éprouvettes à chaque gâchée critique. Notre parc de six grues à tour et quatre coffrages tunnels garantit les cadences sans dépendance extérieure.</p>
        <p class="about-para reveal up reveal-delay-3">Agréés FNBTP classe T3, certifiés ISO 9001 version 2015, et référencés par Al Omrane, CDG Développement, ONEE et OCP — nous avons bâti notre réputation sur une seule règle : tenir nos engagements, sans exception.</p>
        <div class="about-stats">
          <div class="about-stat reveal scale reveal-delay-2">
            <div class="about-stat-num" data-counter>120</div>
            <div class="about-stat-lbl">Ouvrages réceptionnés</div>
          </div>
          <div class="about-stat reveal scale reveal-delay-3">
            <div class="about-stat-num" data-counter>180</div>
            <div class="about-stat-lbl">Permanents terrain</div>
          </div>
          <div class="about-stat reveal scale reveal-delay-4">
            <div class="about-stat-num" data-counter>15</div>
            <div class="about-stat-lbl">Années de métier</div>
          </div>
          <div class="about-stat reveal scale reveal-delay-5">
            <div class="about-stat-num" data-counter>8</div>
            <div class="about-stat-lbl">Régions actives</div>
          </div>
        </div>
        <div style="margin-top:28px" class="reveal up reveal-delay-4">
          <a href="a-propos.php" class="btn btn-primary">Découvrir notre histoire →</a>
        </div>
      </div>
      <div class="about-visual reveal right">
        <img src="assets/images/realisations/IMG_9870.jpg" alt="Chantier gros œuvre Prefabloc" class="about-img-main">
        <img src="assets/images/realisations/IMG_5077.jpg" alt="Ingénieurs terrain Prefabloc" class="about-img-secondary">
        <div class="about-badge">
          <span>15+</span>
          Ans sur<br>le terrain
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══ SERVICES ══ -->
<section class="section section-light">
  <div class="container">
    <div class="sec-head">
      <span class="sec-tag reveal up">Nos Domaines</span>
      <h2 class="sec-title reveal up reveal-delay-1">6 MÉTIERS,<br>1 SEUL INTERLOCUTEUR</h2>
      <div class="divider-line reveal up reveal-delay-2"></div>
      <p class="sec-sub reveal up reveal-delay-3">De la fouille au second œuvre, Prefabloc couvre l'intégralité du cycle de vie d'un projet de construction — sans lot sous-traité, sans surprise en cours de chantier.</p>
    </div>
    <div class="services-grid">
      <?php
      $services = [
        [icon('home',28),'Construction Résidentielle','Logement','Villas, immeubles R+5 à R+12, résidences gardées — la totalité des corps d\'état exécutée en interne, du terrassement aux finitions.',['Fondations sur sols complexes','Voiles BA dosage 350 kg/m³','Planchers hourdis et dalles pleines','Isolation thermique RTCM','Façades et menuiseries PVC/ALU','Finitions carrelage, peinture, sanitaires']],
        [icon('office',28),'Commercial & Tertiaire','Bureaux & Hôtels','Grandes portées, charges élevées, finitions de représentation — hôtels, cliniques, centres commerciaux, immeubles de bureaux.',['Structures poteaux-poutres jusqu\'à 24 m','Radiers sur sol compressible','Façades rideaux aluminium','Cloisons Knauf et faux plafonds','Coordination CVC et fluides','Revêtements marbre et pierre naturelle']],
        [icon('factory',28),'Industriel & Logistique','Charpente métallique','Entrepôts, usines, plateformes cross-dock — charpentes HEA/HEB jusqu\'à 40 m de portée libre sur fondations adaptées à chaque sol.',['Charpentes métalliques HEA/HEB','Dallages industriels Q4-Q5 laser screed','Fosses de décantation et bassins','Quais de chargement hydrauliques','Couvertures bac acier isolées','Sprinklers et sécurité incendie']],
        [icon('road',28),'Travaux Publics & VRD','Infrastructure','Voirie, assainissement, ouvrages de franchissement — nous répondons aux appels d\'offres des communes, agences urbaines et ONEE.',['Terrassements mécanisés lourds','Assainissement DN 300 à 1 200','Chaussées BBSG et béton bitumineux','Mobilier urbain et éclairage LED','Ponts cadres et dalots BA','Rapport d\'autocontrôle CCDG Maroc']],
        [icon('wrench',28),'Rénovation & Renforcement','Réhabilitation','Diagnostic, injection époxy, chemisage béton projeté, mise aux normes RPS 2011 — nous intervenons sur tout type de bâti existant.',['Diagnostic structurel et carottages','Injection résines et agrafage fissures','Chemisage poteaux béton projeté','Mise aux normes parasismiques','Traitement humidité et remontées capillaires','Restauration zellige, stuc et cèdre']],
        [icon('blueprint',28),'Bureau d\'Études Intégré','MOE & OPC','Plans d\'exécution, notes de calcul BAEL-91, planning hebdomadaire et coordination TCE — un pilotage complet de A à Z.',['Plans de coffrage et d\'armatures','Calcul BAEL-91 et RPS 2011','Planning Gantt et reporting hebdo','Coordination tous corps d\'état','Contrôle conformité plans/réalisé','Assistance réception maître d\'ouvrage']],
      ];
      foreach ($services as $i => [$icon,$title,$badge,$desc,$feats]): ?>
      <div class="service-card reveal scale reveal-delay-<?= ($i % 3) + 1 ?>">
        <div class="service-icon"><?= $icon ?></div>
        <span class="service-badge"><?= $badge ?></span>
        <h3 class="service-title"><?= $title ?></h3>
        <p class="service-desc"><?= $desc ?></p>
        <ul class="service-features">
          <?php foreach ($feats as $f): ?><li><?= $f ?></li><?php endforeach ?>
        </ul>
        <a href="services.php" class="service-link">Détails du service →</a>
      </div>
      <?php endforeach ?>
    </div>
  </div>
</section>

<!-- ══ CHIFFRES ══ -->
<section class="numbers-section">
  <div class="container">
    <div class="numbers-grid">
      <div class="number-item reveal up">
        <div class="number-icon"><?= icon('building',40) ?></div>
        <div class="number-row">
          <div class="number-val" data-counter>120</div>
          <div class="number-suffix">+</div>
        </div>
        <div class="number-lbl">Ouvrages réceptionnés</div>
      </div>
      <div class="number-item reveal up reveal-delay-2">
        <div class="number-icon"><?= icon('hardhat',40) ?></div>
        <div class="number-row">
          <div class="number-val" data-counter>180</div>
        </div>
        <div class="number-lbl">Permanents sur nos chantiers</div>
      </div>
      <div class="number-item reveal up reveal-delay-3">
        <div class="number-icon"><?= icon('regions',40) ?></div>
        <div class="number-row">
          <div class="number-val" data-counter>8</div>
        </div>
        <div class="number-lbl">Régions d'intervention actives</div>
      </div>
      <div class="number-item reveal up reveal-delay-4">
        <div class="number-icon"><?= icon('shield-ok',40) ?></div>
        <div class="number-row">
          <div class="number-val">0</div>
        </div>
        <div class="number-lbl">Malfaçon laissée sans réponse</div>
      </div>
    </div>
  </div>
</section>

<!-- ══ PROJETS PHARES ══ -->
<section class="section">
  <div class="container">
    <div class="sec-head">
      <span class="sec-tag reveal up">Portfolio</span>
      <h2 class="sec-title reveal up reveal-delay-1">DES CHANTIERS QUI<br>PARLENT D'EUX-MÊMES</h2>
      <div class="divider-line reveal up reveal-delay-2"></div>
      <p class="sec-sub reveal up reveal-delay-3">Résidentiel, tertiaire, industriel, infrastructure — une sélection représentative de nos 120+ réalisations à travers le Royaume.</p>
    </div>
    <div class="projects-grid">
      <?php
      $featured = [
        ['residence-jardins-palmeraie','Résidence Les Jardins','Résidentiel','residential','Réalisé','Marrakech','18 mois','assets/images/realisations/IMG_1342.jpg'],
        ['complexe-palm-casablanca','Complexe Palm Résidences','Résidentiel','residential','Réalisé','Casablanca','22 mois','assets/images/realisations/IMG_5792.jpg'],
        ['immeuble-belveder','Immeuble Résidentiel Belvédère','Résidentiel','residential','En cours','Casablanca','24 mois','assets/images/realisations/IMG_5516.jpg'],
        ['gros-oeuvre-structure','Gros Œuvre — Structure Poteaux-Dalles','Résidentiel','residential','En cours','Tanger','12 mois','assets/images/realisations/IMG_0328.jpg'],
        ['chantier-structure-marrakech','Chantier Structure Marrakech','Résidentiel','residential','En cours','Marrakech','15 mois','assets/images/realisations/IMG_5384.jpg'],
        ['residence-al-waha','Résidence Al Waha','Résidentiel','residential','Réalisé','Mohammedia','18 mois','assets/images/realisations/IMG_5295.jpg'],
      ];
      foreach ($featured as $i => [$slug,$title,$cat,$catClass,$status,$city,$dur,$img]):
        $statusClass = $status === 'Réalisé' ? 'badge-status-done' : 'badge-status-ongoing';
      ?>
      <div class="project-card reveal scale reveal-delay-<?= ($i % 3) + 1 ?>">
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
    <div style="text-align:center;margin-top:40px" class="reveal up">
      <a href="realisations.php" class="btn btn-primary">Explorer tout notre portfolio →</a>
    </div>
  </div>
</section>

<?php include 'includes/clients-slider.php'; ?>

<!-- ══ ACTUALITÉS ══ -->
<section class="section">
  <div class="container">
    <div class="sec-head">
      <span class="sec-tag reveal up">Vie de l'entreprise</span>
      <h2 class="sec-title reveal up reveal-delay-1">DERNIÈRES NOUVELLES<br>DE NOS CHANTIERS</h2>
      <div class="divider-line reveal up reveal-delay-2"></div>
    </div>
    <div class="news-grid">
      <?php
      $news = [
        ['Adjudication','15 Jan. 2025','IMMEUBLE R+7 AGDAL — NOUVEAU MARCHÉ SIGNÉ','Prefabloc a été retenu à l\'issue d\'un appel d\'offres restreint pour la construction d\'un immeuble de 42 logements à Rabat-Agdal. Le lancement des fouilles est prévu en mars 2025, pour une livraison sous 24 mois.','assets/images/realisations/IMG_4554.jpg'],
        ['Certification','08 Jan. 2025','ISO 9001 : AUDIT ZÉRO ÉCART — SMQ RECERTIFIÉ POUR 3 ANS','Notre Système de Management de la Qualité a été audité par Bureau Veritas sans aucune non-conformité majeure. La certification porte sur nos processus de contrôle béton, de traçabilité et de gestion documentaire chantier.','assets/images/realisations/IMG_5070_2.jpg'],
        ['Parc matériel','22 Déc. 2024','GRUE LIEBHERR 280 EC-H : LE PARC PASSE À 6 UNITÉS','Face à la montée en puissance de nos chantiers R+8 et au-delà, nous avons intégré une grue Liebherr 280 EC-H à montage rapide. Notre parc de levage compte désormais 6 grues à tour opérationnelles en simultané.','assets/images/realisations/IMG_0120.jpg'],
      ];
      foreach ($news as $i => [$cat,$date,$title,$excerpt,$img]): ?>
      <div class="news-card reveal up reveal-delay-<?= $i + 1 ?>">
        <div class="news-img-wrap">
          <img class="news-img" src="<?= $img ?>" alt="<?= htmlspecialchars($title) ?>" loading="lazy">
          <span class="news-cat-badge"><?= $cat ?></span>
        </div>
        <div class="news-body">
          <div class="news-date"><?= icon('calendar',14) ?> <?= $date ?></div>
          <h3 class="news-title"><?= htmlspecialchars($title) ?></h3>
          <p class="news-excerpt"><?= $excerpt ?></p>
          <a href="contact.php" class="news-link">Lire la suite →</a>
        </div>
      </div>
      <?php endforeach ?>
    </div>
  </div>
</section>

<!-- ══ CTA ══ -->
<section class="cta-banner">
  <div class="container">
    <h2 class="reveal up">VOTRE PROJET MÉRITE<br>UN <span class="gold">VRAI PARTENAIRE</span></h2>
    <p class="reveal up reveal-delay-1">Transmettez-nous vos plans, votre programme ou simplement vos contraintes de site — notre bureau d'études vous revient avec une offre technique et financière détaillée sous 48h ouvrées, sans engagement.</p>
    <div class="cta-btns reveal up reveal-delay-2">
      <a href="contact.php" class="btn btn-gold">Soumettre un dossier →</a>
      <a href="realisations.php" class="btn btn-outline-white">Consulter nos références</a>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
