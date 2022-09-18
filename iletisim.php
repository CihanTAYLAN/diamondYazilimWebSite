<!DOCTYPE html>
<html>
<head>
	<?php include('assets/includes/meta.php'); ?>
	<style type="text/css">
		@media (max-width: 750px) and (min-width: 0px){
			section#pagetitle {
				height: 300px;
			}
			section#iletisim_info{
				margin-top: 0px;
			}
		}
	</style>
</head>
<body>
	<?php include('assets/includes/header.php'); ?>

	<section id="pagetitle" style="background: none;">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d376.43714752536295!2d28.843358553984633!3d40.99248995213135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caa358c2e8a4d3%3A0x2946af5ce16dc36f!2zxZ5pcmluZXZsZXIgTWFoYWxsZXNpLCBNZXJpw6cgU2sgTm86MjgsIDM0MTg4IEJhaMOnZWxpZXZsZXIvxLBzdGFuYnVs!5e0!3m2!1str!2str!4v1532976876492" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
		<div class="title" style="color: #000;">İletişim</div>
		<div class="pagetitle_bottom"></div>
	</section>
	<?php include('assets/includes/menu.php'); ?>
	<section id="iletisim_info">
		<div class="wrapper">
			<div class="information">
				<div class="title">İletişim Bilgileri</div>
				<!--<a href="tel:05326767238" class="info telefon">Pbx : 0212 503 74 79</a>--!>
				<a href="tel:05326767238" class="info telefon">Gsm: 0532 676 72 38</a>
				<div class="info adres">Şirinevler Mahallesi Meriç Sokak No:28/16 Bahçelievler/İstanbul</div>
				<div class="info e_mail">info@diamondyazilim.com</div>
				<div class="info e_mail">support@diamondyazilim.com</div>
			</div>
		</div>
	</section>

	<section id="iletisim_form">
		<div class="wrapper">
			<div class="formation">
				<div class="title">İletişim Formu</div>
				<form onSubmit="iletisim_form_gonder();" method="POST" id="iletisim_form_iletisim">
					<input class="form" type="text" name="firma" placeholder="Firma Ünvanı"/>
					<input class="form" type="text" name="name_surname" placeholder="İsim Soyisim"/>
					<input class="form" type="text" id="tel" name="phone" placeholder="Telefon Numarası"/>
					<input class="form" type="text" name="e_mail" placeholder="E-Mail"/>
					<textarea class="form" name="message" placeholder="Mesajınız"></textarea>
					<input class="button" id="iletisim_form_submit" type="submit" name="submit" value="Gönder"/>
				</form>
			</div>
		</div>
	</section>

	
	<footer style="margin-top: -140px;">

		<div class="white"></div>

		<div class="wrapper">

			<div class="kap">

				<div class="boxes">

					<div class="box">

					 	<div class="icon"></div>

					 	<a href="tel:0532 676 72 38" class="number">0532 676 72 38</a>	

					</div>

					<div class="box">
					 	
					 	<div class="icon message"></div>

					 	<a href="mailto:info@centralpilates.com" class="number">support@diamondyazilim.com</a>

					</div>

				</div>

			</div>

			 <div class="socialmedia">

				 <div class="boxes">

				 	<a href="https://www.facebook.com/diamondyazilim/" target="_blank" class="box facebook"></a>
				 	<a href="https://www.instagram.com/diamondyazilim/" target="_blank" class="box instagram"></a>
				 	<a href="https://www.google.com/diamondyazilim/" target="_blank" class="box google"></a>

				 </div>

			 </div>

			 <div class="address">

				 <div class="adres-tum">

				 	<div class="title">Diamond Yazılım BDH</div>
				 	<div class="acik_adres">Hürriyet cad. Sedef sok. No: 5/B Bahçelievler / İstanbul</div>
					<span style='margin-top:20px;font-size: 11px; display: inline-block; text-align: center; width: 120px;'><a title='Diamond Yazılım Armut' target="_blank" href='https://armut.com/hizmetveren/diamond-yazilim-istanbul-bahcelievler-web-site-yaptirma_351056' style='background: none; padding:0; border:0;'><img src='https://armut.com/images/promo_5.png' style='display: block; margin-bottom: 6px; padding:0; border: 0;' /></a><a href="https://armut.com/hizmetveren/diamond-yazilim-istanbul-bahcelievler-web-site-yaptirma_351056" target="_blank" style="border:0;">Diamond Yazılım</a></span>
				 </div>

			 </div>
		</div>

		 <div class="alt_footer">

		 	<div class="wrapper">
		 		
		 		<div class="designed">Copyright © 2017 Diamond Yazılım BDH</div>

		 		<a href="http://diamondyazilim.com" target="_blank" title="Web Tasarımı" class="diamondyazilim-logo"></a>

		 	</div>

		 </div>

	</footer>
</body>
</html>
<script>
	function iletisim_form_gonder()
	{
			//Formun Manuel Olarak Gönderilmesini Engeller
			event.preventDefault();

			// Get form
			var form = $('#iletisim_form_iletisim')[0];

			// Create an FormData object
			var data = new FormData(form);

			// If you want to add an extra field for the FormData
			data.append("ajax", "iletisim_form");

			// disabled the submit button
			$("#iletisim_form_submit").prop("disabled", true);
			
			$.ajax({
				type: "POST",
				enctype: 'multipart/form-data',
				url: "<?=$ajax;?>",
				data: data,
				processData: false,
				contentType: false,
				cache: false,
				timeout: 600000,
				success: function (data) {
					console.log("SUCCESS : ", data);
					alert (data);
					$("#iletisim_form_submit").prop("disabled", false);
				},
				error: function (e) {
					console.log("ERROR : ", e);
				},
			});
	}
	document.getElementById('tel').addEventListener('input', function (e) {
	var x = e.target. value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
	e.target.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
	});
</script>