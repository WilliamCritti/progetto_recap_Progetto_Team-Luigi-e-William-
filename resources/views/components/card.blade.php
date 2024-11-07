<a href="{{route('show',['id' => $drago['id']])}}">
<div class="card" style="width: 18rem;">
  <img src="{{$drago['image']}}" class="card-img-top" alt="...">
  <div class="card-body">

    <h2 class="card-title">{{$drago['name']}}</h5>
      <h3 class="mt-5">Potenza</h3>
    <p class="card-text">{{$drago['ki']}}</p>
    <h4>Razza</h4>
    <p class="card-text">{{$drago['race']}}</p>
    <h4>Descrizione</h4>
    <p class="card-text">{{Str::limit($drago['description'], 200) }}</p>
    <a href="{{route('show')}}" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</a>



