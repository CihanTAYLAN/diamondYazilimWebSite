<!DOCTYPE html>
<html>
<head>
	<?php include('assets/includes/meta.php'); ?>
</head>
<body>
	<?php include('assets/includes/header.php'); ?>

	<section id="pagetitle">
		<div class="title">Hizmetlerimiz</div>
		<div class="pagetitle_bottom"></div>
	</section>
	<?php include('assets/includes/menu.php'); ?>
	<section id="content">
		<div class="wrapper">
			<div class="left">
				<a onClick="web_tasarim();">Web Tasarım</a>
				<a onClick="web_yazilim();">Web Yazılım</a>
				<a onClick="mobil_uygulama();">Mobil Uygulama</a>
				<a onClick="seo();">SEO</a>
				<a onClick="kurumsal_kimlik();">Kurumsal Kimlik</a>
				<a onClick="logo_tasarimi();">Logo Tasarımı</a>
				<a onClick="e_ticaret();">E-Ticaret</a>
				<a onClick="urun_tanitimi();">Ürün Tanıtımı</a>
				<!--<a href="#">Fırsatlarımız</a>-->
			</div>
			<div class="selectbox">
				<select id="responsive_hizmetlerimiz" onChange="hizmetlerimiz_responsive();">
					<option value="web_tasarim">Web Tasarım</option>
					<option value="web_yazilim">Web Yazılım</option>
					<option value="mobil_uygulama">Mobil Uygulama</option>
					<option value="seo">SEO</option>
					<option value="kurumsal_kimlik">Kurumsal Kimlik</option>
					<option value="logo_tasarimi">Logo Tasarımı</option>
					<option value="e_ticaret">E-Ticaret</option>
					<option value="urun_tanitimi">Ürün Tanıtımı</option>
				</select>
			</div>
			<div class="right" id="hizmetlerimiz_content">
				<div class="title">Web Tasarım</div>
				<div class="text">
					Son yıllarda artık web tasarımın önemini konuşmaya gerek bile kalmayacak bir noktaya gelmiş bulunmaktayız. Öyle ki bir şirketin sadece bir web sitesi olmasından ziyade artık iyi bir web sitesi olması gerektiği piyasada tutunabilmesi için gerekli hale gelmiştir. İlk defa çalışacağımız bir firma ile karşılaştığımızda firmanın çalışılabilirliği konusunda ilk etapta en büyük etkiyi yaratan şey kuşkusuz o firmanın web sitesidir. Öncelikle web sayfası yaptıracağınız firmanın sitesi size referans olmalıdır.
					<br><br>
					Bunun bilincinde olarak yola çıkan firmalar reklam yatırımlarını doğru bir şekilde kullanarak internet reklamcılığının tabiri caiz ise "ekmeğini bol miktarda yemiştir". Bu öngörülerinin ve başarılarının sonucu olarak ise başka yollarda bu kadar hızlı bir şekilde büyütemeyecekleri işlerini bir üst kademeye geçirmiş ve holdingleşme boyutuna ulaşmışlardır.
					<br><br>
					"Reklamın iyisi kötüsü olmaz." terimi yıllardır bilinen oldukça yaygın bir yalnış bilgidir. Çünkü; reklamın iyisi kötüsü olur. İyi reklamın sonuçları iyi, kötü reklamın ise sonuçları geri dönülemez biçimde kötü hatta felaket olabilir. Aynı şekilde profesyonel ve deneyimli ellerden çıkmış iyi bir web tasarımın sonucu sizin ve işinizi geliştirmeniz için çok iyi olacağı gibi, profesyonellikten uzak bir yaklaşımla yapılan ve uygulanan tasarım sizi felakete götürmekten başka bir işe yaramayacaktır. Sizin doğru müşteri kitlesine ulaştırmayacağı gibi firmayı da zarara sokabilir. 
					<br><br>
					İyi bir web tasarımda olması gereken en önemli özellik özgün ve sizin için tasarlanmış olmasıdır. Bu sebeple Diamond Yazılım Web Tasarım olarak, hazır tasarımlardan uzak durarak özgün tasarımlar ve sadece sizin için hazırladığımız görselleri kullanırız. Her bir tasarımımıza tamamen farklı açıdan bakıp başkalarının göremeyeceği detayları görür müşterilerimiz için en doğru olanı bulmak adına farklılıkları denemekten kaçınmayız. Bu da size özgü bir yenilikçi tasarım demektir.
				</div>
			</div>
		</div>
	</section>

	<?php include('assets/includes/footer.php'); ?>
</body>
</html>