<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
	<title>Web sitem</title>

</head>

<body>


	<nav class="navbar navbar-expand-md fixed-top 
	bg-warning navbar-white ">

		<div class="container">
		
			<a href="hakkımda.html" class="navbar-brand text-white">
	  		  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hearts" viewBox="0 0 16 16">
				<path fill-rule="evenodd" d="M4.931.481c1.627-1.671 5.692 1.254 0 5.015-5.692-3.76-1.626-6.686 0-5.015Zm6.84 1.794c1.084-1.114 3.795.836 0 3.343-3.795-2.507-1.084-4.457 0-3.343ZM7.84 7.642c2.71-2.786 9.486 2.09 0 8.358-9.487-6.268-2.71-11.144 0-8.358Z"/>
			  </svg>
	  		   ASLI KIZILASLAN
	      	</a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
				<span class="navbar-toggler-icon"><i class="fas fa-ellipsis-v"></i></span>
			</button>

			<div id="navbarCollapse" class="collapse navbar-collapse">
				<ul class="navbar-nav ml-auto ">

					<li class="nav-item">
						<a href="hakkımda.html" class="nav-link active  text-white">
	      				Anasayfa
	      				</a>
                    </li>

					<li class="nav-item">
						<a href="ozgecmis.html" class="nav-link active  text-white">
	      				Özgeçmiş
	      				</a>
                    </li>

	      			<li class="nav-item">
						<a href="sehrim.html" class="nav-link active  text-white">
	      				sehrim
	      				</a>
                    </li>	

					<li class="nav-item">
						<a href="mirasimiz.html" class="nav-link active  text-white">
	      				Mirasımız
	      				</a>
                    </li>

                    <li class="nav-item">
                         <a href="ilgialanlarim.html" class="nav-link active  text-white">
                             ilgi alanlarım
                         </a>
                     </li>	

	      			<li class="nav-item">
						<a href="iletisim.html" class="nav-link active  text-white">
	      				İletişim
	      				</a>
                    </li>

	      			<li class="nav-item">
						<a href="login.php" class="nav-link active  text-white">
	      				<i class="fas fa-sign-in-alt"></i>
	      				</a>
                    </li>	
                          
                
                   
				</ul>
			</div>

		</div>
	</nav>
	

	<header>

		<div class="bg-info text-light jumbotron">

			<div class="container">

				<div class="col-md-20 px-">
					<h1 class="display-7"> <i class="Fas fa-icons"></i>		giriş ekranı

					</h1>
					
				</div>

			</div>

		</div>

	</header>
    <main>

<div class="container">
    
    <?php 

        include("kullanicilar.php");


        if (($_POST["email"] == $user) and ($_POST["password"] == $pass))
        {
           $_SESSION["login"] = "true";
           $_SESSION["user"] = $user;
           $_SESSION["pass"] = $pass;
    
           echo("SİTEYE GİRİŞ YAPTINIZ HOŞGELDİNİZ !!");
    
        }
    
        else 
        {
                echo "Kullancı Adı veya Şifre Yanlış.<br>";
                echo "!!!TEKRAR DENEYİN!!!";
                header("Refresh: 1; url=login.php");
        }
    
    ?>
    
</div>

</main>


<footer class="py-5 bg-info text-white text-center">
Web-Teknolojileri-Projesi
</footer>

<!-- BOOTSTRAP -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>




</body>

</html>