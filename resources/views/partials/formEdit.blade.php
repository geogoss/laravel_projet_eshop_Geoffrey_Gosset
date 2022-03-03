<section class="w-50 mx-auto my-5">
    <div class="bg-danger py-5">
        <h1 class="text-center text-white">Modifier {{ $edit->name }} </h1>


        <form class="w-75 mx-auto" action="/update/{{ $edit->id }}" method="post">
            @csrf   
            
            <div class="mb-3">
                <label for="addTreeInputName" class="form-label">Nom</label>
                <input name="name" type="text" value="{{$edit->name}} " class="form-control" id="addTreeInputName"
                    aria-describedby="addTreeInputNameHelp">
            </div>
            <div class="mb-3">
                <label for="addTreeInputLatin" class="form-label">Nom latin</label>
                <input name="latin" type="text" value="{{$edit->latin}}"  class="form-control" id="addTreeInputLatin"
                    aria-describedby="addTreeInputLatinHelp">
            </div>
            <div class="mb-3">
                <label for="addTreeInputMin" class="form-label">Longueur min du pot</label>
                <input name="minLenger" type="number" value={{$edit->minLenger}} class="form-control" id="addTreeInputMin"
                    aria-describedby="addTreeInputMinHelp">
            </div>
            <div class="mb-3">
                <label for="addTreeInputMax" class="form-label">Longueur max du pot</label>
                <input name="maxLenger" type="number" value="{{$edit->maxLenger}}" class="form-control" id="addTreeInputMax"
                    aria-describedby="addTreeInputMaxHelp">
            </div>
            <div class="mb-3">
                <label for="addTreeInputPrice" class="form-label">Prix</label>
                <input name="price" type="number" value="{{$edit->price}}" step="0.01" class="form-control" id="addTreeInputPrice"
                    aria-describedby="addTreeInputPriceHelp">
            </div>
            <div class="mb-3">
                <label for="addTreeInputType" class="form-label">Type</label>
                <input name="type" type="text" value="{{$edit->type}} " class="form-control" id="addTreeInputType"
                    aria-describedby="addTreeInputTypeHelp">
            </div>
            <div class="mb-3">
                <label for="addTreeInputUrl" class="form-label">URL</label>
                <input name="url" type="text" value="{{$edit->url}} " class="form-control" id="addTreeInputUrl"
                    aria-describedby="addTreeInputUrlHelp">
            </div>
            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>

    </div>
</section>

