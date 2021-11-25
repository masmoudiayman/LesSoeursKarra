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
        <!-- left column -->
        <div class="col-md-12">
          <!-- jquery validation -->
          <div class="card card-success">
            <div class="card-header">
              <h3 class="card-title">Modifier un article</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            {{--<form id="quickForm">--}}
              @if (Session::has('status'))
              <div class="alert alert-success">
                {{Session::get('status')}}
              </div>   
              @endif

             @if (count($errors) > 0)
                  <div class="alert alert-danger" >
                    
                    <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{$error}}</li>
                      @endforeach
                  </div>
                  </ul>
                 
             @endif
              {!!Form::open(['action'=>
              'App\Http\Controllers\ArticleController@updateArticle','method'=> 'POST','enctype'=>'multipart/form-data'])!!}
              {{ csrf_field() }}
              <div class="card-body">

                <div class="form-group">
                    {{Form::hidden('id',$articles->id)}}

                  {{-- <label for="exampleInputEmail1">Nom</label> --}}
                  {{Form::label('','Nom',['for'=>'exampleInputEmail1'])}}
                  {{Form::text('nom',$articles->nom,['class'=>'form-control','id'=>'exampleInputEmail1','placeholder' =>'Entrer nom article'])}}
                </div>

                <div class="from-group">
                  {{-- {{Form::label('','Sous gamme',['for'=>'exampleInputEmail1'])}}
                  {{Form::select('id_sgam',$sousGammes,null,['placeholder'=>'select sous gamme article','class'=>'form-control select2'])}} --}}
                <div class="form-group">
                    {{-- <label for="exampleInputEmail1">Nom</label> --}}
                  {{Form::label('','Sous gamme',['for'=>'exampleInputEmail1'])}}
                  <select name='id_sgam', class="form-control select2">
                  @foreach ($sousGammes as $sgamme)
                  <option @php if($articles->id_sgam == $sgamme->id){echo("selected");} @endphp   value="{{$sgamme->id}}">{{$sgamme->nom}}</option>
                  @endforeach
                  </select>
                </div>
  
                </div>
                  {{-- <input type="text" name="product_name" class="form-control" id="exampleInputEmail1" placeholder="Entrer nom article"> --}}
                
                <div class="form-group">
                    {{-- <label for="exampleInputEmail1">Nom</label> --}}
                  {{Form::label('','Description',['for'=>'exampleInputEmail1'])}}
                  {{Form::text('description',$articles->description,['class'=>'form-control','id'=>'exampleInputEmail1','placeholder' =>'Entrer description article'])}}
                </div>
                
                <div class="form-group">
                  {{-- <label for="exampleInputEmail1">Prix</label>
                  <input type="number" name="product_price" class="form-control" id="exampleInputEmail1" placeholder="Entrer prix article" min="1"> --}}

                  {{Form::label('','Prix',['for'=>'exampleInputEmail1'])}}
                  {{Form::text('prix',$articles->prix,['class'=>'form-control','id'=>'exampleInputEmail1','placeholder' =>'Entrer prix article'])}}
                </div>
                {{-- <div class="form-group">
                  {{-- <label>Gamme</label>
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">Fruit</option>
                    <option>Juice</option>
                    <option>Vegetable</option>
                  </select> 
                </div> --}}

                <div class="form-group">
                <label for="exampleInputFile">Image</label>
                <div class="input-group">
                  <div class="custom-file">
                    
                    {{Form::file('image',['class'=>'custom-file-input','id'=>'exampleInputFile'])}}
                    {{Form::label('','Choisir un fichier',['class'=>'custom-file-label','for'=>'exampleInputFile'])}}
                    {{-- <input type="file" class="custom-file-input" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">Choisir un fichier</label> --}}
                  </div>
                  <div class="input-group-append">
                    <span class="input-group-text">télécharger </span>
                  </div>
                </div>
              </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <!-- <button type="submit" class="btn btn-success">Submit</button> -->
                {{-- <input type="submit" class="btn btn-success" value="Ajouter"> --}}
                {{Form::submit('Modifier',['class'=>'btn btn-success'])}}

              </div>
              {!!Form::close()!!}
            {{--</form>--}}
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