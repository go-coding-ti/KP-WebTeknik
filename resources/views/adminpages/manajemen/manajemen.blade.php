@extends('adminlayout.layout')
@section('title', 'Daftar Manajemen')
@section('content')

<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Manajemen</h1>
      <p class="mb-4">Daftar Manajemen Fakultas Teknik Universitas Udayana</p>
      @if (session()->has('statusInput'))
        <div class="row">
          <div class="col-sm-12 alert alert-success alert-dismissible fade show" role="alert">
              {{session()->get('statusInput')}}
              <button type="button" class="close" data-dismiss="alert"
                  aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
        </div>
      @endif

      @if (count($errors)>0)
      <div class="row">
        <div class="col-sm-12 alert alert-danger alert-dismissible fade show" role="alert">
            <ul>
              @foreach ($errors->all() as $item)
                  <li>{{$item}}</li>
              @endforeach
            </ul>
            <button type="button" class="close" data-dismiss="alert"
                aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
      </div>
    @endif
    <!-- DataTales Example -->
    <!-- Copy drisini -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Manajemen</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <button class="btn btn-primary btn-icon-split" data-toggle="modal" data-target="#addManajemen">
            <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
            </span>
            <span class="text">Tambah Manajemen</span>
          </button>
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                  <th>No.</th>
                  <th>Jabatan</th>
                  <th>Nama</th>
                  <th width="150">Action</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($data as $i => $management)
              <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$management->jabatan->jabatan_ina}}</td>
                <td>{{$management->nama}}
                <td><a style="margin-right:7px" href="#" onclick="show({{$management->id}},'show')"><button type="button" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></button></a><a style="margin-right:7px" class="btn btn-info btn-sm" href="#" onclick="show({{$management->id}},'edit')"><i class="fas fa-pencil-alt" ></i></a><a class="btn btn-danger btn-sm" onclick="deletebc({{$management->id}})" href="#"><i class="fas fa-trash"></i></a></td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
</div>

<!-- Add News Category Modal-->
<div class="modal fade bd-example-modal-lg" id="addManajemen" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="addManajemen">Tambah Manajemen</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">
            <p>Masukkan Manajemen</p>
            <form method="post" action="/admin/management/store" enctype="multipart/form-data" class="needs-validation" novalidate>
                @csrf
                <div class="form-group">
                  <label for="jabatan">Jabatan</label>
                  <select class="form-control @error ('jabatan') is-invalid @enderror" data-live-search="true" id="jabatan" rows="3" name="jabatan" required>
                    <option value="">Pilih Jabatan</option>
                      @foreach ($jabatans as $jabatan)
                          <option value="{{$jabatan->id}}">{{$jabatan->jabatan_ina}}</option>
                      @endforeach
                  </select>
                  @error('jabatan')
                      <div class="invalid-feedback text-start">
                          {{ $message }}
                      </div>
                  @else
                      <div class="invalid-feedback">
                          Jabatan wajib dipilih
                      </div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="staf">Staf</label>
                  <select class="form-control @error ('staf') is-invalid @enderror" data-live-search="true" id="staf" rows="3" name="staf" required>
                    <option value="">Pilih Staf</option>
                      @foreach ($stafs as $staf)
                          <option value="{{$staf->id}}">{{$staf->nip}} - {{$staf->nama}}</option>
                      @endforeach
                  </select>
                  @error('staf')
                      <div class="invalid-feedback text-start">
                          {{ $message }}
                      </div>
                  @else
                      <div class="invalid-feedback">
                          Staf wajib dipilih
                      </div>
                  @enderror
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>              
        </div>

        </div>
    </div>
</div>

{{-- SHOW --}}
<div class="modal fade" id="showManajemen" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="showManajemen">Show Manajemen</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="closeModal('showManajemen')">
          <span aria-hidden="true">×</span>
          </button>
      </div>
      <div class="modal-body" id="loadingShow">
        <div class="d-flex justify-content-center">
          <div class="spinner-border" role="status">
            <span class="sr-only">Loading...</span>
          </div>
        </div>
      </div>
        <div class="modal-body" id="bodyShow">
                <div class="form-group">
                  <label for="show_manajemen_jabatan">Jabatan</label>
                  <input type="text" class="form-control" id="show_manajemen_jabatan" readonly>
                </div>
                <div class="form-group">
                  <label for="show_manajemen_nip">NIP</label>
                  <input type="text" class="form-control" id="show_manajemen_nip" readonly>
                </div>
                <div class="form-group">
                    <label for="show_manajemen_nama">Nama</label>
                    <input type="text" class="form-control" id="show_manajemen_nama" readonly>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal" onclick="closeModal('showManajemen')">Tutup</button>
                </div>
        </div>

        </div>
    </div>
</div>

<!-- Edit News Category Modal-->
<div class="modal fade" id="editManajemen" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabeledit">Edit Manajemen</h5>
            <button class="close" type="button" data-dismiss="editManajemen" aria-label="Close" onclick="closeModal('editManajemen')">
            <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body" id="loadingEdit">
            <div class="d-flex justify-content-center">
              <div class="spinner-border" role="status">
                <span class="sr-only">Loading...</span>
              </div>
            </div>
          </div>
        <div class="modal-body" id="bodyEdit">
            <p>Masukkan Data Manajemen yang Hendak Diubah.</p>
            <form id="edit-form-manajemen" method="post" action="/admin/management/update" enctype="multipart/form-data" class="needs-validation" novalidate>
               @csrf
               <div class="form-group">
                 <label for="jabatan">Jabatan</label>
                 <select class="form-control" data-live-search="true" id="edit_jabatan" rows="3" name="edit_jabatan" readonly>
                   <option value="">Pilih Jabatan</option>
                     @foreach ($all_jabatans as $jabatan)
                         <option value="{{$jabatan->id}}">{{$jabatan->jabatan_ina}}</option>
                     @endforeach
                 </select>
               </div>
               <div class="form-group">
                 <label for="staf">Staf</label>
                 <select class="form-control @error ('edit_staf') is-invalid @enderror" data-live-search="true" id="edit_staf" rows="3" name="edit_staf" required>
                   <option value="">Pilih Staf</option>
                     @foreach ($stafs as $staf)
                         <option value="{{$staf->id}}">{{$staf->nip}} - {{$staf->nama}}</option>
                     @endforeach
                 </select>
                 @error('edit_staf')
                      <div class="invalid-feedback text-start">
                          {{ $message }}
                      </div>
                  @else
                      <div class="invalid-feedback">
                          Staf wajib dipilih
                      </div>
                  @enderror
               </div>
               <div class="modal-footer">
                   <button class="btn btn-secondary" type="button" onclick="closeModal('editManajemen')" data-dismiss="modal">Batal</button>
                   <button type="submit" class="btn btn-primary">Simpan</button>
               </div>
             </form>            
        </div>

        </div>
    </div>
</div>

<!-- Hapus News Category Modal-->
<div class="modal fade" id="deleteManajemen" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabelhapus">Hapus Manajemen</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="closeModal('deleteManajemen')">
            <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Apakah anda yakin ingin menghapus manajemen ini?</p>
            <form id="form-delete-manajemen" method="post" action="">
                @method('delete')
                @csrf
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" onclick="closeModal('deleteManajemen')" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </div>
              </form>              
        </div>

        </div>
    </div>
</div>
@endsection

@section('custom_javascript')
<script>

    function show(id,status){
        $("#bodyEdit").hide();
        $("#bodyShow").hide();
        $("#loadingShow").show();
        $("#loadingEdit").show();
        if(status=='show'){
        $('#showManajemen').modal('show');
        }else if(status=='edit'){
        $('#editManajemen').modal('show');
        }
        jQuery.ajax({
            url: "/admin/management/"+id+"/edit",
            method: 'get',
            success: function(result){
                if(status == 'show'){
                    $("#show_manajemen_jabatan").val(result.jabatan['jabatan_ina']);
                    $("#show_manajemen_nip").val(result.staf['nip']);
                    $("#show_manajemen_nama").val(result.staf['nama']);
                    $('#showManajemen').modal('show');
                    $("#loadingShow").hide();
                    $("#bodyShow").show();
                }else{
                    $("#edit_jabatan").val(result.staf['id_jabatan']);
                    $("#edit_staf").val(result.staf['id']);
                    $('#editManajemen').modal('show');
                    $("#loadingEdit").hide();
                    $("#bodyEdit").show();
                }                   
                
            }
        });
    }

    function deletebc(id){
        $("#form-delete-manajemen").attr("action", "/admin/management/"+id+"/delete");
        $('#deleteManajemen').modal('show');
    }

    function closeModal(jenis){
      $('#'+jenis).modal('hide'); 
    }

    //Jabatan Onclick Listener
    $('#jabatan').change(function() {
        if($('#jabatan').val() != ""){
            let id = $(this).val();
            let flag = 0;
            var stafs = {!! json_encode($stafs->toArray()) !!}
            console.log(stafs);
            stafs.forEach(element => {
                if(id == element['id_jabatan']){
                    $('#staf').val(element['id']);
                    flag = 1;
                    return false;
                }
                if(flag == 0){
                    $('#staf').val("");
                }
            });
        }else if($('#jabatan').val() == ""){
            $('#staf').val("");
        }
    });

    $('#edit_jabatan').change(function() {
        if($('#edit_jabatan').val() != ""){
            let id = $(this).val();
            let flag = 0;
            var stafs = {!! json_encode($stafs->toArray()) !!}
            console.log(stafs);
            stafs.forEach(element => {
                if(id == element['id_jabatan']){
                    $('#edit_staf').val(element['id']);
                    flag = 1;
                    return false;
                }
                if(flag == 0){
                    $('#edit_staf').val("");
                }
            });
        }else if($('#edit_jabatan').val() == ""){
            $('#edit_staf').val("");
        }
    });

  // Validasi Form
  (function () {
    'use strict'
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')
    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
    .forEach(function (form) {
        form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
            }
            form.classList.add('was-validated')
        }, false)
    })
  })()

  $('#sidebarManajemen').addClass("active");
</script>
@endsection