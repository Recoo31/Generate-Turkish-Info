<?php
require_once 'classes/Profil.php';
$p = new Profil();
?>
<!DOCTYPE html>
<html lang="tr_TR">
<head>
	<meta charset="UTF-8">
	<title>Rastgele Profil Oluşturucu</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Tasarımcılar için rastgele profil oluşturucu. İsim, soyisim, biyografi, kullanıcı adı ve dahası."/>
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic&amp;subset=latin,greek-ext' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="assets/style.css">
</head>
<body>
	<main>
		<div class="tutucu">
			<div id="profil">
				<div class="pdlt"><label for="tam_isim">İsim</label></div>
				<div class="pdit">
					<input onclick="select()" readonly spellcheck="false" type="text" id="tam_isim" value="<?php echo $p->get_tam_isim() ?>">
				</div>

				<div class="pdlt"><label for="sehir">Şehir</label></div>
				<div class="pdit">
					<input onclick="select()" readonly spellcheck="false" type="text" id="sehir" value="<?php echo $p->get_sehir() ?>">
				</div>

				<div class="pdlt"><label for="biyografi">Biyografi</label></div>
				<div class="pdit">
					<input onclick="select()" readonly spellcheck="false" type="text" id="biyografi" value="<?php echo $p->get_biyografi() ?>">
				</div>

				<div class="pdlt"><label for="kullanici_adi">Kullanıcı adı</label></div>
				<div class="pdit">
					<input onclick="select()" readonly spellcheck="false" type="text" id="kullanici_adi" value="<?php echo $p->get_kullanici_adi() ?>">
				</div>

				<div class="pdlt"><label for="sifre">Şifre</label></div>
				<div class="pdit">
					<input onclick="select()" readonly spellcheck="false" type="text" id="sifre" value="<?php echo $p->get_sifre() ?>">
				</div>

				<div class="pdlt"><label for="eposta">E-posta</label></div>
				<div class="pdit">
					<input onclick="select()" readonly spellcheck="false" type="text" id="eposta" value="<?php echo $p->get_eposta() ?>">
				</div>

				<div id="daha">
					
					<div class="pdlt"><label for="adres">Adres</label></div>
					<div class="pdit">
						<input onclick="select()" readonly spellcheck="false" type="text" id="adres" value="<?php echo $p->get_adres() ?>">
					</div>
					
					<div class="pdlt"><label for="meslek">Meslek</label></div>
					<div class="pdit">
						<input onclick="select()" readonly spellcheck="false" type="text" id="meslek" value="<?php echo $p->get_meslek() ?>">
					</div>
					
					<div class="pdlt"><label for="dogum_tarihi">Doğum tarihi</label></div>
					<div class="pdit">
						<input onclick="select()" readonly spellcheck="false" type="text" id="dogum_tarihi" value="<?php echo $p->get_dogum_tarihi() ?>">
					</div>
					
					<div class="pdlt"><label for="yas">Yaş</label></div>
					<div class="pdit">
						<input onclick="select()" readonly spellcheck="false" type="text" id="yas" value="<?php echo $p->get_yas() ?>">
					</div>
					
					<div class="pdlt"><label for="telefon_numarasi">Telefon</label></div>
					<div class="pdit">
						<input onclick="select()" readonly spellcheck="false" type="text" id="telefon_numarasi" value="<?php echo $p->get_telefon_numarasi() ?>">
					</div>
					
					<div class="pdlt"><label for="ilgi_alani">İlgi alanı</label></div>
					<div class="pdit">
						<input onclick="select()" readonly spellcheck="false" type="text" id="ilgi_alani" value="<?php echo $p->get_ilgi_alani() ?>">
					</div>
			
					
					<div class="pdlt"><label for="web_adresi">Web adresi</label></div>
					<div class="pdit">
						<input onclick="select()" readonly spellcheck="false" type="text" id="web_adresi" value="<?php echo $p->get_web_adresi() ?>">
					</div>

					<div class="clear"></div>
					
				</div><!-- /#daha -->

				<div class="clear"></div>
				<div id="daha-ak" class="arrow down">DAHA FAZLA DETAY...</div><!-- /#profil -->
			</div><!-- /#profil -->

			<div id="detaylar">
				<div id="hakkinda" class="modal">
					<h2 class="modal-baslik">Hakkında</h2>
					<p>Rastgele Profil Oluşturucu.
					<p>Bir şeyler ısmarlak ister misiniz? <a href="https://www.buymeacoffee.com/recoo">Evet</a> - <a href="https://google.com.tr/search?q=isteyenin+bir+yüzü+vermeyenin+iki+yüzü+kara">Hayır</a></p>
					<button class="modal-tamam">Hmm, iyiymiş.</button>
				</div>
				<div id="api" class="modal">
					<h2 class="modal-baslik">API</h2>
					<p>İstek limiti yoktur, bir defada en fazla 200 farklı kullanıcı profili oluşturabilirsiniz. Çıktı JSON formatındadır.</p>
					<h3>Kullanım</h3>
					<p>
						<pre>https://recoo-test.herokuapp.com/api.php</pre>

					</p><pre><?php echo $p->api(1); ?></pre>
					
					<h3>Parametreler</h3>
					<p>
						Birden fazla profil oluşturma (en fazla 200):
						<pre>https://recoo-test.herokuapp.com/api.php?adet=20</pre>
					</p>

					<button class="modal-tamam">Eyvallah</button>
				</div>
			</div><!-- /#detaylar -->
		</div><!-- /.tutucu -->
	</main>

	<footer>
		<div class="tutucu">
			<a href="#hakkinda" id="hakkinda-gg">Hakkında</a> - <a href="#api" id="api-gg">API</a>
			<!-- <p><em><small>beta</small></em></p> -->

		</div><!-- /.tutucu -->
	</footer>
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.1.min.js"></script>
	<script type="text/javascript" src="assets/script.js"></script>
</body>
</html>
