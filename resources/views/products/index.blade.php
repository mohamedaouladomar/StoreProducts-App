@extends('layout')

@section('content')
<div class="container mt-5">
  <h1 class="display-5 font-weight-bold text-uppercase text-primary text-center mb-3 border-bottom">ALL PRODUCTS
    <img  src="https://i.gifer.com/8B9C.gif">
  </h1>
 
  <br>

  <div class="d-flex justify-content-between align-items-center mb-3">
    <a href="{{ route('products.create') }}" class="btn btn-primary">ADD Products</a>
    <span class="badge badge-primary" style="color: rgb(238, 0, 0)">{{ $products->total() }} products found</span>
  </div>


  <form class="d-flex" action="{{ route('products.index') }}" method="GET">
    <input class="form-control me-2 inpsrch" type="search" placeholder="Search" aria-label="Search" name="search">
    <button class="btn btn-outline-primary btsrch" type="submit">Search</button>
  </form>

  <div class="table-responsive">
    @if ($products->count() > 0)
      <table class="table table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>NAME</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($products as $product)
          <tr>
            <td>{{ $product['id'] }}</td>
            <td>{{ $product['name'] }}</td>
            <td><a href="{{ route('products.show', ['product' => $product['id']]) }}" class="link-danger">View details</a></td>
          </tr>
          @endforeach
        </tbody>
        <tfoot>
          <tr>
              <td colspan="2">{{ $products->links('pagination::bootstrap-4') }}</td>
              <td>
                  {{-- <form action="{{ route('products.clearstock') }}" method="POST">
                      @csrf
                      <button type="submit" class="btn btn-danger clearstock">Clear stock </button>
                  </form> --}}
              </td>
          </tr>
      </tfoot>
      
      </table>
    @else
      <p class="text-center">Products not found</p>
    @endif
  </div>
</div>

@endsection

@section('title', 'Products')


<style>
.pagination li a, .pagination li span {
    font-size: 0.9rem;
}
img{
  width: 160px;
  height: 130px;
}
</style>