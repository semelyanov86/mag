@extends('admin.master')
@section('title', 'Список пользователей')
@section('content')

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Правка информации о пользователе
        <small>Форма правки</small>
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
            <form class="form-horizontal" method="post">
	@foreach ($errors->all() as $error)
		<p class="alert alert-danger">{{ $error }}</p>
	@endforeach
        
        @if (session('status'))
		<div class="alert alert-success">
		{{ session('status') }}
		</div>
	@endif
        
            {!! csrf_field() !!}
                 <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Логин</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" placeholder="Name" name="name" value="{{ $user->name }}">
                                </div>
                </div>    
            <div class="form-group">
                  <label for="email" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-10">
                      <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="{{ $user->email }}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="password" class="col-sm-2 control-label">Пароль</label>

                  <div class="col-sm-10">
                      <input type="password" class="form-control" name="password" id="password">
                  </div>
                </div>
                            <div class="form-group">
                  <label for="password" class="col-sm-2 control-label">Подтвердить пароль</label>

                  <div class="col-sm-10">
                      <input type="password" class="form-control" id="password-confirm" id="password-confirm">
                  </div>
                </div>
                            <div class="form-group">
                                <label for="region" class="col-sm-2 control-label">Регион</label>
                                 <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Регион" name="region" value="{{ $user->region }}">
                                </div>
                </div>
                            <div class="form-group">
                  <label for="coop" class="col-sm-2 control-label">Кооператив</label>
                   <div class="col-sm-10">
                  <input type="text" class="form-control" placeholder="Кооператив" name="coop" value="{{ $user->coop }}">
                  </div>
                </div>
                            <div class="form-group">
                                <label for="select" class="col-sm-2 control-label">Выберите роль</label>
                                 <div class="col-sm-10">
                                <select multiple class="form-control" id="role" name="role[]">
                                    @foreach($roles as $role)
                                    <option value="{!! $role->name !!}" @if(in_array($role->name, $selectedRoles)) selected="selected" @endif>{!! $role->name !!}</option>
                                    @endforeach
                                </select>
                                     </div>
                </div>
                          <div class="box-footer">
                <button type="reset" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Обновить</button>
              </div>
            </form>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>  
  </div>

@endsection