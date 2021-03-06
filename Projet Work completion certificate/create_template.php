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
$titre = $_POST['titre'];
$url = $_POST['url'];
$check = $_POST['exampleCheck1'];
$chemin = getcwd();
$verif_url = strtolower($url);
$verif_url = substr("$verif_url", 0, 8);
$docname = strtolower($titre);
$docname = str_replace(" ","_",$docname);
print("<div class='mx-auto card border-success m-3 rounded-3 border-3' style='width: 50%;'>
    <table class='table table-light table-striped table-hover'>
        <thead class='table-success'>
            <tr align='center'>
                <th><i class='bi bi-check-circle'></i></th>
                <th scope='col'>New form created with success !!!</th>
            </tr> 
        </thead>
    <tbody>
    <tr>
        <td>Title</td>
        <td>".$titre."</td>
    </tr>
    <tr>
        <td>Website</td>
        <td><a href=\"../forms/$docname.php\">$docname.php</a></td>
    </tr>
    <tr>
        <td>URL</td>
        <td><a href=\"$url\">$url</a></td>
    </tr>
    </tbody>
    </table>
    <a href='formadmin.php' class='btn btn-primary'>Click here to see the list of forms</a>
</div>");
if (isset($check)){
    $myfile = fopen("forms/".$docname.".php", "w") or die("Unable to open file!");
    $txt = "
    <!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Document</title>
    </head>
    <body style='background-color: #252525;'>
    <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js'></script>
    <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
    
        <div id='divgoogle' style='width: 50%; position: relative; margin: 0 auto;'>
            <iframe id='google' class='embed-responsive-item' src=\"$url\">Chargement???</iframe>
        </div>
        <div id='gg' class='container' style='width: 50%; position: relative; margin: 0 auto;margin-top: 5%;background:white;'>
<form method='post' action='../vendor/tecnickcom/tcpdf/examples/example_052.php' class='m-3'>
    <h1 style='text-align: center;'>Work Completion Certificate</h1><hr>
    <h3 style='text-align: center;'>Certificate Initial</h3>
    <div class='form-group'>
        <label for='Day'>Day</label>
        <select class='form-control' id='Day' name='Day'>
  <option>Monday</option>
  <option>Tuesday</option>
  <option>Wednesday</option>
  <option>Thursday</option>
  <option>Friday</option>
  <option>Saturday</option>
  <option>Sunday</option>
</select>
    </div>
    <div class='form-group'>
        <label for='Date'>Date</label>
        <input type='date' class='form-control' id='Date' name='Date' required pattern='[0-9]{4}-[0-9]{2}-[0-9]{2}'>
    </div>
    <div class='form-group'>
        <label for='Place'>Place</label>
        <input type='text' class='form-control' name='Place' id='Place' placeholder='City..'>
    </div><hr>
    <h3 style='text-align: center;'>Contractor Information</h3>
    <div class='form-group'>
        <label for='Gender'>Mr/Ms</label>
        <select class='form-control' id='Gender' name='Gender'>
  <option>Mr</option>
  <option>Ms</option>
</select>
    </div>
    <div class='form-group'>
        <label for='Name'>Name</label>
        <input type='text' class='form-control' name='Name' id='Name' placeholder='Your Last Name..'>
    </div>
    <div class='form-group'>
        <label for='Position'>Position in the company</label>
        <input type='text' class='form-control' name='Position' id='Position' placeholder='Your position in the company..'>
    </div>
    <div class='form-group'>
        <label for='Company'>Company Name</label>
        <input type='text' class='form-control' name='Company' id='Company' placeholder='Type Here..'>
    </div>
    <div class='form-group'>
        <label for='Street'>Street Adress</label>
        <input type='text' class='form-control' name='Street' id='Street' placeholder='Type Here..'>
    </div>
    <div class='form-group'>
        <label for='City'>City</label>
        <input type='text' class='form-control' name='City' id='City' placeholder='Type Here..'>
    </div>
    <div class='form-group'>
        <label for='ZIP'>ST ZIP Code / Postal Code</label>
        <input type='text' class='form-control' name='ZIP' id='ZIP' placeholder='Type Here..'>
    </div>
    <div class='form-group'>
        <label for='Phone'>Phone</label>
        <input type='text' class='form-control' name='Phone' id='Phone' placeholder='Type Here..'>
    </div>
    <div class='form-group'>
        <label for='Email'>Email</label>
        <input type='email' class='form-control' name='Email' id='Email' placeholder='Type Here..'>
    </div><hr>
    <h3 style='text-align: center;'>Project Information</h3>
    <div class='form-group'>
        <label for='Project'>Project Name</label>
        <input type='text' class='form-control' name='Project' id='Project' placeholder='Type Here..'>
    </div>
    <div class='form-group'>
        <label for='Purpose'>What was the purpose of the project in one line ?</label>
        <input type='text' class='form-control' name='Purpose' id='Purpose' placeholder='Type Here..'>
    </div>
    <div class='form-group'>
        <label for='Description'>Project Description</label>
        <textarea class='form-control' maxlength='500' rows='3' name='Description' id='Description' placeholder='More Detail Here..'></textarea>
    </div>
    <div class='form-group'>
        <label for='BDate'>Project Begin Date</label>
        <input type='date' class='form-control' id='BDate' name='BDate' required pattern='[0-9]{4}-[0-9]{2}-[0-9]{2}'>
    </div>
    <div class='form-group'>
        <label for='CDate'>Completion Date</label>
        <input type='date' class='form-control' id='CDate' name='CDate' required pattern='[0-9]{4}-[0-9]{2}-[0-9]{2}'>
    </div><hr>
    <p>By clicking submit you acknowledge and confirm that you have read, understand and accept the above 
  <a class='btn' data-toggle='modal' href='#myModal2'>terms and conditions</a> and <a class='btn' data-toggle='modal' href='#myModal3'>privacy policy</a>.</p>
        <button type='submit' class='btn btn-outline-success form-control'>Submit</button>
</form>
</div>
        <div class='container'>
      <!-- Trigger the modal with a button -->
    
      <!-- Modal -->
      <div class='modal fade' id='myModal2' role='dialog'>
        <div class='modal-dialog'>
        
          <!-- Modal content-->
          <div class='modal-content'>
            <div class='modal-header'>
              <button type='button' class='close' data-dismiss='modal'>&times;</button>
              <h4 class='modal-title'>Conditions g??n??rales d'utilisation du site PathControl</h4>
            </div>
            <div class='modal-body'>
              <p>Pr??ambule
Les pr??sentes conditions g??n??rales d'utilisation sont conclues entre :
- le g??rant du site internet, ci-apr??s d??sign?? ?? l'??diteur ??,
- toute personne souhaitant acc??der au site et ?? ses services, ci-apr??s appel?? ?? l'Utilisateur ??.
</p>
<p>Article 1 - Principes
Les pr??sentes conditions g??n??rales d'utilisation ont pour objet l'encadrement juridique de l'utilisation du site PathControl et de ses services
Le site Internet www.pathcontrol.com est un service de :
La soci??t?? PathControl
situ??e 57 rue de Turbigo
75003-Paris France
adresse URL du site : www.pathcontrol.com
??? e-mail: admin@pathcontrol.com
num??ro de t??l??phone : 01 53 16 49 97
Les conditions g??n??rales d'utilisation doivent ??tre accept??es par tout Utilisateur, et son acc??s au site vaut acceptation de ces conditions.
</p>
<p>Article 2 - Evolution et dur??e des CGU
Les pr??sentes conditions g??n??rales d'utilisation sont conclues pour une dur??e ind??termin??e. Le contrat produit ses effets ?? l'??gard de l'Utilisateur ??
compter du d??but de l'utilisation du service.
Le site PathControl se r??serve le droit de modifier les clauses de ces conditions g??n??rales d'utilisation ?? tout moment et sans justification.
</p>
<p>Article 3 - Acc??s au site
Tout Utilisateur ayant acc??s ?? internet peut acc??der gratuitement et depuis n'importe o?? au site PathControl. Les frais support??s par l'Utilisateur
pour y acc??der (connexion internet, mat??riel informatique, etc.) ne sont pas ?? la charge de l'??diteur.
Le site et ses diff??rents services peuvent ??tre interrompus ou suspendus par l'??diteur, notamment ?? l'occasion d'une maintenance, sans obligation
de pr??avis ou de justification.
L'Utilisateur du site a acc??s aux services suivants : Questionnaire client
</p>
<p>Article 4 - Responsabilit??s
La responsabilit?? de l'??diteur ne peut ??tre engag??e en cas de d??faillance, panne, difficult?? ou interruption de fonctionnement, emp??chant l'acc??s au
site ou ?? une de ses fonctionnalit??s.
Le mat??riel de connexion au site utilis??e est sous l'enti??re responsabilit?? de l'Utilisateur qui doit prendre toutes les mesures appropri??es pour
prot??ger le mat??riel et les donn??es notamment d'attaques virales par Internet. L'utilisateur est par ailleurs le seul responsable des sites et donn??es
qu'il consulte.
L'??diteur ne pourra ??tre tenu responsable en cas de poursuites judiciaires ?? l'encontre de l'Utilisateur :
- du fait de l'usage du site ou de tout service accessible via Internet ;
- du fait du non-respect par l'Utilisateur des pr??sentes conditions g??n??rales.
L'??diteur n'est pas responsable des dommages caus??s ?? l'Utilisateur, ?? des tiers et/ou ?? l'??quipement de l'Utilisateur du fait de sa connexion ou de
son utilisation du site et l'Utilisateur renonce ?? toute action contre l'??diteur de ce fait.
Si l'??diteur venait ?? faire l'objet d'une proc??dure amiable ou judiciaire ?? raison de l'utilisation du site par l'Utilisateur, il pourra retourner contre
lui pour obtenir indemnisation de tous les pr??judices, sommes, condamnations et frais qui pourraient d??couler de cette proc??dure.
</p>
<p>Article 5 - Propri??t?? intellectuelle
Tous les documents techniques, produits, photographies, textes, logos, dessins, vid??os, etc., sont soumis ?? des droits d'auteur et sont prot??g??s par
le Code de la propri??t?? intellectuelle. Lorsqu'ils sont remis ?? nos clients, ils demeurent la propri??t?? exclusive de PathControl , seul titulaire des
droits de propri??t?? intellectuelle sur ces documents, qui doivent lui ??tre rendus ?? sa demande.
Nos clients s'engagent ?? ne faire aucun usage de ces documents, susceptible de porter atteinte aux droits de propri??t?? industrielle ou intellectuelle
du fournisseur et s'engagent ?? ne les divulguer ?? aucun tiers, en dehors d'une autorisation expresse et pr??alable donn??e par l'Editeur.
</p>
<p>Article 6-Liens hypertextes
La mise en place par l'Utilisateur de tous liens hypertextes vers tout ou partie du site est strictement interdite, sauf autorisation pr??alable et ??crite
de l'??diteur, sollicit??e par courriel ?? l'adresse suivante christine.pastor@pathcontrol.com
L'??diteur est libre de refuser cette autorisation sans avoir ?? justifier de quelque mani??re que ce soit sa d??cision. Dans le cas o?? l'??diteur
accorderait son autorisation, celle-ci n'est dans tous les cas que temporaire et pourra ??tre retir??e ?? tout moment, sans obligation de justification ?? la
charge de l'Editeur.
Dans tous les cas, tout lien devra ??tre retir?? sur simple demande de l'Editeur.
Toute information accessible via un lien vers d'autres sites n'est pas sous le contr??le de l'??diteur qui d??cline toute responsabilit?? quant ?? leur
Contenu
</p>
<p>Article 7 - Protection des donn??es personnelles
Donn??es collect??es
Les donn??es ?? caract??re personnel qui sont collect??es sur ce site sont les suivantes :
- ouverture de compte : lors de la cr??ation du compte de l'utilisateur : nom; pr??nom; adresse ??lectronique; n?? de t??l??phone; adresse postale :
- connexion : lors de la connexion de l'utilisateur au site web, celui-ci enregistre, notamment, ses nom, pr??nom, donn??es de connexion,
d'utilisation, de localisation et ses donn??es relatives au paiement ;
- profil : l'utilisation des prestations pr??vues sur le site web permet de renseigner un profil, pouvant comprendre une adresse et un num??ro de
t??l??phone ;
- paiement : dans le cadre du paiement des produits et prestations propos??s sur le site web, celui-ci enregistre des donn??es financi??res relatives au
compte bancaire ou ?? la carte de cr??dit de l'utilisateur ;
- communication : lorsque le site web est utilis?? pour communiquer avec d'autres membres, les donn??es concernant les communications de
l'utilisateur font l'objet d'une conservation temporaire
- cookies : les cookies sont utilis??s, dans le cadre de l'utilisation du site. L'utilisateur a la possibilit?? de d??sactiver les cookies ?? partir des
param??tres de son navigateur.
Utilisation des donn??es personnelles
Les donn??es personnelles collect??es aupr??s des utilisateurs ont pour objectif la mise ?? disposition des services du site web, leur am??lioration et le
maintien d'un environnement s??curis??. Plus pr??cis??ment, les utilisations sont les suivantes :
acc??s et utilisation du site web par l'utilisateur ;
- gestion du fonctionnement et optimisation du site web ;
organisation des conditions d'utilisation des Services de paiement :
v??rification, identification et authentification des donn??es transmises par l'utilisateur ;
- proposition ?? l'utilisateur de la possibilit?? de communiquer avec d'autres utilisateurs du site web ;
mise en oeuvre d'une assistance utilisateurs ;
personnalisation des services en affichant des publicit??s en fonction de l'historique de navigation de l'utilisateur, selon ses pr??f??rences ;
- pr??vention et d??tection des fraudes, malwares (malicious softwares ou logiciels malveillants) et gestion des incidents de s??curit?? ;
- gestion des ??ventuels litiges avec les utilisateurs ;
envoi d'informations commerciales et publicitaires, en fonction des pr??f??rences de l'utilisateur.
Partage des donn??es personnelles avec des tiers
Les donn??es personnelles peuvent ??tre partag??es avec des soci??t??s tierces, dans les cas suivants :
- lorsque l'Utilisateur utilise les services de paiement, pour la mise en ouvre de ces services, le site web est en relation avec des soci??t??s
bancaires et financi??res tierces avec lesquelles elle a pass?? des contrats ;
- lorsque l'Utilisateur publie, dans les zones de commentaires libres du site web, des informations accessibles au public ;
- lorsque l'Utilisateur autorise le site web d'un tiers ?? acc??der ?? ses donn??es ;
- lorsque le site web recourt aux services de prestataires pour fournir l'assistance utilisateurs, la publicit?? et les services de paiement. Ces
prestataires disposent d'un acc??s limit?? aux donn??es de l'utilisateur, dans le cadre de l'ex??cution de ces prestations, et ont une obligation
contractuelle de les utiliser en conformit?? avec les dispositions de la r??glementation applicable en mati??re protection des donn??es ?? caract??re
personnel;
Mise en oeuvre des droits des utilisateurs
En application de la r??glementation applicable aux donn??es ?? caract??re personnel, les utilisateurs disposent des droits suivants, qu'ils peuvent
exercer en faisant leur demande ?? l'adresse suivante : christine.pastor@pathcontrol.com
le droit d'acc??s : ils peuvent exercer leur droit d'acc??s, pour conna??tre les donn??es personnelles les concernant. Dans ce cas, avant la mise
en ??uvre de ce droit, le site web peut demander une preuve de l'identit?? de l'utilisateur afin d'en v??rifier l'exactitude.
le droit de rectification : si les donn??es ?? caract??re personnel d??tenues par le site web sont inexactes, ils peuvent demander la mise ?? jour
des informations.
le droit de suppression des donn??es : les utilisateurs peuvent demander la suppression de leurs donn??es ?? caract??re personnel,
conform??ment aux lois applicables en mati??re de protection des donn??es.
le droit ?? la limitation du traitement : les utilisateurs peuvent de demander au site web de limiter le traitement des donn??es personnelles
conform??ment aux hypoth??ses pr??vues par le RGPD.
le droit de s'opposer au traitement des donn??es : les utilisateurs peuvent s'opposer ?? ce que ses donn??es soient trait??es conform??ment aux
hypoth??ses pr??vues par le RGPD.
??? le droit ?? la portabilit?? : ils peuvent r??clamer que le site web leur remette les donn??es personnelles qui lui sont fournies pour les transmettre
?? un nouveau site web.
Evolution de la pr??sente clause
Le site web se r??serve le droit d'apporter toute modification ?? la pr??sente clause relative ?? la protection des donn??es ?? caract??re personnel ?? tout
moment. Si une modification est apport??e ?? la pr??sente clause de protection des donn??es ?? caract??re personnel, le site web s'engage ?? publier la
nouvelle version sur son site. Le site web informera ??galement les utilisateurs de la modification par messagerie ??lectronique, dans un d??lai
minimum de 15 jours avant la date d'effet. Si l'utilisateur n'est pas d'accord avec les termes de la nouvelle r??daction de la clause de protection des
donn??es ?? caract??re personnel, il a la possibilit?? de supprimer son compte.
- si la loi l'exige, le site web peut effectuer la transmission de donn??es pour donner suite aux r??clamations pr??sent??es contre le site web et se
conformer aux proc??dures administratives et judiciaires ;
- si le site web est impliqu??e dans une op??ration de fusion, acquisition, cession d'actifs ou proc??dure de redressement judiciaire, elle pourra ??tre
amen??e ?? c??der ou partager tout ou partie de ses actifs, y compris les donn??es ?? caract??re personnel. Dans ce cas, les utilisateurs seraient inform??s,
avant que les donn??es ?? caract??re personnel ne soient transf??r??es ?? une tierce partie.
S??curit?? et confidentialit??
Le site web met en ouvre des mesures organisationnelles, techniques, logicielles et physiques en mati??re de s??curit?? du num??rique pour prot??ger
les donn??es personnelles contre les alt??rations, destructions et acc??s non autoris??s. Toutefois, il est ?? signaler qu'internet n'est pas un
environnement compl??tement s??curis?? et le site web ne peut pas garantir la s??curit?? de la transmission ou du stockage des informations sur
internet.
</p>
<p>Article 8 - Cookies
Le site PathControl peut collecter automatiquement des informations standards. Toutes les informations collect??es indirectement ne seront
utilis??es que pour suivre le volume, le type et la configuration du trafic utilisant ce site, pour en d??velopper la conception et l'agencement et ??
d'autres fins administratives et de planification et plus g??n??ralement pour am??liorer le service que nous vous offrons.
</p>
<p>Article 9 - Loi applicable
Les pr??sentes conditions g??n??rales d'utilisation sont soumises ?? l'application du droit fran??ais.
Si les parties n'arrivent pas ?? r??soudre un litige ?? l'amiable, le litige sera soumis ?? la comp??tence des tribunaux fran??ais.
</p>
<div class='text-center'><button type='button' class='btn btn-secondary' data-dismiss='modal'>close</button></div>
            </div> 
          </div>
          
        </div>
      </div>
      
    </div>
</div>
<div class='container'>
    <!-- Trigger the modal with a button -->

    <!-- Modal -->
    <div class='modal fade' id='myModal3' role='dialog'>
      <div class='modal-dialog'>

        <!-- Modal content-->
        <div class='modal-content'>
          <div class='modal-header'>
            <button type='button' class='close' data-dismiss='modal'>&times;</button>
            <h4 class='modal-title'>Mentions l??gales et politique de confidentialit??</h4>
          </div>
          <div class='modal-body'>
            <p>La soci??t?? Pathcontrol , soucieuse des droits des individus, notamment au regard des traitements automatis??s et dans une
volont?? de transparence avec ses clients, a mis en place une politique reprenant l'ensemble de ces traitements, des finalit??s
poursuivies par ces derniers ainsi que des moyens d'actions ?? la disposition des individus afin qu'ils puissent au mieux exercer
leurs droits.
Pour toute information compl??mentaire sur la protection des donn??es personnelles, nous vous invitons ?? consulter le
site : https://www.cnil.fr/
La poursuite de la navigation sur ce site vaut acceptation sans r??serve des dispositions et conditions d'utilisation qui suivent.
La version actuellement en ligne de ces conditions d'utilisation est la seule opposable pendant toute la dur??e d'utilisation du site
et jusqu'?? ce qu'une nouvelle version la remplace.</p>
<p>Article 1-Mentions l??gales
1.1 Site (ci-apr??s ?? le site ??) :
www.pathcontrol.com
1.2 ??diteur (ci-apr??s ?? l'??diteur ??) :
Pathcontrol SAS au capital de 100 000
???
dont le si??ge social est situ?? : 57 rue de Turbigo
75003 Paris
repr??sent??e par Ludovic Macresy , en sa qualit?? de CEO
immatricul??e au RCS de Paris 533859682
n?? de t??l??phone : 01 53 16 49 97
adresse mail: admin@pathcontrol.com
1.3 H??bergeur (ci-apr??s ?? l'h??bergeur ??) :
www.pathcontrol.com est h??berg?? par
, dont le si??ge social est situ??</p>
<p>Article 2 - Acc??s au site
L'acc??s au site et son utilisation sont r??serv??s ?? un usage strictement personnel. Vous vous engagez ?? ne pas utiliser ce site et les
informations ou donn??es qui y figurent ?? des fins commerciales, politiques, publicitaires et pour toute forme de sollicitation
commerciale et notamment l'envoi de courriers ??lectroniques non sollicit??s.</p>
<p>Article 3 - Contenu du site
Toutes les marques, photographies, textes, commentaires, illustrations, images anim??es ou non, s??quences vid??o, sons, ainsi que
toutes les applications informatiques qui pourraient ??tre utilis??es pour faire fonctionner ce site et plus g??n??ralement tous les
??l??ments reproduits ou utilis??s sur le site sont prot??g??s par les lois en vigueur au titre de la propri??t?? intellectuelle.
Ils sont la propri??t?? pleine et enti??re de l'??diteur ou de ses partenaires. Toute reproduction, repr??sentation, utilisation ou
adaptation, sous quelque forme que ce soit, de tout ou partie de ces ??l??ments, y compris les applications informatiques, sans
l'accord pr??alable et ??crit de l'??diteur, sont strictement interdites. Le fait pour l'??diteur de ne pas engager de proc??dure d??s la
prise de connaissance de ces utilisations non autoris??es ne vaut pas acceptation desdites utilisations et renonciation aux
poursuites.</p>
<p>Article 4 - Gestion du site
Pour la bonne gestion du site, l'??diteur pourra ?? tout moment :
suspendre, interrompre ou limiter l'acc??s ?? tout ou partie du site, r??server l'acc??s au site, ou ?? certaines parties du site, ?? une
cat??gorie d??termin??e d'internautes ;
- supprimer toute information pouvant en perturber le fonctionnement ou entrant en contravention avec les lois nationales ou
internationales;
suspendre le site afin de proc??der ?? des mises ?? jour.</p>
<p>Article 5 - Responsabilit??s
La responsabilit?? de l'??diteur ne peut ??tre engag??e en cas de d??faillance, panne, difficult?? ou interruption de fonctionnement,
emp??chant l'acc??s au site ou ?? une de ses fonctionnalit??s.
Le mat??riel de connexion au site que vous utilisez est sous votre enti??re responsabilit??. Vous devez prendre toutes les mesures
appropri??es pour prot??ger votre mat??riel et vos propres donn??es notamment d'attaques virales par Internet. Vous ??tes par
ailleurs seul responsable des sites et donn??es que vous consultez.
L'??diteur ne pourra ??tre tenu responsable en cas de poursuites judiciaires ?? votre encontre :
du fait de l'usage du site ou de tout service accessible via Internet ;
du fait du non-respect par vous des pr??sentes conditions g??n??rales.
L'??diteur n'est pas responsable des dommages caus??s ?? vous-m??me, ?? des tiers et/ou ?? votre ??quipement du fait de votre
connexion ou de votre utilisation du site et vous renoncez ?? toute action contre lui de ce fait.
Si l'??diteur venait ?? faire l'objet d'une proc??dure amiable ou judiciaire en raison de votre utilisation du site, il pourra se retourner
contre vous pour obtenir l'indemnisation de tous les pr??judices, sommes, condamnations et frais qui pourraient d??couler de cette
proc??dure.</p>
<p>Article 6 - Liens hypertextes
La mise en place par les utilisateurs de tous liens hypertextes vers tout ou partie du site est strictement interdite, sauf
autorisation pr??alable et ??crite de l'??diteur.
L'??diteur est libre de refuser cette autorisation sans avoir ?? justifier de quelque mani??re que ce soit sa d??cision. Dans le cas o??
l'??diteur accorderait son autorisation, celle-ci n'est dans tous les cas que temporaire et pourra ??tre retir??e ?? tout moment, sans
obligation de justification ?? la charge de l'??diteur.
Toute information accessible via un lien vers d'autres sites n'est pas publi??e par l'??diteur. L'??diteur ne dispose d'aucun droit sur
le contenu pr??sent dans ledit lien.</p>
<p>Article 7 - Collecte et protection des donn??es
Vos donn??es sont collect??es par la soci??t?? Pathcontrol
Une donn??e ?? caract??re personnel d??signe toute information concernant une personne physique identifi??e ou identifiable
(personne concern??e); est r??put??e identifiable une personne qui peut ??tre identifi??e, directement ou indirectement, notamment
par r??f??rence ?? un nom, un num??ro d'identification ou ?? un ou plusieurs ??l??ments sp??cifiques, propres ?? son identit?? physique,
physiologique, g??n??tique, psychique, ??conomique, culturelle ou sociale.
Les informations personnelles pouvant ??tre recueillies sur le site sont principalement utilis??es par l'??diteur pour la gestion des
relations avec vous, et le cas ??ch??ant pour le traitement de vos commandes.
Les donn??es personnelles collect??es sont les suivantes :
- nom et pr??nom
- adresse mail</p>
<p>Article 8 - Droit d'acc??s, de rectification et de d??r??f??rencement de vos donn??es
En application de la r??glementation applicable aux donn??es ?? caract??re personnel, les utilisateurs disposent des droits suivants :
le droit d'acc??s : ils peuvent exercer leur droit d'acc??s, pour conna??tre les donn??es personnelles les concernant, en ??crivant
?? l'adresse ??lectronique ci-dessous mentionn??e. Dans ce cas, avant la mise en ??uvre de ce droit, la Plateforme peut
demander une preuve de l'identit?? de l'utilisateur afin d'en v??rifier l'exactitude ;
??? le droit de rectification : si les donn??es ?? caract??re personnel d??tenues par la Plateforme sont inexactes, ils peuvent
demander la mise ?? jour des informations ;
??? le droit de suppression des donn??es : les utilisateurs peuvent demander la suppression de leurs donn??es ?? caract??re
personnel, conform??ment aux lois applicables en mati??re de protection des donn??es ;
le droit ?? la limitation du traitement : les utilisateurs peuvent de demander ?? la Plateforme de limiter le traitement des
donn??es personnelles conform??ment aux hypoth??ses pr??vues par le RGPD;
le droit de s'opposer au traitement des donn??es : les utilisateurs peuvent s'opposer ?? ce que leurs donn??es soient trait??es
conform??ment aux hypoth??ses pr??vues par le RGPD;
le droit ?? la portabilit?? : ils peuvent r??clamer que la Plateforme leur remette les donn??es personnelles qu'ils ont
fournies pour les transmettre ?? une nouvelle Plateforme.
Vous pouvez exercer ce droit en nous contactant, ?? l'adresse suivante :
57 rue de Turbigo 75003 Paris
Ou par email, ?? l'adresse :
admin@pathcontrol.com
Toute demande doit ??tre accompagn??e de la photocopie d'un titre d'identit?? en cours de validit?? sign?? et faire mention de
l'adresse ?? laquelle l'??diteur pourra contacter le demandeur. La r??ponse sera adress??e dans le mois suivant la r??ception de la
demande. Ce d??lai d'un mois peut ??tre prolong?? de deux mois si la complexit?? de la demande et/ou le nombre de demandes
l'exigent.
De plus, et depuis la loi n??2016-1321 du 7 octobre 2016, les personnes qui le souhaitent, ont la possibilit?? d'organiser le sort de
leurs donn??es apr??s leur d??c??s. Pour plus d'information sur le sujet, vous pouvez consulter le site Internet de la
CNIL:https://www.cnil.fr/
Les utilisateurs peuvent aussi introduire une r??clamation aupr??s de la CNIL sur le site de la CNIL : https://www.cnil.fr.
Nous vous recommandons de nous contacter dans un premier temps avant de d??poser une r??clamation aupr??s de la CNIL., car
nous sommes ?? votre enti??re disposition pour r??gler votre probl??me.</p>
<p>Article 9 - Utilisation des donn??es
Les donn??es personnelles collect??es aupr??s des utilisateurs ont pour objectif la mise ?? disposition des services de la Plateforme,
leur am??lioration et le maintien d'un environnement s??curis??. La base l??gale des traitements est l'ex??cution du contrat entre
l'utilisateur et la Plateforme. Plus pr??cis??ment, les utilisations sont les suivantes :
- acc??s et utilisation de la Plateforme par l'utilisateur ;
- gestion du fonctionnement et optimisation de la Plateforme :
??? mise en ??uvre d'une assistance utilisateurs
- v??rification, identification et authentification des donn??es transmises par l'utilisateur ;
- personnalisation des services en affichant des publicit??s en fonction de l'historique de navigation de l'utilisateur, selon ses
pr??f??rences:
- pr??vention et d??tection des fraudes, malwares (malicious softwares ou logiciels malveillants) et gestion des incidents de
s??curit??:
- gestion des ??ventuels litiges avec les utilisateurs :
- envoi d'informations commerciales et publicitaires, en fonction des pr??f??rences de l'utilisateur ;</p>
<p>Article 10 - Politique de conservation des donn??es
La Plateforme conserve vos donn??es pour la dur??e n??cessaire pour vous fournir ses services ou son assistance.
Dans la mesure raisonnablement n??cessaire ou requise pour satisfaire aux obligations l??gales ou r??glementaires, r??gler des
litiges, emp??cher les fraudes et abus ou appliquer nos modalit??s et conditions, nous pouvons ??galement conserver certaines de
vos informations si n??cessaire, m??me apr??s que vous ayez ferm?? votre compte ou que nous n'ayons plus besoin pour vous
fournir nos services.</p>
<p>Article 11-Partage des donn??es personnelles avec des tiers
Les donn??es personnelles peuvent ??tre partag??es avec des soci??t??s tierces exclusivement dans l'Union europ??enne, dans les cas
suivants:
- lorsque l'utilisateur publie, dans les zones de commentaires libres de la Plateforme, des informations accessibles au public ;
- quand l'utilisateur autorise le site web d'un tiers ?? acc??der ?? ses donn??es :
quand la Plateforme recourt aux services de prestataires pour fournir l'assistance utilisateurs, la publicit?? et les services de
paiement. Ces prestataires disposent d'un acc??s limit?? aux donn??es de l'utilisateur, dans le cadre de l'ex??cution de ces
prestations, et ont l'obligation contractuelle de les utiliser en conformit?? avec les dispositions de la r??glementation applicable en
mati??re protection des donn??es ?? caract??re personnel
- si la loi l'exige, la Plateforme peut effectuer la transmission de donn??es pour donner suite aux r??clamations pr??sent??es contre
la Plateforme et se conformer aux proc??dures administratives et judiciaires.</p>
<p>Article 12-Offres commerciales
Vous ??tes susceptible de recevoir des offres commerciales de l'??diteur. Si vous ne le souhaitez pas, veuillez cliquer sur le lien
suivant: admin@pathcontrol.com
Vos donn??es sont susceptibles d'??tre utilis??es par les partenaires de l'??diteur ?? des fins de prospection commerciale, si vous ne le
souhaitez pas, veuillez cliquer sur le lien suivant : admin@pathcontrol.com
Si, lors de la consultation du site, vous acc??dez ?? des donn??es ?? caract??re personnel, vous devez vous abstenir de toute collecte,
de toute utilisation non autoris??e et de tout acte pouvant constituer une atteinte ?? la vie priv??e ou ?? la r??putation des personnes.
L'??diteur d??cline toute responsabilit?? ?? cet ??gard.
Les donn??es sont conserv??es et utilis??es pour une dur??e conforme ?? la l??gislation en vigueur.</p>
<p>Article 13 - Cookies
Qu'est-ce qu'un ?? cookie ?? ?
Un ?? Cookie ?? ou traceur est un fichier ??lectronique d??pos?? sur un terminal (ordinateur, tablette, smartphone,...) et lu par
exemple lors de la consultation d'un site internet, de la lecture d'un courrier ??lectronique, de l'installation ou de l'utilisation d'un
logiciel ou d'une application mobile et ce, quel que soit le type de terminal utilis?? (source : https://www.cnil.fr/fr/cookies-traceurs-que-dit-la-loi).
Le site peut collecter automatiquement des informations standards. Toutes les informations collect??es indirectement ne seront utilis??es que pour
suivre le volume, le type et la configuration du trafic utilisant ce site, pour en d??velopper la conception et l'agencement et ?? d'autres fins
administratives et de planification et plus g??n??ralement pour am??liorer le service que nous vous offrons.
Le cas ??ch??ant, des ?? cookies ?? ??manant de l'??diteur du site et/ou des soci??t??s tiers pourront ??tre d??pos??s sur votre terminal,
avec votre accord. Dans ce cas, lors de la premi??re navigation sur ce site, une banni??re explicative sur l'utilisation des
?? cookies ?? appara??tra. Avant de poursuivre la navigation, le client et/ou le prospect devra accepter ou refuser l'utilisation
desdits ?? cookies ??. Le consentement donn?? sera valable pour une p??riode de treize (13) mois. L'utilisateur a la possibilit?? de
d??sactiver les cookies ?? tout moment.
Les cookies suivants sont pr??sents sur ce site :
La dur??e de vie de ces cookies est de treize mois.</p>
<p>Article 14-Photographies et repr??sentation des produits
Les photographies de produits, accompagnant leur description, ne sont pas contractuelles et n'engagent pas l'??diteur.</p>
<p>Article 15 - Loi applicable
Les pr??sentes conditions d'utilisation du site sont r??gies par la loi fran??aise et soumises ?? la comp??tence des tribunaux du si??ge
social de l'??diteur, sous r??serve d'une attribution de comp??tence sp??cifique d??coulant d'un texte de loi ou r??glementaire
particulier.</p>
<p>Article 16 - Contactez-nous
Pour toute question, information sur les produits pr??sent??s sur le site, ou concernant le site lui-m??me, vous pouvez laisser un
message ?? l'adresse suivante : admin@pathcontrol.com</p>
            <div class='text-center'><button type='button' class='btn btn-secondary' data-dismiss='modal'>close</button></div>
          </div>
        </div>

      </div>
    </div>

  </div>
    </body>
    </html>
    <script>
      document.getElementById('google').style.display = 'none';
      document.getElementById('Date').valueAsDate = new Date();
document.querySelector('iframe').addEventListener( 'load', function(e) {

console.log(e.target);
if(document.getElementById('google').style.display == 'none'){
  document.getElementById('google').style.display = 'block';
  document.getElementById('divgoogle').setAttribute('class','embed-responsive embed-responsive-4by3' );
}else{
  document.getElementById('google').style.display = 'none';
  document.getElementById('gg').scrollIntoView();
  document.getElementById('divgoogle').setAttribute('class','' );
}
} );
</script>";
    fwrite($myfile, $txt);
    fclose($myfile);
}
else
{
$myfile = fopen("forms/".$docname.".php", "w") or die("Unable to open file!");
$txt = "
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
</head>
<body style='background-color: #252525;'>
<div class='embed-responsive embed-responsive-4by3' style='width: 50%; position: relative; margin: 0 auto;'>
<iframe class='embed-responsive-item' src=\"$url\">Chargement???</iframe>
</div>
</body>
</html>";
fwrite($myfile, $txt);
fclose($myfile);
}
?>
</body>
</html>