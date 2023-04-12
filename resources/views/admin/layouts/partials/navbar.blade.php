<header class="">
  <div class="container">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="./admin">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.category') }}">Danh mục</a>
            </li>
            
          </ul>
          <ul class="navbar-nav ">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              @auth('admin')
                {{auth()->guard('admin')->user()->first_name}}
              @endauth
              </a>
              <ul class="dropdown-menu">
                
                @auth('admin')
                  <li><a class="dropdown-item" href="#">Account</a></li>
                  <li><a class="dropdown-item" href="{{ route('adminLogout') }}">Logout</a></li>
                @endauth

                @guest('admin')
                  <li><a class="dropdown-item" href="{{ route('adminLogin') }}">Logout</a></li>
                @endguest
                
                <!-- <li><hr class="dropdown-divider"></li> -->
                <!-- <li><a class="dropdown-item" href="#">Something else here</a></li> -->
              </ul>
            </li>
          </ul>
          
        </div>
      </div>
    </nav>
  </div>
</header>