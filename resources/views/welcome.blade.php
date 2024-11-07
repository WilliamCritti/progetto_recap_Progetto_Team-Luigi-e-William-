<x-layout>

    <div class="container">
        <div class="row">
            @foreach ($drago as $drago)
                <div class="col-12 col-md-6 d-flex justify-content-center align-items-center mt-3">
                     <x-card 
                     :drago="$drago" 
                     
                     />
                    
                </div>
            @endforeach
        </div>
    </div>
 

   
</x-layout>