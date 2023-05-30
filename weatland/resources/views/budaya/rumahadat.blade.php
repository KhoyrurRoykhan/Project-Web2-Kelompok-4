@extends('budaya/menu')
@section('konten')
    <div class="container py-5">
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        <div class="d-flex align-items-center justify-content-between mb-5">
            <h1>Artikel Rumah Adat</h1>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addItem">
                Tambah Artikel
            </button>
        </div>
        <div class="row">
            @foreach ($items as $item)
                <div class="col-md-4">
                    <div class="card border-0 mb-3">
                        <img src="{{ url('storage/' . $item->image) }}" alt="" class="" height="200px"
                            height="200px">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->title }}</h5>
                            <p class="mb-0 text-secondary">{!! htmlspecialchars_decode(substr($item->description, 0, 10)) !!}.....</p>
                            <a href="{{ route('readmore.artikel', ['id' => $item->id]) }}" class="btn btn-success">Read
                                More</a>

                            <form action="{{ route('artikel.destroy', $item->id) }}" method="POST" style="display: inline">
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


                <div class="modal" id="editItem{{ $item->id }}" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Artikel</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('artikel.update', $item->id) }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-3">
                                        <label for="title">Judul Artikel</label>
                                        <input type="text" class="form-control" name="title" id="title{{ $item->id }}"
                                            value="{{ $item->title }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="image">Image</label>
                                        <input type="file" accept="image/*" class="form-control" name="image" id="image{{ $item->id }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="description">Deskripsi</label>
                                        <textarea name="description" id="editdesc{{ $item->id }}" cols="30" rows="5" class="form-control">{{ $item->description }}</textarea>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Edit Artikel</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    ClassicEditor
                        .create(document.querySelector('#editdesc{{ $item->id }}'))
                        .catch(error => {
                            console.error(error);
                        });
            
                    function openEditModal(id) {
                        var titleInput = document.querySelector('#title' + id);
                        var descInput = document.querySelector('#editdesc' + id);
                        var titleValue = titleInput.value;
                        var descValue = descInput.value;
            
                        // Set value to modal form
                        var modalTitle = document.querySelector('#editItem' + id + ' .modal-title');
                        var modalDesc = document.querySelector('#editItem' + id + ' #editdesc' + id);
                        modalTitle.textContent = 'Edit Artikel - ' + titleValue;
                        modalDesc.value = descValue;
                    }
                </script>
            @endforeach
        </div>

        <div class="modal" id="addItem" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Artikel Baru</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('artikel.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="title">Judul Artikel</label>
                                <input type="text" class="form-control" name="title" id="title">
                            </div>
                            <div class="mb-3">
                                <label for="image">Image</label>
                                <input type="file" accept="image/*" class="form-control" name="image" id="image">
                            </div>
                            <div class="mb-3">
                                <label for="description">Deskripsi</label>
                                <textarea name="description" id="tambahdesc" cols="30" rows="5" class="form-control"></textarea>
                                <script>
                                    ClassicEditor
                                        .create( document.querySelector( '#tambahdesc' ) )
                                        .catch( error => {
                                            console.error( error );
                                        } );
                                </script>
                            </div>
                            <button class="btn btn-primary" type="submit">Tambah Artikel</button>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
