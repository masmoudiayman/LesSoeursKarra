@extends('admin.dashboard')

@section('content')
    

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Article</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Acceuil</a></li>
            <li class="breadcrumb-item active">Articles</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Tous les articles</h3>
            </div>

            @if (Session::has('status'))
              <div class="alert alert-success">
                {{Session::get('status')}}
              </div>   
              @endif
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Num.</th>
                  <th>Nom </th>
                  <th>Sous gamme</th>
                  <th>Description </th>
                  <th>Prix</th>
                  <th>Image</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  @foreach ($articles as $article)

                  <td>{{$article->id}}</td>
                  <td>{{$article->nom}}</td>
                  <td>{{$article->sous_gammesName}}</td>
                  <td>{{$article->description}}</td>
                  <td>{{$article->prix}}</td>
                  <td><img src="/storage/image/{{$article->image}}" 
                    style ="width:80px;height=80px"></td>


                  <td>
                    <a href="{{url('/editArticle',$article->id)}}" class="btn btn-primary"><i class="nav-icon fas fa-edit"></i></a>
                    <a href="{{url('/deleteArticle',$article->id)}}" id="delete" class="btn btn-danger" ><i class="nav-icon fas fa-trash"></i></a>
                  </td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

  @endsection

  @section('style')

  <link rel="stylesheet" href="backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">

  @endsection

@section('scripts')
    <!-- DataTables -->
<script src="backend/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="backend/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="backend/dist/js/adminlte.min.js"></script>
<script src="backend/dist/js/bootbox.min.js"></script>

<!-- AdminLTE for demo purposes -->

<script>
    $(document).on("click", "#delete", function(e){
    e.preventDefault();
    var link = $(this).attr("href");
    bootbox.confirm("Do you really want to delete this element ?", function(confirmed){
      if (confirmed){
          window.location.href = link;
        };
      });
    });
  </script>
  <!-- page script -->
  <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
@endsection