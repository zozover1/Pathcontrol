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
$scandir = scandir("WCC");

// Traitement du formulaire si $_GET non vide. 
if (! empty($_GET))
{
	// Récupére l'identifiant du document. 
	$iIdFile = $_GET["id"]; 
	// En déduire le nom du document. 
	$sFilename = $scandir[$iIdFile]; 
	// Envoye l'entête d'attachement. 
	$header  = "Content-Disposition: attachment; "; 
	$header .= "filename=$sFilename\n" ; 
	header($header); 
	// Envoye l'entête du type MIME (ici, "inconnu"). 
	header("content-type: application/force-download" );
  header("Cache-Control: no-cache") ;
	// Envoye le document. 
  ob_clean();
	readfile("WCC/".$sFilename);
}


?>
<div class="mx-auto card border-success m-3 rounded-3 border-3" style="width: 50%;">
<table class='table table-light table-striped table-hover'>
        <thead class='table-primary'>
            <tr align='center'>
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
        if(substr(strtolower($scandir),-4,4)==".pdf" || substr(strtolower($scandir),-5,5)==".docx"){

		    echo "
            <tr>
            <td><i class='bi bi-dash-circle-dotted'></i></td>
            <td><a href=\"list_form.php?id=$iIdFile\">".$scandir."</a></td>
            </tr>";
        }
    } 

    ?> 
    </tbody>
    </table>
</div>
</body>
</html>