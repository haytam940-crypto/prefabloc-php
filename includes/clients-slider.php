<?php
// Logos des partenaires & fournisseurs réels
// lhm.png is white-on-transparent so we display it on a dark chip via .logo-dark class
$logos = [
  ['cimar.svg',         'Ciments du Maroc — CIMAR'],
  ['samarc.svg',        'Samarc'],
  ['tecnitas.svg',      'Tecnitas Maroc'],
  ['arcelormittal.png', 'ArcelorMittal'],
  ['logo-cp.png',       'CP Ciments'],
  ['logo-b.png',        'Partenaire'],
  ['logo-d.jpg',        'Partenaire'],
  ['logo-e.png',        'Partenaire'],
  ['logo-f.png',        'Partenaire'],
  ['logo-g.png',        'Partenaire'],
  ['logo-c.jpg',        'Partenaire'],
];
?>
<section class="logo-marquee-section">
  <div class="logo-marquee-head">
    <span class="sec-tag">Maîtres d'ouvrage &amp; fournisseurs</span>
    <h2 class="sec-title" style="margin-top:8px">ILS NOUS FONT CONFIANCE</h2>
    <div class="divider-line" style="margin:16px auto 0"></div>
  </div>
  <div class="logo-marquee-wrap">
    <div class="logo-track">
      <?php foreach ([$logos, $logos] as $set): ?>
        <?php foreach ($set as [$file, $alt]): ?>
        <div class="logo-slide">
          <img src="assets/images/clients/<?= $file ?>"
               alt="<?= htmlspecialchars($alt) ?>"
               loading="lazy">
        </div>
        <?php endforeach ?>
      <?php endforeach ?>
    </div>
  </div>
</section>
