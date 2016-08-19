<!DOCTYPE html>
<html>

<head>
    
    <meta charset="utf-8"/>
    <title>Projet_etude_demo_github</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    
</head>


    
<body>
<div class="bloc_sinscrire">    

<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->
<!--        LE BLOC INPUT                                                -->
<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->

<div class="zonesinscrire">
<p>Pour vous inscrire, renseignez les champs ci-dessous et cliquer sur envoyer.</p><br/>
    
    <form action="traitement_sinscrire.php" method='post'>

        <input type="text" name="nom_candidat" placeholder="Nom"><br/>
        <input type="text" name="prenom_candidat" placeholder="Prenom"><br/>
        <input type="text" name="email_candidat" placeholder="email"><br/>
       
        <input type="submit" value="Envoyer">
    
      
        
    </form>

</div>  <!-- fin zonesinscrire -->

</div>    <!-- fin zone bloc_sisncrire -->

</body>    
</html>