<x-app-layout>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Pembayaran</h1>
        </div>

        <div class="col-lg-8">
            <form method="POST" action="{{ route('transaction.create') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label @error('name') is-invalid  @enderror">Nomor Invoice</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}"
                        autofocus>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label @error('price') is-invalid  @enderror">Metode Pembayaran</label>
                    <input type="text" class="form-control" id="price" name="price"
                        value="{{ old('price') }}">
                    @error('price')
                        <div class="invalid-feedback">
                            <p>tittle has been used, please using another title</p>
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="qty" class="form-label @error('qty') is-invalid  @enderror">Atas Nama</label>
                    <input type="text" class="form-control" id="qty" name="qty"
                        value="{{ old('qty') }}">
                    @error('qty')
                        <div class="invalid-feedback">
                            <p>tittle has been used, please using another title</p>
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="qty" class="form-label @error('qty') is-invalid  @enderror">Nominal Transfer</label>
                    <input type="text" class="form-control" id="qty" name="qty"
                        value="{{ old('qty') }}">
                    @error('qty')
                        <div class="invalid-feedback">
                            <p>tittle has been used, please using another title</p>
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="qty" class="form-label @error('qty') is-invalid  @enderror">Tanggal Transfer</label>
                    <input type="date" class="form-control" id="qty" name="qty"
                        value="{{ old('qty') }}">
                    @error('qty')
                        <div class="invalid-feedback">
                            <p>tittle has been used, please using another title</p>
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="qty" class="form-label @error('qty') is-invalid  @enderror">Email</label>
                    <input type="email" class="form-control" id="qty" name="qty"
                        value="{{ old('qty') }}">
                    @error('qty')
                        <div class="invalid-feedback">
                            <p>tittle has been used, please using another title</p>
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="qty" class="form-label @error('qty') is-invalid  @enderror">Bukti Pembayaran</label>
                    <input type="file" class="form-control" id="qty" name="qty"
                        value="{{ old('qty') }}">
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

                <button type="submit" class="btn btn-primary mb-5">Create Post</button>
            </form>
        </div>
    </main>
</x-app-layout>
