<?php require 'baglanti.php'; ?>
<!DOCTYPE html>
<html>
<head>
<style>

</style>
<link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script>
	$(document).ready(function () {
		$('#customers').DataTable({
			"language": {
				"url": "css/dil.json",
			},
		}
			
		);
	});
</script>
</head>
<body>

<h1>İletişim Tablosu</h1>

<table id="customers" class="datatable table table-hover table-striped">
	<thead>
		<tr>
			<th>Ad Soyad</th>
			<th>Telefon</th>
			<th>E-mail</th>
			<th>Konu</th>
			<th>Mesaj</th>
		</tr>
	</thead>
  <tbody>
    
    
   <?php
    
   
if($_SESSION["user"]=="")
{
    
   echo "
   <script>window.location.href='cikis.php'</script>"; 
    
}

else {
	echo"Kullanıcı Adınız : ".$_SESSION['user']."<br>";
	echo "<a href='cikis.php'>ÇIKIŞ YAP</a><br><br><br>";
	include("baglanti.php");

	$sec="SELECT * FROM iletisim";
	$sonuc=$db->query($sec);
	
	 
	while ($cek=$sonuc->fetch(PDO::FETCH_ASSOC)) {
		echo"<tr>
	       <td>".$cek['adsoyad']."</td>
	       <td>".$cek['telefon']."</td>
	       <td>".$cek['email']."</td>
	       <td>".$cek['konu']."</td>
	       <td>".$cek['mesaj']."</td>
	    </tr>";
	}
}


?> 
      
  
  </tbody>
</table>

</body>
</html>






-