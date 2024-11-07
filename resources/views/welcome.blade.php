<x-layout>

    <div class="container">
        <div class="row">
            @foreach ($dragon as $drago)
                <div class="col-12 col-md-6">
                     <x-card 
                     :drago="$drago" 
                     
                     />
                    
                </div>
            @endforeach
        </div>
    </div>
 

   
</x-layout>