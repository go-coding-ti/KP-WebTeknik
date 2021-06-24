@extends('adminlayout.layout')
@section('title', 'Daftar Admin')
@section('content')
@push('css')
    <link href="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <style>
        /* The switch - the box around the slider */
        .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
        }

        /* Hide default HTML checkbox */
        .switch input {
        opacity: 0;
        width: 0;
        height: 0;
        }

        /* The slider */
        .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
        }

        .slider:before {
        position: absolute;
        content: "";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
        }

        input:checked + .slider {
        background-color: #2196F3;
        }

        input:focus + .slider {
        box-shadow: 0 0 1px #2196F3;
        }

        input:checked + .slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
        }

        /* Rounded sliders */
        .slider.round {
        border-radius: 34px;
        }

        .slider.round:before {
        border-radius: 50%;
        }
    </style>
@endpush
@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Admin</h1>
    <p class="mb-4">Daftar Admin Fakultas Teknik Universitas Udayana</p>
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
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Admin</h6>
        </div>
        <div class="card-body">
            <button class="btn btn-primary btn-icon-split" data-toggle="modal" data-target="#addAdmin">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Tambah Admin</span>
              </button>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="35">No</th>
                            <th>Nama Admin</th>
                            <th>Username</th>
                            <th width="100">Super Admin</th>
                            <th width="50">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($admin as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->username}}</td>
                                <td>
                                    <label class="switch">
                                        <input id="signup-token_{{$item->id}}" name="_token" type="hidden" value="{{csrf_token()}}">
                                       @if($item->role == 1)
                                         <input type="checkbox" id="status_{{$item->id}}" onclick="statusBtn({{$item->id}})" checked>
                                       @else
                                         <input type="checkbox" id="status_{{$item->id}}" onclick="statusBtn({{$item->id}})">
                                       @endif
                                         <span class="slider round"></span>
                                       </label>
                                </td>
                                <td><a class="btn btn-danger btn-sm text-center" onclick="deleteAdmin({{$item->id}})" href="#"><i class="fas fa-trash"></i></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Add Admin Modal-->
<div class="modal fade" id="addAdmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="addCategory">Tambah Admin</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">
            <p>Masukkan Data Admin</p>
            <form method="post" action="/admin/admins/store" enctype="multipart/form-data" class="needs-validation" novalidate>
                @csrf
                <div class="form-group">
                <label for="kategori_ina">Nama</label>
                <input type="text" class="form-control @error ('nama') is-invalid @enderror" id="nama" name="nama" required>
                </div>
                <div class="form-group">
                <label for="kategori_eng">Username</label>
                <input type="text" class="form-control @error ('username') is-invalid @enderror" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="kategori_eng">Password</label>
                    <input type="password" class="form-control @error ('password') is-invalid @enderror" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="kategori_eng">Ulangi Password</label>
                    <input type="password" class="form-control @error ('repeat_password') is-invalid @enderror" id="repeat_password" name="repeat_password" required>
                </div>
                <div class="form-group form-group mt-3">
                    <label for="kategori">Role</label>
                    <select class="form-control @error ('role') is-invalid @enderror" data-live-search="true" id="role" rows="3" name="role" required>
                        <option value="">Pilih Role</option>
                        <option value="1">Super Admin</option>
                        <option value="0">Admin</option>
                    </select>  
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
@endsection
@section('custom_javascript')
    <script src="{{ asset('assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="{{ asset('assets/js/demo/datatables-demo.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('#admin').addClass('active');
        });

        //Soft Delete Admin
        function deleteAdmin(id){
        swal({
            title: 'Anda yakin ingin menghapus admin ini?',
            icon: 'warning',
            buttons: ["Tidak", "Ya"],
        }).then(function(value) {
            if (value) {
            jQuery.ajax({  
            url: 'admins/'+id+'/delete',
            type: "GET",
                success: function(result){
                location.reload();
                }
            });
            }
        });
        }

        function statusBtn(id) {
        var checkBox = document.getElementById("status_"+id);
        // If the checkbox is checked, display the output text
        if (checkBox.checked == true){
        swal({
            title: 'Anda yakin ingin menjadikan admin sebagai super admin?',
            icon: 'warning',
            buttons: ["Tidak", "Ya"],
        }).then(function(value) {
            if (value) {
                jQuery.ajax({  
                url: "/admin/admins/role/"+id+"/1",
                type: "GET",
                success: function(result){
                }
            });
            }else{
            document.getElementById("status_"+id).checked = false;
            }
        });
        } else {
        swal({
            title: 'Anda yakin ingin menjadikan superadmin sebagai admin?',
            icon: 'warning',
            buttons: ["Tidak", "Ya"],
        }).then(function(value) {
            if (value) {
                jQuery.ajax({
                url: "/admin/admins/role/"+id+"/0",
                type: "GET",
                success: function(result){
                }
            });
            }else{  
            document.getElementById("status_"+id).checked = true;
            }
        });
        }
    }

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

    $('#sidebarPengaturan').addClass("active");
    </script>
@endsection