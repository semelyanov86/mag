@extends('admin.master')
@section('title', 'Список номеров журнала')
@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Список номеров журнала
        <small>краткий перечень номеров</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Simple</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
          <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Последние номера журнала</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>Номер</th>
                  <th>Дата</th>
                  <th>Заголовок</th>
                  <th>Краткое описание</th>
                </tr>
                @foreach($mags as $mag)
                <tr>
                  <td>{!! $mag->id !!}</td>
                  <td>{!! $mag->no !!}</td>
                  <td>{!! $mag->date !!}</td>
                  <td>{!! $mag->title !!}</td>
                  <td>{!! $mag->intro !!}</td>
                </tr>
                @endforeach
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
@endsection
