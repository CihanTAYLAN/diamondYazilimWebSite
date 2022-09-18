<!DOCTYPE html>
<html>
<head>
	<?php include('assets/includes/meta.php'); ?>
	<style type="text/css">
		@media (min-width: 0px) and (max-width: 320px)
		{
			.iphone5{
				bottom: 0px !important;
				transition: 1s !important;
			}
			.iphone5_1{
				right: 0px !important;
				transition: 1s !important;
			}
		}
		@media (min-width: 0px) and (max-width: 375px)
		{
			.iphone6{
				bottom: 0px !important;
				transition: 1s !important;
			}
			.iphone6_1{
				right: 0px !important;
				transition: 1s !important;
			}
		}
		@media (min-width: 0px) and (max-width: 414px)
		{
			.iphone7plus{
				bottom: 0px !important;
				transition: 1s !important;
			}
			.iphone7plus_1{
				right: 0px !important;
				transition: 1s !important;
			}
		}
	</style>
</head>
<body>
	<?php include('assets/includes/header.php'); ?>

	<section id="pagetitle">
		<div class="title">Kurumsal</div>
		<div class="pagetitle_bottom"></div>
	</section>
	
	<?php include('assets/includes/menu.php'); ?>
	<section id="content">
		<div class="wrapper">
			<div class="left">
				<a onClick="hakkimizda();">Hakkımızda</a>
				<a onClick="vizyon();">Vizyon</a>
				<a onClick="misyon();">Misyon</a>
				<a onClick="kalite_politikasi();">Kalite Politikası</a>
			</div>
			<div class="selectbox">
				<select id="responsive_kurumsal" onChange="kurumsal_responsive();">
					<option value="hakkimizda">Hakkımızda</option>
					<option value="vizyon">Vizyon</option>
					<option value="misyon">Misyon</option>
					<option value="kalite_politikasi">Kalite Politikası</option>
				</select>
			</div>
			<div class="right" id="kurumsal_content">
				<div class="title">Hakkımızda</div>
				<div class="text">
					Gelişmiş genç ekibimiz ve üstün hizmet inancımızla sizlerin karşısındayız. Günümüz teknolojisini en uygun biçimde kullanıp, alışılmışın dışında projeler geliştirmekteyiz.
					Şirketinizin geleceği ve planlarınızın en iyi şekilde yansıtılmasını sağlıyoruz.
					<br><br>
					Güveniniz bizim varlığımızın temeli ve bu hususta en titiz şekilde çalışıp, sizlerin memnuniyetini sağlıyoruz.

					<h3>Bizimle Güvendesiniz..</h3>
				</div>
				</div>
		</div>
	</section>
	<!--
	<section id="ekip">
		<div class="wrapper">
			<div class="title">
				<div class="text">Ekibimiz</div>
			</div>
			<div class="boxes">
			
				<div class="box" style="background: url(assets/img/photo_emre.jpg) no-repeat center;">
					<div class="yan" id="bir_1">
						<div class="text">
							Pazarlama Ve Planlama Uzmanı
						</div>
					</div>
					<div class="bottom" id="bir">
						<div class="ad">
							Emre ÖMERBAŞ
						</div>
					</div>
				</div>
				
				
				
				
				
				<div class="box" style="background: url(assets/img/photo_cihan.jpg) no-repeat center;">
					<div class="yan" id="bir_1">
						<div class="text">
							Full-stack Web Developer
						</div>
					</div>
					<div class="bottom" id="bir">
						<div class="ad">
							Cihan TAYLAN
						</div>
					</div>
				</div>
				
				
				
				
			
				<div class="box" style="background: url(assets/img/photo_furkan.jpg) no-repeat center;">
					<div class="yan" id="bir_1">
						<div class="text">
							Junior Web Developer
						</div>
					</div>
					<div class="bottom" id="bir">
						<div class="ad">
							Furkan DURA
						</div>
					</div>
				</div>
				
			
				
				
				
				
				<div class="box" style="background: url(assets/img/photo_hakan.jpg) no-repeat center;">
					<div class="yan" id="bir_1">
						<div class="text">
							Grafiker Tasarım Uzmanı
						</div>
					</div>
					<div class="bottom" id="bir">
						<div class="ad">
							Hakan YILMAZ
						</div>
					</div>
				</div>
		
			</div>
			-->
						<!--<div class="box">
					<div class="yan">
						<div class="text">
							Ağ ve Sistem
						</div>
					</div>
					<div class="bottom">
						<div class="ad">
							Eren Dağlı
						</div>
					</div>
				</div>
		</div>
	</section>
-->
	<?php include('assets/includes/footer.php'); ?>

</body>
</html>