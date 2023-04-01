<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #1F2261">
  <link rel="stylesheet" href="{{ asset('/css/navbar.css')  }}">
  <div class="container">
    <a class="navbar-brand" href="/">Fakultas Sains dan Teknologi</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- <center>
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Pemesanan") ? 'active' : ''}}" href="daftarmahasiswa"><b>Daftar Mahasiswa</b></a>
        </li>
      </ul>
    </div>
  </div>
</center> -->
@auth
<div class="btn-group" role="group">
  <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
      <a style = "color: black" href="#"><b>Halo!</b></a>
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="/myprofile/{{auth()->user()->id}}">My Profile</a></li>
      <li>
        <form action="/logout" method="post">
          @csrf
          <button type="submit" class = "dropdown-item" href="#"> <i class="bi bi-box-arrow-right bi-warning"></i><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-box-arrow-right bi-warning" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
            <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
          </svg> Logout 
        </li>
      </button>
        </form>
      </ul>
  </div>
    @else
                        <a class="nav-link {{ ($title === "Login") ? 'active' : ''}}" style="color: white" href="/login"><b>Login</b></a>
                @endauth
              </ul>
          </div>
        </ul>
      </div>
    </div>
  </nav>