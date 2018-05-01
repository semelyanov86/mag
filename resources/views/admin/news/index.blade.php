@extends('admin.master')
@section('title', 'Список новостей журнала')
@section('content')

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Перечень новостей журнала
        <small>Таблица со списком</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Simple</li>
      </ol>
    </section>
       <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Перечень статей журнала</h3>

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
                  <th>Наименование новости</th>
                  <th>Краткое содержание</th>
                  <th>Дата создания</th>
                  
                  
                </tr>
                @foreach($news as $new)
                <tr>
                  <td>{!! $new->id !!}</td>
                  <td><a href="{!! action('Admin\NewsController@edit', $new->id) !!}">{!! $new->title !!}</a></td>
                  <td>{!! $new->short !!}</td>
                  <td>{!! $new->date !!}</td>
                  
                  
                </tr>
 @endforeach
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>  
  </div>

@endsection