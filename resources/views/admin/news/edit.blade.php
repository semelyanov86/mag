@extends('admin.master')
@section('title', 'Изменить новость')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Изменить новость на сервере
        <small>Форма</small>
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
              <h3 class="box-title">Форма изменения новости</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form role="form" method="post" enctype="multipart/form-data">
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
                  <label>Заголовок</label>
                  <input type="text" class="form-control" id="title" name="title" placeholder="Введите заголовок статьи ..." value="{{ $news->title }}">
                </div>
                                              <div class="form-group">
                <label>Дата публикации:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="date" name="date" value="{{ $news->date }}">
                </div>
                <!-- /.input group -->
              </div>
                <script type="text/javascript">

    $('.date').datepicker({  

       format: 'yyyy-mm-dd'

     });  

</script> 

                <!-- textarea -->
                <div class="form-group">
                  <label>Краткая информация</label>
                  <textarea class="form-control" rows="3" id="short" name="short" placeholder="Введите сопроводительный текст ...">{{ $news->short }}</textarea>
                </div>
                <div class="form-group">
                  <label>Содержание</label>
                  <textarea class="form-control" rows="3" placeholder="Содержание статьи ..." id="content" name="content">{{ $news->content }}</textarea>
                </div>
        
                                <div class="form-group">
                  <div class="checkbox">
                    <label>
                  <input type="hidden" name="status" id="status" value="0">
                        <input type="checkbox" name="status" id="status" value="1" checked>
                      Опубликовано
                    </label>
                  </div>
                                                      <div class="form-group">
                                                          <label for="image">Загрузить фотографию</label>
                    <a class="col-md-6 col-sm-6 col-xs-12 btn" title="Загрузить фотографию"><i class="icon-picture"></i></a>
                    <input type="file" name="image" id="image" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
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