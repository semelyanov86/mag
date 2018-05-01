@include('head')
@section('title', 'Главная')

		
		<!-- BEGIN #main-content -->
		<div id="main-content">
			
			<!-- BEGIN .slider -->
			<div class="slider clearfix">
				<ul class="slides">
				
					<li>
						<img src="images/slide1.jpg" alt="" />
						<div class="flex-caption">
							<h2><a href="#">Spring 2013 Collection</a><span>December 18th, 2012</span></h2>
							<p>Vestibulum a magna in eros pellentesque imperdiet ut in leo. Cras lacus arcu, sagittis nec tincidunt sit amet, laoreet a risus. Aliquam at purus quis tellus hendrerit</p>
						</div>
					</li>
					
					<li>
						<img src="images/slide2.jpg" alt="" />
						<div class="flex-caption">
							<h2><a href="#">We Love Thai Food</a><span>December 12th, 2012</span></h2>
							<p>Vestibulum a magna in eros pellentesque imperdiet ut in leo. Cras lacus arcu, sagittis nec tincidunt sit amet, laoreet a risus. Aliquam at purus quis tellus hendrerit</p>
						</div>
					</li>
					
					<li>
						<img src="images/slide3.jpg" alt="" />
						<div class="flex-caption">
							<h2><a href="#">Luxury Evening Attire</a><span>November 23rd, 2012</span></h2>
							<p>Vestibulum a magna in eros pellentesque imperdiet ut in leo. Cras lacus arcu, sagittis nec tincidunt sit amet, laoreet a risus. Aliquam at purus quis tellus hendrerit</p>
						</div>
					</li>
					
					<li>
						<img src="images/slide4.jpg" alt="" />
						<div class="flex-caption">
							<h2><a href="#">Healthy Skin Care Tips</a><span>November 19th, 2012</span></h2>
							<p>Vestibulum a magna in eros pellentesque imperdiet ut in leo. Cras lacus arcu, sagittis nec tincidunt sit amet, laoreet a risus. Aliquam at purus quis tellus hendrerit</p>
						</div>
					</li>
					
					<li>
						<img src="images/slide5.jpg" alt="" />
						<div class="flex-caption">
							<h2><a href="#">Key Fashion Trends</a><span>November 15th, 2012</span></h2>
							<p>Vestibulum a magna in eros pellentesque imperdiet ut in leo. Cras lacus arcu, sagittis nec tincidunt sit amet, laoreet a risus. Aliquam at purus quis tellus hendrerit</p>
						</div>
					</li>

				</ul>
			<!-- END .slider -->
			</div>
			
			<!-- BEGIN .clearfix -->
			<div class="clearfix">
				
				<!-- BEGIN .news-one-half -->
				<div class="news-one-half">
					
					<!-- BEGIN .news-image-container -->
					<div class="news-image-container">
						<a href="#"><img src="images/image6.jpg" alt="" /></a>
						<a href="#" class="news-image-title">Food &amp; Drink</a>
					</div>
					<!-- END .news-image-container -->
					
					<h3 class="news-title"><a href="#">Thai Cafe in brixton</a><span>November 12th, 2012</span></h3>
					<p>Vestibulum a magna in eros pellentesque imperdiet ut in leo cras lacus arcu</p>
					
				</div>
				<!-- END .news-one-half -->
				
				<!-- BEGIN .news-one-half-last -->
				<div class="news-one-half-last">
					
					<!-- BEGIN .news-image-container -->
					<div class="news-image-container">
						<a href="#"><img src="images/image7.jpg" alt="" /></a>
						<a href="#" class="news-image-title">Fashion</a>
					</div>
					<!-- END .news-image-container -->
					
					<h3 class="news-title"><a href="#">Calming Summer Vibes</a><span>November 1st, 2012</span></h3>
					<p>Vestibulum a magna in eros pellentesque imperdiet ut in leo cras lacus arcu</p>
					
				</div>
				<!-- END .news-one-half-last -->
			
			</div>
			<!-- END .clearfix -->
			
			<div class="title-block">
				<h3>Последние выпуски журнала</h3>
			</div>
			
			<!-- BEGIN .news-block-columns-5 -->
			<ul class="news-block-columns-5 clearfix">
                            @foreach ($mags as $mag)
				
				<li class="news-block-col-5">	
					<div class="news-image-container">
                                            <a href="#"><img src="images/mags/{!! $mag->image !!}" alt="" /></a>
					</div>
                                    <h3 class="news-title-lower"><a href="/mag/{!! $mag->id !!}">{!! $mag->title !!}</a><span>{!! $mag->date !!}</span></h3>
				</li>
								
				@endforeach
			</ul>
			<!-- END .news-block-columns-5 -->
			
			<!-- BEGIN .shop-block-columns-2 -->
			<ul class="shop-block-columns-2 clearfix">
			
				<li class="shop-block-col-2">
				
					<div class="title-block">
						<h3>Популярные статьи</h3>
					</div>
				
					<!-- BEGIN .slider-news -->
					<div class="slider-news clearfix">
						<ul class="slides">

							<li>
								<ul class="shop-block-list">
                                                                    @foreach ($artf1 as $art1)

									<li class="clearfix">
										<div class="shop-block-img-wrapper">
                                                                                    <a href="/article/{!! $art1->id !!}"><img src="/images/articles/{!! $art1->image !!}" alt="" /></a>
										</div>
										<h4><a href="/article/{!! $art1->id !!}">{!! $art1->title !!}</a><span>{!! $art1->date !!}</span></h4>
									</li>
                                                                    @endforeach
								</ul>
							</li>

							<li>
								<ul class="shop-block-list">

                                                                    @foreach ($artf2 as $art2)

									<li class="clearfix">
										<div class="shop-block-img-wrapper">
                                                                                    <a href="/article/{!! $art2->id !!}"><img src="/images/articles/{!! $art2->image !!}" alt="" /></a>
										</div>
										<h4><a href="/article/{!! $art2->id !!}">{!! $art2->title !!}</a><span>{!! $art2->date !!}</span></h4>
									</li>
                                                                    @endforeach

								</ul>
							</li>

						</ul>
					<!-- END .slider -->
					</div>
				
				</li>
		
				<li class="shop-block-col-2">
			
					<div class="title-block">
						<h3>Последние статьи</h3>
					</div>
				
					<!-- BEGIN .slider-news -->
					<div class="slider-news clearfix">
						<ul class="slides">

							<li>
								<ul class="shop-block-list">

                                                                 @foreach ($artl1 as $l1)

									<li class="clearfix">
										<div class="shop-block-img-wrapper">
                                                                                    <a href="/article/{!! $l1->id !!}"><img src="/images/articles/{!! $l1->image !!}" alt="" /></a>
										</div>
										<h4><a href="/article/{!! $l1->id !!}">{!! $l1->title !!}</a><span>{!! $l1->date !!}</span></h4>
									</li>
                                                                    @endforeach

								</ul>
							</li>

							<li>
								<ul class="shop-block-list">

                                                                 @foreach ($artl2 as $l2)

									<li class="clearfix">
										<div class="shop-block-img-wrapper">
                                                                                    <a href="/article/{!! $l2->id !!}"><img src="/images/articles/{!! $l2->image !!}" alt="" /></a>
										</div>
										<h4><a href="/article/{!! $l2->id !!}">{!! $l2->title !!}</a><span>{!! $l2->date !!}</span></h4>
									</li>
                                                                    @endforeach

								</ul>
							</li>

						</ul>
			
					<!-- END .slider-news -->
					</div>
					
				</li>
				
			</ul>
			<!-- END .shop-block-columns-2 -->
			
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
			
@include('newsletter')
			
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
