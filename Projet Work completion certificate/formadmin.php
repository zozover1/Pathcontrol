<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>
<body style="background-color: #252525;">
<?php 
// Liste des documents disponibles en téléchargement
$scandir = scandir("forms");

// Traitement du formulaire si $_GET non vide. 
if (! empty($_GET))
{
	// Récupére l'identifiant du document. 
	$iIdFile = $_GET["id"]; 
	// En déduire le nom du document. 
	$sFilename = $scandir[$iIdFile];
	// Envoye le document. 
	unlink("forms/".$sFilename);
    $delai = 0; 
    $url = '../formadmin.php';
    header("Refresh: $delai;url=$url");
}


?>
<div class="mx-auto card border-success m-3 rounded-3 border-3" style="width: 50%;">
    <table class="table table-light table-striped table-hover">
        <thead class='table-primary'>
            <tr>
                <th><i class="bi bi-dash-circle"></i></th>
                <th scope='col'>WCC list on the server</th>
            </tr> 
        </thead>
    <tbody>
    <?php 

    // Parcours la liste des documents et utilise le nom 
    // pour l'affichage et l'identifiant dans l'URL. 
    foreach($scandir as $iIdFile => $scandir)
    { 
        if(substr(strtolower($scandir),-4,4)==".php"){

		    echo "<tr>
            <td><i class='bi bi-dash-circle-dotted'> <a href=forms/".$scandir.">".$scandir."</a></td>
            <td align='center'><a class=\"btn btn-danger\" role=\"button\" href=\"formadmin.php?id=$iIdFile\">delete</a></td>
            </tr>";
            
        }
    } 

    ?> 
    </tbody>
    </table>
</div>
</body>
</html>