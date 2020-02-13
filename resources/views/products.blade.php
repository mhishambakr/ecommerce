<html>
@extends('style.head')
</html>

<div class="container">
    <div class="page-header">
        <h1>Products</h1>
    </div>
</div>
<div class="container">
        <div class="row jumbotron">
            @foreach($products as $product)
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <h2><a href="{{url('products/'.$product->id)}}">{{$product->name}}</a></h2>
                    <p>{{$product->desc}}</p>
                    <p>{{$product->price}}</p>
                </div>
            @endforeach
        </div>
</div>