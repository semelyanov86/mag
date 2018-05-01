@extends('admin.master')
@section('title', 'Отправить новый выпуск')
@section('content')
      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">

          <div class="page-title">
            <div class="title_left">
              <h3>Отправить свежий выпуск журнала</h3>
            </div>
            <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                </div>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Отправить новый номер <small>выпуска издания</small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br />
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
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
                    <textarea id="intro" name="intro" class="resizable_textarea form-control" style="width: 100%; overflow: hidden; word-wrap: break-word; resize: horizontal; height: 87px;">Краткая информация о выпуске
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
                    <textarea id="content" name="content" class="resizable_textarea form-control" style="width: 100%; overflow: hidden; word-wrap: break-word; resize: horizontal; height: 87px;">Подробная информация
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
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Дата <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="date" name="date" class="date form-control col-md-7 col-xs-12" required="required" value="2017-20-01" type="text">
                      </div>
                    </div>
                  
                            <script type="text/javascript">
                            $(function() {
                                $('input[name="date"]').daterangepicker({
                                    singleDatePicker: true,
                                    showDropdowns: true
                                }), 
                              
                            });
                            </script>

                  <div id="container"></div>
                  <div class="form-group">
                    <a class="btn" title="Загрузить обложку"><i class="icon-picture"></i></a>
                    <input type="file" name="image" id="image" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
                  </div>
                </div>
                </div>
              </div>
          </div>
                <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="submit" class="btn btn-primary">Отменить</button>
                        <button type="submit" class="btn btn-success">Отправить</button>
                      </div>
                    </div>

                  </form>
                </div>
              </div>
            </div>
          </div>
          
    <div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
  </div>
          
  <!-- bootstrap progress js -->
  <script src="/backend/js/progressbar/bootstrap-progressbar.min.js"></script>
  <script src="/backend/js/nicescroll/jquery.nicescroll.min.js"></script>
  <!-- icheck -->
  <script src="/backend/js/icheck/icheck.min.js"></script>

  <script src="/backend/js/custom.js"></script>
  <!-- dropzone -->
  <script src="/backend/js/dropzone/dropzone.js"></script>
  <!-- pace -->
  <script src="/backend/js/pace/pace.min.js"></script>


@endsection
