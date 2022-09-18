<?
include "connection.php";

if ($_POST) {
    if ($_POST['ajax'] == "kurumsal_hakkimizda") {
        ?>
        <div class="title">Hakkımızda</div>
        <div class="text">
            Gelişmiş genç ekibimiz ve üstün hizmet inancımızla sizlerin karşısındayız. Günümüz teknolojisini en uygun
            biçimde kullanıp, alışılmışın dışında projeler geliştirmekteyiz.
            Şirketinizin geleceği ve planlarınızın en iyi şekilde yansıtılmasını sağlıyoruz.
            <br><br>
            Güveniniz bizim varlığımızın temeli ve bu hususta en titiz şekilde çalışıp, sizlerin memnuniyetini
            sağlıyoruz.

            <h3>Bizimle Güvendesiniz..</h3>
        </div>
        </div>
        <?
    }
    if ($_POST['ajax'] == "kurumsal_vizyon") {
        ?>
        <div class="title">Vizyon</div>
        <div class="text">
            Firmaların ve kuruluşların internetten en yüksek verimi almaları konusunda bir bilinç yaratmak ve çağımız
            için vazgeçilmez öneme sahip internet sitesi ve reklamcılığının bilincini yaymak.
        </div>
        <?
    }
    if ($_POST['ajax'] == "kurumsal_misyon") {
        ?>
        <div class="title">Misyon</div>
        <div class="text">
            Teknolojiyi, müşterilerimizin internet ihtiyaçlarını önceden görmeye çalışarak takip etmek ve sürekli
            gelişerek başarıya ulaşmaktır.
        </div>
        <?
    }
    if ($_POST['ajax'] == "kurumsal_kalite_politikasi") {
        ?>
        <div class="title">Değerlerimiz</div>
        <div class="text">
            - %100 müşteri memnuniyeti odaklı yaklaşım. <br>
            - Web tasarımda sürecin hızlandırılması konusunda müşteri bilinçlendirmesini ön planda tutarak sürecin daha
            da hızlı işlemesi. <br>
            - Profesyonel yaklaşım. <br>
            - Yaratıcılığı ve sadeliği birleştiren tasarımlar oluşturarak her zevke hitap edebilme yeteneği. <br>
            - Sorumluluk bilinciyle yola çıkarak yapılan işin arkasında durma.
        </div>
        <?
    }
    if ($_POST['ajax'] == "web_tasarim") {
        ?>
        <div class="title">Web Tasarım</div>
        <div class="text">
            Son yıllarda artık web tasarımın önemini konuşmaya gerek bile kalmayacak bir noktaya gelmiş bulunmaktayız.
            Öyle ki bir şirketin sadece bir web sitesi olmasından ziyade artık iyi bir web sitesi olması gerektiği
            piyasada tutunabilmesi için gerekli hale gelmiştir. İlk defa çalışacağımız bir firma ile karşılaştığımızda
            firmanın çalışılabilirliği konusunda ilk etapta en büyük etkiyi yaratan şey kuşkusuz o firmanın web
            sitesidir. Öncelikle web sayfası yaptıracağınız firmanın sitesi size referans olmalıdır.
            <br><br>
            Bunun bilincinde olarak yola çıkan firmalar reklam yatırımlarını doğru bir şekilde kullanarak internet
            reklamcılığının tabiri caiz ise "ekmeğini bol miktarda yemiştir". Bu öngörülerinin ve başarılarının sonucu
            olarak ise başka yollarda bu kadar hızlı bir şekilde büyütemeyecekleri işlerini bir üst kademeye geçirmiş ve
            holdingleşme boyutuna ulaşmışlardır.
            <br><br>
            "Reklamın iyisi kötüsü olmaz." terimi yıllardır bilinen oldukça yaygın bir yalnış bilgidir. Çünkü; reklamın
            iyisi kötüsü olur. İyi reklamın sonuçları iyi, kötü reklamın ise sonuçları geri dönülemez biçimde kötü hatta
            felaket olabilir. Aynı şekilde profesyonel ve deneyimli ellerden çıkmış iyi bir web tasarımın sonucu sizin
            ve işinizi geliştirmeniz için çok iyi olacağı gibi, profesyonellikten uzak bir yaklaşımla yapılan ve
            uygulanan tasarım sizi felakete götürmekten başka bir işe yaramayacaktır. Sizin doğru müşteri kitlesine
            ulaştırmayacağı gibi firmayı da zarara sokabilir.
            <br><br>
            İyi bir web tasarımda olması gereken en önemli özellik özgün ve sizin için tasarlanmış olmasıdır. Bu sebeple
            Diamond Yazılım Web Tasarım olarak, hazır tasarımlardan uzak durarak özgün tasarımlar ve sadece sizin için
            hazırladığımız görselleri kullanırız. Her bir tasarımımıza tamamen farklı açıdan bakıp başkalarının
            göremeyeceği detayları görür müşterilerimiz için en doğru olanı bulmak adına farklılıkları denemekten
            kaçınmayız. Bu da size özgü bir yenilikçi tasarım demektir.
        </div>
        <?
    }
    if ($_POST['ajax'] == "web_yazilim") {
        ?>
        <div class="title">Web Yazılım</div>
        <div class="text">

            Web Tasarım işin basit kısmı, Web Yazılım ise zor kısmı olarak görülmektedir. Bir nevi doğru sayabiliriz.
            Web Yazılım işin arka kısmı ve kod kısmının çalıştığı alandır. Web programlama uygulaması bir iletişim
            formunun basitliği veya bir e-ticaret sitesinin karışıklığı olabilir. Programlamaların hemen hemen hepsi
            hedefe en kısa zamanda kolay bir şekilde ulaşmayı sağlamaktadır.
            <br><br>
            En çok kullanılan program yapısı, site içeriğine bir yönetim paneli sağlanmasıdır. Sitelerin yönetici
            panelli olması, ekleme, çıkarma veya bir içerik güncelleme gibi olanaklar sağlamaktadır.
            <br><br>
            Google arama motorlarından en üstlere taşıyacak, taleplerinize uygun olarak web yazılım yazmaktayız.
        </div>
        <?
    }
    if ($_POST['ajax'] == "mobil_uygulama") {
        ?>
        <div class="title">Mobil Uygulama</div>
        <div class="text">
            <h3>IOS</h3>
            Mobil dünyasının tartışılmaz devi Apple tarafından yaratıldı. IOS uygulamasının SWİFT ile teknolojinin izin
            verdiği en üst seviyede yapılabilecek tüm modüller için Diamond Yazılım sizi bekliyor.
            <br><br>
            Mobil uygulamanızın planlamasının ardından yapılan özel tasarımlar, mobil uygulamanıza en üst kalitede
            prestij sağlayacaktır.
            <br><br>
            Planlama dahilinde tasarlanan uygulamanız, yazılımlar ile tamamlanarak kusursuz hale gelecek.
            <h3>Android</h3>
            Her android kullanıcısı Google Play Store’u mutlaka ziyaret etmiştir, Google tarafından geliştirilen mobil
            uygulama platformu sayesinde android cihazlarda yer almak mümkün. Kullanıcılar hayatına kolaylık katan her
            uygulamayı buradan temin ediyor.
            <br><br>
            Bu durumda hizmetlerinizi sunabileceğiniz uygulamayı müşterileriniz ile bir araya getirmek istemez misiniz?
            Mobil uygulama dünyasında bulunmanız sizin için harika bir avantaj olacak...
            <br><br>
            Diamond Yazılım farkı ile tüm mobil platformlarda eksiksiz bulunabilirsiniz.
        </div>
        <?
    }
    if ($_POST['ajax'] == "seo") {
        ?>
        <div class="title">SEO</div>
        <div class="text">
            Web sitenizin arama motorlarında üst sıralarda çıkması için sitenin tanıtımı açısından seoya özen göstermek
            gereklidir. Eğer rakiplerinizle bir rekabete girmek, en üst sıralara yükselmek gibi bir hedefiniz varsa
            sitenizin mutlaka seo danışmanı olması gerekmektedir. Seonun en başında sitenin link yapıları, yapılan
            tanıtım backlinkleri, özgün yazdığınız içerik ve karakter sınırlamalarını, google gözünde sitenizin
            optimizasyonu gibi kriterler büyük bir önem ile sağlanmalıdır.
            <br><br>
            Tasarım planlarında, taslaklarda çalışmalı ya da site tasarlanırken yapılan değişiklikleri her bir adımda
            test ederek, tasarımın arama motorları için herhangi bir engel içermediğine emin olmamız gerekmektedir.
            İçerik veya görseller siteyi ön plana çıkaracak, google sıralamalarında en üstlere yükseltecek şekilde
            olmalıdır.
            <br><br>
            Son zamanlarda kaçınılmaz hale gelen mobil uyumlu olması da arama sonuçlarında üst sıralarda çıkmanız için
            artık olmazsa olmazlardan biridir. Arama motoru optimizasyonu; firmanıza değer katacak, işlerinizdeki atışı
            gerçekleştirecek, müşterilerinizle anlaşılabilir bir iletişim kurmanızı sağlayacaktır.
        </div>
        <?
    }
    if ($_POST['ajax'] == "kurumsal_kimlik") {
        ?>
        <div class="title">Sosyal Medya Yöneticiliği</div>
        <div class="text">
            Günümüzde firmaların sadece kurumsal yapılarına ve dijital kimliklerine uygun web tasarımları yaptırmaları
            açıkçası yetmiyor. Aynı zamanda sosyal medya mecralarında da aktif yer almaları, sık sık etkin ve dikkat
            çekici kampanyalarla desteklemeleri gerekmektedir. Online dünya bir bütün olarak göz önüne alındığında,
            artık web sitesi ve sosyal medya argümanları ayrı düşünülemiyor. İşte Diamond Yazılım tam bu noktada
            yardımınıza yetişiyor. Dijital Pazarlama’daki total başarınızı hedef alan firmamız, bu amaca yönelik çok
            önemli noktalardan biri olan Sosyal Medyadaki yol haritanızı sizinle birlikte tekrardan çiziyor.
            <br><br>
            Web sitenizi tasarlatıp, geliştirtip yönetmeye başladıktan sonra paralel bir yaklaşım ile sosyal medya
            danışmanlığı almanız da kesinlikle bir lüks değil, aksine ihtiyaçtır. Diamond Yazılım, firmalara sosyal
            medya konusunda danışmanlık hizmetleri sağlayarak, firma sektörüne uygun plan,program ve hedefe yönelik
            kampanyalar aracılığı ile sosyal medyada sizin adınızı en başarılılar listesine yazdıracaktır.
            <br><br>
            Sosyal Medya nedir? Cevabı öncelikle ülkemizde iki büyük Sosyal ağını aklımınıza getirmektedir; Facebook ve
            Twitter . Kullanıcı sayısı olarak bu ikili diğerlerine kıyasla oldukça ileri durumdadır. Bu noktadan yolara
            çıkarak Google’ın çıkarmış olduğu Google Plus sosyal ağı ise kısa zamanda bilinen ağlar kadar iyi bir
            seviyeye gelecektir. Kurumsal sayfalar hedeflemesinin faaliyete geçmesi ile danışmanlık hizmetimize bu ağda
            katılacaktır.
            <br><br>
            Günümüzde bir firmanın Sosyal Medya’da etkin olmaması, dijital platformda performansını düşürmektedir. Sizin
            firmanızın hedef kitlesine ulaşmasını ve bu hedef kitle içinde paylaşımlarla büyümesi için tüm Sosyal Medya
            Reklamcılık ve uygulama faaliyetlerinizi yönetiyoruz.
            <br><br>
            Diamond Yazılım olarak sizelere sosyal medya danışmanlığının kapsamının ne olduğu, danışmanı veya uzmanının
            neler yapması gerektiği sorularının cevabını vermiş olduk. Bu danışmanlık hizmeti için bizimle hemen
            irtibata geçin.
            <br><br>
            Yakın gelecekte tüm firmalar bu danışmanlık hizmetine ve bahsettiğimiz danışmanlara ihtiyaç duyar hale
            gelecekler. Siz neden rakiplerinizden şimdiden bir adım öne çıkmayı istemeyesiniz? Dijital Pazarlama
            içindeki büyük rekabet koşullarında, her zaman bir adım önde olmak size başarının anahtarını ve ipuçlarını
            sunacaktır.
        </div>
        <?
    }
    if ($_POST['ajax'] == "logo_tasarimi") {
        ?>
        <div class="title">Logo Tasarımı</div>
        <div class="text">
            Binlerce logo şablonu seçeneği olan logo arşivi, dilediğiniz şekilde yazı tipini, rengini, sembolleri ve
            daha fazlasını kişiselleştireceğiniz bir düzen, endüstri ve alfabelere göre uygun şekilde kategorilenmiş
            tasarımlar, ve tabi ki bunların hepsi Diamond Yazılım'da.
        </div>
        <?
    }
    if ($_POST['ajax'] == "e_ticaret") {
        ?>
        <div class="title">E-Ticaret</div>
        <div class="text">
            Mükemmel bir e-ticaret tasarımı ile başlanmalı. Çok basit, çok işlevli ve kullanıcı dostu. E-ticaret siteniz
            kullanıcıya önce güven vermeli. Güvenmediğiniz e-ticaret sitesinden ürün alır mısınız? Siz değil, kimse
            almaz. Diamond Yazılım çizgisi ile bir e-ticaret tasarımı hayal edin. Ürün görsellerinizde çizgimiz kadar
            mükemmelse; tasarım ile bir sorunumuz kalmaz.

            Bir tasarımı güzelleştiren renkler, grafikler ve görsellerdir. Yapılan çalışmanın kusursuz görünümünü
            tamamlayabilmek için görseller ile oluşturulmuş tasarım bütünlüğünü bozmamak gerekir. Bundan dolayıdır ki
            e-ticaret sitenizde kullanacağınız ürün görselleri e-ticaret tasarımınız için hayati önem taşır.
        </div>
        <?
    }
    if ($_POST['ajax'] == "urun_tanitimi") {
        ?>
        <div class="title">Ürün Tanıtımı</div>
        <div class="text">
            Yaşadığımız dijital dünyada insanlarla markanızı buluşturmak, kurumunuzu göstermek amacıyla dijital
            pazarlama yoluna başvurmalısınız. Dijital alanda gerçek dünyaya kıyasla yapacaklarınızın bir sınırı yoktur.
            Bir web sitesiyle dijital dünyaya ilk adımınızı atabilirsiniz. İnternette kendinizi gösterme fırsatı
            yakalayabilirsiniz. İkinci adım olarak da google arama motorlarında en üst sıralarda bulunabilir, birçok
            kullanıcıya hitap edebilirsiniz.


            Kullanıcılarınıza erişebilmenizin bir diğer adımı da sosyal ağlardır. Günümüzde facebook, twitter, instagram
            yoğun bir şekilde kullanılmaktadır. Sosyal ağlar üzerinden de erişim sağlayabilirsiniz. Ayrıca internet
            üzerinden yaptığınız reklamlar da size birçok müşteri kazandıracaktır. İçeriklerinizin açıklayıcı olması
            kullanıcıyla aranızda bir bağ oluşmasını da sağlayacaktır.
        </div>
        <?
    }
    if ($_POST['ajax'] == "iletisim_form") {
        $firma = $_POST['firma'];
        $name_surname = $_POST['name_surname'];
        $phone = $_POST['phone'];
        $e_mail = $_POST['e_mail'];
        $message = $_POST['message'];
        if (!EMPTY($firma) && !EMPTY($name_surname) && !EMPTY($phone) && !EMPTY($e_mail) && !EMPTY($message)) {
            if (mail_control($e_mail)) {
                include '../php_mailer/class.phpmailer.php';

                $mail = new PHPMailer();
                $mail->IsSMTP();
                $mail->SMTPAuth = true;
                $mail->Host = 'ssl://mail.cihantaylan.com';
                $mail->Port = 587;
                $mail->SMTPSecure = 'tls';
                $mail->Username = 'cihantaylan@cihantaylan.com';
                $mail->Password = '19992005Ct';
                $mail->SetFrom($mail->Username, 'Cihan Taylan');
                $mail->AddAddress('cihantaylan@cihantaylan.com', 'Cihan Taylan');
                $mail->CharSet = 'UTF-8';
                $mail->Subject = 'E-POSTA KONUSU';
                $content = '<div style="background: #eee; padding: 10px; font-size: 14px">Bu bir test e-posta\'dır..</div>';
                $mail->MsgHTML($content);
                if($mail->Send()) {
                    echo " e-posta başarılı ile gönderildi";
                } else {
                    echo " bir sorun var, sorunu ekrana bastıralım";
                    echo $mail->ErrorInfo;
                }
            } else {
                echo "E_Mail Adresinizi Doğru Giriniz";
            }
        } else {
            echo "Alanlar Boş Bırakılamaz";
        }
    }
    if ($_POST['ajax'] == "e_bulten_form") {
        $ad_sad = mysqli_real_escape_string($conn, $_POST['ad_sad']);
        $e_mail = mysqli_real_escape_string($conn, $_POST['e_mail']);
        $date_now = date('Y-m-d');
        if (!EMPTY($ad_sad) && !EMPTY($e_mail)) {
            if (mail_control($e_mail)) {
                $e_bulten_insert_query = mysqli_query($conn, "INSERT INTO e_bulten_mailler(ad_soyad, e_mail, kayit_tarihi) VALUES('$ad_sad', '$e_mail', '$date_now')");
                if ($e_bulten_insert_query) {
                    echo "Başarılı";
                } else {
                    echo "Başarısız";
                }
            } else {
                echo "E_Mail Adresinizi Doğru Giriniz";
            }
        } else {
            echo "Alanlar Boş Bırakılamaz";
        }
    }
}
?>