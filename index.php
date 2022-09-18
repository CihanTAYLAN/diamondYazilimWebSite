<!DOCTYPE html>
<html>
<head>
	<?php include('assets/includes/meta.php'); ?>
</head>
<body>

	<?php include('assets/includes/header.php'); ?>

	<section id="slider">

        <?include 'assets/includes/slider.php';?>
	</section>
	<script type="text/javascript">sliderRotator('rotator', 'nav');</script>
	<?php include('assets/includes/menu.php'); ?>
	
	<section id="bizkimiz">
		<div class="wrapper">
			<div class="right">
				<div class="mask"></div>
				<div class="karikatur"></div>
			</div>
			<div class="left">
				<div class="title">Biz Kimiz ?</div>
				<div class="text">Diamond Yazılım dijital ortamda çalışan bir şirketdir.  şirketimizin çalışanları genç ,tecrübeli ve profesyonel bir ekiptir  Yazılım sürecimizin temel prensibimiz müşterimizin isteklerini  iyi dinlemek, yapılacak işi iyi analiz etmek  ve realist çözümler sunmaktır. Ülkemizde yazılım üzerine çalışan firmalar açısından sonu belirsiz bir döngü olarak algılanmaktadır.  Diamond Yazılım şirketi olarak daima teknolojideki yenilikleri  takip ederek dijital çağa ayak uydurmaya çalışmaktayız.</div>
			</div>
		</div>
	</section>

	<section id="hizmetlerimiz">
		<div class="photo">
			<div class="mask"></div>
			<div class="photo_bottom"></div>
			<div class="photo_blue_top"></div>
			<div class="photo_blue_left"></div>
			<div class="photo_karikatur"></div>
			<div class="hizmet">
				<div class="title">Hizmetlerimiz</div>
				<div class="maddeler">
					<a href="hizmetlerimiz.php?service=web_tasarim">Web Tasarım</a>
					<a href="hizmetlerimiz.php?service=web_yazilim">Web Yazılım</a>
					<a href="hizmetlerimiz.php?service=mobil_uygulama">Mobil Uygulama</a>
					<a href="hizmetlerimiz.php?service=seo">SEO</a>
					<a href="hizmetlerimiz.php?service=kurumsal_kimlik">Kurumsal Kimlik</a>
					<a href="hizmetlerimiz.php?service=logo_tasarimi">Logo Tasarımı</a>
					<a href="hizmetlerimiz.php?service=e_ticaret">E-Ticaret</a>
					<a href="hizmetlerimiz.php?service=urun_tanitimi">Ürün Tanıtımı</a>
				</div>
			</div>
		</div>
	</section>
	<section id="ebulten">
		<div class="left">
			
				<div class="photo">
					<div class="mask">
						<div class="title">E-Bülten</div> 
						<div class="form">
							<form id="e_bulten_form" onSubmit="e_bulten_form_submit();">
								<input type="text" name="ad_sad" placeholder="Ad Soyad">
								<input type="text" name="e_mail" placeholder="E-Mail">
								<input type="submit" id="e_bulten_form_submit_button" name="submit" value="GÖNDER">
							</form>
						</div>
					</div>
				</div>
			
		</div>
	</section>
	<?php include('assets/includes/footer.php'); ?>
</body>
</html>