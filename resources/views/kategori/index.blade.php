@extends('masterdb')
@section('konten')
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Kelola <b>Kategori</b></h2>
                    </div>
                    <div class="col-sm-6">
                        <a href="#addCategoryModal" class="btn btn-success" data-toggle="modal"><i
                                class="material-icons">&#xE147;</i> <span>Tambah Kategori</span></a>
                        <a href="#deleteCategoryModal" class="btn btn-danger" data-toggle="modal"><i
                                class="material-icons">&#xE15C;</i> <span>Hapus</span></a>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>
                            <span class="custom-checkbox">
                                <input type="checkbox" id="selectAll">
                                <label for="selectAll"></label>
                            </span>
                        </th>
                        <th>No.</th>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kategori as $category)
                    <tr>
                        <td>
                            <span class="custom-checkbox">
                                <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                <label for="checkbox1"></label>
                            </span>
                        </td>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $category->id_kategori }}</td>
                        <td>{{ $category->nama }}</td>
                        <td>
                            <a href="#editCategoryModal{{ $category->id }}" class="edit" data-toggle="modal"><i
                                    class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a href="#deleteCategoryModal{{ $category->id }}" class="delete" data-toggle="modal"><i
                                    class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
            </table>
            <div class="clearfix">
                <div class="hint-text">Menampilkan <b>{{ $kategori->firstItem() }}</b> hingga <b>{{
                        $kategori->lastItem() }}</b> dari <b>{{ $kategori->total() }}</b> entri</div>
                <ul class="pagination">
                    @if ($kategori->currentPage() > 1)
                    <li class="page-item"><a href="{{ $kategori->previousPageUrl() }}" class="page-link">Sebelumnya</a>
                    </li>
                    @else
                    <li class="page-item disabled"><a href="#" class="page-link">Sebelumnya</a></li>
                    @endif

                    @for ($i = 1; $i <= $kategori->lastPage(); $i++)
                        <li class="page-item {{ $i == $kategori->currentPage() ? 'active' : '' }}"><a
                                href="{{ $kategori->url($i) }}" class="page-link">{{ $i }}</a></li>
                        @endfor

                        @if ($kategori->currentPage() < $kategori->lastPage())
                            <li class="page-item"><a href="{{ $kategori->nextPageUrl() }}"
                                    class="page-link">Berikutnya</a></li>
                            @else
                            <li class="page-item disabled"><a href="#" class="page-link">Berikutnya</a></li>
                            @endif
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Tambah Modal HTML -->
<div id="addCategoryModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="{{ route('kategori.store') }}">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Kategori</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>ID</label>
                        <input type="text" class="form-control" name="id_kategori" required>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="cancel">
                    <input type="submit" class="btn btn-success" value="Add">
                </div>
            </form>
        </div>
    </div>
</div>

@foreach($kategori as $category)
<!-- Edit Modal HTML -->
<div id="editCategoryModal{{ $category->id }}" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="{{ route('kategori.update', $category->id) }}">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h4 class="modal-title">Edit Kategori</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>ID</label>
                        <input type="text" class="form-control" name="id_kategori" value="{{ $category->id }}" required>
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama" value="{{ $category->nama }}" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-info" value="Add">
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Delete Modal HTML -->
<div id="deleteCategoryModal{{ $category->id }}" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="{{ route('kategori.destroy', $category->id) }}">
                @csrf
                @method('DELETE')
                <div class="modal-header">
                    <h4 class="modal-title">Hapus Kategori</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda yakin ingin menghapus data ini?</p>
                    <p class="text-warning"><small>Aksi ini tidak dapat dibatalkan.</small></p>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-danger" value="Delete">
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach
@endsection