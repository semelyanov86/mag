@extends('admin.master')
@section('title', 'Список продуктов для журнала')
@section('content')

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Перечень товаров журнала
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
              <h3 class="box-title">Перечень товаров редакции</h3>

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
                  <th>Наименование продукта</th>
                  <th>Цена</th>
                  <th>Краткое содержание</th>
                  <th>Автор</th>
                  <th>Удалить</th>
                  
                </tr>
                @foreach($items as $item)
                <tr>
                  <td>{!! $item->id !!}</td>
                  <td><a href="{!! action('Admin\ShopController@input', ["id" => $item->id]) !!}">{!! $item->name !!}</a></td>
                  <td>{!! $item->price !!}</td>
                  <td>{!! $item->short !!}</td>
                  <td>{!! $item->author !!}</td>
                  <td><a href="{{ action("Admin\ShopController@destroy", ["id" => $item->id]) }}">Удалить</a></td>
                  
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