@include('head')
@section('title', 'Все выпуски журнала')
		
		<!-- BEGIN #main-content -->
		<div id="main-content">
                    	@if (session('status'))
				<div class="alert alert-success">
					{{ session('status') }}
				</div>
			@endif
                     
	
			<h1 class="page-title">Все выпуски журнала</h1>
			
			<!-- BEGIN .breadcrumbs-wrapper -->
			<div class="breadcrumbs-wrapper clearfix">
				<ul class="breadcrumbs">
					<li><span><a href="/">Главная</a></span></li>
					<li><span>Все выпуски журнала</span></li>
				</ul>
				
			</div>
			<!-- END .breadcrumbs-wrapper -->
			
			<!-- BEGIN .page-content -->
			<div class="page-content">
			
				<ul class="products-col-4 clearfix">
			@if ($mags->isEmpty())
				<p>Номеров нет.</p>
			@else
			@foreach ($mags as $mag)
                        <li>
						<div class="product-thumbnail-wrapper">		
                                                    <a href="{!! action('PagesController@show', $mag->id) !!}"><img src="images/mags/{!! $mag->image !!}" alt="{!! $mag->title !!}" /></a>
							<div class="product-options">
                                                            <a class="add-to-cart-button" title="Скачать" href="{!! $mag->link1 !!}">Скачать</a>
								<a class="details-button" title="Подробнее" href="{!! action('PagesController@show', $mag->id) !!}">Подробнее</a>
							</div>
						</div>
						<div class="product-meta">
							<h3><a href="{!! $mag->link1 !!}">{!! $mag->no !!} номер журнала "Кредитная кооперация"</a></h3>
							<p class="product-price">
                                                            <a href="{!! $mag->link1 !!}"><span class="regular-price">Читать онлайн</a></span>
								<a href="{!! $mag->link2 !!}"><span class="reduced-price">PDF</a></span>
							</p>
						</div>
					</li>
					
					
					@endforeach
                                        @endif
				</ul>
                            
                            <div class="pagination-wrapper">
                                
                                {!! $mags->links("vendor.pagination.bootstrap-4") !!}

				</div>
			
			<!-- END .page-content -->
			</div>
			
		</div>
		<!-- END #main-content -->
		
		<!-- BEGIN #sidebar-content -->
		<div id="sidebar-content">
			
			<!-- BEGIN .widget -->
			<div class="widget clearfix">
				
				<div class="widget-title clearfix">
					<h3>Сортировать по годам</h3>
					<div class="widget-title-border">
						<div class="widget-title-block"></div>
					</div>
				</div>
				
				<ul>
					<li><a href="?year=2013">2013</a></li>
					<li><a href="?year=2014">2014</a></li>
                                        <li><a href="/all">Все</a></li>
				</ul>
				
			</div>
			<!-- END .widget -->
			
			<!-- BEGIN .widget -->

			<!-- END .widget -->
			
			<!-- BEGIN .widget -->
			<div class="widget clearfix">
				
				<div class="widget-title clearfix">
					<h3>Сортировка по месяцам</h3>
					<div class="widget-title-border">
						<div class="widget-title-block"></div>
					</div>
				</div>
				
				<ul>
					<li><a href="?month=01">Январь</a></li>
					<li><a href="?month=02">Февраль</a></li>
					<li><a href="?month=03">Март</a></li>
					<li><a href="?month=04">Апрель</a></li>
					<li><a href="?month=05">Май</a></li>
					<li><a href="?month=06">Июнь</a></li>
					<li><a href="?month=07">Июль</a></li>
					<li><a href="?month=08">Август</a></li>
					<li><a href="?month=09">Сентябрь</a></li>
					<li><a href="?month=10">Октябрь</a></li>
					<li><a href="?month=11">Ноябрь</a></li>
					<li><a href="?month=12">Декабрь</a></li>
                                        <li><a href="/all">Все</a></li>
				</ul>
				
			</div>
			<!-- END .widget -->
			
			<!-- BEGIN .widget -->
	
			<!-- END .widget -->
			
			<!-- BEGIN .widget -->
@include('newsletter')
			<!-- END .widget -->
			
		</div>
		<!-- END #sidebar-content -->
		
	</div>
	<!-- END .content-wrapper -->
	
@include('footer')