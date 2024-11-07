<a class=" text-decoration-none" href="{{route('show',['id' => $drago['id']])}}">
<div class=" " style="width: 15rem;">
  <img src="{{$drago['image']}}" class="card-img-top" alt="...">
  <div class="card-body">

    <h2 class="card-title text-white">{{$drago['name']}}</h5>
      <h3 class="mt-5">Potenza</h3>
    <p class="card-text text-white">{{$drago['ki']}}</p>
    <h4>Razza</h4>
    <p class="card-text text-white">{{$drago['race']}}</p>
    <h4>Descrizione</h4>
    <p class="card-text text-white">{{Str::limit($drago['description'], 200) }}</p>
    
  </div>
</div>
</a>



