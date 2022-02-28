<section class="w-50 mx-auto mb-5">
    <h1 class="text-center my-5"><a class="text-decoration-none text-dark  " href="/home">Découvrir le site 👉</a></h1>
    <div class="bg-success py-5">
        <h1 class="text-center text-white">Insérer une nouvelle essence</h1>
       
        <form class="w-75 mx-auto" action="/store" method="POST">
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
              <input name="price" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Type</label>
              <input name="type" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">URL</label>
              <input name="url" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>

    </div>
</section>