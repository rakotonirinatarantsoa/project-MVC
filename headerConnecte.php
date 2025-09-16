<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
            <h1>Tickeko<span>.</span></h1>
        </a>
        <div class="recherche">
            <form action="evenement" method="get">
                <input type="text" placeholder="Rechercher" name="recherche" class="barre-recherche" value="<?php esc($_GET['recherche'] ?? '') ?>">
                <button class="search-btn">
                    <i class="search-icon bi bi-search"></i>
                </button>
            </form>
        </div>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="#">Accueil</a></li>
                <li><a href="#why-us">About</a></li>
                <li><a href="#events">Evènements</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
        <div class="left-section">
            <i class="bi bi-person-circle profile-icon" style="font-size: 24px; color: #858585ff; margin-left: 8px;"></i>
            <p class="profil-text">Profil</p>
        </div>
        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    </div>
</header>