<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>À propos | Industries</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <style>
    .hero-about {
      background: url('Sanstitre.jpg') center/cover no-repeat;
      position: relative;
      padding: 120px 0;
      color: white;
    }

    .hero-about::before {
      content: '';
      position: absolute;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background-color: rgba(104, 136, 104, 0.92); /* Vert de la République du Congo */
      backdrop-filter: blur(4px);
      z-index: 1;
    }

    .hero-about .container {
      position: relative;
      z-index: 2;
    }

    .section-icon {
      font-size: 2rem;
      color: #FFCC00; /* Jaune du drapeau */
    }

    /* Navbar */
    .navbar {
      background-color: #006400; /* Vert du drapeau */
    }
    .navbar .navbar-brand {
      color: #FFCC00; /* Jaune */
    }
    .navbar .navbar-nav .nav-link {
      color: #FFCC00; /* Jaune */
    }
    .navbar .navbar-nav .nav-link.active {
      color: #D40000; /* Rouge du drapeau */
    }

    /* Footer */
    footer {
      background-color: #006400; /* Vert du drapeau */
    }
    footer p {
      color: #FFCC00; /* Jaune */
    }

    /* Cards */
    .card {
      border-color: #006400; /* Vert du drapeau pour les bordures */
    }
    .card-title {
      color: #D40000; /* Rouge du drapeau pour les titres */
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

  <!-- Hero -->
  <section class="hero-about text-center">
    <div class="container">
      <h1 class="display-4 fw-bold">À propos de nous</h1>
      <p class="lead">Une équipe passionnée au service de l'innovation industrielle.</p>
    </div>
  </section>

  <!-- À propos -->
  <section class="py-5">
    <div class="container">
      <div class="row align-items-center mb-5">
        <div class="col-md-6">
          <img src="industrie-energie.jpeg" class="img-fluid rounded shadow" alt="Équipe" />
        </div>
        <div class="col-md-6">
          <h2 class="mb-3">Qui sommes-nous ?</h2>
          <p>Depuis 2010, notre entreprise s’engage à fournir des produits fiables, durables et innovants pour divers secteurs : technologie, chimie, agroalimentaire et plus encore.</p>
          <p>Nous combinons expertise métier, éthique environnementale et veille technologique pour accompagner nos clients vers l’avenir.</p>
        </div>
      </div>

      <div class="row text-center">
        <div class="col-md-4">
          <i class="bi bi-globe2 section-icon mb-2"></i>
          <h5>Présence internationale</h5>
          <p>Nous opérons dans plus de 30 pays avec un réseau solide de partenaires et de distributeurs.</p>
        </div>
        <div class="col-md-4">
          <i class="bi bi-award section-icon mb-2"></i>
          <h5>Qualité certifiée</h5>
          <p>Nos produits répondent aux normes ISO et respectent les engagements RSE les plus stricts.</p>
        </div>
        <div class="col-md-4">
          <i class="bi bi-people section-icon mb-2"></i>
          <h5>Équipe passionnée</h5>
          <p>Des ingénieurs, chercheurs et designers unis autour d’un objectif commun : l’excellence.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-dark text-white text-center py-4 mt-5">
    <div class="container">
      <p class="mb-0">&copy; 2025 Produits Multi-Industries. Tous droits réservés.</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
