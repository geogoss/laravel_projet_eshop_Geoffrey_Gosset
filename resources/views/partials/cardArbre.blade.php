<div class="d-flex justify-content-around my-5">
    <button class="btn btn-success border border-dark p-3"><a class="text-decoration-none text-white" href="/arbre">Arbres</a></button>
    <button class="btn btn-success border border-dark p-3"><a class="text-decoration-none text-white" href="/arbuste">Arbustes</a></button>
    <button class="btn btn-success border border-dark p-3"><a class="text-decoration-none text-white" href="/fruitier">Fruitiers</a></button>
    <button class="btn btn-primary border border-dark p-3"><a class="text-decoration-none text-white" href="/prix">Prix</a></button>
</div>

<h1 class="text-center m-5">Les arbres</h1>
<section class="d-flex flex-wrap d-flex justify-content-evenly">
    @foreach ($arbres as $item)
        <div class="card m-3" style="width: 18rem;">
            <img src="{{ $item->url }} " class="card-img-top" alt="...">
            <div class="card-header">
                <h5 class="card-title">{{ $item->name }} </h5>
                <span class="text-secondary"><i>{{ $item->latin }}</i></span>
            </div>
            <div class="card-body">
                <p>Mesure du plant/taille du pot</p>
                <span>{{ $item->minLenger }}/{{ $item->maxLenger }} cm pot 1L </span>
            </div>
            <div class="card-footer d-flex justify-content-between">
                <span>Prix : {{ $item->price }} €</span>
                <button class="btn btn-secondary text-white"><i class="fas fa-shopping-cart"> </i></button>
            </div>
            <div class="d-flex justify-content-between">
                <form action="/delete/{{ $item->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
                <button class="btn btn-success">
                    <a class="text-decoration-none text-white" href="/show/{{ $item->id }} ">Détails</a>
                </button>
                <button class="btn btn-primary">
                    <a class="text-decoration-none text-white" href="/edit/{{ $item->id }} ">Modifier</a>
                </button>
            </div>
        </div>
    @endforeach
</section>
