<footer>

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
        <div class="acik_adres">Fatih / İstanbul</div>
        <span style='margin-top:20px;font-size: 11px; display: inline-block; text-align: center; width: 120px;'><a title='Diamond Yazılım Armut' target="_blank" href='https://armut.com/hizmetveren/diamond-yazilim-istanbul-bahcelievler-web-site-yaptirma_351056' style='background: none; padding:0; border:0;'><img src='https://armut.com/images/promo_5.png' style='display: block; margin-bottom: 6px; padding:0; border: 0;' /></a>

      </div>

    </div>
  </div>

  <div class="alt_footer">

    <div class="wrapper">

      <div class="designed">Copyright © 2018 Diamond Yazılım BDH</div>

      <a href="/" target="_blank" title="Web Tasarımı" class="diamondyazilim-logo"></a>

    </div>

  </div>

</footer>
<script>
  function hakkimizda() {
    $.ajax({
      type: "POST",
      url: "<?= $ajax; ?>",
      //data :verileri göndermek için
      data: "ajax=kurumsal_hakkimizda",
      //success :İstenilen veri geldi ise
      success: function(gelen) {
        document.getElementById('kurumsal_content').innerHTML = gelen;
      }
    });
  }

  function vizyon() {
    $.ajax({
      type: "POST",
      url: "<?= $ajax; ?>",
      //data :verileri göndermek için
      data: "ajax=kurumsal_vizyon",
      //success :İstenilen veri geldi ise
      success: function(gelen) {
        document.getElementById('kurumsal_content').innerHTML = gelen;
      }
    });
  }

  function misyon() {
    $.ajax({
      type: "POST",
      url: "<?= $ajax; ?>",
      //data :verileri göndermek için
      data: "ajax=kurumsal_misyon",
      //success :İstenilen veri geldi ise
      success: function(gelen) {
        document.getElementById('kurumsal_content').innerHTML = gelen;
      }
    });
  }

  function kalite_politikasi() {
    $.ajax({
      type: "POST",
      url: "<?= $ajax; ?>",
      //data :verileri göndermek için
      data: "ajax=kurumsal_kalite_politikasi",
      //success :İstenilen veri geldi ise
      success: function(gelen) {
        document.getElementById('kurumsal_content').innerHTML = gelen;
      }
    });
  }
  ///////////////////////////////////////////////////////////////////////////////
  function web_tasarim() {
    $.ajax({
      type: "POST",
      url: "<?= $ajax; ?>",
      //data :verileri göndermek için
      data: "ajax=web_tasarim",
      //success :İstenilen veri geldi ise
      success: function(gelen) {
        document.getElementById('hizmetlerimiz_content').innerHTML = gelen;
      }
    });
  }

  function web_yazilim() {
    $.ajax({
      type: "POST",
      url: "<?= $ajax; ?>",
      //data :verileri göndermek için
      data: "ajax=web_yazilim",
      //success :İstenilen veri geldi ise
      success: function(gelen) {
        document.getElementById('hizmetlerimiz_content').innerHTML = gelen;
      }
    });
  }

  function mobil_uygulama() {
    $.ajax({
      type: "POST",
      url: "<?= $ajax; ?>",
      //data :verileri göndermek için
      data: "ajax=mobil_uygulama",
      //success :İstenilen veri geldi ise
      success: function(gelen) {
        document.getElementById('hizmetlerimiz_content').innerHTML = gelen;
      }
    });
  }

  function seo() {
    $.ajax({
      type: "POST",
      url: "<?= $ajax; ?>",
      //data :verileri göndermek için
      data: "ajax=seo",
      //success :İstenilen veri geldi ise
      success: function(gelen) {
        document.getElementById('hizmetlerimiz_content').innerHTML = gelen;
      }
    });
  }

  function kurumsal_kimlik() {
    $.ajax({
      type: "POST",
      url: "<?= $ajax; ?>",
      //data :verileri göndermek için
      data: "ajax=kurumsal_kimlik",
      //success :İstenilen veri geldi ise
      success: function(gelen) {
        document.getElementById('hizmetlerimiz_content').innerHTML = gelen;
      }
    });
  }

  function logo_tasarimi() {
    $.ajax({
      type: "POST",
      url: "<?= $ajax; ?>",
      //data :verileri göndermek için
      data: "ajax=logo_tasarimi",
      //success :İstenilen veri geldi ise
      success: function(gelen) {
        document.getElementById('hizmetlerimiz_content').innerHTML = gelen;
      }
    });
  }

  function e_ticaret() {
    $.ajax({
      type: "POST",
      url: "<?= $ajax; ?>",
      //data :verileri göndermek için
      data: "ajax=e_ticaret",
      //success :İstenilen veri geldi ise
      success: function(gelen) {
        document.getElementById('hizmetlerimiz_content').innerHTML = gelen;
      }
    });
  }

  function urun_tanitimi() {
    $.ajax({
      type: "POST",
      url: "<?= $ajax; ?>",
      //data :verileri göndermek için
      data: "ajax=urun_tanitimi",
      //success :İstenilen veri geldi ise
      success: function(gelen) {
        document.getElementById('hizmetlerimiz_content').innerHTML = gelen;
      }
    });
  }
  ////////////////////////////////////////////////////////////////
  function kurumsal_responsive() {
    deger = $('#responsive_kurumsal').val();
    if (deger == "hakkimizda") {
      hakkimizda();
    }
    if (deger == "vizyon") {
      vizyon();
    }
    if (deger == "misyon") {
      misyon();
    }
    if (deger == "kalite_politikasi") {
      kalite_politikasi();
    }
  }

  function hizmetlerimiz_responsive() {
    deger = $('#responsive_hizmetlerimiz').val();
    if (deger == "web_tasarim") {
      web_tasarim();
    }
    if (deger == "web_yazilim") {
      web_yazilim();
    }
    if (deger == "mobil_uygulama") {
      mobil_uygulama();
    }
    if (deger == "seo") {
      seo();
    }
    if (deger == "kurumsal_kimlik") {
      kurumsal_kimlik();
    }
    if (deger == "logo_tasarimi") {
      logo_tasarimi();
    }
    if (deger == "e_ticaret") {
      e_ticaret();
    }
    if (deger == "urun_tanitimi") {
      urun_tanitimi();
    }
  }
</script>
<?
if ($_GET['service'] == "web_tasarim") { ?>
  <script type="text/javascript">
    web_tasarim();
  </script>
<? }
if ($_GET['service'] == "web_yazilim") { ?>
  <script type="text/javascript">
    web_yazilim();
  </script>
<? }
if ($_GET['service'] == "mobil_uygulama") { ?>
  <script type="text/javascript">
    mobil_uygulama();
  </script>
<? }
if ($_GET['service'] == "seo") { ?>
  <script type="text/javascript">
    seo();
  </script>
<? }
if ($_GET['service'] == "kurumsal_kimlik") { ?>
  <script type="text/javascript">
    kurumsal_kimlik();
  </script>
<? }
if ($_GET['service'] == "logo_tasarimi") { ?>
  <script type="text/javascript">
    logo_tasarimi();
  </script>
<? }
if ($_GET['service'] == "e_ticaret") { ?>
  <script type="text/javascript">
    e_ticaret();
  </script>
<? }
if ($_GET['service'] == "urun_tanitimi") { ?>
  <script type="text/javascript">
    urun_tanitimi();
  </script>
<? }
?>
<script>
  function e_bulten_form_submit() {
    //Formun Manuel Olarak Gönderilmesini Engeller
    event.preventDefault();

    // Get form
    var form = $('#e_bulten_form')[0];

    // Create an FormData object
    var data = new FormData(form);

    // If you want to add an extra field for the FormData
    data.append("ajax", "e_bulten_form");

    // disabled the submit button
    $("#e_bulten_form_submit_button").prop("disabled", true);

    $.ajax({
      type: "POST",
      enctype: 'multipart/form-data',
      url: "<?= $ajax; ?>",
      data: data,
      processData: false,
      contentType: false,
      cache: false,
      timeout: 600000,
      success: function(data) {
        console.log("SUCCESS : ", data);
        alert(data);
        $("#e_bulten_form_submit_button").prop("disabled", false);
      },
      error: function(e) {
        console.log("ERROR : ", e);
      },
    });
  }
</script>