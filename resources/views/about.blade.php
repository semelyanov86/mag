@include('head')
@section('title', 'Главная')
		
		<!-- BEGIN #main-content -->
		<div id="main-content">
			
			<h1 class="page-title">О журнале</h1>
			
			<!-- BEGIN .breadcrumbs-wrapper -->
			<div class="breadcrumbs-wrapper clearfix">
				<ul class="breadcrumbs">
					<li><span><a href="/">Главная</a></span></li>
					<li><span>О журнале</span></li>
				</ul>
			</div>
			<!-- END .breadcrumbs-wrapper -->
			
			<!-- BEGIN .page-content -->
			<div class="page-content">
			
				<h3>Электронный научно-практический журнал "Кредитная кооперация: сегодня, завтра, всегда!"</h3>
                                @foreach($mags as $mag)
                                <img src="/images/mags/{!! $mag->image !!}" width="300px" style="float:center;">
                                @endforeach
				<p>Журнал издается в помощь управленцам и специалистам кооперативов, научным работникам, преподавателям ВУЗов и студентам в повседневной работе и учёбе. На страницах журнала размещается информация о материалах по теории и практике в области микрокредитования; осуществляется анализ работы кредитной кооперации в России; рассматриваются наиболее важные вопросы в сфере маркетинга, менеджмента и кооперации; представлены оригинальные публикации по результатам исследований наших ученых; размещаются переводы с иностранных источников; представлена информация об изменениях в законодательстве, в профессиональной среде.</p>

<p>Журнал выпускается в электронной версии, содержит полноценные, завершенные тексты, отличающиеся качеством и оригинальностью, с учётом мнения и предложений читателей. Лаконичность изложения материала делает журнал доступным и понятным разной аудитории.</p>

<p>Мы вносим свой вклад в информационное обеспечение кредитной кооперации страны, помогаем развить конструктивные отношения с предпринимательскими и общественными структурами. Наша миссия - развитие информационных ресурсов и проектов, необходимых для функционирования кредитных кооперативов России.</p>

<p>Отличительные черты журнала:</p>
<ul>
<li>Аналитика и перспективы развития отрасли микрофинансирования.</li>
<li>Успешный опыт российских и зарубежных кооперативов.</li>
<li>Охват всей цепочки принятия решений от стратегии управления до операционного менеджмента.</li>
<li>Обзоры передовых технологий.</li>
<li>Отсутствие заказных статей.</li>
<li>Регулярные ответы на вопросы читателей.</li>
<li>Переводные материалы зарубежных аналитиков по микрофинансовой тематике.</li>
</ul>
<p>Научно-практический журнал «Кредитная кооперация: сегодня, завтра, всегда!» всегда открыт для сотрудничества. Если вас заинтересовал новый проект, просим принять участие в нем в качестве авторов статей, рецензентов и подписчиков. Плата с авторов за публикацию статей в журнале не взимается. Статьи принимаются в течение года и по мере поступления размещаются в журнале (на сайте www.creditcoop.ru и www.federsro.ru).</p>

<p>Отправлять статьи необходимо на адрес главного редактора издания mag@creditcoop.ru. Мы уверены, что сотрудничество с нашим журналом повысит интерес широкой аудитории к вашей работе и поможет в росте вашей организации.</p>

<p>Внимание! Все ваши предложения, замечания по данному журналу вы можете высказать на нашем форуме.</p>

<p>Общайтесь, анализируйте, делитесь вашими впечатлениями. Надеемся, что совместными усилиями мы сможем сделать наше издание лучше!</p>
				
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