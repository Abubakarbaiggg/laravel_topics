@extends('components.main')
@section('content')
    <div class="container">
        <div class="row">
            <div>
                <div class="card mt-5">
                    <div class="card-header">
                        <h4 class="card-title">Buy Product</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{route('products.buyProduct',$product->id)}}" method="POST">
                            @csrf
                            <input type="text" name="product_id" id="product_id" value="{{$product->id}}" hidden>
                            <div class="mb-3">
                                <label for="name" class="form-label">Product Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ $product->name }}" readonly />
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Price</label>
                                <input type="text" class="form-control" id="price" name="price"
                                    value="{{ $product->price }}" readonly />
                            </div>
                            <div class="mb-3">
                                <label for="quantity" class="form-label">Quantity</label>
                                <input type="number" class="form-control" id="quantity" name="quantity" value="1"
                                    min="1" max="{{ $product->stock }}" required />
                            </div>
                            <button type="submit" class="btn btn-primary">Buy Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
