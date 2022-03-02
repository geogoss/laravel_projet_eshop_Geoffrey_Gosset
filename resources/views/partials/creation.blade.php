<section class="d-flex flex-wrap d-flex justify-content-evenly">
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
                <span>Prix : {{ $item->price }} €</span>
                
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-secondary text-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <i class="fas fa-shopping-cart"> </i>
                </button>
                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Understood</button>
                            </div>
                        </div>
                    </div>
                </div>
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
                    @method('PATCH')
                    <a class="text-decoration-none text-white" href="/edit/{{ $item->id }} ">Modifier</a>
                </button>
            </div>
        </div>
    @endforeach
</section>
