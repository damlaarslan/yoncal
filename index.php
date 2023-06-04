 <?php

 include("baglanti.php");

 if ($_POST['isim']) {
	 $adsoyad = $_POST["isim"];
	 $telefon = $_POST["tel"];
	 $email = $_POST["mail"];
	 $konu = $_POST["konu"];
	 $mesaj = $_POST["mesaj"];

	 $insertSrg = "INSERT INTO iletisim (adsoyad, telefon, email, konu, mesaj) VALUES
    ('$adsoyad', '$telefon', '$email', '$konu', '$mesaj')";

	 $SorguCalistir = $db->query($insertSrg);
	 if ($SorguCalistir) {
		 echo '<script>alert("Mesajınız başarıyla kayıt edildi")</script>';
	 } else {
		 echo '<script>alert("Bir hata oluştu mesajınız kayıt edilemiyor")</script>';
	 }
 }
 ?>	
   
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Anasayfa | Astroloji</title>
    <script src="https://kit.fontawesome.com/ec086da106.js" crossorigin="anonymous"></script>
    
	<link rel="stylesheet" href="css/style.css?t=<?php echo time(); ?>">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="owl/owl.carousel.min.css">
<link rel="stylesheet" href="owl/owl.theme.default.min.css">
    
    
    </head>
    <body>
        <section id="menu">
            <div id="logo">Astroloji </div>
            <nav>
                <a href=""><i class="fa-solid fa-house ikon"></i>Anasayfa</a>
                <a href=""><i class="fa-solid fa-info ikon"></i>Hakkımızda</a>
                <a href=""><i class="fa-solid fa-user-graduate ikon"></i>Eğitimler</a>
                <a href=""><i class="fa-solid fa-bow-arrow ikon"></i>Burçlar</a>
                <a href=""><i class="fa-solid fa-address-book ikon"></i>İletişim</a>
            </nav>
        </section>
        
        <section id="anasayfa">
        <div id="black">
            </div>
            
            <div id="icerik">
            <h2>Astroloji</h2>
                <hr width=300 align=left>
                <p> Astroloji, gök cisimlerinin ve astronomik fenomenlerin, insan karakteri ve kaderi üzerine etkilerinin olduğu önermesini konu alan, bilimsel gerçekliğe sahip olmayan sözdebilimdir. Yunanca yıldız anlamına gelen 'astro' ve bilgi anlamına gelen 'logos' kelimelerinden türemiştir.</p>
            </div>
        </section>
        
        <section id="hakkimizda">
        
            <h3>Hakkımızda</h3>
            
            <div class="container">
                <div id="sol">
                    <h5 id="h5sol">Astrolojiye dair merak ettiklerinizi bulabileceğiniz astro sayfama hoş geldiniz.
                    </h5>
                </div>
                
                <div id="sag">
                <span>B</span>
                    <p id="psag">u astro sayfamda burçlara, onların konumlandığı evlere ve gezegenlere göre nasıl şekillendiğini güneş burcunuzdan yola çıkarak bahsedeceğim.
                    </p>
                </div>
                
                <image src="image/about.jpg" alt=""
                       class="image-fluid mt100">
                    <p id="pson">12 burcun tamamına ve onların yerleştiği gezegenlere, bu gezegenlerdeki etkilerine sayfamız içindeki burçlar kısmından ulaşabilirsiniz.</p>
                
                </image>
                
                
                
            </div>
        
        </section>
        
        
        <section id="egitimler" >
            <div class="container">
                <h3>Eğitimler</h3>
            
                
                <div class="owl-carousel owl-theme" style="display: block">
                    
                <div class="card item" data-merge=1.5>
                <image src="image/oglak.jpg" alt="" class="image-fluid"></image>
                    <h5
                        class="baslikcard">OĞLAK BURCU</h5>
                    <p class="cardp">Yönetici Gezegeni : Satürn
Elementi : Toprak
Niteliği : Öncü
Tanımlayan Kavramlar : Mevki ve statü, şeref, hırs ve amaç.
Olumlu Özellikler : Adalet, özen, ekonomik, otorite, isteklilik, sabırlılık, ihtiyatlılık, planlı programlı çalışma, güvenilir, seşaktkar, mizah kabiliyeti, disiplin
Olumsuz Özellikler : Gurur, şüphe, çözümcülük ısrarı, kötümserlik, affetmemek, şükran duymamak, aşırı ihtiras, cimrilik, değişime direnç
Rengi : Koyu kurşuni, nefti yeşil, koyu kahve
Uğurlu Taşı : Onyx, hematite, garnet
Müzik türü : Küçük orkestralar eşliğinde klasik müzik parçaları
Uyumlu Burçlar : Aşkta Boğa Başak ve Yay, Evlilikte Boğa Aslan, Arkadaşlıkta Aslan ve Koç'tur.
Yönettiği Organlar : Kemikler, dizler ve cilt
İdeal Meslekleri : Matematikçi, politikacı, bilim adamı, diş doktoru, öğretmen, makinist, çiftçi, müzisyen, mimar, minerolojist

Oğlak burcu, toprak elementine ait olan başak, boğa, oğlak burçları arasında yer alır.Oğlak burcu öncü niteliktedir. Öncü burçlar başlangıçları temsil eder. Oğlak burcu aralık-ocak ayları arasına denk geldiği için kış mevsimini temsil eder.
Oğlak, toprak grubundaki en ciddi, disiplinli, ve ileriye dönük, hedef odaklı burçtur. Kurallara sonuna kadar uyar ve çevresinden de aynı hassasiyeti bekler.
Oğlak için tanımlayıcı kavramlar, disiplin, otorite, ciddiyet, kararlılık, mesafe ve sabır olacaktır.Gelenekselliğe yatkındır ve örneğin kova burcu gibi marjinal olan, daha önce denenmemiş ya da risk barındıran durumlara çekilmek ve ilgi duymak yerine bu tarz farklılıklardan uzak durur, alışılmışın peşinden ilerler. Garanticidir, işkoliktir, hedef odaklıdır ve çok çalışkandır. Dışarıdan bakıldığında soğuk ve mesafeli bir duruş sergiler fakat sevdiklerine karşı oldukça cana yakın ve eğlencelidir.
                        
Oğlak burcunun gölge yönleri(yani zayıf, iyileştirmesi gereken yanları), karamsarlık, umutsuzluk, aşırıya kaçan kontrolcülük ve yüksek kaygı olabilir. Duygularını fazla kontrol etmekten katılaşmış, duygusuz birine dönüşmüş olabilir, bunun nedeni duygularını kısıtlayan,engelleyen kurallarıdır. Oğlak burcunun duygulara ve duygusallığa olan mesafesini gözden geçirip, kendini duyguları ve zayıflıklarıyla bir bütün olarak tanıyıp kabullenmesi gerekmektedir.
                    
                    
                    
                    </p>
                        
                    
                </div>
                
                   <div class="card item" data-merge=1.5>
                <image src="image/kova.jpg" alt="" class="image-fluid"></image>
                    <h5
                        class="baslikcard">KOVA BURCU</h5>
                    <p class="cardp">
Yönetici Gezegeni : Uranüs
Elementi : Hava
Niteliği : Sabit
Tanımlayan Kavramlar : Hümanist, bilim, yeni sistemler, işbirliği, sonsuzluk, ebedi dostluk, kardeşlik, keşif.
Olumlu Özellikleri : Yapıcılık, işbirliği, diplomatlık, öğrenmeye merak, grub çalışmalarına yatkınlık, hümanizm, dostluk, idealizm, orijinalite, vefa ve sadakat, özgürlük aşkı
Olumsuz Özellikleri : Pratik olmamak, küçümsemek, diktatörlük, inatçılık, isyankarlık, sabit fikirlilik, gelenek ve görenekleri zorlama, farklılıkta aşırıya kaçma
Rengi : Gece mavisi
Uğurlu Taşları : Opsidyen, ametist
Müzik Türü : Elektronik müzik, rock
Uyumlu Burçlar : Aşkta Başak ve Akrep, Evlilikte İkizlerve Yay, Arkadaşlıkta Terazi
Yönettiği Organlar : Kan dolaşımı sistemi ve baldırlar.
İdeal Meslekler : Bilim adamı, astrolog, astronom, havacılığa bağlı meslekler, sosyolog, yazar, arkeolog , nörolog


Kova burcu, hava elementine dahil olan ikizler, terazi, kova burçları arasında yer alır.Kova burcu sabit niteliktedir. Zodyak dizilimindeki son hava burcudur ve bu sebepten dolayı hava elementinin tüm insancıl ve topluma yönelik özelliklerini birleştirici olma anlayışı ile benimser. Kova için bireysel ego ikinci plandadır çünkü ilk sırada toplum ve çevresi vardır. Topluma, insanlığa fayda ve yarar sağlamak amacıyla hareket eder. Zodyaktaki en zeki burçlardan biridir bu da onu farkındalığı yüksek, akılcı birisi yapar.

Kova'yı tanımlayan kavramlar, özgür, sıra dışı, marjinal, devrimci, entelektüel ve hümanist olarak söylenebilir. Olaylara farklı bir çerçeveden rahatlıkla bakabilir ve yorumlayabilir. Onlar için sınır yoktur, din dil, ırk, mezhep, cinsiyet ayrımı yapmadan herkese eşitçilik anlayışıyla yaklaşır. Sıradan değillerdir, sosyal kelebeklerdir adeta bu atılgan ve dışa dönük yanları toplumsal değerlerini de besler.

Kova tam bir marjinaldir.  Sokakta gördüğünüz kızıl saçlı teyzenin veya dövmeli amcanın bir Kova olma ihtimali oldukça yüksektir. Toplumlar genelde sabit alışkanlıkları ile yaşarken Kova, gelenekselden çok farklı olan tarzıyla yadırganabilir. Durum böyle olursa toplumun tepkisi, toplumdan dışlanma korkusu verebileceğinden Kova kendi farklılıklarını geriye çekebilir ve kendi gibi olmaktan kaçınabilir. Çünkü tüm farklılığına rağmen Kova’yı bekleyen en büyük tuzak toplumdan dışlanma korkusudur.
 </p>
                        </div>
                    
                    
                    
                    
                  
                    
                <div class="card item" data-merge=1.5>
                <image src="image/balik.jpg" alt="" class="image-fluid"></image>
                    <h5
                        class="baslikcard">BALIK BURCU</h5>
                    <p class="cardp">
Yönetici Gezegeni : Jüpiter ve Neptün
Element : Su
Nitelik : Değişken
Tanımlayan Kavramlar : Somut olmayan şeylere karşı aşırı duyarlık, yaşamın tüm değerlerine karşı hassaslık, mistizim, kadercilik, kendini feda etme.
Olumlu Özellikler : Sezgi gücü, ilham, merhamet duygusu, vazgeçmeyi bilmek, alçakgönüllülük, hassasiyet, adapte olabilme kabiliyeti, alayışlılık, nezaket ve kibarlık, sempatiklik
Olumsuz Özellikler : İçe dönüklük, tatminsizlik, ketumluk, hüzün, ihmalkarlık, dikkatsizlik, kararsızlık, olay karşısında kolay dağılma, mücadele yoksunluğu, yavaşlık
Rengi : Violet
Uğurlu Taşları : Turkuaz, akuamarin
Müzik Türü : Romantik parçalar
Uyumlu Burçlar : Aşkta Boğa, Evlilikte Yay, Arkadaşlıkta Terazi ve Yay
Yönettiği Organlar : Ayaklar ve Bacaklar
İdeal meslekler : Denizci, şair, psikiyatrist, psikolog, eczacı, ilaç imalatçısı



Balık burcu, su elementine dahil olan akrep, yengeç, balık burçları arasında yer alır.Balık burcu değişken niteliktedir. Değişken burçlar mevsimleri sona erdirirken o mevsimden alacağını almış, kendini yeni mevsime hazırlamış nitelikteki burçlar olduğundan dolayı balık burcu da var olana ve o var olan biterken ondan ders çıkarır, pay biçer ve kendini yeni gelişecek olan gelişmelere hazırlar. Bu bitişe şahit olduğundan dolayı her şeyin bir sonu olduğunun bilincindedir ve değişime açıktır.
                        
Su burçları duygusallık, sezgisellik, ve hayalcilikleriyle kendilerini öne çıkarırlar. Ancak Zodyak’ın en son burcu olarak Balık bireyselliğin son kısmı ve son burcudur, dolayısıyla en derin ve en hoşgörülü burçtur. 
                        
Balık burcunu tanımlayan kavramlar ise hassaslık, şefkat, merhamet, özveri, fedakarlık, duyarlılık, sezgisellik ve uyumdur. Balık burçlarının sezgisel, hissiyat yönü çok kuvvetlidir. Hissetiği şeyler genelde doğru çıkar, insanlardan aldığı enerjide yanılmaz, gördüğü rüyalar çıkar ve mistik olaylara ruhsal olarak yatkınlık gösterir.

Balık, burçların arasındaki en bilge burçtur. Egoyu aşmayı ve toplumsallığı temsil eder, buna hizmet eder. Bu hizmet haddini aştığında, olumsuz kullanıldığında balık burcunu kendi merkezinden uzaklaştırır, kendini ihmal eder. Kararsızlık, kendini suçlama, kendini kurban olarak görme ve ani değişen ruh hallerinin sebebi çevresine olan hoşgörü ve duygusal hizmetin fazla ve yanlış kullanılmasından kaynaklanır.
                        
Hayal gücünün sınırsızlığından dolayı yaratıcılıkla beslenen görsel sanatlar, sahne sanatları, edebiyatın her alanı onlara başarı getirecek ve geliştirecektir.
</p>
                        </div>
                    
                        
                    
                   
                    
                <div class="card item" data-merge=1.5>
                <image src="image/koc.jpg" alt="" class="image-fluid"></image>
                    <h5
                        class="baslikcard">KOÇ BURCU</h5>
                    <p class="cardp">
Elementi : Ateş
Niteliği : Öncü
Yönetici Gezegeni : Mars
Tanımlayan Kavramlar : Kendine saygı duymak, girişimcilik, sürükleyicilik.
Olumlu Özellikler : Hırs, cesaret, girişim, öncülük, macera severlik, özgürlük, mertlik, doğruculuk ve engellerden nefret etme.
Olumsuz Özellikler : Bencillik, asabiyet, kavgacılık, zorbalığa meyil, kendini frenlemede zorluk, acelecilik, isyankarlık, kazanma isteği.
Rengi : Ateş kırmızısı ve kırmızının bütün tonları, mavi ve tonları.
Madeni : Demir, çelik
Uğurlu Taşı : Yakut, Ametist, Garnit, Kantaşı, Kırmızı Mercan, Kuvars
Uğurlu Günü : Salı
Uğurlu Sayıları : 7, 47,87
Müzik Türü : Rock müziği
İdeal Meslekleri : Psikiyatrist, psikolog, mühendis, makinist, silah imalatçısı, diş doktoru, itfaiyeci, kasap, mucit
Yönettiği Organlar : Baş bölgesi ve yüz
Uyumlu Burçlar : Aşk: Terazi Evlilik: Yay Arkadaşlık: Aslan, Oğlak


Koç burcu, ateş elementine dahil olan yay, aslan, koç burçları arasında yer alır. Koç burcu öncü burçlardan birisidir. Başlangıç olarak nitelendirilen koç burcu mevsimi başlatandır yani baharın başlangıcı koç ile olur. Öncü burç olduğundan dolayı yeni başlayan şeylere öncülük eder.Koç burcu, Güneş ve diğer tüm gezegenlerin Zodyak’ta yolculuğa başladıkları ilk nokta yani başlangıç noktasıdır.
            
Koçlar, cesur, gözü kara, atik ve canlıdırlar, ayrıca sıcakkanlı, açık sözlü, dürüst, öncü ve liderlik nitelikleri yüksek kişilerdir. Burada bahsedilen liderlikleri yönetmekten çok yeniliklere yol açmak tarzındadır. Yani yeni bir şey varsa buna ilk koç cesaret eder ve öncüsü olur en önde gider yönetmekten ziyade teşvik edici ve yol göstericidir. Karşılarına çıkan zorluklara karşı dayanıklıdır, kolay pes etmezler ve bu zorluklar onların hoşuna gider, onları daha da güçlendirir. Aynı zamanda zodyaktaki en fevri ve öfkeli burcudur. Bu biraz da sabırsız olmalarından ortaya çıkar bazen karşısındaki sonuna kadar dinlemeden sabırsızca ani tepkiler verebilirler. Ama öte yandan koç insanı hoşgörülü ve yardımseverdir, yardımı reddedildiğinde hassaslaşıp duygusallaşıp içe kapanabilir. Ancak bu durum bir koç için çok uzun sürmez, hemen yeni bir çözüm üretmeye hazırlanır.
                        
Koç için gerekli olan şey, sabırlı olmak, beklemek ve çıkar gözetmeksizin yaratmayı öğrenmektir. Bunları yapabildiğinde aslında kendini daha iyi hissetmiş olacaktır onu şifalandıracak kısım kendisinin de yer yer şikayet ettiği bu sabırsız, aceleci ve fevri tarafıdır.
</p>
                        
</div>
                    
                        
                       
                    
                <div class="card item" data-merge=1.5>
                <image src="image/boga.jpg" alt="" class="image-fluid"></image>
                    <h5
                        class="baslikcard">BOĞA BURCU</h5>
                    <p class="cardp">
Yönetici Gezegeni : Venüs
Elementi : Toprak
Niteliği : Sabit
Tanımlayan Kavramlar : Azim ve kararlılık, dünya meseleleri ile ilgilenmek, başarma duygusu, ağır fakat kararlı ilerlemek.
Olumlu Özellikler : Tahammül gücü, düşüncelilik, tutuculuk, uyum, güvenilirlik,, pratiklik, sanata ilgi, kuvvetli arzular, sıcakkanlılık.
Olumsuz Özellikler : İnatçılık, tartışmaya yatkınlık, tensel zevklere düşkünlük, yeme ve içme ilgi, tembellik, hoşgörüsüzlük, sabit fikirlilik, alınganlık, orijinalite eksikliği.
Rengi : Krem, uçuk mavi, uçuk yeşil
Uğurlu Taşları : Yeşim, lapis lazuli
Müzik Türü : Büyük orkestralarca çalınan parçalar
Uyumlu Burçlar : Aşkta Akrep, Evlilikte Oğlak, Arkadaşlıkta Aslan
Yönettiği Organlar : Boğaz bölgesi ve ense.
İdeal Meslekler : Mimar, dekorator, heykeltıraş, müzisyen, kuyumcu, model, sanat danışmanı, emlakçı

Boğa burcu, toprak elementine dahil olan oğlak, başak, boğa burçları arasında yer alır. Boğa burçları kararlı, serinkanlı, yumuşak, sakin, uyumlu ve azimlidir. Zodyaktaki en inatçı burçtur. Maddiyata ve maddeselliğe çok düşkündür. Ticari alanda da kendini göstermeyi sever ve bu alanda da başarıyı yakalar.
                        
Venüs yönetimindeki bu burç güzelliği ve estetikliği de temsil eder. Estetik anlayışları oldukça gelişmiştir. Enerjileri yüksektir. 
Bir boğa kendi alışkanlıklarından ve düzeninden kolay kolay vazgeçmez, dinginlik, huzur ve güven arar, bunları bulduğu ortama da insana da sadık kalır. İlişkilerinde de sadıklardır kolay vazgeçmezler.

Olaylar karşısındaki tepkileri de sabittir. Kolay kolay sinirlenmezler, yavaş ve sakin konuşurlar, kibarca uyarıda bulunurlar. Sinirlenmeleri, sabırlarının taşması için çok büyük, şok edici olaylar yaşamaları gerekir. Ancak sinirlendiklerinde de çok sert tepkiler verebilirler. Böyle durumlar karşısında içe kapanırlar.

</p>
</div>
                      
                    
                <div class="card item" data-merge=1.5>
                <image src="image/ikizler.jpg" alt="" class="image-fluid"></image>
                    <h5
                        class="baslikcard">İKİZLER BURCU</h5>
                    <p class="cardp">
Yönetici Gezegeni : Merkür
Element : Hava
Nitelik : Değişken
Tanımlayan Kavramlar : Entellektüel, yazım ve edebiyat konularında yetenek, el beçerisi, çift yönlülük.
Olumlu Özellikler : Çok yönlülük, yazma veya konuşma yeteneği, uyumluluk, entelektüalite, konuşma ve mizah kabiliyeti, zeki, yabancı dillere kabiliyet
Olumsuz Özellikler : Değişkenlik, kararsızlık, yüzeysellik, aşırı değişkenlik, asabi enerjiyi kontrol edememe, huzursuzluk, kurnazlık
Rengi : Açık mavi, sarı, gri ve karışık renkler
Uğurlu Taşları : Akik, kehribar
Müzik Türü : Romantik parçalar, elektronik parçalar-
Uyumlu Buçlar : Aşkta, İkizler ve Aslan, Evlilikte Aslan ve Kova, Arkadaşlıkta İkizler ve Yengeç
Yönettiği Organlar : Sinir sistemi, eller ve kollar, akciğerler ve böbrekler.
İdeal Meslekleri : Yazar, gazeteci, spiker, dil bilimci, öğretmen, avukat, çevirmen, rehber sekreter, bilgisayarcı, satış elemanı.

İkizler burcu, hava elementine dahil olan ikizler, terazi, kova burçları arasında yer alır.İkizler burcu değişken niteliktedir. Değişime ve yeniliğe her zaman açık ve isteklidir. Yeni oluşumlara, yeni ortamlara ve yeni fikirlere karşı oldukça meraklıdırlar. Merkür tarafından yönetilirler. Merkür iletişim gezegenimizdir ve ikizler ile Başak burcunu yönetir. bu etkiden dolayı konuşmayı çok sever ve iletişim becerisi de oldukça yüksektir. Aynı zamanda bu özellik ona girişkenliği ve cana yakınlığı da beraberinde getiriyor.
                        
İkizler burcunun algıları devamlı açıktır pozitif ve canlılardır. Aynı anda birden fazla işi başarıyla yapabilirler. Gözlem yaparlar, sorgularlar, merak ederler ve pes etmezler. Zodyaktaki aklıyla ön planda olan, zekasıyla adından söz ettiren burçlardan biridir. İkna kabiliyetleri yüksektir bu da merkür burcu olmasının bir avantajı olarak çıkar karşısına.
İkizler oldukça yetenekli ve beceriklidir, özellikle de el becerileri oldukça gelişmiştir. Sanatsal konulara duydukları merakla el becerileri birleştiğinde karşımıza başarılı seramik sanatçısı, heykeltraş veya müzisyen çıkması doğaldır.

İkizler burcunu gölge yani eksik oldukları, iyileştirmeleri gereken yanları ise her şeye karşı aşırı duyulan merak duyguları büyük tabloyu görememe, olaylara yoğunlaşamama, derinleşememe ve kararsızlığı verir. Sürekli ve hızlı bir şekilde fikir değiştirirler bu aslında kararsız olduklarından dolayı değil aynı anda birden fazla şeyi elde etmek istediklerinden dolayı ortaya çıkar bu noktalarda daha tok göz olmalılar ve kararlarında istikrarlık sağlamalılar.

</p>
</div>
                        
                
                    
                <div class="card item" data-merge=1.5>
                <image src="image/yengec.jpg" alt="" class="image-fluid"></image>
                    <h5
                        class="baslikcard">YENGEÇ BURCU</h5>
                    <p class="cardp">
Yönetici Gezegeni : Ay
Elementi : Su
Niteliği : Öncü
Tanımlayan Kavramlar : Yuva sevgisi, aşırı duyarlık, besleyicilik, güvenlik ihtiyacı.
Olumlu Özellikler : Sempati, nezaket, duygusallık, beceri, affedicilik, idarecilik, kararlılık, ihtiyatlılık, anne sevgisi
Olumsuz Özellikler : Ürkeklik, huzursuzluk, tembellik, aşırı duyarlılık ve hassaslık, duygularda değişkenlik, dağınıklık, düzensizlik, toleranssızlık, kendine acıma
Renk : Beyaz, gümüş rengi ve tonları, açık mavi
Uğurlu Taşları : Ay taşı, akuamarin
Müzik Türü : Büyük orkestraların çaldığı ünlü şarkıcıların söylediği parçalar
Uyumlu Burçlar : Aşkta Aslan Terazi ve Akrep, Evlilikte Akrep, Arkadaşlıkta Yay ve İkizler
Yönettiği Organlar : Göğüs, mide, rahim ve solunum yolları
İdeal Meslekleri : Ev işleri ve bu konudaki tüm uzmanlık faaliyetleri, denizcilik, restoran, bar ve cafe işletmeciliği, antikacılık

Yengeç burcu, su elementine dahil olan akrep, yengeç, balık burçları arasında yer alır.Yengeç burcu öncü burçlardan biridir. Yaz mevsiminin başlamasına öncülük eder. Elementi su olduğundan ve yöneticisi ay gezegeni olduğundan dolayı duygusal, hisleri kuvvetli ve sezgiseldir. Sevdiklerine çok bağlıdırlar ve onlara yeri geldiğinde anne gibi de davranabilirler. Evcimen burçlardır, evine ve ailesine düşkündür, yöneticisi de ay gezegenidir ve ay anne ile olan ilişkimizi temsil eder bu sebepten dolayı evine ve ailesine olduğu kadar annesine de düşkündür yengeç burçları. Nostaljiyi ve eskileri çok sever, eşyalarına bile çok bağlıdır işine yaramayan bir şeyi bile atmakta zorlanabilir. Eskiye dönük yaşadıkları için bu durum onlara takıntıyı verir, kişileri ya da durumları çok fazla düşünme, eski anılarla yaşama, aklından çıkaramama gibi kişiyi uzun vadede olumsuz etkileyecek durum içine de sokabilir.
                        
Öte yandan Yengeç, derin duygusallığı ile hoşuna gitmeyen konular karşısında, yok sayma yine kabuğa çekilme durumları yaşar. Sezgileri, altıncı hisleri oldukça kuvvetlidir. Öyle ki zaman zaman yüksek duyarlılıkları nedeniyle etraflarında olup biteni fazla içselleştirme eğilimi gösterebilir. Karşısındakinin hislerini bir sünger gibi çekme sonucu iniş çıkışlı bir ruh haline girebilirler. Bu kadar duyarlılığın sonucunda huzursuz ortamlarda rahatsızlık duyup, bir kenara çekilecek veya kendilerini rahatlatan kişilerle olmayı tercih edeceklerdir.

Yengeç’in gölge yanlarına gelecek olursak; Yengeç olmak demek, ihtiyaç duyduğu şefkat ve ilgiyi kişinin önce kendisine gösterebilmesi, kişinin kendisine annelik edebilmesi demektir. Yani bu anlamda Yengeç kişisi öncelikle kendi duygusal ihtiyaçlarını doyurma yetkinliğine ulaşmak zorundadır. Ancak böylelikle, kendinin dışındakilerin güvenlik ve sevgi ihtiyaçlarına cevap verir duruma gelebilir.ceğinden Kova kendi farklılıklarını geriye çekebilir ve kendi gibi olmaktan kaçınabilir. Çünkü tüm farklılığına rağmen Kova’yı bekleyen en büyük tuzak toplumdan dışlanma korkusudur.
</p>
</div>            
                            
                  
                    
                <div class="card item" data-merge=1.5>
                <image src="image/aslan.jpg" alt="" class="image-fluid"></image>
                    <h5
                        class="baslikcard">ASLAN BURCU</h5>
                    <p class="cardp">
Yönetici Gezegen : Güneş
Elementi : Ateş
Niteliği : Sabit
Tanımlayan Kavramlar : Canlı, otoriter ve yönetici.
Olumlu Özellikler : Asillik, cömertlik, sadakat, saygınlık, liderlik, organize etme yeteneği, artistik kabiliyeti, eli açıklık, geniş zihinlilik, yüce gönüllülük, canlılık, yaratıcılık.
Olumsuz Özellikler : Kibir, otokrasi, acımasızlık, zorbalık, kendini beğenme, gösterişçilik, sahte gurur, hoşgörüsüzlük.
Rengi : Altın sarısı ve sarının tüm tonları
Uğurlu Taşları : Kaplangözü, Kehribar, Topaz
Müzik Türü : Rep türü müzik ve büyük orkestraların seslendirdiği parçalar
Uyumlu Burçlar : Aşkta ikizler ve Yengeç, Evlilikte Oğlak ve ikizler, Arkadaşlıkta Oğlak ve Boğa Yönettiği
Organları : Kalp ve omurilik
İdeal Meslekler : Artist veya aktör, öğretmen, sporcu, show ve sahne sanatçılığı, kuyumcu, kurumsal yöneticilik, politikacı

Aslan burcu, ateş elementine dahil olan yay, koç, aslan burçları arasında yer alır.Aslan burcu öncü niteliktedir. Aslan burcu dengeliyici bir burçtur. Belirledikleri hedefleri, amaçları gerçekleştirmek için doğmuşlardır. Ateş ve güneşin etkisiyle sıcak ve ve canlıdır. Görünür, ön planda olmayı ve dikkat çekmeyi sever.Liderlik yapmaktan ve yönetmekten çok hoşlanırlar. Onların liderliği koç gibi teşvik etmek öncü olmak değil bizzat yönetmek ve hükmetmek isterler. Otorite ve güç onlar için çok önemli ve besleyicidir, çok gururlulardır adım atmak yerine kendisine adım atılmasını bekler, bu özgüvensiz ya da çekindiğinden dolayı değil dediğim dedik ve gururlu yapılarından kaynaklanır.
                        
Dışarıdan soğuk, mesafeli ve fedakarlık yapmayan ama fedakarlık bekleyen bencil biri gibi dursalar da sevdiklerine karşı asla böyle değillerdir. Onlar için gururunu bir kenara atabilir, yapmam dediklerini yapabilir ve fedakarlıktan da hiç kaçınmazlar anne gibi olurlar onlara karşı.Aslanlar ailesine son derece düşkündür. Ailesiyle devamlı yakından ilgilenir, onların problemlerini çözme konusunda elinden gelen her şeyi yapar. Hatta ailesini kaybetme konusunda korkular duyar ve aile içindeki bir kayıptan çok etkilenirler. Evlilik konusunda ise ya onu destekleyen güçlü, sırtını güvenerek yaslayabileceği ya da kendisinin ışığını yansıtabileceği kendiyle denk olan birini ister. Sağlık astrolojisinde Aslan burcu kalp, damar ve omurga hastalıklarından sorumludur. Bu nedenle Aslanın kalp, damar sağlığına özen göstermesi, rutin kontrollerini aksatmaması gerekir.

</div>          
                            
                            
                            
                <div class="card item" data-merge=1.5>
                <image src="image/basak.jpg" alt="" class="image-fluid"></image>
                    <h5
                        class="baslikcard">BAŞAK BURCU</h5>
                    <p class="cardp">
Yönetici Gezegeni : Merkür
Elementi : Toprak
Niteliği : Değişken
Tanımlayan Kavramlar : Hizmet yeteneği, mantıklılık.
Olumlu Özellikleri : Ayırt etme ve analiz kabiliyeti, dikkat ve özen, temizlik, titizlik, saflık, dakiklik.
Olumsuz Özellikleri : Eleştiricilik, içe dönüklük, hastalık korkusu, acelecilik, gelenek ve göreneklere aşırı bağımlılık, aşırı titizlik, kendini kolay kolay beğenememe, aşırı meraklılık.
Rengi : Orta ton gri, toprak tonları ve violet
Uğurlu Taşları : Lal, mavi necef
Müzik türü : Pop türündeki parçalar
Uyumlu olduğu burçlar: Aşkta Akrep, Evlilikte Terazi, Arkadaşlıkta Terazi
Yönettiği Organlar : İnce ve kalın bağırsaklar
İdeal Meslekleri : İstatistikçilik, muhasebecilik, sekreterlik, öğretmenlik, müfettişlik, sağlıkla ilgili tüm meslekler ve görevler, ustalık, bahçıvanlık

Başak burcu, toprak elementine dahil olan oğlak, boğa, başak burçları arasında yer alır.Başak burcu değişken niteliktedir. Değişken burçlar değişmeye ve özellikle değiştirmeye açıktır, başak burcu da bunu bir toprak burcu ve eleştrinin temsili burcu olarak eleştirerek ve sorgulayarak değiştirir. Mantık odaklı olan bu burç merkür yönetimindedir, bu sebepten dolayı iletişimi güçlüdür, detaylara fazlasıyla önem verir kimsenin görmedğini görür, duymadığını duyar. Duygusal ve alıngandır fakat bunu herkese göstermez daha çok kendi içinde ya da yalnız kaldığında bu özellikleri ortaya çıkar. Duygusal olmasına rağmen son sözü hep mantığı söyler, aklına yatmayan şeyin kalbinde de yeri yoktur. 6.ev yöneticisi olduğundan dolayı sağlık sektörünü ve hizmeti temsil eder, hizmet etmeyi, yarar sağlamayı daha doğrusu işe yaramayı çok sever başak burçları. Mükemmelin peşindedir her zaman bu sebepten dolayı kimseyi kolay kolay beğenmez, başkalarının yaptığı işten pek memnuniyet duymaz onu ancak kendisi yaparsa içi rahat edebilir başkalarına kendisi kadar iyi bir iş çıkarabilme konusunda pek güvenmez.
                        
Sakin ve sabırlıdır fakat damarına basıldığında da birden parlayabilir koç gibi biraz fevri bir yapısı vardır, çabuk parlar ama çabuk söner. Çok fazla düşünüp her şeyin detayına indiğinden dolayı takıntılı bir yapısı vardır. Kişi ya da olay fark etmeden ciddi boyutta hırs ve takıntı haline de getirebilir. Ama sevdiklerine de sıkı sıkıya bağlı olur, onu mutlu etmek için elinden geleni de yapar. Astrolojinin en sadık ve güvenilir burçlarından biridir bu sadakati başak burcu kadınları daha sağlam bir şekilde ortaya koyabilir. Sahiplenme, bağlanma, sevme ve anaçlık konusunda da yengeç ile birbirine benzerler ama başak yengeçe göre daha mantık odaklı ve duygularına ket vurabilen bir burçtur.
Sağlık açısından bakacak olursak, bir konuya takıldığında, kızdığında bağırsaklarına vurur. Genel olarak hassas organlar karın bölgesi, bağırsak, pankreas, karaçiğer ve ayaklardır, bu bölge ve organlarla ilgili sıkıntılar yaşayabilir. Aslında Başaklar yediğine, içtiğine, sağlığına da çok dikkat ederler. Hatta bazı Başakların hastalık konusunda ciddi takıntıları da olabilir.
                    
                    
                    
                    </p>
</div>
                            
                            
                            
                           
                    
                <div class="card item" data-merge=1.5>
                <image src="image/terazi.jpg" alt="" class="image-fluid"></image>
                    <h5
                        class="baslikcard">TERAZİ BURCU</h5>
                    <p class="cardp">
Yönetici Gezegen : Venüs
Element : Hava
Nitelik : Öncü
Tanımlayan Kavramlar : Ortaklık kapasite ve yeteneği, sanat, uyum ve işbirlik arzusu.
Olumlu Özellikler : Denge, adalet, kibarlık, iyimserlik, sanatsal yetenek, olumluluk, sevimlilik, uyumluluk, beraberlik, diplomasi, çekicilik, zerafet, kibarlık
Olumsuz Özellikler : Kararsızlık, duygusal iniş ve çıkışlar, hayır diyememek, alınganlık, flörtçü bir ruh yapısı, iki uç arasında bocalama, başkalarına karşı kolay elde edilebilir gibi görünme
Rengi : Uçuk yeşil, mavi ve sarının bütün tonları
Uğurlu Taşları : Lapis lazuli, opal
Müzik Türü : Romantik müzik yapan küçük orkestraların çaldığı parçalar
Uyumlu Burçlar : Aşkta Koç Yengeç, Evlilikte Koç Başak, Arkadaşlıkta Başak Balık
Yönettiği Organlar : Böbrekler ve bel bölgesi.
İdeal meslekleri : Güzellik uzmanı, modacı, dekoratör, desinatör, kuaför, diplomat

Terazi burcu hava elementine dahil olan ikizler, kova, terazi burçları arasında yer alır. Öncü burçlardan biri olan terazi burcu, venüs tarafından yönetilir ve zarafeti, güzelliği, nezaketi temsil eder. Adından da anlaşılacağı üzere adalet ve dengeyi temsil eder ve bunu nezaket içinde gerçekleştirir. Denge kurmak ve o dengeyi yakalayabilmek teraziler için çok önemlidir. İlişkilerinde de hep o dengeyi ve uyumu ararlar, destek almak yol arkadaşı edinmek el ele olmak onlar için önemlidir. Venüs ile yönetildiği için güzelliğe, uyuma, bakımlı olmaya ve estetik anlayışa sahip olmaya önem verirler ve bir kriter haline getirirler. Bunları bulamadığı kişiyle bir ilişki yürütmez ve vakit kaybetmemek adına o kişiyle olan bağını kibar bir şekilde kestirip atarlar. Hep bu uyum ve dengeyi arama arayışları olduğundan dolayı hayatlarına çok kişi girip çıkabilir bu durumda onları dışarıdan flörtöz biri gibi gösterir ama aslında aradığı ruh eşidir. 
        
Gölge yanlarından bahsedecek olursak, terazi yalnız kalmayı, partnersiz olmayı hiç sevmez ve hep bir destekleyici, yanında onunla beraber yürüyen birini ister bu sebepten dolayı sırf yalnız kalmamak için yeri geldiğinde kendinden çok fazla taviz verdiği olur bu da onu uzun vadede yıpratır ve ilişki içinde yalnızlaştırır. Uyumlu ve sakin olduğundan dolayı alttan alma ve susma meyili vardır, kırmamak incitmemek için susmak yerine kendisini ezdirmeyecek sözleri karşı taraftan esirgememesi gerekir ancak o zaman gerçek dengeyi kendinde ve hayatında bulabilir.
    

                        
                        
</p>
</div>
                            
                
                    
                <div class="card item" data-merge=1.5>
                <image src="image/akrep.jpg" alt="" class="image-fluid"></image>
                    <h5
                        class="baslikcard">AKREP BURCU</h5>
                    <p class="cardp">
Yönetici Gezegeni : Mars ve Pluto
Elementi : Su
Niteliği : Sabit
Tanımlayan Kavramlar : Doğanın gizli güçleri, iyileştirici güç, askeri meseleler, cerrahlık
Olumlu Özellikleri : Cesaret, çözümcülük, gizemlilik, araştırıcılık, yüksek hayal gücü, kuvvetli sezgiler ve hisler, anlayışlılık, kararlılık, ısrarlılık
Olumsuz Özellikleri : Dengesizlik, cinselliği kullanmak, huysuzluk, inatçılık, kıskançlık, sahiplenmek, kindarlık, suskunluk
Rengi : Kırmızı ve tonları, siyah
Uğurlu Taşları : Rodokrosit, topaz
Müzik türü : Caz ve klasik hariç tüm parçalar
Uyumlu Burçlar : Aşkta Yengeç ve Başak, Evlilikte Balık ve Yengeç
Yönettiği Organlar : Cinsel organlar, rektuma kadar olan tüm bölgeler
İdeal Meslekleri : Asker, psikiyatrist, psikolog, dedektif, şifacı, eskici, sigortacı, vergi uzmanı, maden işçisi

Akrep burcu, su elementine dahil olan akrep, yengeç, balık burçları arasında yer alır.Akrep burcu sabit niteliktedir.
Gizemli ve tutkuludur akrep burçları. Her şeyini anlatmaz kendi içinde yaşar ve adeta sır küpleridir ona söylenen onunla beraber gider. Merhametli, anlayışlı ve cana yakındır ama bu özelliklerini sadece sevdiği insanlara gösterir. Gizemli ve meraklı olduğundan ve doğası gereği mistik, ruhani varlıklara yatkınlığı olduğundan dolayı büyü, astroloji, fal ve spiritüel olanlara ilgi duyar, bu konularda da oldukça başarılı olur. 
                        
Mars ve Plüto tarafından yönetilen akrep burcu savaşçıdır ve asla pes etmez, en bitti denilen yerde bile küllerinden yeniden doğarak ayağa kalkar. Kaos, kaotik olaylar ve mücadele onun hayatından olağan seyridir bu sebepten dolayı da savaştan asla kaçmazlar çünkü onların normali budur. Bazen çok kıskanç ve kısıtlayıcı olabilirler özellikle ilişki içinde sürekli kuşku duyan, güven problemi yaşayan kişi akrep burcudur. Sevdiğinin nerede, ne zaman, kiminle ne yaptığını bilmek ister çok kıskanırsa hiddetlenebilir ve ilişkiyi bir çıkmaza sokabilir.
                        
Genelde sakin ve cesur bir yapıları vardır ama onlar da dışarıdan soğuk ve mesafeli görünürler bazı insanlar yanlarına yaklaşmaya, soru sormaya ya da tanışmaya çekinebilir. Ama tanımadığı insanlara karşı böyledir bu biraz da dışarıdan gelebilecek saldırılara karşı yarattığı koruyucu bir maskedir.
                    
                    
                    </p>
</div>             
                                
                                
                 
                    
                <div class="card item" data-merge=1.5>
                <image src="image/yay.jpg" alt="" class="image-fluid"></image>
                    <h5
                        class="baslikcard">YAY BURCU</h5>
                    <p class="cardp">
Yönetici Gezegeni : Jüpiter
Elementi : Ateş
Niteliği : Değişken
Tanımlayan kavramlar : İdealistlik, felsefe, hukuk
Olumlu Özellikleri : Cömertlik, neşelilik, adalet ilkelerine önem verme, dürüstlük, hazır cevaplık
Olumsuz Özellikleri : Aşırı güven, dogmatik, fanatik, alaycılık, çift fikirlilik, çevresindekileri önemsememe, zevke aşırı düşkünlük
Rengi : Mor ve tonları
Uğurlu Taşları : Dumanlu kuarts, lapis, turkuvaz
Müzik Türü : Değişik ülkelerden farklı müzikler
Yönettiği Organlar : Karaciğer, kalçalar ve üst bacaklar
İdeal Meslekleri : Hakim, avukat, felsefeci, seyahat acenteciliği, yayıncı

Yay burcu, ateş elementine dahil olan aslan, koç, yay burçları arasında yer alır.Yay burcu değişken niteliktedir.Yay burcunu tanımlayan kavramlar, geniş görüşlülük, bilgi, bilgelik, özgürlük, cesaret, derin kavrayış, serüven, kibarlık, iyimserlik ve ahlaktır. Yay burcu oldukça dışa dönük ve eğlencelidir. Cesaret, bilgelik, enerji ve yaşamdan zevk almak onların işidir. Gezmeyi, arkadaşlarıyla vakit geçirmeyi, faydalı işler yapmayı çok severler, dışarıdan bakıldığında hiçbir şeyi kafasına takmayan, umursamaz biri gibi yani gamsız gibi görünsede aslında birçok şeyi kafasına takar, çok düşünür ve duygusallaşır fakat bunu kimseye belli etmez.

Eril enerjiye sahiplerdir bu onları daha güçlü ve atılgan gösterir, baskın karakterlerini daha çok meydana çıkarır. Cesareti ve özgüveni sayesinde her zaman yeniliğe açıktır bu yeniliklerin peşinden giderken tereddüt, korku duymazlar çünkü kendilerine güvenleri ve duyduğu cesaretleri tamdır bu sebepten yeni bir hayat, yeni bir iş, yeni bir düzen onları asla korkutmaz aksine onlara çok iyi gelir.
                        
Ticaret, uluslararası ticaret, uluslararası ilişkiler ile temsilcilikleri, hukuki işler, spor, ruhsal danışmanlık, din, felsefe ve politika, Yay burcu konuları içindedir ve bu alanda kendilerini daha rahat gösterebilirler.

Sağlık astrolojisinde Yay burcu, kalça ve üst bacaklardan sorumludur, dolayısıyla Yay bu kısımlardan kilo almaya veya rahatsızlıklarla karşılaşmaya müsait durumda olabilir.

                    
                    
                    
                    </p>
</div>              
                        
                    
               
            
            </div>
        
        		
				</div>
        </section>
        <div style="clear: both"></div>
		 
		 <div id="ust-blok"></div>	 
                      
      <section id="burclar">
          <div class="container">
              <h3 id="burclarh3">Burçlar</h3>
              <div class="sutun-sol-sag">
              <image src="image/toprak.jpg" alt="" class="image-fluid oval">
                  <h4 class="burclarisim">Toprak Elementi Burçları</h4>
                  <p class="burclarr">Oğlak Burcu(22 Aralık-22 Ocak), Boğa Burcu(21 Nisan-21 Mayıs), Başak Burcu(23 Ağustos-23 Eylül)</p>
                  
                  
                  </image>
              
              </div>
          
          </div>
          
          
          
           
              <div class="sutun-sol-sag">
              <image src="image/hava.jpg" alt="" class="image-fluid oval">
                  <h4 class="burclarisim">Hava Elementi Burçları</h4>
                  <p class="burclarr">Kova Burcu(21 Ocak-19 Şubat), İkizler Burcu(21 Mayıs-21 Haziran), Terazi Burcu(23 Eylül-23 Ekim)</p>
                  
                  
                  </image>
              
              </div>
          
          <div class="sutun-sol-sag">
              <image src="image/ates.jpg" alt="" class="image-fluid oval">
                  <h4 class="burclarisim">Ateş Elementi Burçları</h4>
                  <p class="burclarr">Koç Burcu(21 Mart-21 Nisan), Aslan Burcu(22 Temmuz-23 Ağustos), Yay Burcu(24 Kasım-22 Aralık)</p>
                  
              </image>
          </div>
          
          <div class="sutun-sol-sag">
              <image src="image/su.jpg" alt="" class="image-fluid oval">
                  <h4 class="burclarisim">Su Elementi Burçları</h4>
                  <p class="burclarr">Balık Burcu(20 Şubat-20 Mart), Yengeç Burcu(22 Haziran-23 Temmuz), Akrep Burcu(23 Ekim-22 Kasım)</p>
                  
              </image>
          </div>
          
          
                
                </section>
                
                
                <div>
                
                <section id="iletisim">
                    <div class="container">
                    <h3 id="h3iletisim">İletişim</h3>
                     
                         
                        <div id="iletisimopak">
							
                            <div id="formgroup">
								<form action="index.php" method="post">  
                                <div id="solform">
                                    <input type="text" name="isim" placeholder="Ad Soyad" required class="form-control">
                                    <input type="text" name="tel" placeholder="Telefon Numarası" required class="form-control"></div>
                                
                                    <div id="sagform">
                                        <input type="email" name="mail" placeholder="E-mail Adresiniz" required class="form-control">
                                    <input type="text" name="konu" placeholder="Konu Başlığı" required class="form-control">
                                </div>
                                
                                
                                <textarea name="" id="" cols="30" placeholder="Mesaj Giriniz" rows="10" required class="form-control"></textarea>
                                
                                
                                <input type="submit" value="Gönder">
								</form>
                                </div>
							
                                
                                <div id="adres">
                                    <h4 id="adresbaslik">Adres: </h4>
                                    <p class="adresp">Türkiye, İstanbul</p>
                                    <p class="adresp">E-mail: astrodamla@gmail.com</p>
                                </div>
                                
                                </div>
                            
							
                            </div>
                     
                        <footer>
                            <div id="copyright">2023 | Tüm Hakları Saklıdır</div>
                            
                            <a href="#menu"><i class="fa-solid fa-chevron-up" id="up"></i></a>
                            
                        
                        
                        
                        </footer>
                        
                        
                        
                        </div>
                    
                         
              
                
			 
	 
                      
                      
        <script  src="https://code.jquery.com/jquery-3.7.0.slim.min.js"></script>
        
        <script src="owl/owl.carousel.min.js"></script>
        
        <script src="owl/script.js"></script>
        
        
    </body>
    
</html>
    
    
 
 
    
    
    