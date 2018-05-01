@extends('admin.master')
@section('title', 'Отправить новый выпуск')
@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Отправить новый номер журнала
        <small>Форма</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Отправить новый номер журнала</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Форма отправки журнала</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
                  <form id="mag-form" data-parsley-validate class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
@foreach ($errors->all() as $error)
	<p class="alert alert-danger">{{ $error }}</p>
@endforeach
@if (session('status'))
	<div class="alert alert-success">
{{ session('status') }}
	</div>
@endif
<input type="hidden" name="_token" value="{!! csrf_token() !!}">                      

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="no">Номер журнала <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="no" name="no" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Заголовок <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="title" name="title" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Краткое описание</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <textarea id="intro" name="intro" class="resizable_textarea form-control" style="width: 90%; overflow: hidden; word-wrap: break-word; resize: horizontal; height: 87px;">Краткая информация о выпуске
                    </textarea>
                  </div>
                </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Опубликовано</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div id="status" class="btn-group" data-toggle="buttons">
                          <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                            <input type="radio" name="status" value="1"> &nbsp; Да &nbsp;
                          </label>
                          <label class="btn btn-primary active" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                            <input type="radio" name="status" value="2" checked=""> Нет
                          </label>
                        </div>
                      </div>
                    </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Сопроводительное письмо</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <textarea id="content" name="content" class="resizable_textarea form-control" style="width: 90%; overflow: hidden; word-wrap: break-word; resize: horizontal; height: 87px;">Подробная информация
                    </textarea>
                  </div>
                                                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="link1">Ссылка 1 <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="link1" name="link1" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                                  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="link2">Ссылка 2 <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="link2" name="link2" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                                  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="link3">Ссылка 3 <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="link3" name="link3" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="date">Дата выпуска:</label>

                <div class="col-md-6 col-sm-6 col-xs-12 date input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="date form-control col-md-7 col-xs-12" id="date" name="date">
                </div>
<script type="text/javascript">

    $('.date').datepicker({  

       format: 'yyyy-mm-dd'

     });  

</script>  

                </div>
                  <div class="form-group">
                    <a class="col-md-6 col-sm-6 col-xs-12 btn" title="Загрузить обложку"><i class="icon-picture"></i></a>
                    <input type="file" name="image" id="image" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
                  </div>
            <!-- /.col -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Отменить</button>
                <button type="submit" class="btn btn-info pull-right">Отправить</button>
              </div>
                </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
          <!-- /.box -->



@endsection