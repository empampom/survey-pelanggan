@extends('admin.layouts.app')

@section('content')

<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Master Data /</span> Pertanyaan</h4>

      <div class="row p-3">
        <!-- Form controls -->
        <div class="card">
            <h5 class="card-header">Pertanyaan &nbsp;  <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="bi bi-plus"></i> Tambah
            </button></h5>
            <div class="table-responsive text-nowrap">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Pertanyaan</th>
                    <th>Jenis Pertanyaan</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                @foreach ($data as $item)
                  <tr>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $item->pertanyaan }}</strong></td>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $item->jenis_jawaban }}</strong></td>
                    <td>
                        <a href="{{ url('admin/pertanyaan/modul_akses/' . Crypt::encrypt($item->pertanyaan_id)) }}"
                            class="btn text-white btn-primary">Modul</a>
                        <a onclick="return edit({{ $item->pertanyaan_id }})"
                            class="btn text-white btn-info">Ubah</a>
                        <a href="{{ url('admin/pertanyaan/delete/' . Crypt::encrypt($item->pertanyaan_id)) }}"
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

    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-hidden="true">
    {{-- <div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"> --}}
        <div class="modal-dialog modal-dialog-centered" role="document">
            <form action="{{ url('admin/hakakses/store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Tambah Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="exampleFormControlReadOnlyInput1" class="form-label">Hak Akses</label>
                            <input type="text" class="form-control" id="nama_hakakses" name="nama_hakakses" required placeholder="Ketik Disini">
                        </div>
                        {{-- <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Hak Akses</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama_hakakses" name="nama_hakakses" required>
                            </div>
                        </div> --}}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
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
            <form action="{{ url('admin/hakakses/store') }}" method="post" enctype="multipart/form-data">
                @csrf
            <div class="modal-body">
              <div class="row">
                <div class="col mb-3">
                    <label for="exampleFormControlReadOnlyInput1" class="form-label">Hak Akses</label>
                    <input type="text" class="form-control" id="nama_hakakses" name="nama_hakakses" required placeholder="Ketik Disini">
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
            <form action="{{ url('admin/hakakses/update') }}" method="post">
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
                url: "{{ url('admin/hakakses/edit') }}/" + id,
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
