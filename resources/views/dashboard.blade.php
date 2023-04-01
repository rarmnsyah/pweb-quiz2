<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session('success'))
                <div class="alert alert-success col-lg-8" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            @if (auth()->user()->type === 'ADM')
                <a href="{{ route('product.create') }}" class="btn btn-primary mb-3">Add New Product</a>
            @endif
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Qty</th>
                            <th scope="col">Image</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <th scope="row">1</th>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->qty }}</td>
                                <td><img src="{{ $product->image }}" width="120px" alt=""></td>
                                @if (auth()->user()->type === 'ADM')
                                    <td>
                                        <a href="/dashboard/posts/1/edit"> <span
                                                class="badge bg-warning position-relative">Edit</span></a>
                                        <form action="/dashboard/posts/1 " method="post" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button onclick="return confirm('yakin mau delete dex?')"><span
                                                    class="badge bg-danger border-0 position-relative">Delete</span></button>
                                        </form>
                                    </td>
                                @else
                                    <td>
                                        <a href="{{route('transaction.index')}}"> <span
                                                class="badge bg-info position-relative">Beli</span></a>
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
