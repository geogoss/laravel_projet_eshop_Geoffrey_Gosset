<section class="container">
    <div class="d-flex justify-content-around my-5">
        <button class="btn btn-success border border-dark p-3"><a class="text-decoration-none text-white" href="/arbre">Arbres</a></button>
        <button class="btn btn-success border border-dark p-3"><a class="text-decoration-none text-white" href="/arbuste">Arbustes</a></button>
        <button class="btn btn-success border border-dark p-3"><a class="text-decoration-none text-white" href="/fruitier">Fruitiers</a></button>
        <button class="btn btn-primary border border-dark p-3"><a class="text-decoration-none text-white" href="/prix">Prix</a></button>
        <button class="btn btn-primary border border-dark p-3"><a class="text-decoration-none text-white" href="/prix/classement">Prix classement</a></button>
    </div>

    <table class="table table-striped table-info">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Nom latin</th>
            <th scope="col">Type</th>
            <th scope="col">Prix</th>
            <th scope="col">Modifier</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($prix as $item)
            @if ($item->price >= 20)
            <tr class="table-danger">
                
            @elseif ($item->price < 10)
                <tr class="table-warning">
            @else
                <tr>  
            @endif
                <th scope="row">{{$item->id}} </th>
                <td>{{$item->name}}</td>
                <td>{{$item->latin}}</td>
                <td>{{$item->type}}</td>
                <td>{{$item->price}}</td>
                <td>
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
        
                </td>
              </tr>
    
            @endforeach
        </tbody>
      </table>
</section>