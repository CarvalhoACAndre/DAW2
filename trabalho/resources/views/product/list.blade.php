<div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif
<x-master>
<x-slot name="header">
</x-slot>
<div class="py-12">
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
<div class="p-6 text-gray-900">
@if(session()->has('success'))
<d iv class="bg-green-100 border border-green-400 text-white-700 px-4 py-3 rounded
relative" role="alert"">
{{ session()->get('success') }}
</div>
@endif
@if(session()->has('error'))
<div class="bg-red-100 border border-red-400 text-white-700 px-4 py-3 rounded relative"
role="alert"">
{{ session()->get('error') }}
</div>
@endif
				


				
						<a class="btn btn-outline-dark" href="{{ route('shopping.cart') }}">
							<i class="fa-solid fa-cart-shopping"></i> Cart <span class="badge text-bg-danger">{{ count((array) session('cart')) }}</span>
						</a>
				<form action="{{ route('products.create' )}}" method="GET">
				{{ csrf_field() }}
				<button class="py-2 px-4 bg-red-500 text-white font-semibold rounded-lg shadow-md hover:bg-red-700
				focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-opacity-75" type="submit">Novo</button>
				</form>

<table id="list">
<thead>
<tr>
<th>Id</th>
<th>Title</th>
<th>Code</th>
<th>Description</th>
<th>Price</th>
<th>Image</th>
<td colspan="2">Action</td>
</tr>
</thead>
<tbody>
@foreach($products as $product)
<tr>
<td>{{ $product->id }}</td>
<td>{{ $product->title }}</td>
<td>{{ $product->code }}</td>
<td>{{ $product->description }}</td>
<td>{{ $product->price }}</td>
<td><img src="{{ url('storage/'.$product->image) }}" alt="Bad"/></td>
<td><a href="{{ route('products.edit',$product->id) }}">Edit</a></td>
<td><a href="{{ route('addProduct.to.cart',$product->id) }}">Add to cart</a></td>
<td>
<form action="{{ route('products.destroy', $product->id)}}" method="post">
{{ csrf_field() }}
@method('DELETE')
<button class="py-2 px-4 bg-red-500 text-white font-semibold rounded-lg shadow-md
hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-opacity-75" type="submit">Delete</button>
</form>
</td>
</tr>
@endforeach
</tbody>
</table>
<div class="sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
{{ $products->links()}}
</div>
</div>
</div>
</div>
</div>
</x-master>

