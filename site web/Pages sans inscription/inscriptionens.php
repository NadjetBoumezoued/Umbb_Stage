
<html>
<head><title>UMBB Stage</title>
	<meta name="viewport" content="width=device-width">
<link rel="stylesheet" type="text/css" href="inscription.css">
<script type="text/javascript">
 	window.addEventListener('mouseup',function(event)
 	{
 		var box =document.getElementById('box1');
 		var input =document.getElementById('cnxinput');
 		if (event.target != box && event.target.parentNode != input && event.target.parentNode != box)
 		 {
 		 	box.style.display ='none' ;
 	     }
 	});
 </script>
<body>
	
	<header>
	<img src="capture123.png" class="header">
	<nav>
		<div class="menu" >
			<img src="logo.png" class="logo">
			<div class="slogo">
				Stage pour l'université<br> de Boumerdes
				</div>
				<ul>
				<li><a href="page acceuil.html">Acceuil<span></span><span></span></a></li>
				<li><a href="conseil.html">Conseils<span></span><span></span></a></li>
			    </ul>
		</div>
	</nav>
	
</header>
	<!---------------------------compte------------->
<section>
	<aside>
<div class="connexion-div">
<!----------------------------------------------cnx--------------------------------------------->

				<button class="menu-text-cnx" onclick="document.getElementById('box1').style.display='block'">Connexion</button>
			</div>
		</div>
	</nav>
			
		</div>
	</aside>
</section>
</header>

<!-----------------------------------------------------------------------menu1----------------->


<!----------------menu3----------------------------------------------------->
<section>
	<div class="menu3">

	<div class="dernier-chemin">
		<a>Inscription ensignant  </a>
	</div>
	<div class="menu3-rectangle-a">
		<a href="forum.html">Acceuil</a>
	</div>

	<div class="menu3-triangle-a-blanc">
		
	</div>

	<div class="menu3-triangle-a">	
	
	</div>
	
</div>

</section>
<!---inscription -------------------------------------------------------------------------------------------------------->

<!---inscription -------------------------------------------------------------------------------------------------------->
<div class="new" >
	<div class="table-choix">
		<br>
	 	<h1 align="center">Inscription</h1>
	 	<br><br>
	 	<div class="etd1" >
	 		<a href="inscritionen.html" >Etudiant</a>
	 	</div>
	 	<div class="etd2">
	 	    <a href="inscritionentr.html">Ensignant</a>
	 	</div>	
	 	<form method="GET" action="inscriptionens.php">
	 	<div class="inputtab">
	 	<input type="text" name="email" required="">
	 	<label>Email proffessionel</label>
	 	</div>
	 	<br>
	 	<div class="inputtab">
	    <input type="text" name="domaine" required="">
	     <label>Domaine</label>
	     </div>
	     <br>
	     <div class="inputtab">
	    <input type="password" name="password" required="" ><label>Mot de passe </label>
	    </div>
	    <br>
	    <div class="inputtab">
	     <input type="password" name="password2" required="">
	    <label>Confirmer mot de passe</label>
	  </div>
<?php
$cnx=mysqli_connect("localhost","root","","projet");
//connexion
if($cnx)/*ilaa conecta m3a bdd*/ 
{
if(isset($_GET['submit']))/*ila clika 3la submit*/ 
{
  	$email=$_GET['email'];//copili l matricule li tapaha f had la var 
  	$domaine=$_GET['domaine'];
   	$password=sha1($_GET['password']);//sha1 pr tcripti l mdp
	$password2=sha1($_GET['password2']);
	if (!empty($domaine)&&!empty($password)&&!empty($email)&&!empty($password2))//ila tapa matr w mot de pass 
   	{    
		$re="select email  from ensignant where email='$email'";//rqt sql 
     	$resu=$cnx->query($re);
     	$row=mysqli_num_rows($resu);
     	

     	if($row==0)
     	{
     	 	echo"<font color='red'><h3 align='center'>Vous devez etre etudiants de l umbb pour creer un compte </h3></font>";
        } 
         
        else
        {
      
        	if ($password!=$password2)
   			{
				echo"<font color='red'><h3 align='center'>Les deux mot de passes doivent etre identiques</h3></font>";
			}
			else
			{
				$req="insert into inscriptionens(email,domaine,password,password2)
					values('$email','$domaine','$password','$password2')";
     			$insert=$cnx->query($req);//valider la rqt 
     			if($insert)
     			{
					header('location:offre.php');
	    		}
	    	}

	    }
	}
}
}
?>
 <br><br><br>
	    <input class="Envoyer" type='submit' value='creer mon compte' name='submit'>
	    </form>
	 </div>
</div>

<!--footer------------------------------------------------------------------------------------------------------------------------->
<div id="box1">
	<h2 style="margin: 0 0 30px;padding: 0;color:#10205F; text-align:center;">Connexion</h2>
		<form>
			<div id="cnxinput" >
				<input type="text" name="" required="">
				<label>Matricule</label>
			</div>
			<br>
			<div id="cnxinput">
				<input type="password" name="" required="">
			    <label>Mot de passe</label>
			</div>
			<br>
			Mot de passe oublier ?
			<br><br>
				<input type="submit" name="" value="Connexion" id="sub"> &nbsp; &nbsp; &nbsp;
					
			<br>
		<h4 align="center" >Vous n'avez pas un compte ? </h3>
							<br>
		    	<div class="etd" style="background-color:#13AA13;">
	 	         <a href="inscriptionetd.html">Inscription</a>
	 	         </div>	</form>	
		    	</div>
<footer>
	<div id="footer">
		<table bgcolor=#002261>
			<tr>
				<td width="350">
					<img src="logo.png" class="logo-footer">
				</td>
				<td width="300px">
				<br>
			         <b>Etudiant</b><br><br>
			        <a href="inscriptionetd.html">Consulter les offres </a><br>
					<a href="inscriptionetd.html">Choisir un stage</a><br>
					<a href="inscriptionetd.html">Participer au forum</a><br>
					<a href="inscriptionetd.html">Les offres enregistrés</a>
				</td>
				<td width="300px">
					<br>
					<b>Ensignant</b><br><br>
					 <a href="inscritionentr.html">Consulter les offres </a><br>
					<a href="inscritionentr.html">Proposer un sujet</a><br>
					<a href="inscritionentr.html">Participer au forum</a><br>
					<a href="inscritionentr.html">Les offres enregistrés</a>
				</td>
				<td width="400px">
			<br>
					<b>Conseils</b><br><br>
					<a href="conseiln.html">Aspect juridique et legal du stage</a><br>
					<a href="conseil1n.html">La recherche de stage</a><br>
					<a href="conseil7n.html">La reussite de stage </a><br>
					<a href="conseil5n.html">Le rapport de stage</a>
				</td>

			</tr>
			<tr>
				<td colspan="4" align="center">
					<br><br><hr align="center" width="1200px" >
			<br>
					<img id="rx"src="facebook.png">
					<img id="rx"src="twiter.png">
					<img id="rx"src="in.png">
					<img id="rx"src="youtube.png">
			<br><br>
					<a href="">2019 all copy right reserved</a>
				</td>
			</tr>
		</table>			
	</div>
</footer>
</body>
</html>