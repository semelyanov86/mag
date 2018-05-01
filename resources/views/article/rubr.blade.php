@include('head')
@section('title', 'Список статей рубрики {{ $rubr->name }}')
		
		<!-- BEGIN #main-content -->
		<div id="main-content">
			
			<h1 class="page-title">Все статьи рубрики "{{ $rubr->name }}"</h1>
			
			<!-- BEGIN .breadcrumbs-wrapper -->
			<div class="breadcrumbs-wrapper clearfix">
				<ul class="breadcrumbs">
					<li><span><a href="/">Главная</a></span></li>
					<li><span><a href="/rubricas">Рубрики</a></span></li>
					<li><span>{{ $rubr->name }}</span></li>
				</ul>
			</div>
			<!-- END .breadcrumbs-wrapper -->
			
			<!-- BEGIN .page-content -->
			<div class="page-content">
			
				<ul class="article-category-col-2 clearfix">
					
				@foreach ($articles as $article)	
                                        <li>
						<a href="{!! action('ArticleController@show', $article->id) !!}"><img src="images/articles/{!! $article->image !!}" alt="" /></a>
						<h3>
                                                    <a href="{!! action('ArticleController@show', $article->id) !!}">{!! $article->title !!}</a>
							<span class="article-meta clearfix">
								<span class="article-date">{!! $article->date !!}</span><span class="article-comments">{!! $article->rubrikas->first()->name !!}</span>
							</span>
						</h3>
						<p>{!! $article->short !!}</p>
					</li>
					
				@endforeach	
					
				</ul>
				
				<div class="pagination-wrapper">

				</div>
				
			<!-- END .page-content -->
			</div>
			
		</div>
		<!-- END #main-content -->
		
		<!-- BEGIN #sidebar-content -->
		<div id="sidebar-content">
			
			<!-- BEGIN .widget -->
			<div class="widget clearfix">
			
				<ul class="adverts-four">
					<li><a href="#"><img src="images/advert1.png" alt="" /></a></li>
					<li><a href="#"><img src="images/advert1.png" alt="" /></a></li>
					<li><a href="#"><img src="images/advert1.png" alt="" /></a></li>
					<li><a href="#"><img src="images/advert1.png" alt="" /></a></li>
				</ul>
			
			</div>
			<!-- END .widget -->
			
			<!-- BEGIN .widget -->
@include('newsletter')
			<!-- END .widget -->
			
			<!-- BEGIN .widget -->
			<div class="widget clearfix">
				
				<div class="widget-title clearfix">
					<h3>Последние новости</h3>
					<div class="widget-title-border">
						<div class="widget-title-block"></div>
					</div>
				</div>
				
@include('popnews')
				
			</div>
			<!-- END .widget -->
			
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