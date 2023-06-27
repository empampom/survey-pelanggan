@extends('admin.layouts.app')

@section('content')

<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Master Data /</span> Menu</h4>

      <div class="row p-3">
        <!-- Form controls -->
        <div class="card">
            <h5 class="card-header">Menu &nbsp;  <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="bi bi-plus"></i> Tambah
            </button></h5>
            <div class="table-responsive text-nowrap">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <tr>
                        <th>Nama Menu</th>
                        <th>Url</th>
                        <th>#</th>
                    </tr>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @php $no=1 @endphp
                    @foreach ($menu as $item)
                        <tr class="bg-info">
                            <td>
                                <h5 class="text-white">{{ strtoupper($item['nama_menu']) }}</h5>
                                @if ($item['parent_id'] == 0)
                                @else
                                    <h5 class="text-primary">&nbsp;&nbsp;&nbsp;
                                        {{ strtoupper($item['nama_menu']) }}</h5>
                                @endif
                            </td>
                            <td>{{ $item['url_menu'] }}</td>
                            <td>
                                <a onclick="return edit({{ $item['menu_id'] }})"
                                    class="btn text-white btn-warning">Ubah</a>
                                <a onclick="return tambahsubmenu({{ $item['menu_id'] }})"
                                    class="btn text-white btn-primary">Tambah</a>
                                    @if(empty($item['submenu']))
                                    <a href="{{ url('menu/delete/' . Crypt::encrypt($item['menu_id'])) }}"
                                        class="btn text-white btn-danger">Hapus</a>
                                    @endif
                            </td>
                        </tr>
                        @foreach($item['submenu'] as $submenu)
                        <tr>
                            <td>
                                <p class="text-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ strtoupper($submenu['nama_menu']) }}</p>
                            </td>
                            <td>{{ $submenu['url_menu'] }}</td>
                            <td>
                                <a onclick="return edit({{ $submenu['menu_id'] }})"
                                    class="btn text-white btn-info">Ubah</a>
                                <a href="{{ url('menu/delete/' . Crypt::encrypt($submenu['menu_id'])) }}"
                                    class="btn text-white btn-danger">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
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
          <form action="{{ url('admin/menu/store') }}" method="post" enctype="multipart/form-data">
              @csrf
          <div class="modal-body">
            <div class="row">
              <div class="col mb-3">
                  <label for="exampleFormControlReadOnlyInput1" class="form-label">Nama Menu</label>
                  <input type="text" class="form-control" id="nama_menu" name="nama_menu" required placeholder="Ketik Disini">
              </div>
              <div class="col mb-3">
                  <label for="exampleFormControlReadOnlyInput1" class="form-label">URL</label>
                  <input type="text" class="form-control" id="url_menu" name="url_menu" required placeholder="Ketik Disini">
              </div>
              <div class="col mb-3">
                  <label for="exampleFormControlReadOnlyInput1" class="form-label">Icon</label>
                  <input type="text" class="form-control" id="icon_menu" name="icon_menu" required placeholder="Ketik Disini">
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
    <div class="modal-dialog">
        <form action="{{ url('menu/store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Nama Menu</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_menu" name="nama_menu" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Url</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="url_menu" name="url_menu">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Icon</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="icon_menu" name="icon_menu">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="modal fade" id="subMenuModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="subMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{ url('menu/store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="mb-3 row">
                        <label for="nama_menu" class="col-sm-2 col-form-label">Nama Menu</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_menu" name="nama_menu" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="url_menu" class="col-sm-2 col-form-label">Url</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="url_menu" name="url_menu">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Icon</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="icon_menu" name="icon_menu">
                        </div>
                    </div>
                    <input type="hidden" name="parent_id" id="parent_id">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="modal fade" id="editModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{ url('menu/update') }}" method="post">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                </div>
                <div class="modal-body">
                    <div id="tampildata"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
                url: "{{ url('menu/edit') }}/" + id,
                // data:{'id':id}, 
                success: function(tampil) {

                    // console.log(tampil); 
                    $('#tampildata').html(tampil);
                    $('#editModal').modal('show');
                }
            })
        }

        function tambahsubmenu(id) {
            $('#parent_id').val(id);
            $('#subMenuModal').modal('show');
        }
    </script>
@endpush
