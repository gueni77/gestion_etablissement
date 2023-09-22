<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <title>C-PEDAGO</title>
        <link rel="stylesheet" href="../STYLES/style.css" />
        <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

        <!-- Boxicons CDN Link -->
        <link
            href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    </head>
        <body>
    <div class="sidebar">
        <div class="logo-details">
            <i class="bx bxl-c-plus-plus"></i>
            <span class="logo_name">CURAT</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="../VIEW/tb.php" class="active">
                    <i class="bx bx-grid-alt"></i>
                    <span class="links_name">tableau de bord</span>
                </a>
            </li>
        
            <li class="sidebar-item">
                        <a href="../FORMULAIRE/form_candidat.php" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#candidat"
                            aria-expanded="false" aria-controls="candidat">
                            <i class="fa-solid fa-list pe-2"></i>
                            Profile
                        </a>
                        <ul id="candidat" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="../FORMULAIRE/form_candidat.php" class="sidebar-link"><i class="fa-solid fa-users-viewfinder"></i>
                                    Candidats
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link"><i class="fas fa-graduation-cap"></i>
                                    Étudiants
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link"><i class="fa-solid fa-chalkboard-user"></i>
                                    Enseignants
                                </a>
                            </li>
                        </ul>
                    </li>
            
            
           <!-- <li>
                <a href="../VIEW/candidat.php">
                    <i class="fa-solid fa-users-viewfinder"></i>
                    <span class="links_name">Candidat</span>
                </a>
            </li>-->
            <li>
                    <a href="#">
                        <i class="bx bx-list-ul"></i>
                        <span class="links_name">Commandes</span>
                    </a>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-pie-chart-alt-2"></i>
                    <span class="links_name">Analyses</span>
                </a>
            </li>
            <li>
                    <a href="#">
                        <i class="bx bx-coin-stack"></i>
                        <span class="links_name">Stock</span>
                    </a>
            </li>
            <li>
                    <a href="#">
                        <i class="bx bx-book-alt"></i>
                        <span class="links_name">Tout les commmandes</span>
                    </a>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-user"></i>
                    <span class="links_name">Utilisateur</span>
                </a>
            </li>
            <!-- <li>
                <a href="#">
                    <i class="bx bx-message" ></i>
                    <span class="links_name">Messages</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-heart" ></i>
                    <span class="links_name">Favrorites</span>
                </a>
            </li> -->
            <li>
                <a href="#">
                    <i class="bx bx-cog"></i>
                    <span class="links_name">Configuration</span>
                </a>
            </li>
            <li class="log_out">
                <a href="#">
                    <i class="bx bx-log-out"></i>
                    <span class="links_name">Déconnexion</span>
                </a>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class="bx bx-menu sidebarBtn"></i>
                <span class="dashboard">APK CURAT: Schoolsytem</span>
            </div>
            <div class="search-box">
                <input type="text" placeholder="Recherche..." />
                <i class="bx bx-search"></i>
            </div>
            <div class="profile-details">
            <!--<img src="images/profile.jpg" alt="">-->
                <span class="admin_name">Admin</span>
                <i class="bx bx-chevron-down"></i>
            </div>
        </nav>
