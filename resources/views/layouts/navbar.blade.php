<nav class="navbar navbar-expand-lg navbar-dark shadow-sm" 
     style="background: linear-gradient(90deg, #0d6efd, #6610f2);">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center fs-2 fw-bolder text-uppercase fancy-brand" href="#">
      <i class="bi bi-lightning-charge-fill me-2"></i> MyApp
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link fw-semibold px-3 rounded" href="{{ route('user.index') }}">
            <i class="bi bi-people-fill"></i> User
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-semibold px-3 rounded" href="{{ route('profile') }}">
            <i class="bi bi-person-circle"></i> Profile
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-semibold px-3 rounded" href="#">
            <i class="bi bi-box-arrow-right"></i> Logout
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<style>
  /* Style untuk MyApp */
  .fancy-brand {
    background: linear-gradient(45deg, #ff6ec4, #7873f5);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    text-shadow: 2px 2px 6px rgba(0,0,0,0.3);
    letter-spacing: 1px;
    font-family: 'Poppins', sans-serif;
    transition: transform 0.3s;
  }

  .fancy-brand:hover {
    transform: scale(1.05);
    text-shadow: 0 0 10px #ff6ec4, 0 0 20px #7873f5;
  }

  .nav-link {
    color: #fff !important;
    transition: 0.3s;
  }

  .nav-link:hover {
    background-color: rgba(255, 255, 255, 0.2);
    transform: translateY(-2px);
  }
</style>
