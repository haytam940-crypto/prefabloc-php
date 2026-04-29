<?php
$meta_title = 'Contact & Devis — Prefabloc';
$meta_desc  = 'Transmettez votre dossier à Prefabloc : plans, programme ou descriptif de votre chantier. Offre technique et financière sous 48h ouvrées, sans engagement.';
include 'includes/header.php';
?>

<div class="page-hero">
  <div class="container">
    <div class="breadcrumb"><a href="index.php">Accueil</a><span>›</span><span>Contact</span></div>
    <h1>Déposez votre Dossier</h1>
    <p>Plans architecturaux, avant-projet sommaire ou simple description — envoyez-nous ce que vous avez. Nos ingénieurs analysent votre projet et vous retournent une offre sous 48h ouvrées.</p>
  </div>
</div>

<!-- Process rapide -->
<div class="contact-process">
  <div class="container">
    <div class="contact-steps">
      <div class="contact-step reveal up">
        <div class="step-num">01</div>
        <div class="step-icon"><?= icon('clipboard',26) ?></div>
        <div class="step-label">Décrivez votre projet</div>
      </div>
      <div class="step-arrow">→</div>
      <div class="contact-step reveal up reveal-delay-1">
        <div class="step-num">02</div>
        <div class="step-icon"><?= icon('building',26) ?></div>
        <div class="step-label">Nos ingénieurs analysent</div>
      </div>
      <div class="step-arrow">→</div>
      <div class="contact-step reveal up reveal-delay-2">
        <div class="step-num">03</div>
        <div class="step-icon"><?= icon('lightning',26) ?></div>
        <div class="step-label">Offre sous 48h ouvrées</div>
      </div>
      <div class="step-arrow">→</div>
      <div class="contact-step reveal up reveal-delay-3">
        <div class="step-num">04</div>
        <div class="step-icon"><?= icon('handshake',26) ?></div>
        <div class="step-label">Chantier lancé</div>
      </div>
    </div>
  </div>
</div>

<section class="section section-light">
  <div class="container">
    <div class="contact-grid">
      <!-- Formulaire -->
      <div class="contact-form-wrap reveal left">
        <span class="sec-tag">Demande d'offre</span>
        <h2 style="font-size:26px;font-weight:900;color:var(--navy);text-transform:uppercase;margin:12px 0 6px">DÉCRIVEZ-NOUS<br>VOTRE CHANTIER</h2>
        <div class="divider-line" style="margin:12px 0 20px"></div>
        <p style="color:var(--gray);font-size:14px;margin-bottom:28px">Plus votre description est précise (superficie, type de structure, contraintes de site, délai souhaité), plus notre offre sera détaillée et réaliste.</p>

        <div id="formAlert" class="alert" role="alert"></div>

        <form id="contactForm" action="contact-handler.php" method="POST" novalidate>
          <div class="form-row">
            <div class="form-group">
              <label for="nom">Nom <span class="req">*</span></label>
              <input type="text" id="nom" name="nom" placeholder="Benali" required>
            </div>
            <div class="form-group">
              <label for="prenom">Prénom <span class="req">*</span></label>
              <input type="text" id="prenom" name="prenom" placeholder="Karim" required>
            </div>
          </div>
          <div class="form-group">
            <label for="email">Email <span class="req">*</span></label>
            <input type="email" id="email" name="email" placeholder="k.benali@societe.ma" required>
          </div>
          <div class="form-row">
            <div class="form-group">
              <label for="telephone">Téléphone</label>
              <input type="tel" id="telephone" name="telephone" placeholder="+212 6XX XX XX XX">
            </div>
            <div class="form-group">
              <label for="ville">Ville du chantier</label>
              <input type="text" id="ville" name="ville" placeholder="Casablanca, Rabat, Tanger…">
            </div>
          </div>
          <div class="form-group">
            <label for="service">Type de travaux <span class="req">*</span></label>
            <select id="service" name="service" required>
              <option value="">-- Sélectionnez le type de chantier --</option>
              <option>Construction neuve — Résidentiel</option>
              <option>Construction neuve — Commercial / Tertiaire</option>
              <option>Construction neuve — Industriel / Logistique</option>
              <option>Travaux Publics & Infrastructure</option>
              <option>Rénovation & Réhabilitation</option>
              <option>Études techniques uniquement</option>
              <option>Autre</option>
            </select>
          </div>
          <div class="form-group">
            <label for="message">Description du projet <span class="req">*</span></label>
            <textarea id="message" name="message" rows="5" placeholder="Ex. : Immeuble R+5 à Aïn Sebaa, structure voiles BA sur radier, 18 appartements, superficie totale 2 400 m², démarrage souhaité T3 2025, finitions moyen standing…" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary form-submit">
            Envoyer ma demande →
          </button>
          <p class="form-note">Réponse garantie sous 48h ouvrées. Vos données restent confidentielles et ne sont jamais transmises à des tiers.</p>
        </form>
      </div>

      <!-- Sidebar -->
      <div class="contact-sidebar reveal right">

        <!-- Photo réalisation -->
        <div class="contact-photo-card">
          <img src="assets/images/realisations/IMG_5791.jpg" alt="Réalisation Prefabloc" class="contact-photo">
          <div class="contact-photo-overlay">
            <div class="contact-photo-stat"><span class="cps-val">120+</span><span class="cps-lbl">Ouvrages livrés</span></div>
            <div class="contact-photo-stat"><span class="cps-val">15</span><span class="cps-lbl">Ans d'expérience</span></div>
            <div class="contact-photo-stat"><span class="cps-val">48h</span><span class="cps-lbl">Délai offre</span></div>
          </div>
        </div>

        <div class="info-card">
          <h3>Nos coordonnées</h3>
          <div class="info-item">
            <div class="info-icon"><?= icon('pin',20) ?></div>
            <div>
              <div class="info-label">Siège social</div>
              <div class="info-val">123, Boulevard Zerktouni<br>Casablanca 20100, Maroc</div>
            </div>
          </div>
          <div class="info-item">
            <div class="info-icon"><?= icon('phone',20) ?></div>
            <div>
              <div class="info-label">Standard & Bureau d'études</div>
              <div class="info-val">
                <a href="tel:+212522123456" style="color:inherit">+212 522 12 34 56</a><br>
                <a href="tel:+212661234567" style="color:inherit">+212 661 23 45 67</a>
              </div>
            </div>
          </div>
          <div class="info-item">
            <div class="info-icon"><?= icon('email',20) ?></div>
            <div>
              <div class="info-label">Email</div>
              <div class="info-val">
                <a href="mailto:contact@prefabloc.ma" style="color:inherit">contact@prefabloc.ma</a><br>
                <a href="mailto:devis@prefabloc.ma" style="color:inherit">devis@prefabloc.ma</a>
              </div>
            </div>
          </div>
          <div class="info-item">
            <div class="info-icon"><?= icon('clock',20) ?></div>
            <div>
              <div class="info-label">Horaires de bureau</div>
              <div class="info-val">Lun – Ven : 08h30 – 17h30<br>Sam : 09h00 – 13h00</div>
            </div>
          </div>
        </div>

        <div class="quick-card">
          <h4>Besoin d'une réponse immédiate ?</h4>
          <p>Pour les projets urgents ou les chantiers en cours de démarrage, appelez directement notre direction technique. Disponible du lundi au vendredi de 08h30 à 17h30.</p>
          <a href="tel:+212522123456" class="btn btn-primary" style="width:100%;justify-content:center"><?= icon('phone',16) ?> +212 522 12 34 56</a>
        </div>
      </div>
    </div>

    <!-- FAQ -->
    <div style="margin-top:72px">
      <div class="sec-head" style="margin-bottom:36px">
        <span class="sec-tag reveal up">Questions techniques</span>
        <h2 class="sec-title reveal up reveal-delay-1">CE QUE NOS CLIENTS<br>NOUS DEMANDENT</h2>
        <div class="divider-line reveal up reveal-delay-2"></div>
      </div>
      <div class="faq-grid">
        <div class="faq-card reveal up reveal-delay-1">
          <h4>Fournissez-vous les plans d'exécution béton armé ?</h4>
          <p>Oui. Notre bureau d'études intégré établit les plans de coffrage, les plans d'armatures et les notes de calcul BAEL 91 / RPS 2011. Ces documents sont soumis à votre bureau de contrôle avant tout démarrage de coulage.</p>
        </div>
        <div class="faq-card reveal up reveal-delay-2">
          <h4>Intervenez-vous en dehors de Casablanca ?</h4>
          <p>Nous opérons dans 8 régions : Casablanca-Settat, Rabat-Salé-Kénitra, Tanger-Tétouan, Fès-Meknès, Marrakech-Safi, Souss-Massa, l'Oriental et Béni Mellal-Khénifra. Nos équipes se déplacent avec le matériel nécessaire.</p>
        </div>
        <div class="faq-card reveal up reveal-delay-3">
          <h4>Comment garantissez-vous la qualité du béton sur chantier ?</h4>
          <p>Un laborantin de chantier effectue un affaissement au cône d'Abrams à chaque toupie et prélève des éprouvettes 16×32 pour écrasement à 7j et 28j. Les résultats sont consignés dans un registre qualité transmis au maître d'ouvrage et au bureau de contrôle.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Réalisations mini-bande -->
<div class="contact-ref-strip">
  <div class="contact-ref-item"><img src="assets/images/realisations/IMG_5516.jpg" alt="Réf 1"></div>
  <div class="contact-ref-item"><img src="assets/images/realisations/IMG_5070_2.jpg" alt="Réf 2"></div>
  <div class="contact-ref-item"><img src="assets/images/realisations/IMG_0120.jpg" alt="Réf 3"></div>
  <div class="contact-ref-item"><img src="assets/images/realisations/IMG_4554.jpg" alt="Réf 4"></div>
  <div class="contact-ref-item"><img src="assets/images/realisations/IMG_4203.jpg" alt="Réf 5"></div>
  <div class="contact-ref-text">
    <span>+ 120 chantiers réalisés au Maroc</span>
    <a href="realisations.php">Voir le portfolio →</a>
  </div>
</div>

<section class="cta-banner">
  <div class="container">
    <h2 class="reveal up">PRÊT À DÉMARRER<br>VOTRE <span class="gold">CHANTIER</span> ?</h2>
    <p class="reveal up reveal-delay-1">Transmettez votre dossier — nous prenons en charge l'analyse technique et le chiffrage. Zéro engagement, réponse en 48h.</p>
    <div class="cta-btns reveal up reveal-delay-2">
      <a href="tel:+212522123456" class="btn btn-gold"><?= icon('phone',16) ?> Appeler le bureau technique</a>
      <a href="mailto:devis@prefabloc.ma" class="btn btn-outline-white"><?= icon('email',16) ?> Envoyer les plans par email</a>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
