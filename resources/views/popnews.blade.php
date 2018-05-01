				<ul class="latest-posts-list clearfix">
					@foreach ($news as $new)
					<li class="clearfix">
						<div class="lpl-img">
							<a href="/news/{!! $new->id !!}" rel="bookmark">
                                                            <img src="/images/news/{!! $new->image !!}" width="50px" alt="" />
							</a>
						</div>
						<div class="lpl-content">
                                                    <h6><a href="/news/{!! $new->id !!}" rel="bookmark">{!! $new->title !!}</a> <span> {!! $new->date !!}</span></h6>
						</div>
					</li>
					
					
				@endforeach
				</ul>
