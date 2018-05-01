@extends('admin.master')
@section('title', 'Добавить новый товар в магазин')
@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Добавить в магазин новый товар
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
          <h3 class="box-title">Форма добавления товара в магазин</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
              <form id="shop-form" data-parsley-validate class="form-horizontal form-label-left" method="post" enctype="multipart/form-data" action="{{ action('Admin\ShopController@save') }}">
@foreach ($errors->all() as $error)
	<p class="alert alert-danger">{{ $error }}</p>
@endforeach
@if (session('status'))
	<div class="alert alert-success">
{{ session('status') }}
	</div>
@endif
@if ($item->id)
    {{ method_field('PUT') }}
    <input type="hidden" name="id" value="{{ old("id", $item->id) }}">
@endif
<input type="hidden" name="_token" value="{!! csrf_token() !!}">                      

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Наименование <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="name" name="name" required="required" class="form-control col-md-7 col-xs-12" value="{{ old("name", $item->name) }}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="short">Краткое описание <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="short" name="short" required="required" class="form-control col-md-7 col-xs-12" value="{{ old("short", $item->short) }}">
                      </div>
                    </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Цена</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <input type="text" id="price" name="price" required="required" class="form-control col-md-7 col-xs-12" value="{{ old("price", $item->price) }}">
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
                            <input type="radio" name="status" value="0" checked=""> Нет
                          </label>
                        </div>
                      </div>
                    </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Сопроводительное письмо</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <textarea id="description" name="description" class="resizable_textarea form-control" style="width: 90%; overflow: hidden; word-wrap: break-word; resize: horizontal; height: 87px;">{{ $item->description }}
                    </textarea>
                  </div>
                                                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="discount">Скидка <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="discount" name="discount" required="required" class="form-control col-md-7 col-xs-12" value="{{ old("discount", $item->discount) }}">
                      </div>
                    </div>
                                  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="disdate">Действует до <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="disdate" name="disdate" required="required" class="date form-control col-md-7 col-xs-12" value="{{ old("disdate", $item->disdate) }}">
                      </div>
                    </div>
                                  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="author">Автор <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="author" name="author" required="required" class="form-control col-md-7 col-xs-12" value="{{ old("author", $item->author) }}">
                      </div>
                    </div>
                                                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="quantity">Количество <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="quantity" name="quantity" required="required" class="form-control col-md-7 col-xs-12" value="{{ old("quantity", $item->quantity) }}">
                      </div>
                    </div>
                                                 <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="shopcat_id">Выберите категорию</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                  <select class="form-control col-md-7 col-xs-12" id="shopcat_id" name="shopcat_id">
                    @foreach($shopcats as $shopcat)
                    <option value="{!! $shopcat->id !!}" @if (old('shopcat_id', $item->shopcat_id) == $shopcat->id) selected @endif>{!! $shopcat->name !!}</option>
                    @endforeach
                  </select>
                      </div>
                </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="date">Дата выпуска:</label>

                <div class="col-md-6 col-sm-6 col-xs-12 date input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="date form-control col-md-7 col-xs-12" id="date" name="date" value="{{ $item->date }}">
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
                 <div class="col-md-6 col-sm-6 col-xs-12">
                     <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                <button type="submit" class="btn btn-default">Отменить</button>
                <button type="submit" class="btn btn-info pull-right">Отправить</button>
              </div>
                 </div>
                </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
          <!-- /.box -->



@endsection