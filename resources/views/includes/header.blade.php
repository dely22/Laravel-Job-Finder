  <!-- nav -->
  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top text-white">
    <div class="container-fluid d-flex justify-content-between">
      <div class="d-flex justify-content-sm-between">
        <a class="navbar-brand px-4" href="#">Job Finder</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      </div>
      <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto  mb-lg-0 ">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('jobs') }}">Jobs</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="{{ route('ourServices') }}">Services</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="{{ route('aboutUs') }}">About us</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="{{ route('connectUs') }}">Connect Us</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="{{ route('member') }}">Members</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="{{ route('companies') }}">Partnars </a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Profile
            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{ route('login') }}" data-bs-toggle="modal" data-bs-target="#ModalForm">LogIn</a></li>
              <li><a class="dropdown-item" href="{{ route('register') }}"data-bs-toggle="modal" data-bs-target="#SignForm">Sign Up</a></li>
            </ul>
          </li>

           <li class="nav-item">
            <a class="nav-link" href="#">Ar</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
