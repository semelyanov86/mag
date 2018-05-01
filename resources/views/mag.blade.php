@include('head')
@section('title', '{!! $mag->title !!}')
		
		<!-- BEGIN #main-content -->
		<div id="main-content">
			
			<h1 class="page-title">{!! $mag->title !!}</h1>
			
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
			
				<img src="/images/mags/{!! $mag->image !!}" alt="" class="article-image-full">
				
				<h2 class="article-title">
					<a href="#">{!! $mag->title !!}</a>
					<span class="article-meta">
						<span class="article-date">{!! $mag->date !!}</span><span class="article-category"><a href="#">Food &amp; Drink</a></span><span class="article-comments"><a href="#">9 Comments</a></span>
					</span>
				</h2>
				
				{!! $mag->content !!}
				
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
					<h3>Popular Posts</h3>
					<div class="widget-title-border">
						<div class="widget-title-block"></div>
					</div>
				</div>
				
				<ul class="latest-posts-list clearfix">
					
					<li class="clearfix">
						<div class="lpl-img">
							<a href="#" rel="bookmark">
								<img src="images/image1.jpg" alt="" />
							</a>
						</div>
						<div class="lpl-content">
							<h6><a href="#" rel="bookmark">Mauris Rutru Euism Nibh at Porta</a> <span> November 18th, 2012</span></h6>
						</div>
					</li>
					
					<li class="clearfix">
						<div class="lpl-img">
							<a href="#" rel="bookmark">
								<img src="images/image2.jpg" alt="" />
							</a>
						</div>
						<div class="lpl-content">
							<h6><a href="#" rel="bookmark">Mauris Rutru Euism Nibh at Porta</a> <span> November 18th, 2012</span></h6>
						</div>
					</li>
					
					<li class="clearfix">
						<div class="lpl-img">
							<a href="#" rel="bookmark">
								<img src="images/image3.jpg" alt="" />
							</a>
						</div>
						<div class="lpl-content">
							<h6><a href="#" rel="bookmark">Mauris Rutru Euism Nibh at Porta</a> <span> November 18th, 2012</span></h6>
						</div>
					</li>
					
					<li class="clearfix">
						<div class="lpl-img">
							<a href="#" rel="bookmark">
								<img src="images/image4.jpg" alt="" />
							</a>
						</div>
						<div class="lpl-content">
							<h6><a href="#" rel="bookmark">Mauris Rutru Euism Nibh at Porta</a> <span> November 18th, 2012</span></h6>
						</div>
					</li>
					
					<li class="clearfix">
						<div class="lpl-img">
							<a href="#" rel="bookmark">
								<img src="images/image5.jpg" alt="" />
							</a>
						</div>
						<div class="lpl-content">
							<h6><a href="#" rel="bookmark">Mauris Rutru Euism Nibh at Porta</a> <span> November 18th, 2012</span></h6>
						</div>
					</li>
				
				</ul>
				
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
	
	<!-- BEGIN #footer-wrapper -->
	<div id="footer-wrapper">
		
		<!-- BEGIN .footer-columns-4 -->
		<ul class="footer-columns-4 clearfix">
			
			<li class="footer-col4">
				<div class="widget">
					<div class="widget-title clearfix">
						<h6>StyleMag</h6>
					</div>
					<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In hac habitasse platea dictumst. Duis iaculis sollicitudin porta. Etiam ornare sollicitudin.</p>
				</div>
			</li>
			
			<li class="footer-col4">
				<div class="widget">
					<div class="widget-title clearfix">
						<h6>Site Map</h6>
					</div>
					<ul>
						<li><a href="#">Store</a></li>
						<li><a href="#">Art &amp; Design</a></li>
						<li><a href="#">Style</a></li>
						<li><a href="#">Music</a></li>
						<li><a href="#">Film</a></li>
						<li><a href="#">Culture</a></li>
						<li><a href="#">Photography</a></li>
					</ul>
				</div>							
			</li>
			
			<li class="footer-col4">
				<div class="widget">
					<div class="widget-title clearfix">
						<h6>Tags</h6>
					</div>
					
					<ul class='wp-tag-cloud'>
						<li><a href="#">Tokyo</a></li>
						<li><a href="#">Autumn Fashion</a></li>
						<li><a href="#">Italian Food</a></li>
						<li><a href="#">Health</a></li>
						<li><a href="#">Shoes</a></li>
						<li><a href="#">Independent Film</a></li>
					</ul>
				</div>
			</li>
			
			<li class="footer-col4">
				<div class="widget">
					<div class="widget-title clearfix">
						<h6>Follow Us</h6>
					</div>
					
					<!-- BEGIN .social-icons -->
					<ul class="social-icons">
						<li><a href="#"><span class="twitter_icon"></span></a></li>
						<li><a href="#"><span class="pinterest_icon"></span></a></li>
						<li><a href="#"><span class="facebook_icon"></span></a></li>
						<li><a href="#"><span class="googleplus_icon"></span></a></li>
						<li><a href="#"><span class="tumblr_icon"></span></a></li>
						<li><a href="#"><span class="vimeo_icon"></span></a></li>
						<li><a href="#"><span class="youtube_icon"></span></a></li>
						<li><a href="#"><span class="rss_icon"></span></a></li>
						<li><a href="#"><span class="flickr_icon"></span></a></li>
					<!-- END .social-icons -->
					</ul>
					
				</div>
			</li>
		
		<!-- END .footer-columns-4 -->
		</ul>
		
	</div>
	<!-- END #footer-wrapper -->
	
	<!-- #footer-bottom -->
	<div id="footer-bottom" class="clearfix">
		
		<div class="fl clearfix">
			<ul class="footer-menu">
				<li><a href="index-2.html">Magazine</a></li>
				<li><a href="products.html">Store</a></li>
				<li><a href="my-account.html">Login / Register</a></li>
			</ul>
		</div>
		<div class="fr clearfix">&copy; Copyright 2012</div>
		
	</div>
	<!-- #footer-bottom -->
	
</div>
<!-- END #background-wrapper -->

<!-- END body -->
</body>
</html>