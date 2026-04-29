<?php
$meta_title = 'À propos — Prefabloc';
$meta_desc  = 'Fondée en 2009 par un ingénieur génie civil, Prefabloc est devenue l\'une des entreprises générales de BTP les plus actives au Maroc. Découvrez notre histoire, nos valeurs et notre équipe.';
include 'includes/header.php';
?>

<div class="page-hero">
  <div class="container">
    <div class="breadcrumb"><a href="index.php">Accueil</a><span>›</span><span>À propos</span></div>
    <h1>Qui sommes-nous ?</h1>
    <p>Une entreprise générale de BTP fondée par des ingénieurs, pilotée par des constructeurs. Quinze ans de chantiers, de béton coulé et d'ouvrages livrés dans les délais définis contractuellement.</p>
  </div>
</div>

<!-- HISTOIRE — Layout panoramique -->
<section class="section">
  <div class="container">
    <div class="about-grid">
      <div class="about-text">
        <span class="sec-tag reveal up">Notre Genèse</span>
        <h2 class="sec-title reveal up reveal-delay-1">UN INGÉNIEUR,<br>UN CHANTIER,<br>UNE CONVICTION</h2>
        <div class="divider-line reveal up reveal-delay-2"></div>
        <p class="about-lead reveal up reveal-delay-2">Prefabloc a été fondée en 2009 à Casablanca par Amine Benali, ingénieur génie civil diplômé de l'École Hassania des Travaux Publics. Constatant que le marché marocain manquait d'entreprises capables d'assurer elles-mêmes le gros œuvre, la charpente et le second œuvre sans sous-traiter l'essentiel, il créa une structure intégrée de A à Z.</p>
        <p class="about-para reveal up reveal-delay-3">Les premières années furent fondatrices : une équipe de 8 personnes, un parc réduit à deux bétonnières et une pelle hydraulique, mais un premier chantier résidentiel à Aïn Chock livré avec 12 jours d'avance. Ce respect des engagements fit rapidement la réputation de Prefabloc, et dès 2012 l'entreprise décrocha ses premiers marchés de travaux publics auprès de la commune urbaine de Mohammedia.</p>
        <p class="about-para reveal up reveal-delay-3">Aujourd'hui, 180 techniciens, conducteurs de travaux, maçons, ferronniers et finisseurs interviennent simultanément sur plusieurs chantiers dans 8 régions du Royaume. Notre parc matériel comprend 6 grues à tour, 4 coffrages tunnels, une station de préfabrication de buses béton et un laboratoire de chantier mobile pour le contrôle du béton.</p>
        <div class="history-stats reveal up reveal-delay-3">
          <div class="hstat">
            <div class="val">2009</div>
            <div class="lbl">Fondation</div>
          </div>
          <div class="hstat">
            <div class="val" data-counter>180</div>
            <div class="lbl">Collaborateurs</div>
          </div>
          <div class="hstat">
            <div class="val">120+</div>
            <div class="lbl">Ouvrages livrés</div>
          </div>
          <div class="hstat">
            <div class="val" data-counter>8</div>
            <div class="lbl">Régions</div>
          </div>
        </div>
      </div>
      <div class="about-visual reveal right">
        <img src="assets/images/realisations/IMG_4202.jpg" alt="Résidence avec piscine Prefabloc" class="about-img-main">
        <img src="assets/images/realisations/IMG_4170.jpg" alt="Chantier en cours Prefabloc" class="about-img-secondary">
        <div class="about-badge">
          <span>15+</span>
          Ans sur<br>le terrain
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CHANTIERS BANDE PHOTO PLEINE LARGEUR -->
<div class="ap-photo-reel">
  <div class="ap-reel-item"><img src="assets/images/realisations/IMG_1342.jpg" alt="Chantier Prefabloc"></div>
  <div class="ap-reel-item ap-reel-wide"><img src="assets/images/realisations/IMG_5070.jpg" alt="Lotissement Prefabloc"></div>
  <div class="ap-reel-item"><img src="assets/images/realisations/IMG_0295.jpg" alt="Gros œuvre"></div>
  <div class="ap-reel-item"><img src="assets/images/realisations/IMG_4527.jpg" alt="Villa aménagement"></div>
  <div class="ap-reel-item ap-reel-wide"><img src="assets/images/realisations/IMG_4544.jpg" alt="Immeuble livré"></div>
</div>

<!-- MISSION -->
<section class="section section-light">
  <div class="container">
    <div class="sec-head">
      <span class="sec-tag reveal up">Ce qui nous guide</span>
      <h2 class="sec-title reveal up reveal-delay-1">NOS ENGAGEMENTS<br>DE CONSTRUCTEUR</h2>
      <div class="divider-line reveal up reveal-delay-2"></div>
      <p class="sec-sub reveal up reveal-delay-3">Trois principes non négociables qui définissent la manière dont nous concevons, exécutons et livrons chaque ouvrage.</p>
    </div>
    <div class="mission-cards">
      <div class="mission-card reveal scale reveal-delay-1">
        <div class="mission-icon"><?= icon('target',44) ?></div>
        <h3>Rigueur Technique</h3>
        <p>Chaque ouvrage est calculé, coffré et coulé selon les règles de l'art : BAEL 91, RPS 2011, normes NM sur les ciments et aciers HA. Nos laborantins réalisent des essais de compression sur éprouvettes 7j et 28j à chaque gâchée critique. Aucun compromis sur la résistance caractéristique du béton.</p>
      </div>
      <div class="mission-card reveal scale reveal-delay-2">
        <div class="mission-icon"><?= icon('leaf',44) ?></div>
        <h3>Construction Responsable</h3>
        <p>Nous intégrons systématiquement les prescriptions de la Réglementation Thermique de Construction au Maroc (RTCM) : isolation des toitures-terrasses, rupture de pont thermique au niveau des acrotères, menuiseries à rupture thermique. Les déchets inertes de nos chantiers sont triés et évacués vers des décharges autorisées.</p>
      </div>
      <div class="mission-card reveal scale reveal-delay-3">
        <div class="mission-icon"><?= icon('users',44) ?></div>
        <h3>Transparence Contractuelle</h3>
        <p>Nos contrats précisent le planning d'exécution semaine par semaine, les jalons de réception partielle et les pénalités de retard assumées. Le maître d'ouvrage accède en temps réel aux rapports journaliers de chantier, aux fiches de contrôle et aux bons de livraison béton — sans filtre ni délai.</p>
      </div>
    </div>
  </div>
</section>

<!-- ÉQUIPE — Layout avec fond photo -->
<section class="section ap-team-section">
  <div class="ap-team-bg">
    <img src="assets/images/realisations/IMG_4458.jpg" alt="Chantier Prefabloc">
    <div class="ap-team-bg-overlay"></div>
  </div>
  <div class="container" style="position:relative;z-index:2">
    <div class="sec-head">
      <span class="sec-tag reveal up" style="color:var(--gold)">Direction technique</span>
      <h2 class="sec-title light reveal up reveal-delay-1">LES INGÉNIEURS<br>QUI PILOTENT VOS CHANTIERS</h2>
      <div class="divider-line reveal up reveal-delay-2"></div>
      <p class="sec-sub reveal up reveal-delay-3" style="color:rgba(255,255,255,.75)">Des profils formés dans les meilleures écoles d'ingénieurs du Maroc, aguerris par des années de terrain sur des projets d'envergure nationale.</p>
    </div>
    <div class="team-grid">
      <div class="team-card reveal up reveal-delay-1" style="background:rgba(11,31,58,.85);border:1px solid rgba(255,255,255,.1);backdrop-filter:blur(12px)">
        <div class="team-avatar">AB</div>
        <h3 style="color:#fff">Amine Benali</h3>
        <div class="role" style="color:var(--gold)">Directeur Général — Ing. Génie Civil EHTP</div>
        <p style="color:rgba(255,255,255,.7)">Fondateur de Prefabloc en 2009. Spécialiste des fondations sur sols argileux et des structures mixtes. A coordonné plus de 40 chantiers simultanés en phase de croissance. Membre du conseil d'administration de la FNBTP Casablanca.</p>
      </div>
      <div class="team-card reveal up reveal-delay-2" style="background:rgba(11,31,58,.85);border:1px solid rgba(255,255,255,.1);backdrop-filter:blur(12px)">
        <div class="team-avatar" style="background:var(--green)">SM</div>
        <h3 style="color:#fff">Sara Moussaoui</h3>
        <div class="role" style="color:var(--gold)">Directrice des Opérations — Ing. BTP EMI</div>
        <p style="color:rgba(255,255,255,.7)">Responsable de la coordination entre les études, les approvisionnements et les équipes terrain. Experte en planification PERT/Gantt et gestion de sous-traitants spécialisés. A supervisé la réalisation du complexe Technopark Casablanca, 6 500 m² livrés en 28 mois.</p>
      </div>
      <div class="team-card reveal up reveal-delay-3" style="background:rgba(11,31,58,.85);border:1px solid rgba(255,255,255,.1);backdrop-filter:blur(12px)">
        <div class="team-avatar" style="background:var(--gold);color:var(--navy-dark)">YH</div>
        <h3 style="color:#fff">Youssef Hajji</h3>
        <div class="role" style="color:var(--gold)">Directeur Technique — Ing. Structures IAV Hassan II</div>
        <p style="color:rgba(255,255,255,.7)">Responsable du bureau d'études interne : notes de calcul béton armé, plans d'exécution, conformité RPS 2011 et coordination avec les laboratoires agréés. Référent technique pour les projets industriels et les ouvrages soumis à charges dynamiques.</p>
      </div>
    </div>
  </div>
</section>

<!-- CERTIFICATIONS -->
<section class="section section-light">
  <div class="container">
    <div class="sec-head">
      <span class="sec-tag reveal up">Accréditations</span>
      <h2 class="sec-title reveal up reveal-delay-1">CERTIFICATIONS<br>& AGRÉMENTS</h2>
      <div class="divider-line reveal up reveal-delay-2"></div>
      <p class="sec-sub reveal up reveal-delay-3">Des reconnaissances institutionnelles qui attestent de notre maîtrise technique, de notre solidité financière et du sérieux de notre démarche qualité.</p>
    </div>
    <div class="cert-grid">
      <div class="cert-card reveal scale reveal-delay-1">
        <div class="cert-icon"><?= icon('medal',40) ?></div>
        <h4>FNBTP</h4>
        <p>Membre agréé de la Fédération Nationale du Bâtiment et des Travaux Publics — classe financière T3</p>
      </div>
      <div class="cert-card reveal scale reveal-delay-2">
        <div class="cert-icon"><?= icon('check-circle',40) ?></div>
        <h4>ISO 9001 : 2015</h4>
        <p>Système de Management de la Qualité certifié — processus béton, réception matériaux et contrôle d'exécution</p>
      </div>
      <div class="cert-card reveal scale reveal-delay-3">
        <div class="cert-icon"><?= icon('clipboard',40) ?></div>
        <h4>Agrément MHU</h4>
        <p>Qualifié par le Ministère de l'Habitat et de l'Urbanisme pour les marchés de promotion immobilière publique</p>
      </div>
      <div class="cert-card reveal scale reveal-delay-4">
        <div class="cert-icon"><?= icon('columns',40) ?></div>
        <h4>Registre ONEE</h4>
        <p>Référencé fournisseur qualifié ONEE-Branche Eau pour les travaux de génie civil sur conduites et stations</p>
      </div>
    </div>
  </div>
</section>

<!-- CLIENTS -->
<section class="section">
  <div class="container">
    <div class="sec-head">
      <span class="sec-tag reveal up">Maîtres d'Ouvrage</span>
      <h2 class="sec-title reveal up reveal-delay-1">ILS NOUS CONFIENT<br>LEURS OUVRAGES</h2>
      <div class="divider-line reveal up reveal-delay-2"></div>
      <p class="sec-sub reveal up reveal-delay-3">Nos clients sont des promoteurs, des groupes industriels et des établissements publics qui exigent ponctualité, traçabilité et qualité d'exécution conforme aux cahiers des charges les plus stricts.</p>
    </div>
    <div class="clients-grid">
      <?php
      $clients = [
        ['Groupe OCP','ocp'],['CDG Développement','cdg'],['Addoha','addoha'],['Sonadac','sonadac'],
        ['Al Omrane','alomrane'],['Lydec','lydec'],['Marsa Maroc','marsamaroc'],['ONCF','oncf'],
      ];
      foreach ($clients as $i => [$name,$file]): ?>
      <div class="client-logo reveal scale reveal-delay-<?= ($i % 4) + 1 ?>">
        <img src="assets/images/clients/<?= $file ?>.svg" alt="<?= htmlspecialchars($name) ?>" loading="lazy">
      </div>
      <?php endforeach ?>
    </div>
  </div>
</section>

<!-- Chiffres clés en contexte visuel -->
<section class="ap-numbers-section">
  <div class="ap-numbers-photo">
    <img src="assets/images/realisations/IMG_5076.jpg" alt="Réalisations Prefabloc">
    <div class="ap-numbers-photo-overlay"></div>
  </div>
  <div class="container ap-numbers-content">
    <div class="ap-numbers-grid">
      <div class="ap-num reveal up">
        <div class="ap-num-val">120<span>+</span></div>
        <div class="ap-num-lbl">Ouvrages réceptionnés</div>
      </div>
      <div class="ap-num reveal up reveal-delay-1">
        <div class="ap-num-val" data-counter>180</div>
        <div class="ap-num-lbl">Collaborateurs permanents</div>
      </div>
      <div class="ap-num reveal up reveal-delay-2">
        <div class="ap-num-val" data-counter>8</div>
        <div class="ap-num-lbl">Régions d'intervention</div>
      </div>
      <div class="ap-num reveal up reveal-delay-3">
        <div class="ap-num-val">48h</div>
        <div class="ap-num-lbl">Délai de remise d'offre</div>
      </div>
    </div>
  </div>
</section>

<section class="cta-banner">
  <div class="container">
    <h2 class="reveal up">AJOUTONS VOTRE PROJET<br>À NOTRE <span class="gold">CARNET DE RÉFÉRENCES</span></h2>
    <p class="reveal up reveal-delay-1">Soumettez votre programme de construction — notre bureau d'études et notre équipe commerciale vous reviennent avec une offre chiffrée et un planning prévisionnel sous 48h.</p>
    <div class="cta-btns reveal up reveal-delay-2">
      <a href="contact.php" class="btn btn-gold">Nous soumettre un projet →</a>
      <a href="realisations.php" class="btn btn-outline-white">Voir nos réalisations</a>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
