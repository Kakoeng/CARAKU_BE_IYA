<?php include 'sendemail.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CARAKU BE IYA</title>
	<link rel="stylesheet" type="text/css" href="css/join.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>
<body>

<!----- HEADER ----->
<section class="container">
	<header>
		<section class="header1">
			<nav>
				<a href="index.html"><img src="img/logokiri.png"></a>
				<div class="nav-link">
					<ul>
						<li><a href="index.html">HOME</a></li>
						<li><a href="leaderofficer.html">LEADER & OFFICER</a></li>
						<li><a href="member.html">MEMBER</a></li>
						<li><a href="join.">JOIN</a></li>
					</ul>
				</div>
			</nav>
		<div class="medsos">
			<h1>FOLLOW US</h1>
			<ul>
				<li><a href="#"><i class="fab fa-instagram"></i> CARAKU_BE_IYA</a></li>
				<li><a href="https://discord.gg/CjTCDef2Sb"><i class="fab fa-discord"></i> CARAKU BE IYA</a></li>
			</ul>	
		</div>
		<div class="scroll-item">
			<ul>
				<li>
					<i class="fa fa-angle-double-down" aria-hidden="true"></i>
				</li>
			</ul>
		</div>
		</section>
	</header>
</section>

<!-- alert messages start -->
<?php echo $alert; ?>
<!-- alert messages end -->

<!-- RULES -->
<section class=rules>
	<div class="head reveal">
	<h4>RULES UTAMA</h4>
	<p>Wajib Diikuti Setelah Diterima</p>
	</div>
		<div class="rl reveal">
		<h2>>UTAMAKAN ON MIC SAAT IN GAME<<br>>WAJIB PUSH DOG TAG<<br>>SIAP CHANGE NAME<</h2>
		</div>
</section>
<style>
	.rules{
		background-color: #af0d1f;
		text-align: center;
		padding-top: 50px;
	}
	.rules h4{
	 	 font-size: 25px;
	}
	.rules p{
  		margin-top: -8px;
  		color: #f3f3f3;
	}
	.rl{
		padding-bottom: 60px;
 		margin-top: 8px;
	}
	.rules h1{
		font-size: 30px;
		width: 600;
	}
	.rules h2{
		font-size: 27px;
	}
	.head.reveal{
		position: relative;
		transform: translateY(-40px);
		opacity: 0;
		transition:all 2s ease;
	}
	.head.reveal.active{
		transform: translateY(0px);
		opacity: 1;
		
	}
	.rl.reveal{
		position: relative;
		transform: translateY(20px);
		opacity: 0;
		transition: 2s cubic-bezier(0.68, -0.55, 0.265, 1.55);
	}
	.rl.reveal.active{
		transform: translateY(0px);
		opacity: 1;
	}
	@media only screen and (max-width: 700px){
	.rules h1{
		font-size: 25px;
	}
	.rules h2{
		font-size: 18px;
	}
	.rules p{
		font-size: 12px;
	}
	}
</style>
<!-- END -->

<!-- contact start-->
<div class="contact-section">
  <div class="contact-form reveal">
    <h2>ISI FORM DI BAWAH</h2>
    <form class="contact" action="" method="post" enctype="multipart/form-data">
      <input type="text" name="nama" class="text-box" placeholder="Nama Kamu" required>
      <input type="text" name="alamat" class="text-box" placeholder="Alamat(Provinsi,Kota)" required>
      <input type="number" name="umur" class="text-box" placeholder="Umur Kamu" required>
	  <select name="gender" class="text-box" id="gender" aria-placeholder="Jenis Kelamin" required>
		<option value="gender" aria-required="true">Pilih Jenis Kelamin</option>
		<option value="laki-laki" aria-required="true">Laki-Laki</option>
		<option value="perempuan" aria-required="true">Perempuan</option>
	  </select>
      <input type="number" name="whatsapp" class="text-box" placeholder="Nomor Whatsapp(aktif)" required>
	  <p>Screenshot KD Lifetime</p>
	  <input type="file" name="sskd" class="text-box" placeholder="screenshot" required>
      <input type="submit" name="submit" class="send-btn" value="KIRIM">
    </form>
	<p>*KIRIM FORMULIR CUKUP SATU KALI</p>
  </div>
</div>
<!--contact end-->

<!----- FOOTER ----->
<section class="ft">
	<div class="row-ft">
		<div class="cr">
			<p> Copyright &copy; 2021 CARAKUBEIYA<br>Created by <p1>kakoeng</p1></p>
		</div>
	</div>
</section>
<!-- FOOTER END -->
<!--------- JAVA SC --------->
<script type = "text/javascript">
  window.addEventListener('scroll', reveal)
  
  function reveal(){
    var reveals = document.querySelectorAll('.reveal');

    for(var i = 0; i < reveals.length; i++){
  
      var windowheight = window.innerHeight;
      var revealtop = reveals[i].getBoundingClientRect().top;
      var revealpoint = 150;
  
      if(revealtop < windowheight - revealpoint){
        reveals[i].classList.add('active');
      }
      else{
        reveals[i].classList.remove('active');
      }
    }
  }

    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
</script>
  <!-- JAVA SC END -->





</body>
</html>