<x-layout>
<div class="container-fluid">
  <div class="row ">
    <div class="col-12 d-flex justify-content-center mt-5">
      <div class="" style="width: 17rem;">
        <img src="{{$drago['image']}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-white">{{$drago['name']}}</h5>
          <p class="card-text text-white">{{Str::limit($drago['description'], 500) }}</p>
        </div>
      </div>
    </div>
  </div>
</div>

</x-layout>