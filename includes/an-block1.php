<object data="img/az-map.svg" type="image/svg+xml" id="imap" width="100%" height="auto"></object>
<div class="alert">
	сообщение
</div>

<script>
alert(1);
	$(document).ready(function(){
		$('body').on('click', '#az-map1, #az-map2, #az-map3, #az-map4, #az-map5', function(e) {
		// $('#az-map1, #az-map2, #az-map3, #az-map4, #az-map5').click(function(){
			alert(1);
			//$('.alert').toggleClass('alertblock');
		});
	});

	$(window).load(function () { // Нам нужно дождаться, пока вся графика (и наша карта тоже) загрузится, поэтому используем window.onload,
	  var svgobject = document.getElementById('svgmap'); // Находим тег <object>
	  alert(1);
	  if ('contentDocument' in svgobject) {              // У нас действительно там что-то есть?
	    var svgdom = jQuery(svgobject.contentDocument);  // Получаем доступ к объектной модели SVG-файла
	    // Теперь делаем свою работу, например:
	    alert(jQuery("#az-map1", svgdom).attr("id");  // Находим тег с id="figure1" в SVG DOM и заливаем его красным
	  }	
	});
</script>