<h1 class="text-center m-5">Bienvenue chez Jardin du monde</h1>
<h1 class="text-center m-5">Voici nos articles</h1>

<section class="d-flex flex-wrap d-flex justify-content-evenly mb-5">
    @foreach ($trees as $item)
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
                <span>Prix : {!! $item->price == 9.99 ? '<del>'.$item->price.'</del>' .'  ->  '. $item->price - ($item->price * 10/100) : $item->price !!} €</span>
                {{-- <h5 class="card-title">price: {!! $car->discount == null ? $car->price : '<del>'.$car->price.'</del> '.$car->price-($car->price * $car->discount / 100) !!}</h5> --}}
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-secondary text-white" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="fas fa-shopping-cart"> </i>
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ajouter cet article au panier ? </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>{{$item->name}}</p>
                                <p><i>{{$item->latin}}</i></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Non merci</button>
                                <button type="button" class="btn btn-primary">Oui</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <button class="btn btn-secondary text-white"><i class="fas fa-shopping-cart"> </i></button> --}}
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
                    @csrf
                    <a class="text-decoration-none text-white" href="/edit/{{ $item->id }} ">Modifier</a>
                </button>
            </div>
        </div>
    @endforeach
</section>
