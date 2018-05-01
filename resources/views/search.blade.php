@include('head')
@section('title', 'Результаты поиска')
		
		<!-- BEGIN #main-content -->
		<div id="main-content">
			
			<h1 class="page-title">Результаты поиска</h1>
			
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
			
				<table class="table table-bordered">
<tr>
<th>Наименование</th>
<th>Краткое содержание</th>
</tr>
@if($articles->count())
@foreach($articles as $article)
<tr>
    <td><a href="/article/{{ $article->id }}">{{ $article->title }}</a></td>
<td>{{ $article->short }}</td>
</tr>
@endforeach
@else
<tr>
<td colspan="3">Ничего не найдено.</td>
</tr>
@endif
</table>
				
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
			

			
			
			
			
			
		</div>
		<!-- END #sidebar-content -->
		
	</div>
	<!-- END .content-wrapper -->
	
	@include('footer')