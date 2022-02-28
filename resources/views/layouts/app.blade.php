<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- fontawesome --}}
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    {{-- bootstrap --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }} ">
    <title>eShop</title>
</head>

<body>
    <header class="p-3 bg-secondary">
        <div class="d-flex justify-content-around align-items-center">
            <div class="input-group w-50">
                <input type="text" placeholder="chercher">
                <span class="input-group-text bg-success text-white"><i class="loupe fas fa-search"></i></span>
            </div>
            <div class="d-flex justify-content-around align-items-center w-50">
                <div class="bg-success text-white">
                    <i class="far fa-user-circle"></i>
                    <button>Mon Compte</button>
                </div>
                <div class="bg-success text-white">
                    <i class="fas fa-shopping-basket"></i>
                    <button>Panier</button>
                </div>
                <div class="langue">
                    <span><span class='text-white'>FR</span> / <span>EN</span> / <span>NL</span></span>
                </div>
            </div>

        </div>
        <div class="w-75 mx-auto">
            <nav class="navbar navbar-expand-lg navbar-dark bg-secondary mt-3">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Jardin du Monde</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link active" aria-current="page" href="/">Welcome</a>
                            <a class="nav-link" href="/index">Home</a>
                            <a class="nav-link" href="#">Catégories</a>
                            <a class="nav-link" href="#">18+</a>
                            <a class="nav-link" href="#">Contact</a>
                            <a class="nav-link" href="#">Détail</a>
                            <a class="nav-link" href="/create">NewEssence</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    @yield('content')

    <footer class="py-3 bg-secondary">
        <div class="text-center mb-5">
            <h1 class="text-white mb-3">Jardin du Monde</h1>
            <p class="text-white">Vous trouverz ce qu'il vous faut pour votre jardin</p>
            <p class="text-white">même un 🌵cactus🌵</p>
        </div>
        <div class="d-flex justify-content-around">
            <div>
                <h5 class="fw-bold mb-3">A propos</h5>
                <p>Partenaires</p>
                <p>Catalogues</p>
                <p>Témoignages</p>
            </div>
            <div>
                <h5 class="fw-bold mb-3">Services</h5>
                <p>Nous écrire</p>
                <p>Payement</p>
                <p>Index botanique</p>
                <p>Livraison</p>
            </div>
            <div>
                <h5 class="fw-bold mb-3">Contact</h5>
                <p>Uttah</p>
                <p>Tokyo</p>
                <p>Bruxelles</p>
                <p>Rome</p>
            </div>
            <div>
                <h5 class="fw-bold mb-3">Réseaux sociaux</h5>

                <p><i class="fab fa-facebook"></i> Facebook</p>

                <p><i class="fab fa-instagram"></i> Instagram</p>

                <p><i class="fab fa-twitter"></i> Twitter</p>

                <p><i class="fab fa-youtube"></i> Youtube</p>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/app.js') }} "></script>
</body>

</html>
