@include('head')
@section('title', 'Последние новости из мира кредитной кооперации')
		
		<!-- BEGIN #main-content -->
		<div id="main-content">
			
			<h1 class="page-title">Все статьи</h1>
			
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
			
				<ul class="article-category-col-2 clearfix">
					
				@foreach ($newsf as $new)	
                                        <li>
						<a href="{!! action('PagesController@newsshow', $new->id) !!}"><img src="images/news/{!! $new->image !!}" alt="" /></a>
						<h3>
                                                    <a href="{!! action('PagesController@newsshow', $new->id) !!}">{!! $new->title !!}</a>
							<span class="article-meta clearfix">
								<span class="article-date">{!! $new->date !!}</span><span class="article-comments">9 Comments</span>
							</span>
						</h3>
						<p>{!! $new->short !!}</p>
					</li>
					
				@endforeach	
					
				</ul>
				
				<div class="pagination-wrapper">
 {!! $newsf->links("vendor.pagination.bootstrap-4") !!}
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
			<div class="widget clearfix">
				
				<div class="widget-title clearfix">
					<h3>Newsletter</h3>
					<div class="widget-title-border">
						<div class="widget-title-block"></div>
					</div>
				</div>
				
				<p>All the latest StyleMag picks emailed directly to you every week!</p>
				
				<form method="post" action="#">
					<input type="text" name="s" class="newsletter-input" />
					<input type="submit" value="Submit" class="newsletter-submit" />
				</form>
				
			</div>
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