@extends('admin.layouts.app')

@section('content')

<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Master Data /</span> Kategori Kuis</h4>

      <div class="row p-3">
        <!-- Form controls -->
        <div class="card">
            <h5 class="card-header">Kategori Kuis &nbsp;  <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="bi bi-plus"></i> Tambah
            </button></h5>
            @if ($errors->any())
            <div class="alert alert-primary alert-dismissible" role="alert">
              <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <div class="table-responsive text-nowrap mb-3">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Kategori Kuis</th>
                    <th>Url</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                @foreach ($data as $item)
                  <tr>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $item->nama_kategori_kuis }}</strong></td>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <a href="{{ url('/'.$item->url) }}" target="_blank">{{ url('/'.$item->url) }}</a></td>
                    <td>
                        <a onclick="return edit({{ $item->kategori_kuis_id }})"
                            class="btn text-white btn-info">Ubah</a>
                        <a href="{{ url('admin/kategori_kuis/delete/' . Crypt::encrypt($item->kategori_kuis_id)) }}"
                            class="btn text-white btn-danger">Hapus</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>
    <!-- / Content -->
</div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalCenterTitle">Modal title</h5>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <form action="{{ url('admin/kategori_kuis/store') }}" method="post" enctype="multipart/form-data">
                @csrf
            <div class="modal-body">
              <div class="row">
                <div class="col mb-3">
                    <label for="exampleFormControlReadOnlyInput1" class="form-label">Nama Kategori Kuis</label>
                    <input type="text" class="form-control" id="nama_kategori_kuis" name="nama_kategori_kuis" required placeholder="Ketik Disini">
                </div>
              </div>
              <div class="row">
                <div class="col mb-3">
                    <label for="exampleFormControlReadOnlyInput1" class="form-label">Akronim</label>
                    <input type="text" class="form-control" id="url" name="url" required placeholder="Ketik Disini">
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                Close
              </button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
          </div>
        </div>
      </div>

    <div class="modal fade" id="editModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <form action="{{ url('admin/kategori_kuis/update') }}" method="post">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Edit Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div id="tampildata"></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        function edit(id) {
            $.ajax({
                type: 'get',
                url: "{{ url('admin/kategori_kuis/edit') }}/" + id,
                // data:{'id':id}, 
                success: function(tampil) {

                    // console.log(tampil); 
                    $('#tampildata').html(tampil);
                    $('#editModal').modal('show');
                }
            })
        }
    </script>
@endpush
