@extends('layout')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <br><br>
      <h1 class="display-5 font-weight-bold text-uppercase text-primary text-center mb-3 border-bottom"> PRODUCTS EDIT
        <img  src="https://i.gifer.com/8B9C.gif">
      </h1>
      <br>
      <form action="{{route('products.update',['product'=>$product->id])}}" method="post">
        @csrf
        @method('PUT')

        <div class="mb-3">
          <label for="product-name" class="form-label">PRODUCT NAME:</label>
          <input type="text" name="product-name" value="{{$product->name}}" id="product-name" class="form-control">
          @error('product-name')
            <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="mb-3">
          <label for="product-price" class="form-label">PRICE:</label>
          <input type="number" name="product-price" value="{{$product->price}}" id="product-price" class="form-control">
          @error('product-price')
            <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="mb-3">
          <label for="product-country" class="form-label">DESCREPTION:</label>
          <input type="text" name="product-country" value="{{$product->country}}" id="product-country" class="form-control">
          @error('product-country')
            <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="mb-3">
          <label for="product-stock" class="form-label">STOCK:</label>
          <input type="number" name="product-stock" value="{{$product->stock}}" id="product-stock" class="form-control">
          @error('product-stock')
            <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="d-grid gap-2">
          <button type="submit" class="btn btn-primary">EDIT Product Now</button>
        </div>
      </form>
    </div>
  </div>
</div>
  
@endsection

@section('title', 'Edit product')





<style>
img{
  width: 160px;
  height: 130px;
}
  </style


