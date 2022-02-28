<!DOCTYPE html>
<html lang="en">

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
    <header class="d-flex justify-content-around align-items-center p-3 bg-secondary">
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
                <span><span class='text-success'>FR</span> / <span>EN</span> / <span>NL</span></span>
            </div>
        </div>
    </header>

    @yield('content')

    <footer class="fixed-bottom py-3 bg-secondary">
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
