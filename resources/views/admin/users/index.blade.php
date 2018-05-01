@extends('admin.master')
@section('title', 'Список пользователей')
@section('content')

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Перечень пользователей
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
              <h3 class="box-title">Список пользователей</h3>

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
                  <th>login</th>
                  <th>email</th>
                  <th>Кооператив</th>
                  <th>Регион</th>
                  <th>Роль</th>
                  <th>Удалить</th>
                </tr>
                @foreach($users as $user)
                
                <tr>
                  <td>{!! $user->id !!}</td>
                  <td><a href="{!! action('Admin\UsersController@edit', $user->id) !!}">{!! $user->name !!}</a></td>
                  <td>{!! $user->email !!}</td>
                  <td>{!! $user->coop !!}</td>
                  <td>{!! $user->region !!}</td>
                  <td>{!! $user->roles->pluck('name') !!}</td>
                  <td><a href="{{ action('Admin\UsersController@destroy', ['id' => $user->id]) }}">Удалить</a></td>
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