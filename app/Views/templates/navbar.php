<nav class="autohide navbar navbar-expand-lg" style="position: fixed; z-index: 20; width: 100%;">
<div class="container-fluid" style="padding: 0;">
    <a class="navbar-brand" href="<?= base_url('') ?>">
        <img src="<?= base_url('image/logo.png') ?>" style="margin: 0 0 0 5px; width: 105px; height: auto; border-radius: 5px; box-shadow: 1px 2px 2px rgba(0, 0, 0, 0.5);" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ms-auto p-2 ps-5" style="letter-spacing: -0.6px; background: linear-gradient(to bottom left, #3652C2, #7f2324); margin: 0; padding: 0; box-shadow: 2px 2px 4px rgba(0, 0, 0, 1);">
        <li class="nav-item mx-2">
            <a class="nav-link font-cream" aria-current="page" href="<?= base_url('') ?>">Beranda</a>
        </li>
        <li class="nav-item mx-2">
            <a class="nav-link font-cream" aria-current="page" href="<?= base_url('/filosofi') ?>">Filosofi</a>
        </li>
        <li class="nav-item dropdown mx-2">
            <a class="nav-link dropdown-toggle font-cream" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Kenalan <i>yuk</i>!
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="margin: 0;">
                <li><a class="dropdown-item" href="<?= base_url('/zidane') ?>"> Zidan <i>as</i> <i class="text-secondary text-sm">Capres</i></a></li>
                <li><a class="dropdown-item" href="<?= base_url('/rere') ?>"> Rere <i>as</i> <i class="text-secondary text-sm">Cawapres</i></a></li>
            </ul>
        </li>
        <li class="nav-item dropdown mx-2">
            <a class="nav-link dropdown-toggle font-cream" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Gagasan
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="margin: 0;">
                <li><a class="dropdown-item" href="<?= base_url('/visi-misi') ?>">Visi dan Misi</a></li>
                <li><a class="dropdown-item" href="<?= base_url('/program-kerja') ?>">Program Kerja</a></li>
                <li><a class="dropdown-item" href="<?= base_url('/nilai') ?>">Nilai</a></li>
                <li><a class="dropdown-item" href="<?= base_url('/organigram') ?>">Organigram</a></li>
            </ul>
        </li>
        <li class="nav-item mx-2">
            <a class="nav-link font-cream" href="<?= base_url('/aspirasi') ?>">Aspirasi</a>
        </li>
    </ul>
    </div>
</div>
</nav>

<style>
.navbar {
    background-color: transparent; margin: 0; padding: 0; position: absolute; top: 0; left: 0; right: 0; transition: top 0.3s;
}

.navbar-nav {
    border-bottom-left-radius: 50px;
}

.dropdown-menu {
    background-color: #7f2324;
    padding: 0;
    animation: 0.5s slideup;
}

.dropdown-item {
    background-color: #7f2324;
    color: #fff;
    border: 1px solid #fff;
    margin-top: -1px;
}

.nav-link {
    transition: transform 0.3s ease, color 0.3s ease;
}

.nav-link:hover {
    transform: scale(1.1);
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
}

.navbar-brand {
    transition: transform 0.3s ease, color 0.3s ease;
}

.navbar-brand:hover {
    transform: scale(1.1);
}

@keyframes slideup {
  from {
    transform: translateY(10%);
  }
  to {
    transform: translateY(0);
  }
}

@media only screen and (max-width: 768px) {
    .navbar {
        background-color: #7f2324;
    }
    .navbar-toggler {
        background-color: #7f2324;
        color: 1px solid white;
    }
    .navbar-toggler-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3E%3Cpath stroke='white' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E"); /* Ganti ikon menjadi putih */
    }
    .navbar-toggler:hover {
        background-color: rgba(255, 255, 255, 0.1); /* Efek hover */
    }
    .navbar-nav {
        border-bottom-left-radius: 0;
        animation: 0.5s slideup;
    }
}

@media only screen and (min-width: 769px) and (max-width: 1024px) {
    .navbar-toggler {
        background-color: #7f2324;
        color: 1px solid white;
    }
    .navbar-toggler-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3E%3Cpath stroke='white' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E"); /* Ganti ikon menjadi putih */
    }
    .navbar-toggler:hover {
        background-color: rgba(255, 255, 255, 0.1); /* Efek hover */
    }
    .navbar-nav {
        border-bottom-left-radius: 0;
        animation: 0.5s slideup;
    }
}
</style>