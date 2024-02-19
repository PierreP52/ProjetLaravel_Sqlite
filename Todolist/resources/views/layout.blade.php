<!DOCTYPE html>
<html>
<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>To-Do List</title>
</head>
<body>
    <header class="p-3 bg-dark text-white"><!--Header commun pour chaque view -->
        <div class="navbar">
            <div class="col-12 d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none"><h3>To-Do List</h3></a>
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 ml-auto">
                    <li>
                        <a class="nav-link px-2 text-secondary" href="/ajout-tache">Ajouter une nouvelle tâche</a>
                    </li>
                    <li>
                        <a class="nav-link px-2 text-secondary" href="/taches">Liste des tâches</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <main class="container d-flex justify-content-center ">
        @yield('content') <!-- C'est l'endroit où le contenu spécifique de chaque page sera injecté -->
    </main>

    <footer>
        <!-- Pied de page commun -->
    </footer>
</body>
</html>