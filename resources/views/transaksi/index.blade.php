<x-app-layout>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Order Pembayaran') }}
            </h2>
        </x-slot>

        <div class="col-lg-8 mt-3">
            <div class="mb-3">
                <label for="name" class="form-label @error('name') is-invalid  @enderror">Code</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}"
                    autofocus>
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="name" class="form-label @error('name') is-invalid  @enderror">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}"
                    autofocus>
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price" class="form-label @error('price') is-invalid  @enderror">Price</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}">
                @error('price')
                    <div class="invalid-feedback">
                        <p>tittle has been used, please using another title</p>
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="qty" class="form-label @error('qty') is-invalid  @enderror">Qty</label>
                <input type="text" class="form-control" id="qty" name="qty" value="{{ old('qty') }}">
                @error('qty')
                    <div class="invalid-feedback">
                        <p>tittle has been used, please using another title</p>
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="qty" class="form-label @error('qty') is-invalid  @enderror">Additional
                    Information</label>
                <input type="text" class="form-control" id="qty" name="qty" value="{{ old('qty') }}">
                @error('qty')
                    <div class="invalid-feedback">
                        <p>tittle has been used, please using another title</p>
                    </div>
                @enderror
            </div>
            {{-- <div class="mb-3">
                    <label for="image" class="form-label @error('image') is-invalid @enderror">Images</label>
                    <input class="form-control" type="file" id="image" name="image">
                    @error('image')
                        <div class="invalid-feedback">
                            <p>{{ $messages }}</p>
                        </div>
                    @enderror
                </div> --}}
            {{-- <a href="/dashboard/posts/getSlug">asdf</a> --}}

            <a href = "{{route('transaction.create')}}" class="btn btn-primary mb-5 dark">Order</a>

            <p>Kirim ke BRI : 090129120039, dana : 082038320</p>
        </div>
    </main>
</x-app-layout>
