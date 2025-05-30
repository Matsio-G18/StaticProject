<!-- header.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $pageTitle ?? 'Produits Multi-Industries'; ?></title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    .fade-in { opacity: 0; transform: translateY(20px); transition: all 0.6s ease; }
    .fade-in.show { opacity: 1; transform: translateY(0); }

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

    .card-img-top {
      transition: transform 0.5s ease;
    }

    .card:hover .card-img-top {
      transform: scale(1.1);
    }

    h2.section-title {
      font-weight: 600;
      font-size: 2rem;
      color: #FFCC00;
    }

    .navbar {
      background-color: #006400;
    }

    .navbar .navbar-brand,
    .navbar .navbar-nav .nav-link {
      color: #FFCC00;
    }

    .navbar .navbar-nav .nav-link.active {
      color: #D40000;
    }

    header {
      position: sticky;
      top: 0;
      z-index: 1020;
      background: url('609825e22fcfe221879880.jpg') center/cover no-repeat;
      padding: 120px 0;
      color: white;
    }

    header::before {
      content: "";
      position: absolute;
      top: 0; left: 0; width: 100%; height: 100%;
      backdrop-filter: blur(6px);
      background-color: rgba(0,0,0,0.5);
      z-index: 1;
    }

    header .container {
      position: relative;
      z-index: 2;
    }

    header .container h1 {
      color: #FFCC00;
    }

    header .container .btn {
      background-color: #006400;
      color: white;
    }

    header .container .btn:hover {
      background-color: #D40000;
    }

    footer {
      background-color: #006400;
    }

    footer p {
      color: #FFCC00;
    }

    .card-body .btn {
      background-color: #006400;
      color: white;
    }

    .card-body .btn:hover {
      background-color: #D40000;
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
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Afficher le menu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link active" href="index.php#produits"><i class="bi bi-boxes me-1"></i>Produits</a></li>
        <li class="nav-item"><a class="nav-link" href="secteur.php#secteurs"><i class="bi bi-diagram-3 me-1"></i>Secteurs</a></li>
        <li class="nav-item"><a class="nav-link" href="apropos.php#apropos"><i class="bi bi-info-circle me-1"></i>À propos</a></li>
      </ul>
      <a href="contact.php#contact" class="btn btn-outline-light ms-lg-3 mt-3 mt-lg-0"><i class="bi bi-envelope-fill me-1"></i> Contact</a>
    </div>
  </div>
</nav>
