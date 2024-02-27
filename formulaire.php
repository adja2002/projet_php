<!DOCTYE html>
<html>
    <head>
        <title>FORMULAIRE</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="StyleF.css ? t= <?php echo time ();?>"/>
    </head>
    <body>
	<?php
	    
	?>
        <h3>EXEMPLE DE FORMULAIRE</h3>
		  <div id="ajouterp">
            <form method="post" action="traitement.php" enctype="multipart/form-data">
            
                    <p>
                    <label for="no" >nom</label>
                    <input type="text" name="nom" id="no"/>
                    </p>
                     <p>
                    <label for="preno" >prenom</label>
                    <input type="text" name="prenom" id="preno"/>
                    </p>
                     <p>
                    <label for="datenais"> date</label>
                    <input type="date" name="datenaiss" id="datenais"/>
                    </p>
                    <p>
                    <label class="label">sexe</label>
                    <label for="m">m</label>
                    <input type="radio" checked name="sex" id="m" value="masculin"/>
                    <label for="f">f</label>
                     <input type="radio" name="sex" id="f" value="feminin"/>
                     </p>
       
                    <label class="label">cycle</label>
                    <select name="cycle">
                        <optgroup label="licence">
                            <option value="licence 1">licence1</option>
                            <option value="licence 2">licence2</option>
                            <option value="licence 3">licence3</option>
                        </optgroup>
                        <optgroup label="master">
                            <option value="master 1">master1</option>
                            <option value="mmaster 2">master2</option>
                        </optgroup>
                        <optgroup label="doctorat">
                            <option value="doctorat">doctorat</option>
                        </optgroup>
						
                    </select>
					<p>
					<label> photo</label>
						<input type="file" name="photo" accept="image/*">
						</p>
                      <p>
					     <label> photos</label>
						 <input type="file" name="photos[]" accept="image/*" multiple="multiple"/>
						 
					  </p>
              
                    <label>Option </label>
                    <label for="sir">SIR</label>
                    <input type="checkbox" name="ir[]" id="sir" value=" SIR">
                    <label for="sir">BI</label>
                    <input type="checkbox" name="ir[]" id="sir" vaLue="BI">
                    <label for="sir">RETEL</label>
                    <input type="checkbox" name="ir[]" id="sir" value="RETEL">
                
                <textarea name="com" cols="50" rows="15">ce-ci est un commentaire </textarea>
               
                    <p>         <input type="submit" value="envoyer" name="en">                  
					<input type="reset" value="annuler" name="an"></p>
                   <textarea name=decription rows="8" cols="50"> </textarea>
            
            </form> 
            			
    </body>
</html>