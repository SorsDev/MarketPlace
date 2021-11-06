<div>
    <div class="container">
        <div class="row">
            @foreach($products as $product)
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="{{asset('default.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">{{$product->name}}</h4>
                            <p class="card-text">{{Str::limit($product->description,30)}}</p>
                        </div>
                        <div class="card-body">
                            <button type="button" class="btn btn-dark" wire:click="add_to_cart({{$product->id}})">Agregar al carrito</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
