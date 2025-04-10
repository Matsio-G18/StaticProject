<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Secteurs d'activité | Industries</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <style>
    .sector-hero {
      background: linear-gradient(135deg, #009543, #fcd116, #dc241f);
      color: white;
      padding: 100px 0;
      text-align: center;
    }

    .sector-card {
      transition: transform 0.3s ease;
    }

    .sector-card:hover {
      transform: scale(1.05);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    }

    .icon-circle {
      font-size: 2rem;
      width: 60px;
      height: 60px;
      background-color: #009543;
      color: white;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 15px;
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
            <a class="nav-link" href="#secteurs"><i class="bi bi-diagram-3 me-1"></i>Secteurs</a>
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

  <!-- Header -->
  <section class="sector-hero">
    <div class="container">
      <h1 class="display-4 fw-bold">Nos Secteurs d'Activité</h1>
      <p class="lead">Des domaines variés, un même engagement pour la qualité et l’innovation.</p>
    </div>
  </section>

  <!-- Secteurs -->
  <section class="py-5">
    <div class="container">
      <div class="row g-4">
        <!-- Technologie -->
        <div class="col-md-4">
          <div class="card text-center sector-card p-4">
            <div class="icon-circle mx-auto"><i class="bi bi-cpu"></i></div>
            <h5 class="card-title">Technologie</h5>
            <p class="card-text">Solutions innovantes pour l’informatique, les télécoms et l’automatisation industrielle.</p>
          </div>
        </div>

        <!-- Chimie -->
        <div class="col-md-4">
          <div class="card text-center sector-card p-4">
            <div class="icon-circle mx-auto"><i class="bi bi-beaker"></i></div>
            <h5 class="card-title">Chimie & Pharma</h5>
            <p class="card-text">Produits chimiques de haute qualité pour l’industrie et la recherche.</p>
          </div>
        </div>

        <!-- Agroalimentaire -->
        <div class="col-md-4">
          <div class="card text-center sector-card p-4">
            <div class="icon-circle mx-auto"><i class="bi bi-basket"></i></div>
            <h5 class="card-title">Agroalimentaire</h5>
            <p class="card-text">Distribution de produits sains, biologiques et respectueux des normes alimentaires.</p>
          </div>
        </div>

        <!-- Énergie -->
        <div class="col-md-4">
          <div class="card text-center sector-card p-4">
            <div class="icon-circle mx-auto"><i class="bi bi-lightning-charge"></i></div>
            <h5 class="card-title">Énergie</h5>
            <p class="card-text">Participation à la transition énergétique avec des solutions renouvelables et durables.</p>
          </div>
        </div>

        <!-- Environnement -->
        <div class="col-md-4">
          <div class="card text-center sector-card p-4">
            <div class="icon-circle mx-auto"><i class="bi bi-tree"></i></div>
            <h5 class="card-title">Environnement</h5>
            <p class="card-text">Initiatives vertes, recyclage, et développement de produits écoresponsables.</p>
          </div>
        </div>

        <!-- Transport -->
        <div class="col-md-4">
          <div class="card text-center sector-card p-4">
            <div class="icon-circle mx-auto"><i class="bi bi-truck"></i></div>
            <h5 class="card-title">Transport & Logistique</h5>
            <p class="card-text">Optimisation de la chaîne logistique pour répondre aux enjeux modernes de mobilité.</p>
          </div>
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
