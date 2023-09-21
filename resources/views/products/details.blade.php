@extends('layout')

@section('content')
<div class="container my-5">
  <div class="row">
    <div class="col-12 text-center mb-5">
      <h1 class="display-5 font-weight-bold text-uppercase text-primary text-center mb-3   border-bottom">View Product
        <img  src="https://i.gifer.com/8B9C.gif">  
      </h1><br>
    </div>
    <div class="col-md-6 offset-md-3">
      <div class="card shadow-sm">
        <div class="card-body">
          <div class="form-group row">
            <label for="id" class="col-sm-4 col-form-label">ID :</label>
            <div class="col-sm-8">
              <p class="form-control-plaintext">{{ $product['id'] }}</p>
            </div>
          </div>
          <div class="form-group row">
            <label for="name" class="col-sm-4 col-form-label">Name :</label>
            <div class="col-sm-8">
              <p class="form-control-plaintext">{{ $product['name'] }}</p>
            </div>
          </div>
          <div class="form-group row">
            <label for="price" class="col-sm-4 col-form-label">Price :</label>
            <div class="col-sm-8">
              <p class="form-control-plaintext">{{ $product['price'] }}</p>
            </div>
          </div>
          <div class="form-group row">
            <label for="description" class="col-sm-4 col-form-label">Description :</label>
            <div class="col-sm-8">
              <p class="form-control-plaintext">{{ $product['country'] }}</p>
            </div>
          </div>
          <div class="form-group row">
            <label for="stock" class="col-sm-4 col-form-label">Stock :</label>
            <div class="col-sm-8">
              <p class="form-control-plaintext">{{ $product['stock'] }}</p>
            </div>
          </div>
          <hr>
          <div class="text-center mt-4">
            <a href="{{route('products.edit' , $product->id)}}" class="btn btn-primary mx-3">Edit Product</a>
            <form action="{{route('products.destroy' , $product->id)}}" method="post" class="d-inline-block">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger mx-3">Delete Product</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection

@section('title', 'Details Products')

<style>



img{
  width: 160px;
  height: 130px;
}



</style>