@extends('admin.layouts.app')

@section('content')

<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3"><span class="text-muted fw-light">Master Data /</span> Pertanyaan</h4>

      <div class="row p-3">
        <div class="card card-body row mb-3">
          <form action="{{ url('admin/pertanyaan/detail') }}" method="POST">
            @csrf
            <div class="col mb-3">
                <label for="exampleFormControlReadOnlyInput1" class="form-label">Katgori Kuis</label>
                <select name="kategori_kuis_id" id="kategori_kuis_id" class="form-control">
                  @foreach ($kategori_kuis as $item)
                    <option @if($id == $item->kategori_kuis_id) selected @endif value="{{ $item->kategori_kuis_id }}">{{ $item->nama_kategori_kuis }}</option>
                  @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Cari</button>
          </form>
        </div>
        <!-- Form controls -->
        @if($id !== '')
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
                    <th>Detail</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                @foreach ($data as $item)
                  <tr>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $item->pertanyaan }}</strong></td>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $item->jenis_jawaban }}</strong></td>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $item->jenis_jawaban }}</strong></td>
                    <td>
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
        @endisset
      </div>
    </div>
    <!-- / Content -->
</div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalCenterTitle">Tambah</h5>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <form action="{{ url('admin/pertanyaan/store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="urutan" value="{{ $id }}">
            <div class="modal-body">
              <div class="row">
                <div class="col mb-3">
                    <label for="exampleFormControlReadOnlyInput1" class="form-label">Pertanyaan</label>
                    <input type="text" class="form-control" id="pertanyaan" name="pertanyaan" required placeholder="Ketik Disini">
                </div>
              </div>
              <div class="row">
                <div class="col mb-3">
                  <label for="exampleFormControlReadOnlyInput1" class="form-label">Jenis Jawaban</label>
                  <select name="jenis_jawaban" id="jenis_jawaban" class="form-control">
                    <option value="Range Angka">Range Angka</option>
                    <option value="Checklist">Checklist</option>
                    <option value="Pilihan">Pilihan</option>
                    <option value="Inputan">Inputan</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col mb-3">
                    <label for="exampleFormControlReadOnlyInput1" class="form-label">Jawaban 1</label>
                    <input type="text" class="form-control" id="jawaban1" name="jawaban1" placeholder="Ketik Disini">
                </div>
              </div>
              <div class="row">
                <div class="col mb-3">
                    <label for="exampleFormControlReadOnlyInput1" class="form-label">Jawaban 2</label>
                    <input type="text" class="form-control" id="jawaban2" name="jawaban2" placeholder="Ketik Disini">
                </div>
              </div>
              <div class="row">
                <div class="col mb-3">
                    <label for="exampleFormControlReadOnlyInput1" class="form-label">Jawaban 3</label>
                    <input type="text" class="form-control" id="jawaban3" name="jawaban3" placeholder="Ketik Disini">
                </div>
              </div>
              <div class="row">
                <div class="col mb-3">
                    <label for="exampleFormControlReadOnlyInput1" class="form-label">Jawaban 4</label>
                    <input type="text" class="form-control" id="jawaban4" name="jawaban4" placeholder="Ketik Disini">
                </div>
              </div>
              <div class="row">
                <div class="col mb-3">
                    <label for="exampleFormControlReadOnlyInput1" class="form-label">Jawaban 5</label>
                    <input type="text" class="form-control" id="jawaban5" name="jawaban5" placeholder="Ketik Disini">
                </div>
              </div>
              <div class="row">
                <div class="col mb-3">
                    <label for="exampleFormControlReadOnlyInput1" class="form-label">Urutan Soal</label>
                    <input type="number" class="form-control" id="urutan_soal" name="urutan_soal" required placeholder="Ketik Disini">
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
            <form action="{{ url('admin/pertanyaan/update') }}" method="post">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Ubah Data</h5>
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
                url: "{{ url('admin/pertanyaan/edit') }}/" + id,
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
