<?php $pageTitle = "Produits par Industrie"; ?>
<?php include('header.php'); ?>

<!-- Header -->
  <header class="position-relative text-white text-center">
    <div class="position-absolute top-0 start-0 w-100 h-100" style="backdrop-filter: blur(6px); background-color: rgba(0,0,0,0.5); z-index: 1;"></div>
    <div class="container position-relative z-2">
      <h1 class="display-4 fw-bold">Produits Multi-Industries</h1>
      <p class="lead mb-4">Un savoir-faire au service des secteurs industriel, chimiques et agroalimentaires.</p>
      <a href="#produits" class="btn btn-light btn-lg">
        <i class="bi bi-search me-2"></i>Explorer les Produits
      </a>
    </div>
  </header>

<!-- Produits -->
<div class="container py-5" id="produits">
  <h2 class="section-title text-center mb-5">Nos Meilleures Sélections</h2>
  <div class="row g-4">

    <?php
    $produits = [
      [
        "img" => "istockphoto-1581309911-612x612.jpg",
        "titre" => "Ordinateur Portable Pro X",
        "description" => "Puissant et élégant, idéal pour les professionnels de la création et du développement.",
      ],
      [
        "img" => "chemischtechnischeprodukte_res_wl2_frontpage_580.png",
        "titre" => "Solvant Pro+",
        "description" => "Formule haute performance pour applications industrielles exigeantes.",
      ],
      [
        "img" => "bouteilles-plastique-transparentes-remplies-substance-jaune_273609-13375.jpg",
        "titre" => "Élixir Naturel",
        "description" => "Huiles essentielles bio en flacons recyclables, pour une routine bien-être écoresponsable.",
      ],
      [
        "img" => "xproduits-chimiques.jpg.pagespeed.ic.sPBNdeFDUo.jpg",
        "titre" => "Désinfectant UltraClean",
        "description" => "Solution puissante pour la désinfection des espaces médicaux et industriels.",
      ],
      [
        "img" => "594997-abrogation-reglementation-formats-permettra-entre.jpg",
        "titre" => "Pack Bio Détente",
        "description" => "Thés & infusions 100% bio pour un moment de calme et de reconnexion avec soi.",
      ],
      [
        "img" => "609825e22fcfe221879880.jpg",
        "titre" => "Collation Énergie Verte",
        "description" => "Barres énergétiques à base de plantes, riches en nutriments, sans sucres ajoutés.",
      ]
    ];

    foreach ($produits as $produit) {
      echo '
      <div class="col-md-4 fade-in">
        <div class="card h-100">
          <img src="' . $produit["img"] . '" class="card-img-top" alt="' . $produit["titre"] . '">
          <div class="card-body">
            <h5 class="card-title">' . $produit["titre"] . '</h5>
            <p class="card-text">' . $produit["description"] . '</p>
            <a href="#" class="btn">Voir le produit</a>
          </div>
        </div>
      </div>';
    }
    ?>

  </div>
</div>

<!-- Bouton retour en haut -->
<button id="btnTop" class="btn" title="Retour en haut">
  <i class="bi bi-arrow-up"></i>
</button>

<!-- Script pour le bouton de retour en haut -->
<script>
  const btnTop = document.getElementById("btnTop");
  window.addEventListener("scroll", () => {
    btnTop.style.display = window.scrollY > 200 ? "block" : "none";
  });

  btnTop.addEventListener("click", () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
  });
</script>

<?php include('footer.php'); ?>

<!-- Style supplémentaire pour positionner et styliser le bouton -->
<style>
  #btnTop {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: #006400; /* Fond vert */
    color: white;
    border: none;
    border-radius: 50%;
    padding: 15px;
    font-size: 24px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
    cursor: pointer;
    display: none;
  }

  #btnTop:hover {
    background-color: #D40000; /* Changer la couleur au survol */
  }

  
</style>
