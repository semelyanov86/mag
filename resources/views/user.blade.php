@include('head')
@section('title', 'Обновить информацию о профиле')

		
		<!-- BEGIN #main-content -->
		<div id="main-content">
                    <div class="clearfix"></div>
                    <div class="title-block">
				<h3>Изменение информации о пользователе</h3>
			</div>
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
                                <input type="text" class="form-control" id="name" placeholder="Name" name="name" value="{{ $userc->name }}">
                                </div>
                </div>    
            <div class="form-group">
                  <label for="email" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-10">
                      <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="{{ $userc->email }}">
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
                                <input type="text" class="form-control" placeholder="Регион" name="region" value="{{ $userc->region }}">
                                </div>
                </div>
                            <div class="form-group">
                  <label for="coop" class="col-sm-2 control-label">Кооператив</label>
                   <div class="col-sm-10">
                  <input type="text" class="form-control" placeholder="Кооператив" name="coop" value="{{ $userc->coop }}">
                  </div>
                </div>
                          
                          <div class="box-footer">
                <button type="reset" class="btn btn-default">Отменить</button>
                <button type="submit" class="btn btn-info pull-right">Обновить</button>
              </div>
            </form>
		
		<!-- BEGIN #sidebar-content -->
		<div id="sidebar-content">
			


			
			<!-- BEGIN .widget -->
			<div class="widget clearfix">
			
				<a href="#" class="advert-side-wrapper"><img src="images/advert2.png" alt="" /></a>
			
			</div>
			<!-- END .widget -->
			
		</div>
		<!-- END #sidebar-content -->
		
	</div>
	<!-- END .content-wrapper -->
	



@include('footer')
