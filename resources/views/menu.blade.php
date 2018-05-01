<!-- BEGIN #main-menu-wrapper -->
		<div id="main-menu-wrapper" class="clearfix">
			
			<div class="mobile-menu-button"></div>
			
			<div class="mobile-menu-wrapper">
				
				<ul id="mobile-menu">
					<li class="current_page_item"><a href="index-2.html">Главная</a>
							
					</li>
					<li><a href="/all">Все выпуски</a>
					<li><a href="/articles">Рубрики</a>
						<ul>
							<li><a href="category1.html">Architecture</a></li>
							<li><a href="category1.html">Fashion</a></li>
							<li><a href="category1.html">Industrial Design</a></li>
							<li><a href="category1.html">Interior Design</a></li>
							<li><a href="category1.html">Photography</a>
						</ul>
					</li>
					<li><a href="category2.html">Style</a></li>
					<li><a href="category1.html">Music</a></li>
					<li><a href="typography.html">Features</a>
						<ul>	
							<li><a href="category1.html">Category I</a></li>
							<li><a href="category2.html">Category II</a></li>
							<li><a href="article-single.html">Article/Blog Single</a></li>
							<li><a href="products.html">Shop</a></li>
							<li><a href="product-single.html">Shop Single</a></li>		
							<li><a href="typography.html">Typography</a></li>
							<li><a href="text-columns.html">Columns</a></li>					
							<li><a href="js-elements.html">JS Elements</a></li>					
							<li><a href="left-sidebar.html">Left Sidebar</a></li>
							<li><a href="full-width.html">Full Width</a></li>					
						</ul>
					</li>
					<li><a href="contact.html">Связаться с нами</a></li>	
				</ul>
				<!-- END #main-menu -->
				
			</div>
			<?php $p = request() ->path(); ?>
			<!-- BEGIN #main-menu -->
			<ul id="main-menu" class="fl">
				<li @if ($p =='/') class="current_page_item" @endif><a href="/">Главная</a>
					
				</li>
				<li @if ($p =='all') class="current_page_item" @endif><a href="/all">Все выпуски</a>
				<li @if ($p =='rubrikas') class="current_page_item" @endif><a href="/rubricas">Рубрики</a>
					<ul>
                                            
					@foreach ($rubrikas as $rubrika)	
                                        <li><a href="/rubrika/{!! $rubrika->id !!}">{!! $rubrika->name !!}</a></li>
                                         @endforeach
					</ul>
				</li>
				<li><a href="/about">О журнале</a></li>
				<li @if ($p =='news') class="current_page_item" @endif><a href="/news">Новости</a></li>
				<li><a href="typography.html">Магазин</a>
					<ul>	
						<li><a href="category1.html">Category I</a></li>
						<li><a href="category2.html">Category II</a></li>
						<li><a href="article-single.html">Article/Blog Single</a></li>
						<li><a href="products.html">Shop</a></li>
						<li><a href="product-single.html">Shop Single</a></li>		
						<li><a href="typography.html">Typography</a></li>
						<li><a href="text-columns.html">Columns</a></li>					
						<li><a href="js-elements.html">JS Elements</a></li>					
						<li><a href="left-sidebar.html">Left Sidebar</a></li>
						<li><a href="full-width.html">Full Width</a></li>					
					</ul>
				</li>
				<li @if ($p =='contact') class="current_page_item" @endif><a href="/contact">Связаться с нами</a></li>
			</ul>
			<!-- END #main-menu -->
			
			<div class="menu-search-button"></div>
		
			<form method="get" action="{{ url('search') }}" class="menu-search-form">
				<input class="menu-search-field" type="text" onblur="if(this.value=='')this.value='To search, type and hit enter';" onfocus="if(this.value=='To search, type and hit enter')this.value='';" value="To search, type and hit enter" name="search" />
			</form>

		</div>
		<!-- END #main-menu-wrapper -->