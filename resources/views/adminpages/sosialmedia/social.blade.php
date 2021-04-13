@extends('adminlayout.layout')
@section('title', 'Sosial Media')
@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <h1 class="h3 mb-2 text-gray-800">Sosial Media</h1>
          <p class="mb-4">Daftar Sosial Media Fakultas Teknik Universitas Udayana</p>

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

      <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Sosial Media</h6>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <a class= "btn btn-success text-white" data-toggle="modal" data-target="#addSocial"><i class="fas fa-plus"></i>  Tambah Sosial Media</a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Sosial Media</th>
                      <th>Link Sosial Media</th>
                      <th  width="150">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($data as $i => $sosmed)
                    <tr>
                      <td>{{$sosmed->nama_sosmed}}</td>
                      <td>{{$sosmed->link}}</td>
                      <td><a style="margin-right:7px" onclick="show({{$sosmed->id}},'show')"><button type="button" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></button></a><a style="margin-right:7px" class="btn btn-info btn-sm" onclick="show({{$sosmed->id}},'edit')" href="#"><i class="fas fa-pencil-alt" ></i></a><a class="btn btn-danger btn-sm" onclick="deletePost({{$sosmed->id}})" href="#"><i class="fas fa-trash"></i></a></td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
          </div>
        </div>
          <!-- smpe sini -->

<!-- Add Social Media Modal-->
<div class="modal fade" id="addSocial" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="addSocial">Add New Social Media</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
          </button>
      </div>
      <div class="modal-body">
          <p>Please insert all the form to add new social media</p>
          <form method="post" action="/admin/setting/social/store" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="sosmed">Nama Sosial Media</label>
                <input type="text" class="form-control" id="sosmed" name="sosmed">
              </div>
              <div class="form-group">
                <label for="link_sosmed">Link Sosial Media</label>
                <input type="text" class="form-control" id="link_sosmed" name="link_sosmed">
              </div>
              <div class="form-group mt-4">
                <label for="logo">Logo Sosial Media</label>
                <br>
                <div class="text-center">
                  <img src="{{asset('assets/admin/img/pictures_placeholder.png')}}" class="mb-3" style="border: 2px solid #DCDCDC;height:30%;width:30%;" id="propic">
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="logo" name="logo" required>
                    <label for="logo_label" id="logo_label" class="custom-file-label">Pilih Logo</label>
                </div>
            </div>
              <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>              
      </div>

      </div>
  </div>
</div>

<!-- Edit Social Media Modal-->
<div class="modal fade" id="editSocial" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="editSocial">Edit Social Media</h5>
          <button type="button" class="close" data-dismiss="modal" onclick="closeModal('editSocial')" aria-label="Close">
          <span aria-hidden="true">×</span>
          </button>
      </div>
      <div class="modal-body">
          <p>Please insert all the form to edit the social media</p>
          <form method="post" id="edit_social_form" action="/admin/setting/social/store" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="edit_sosmed">Nama Sosial Media</label>
                <input type="text" class="form-control" id="edit_sosmed" name="edit_sosmed">
              </div>
              <div class="form-group">
                <label for="edit_link_sosmed">Link Sosial Media</label>
                <input type="text" class="form-control" id="edit_link_sosmed" name="edit_link_sosmed">
              </div>
              <div class="form-group mt-4">
                <label for="logo">Logo Sosial Media</label>
                <br>
                <div class="text-center">
                  <img src="{{asset('assets/admin/img/pictures_placeholder.png')}}" class="mb-3" style="border: 2px solid #DCDCDC;height:30%;width:30%;" id="edit_propic">
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="edit_logo" name="edit_logo" required>
                    <label for="edit_logo_label" id="edit_logo_label" class="custom-file-label">Pilih Logo</label>
                </div>
            </div>
              <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal" onclick="closeModal('editSocial')">Cancel</button>
                  <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>              
      </div>

      </div>
  </div>
</div>

<!-- Show Social Media Modal-->
<div class="modal fade" id="showSocial" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="showSocial">Detail Social Media</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="closeModal('showSocial')">
          <span aria-hidden="true">×</span>
          </button>
      </div>
      <div class="modal-body">
          <form method="post" action="" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="show_sosmed">Nama Sosial Media</label>
                <input type="text" class="form-control" id="show_sosmed" name="sosmed">
              </div>
              <div class="form-group">
                <label for="show_link_sosmed">Link Sosial Media</label>
                <input type="text" class="form-control" id="show_link_sosmed" name="show_link_sosmed">
              </div>
              <div class="form-group mt-4">
                <label for="logo">Logo Sosial Media</label>
                <br>
                <div class="text-center">
                  <img src="" class="mb-3" style="border: 2px solid #DCDCDC;height:30%;width:30%;" id="show_propic">
                </div>
            </div>
              <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal" onclick="closeModal('showSocial')">Close</button>
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
        jQuery.ajax({
                url: "/admin/setting/social/"+id+"/edit",
                method: 'get',
                success: function(result){
                    if(status == 'show'){
                        $("#show_sosmed").val(result.social['nama_sosmed']);
                        $("#show_link_sosmed").val(result.social['link']);
                        $('#show_propic').attr('src', result.social['logo']);;
                        $('#showSocial').modal('show');
                    }else{
                        $("#edit_sosmed").val(result.social['nama_sosmed']);
                        $("#edit_link_sosmed").val(result.social['link']);
                        $('#edit_logo_label').text(result.social['logo_name']);
                        $('#edit_propic').attr('src', result.social['logo']);
                        $("#edit_social_form").attr("action", "/admin/setting/social/"+result.social['id']);
                        $('#editSocial').modal('show');
                    }                   
                    
                }
        });
    }

  //Soft Delete Page
function deletePost(id){
  swal({
    title: 'Anda yakin ingin menghapus sosial media ini?',
    icon: 'warning',
    buttons: ["Tidak", "Ya"],
  }).then(function(value) {
    if (value) {
      alert(id);
    jQuery.ajax({  
      url: 'social/delete/'+id,
      type: "GET",
        success: function(result){
          location.reload();
        }
      });
    }
  });
}

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
        $('#propic').attr('src', e.target.result);
        $('#edit_propic').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]); // convert to base64 string
    }
    }

    $("#logo").change(function() {
    readURL(this);
    document.getElementById('logo_label').innerHTML = document.getElementById('logo').files[0].name;
    });

    $("#edit_logo").change(function() {
    readURL(this);
    document.getElementById('edit_logo_label').innerHTML = document.getElementById('edit_logo').files[0].name;
    });

    function closeModal(jenis){
      $('#'+jenis).modal('hide'); 
    }
</script>   
@endsection