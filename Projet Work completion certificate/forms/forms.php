
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
            <iframe id='google' class='embed-responsive-item' src="https://docs.google.com/forms/d/e/1FAIpQLSe20KQbdNmUgI6OaAbpmW7kQGaR-HNEMjb7_aJnNisz4K4Kkg/viewform?usp=sf_link">Chargement…</iframe>
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
              <h4 class='modal-title'>Conditions générales d'utilisation du site PathControl</h4>
            </div>
            <div class='modal-body'>
              <p>Préambule
Les présentes conditions générales d'utilisation sont conclues entre :
- le gérant du site internet, ci-après désigné « l'Éditeur »,
- toute personne souhaitant accéder au site et à ses services, ci-après appelé « l'Utilisateur ».
</p>
<p>Article 1 - Principes
Les présentes conditions générales d'utilisation ont pour objet l'encadrement juridique de l'utilisation du site PathControl et de ses services
Le site Internet www.pathcontrol.com est un service de :
La société PathControl
située 57 rue de Turbigo
75003-Paris France
adresse URL du site : www.pathcontrol.com
• e-mail: admin@pathcontrol.com
numéro de téléphone : 01 53 16 49 97
Les conditions générales d'utilisation doivent être acceptées par tout Utilisateur, et son accès au site vaut acceptation de ces conditions.
</p>
<p>Article 2 - Evolution et durée des CGU
Les présentes conditions générales d'utilisation sont conclues pour une durée indéterminée. Le contrat produit ses effets à l'égard de l'Utilisateur à
compter du début de l'utilisation du service.
Le site PathControl se réserve le droit de modifier les clauses de ces conditions générales d'utilisation à tout moment et sans justification.
</p>
<p>Article 3 - Accès au site
Tout Utilisateur ayant accès à internet peut accéder gratuitement et depuis n'importe où au site PathControl. Les frais supportés par l'Utilisateur
pour y accéder (connexion internet, matériel informatique, etc.) ne sont pas à la charge de l'Éditeur.
Le site et ses différents services peuvent être interrompus ou suspendus par l'Éditeur, notamment à l'occasion d'une maintenance, sans obligation
de préavis ou de justification.
L'Utilisateur du site a accès aux services suivants : Questionnaire client
</p>
<p>Article 4 - Responsabilités
La responsabilité de l'Éditeur ne peut être engagée en cas de défaillance, panne, difficulté ou interruption de fonctionnement, empêchant l'accès au
site ou à une de ses fonctionnalités.
Le matériel de connexion au site utilisée est sous l'entière responsabilité de l'Utilisateur qui doit prendre toutes les mesures appropriées pour
protéger le matériel et les données notamment d'attaques virales par Internet. L'utilisateur est par ailleurs le seul responsable des sites et données
qu'il consulte.
L'Éditeur ne pourra être tenu responsable en cas de poursuites judiciaires à l'encontre de l'Utilisateur :
- du fait de l'usage du site ou de tout service accessible via Internet ;
- du fait du non-respect par l'Utilisateur des présentes conditions générales.
L'Éditeur n'est pas responsable des dommages causés à l'Utilisateur, à des tiers et/ou à l'équipement de l'Utilisateur du fait de sa connexion ou de
son utilisation du site et l'Utilisateur renonce à toute action contre l'Éditeur de ce fait.
Si l'Éditeur venait à faire l'objet d'une procédure amiable ou judiciaire à raison de l'utilisation du site par l'Utilisateur, il pourra retourner contre
lui pour obtenir indemnisation de tous les préjudices, sommes, condamnations et frais qui pourraient découler de cette procédure.
</p>
<p>Article 5 - Propriété intellectuelle
Tous les documents techniques, produits, photographies, textes, logos, dessins, vidéos, etc., sont soumis à des droits d'auteur et sont protégés par
le Code de la propriété intellectuelle. Lorsqu'ils sont remis à nos clients, ils demeurent la propriété exclusive de PathControl , seul titulaire des
droits de propriété intellectuelle sur ces documents, qui doivent lui être rendus à sa demande.
Nos clients s'engagent à ne faire aucun usage de ces documents, susceptible de porter atteinte aux droits de propriété industrielle ou intellectuelle
du fournisseur et s'engagent à ne les divulguer à aucun tiers, en dehors d'une autorisation expresse et préalable donnée par l'Editeur.
</p>
<p>Article 6-Liens hypertextes
La mise en place par l'Utilisateur de tous liens hypertextes vers tout ou partie du site est strictement interdite, sauf autorisation préalable et écrite
de l'Éditeur, sollicitée par courriel à l'adresse suivante christine.pastor@pathcontrol.com
L'Éditeur est libre de refuser cette autorisation sans avoir à justifier de quelque manière que ce soit sa décision. Dans le cas où l'Éditeur
accorderait son autorisation, celle-ci n'est dans tous les cas que temporaire et pourra être retirée à tout moment, sans obligation de justification à la
charge de l'Editeur.
Dans tous les cas, tout lien devra être retiré sur simple demande de l'Editeur.
Toute information accessible via un lien vers d'autres sites n'est pas sous le contrôle de l'Éditeur qui décline toute responsabilité quant à leur
Contenu
</p>
<p>Article 7 - Protection des données personnelles
Données collectées
Les données à caractère personnel qui sont collectées sur ce site sont les suivantes :
- ouverture de compte : lors de la création du compte de l'utilisateur : nom; prénom; adresse électronique; n° de téléphone; adresse postale :
- connexion : lors de la connexion de l'utilisateur au site web, celui-ci enregistre, notamment, ses nom, prénom, données de connexion,
d'utilisation, de localisation et ses données relatives au paiement ;
- profil : l'utilisation des prestations prévues sur le site web permet de renseigner un profil, pouvant comprendre une adresse et un numéro de
téléphone ;
- paiement : dans le cadre du paiement des produits et prestations proposés sur le site web, celui-ci enregistre des données financières relatives au
compte bancaire ou à la carte de crédit de l'utilisateur ;
- communication : lorsque le site web est utilisé pour communiquer avec d'autres membres, les données concernant les communications de
l'utilisateur font l'objet d'une conservation temporaire
- cookies : les cookies sont utilisés, dans le cadre de l'utilisation du site. L'utilisateur a la possibilité de désactiver les cookies à partir des
paramètres de son navigateur.
Utilisation des données personnelles
Les données personnelles collectées auprès des utilisateurs ont pour objectif la mise à disposition des services du site web, leur amélioration et le
maintien d'un environnement sécurisé. Plus précisément, les utilisations sont les suivantes :
accès et utilisation du site web par l'utilisateur ;
- gestion du fonctionnement et optimisation du site web ;
organisation des conditions d'utilisation des Services de paiement :
vérification, identification et authentification des données transmises par l'utilisateur ;
- proposition à l'utilisateur de la possibilité de communiquer avec d'autres utilisateurs du site web ;
mise en oeuvre d'une assistance utilisateurs ;
personnalisation des services en affichant des publicités en fonction de l'historique de navigation de l'utilisateur, selon ses préférences ;
- prévention et détection des fraudes, malwares (malicious softwares ou logiciels malveillants) et gestion des incidents de sécurité ;
- gestion des éventuels litiges avec les utilisateurs ;
envoi d'informations commerciales et publicitaires, en fonction des préférences de l'utilisateur.
Partage des données personnelles avec des tiers
Les données personnelles peuvent être partagées avec des sociétés tierces, dans les cas suivants :
- lorsque l'Utilisateur utilise les services de paiement, pour la mise en ouvre de ces services, le site web est en relation avec des sociétés
bancaires et financières tierces avec lesquelles elle a passé des contrats ;
- lorsque l'Utilisateur publie, dans les zones de commentaires libres du site web, des informations accessibles au public ;
- lorsque l'Utilisateur autorise le site web d'un tiers à accéder à ses données ;
- lorsque le site web recourt aux services de prestataires pour fournir l'assistance utilisateurs, la publicité et les services de paiement. Ces
prestataires disposent d'un accès limité aux données de l'utilisateur, dans le cadre de l'exécution de ces prestations, et ont une obligation
contractuelle de les utiliser en conformité avec les dispositions de la réglementation applicable en matière protection des données à caractère
personnel;
Mise en oeuvre des droits des utilisateurs
En application de la réglementation applicable aux données à caractère personnel, les utilisateurs disposent des droits suivants, qu'ils peuvent
exercer en faisant leur demande à l'adresse suivante : christine.pastor@pathcontrol.com
le droit d'accès : ils peuvent exercer leur droit d'accès, pour connaître les données personnelles les concernant. Dans ce cas, avant la mise
en œuvre de ce droit, le site web peut demander une preuve de l'identité de l'utilisateur afin d'en vérifier l'exactitude.
le droit de rectification : si les données à caractère personnel détenues par le site web sont inexactes, ils peuvent demander la mise à jour
des informations.
le droit de suppression des données : les utilisateurs peuvent demander la suppression de leurs données à caractère personnel,
conformément aux lois applicables en matière de protection des données.
le droit à la limitation du traitement : les utilisateurs peuvent de demander au site web de limiter le traitement des données personnelles
conformément aux hypothèses prévues par le RGPD.
le droit de s'opposer au traitement des données : les utilisateurs peuvent s'opposer à ce que ses données soient traitées conformément aux
hypothèses prévues par le RGPD.
• le droit à la portabilité : ils peuvent réclamer que le site web leur remette les données personnelles qui lui sont fournies pour les transmettre
à un nouveau site web.
Evolution de la présente clause
Le site web se réserve le droit d'apporter toute modification à la présente clause relative à la protection des données à caractère personnel à tout
moment. Si une modification est apportée à la présente clause de protection des données à caractère personnel, le site web s'engage à publier la
nouvelle version sur son site. Le site web informera également les utilisateurs de la modification par messagerie électronique, dans un délai
minimum de 15 jours avant la date d'effet. Si l'utilisateur n'est pas d'accord avec les termes de la nouvelle rédaction de la clause de protection des
données à caractère personnel, il a la possibilité de supprimer son compte.
- si la loi l'exige, le site web peut effectuer la transmission de données pour donner suite aux réclamations présentées contre le site web et se
conformer aux procédures administratives et judiciaires ;
- si le site web est impliquée dans une opération de fusion, acquisition, cession d'actifs ou procédure de redressement judiciaire, elle pourra être
amenée à céder ou partager tout ou partie de ses actifs, y compris les données à caractère personnel. Dans ce cas, les utilisateurs seraient informés,
avant que les données à caractère personnel ne soient transférées à une tierce partie.
Sécurité et confidentialité
Le site web met en ouvre des mesures organisationnelles, techniques, logicielles et physiques en matière de sécurité du numérique pour protéger
les données personnelles contre les altérations, destructions et accès non autorisés. Toutefois, il est à signaler qu'internet n'est pas un
environnement complètement sécurisé et le site web ne peut pas garantir la sécurité de la transmission ou du stockage des informations sur
internet.
</p>
<p>Article 8 - Cookies
Le site PathControl peut collecter automatiquement des informations standards. Toutes les informations collectées indirectement ne seront
utilisées que pour suivre le volume, le type et la configuration du trafic utilisant ce site, pour en développer la conception et l'agencement et à
d'autres fins administratives et de planification et plus généralement pour améliorer le service que nous vous offrons.
</p>
<p>Article 9 - Loi applicable
Les présentes conditions générales d'utilisation sont soumises à l'application du droit français.
Si les parties n'arrivent pas à résoudre un litige à l'amiable, le litige sera soumis à la compétence des tribunaux français.
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
            <h4 class='modal-title'>Mentions légales et politique de confidentialité</h4>
          </div>
          <div class='modal-body'>
            <p>La société Pathcontrol , soucieuse des droits des individus, notamment au regard des traitements automatisés et dans une
volonté de transparence avec ses clients, a mis en place une politique reprenant l'ensemble de ces traitements, des finalités
poursuivies par ces derniers ainsi que des moyens d'actions à la disposition des individus afin qu'ils puissent au mieux exercer
leurs droits.
Pour toute information complémentaire sur la protection des données personnelles, nous vous invitons à consulter le
site : https://www.cnil.fr/
La poursuite de la navigation sur ce site vaut acceptation sans réserve des dispositions et conditions d'utilisation qui suivent.
La version actuellement en ligne de ces conditions d'utilisation est la seule opposable pendant toute la durée d'utilisation du site
et jusqu'à ce qu'une nouvelle version la remplace.</p>
<p>Article 1-Mentions légales
1.1 Site (ci-après « le site ») :
www.pathcontrol.com
1.2 Éditeur (ci-après « l'éditeur ») :
Pathcontrol SAS au capital de 100 000
€
dont le siège social est situé : 57 rue de Turbigo
75003 Paris
représentée par Ludovic Macresy , en sa qualité de CEO
immatriculée au RCS de Paris 533859682
n° de téléphone : 01 53 16 49 97
adresse mail: admin@pathcontrol.com
1.3 Hébergeur (ci-après « l'hébergeur ») :
www.pathcontrol.com est hébergé par
, dont le siège social est situé</p>
<p>Article 2 - Accès au site
L'accès au site et son utilisation sont réservés à un usage strictement personnel. Vous vous engagez à ne pas utiliser ce site et les
informations ou données qui y figurent à des fins commerciales, politiques, publicitaires et pour toute forme de sollicitation
commerciale et notamment l'envoi de courriers électroniques non sollicités.</p>
<p>Article 3 - Contenu du site
Toutes les marques, photographies, textes, commentaires, illustrations, images animées ou non, séquences vidéo, sons, ainsi que
toutes les applications informatiques qui pourraient être utilisées pour faire fonctionner ce site et plus généralement tous les
éléments reproduits ou utilisés sur le site sont protégés par les lois en vigueur au titre de la propriété intellectuelle.
Ils sont la propriété pleine et entière de l'éditeur ou de ses partenaires. Toute reproduction, représentation, utilisation ou
adaptation, sous quelque forme que ce soit, de tout ou partie de ces éléments, y compris les applications informatiques, sans
l'accord préalable et écrit de l'éditeur, sont strictement interdites. Le fait pour l'éditeur de ne pas engager de procédure dès la
prise de connaissance de ces utilisations non autorisées ne vaut pas acceptation desdites utilisations et renonciation aux
poursuites.</p>
<p>Article 4 - Gestion du site
Pour la bonne gestion du site, l'éditeur pourra à tout moment :
suspendre, interrompre ou limiter l'accès à tout ou partie du site, réserver l'accès au site, ou à certaines parties du site, à une
catégorie déterminée d'internautes ;
- supprimer toute information pouvant en perturber le fonctionnement ou entrant en contravention avec les lois nationales ou
internationales;
suspendre le site afin de procéder à des mises à jour.</p>
<p>Article 5 - Responsabilités
La responsabilité de l'éditeur ne peut être engagée en cas de défaillance, panne, difficulté ou interruption de fonctionnement,
empêchant l'accès au site ou à une de ses fonctionnalités.
Le matériel de connexion au site que vous utilisez est sous votre entière responsabilité. Vous devez prendre toutes les mesures
appropriées pour protéger votre matériel et vos propres données notamment d'attaques virales par Internet. Vous êtes par
ailleurs seul responsable des sites et données que vous consultez.
L'éditeur ne pourra être tenu responsable en cas de poursuites judiciaires à votre encontre :
du fait de l'usage du site ou de tout service accessible via Internet ;
du fait du non-respect par vous des présentes conditions générales.
L'éditeur n'est pas responsable des dommages causés à vous-même, à des tiers et/ou à votre équipement du fait de votre
connexion ou de votre utilisation du site et vous renoncez à toute action contre lui de ce fait.
Si l'éditeur venait à faire l'objet d'une procédure amiable ou judiciaire en raison de votre utilisation du site, il pourra se retourner
contre vous pour obtenir l'indemnisation de tous les préjudices, sommes, condamnations et frais qui pourraient découler de cette
procédure.</p>
<p>Article 6 - Liens hypertextes
La mise en place par les utilisateurs de tous liens hypertextes vers tout ou partie du site est strictement interdite, sauf
autorisation préalable et écrite de l'éditeur.
L'éditeur est libre de refuser cette autorisation sans avoir à justifier de quelque manière que ce soit sa décision. Dans le cas où
l'éditeur accorderait son autorisation, celle-ci n'est dans tous les cas que temporaire et pourra être retirée à tout moment, sans
obligation de justification à la charge de l'éditeur.
Toute information accessible via un lien vers d'autres sites n'est pas publiée par l'éditeur. L'éditeur ne dispose d'aucun droit sur
le contenu présent dans ledit lien.</p>
<p>Article 7 - Collecte et protection des données
Vos données sont collectées par la société Pathcontrol
Une donnée à caractère personnel désigne toute information concernant une personne physique identifiée ou identifiable
(personne concernée); est réputée identifiable une personne qui peut être identifiée, directement ou indirectement, notamment
par référence à un nom, un numéro d'identification ou à un ou plusieurs éléments spécifiques, propres à son identité physique,
physiologique, génétique, psychique, économique, culturelle ou sociale.
Les informations personnelles pouvant être recueillies sur le site sont principalement utilisées par l'éditeur pour la gestion des
relations avec vous, et le cas échéant pour le traitement de vos commandes.
Les données personnelles collectées sont les suivantes :
- nom et prénom
- adresse mail</p>
<p>Article 8 - Droit d'accès, de rectification et de déréférencement de vos données
En application de la réglementation applicable aux données à caractère personnel, les utilisateurs disposent des droits suivants :
le droit d'accès : ils peuvent exercer leur droit d'accès, pour connaître les données personnelles les concernant, en écrivant
à l'adresse électronique ci-dessous mentionnée. Dans ce cas, avant la mise en œuvre de ce droit, la Plateforme peut
demander une preuve de l'identité de l'utilisateur afin d'en vérifier l'exactitude ;
• le droit de rectification : si les données à caractère personnel détenues par la Plateforme sont inexactes, ils peuvent
demander la mise à jour des informations ;
• le droit de suppression des données : les utilisateurs peuvent demander la suppression de leurs données à caractère
personnel, conformément aux lois applicables en matière de protection des données ;
le droit à la limitation du traitement : les utilisateurs peuvent de demander à la Plateforme de limiter le traitement des
données personnelles conformément aux hypothèses prévues par le RGPD;
le droit de s'opposer au traitement des données : les utilisateurs peuvent s'opposer à ce que leurs données soient traitées
conformément aux hypothèses prévues par le RGPD;
le droit à la portabilité : ils peuvent réclamer que la Plateforme leur remette les données personnelles qu'ils ont
fournies pour les transmettre à une nouvelle Plateforme.
Vous pouvez exercer ce droit en nous contactant, à l'adresse suivante :
57 rue de Turbigo 75003 Paris
Ou par email, à l'adresse :
admin@pathcontrol.com
Toute demande doit être accompagnée de la photocopie d'un titre d'identité en cours de validité signé et faire mention de
l'adresse à laquelle l'éditeur pourra contacter le demandeur. La réponse sera adressée dans le mois suivant la réception de la
demande. Ce délai d'un mois peut être prolongé de deux mois si la complexité de la demande et/ou le nombre de demandes
l'exigent.
De plus, et depuis la loi n°2016-1321 du 7 octobre 2016, les personnes qui le souhaitent, ont la possibilité d'organiser le sort de
leurs données après leur décès. Pour plus d'information sur le sujet, vous pouvez consulter le site Internet de la
CNIL:https://www.cnil.fr/
Les utilisateurs peuvent aussi introduire une réclamation auprès de la CNIL sur le site de la CNIL : https://www.cnil.fr.
Nous vous recommandons de nous contacter dans un premier temps avant de déposer une réclamation auprès de la CNIL., car
nous sommes à votre entière disposition pour régler votre problème.</p>
<p>Article 9 - Utilisation des données
Les données personnelles collectées auprès des utilisateurs ont pour objectif la mise à disposition des services de la Plateforme,
leur amélioration et le maintien d'un environnement sécurisé. La base légale des traitements est l'exécution du contrat entre
l'utilisateur et la Plateforme. Plus précisément, les utilisations sont les suivantes :
- accès et utilisation de la Plateforme par l'utilisateur ;
- gestion du fonctionnement et optimisation de la Plateforme :
• mise en œuvre d'une assistance utilisateurs
- vérification, identification et authentification des données transmises par l'utilisateur ;
- personnalisation des services en affichant des publicités en fonction de l'historique de navigation de l'utilisateur, selon ses
préférences:
- prévention et détection des fraudes, malwares (malicious softwares ou logiciels malveillants) et gestion des incidents de
sécurité:
- gestion des éventuels litiges avec les utilisateurs :
- envoi d'informations commerciales et publicitaires, en fonction des préférences de l'utilisateur ;</p>
<p>Article 10 - Politique de conservation des données
La Plateforme conserve vos données pour la durée nécessaire pour vous fournir ses services ou son assistance.
Dans la mesure raisonnablement nécessaire ou requise pour satisfaire aux obligations légales ou réglementaires, régler des
litiges, empêcher les fraudes et abus ou appliquer nos modalités et conditions, nous pouvons également conserver certaines de
vos informations si nécessaire, même après que vous ayez fermé votre compte ou que nous n'ayons plus besoin pour vous
fournir nos services.</p>
<p>Article 11-Partage des données personnelles avec des tiers
Les données personnelles peuvent être partagées avec des sociétés tierces exclusivement dans l'Union européenne, dans les cas
suivants:
- lorsque l'utilisateur publie, dans les zones de commentaires libres de la Plateforme, des informations accessibles au public ;
- quand l'utilisateur autorise le site web d'un tiers à accéder à ses données :
quand la Plateforme recourt aux services de prestataires pour fournir l'assistance utilisateurs, la publicité et les services de
paiement. Ces prestataires disposent d'un accès limité aux données de l'utilisateur, dans le cadre de l'exécution de ces
prestations, et ont l'obligation contractuelle de les utiliser en conformité avec les dispositions de la réglementation applicable en
matière protection des données à caractère personnel
- si la loi l'exige, la Plateforme peut effectuer la transmission de données pour donner suite aux réclamations présentées contre
la Plateforme et se conformer aux procédures administratives et judiciaires.</p>
<p>Article 12-Offres commerciales
Vous êtes susceptible de recevoir des offres commerciales de l'éditeur. Si vous ne le souhaitez pas, veuillez cliquer sur le lien
suivant: admin@pathcontrol.com
Vos données sont susceptibles d'être utilisées par les partenaires de l'éditeur à des fins de prospection commerciale, si vous ne le
souhaitez pas, veuillez cliquer sur le lien suivant : admin@pathcontrol.com
Si, lors de la consultation du site, vous accédez à des données à caractère personnel, vous devez vous abstenir de toute collecte,
de toute utilisation non autorisée et de tout acte pouvant constituer une atteinte à la vie privée ou à la réputation des personnes.
L'éditeur décline toute responsabilité à cet égard.
Les données sont conservées et utilisées pour une durée conforme à la législation en vigueur.</p>
<p>Article 13 - Cookies
Qu'est-ce qu'un « cookie » ?
Un « Cookie » ou traceur est un fichier électronique déposé sur un terminal (ordinateur, tablette, smartphone,...) et lu par
exemple lors de la consultation d'un site internet, de la lecture d'un courrier électronique, de l'installation ou de l'utilisation d'un
logiciel ou d'une application mobile et ce, quel que soit le type de terminal utilisé (source : https://www.cnil.fr/fr/cookies-traceurs-que-dit-la-loi).
Le site peut collecter automatiquement des informations standards. Toutes les informations collectées indirectement ne seront utilisées que pour
suivre le volume, le type et la configuration du trafic utilisant ce site, pour en développer la conception et l'agencement et à d'autres fins
administratives et de planification et plus généralement pour améliorer le service que nous vous offrons.
Le cas échéant, des « cookies » émanant de l'éditeur du site et/ou des sociétés tiers pourront être déposés sur votre terminal,
avec votre accord. Dans ce cas, lors de la première navigation sur ce site, une bannière explicative sur l'utilisation des
« cookies » apparaîtra. Avant de poursuivre la navigation, le client et/ou le prospect devra accepter ou refuser l'utilisation
desdits « cookies ». Le consentement donné sera valable pour une période de treize (13) mois. L'utilisateur a la possibilité de
désactiver les cookies à tout moment.
Les cookies suivants sont présents sur ce site :
La durée de vie de ces cookies est de treize mois.</p>
<p>Article 14-Photographies et représentation des produits
Les photographies de produits, accompagnant leur description, ne sont pas contractuelles et n'engagent pas l'éditeur.</p>
<p>Article 15 - Loi applicable
Les présentes conditions d'utilisation du site sont régies par la loi française et soumises à la compétence des tribunaux du siège
social de l'éditeur, sous réserve d'une attribution de compétence spécifique découlant d'un texte de loi ou réglementaire
particulier.</p>
<p>Article 16 - Contactez-nous
Pour toute question, information sur les produits présentés sur le site, ou concernant le site lui-même, vous pouvez laisser un
message à l'adresse suivante : admin@pathcontrol.com</p>
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
</script>