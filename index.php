<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content= "width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <title>3D Calculator</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>


<body>
  <!-- loader -->
  <div class="bg-loader">
    <div class="loader"></div>
  </div>

	<div class="name">
		<div class="container">
  <script>
      function tes(){
      var a=prompt("Masukan nama kamu","");
      var b=new Date();
      var c=b.getHours();
      if(c>0 && c<4){
      }else if(c>=4 && c<=9){
      c="Hai, Selamat pagi " + a;
      }else if(c>=10 && c<15){
      c="Hai, Selamat siang " + a;
      }else if(c>=15 && c<18){
      c="Hai, Selamat sore " + a;
      }else if(c>=18 && c<19){
      c="Hai, Selamat petang " + a;
      }else if(c>=19 && c<24){
      c="Hai, Selamat malam " + a;
      }
      {
      document.getElementById("aaa").innerHTML=c;
      }
    }</script>
</div>
</div>
<!-- medsos -->
  <div class="medsos">
      <ul>
        <li><a href="https://www.facebook.com/profile.php?id=100002592010620"><i class="fab fa-facebook"></i></a></li>  
        <li><a href="https://www.instagram.com/aw_fik/"><i class="fab fa-instagram"></i></a></li>
        <li><a href="https://github.com/forgotten2323"><i class="fab fa-github-alt"></i></a></li>
      </ul>
  </div>
  <h1>3D Calculator</h1>

  <!--button name-->
  <div class="nama">
  <br>Nama : <button type="button"onClick="tes()">Input Nama</button><br><br><span style="color:red; font-style: 40px; "id="aaa"></span><br>
</div>

  <!-- home -->
  <div class="cal text-center">
  	<div class="home">
  <h5><p>Menghitung Luas dan volume pada Permukaan dari Silinder, Kerucut dan Bola.</p></h5> 
</div>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h2>Silinder</h2>
      <p> </p>
      <p> </p>
      <div class="description">
        <label>Masukkan Jari-Jari Silinder:</label>  
          <input type="text" id="jariSilinder"><br><br>
           <label>Masukkan Tinggi Silinder:</label>
               <input type="text" id="tinggiSilinder"><br><br>
            <button class = "btn_hitung" onclick="permukaanSilinder(), volumeSilinder()">Process</button>
        <h4><p>Hasil Perhitungan</p></h4>
        <p>Luas Permukaan: <span id="hasilPermukaan_Silinder"></span> m<sup>2</sup></p>
        <p>Volume: <span id="hasilVolume_Silinder"></span> m<sup>3</sup></p>
        </div>
    </div>
    <div class="col-sm-4">
    <div class="kerucut">	
      <h2>Kerucut</h2>
      <p> </p>
      <p> </p>
       <div class="kerucut">
            <label>Masukkan Jari-Jari Kerucut:</label>
                 <input type="text" id="jariKerucut"><br><br>
            <label>Masukkan Garis Pelukis Kerucut:</label>
                  <input type="text" id="pelukisKerucut"><br><br>
            <label>Masukkan Tinggi Kerucut:</label>
                  <input type="text" id="tinggiKerucut"><br><br>
              <button class = "btn_hitung" onclick="permukaanKerucut(), volumeKerucut()">Process</button>
         <h4><p>Hasil perhitungan</p></h4>
         <p>Luas Permukaan: <span id="hasilPermukaan_Kerucut"></span> m<sup>2</sup></p>
         <p>Volume: <span id="hasilVolume_Kerucut"></span> m<sup>3</sup></p>
       </div>
    </div>       
    </div>
    <div class="col-sm-4">
    <div class="bola">	
      <h2>Bola</h2> 
      <p> </p>
      <p> </p>      
      <label>Masukkan Jari-Jari Bola:</label>
        <input type="text" id="jariBola"><br><br>
            <button class = "btn_hitung" onclick="permukaanBola(), volumeBola()">Process
            </button>
                <h4><p>Hasil perhitungan</p></h4>
                    <p>Luas permukaan: <span id="hasilPermukaan_Bola"></span> m<sup>2</sup></p>
                    <p>Volume: <span id="hasilVolume_Bola"></span> m<sup>3</sup></p>
                    </div>
    </div>                
    </div>
  <!-- footer-->
  <footer>
    <div class="footer">
      <center><small>Copyright &copy; 2021 - Muhamat Taufik. All rights Reserved.</small></center>
    </div>
  </footer>

  <script type="text/javascript">
    $(document).ready(function(){
      $(".bg-loader").hide();
    })
  </script>
</body>
    <script>
        function permukaanSilinder() 
        {       
            var r = document.getElementById('jariSilinder').value;
            var t = document.getElementById('tinggiSilinder').value;

            var hasil = 2*Math.PI*r*r+2*Math.PI*r*t;
            document.getElementById('hasilPermukaan_Silinder').innerHTML = hasil.toFixed(2);
        }
    function volumeSilinder() 
        {       
            var r = document.getElementById('jariSilinder').value;
            var t = document.getElementById('tinggiSilinder').value;

            var hasil = Math.PI*(r*r)*t;
            document.getElementById('hasilVolume_Silinder').innerHTML = hasil.toFixed(2);
        }

        function permukaanKerucut() 
        {
            var r = document.getElementById('jariKerucut').value;
            var pelukis = document.getElementById('pelukisKerucut').value;
            var t = document.getElementById('tinggiKerucut').value;

            var hasil = Math.PI*r*r+Math.PI*r*pelukis;
            document.getElementById('hasilPermukaan_Kerucut').innerHTML = hasil.toFixed(2);
        }

        function volumeKerucut() 
        {
            var r = document.getElementById('jariKerucut').value;           
            var t = document.getElementById('tinggiKerucut').value;

            var hasil = (1/3)*Math.PI*(r*r)*t;
            document.getElementById('hasilVolume_Kerucut').innerHTML = hasil.toFixed(2);
        }
         function permukaanBola() 
        {
            var r = document.getElementById('jariBola').value;

            var hasil = 4*Math.PI*r*r;
            document.getElementById('hasilPermukaan_Bola').innerHTML = hasil.toFixed(2);
        }

        function volumeBola() 
        {
            var r = document.getElementById('jariBola').value;

            var hasil = 4/3*Math.PI*r*r*r;
            document.getElementById('hasilVolume_Bola').innerHTML = hasil.toFixed(2);
        }
      </script>
</html>
