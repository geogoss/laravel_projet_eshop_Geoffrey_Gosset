<section class="w-50 mx-auto my-5">
    <div class="bg-danger py-5">
        <h1 class="text-center text-white">Modifier {{$edit->name}} </h1>
       
        <form class="w-75 mx-auto" action="/edit/{id}" method="PATCH">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nom</label>
              <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nom latin</label>
              <input name="latin" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Longueur min du pot</label>
              <input name="minLenger" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Longueur max du pot</label>
              <input name="maxLenger" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Prix</label>
              <input name="price" type="number" step="0.01"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Type</label>
              <input name="type" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">URL</label>
              <input name="url" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <form action="/update/{{ $edit->id }}" method="POST">
              @csrf
              @method('PATCH')
              <button type="submit" class="btn btn-primary">Modifier</button>
          </form>
          </form>

    </div>
</section>