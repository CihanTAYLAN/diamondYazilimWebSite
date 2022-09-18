<header>

  <a class="logo" href="index">
    <img src="assets/img/logo.svg">
  </a>
  <section id="mobile">
    <a class="logo_1" href="index">
      <img src="assets/img/logo.svg">
    </a>

    <div class="menu" onclick="mAct()">

    </div>

  </section>
  <div class="wrapper">

    <div class="ag"></div>

  </div>
</header>
<div id="mM" class="">
  <a href="/index">Anasayfa</a>
  <a href="/kurumsal">Kurumsal</a>
  <a href="/hizmetlerimiz">Hizmetlerimiz</a>
  <a href="/referanslar">Referanslar</a>
  <a href="/iletisim">İletişim</a>
</div>
<script type="text/javascript">
  function mAct() {
    var menu = document.getElementById('mM');

    if (menu.className == 'active') {
      menu.className = '';
    } else {
      menu.className = 'active';
    }
  }
</script>