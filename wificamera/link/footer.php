	<div class="container-fluid footer"> 
		<div class="row">
			<div class="col-md-3 col-xs-6 logo_footer">
				<a  href="/index.php"><img src="/images/vigio.png" alt=""></a>
			</div>
			<div  class="col-md-5 col-xs-6 text_footer">
				<h2>Готовые комплекты видеонаблюдения</h2>
				<!--<p>Так же наши проэкты:</p>
				<a href="http://vid.ukrvideo.in.ua/">vid.ukrvideo.in.ua</a>
				<br>
				<a href="http://ukrvideo.in.ua/">ukrvideo.in.ua</a>
				<br>
				<a href="http://ukrvideo.in.ua/">ukrvideo.in.ua</a> -->
			</div>
			<div class="col-md-2 offset-xs-2 col-xs-6  footer_up go_to1">
				<a href="#header" class="circlet_footer_up "><i class="fas fa-chevron-up"></i></a>
			</div>
		</div>
	</div>
	<script src="/bower_components/jquery/dist/jquery.js"></script>
	<script src="/js/main.js"></script>
	<!-- <script src="/bower_components/bootstrap/dist/js/bootstrap.js"></script> -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>
	<script src="/bower_components/fancybox-master/dist/jquery.fancybox.min.js"></script>
<!-- 	<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')
</script> -->
	<script>
	    function AjaxFormRequest(result_id,formMain,url) {
	                jQuery.ajax({
	                    url:     url,
	                    type:     "POST",
	                    dataType: "html",
	                    data: jQuery("#"+formMain).serialize(), 
	                    success: function(response) {
	                    document.getElementById(result_id).innerHTML = response;
	                },
	                error: function(response) {
	                document.getElementById(result_id).innerHTML = "<p>Возникла ошибка при отправке формы. Попробуйте еще раз</p>";
	                }
	             });

	             $(':input','#formMain')
	 				.not(':button, :submit, :reset, :hidden')
	 				.val('')
	 				.removeAttr('checked')
	 				.removeAttr('selected');
	    }
	</script>
	<script>
		$(document).ready(function() { 
    	$("a.fancyimage").fancybox(); 
  		});
	</script>
</body>
</html>