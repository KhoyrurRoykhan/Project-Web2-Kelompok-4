@extends('fauna/menu')
@section('konten')
    <div class="container py-5">
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        <div class="d-flex align-items-center justify-content-between mb-5">
            <h1>Fauna Pulau Kalimantan</h1>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addItem">
                Tambah Fauna
            </button>
        </div>
        <div class="row">
            @foreach ($items as $item)
                <div class="col-md-4">
                    <div class="card border-0 mb-3">
                        <center><img src="{{ url('storage/' . $item->image) }}" alt="" class="" height="200px" width="200px"></center>
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->title }}</h5>
                            <p class="mb-0 text-secondary">{{ $item->description }}</p>

                            <button type="button" class="btn btn-success">Read More</button>
                            <form action="{{ route('fauna.destroy', $item->id) }}" method="POST" style="display: inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#editItem{{ $item->id }}">
                                Edit
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Modal Edit -->
                <div class="modal" id="editItem{{ $item->id }}" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Fauna</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="mo dal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('fauna.update', $item->id) }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-3">
                                        <label for="title">Judul Artikel</label>
                                        <input type="text" class="form-control" name="title" id="title"
                                            value="{{ $item->title }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="image">Image</label>
                                        <input type="file" accept="image/*" class="form-control" name="image"
                                            id="image">
                                    </div>
                                    <div class="mb-3">
                                        <label for="description">Deskripsi</label>
                                        <textarea name="description" id="description" cols="30" rows="5" class="form-control">{{ $item->description }}</textarea>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Edit Fauna</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="modal" id="addItem" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Fauna Baru</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('fauna.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="title">Nama Fauna</label>
                                <input type="text" class="form-control" name="title" id="title">
                            </div>
                            <div class="mb-3">
                                <label for="image">Image</label>
                                <input type="file" accept="image/*" class="form-control" name="image" id="image">
                            </div>
                            <div class="mb-3">
                                <label for="description">Deskripsi</label>
                                <textarea name="description" id="description" cols="30" rows="5" class="form-control"></textarea>
                            </div>
                            <button class="btn btn-primary" type="submit">Tambah Fauna</button>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
