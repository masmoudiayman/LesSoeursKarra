@extends('admin.dashboard')

@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Gammes</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Acceuil</a></li>
              <li class="breadcrumb-item active">Gamme</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Modifier gamme</small></h3>
              </div>
             @if (count($errors) > 0)
                  <div class="alert alert-danger" >
                    
                    <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{$error}}</li>
                      @endforeach
                  </div>
                  </ul>
                 
             @endif


              <!-- /.card-header -->
              <!-- form start -->
              {{-- <form> --}}
                {!!Form::open(['action'=>
                'App\Http\Controllers\GammeController@updateGamme','method'=> 'POST'
                ])!!}
                <div class="card-body">
                  <div class="form-group">
                    {{Form::hidden('id',$gamme->id)}}

                    {{-- <label for="exampleInputEmail1">Nom</label> --}}
                    {{Form::label('','Nom',['for'=>'exampleInputEmail1'])}}
                    {{Form::text('nom',$gamme->nom,['class'=>'form-control','id'=>'exampleInputEmail1','placeholder' =>'Entrer gamme'])}}
                    {{-- <input type="text" name="category_name" class="form-control" id="exampleInputEmail1" placeholder="Entrer gamme"> --}}
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  {{Form::submit('Modifier',['class'=>'btn btn-primary'])}}

                  <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                  {{-- <input type="submit" class="btn btn-primary" value="Ajouter" > --}}
                </div>
                {!!Form::close()!!}
              {{-- </form> --}}
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @endsection

  @section('scripts')
  <!-- jquery-validation -->
<script src="backend/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="backend/plugins/jquery-validation/additional-methods.min.js"></script>
<!-- AdminLTE App -->
<script src="backend/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script>
  $(function () {
    $.validator.setDefaults({
      submitHandler: function () {
        alert( "Form successful submitted!" );
      }
    });
    $('#quickForm').validate({
      rules: {
        email: {
          required: true,
          email: true,
        },
        password: {
          required: true,
          minlength: 5
        },
        terms: {
          required: true
        },
      },
      messages: {
        email: {
          required: "Please enter a email address",
          email: "Please enter a vaild email address"
        },
        password: {
          required: "Please provide a password",
          minlength: "Your password must be at least 5 characters long"
        },
        terms: "Please accept our terms"
      },
      errorElement: 'span',
      errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
      },
      highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
      }
    });
  });
  </script>
  @endsection