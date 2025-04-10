<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Produits par Industrie</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    /* Animations au scroll */
    .fade-in {
      opacity: 0;
      transform: translateY(20px);
      transition: all 0.6s ease;
    }

    .fade-in.show {
      opacity: 1;
      transform: translateY(0);
    }

    /* Cartes produits */
    .card {
      overflow: hidden;
      border: none;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 12px 20px rgba(0, 0, 0, 0.2);
    }

    /* Zoom image au survol */
    .card-img-top {
      transition: transform 0.5s ease;
    }

    .card:hover .card-img-top {
      transform: scale(1.1);
    }

    /* Titre section */
    h2.section-title {
      font-weight: 600;
      font-size: 2rem;
      color: #FFCC00; /* Jaune du drapeau */
    }

    /* Navbar */
    .navbar {
      background-color: #006400; /* Vert du drapeau */
    }

    .navbar .navbar-brand, .navbar .navbar-nav .nav-link {
      color: #FFCC00; /* Jaune */
    }

    .navbar .navbar-nav .nav-link.active {
      color: #D40000; /* Rouge du drapeau */
    }

    /* Header */
    header {
      background: url('609825e22fcfe221879880.jpg') center/cover no-repeat;
      padding: 120px 0;
      color: white;
    }

    header .container h1 {
      color: #FFCC00; /* Jaune du drapeau */
    }

    header .container .btn {
      background-color: #006400; /* Vert du drapeau */
      color: white;
    }

    header .container .btn:hover {
      background-color: #D40000; /* Rouge du drapeau */
    }

    /* Footer */
    footer {
      background-color: #006400; /* Vert du drapeau */
    }

    footer p {
      color: #FFCC00; /* Jaune */
    }

    /* Cartes */
    .card-body .btn {
      background-color: #006400; /* Vert du drapeau */
      color: white;
    }

    .card-body .btn:hover {
      background-color: #D40000; /* Rouge du drapeau */
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark sticky-top shadow-sm">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="#">
        <i class="bi bi-box-seam me-2 fs-4"></i>
        <span class="fw-bold">Industries</span>
      </a>

      <!-- Bouton burger pour mobile -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
        aria-controls="navbarContent" aria-expanded="false" aria-label="Afficher le menu">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Liens de navigation -->
      <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#produits"><i class="bi bi-boxes me-1"></i>Produits</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="secteur.php#secteurs"><i class="bi bi-diagram-3 me-1"></i>Secteurs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="apropos.php#apropos"><i class="bi bi-info-circle me-1"></i>À propos</a>
          </li>
        </ul>
        <a href="contact.php#contact" class="btn btn-outline-light ms-lg-3 mt-3 mt-lg-0">
          <i class="bi bi-envelope-fill me-1"></i> Contact
        </a>
      </div>
    </div>
  </nav>

  <header class="position-relative text-white text-center">
    <div class="position-absolute top-0 start-0 w-100 h-100" style="backdrop-filter: blur(6px); background-color: rgba(0,0,0,0.5); z-index: 1;"></div>
    <div class="container position-relative z-2">
      <h1 class="display-4 fw-bold">Produits Multi-Industries</h1>
      <p class="lead mb-4">Un savoir-faire au service des secteurs technologiques, chimiques et agroalimentaires.</p>
      <a href="#produits" class="btn btn-light btn-lg"><i class="bi bi-search me-2"></i>Explorer les Produits</a>
    </div>
  </header>

  <!-- Produits -->
  <div class="container py-5" id="produits">
    <h2 class="section-title text-center mb-5">Nos Meilleures Sélections</h2>
    <div class="row g-4">
      
      <!-- Produit 1 -->
      <div class="col-md-4 fade-in">
        <div class="card h-100">
          <img src="istockphoto-1581309911-612x612.jpg" class="card-img-top" alt="Ordinateur Portable Pro X">
          <div class="card-body">
            <h5 class="card-title">Ordinateur Portable Pro X</h5>
            <p class="card-text">Puissant et élégant, idéal pour les professionnels de la création et du développement.</p>
            <a href="#" class="btn">Voir le produit</a>
          </div>
        </div>
      </div>

      <!-- Produit 2 -->
      <div class="col-md-4 fade-in">
        <div class="card h-100">
          <img src="chemischtechnischeprodukte_res_wl2_frontpage_580.png" class="card-img-top" alt="Solvant Pro+">
          <div class="card-body">
            <h5 class="card-title">Solvant Pro+</h5>
            <p class="card-text">Formule haute performance pour applications industrielles exigeantes.</p>
            <a href="#" class="btn">Voir le produit</a>
          </div>
        </div>
      </div>

      <!-- Produit 3 -->
      <div class="col-md-4 fade-in">
        <div class="card h-100">
          <img src="bouteilles-plastique-transparentes-remplies-substance-jaune_273609-13375.jpg" class="card-img-top" alt="Élixir Naturel">
          <div class="card-body">
            <h5 class="card-title">Élixir Naturel</h5>
            <p class="card-text">Huiles essentielles bio en flacons recyclables, pour une routine bien-être écoresponsable.</p>
            <a href="#" class="btn">Voir le produit</a>
          </div>
        </div>
      </div>

      <!-- Produit 4 -->
      <div class="col-md-4 fade-in">
        <div class="card h-100">
          <img src="xproduits-chimiques.jpg.pagespeed.ic.sPBNdeFDUo.jpg" class="card-img-top" alt="Désinfectant UltraClean">
          <div class="card-body">
            <h5 class="card-title">Désinfectant UltraClean</h5>
            <p class="card-text">Solution puissante pour la désinfection des espaces médicaux et industriels.</p>
            <a href="#" class="btn">Voir le produit</a>
          </div>
        </div>
      </div>

      <!-- Produit 5 -->
      <div class="col-md-4 fade-in">
        <div class="card h-100">
          <img src="594997-abrogation-reglementation-formats-permettra-entre.jpg" class="card-img-top" alt="Pack Bio Détente">
          <div class="card-body">
            <h5 class="card-title">Pack Bio Détente</h5>
            <p class="card-text">Thés & infusions 100% bio pour un moment de calme et de reconnexion avec soi.</p>
            <a href="#" class="btn">Voir le produit</a>
          </div>
        </div>
      </div>

      <!-- Produit 6 -->
      <div class="col-md-4 fade-in">
        <div class="card h-100">
          <img src="609825e22fcfe221879880.jpg" class="card-img-top" alt="Collation Énergie Verte">
          <div class="card-body">
            <h5 class="card-title">Collation Énergie Verte</h5>
            <p class="card-text">Barres énergétiques à base de plantes, riches en nutriments, sans sucres ajoutés.</p>
            <a href="#" class="btn">Voir le produit</a>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- Footer -->
  <footer class="bg-dark text-white text-center py-4">
    <div class="container">
      <p class="mb-0">&copy; 2025 Produits Multi-Industries. Tous droits réservés.</p>
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Animation au scroll -->
  <script>
    const fadeIns = document.querySelectorAll('.fade-in');
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('show');
        }
      });
    }, {
      threshold: 0.1
    });
    fadeIns.forEach(el => observer.observe(el));
  </script>
</body>
</html>
