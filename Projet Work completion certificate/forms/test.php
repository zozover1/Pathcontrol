
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
    <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js'></script>
    <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>
<body style='background-color: #252525;'>
<div class='embed-responsive embed-responsive-4by3' style='width: 50%; position: relative; margin: 0 auto;'>
<iframe id='google' class='embed-responsive-item' src='https://docs.google.com/forms/d/e/1FAIpQLSe20KQbdNmUgI6OaAbpmW7kQGaR-HNEMjb7_aJnNisz4K4Kkg/viewform?usp=sf_link'>Chargement…</iframe>
</div>
<p>coucou</p><p>coucou</p><p>coucou</p><p>coucou</p><p>coucou</p><p>coucou</p><p>coucou</p><p>coucou</p><p>coucou</p><p>coucou</p><p>coucou</p><p>coucou</p><p>coucou</p><p>coucou</p><p>coucou</p><p>coucou</p><p>coucou</p><p>coucou</p><p>coucou</p><div id='gg'><p>coucou</p></div>
<script>document.getElementById('google').style.display = 'none';</script>
</body>
</html>
<script>
document.querySelector("iframe").addEventListener( "load", function(e) {

console.log(e.target);
if(document.getElementById('google').style.display == 'none'){
  document.getElementById('google').style.display = 'block'
}else{
  document.getElementById('google').style.display = 'none';
  document.getElementById('gg').scrollIntoView();
}
} );
</script>