<section class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<a href="/"><img src="img/logo.png" alt=""></a>
			</div>
			<div class="col-md-2">
				<div class="counter">
					<img src="img/counter.png" alt="">
				</div>
				<div class="developer">
					<a href="#">Создание <br> сайтов</a>
				</div>
			</div>
			
		</div>
	</div>
</section>
<a href="#zvonok" name="modal" class="button-fix-1 hidden-sm hidden-xs"></a>
<a href="#message" name="modal" class="button-fix-2 hidden-sm hidden-xs"></a>


<div id="mask"></div>

<div id="zvonok" class="window"> 
	<form action="" class="common-form form2">
		<span class="close"></span>
		<span class="form-subtitle">Заказать звонок</span>
		<label class="zv-label zv1"><input type="text" name="uname" placeholder="Введите Ваш имя"></label>
		<label class="zv-label zv2"><input type="text" name="tel" placeholder="Введите Ваш телефон" class="phone"></label>
		<input type="hidden" name="form" value="Форма - заказать звонок">
		<input type="submit" id="form1_submit" class="button-2" value="Заказать звонок">
	</form>
</div>

<div id="message" class="window"> 
	<form action="" class="common-form form3">
		<span class="close"></span>
		<span class="form-subtitle">написать сообщение</span>
		<label class="zv-label zv1"><input type="text" name="uname" placeholder="Введите Ваш имя"></label>
		<label class="zv-label zv2"><input type="text" name="tel" placeholder="Введите Ваш телефон" class="phone"></label>
		<label class="zv-label zv3"><textarea name="text"  placeholder="Текст сообщения"></textarea></label>
		<input type="hidden" name="form" value="Форма - заказать звонок">
		<input type="submit" id="form1_submit" class="button-2" value="Заказать звонок">
	</form>
</div>

<div id="thanks" class="window"> 
	<form action="" class="common-form">
		<span class="close"></span>
		<span class="form-title">Ваше сообщение отправлено!</span>
		
	</form>
</div>

<a href="#thanks" name="modal"></a>
