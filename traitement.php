<!doctype html>
<html>
 <head>
       <link rel="stylesheet" href="StyleF.css ? t= <?php echo time ();?>"/>
 </head>
<body>
    <?php
	   echo "<h3> infos requis</h3>";
	    if(isset($_POST['nom']))
		{
			echo "Nom :\n".$_POST['nom'];
		}
		echo "<br/>";
		if (isset($_POST['prenom'])){
			echo "Prenom :\n".$_POST['prenom'];
		}
		echo "<br/>";
		if(isset($_POST['datenaiss'])){
			echo "datenaiss :\n".$_POST['datenaiss'];
		}
		echo "<br/>";
		if(isset($_POST['sex'])){
			echo "Sexe :\n".$_POST['sex'];
	    }
		echo "<br/>";
		if(isset($_POST['com'])){
			echo $_POST['com'];
		}
		echo "<br/>";
		   $choix= $_POST['ir'];
		   foreach ($choix as $ir){
		    echo "option :\n"."$ir <br>";
		   }
		   if(isset($_POST['cycle'])){
			   $a=$_POST['cycle'];
			   echo "cycle :\n". $_POST['cycle'];
		   }
		   echo"<br/>"; if(isset($_FILES['photo'])){
		   if(isset($_FILES['photo'])){
			   echo $_FILES['photo']['error'];
			  $extensions_ok=array('jpeg','jpg','png');
			   if(($_FILES['photo']['error']==0)){
				   echo"<br/>";
			   echo "transmission avec succes";
			    echo"<br/>";
			   echo "nom :\n". $_FILES['photo']['name'];
			   echo"</br>";
			   echo $_FILES['photo']['tmp_name'];
			     echo"</br>";
			    echo "taille :\n".$_FILES['photo']['size'];
				  echo"</br>";
				  $extension_fichier=strtolower(substr(strrchr($_FILES['photo']['name'],'.'),1));
				  if($extension_fichier=$extensions_ok)
				  {
					  echo "<br/>extension valide";
				  }
				  else{
					  echo "<br/> echec";
				  }
				  echo"<br/>";
				  if(move_uploaded_file(
					  $_FILES['photo']['tmp_name'],$_FILES['photo']['name'])){
						echo" deplacement ok";
						  
					  }
					  else{
						  echo"deplacement ko";
					  }
					  echo"<br/>";
					  $im=$_FILES['photo']['name'];
					  echo"<img src='$im'/>";
			   }
			   
			   else
			   { 
		            echo" erreur de transmission";
			   }
		   }
		   /*
		       if(isset($_FILES['photos'])){
				 
				   echo"<br/>";
				   $n=count( $_FILES["photos"]["name"] );
				   for($i=0;$i<$n;$i++){
					    echo $nom= $_FILES["photos"]["name"][$i];
						 echo"<br/>";
						 echo $tmpnom= $_FILES["photos"]["tmp_name"][$i];
						 echo "</br>";
				   }
			   }
		   }
		   */
		   if(isset ($_FILES['photos'])){
			   
			   
			   echo"<br/>";
			   $n=count( $_FILES["photos"]["name"] );
			   $extensions_ok=array('jpg','jpeg','png');
			   for($i=0;$i<$n;$i++){
				   echo"<br/>";
				   echo "nom: ".$nom= $_FILES["photos"]["name"][$i];
						 echo"<br/>";
						 echo "nom temporaire: ".$tmpnom= $_FILES["photos"]["tmp_name"][$i];
						 echo "</br>";
						 echo "taille: ".$taille=$_FILES['photos']['size'][$i];
						 $extension_fichier=strtolower(substr(strrchr($_FILES['photos']['name'][$i],'.'),1));
						  if(in_array($extension_fichier,$extensions_ok))
						  {
							  echo"<br/> extension correct";
							  
							  if(move_uploaded_file($_FILES['photos']['tmp_name'][$i],$_FILES['photos']['name'][$i]))
							  {
								  echo"<br/> le deplacement est ok";
							  }
						  else 
						  {
							  echo "<br/> echec";
						  }
						  $imgs=$_FILES['photos']['name'][$i];
						  echo "<br/> <img src='$imgs'/>";
						  }
						  else{
							  echo"<br/> l'extension n'est pas correct";
						  }
				   
			   }
			   
		   }
		   }
?>
		   
</body>
</html>