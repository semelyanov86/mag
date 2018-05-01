@extends('admin.master')
@section('title', 'Добавить рубрику')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Регистрация новой рубрики
        <small>Форма отправки</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div>
          <!-- general form elements -->
          <div>
            
            <!-- /.box-header -->
            <!-- form start -->

          <!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Форма отправки рубрики</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" method="post">
                @foreach ($errors->all() as $error)
                     <p class="alert alert-danger">{{ $error }}</p>
            @endforeach
            @if	(session('status'))
                    <div class="alert alert-success">
                    {{ session('status') }}
                    </div>
            @endif
            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <!-- text input -->
                <div class="form-group">
                    <label for="name">Наименование рубрики</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Введите название рубрики ...">
                </div>
                
              <div class="box-footer">
                <button type="reset" class="btn btn-default">Отменить</button>
                <button type="submit" class="btn btn-info pull-right">Отправить</button>
              </div>
 
              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
@endsection