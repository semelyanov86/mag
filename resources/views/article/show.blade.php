@include('head')
@section('title', '{!! $article->title !!}')
		
		<!-- BEGIN #main-content -->
		<div id="main-content">
			
			<h1 class="page-title">{!! $article->title !!}</h1>
			
			<!-- BEGIN .breadcrumbs-wrapper -->
			<div class="breadcrumbs-wrapper clearfix">
				<ul class="breadcrumbs">
					<li><span><a href="#">Home</a></span></li>
					<li><span><a href="#">Magazine</a></span></li>
					<li><span>Food &amp; Drink</span></li>
				</ul>
			</div>
			<!-- END .breadcrumbs-wrapper -->
			
			<!-- BEGIN .page-content -->
			<div class="page-content">
			
				<img src="images/articles/{!! $article->image !!}" alt="" class="article-image-full">
				
				<h2 class="article-title">
					<a href="#">{!! $article->title !!}</a>
					<span class="article-meta">
						<span class="article-date">{!! $article->date !!}</span><span class="article-category"><a href="#">Food &amp; Drink</a></span><span class="article-comments"><a href="#">{!! $rubr !!}</a></span>
					</span>
				</h2>
				{!! $article->short !!}
                                @can('view', $article)) 
				{!! $article->content !!}
                                @endcan
                                @cannot ('view', $article)
                                <p>У вас нет доступа к просмотру. Пожалуйста, зарегистрируйтесь.</p>
                                @endcannot
				
				<div class="article-social-links">
					
					<ul class="clearfix">
						<li class="tweet-link"><a href="#">Tweet this article</a></li>
						<li class="facebook-link"><a href="#">Share on Facebook</a></li>
						<li class="pinterest-link"><a href="#">Pin on Pinterest</a></li>
					</ul>
					
				</div>
				
				<div class="title-block">
					<h3>Recommended</h3>
				</div>

				<!-- BEGIN .news-block-columns-5 -->
				<ul class="news-block-columns-5 clearfix">

					<li class="news-block-col-5">	
						<div class="news-image-container">
							<a href="#"><img src="images/image8.jpg" alt="" /></a>
						</div>
						<h3 class="news-title-lower"><a href="#">Key Winter Fashion Trends</a><span>October 23rd, 2012</span></h3>
					</li>

					<li class="news-block-col-5">	
						<div class="news-image-container">
							<a href="#"><img src="images/image9.jpg" alt="" /></a>
						</div>
						<h3 class="news-title-lower"><a href="#">The Skin Care Guide</a><span>October 20th, 2012</span></h3>
					</li>

					<li class="news-block-col-5">	
						<div class="news-image-container">
							<a href="#"><img src="images/image10.jpg" alt="" /></a>
						</div>
						<h3 class="news-title-lower"><a href="#">100% Natural Ingredients</a><span>October 8th, 2012</span></h3>
					</li>

					<li class="news-block-col-5">	
						<div class="news-image-container">
							<a href="#"><img src="images/image11.jpg" alt="" /></a>
						</div>
						<h3 class="news-title-lower"><a href="#">Our Fashion Wish List</a><span>October 1st, 2012</span></h3>
					</li>

					<li class="news-block-col-5">	
						<div class="news-image-container">
							<a href="#"><img src="images/image12.jpg" alt="" /></a>
						</div>
						<h3 class="news-title-lower"><a href="#">Style Highlights for 2013</a><span>September 23rd, 2012</span></h3>
					</li>

				</ul>
				<!-- END .news-block-columns-5 -->
				
@include('comments')
				
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