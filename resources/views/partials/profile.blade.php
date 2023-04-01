<nav class="navbar navbar-expand-lg navbar-light bg-warning" style="height: 4rem;">
    <div class="container">
      <a class="navbar-brand" href="/">Krone Hair Design</a>
      <center>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
            <button type="button" class="btn">
              <li class="nav-item">
                <a class="nav-link {{ ($title === "Home") ? 'active' : ''}}" href="/">Home</a>
              </li>
            </button>
            <div class="btn-group" role="group">
              <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <li class="nav-item">
                  <a class="nav-link {{ ($title === "Layanan") ? 'active' : ''}}" href="/layanan">Layanan</a>
                </li>
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/layanan/hair">Hair Treatment</a></li>
                <li><a class="dropdown-item" href="/layanan/nail">Nail Treatment</a></li>
                <li><a class="dropdown-item" href="/layanan/body">Body Treatment</a></li>
              </ul>
            </div>
              <button type="button" class="btn">
                <li class="nav-item">
                  <a class="nav-link {{ ($title === "Pemesanan") ? 'active' : ''}}" href="/pemesanan">Pemesanan</a>
                </li>
              </button>
              <button type="button" class="btn">
                <li class="nav-item">
                  <a class="nav-link {{ ($title === "Profil") ? 'active' : ''}}" href="/myprofile">Profil Saya</a>
                </li>
              </button>
            </div>
          </div>
        </ul>
      </center>
      </div>
    </div>
  </nav>