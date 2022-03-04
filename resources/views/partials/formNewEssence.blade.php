<section class="w-50 mx-auto mb-5">
    <h1 class="text-center my-5"><a class="text-decoration-none text-dark  " href="/index">Découvrir le site 👉</a></h1>
    <div class="bg-success py-5">
        <h1 class="text-center text-white">Insérer une nouvelle essence</h1>
       
        <form class="w-75 mx-auto" action="/store" method="POST">
            @csrf
            <div class="mb-3">
              <label for="addTreeInputName" class="form-label">Nom</label>
              <input name="name" type="text" class="form-control" id="addTreeInputName"
                  aria-describedby="addTreeInputNameHelp">
          </div>
          <div class="mb-3">
              <label for="addTreeInputLatin" class="form-label">Nom latin</label>
              <input name="latin" type="text" class="form-control" id="addTreeInputLatin"
                  aria-describedby="addTreeInputLatinHelp">
          </div>
          <div class="mb-3">
              <label for="addTreeInputMin" class="form-label">Longueur min du pot</label>
              <input name="minLenger" type="number" class="form-control" id="addTreeInputMin"
                  aria-describedby="addTreeInputMinHelp">
          </div>
          <div class="mb-3">
              <label for="addTreeInputMax" class="form-label">Longueur max du pot</label>
              <input name="maxLenger" type="number" class="form-control" id="addTreeInputMax"
                  aria-describedby="addTreeInputMaxHelp">
          </div>
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Prix</label>
              <input name="price" type="number" step="0.01" class="form-control" id="exampleInputEmail1"
                  aria-describedby="exampleInputEmail1Help">
          </div>
          <div class="mb-3">
              <label for="addTreeInputType" class="form-label">Type</label>
              <input name="type" type="text" class="form-control" id="addTreeInputType"
                  aria-describedby="addTreeInputTypeHelp">
          </div>
          <div class="mb-3">
              <label for="addTreeInputUrl" class="form-label">URL</label>
              <input name="url" type="text" class="form-control" id="addTreeInputUrl"
                  aria-describedby="addTreeInputUrlHelp">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
          </form>

    </div>
</section>