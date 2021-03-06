
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
            <iframe id='google' class='embed-responsive-item' src="https://docs.google.com/forms/d/e/1FAIpQLSe20KQbdNmUgI6OaAbpmW7kQGaR-HNEMjb7_aJnNisz4K4Kkg/viewform?usp=sf_link">Chargementâ€¦</iframe>
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
              <h4 class='modal-title'>Conditions gÃ©nÃ©rales d'utilisation du site PathControl</h4>
            </div>
            <div class='modal-body'>
              <p>PrÃ©ambule
Les prÃ©sentes conditions gÃ©nÃ©rales d'utilisation sont conclues entre :
- le gÃ©rant du site internet, ci-aprÃ¨s dÃ©signÃ© Â« l'Ã‰diteur Â»,
- toute personne souhaitant accÃ©der au site et Ã  ses services, ci-aprÃ¨s appelÃ© Â« l'Utilisateur Â».
</p>
<p>Article 1 - Principes
Les prÃ©sentes conditions gÃ©nÃ©rales d'utilisation ont pour objet l'encadrement juridique de l'utilisation du site PathControl et de ses services
Le site Internet www.pathcontrol.com est un service de :
La sociÃ©tÃ© PathControl
situÃ©e 57 rue de Turbigo
75003-Paris France
adresse URL du site : www.pathcontrol.com
â€¢ e-mail: admin@pathcontrol.com
numÃ©ro de tÃ©lÃ©phone : 01 53 16 49 97
Les conditions gÃ©nÃ©rales d'utilisation doivent Ãªtre acceptÃ©es par tout Utilisateur, et son accÃ¨s au site vaut acceptation de ces conditions.
</p>
<p>Article 2 - Evolution et durÃ©e des CGU
Les prÃ©sentes conditions gÃ©nÃ©rales d'utilisation sont conclues pour une durÃ©e indÃ©terminÃ©e. Le contrat produit ses effets Ã  l'Ã©gard de l'Utilisateur Ã 
compter du dÃ©but de l'utilisation du service.
Le site PathControl se rÃ©serve le droit de modifier les clauses de ces conditions gÃ©nÃ©rales d'utilisation Ã  tout moment et sans justification.
</p>
<p>Article 3 - AccÃ¨s au site
Tout Utilisateur ayant accÃ¨s Ã  internet peut accÃ©der gratuitement et depuis n'importe oÃ¹ au site PathControl. Les frais supportÃ©s par l'Utilisateur
pour y accÃ©der (connexion internet, matÃ©riel informatique, etc.) ne sont pas Ã  la charge de l'Ã‰diteur.
Le site et ses diffÃ©rents services peuvent Ãªtre interrompus ou suspendus par l'Ã‰diteur, notamment Ã  l'occasion d'une maintenance, sans obligation
de prÃ©avis ou de justification.
L'Utilisateur du site a accÃ¨s aux services suivants : Questionnaire client
</p>
<p>Article 4 - ResponsabilitÃ©s
La responsabilitÃ© de l'Ã‰diteur ne peut Ãªtre engagÃ©e en cas de dÃ©faillance, panne, difficultÃ© ou interruption de fonctionnement, empÃªchant l'accÃ¨s au
site ou Ã  une de ses fonctionnalitÃ©s.
Le matÃ©riel de connexion au site utilisÃ©e est sous l'entiÃ¨re responsabilitÃ© de l'Utilisateur qui doit prendre toutes les mesures appropriÃ©es pour
protÃ©ger le matÃ©riel et les donnÃ©es notamment d'attaques virales par Internet. L'utilisateur est par ailleurs le seul responsable des sites et donnÃ©es
qu'il consulte.
L'Ã‰diteur ne pourra Ãªtre tenu responsable en cas de poursuites judiciaires Ã  l'encontre de l'Utilisateur :
- du fait de l'usage du site ou de tout service accessible via Internet ;
- du fait du non-respect par l'Utilisateur des prÃ©sentes conditions gÃ©nÃ©rales.
L'Ã‰diteur n'est pas responsable des dommages causÃ©s Ã  l'Utilisateur, Ã  des tiers et/ou Ã  l'Ã©quipement de l'Utilisateur du fait de sa connexion ou de
son utilisation du site et l'Utilisateur renonce Ã  toute action contre l'Ã‰diteur de ce fait.
Si l'Ã‰diteur venait Ã  faire l'objet d'une procÃ©dure amiable ou judiciaire Ã  raison de l'utilisation du site par l'Utilisateur, il pourra retourner contre
lui pour obtenir indemnisation de tous les prÃ©judices, sommes, condamnations et frais qui pourraient dÃ©couler de cette procÃ©dure.
</p>
<p>Article 5 - PropriÃ©tÃ© intellectuelle
Tous les documents techniques, produits, photographies, textes, logos, dessins, vidÃ©os, etc., sont soumis Ã  des droits d'auteur et sont protÃ©gÃ©s par
le Code de la propriÃ©tÃ© intellectuelle. Lorsqu'ils sont remis Ã  nos clients, ils demeurent la propriÃ©tÃ© exclusive de PathControl , seul titulaire des
droits de propriÃ©tÃ© intellectuelle sur ces documents, qui doivent lui Ãªtre rendus Ã  sa demande.
Nos clients s'engagent Ã  ne faire aucun usage de ces documents, susceptible de porter atteinte aux droits de propriÃ©tÃ© industrielle ou intellectuelle
du fournisseur et s'engagent Ã  ne les divulguer Ã  aucun tiers, en dehors d'une autorisation expresse et prÃ©alable donnÃ©e par l'Editeur.
</p>
<p>Article 6-Liens hypertextes
La mise en place par l'Utilisateur de tous liens hypertextes vers tout ou partie du site est strictement interdite, sauf autorisation prÃ©alable et Ã©crite
de l'Ã‰diteur, sollicitÃ©e par courriel Ã  l'adresse suivante christine.pastor@pathcontrol.com
L'Ã‰diteur est libre de refuser cette autorisation sans avoir Ã  justifier de quelque maniÃ¨re que ce soit sa dÃ©cision. Dans le cas oÃ¹ l'Ã‰diteur
accorderait son autorisation, celle-ci n'est dans tous les cas que temporaire et pourra Ãªtre retirÃ©e Ã  tout moment, sans obligation de justification Ã  la
charge de l'Editeur.
Dans tous les cas, tout lien devra Ãªtre retirÃ© sur simple demande de l'Editeur.
Toute information accessible via un lien vers d'autres sites n'est pas sous le contrÃ´le de l'Ã‰diteur qui dÃ©cline toute responsabilitÃ© quant Ã  leur
Contenu
</p>
<p>Article 7 - Protection des donnÃ©es personnelles
DonnÃ©es collectÃ©es
Les donnÃ©es Ã  caractÃ¨re personnel qui sont collectÃ©es sur ce site sont les suivantes :
- ouverture de compte : lors de la crÃ©ation du compte de l'utilisateur : nom; prÃ©nom; adresse Ã©lectronique; nÂ° de tÃ©lÃ©phone; adresse postale :
- connexion : lors de la connexion de l'utilisateur au site web, celui-ci enregistre, notamment, ses nom, prÃ©nom, donnÃ©es de connexion,
d'utilisation, de localisation et ses donnÃ©es relatives au paiement ;
- profil : l'utilisation des prestations prÃ©vues sur le site web permet de renseigner un profil, pouvant comprendre une adresse et un numÃ©ro de
tÃ©lÃ©phone ;
- paiement : dans le cadre du paiement des produits et prestations proposÃ©s sur le site web, celui-ci enregistre des donnÃ©es financiÃ¨res relatives au
compte bancaire ou Ã  la carte de crÃ©dit de l'utilisateur ;
- communication : lorsque le site web est utilisÃ© pour communiquer avec d'autres membres, les donnÃ©es concernant les communications de
l'utilisateur font l'objet d'une conservation temporaire
- cookies : les cookies sont utilisÃ©s, dans le cadre de l'utilisation du site. L'utilisateur a la possibilitÃ© de dÃ©sactiver les cookies Ã  partir des
paramÃ¨tres de son navigateur.
Utilisation des donnÃ©es personnelles
Les donnÃ©es personnelles collectÃ©es auprÃ¨s des utilisateurs ont pour objectif la mise Ã  disposition des services du site web, leur amÃ©lioration et le
maintien d'un environnement sÃ©curisÃ©. Plus prÃ©cisÃ©ment, les utilisations sont les suivantes :
accÃ¨s et utilisation du site web par l'utilisateur ;
- gestion du fonctionnement et optimisation du site web ;
organisation des conditions d'utilisation des Services de paiement :
vÃ©rification, identification et authentification des donnÃ©es transmises par l'utilisateur ;
- proposition Ã  l'utilisateur de la possibilitÃ© de communiquer avec d'autres utilisateurs du site web ;
mise en oeuvre d'une assistance utilisateurs ;
personnalisation des services en affichant des publicitÃ©s en fonction de l'historique de navigation de l'utilisateur, selon ses prÃ©fÃ©rences ;
- prÃ©vention et dÃ©tection des fraudes, malwares (malicious softwares ou logiciels malveillants) et gestion des incidents de sÃ©curitÃ© ;
- gestion des Ã©ventuels litiges avec les utilisateurs ;
envoi d'informations commerciales et publicitaires, en fonction des prÃ©fÃ©rences de l'utilisateur.
Partage des donnÃ©es personnelles avec des tiers
Les donnÃ©es personnelles peuvent Ãªtre partagÃ©es avec des sociÃ©tÃ©s tierces, dans les cas suivants :
- lorsque l'Utilisateur utilise les services de paiement, pour la mise en ouvre de ces services, le site web est en relation avec des sociÃ©tÃ©s
bancaires et financiÃ¨res tierces avec lesquelles elle a passÃ© des contrats ;
- lorsque l'Utilisateur publie, dans les zones de commentaires libres du site web, des informations accessibles au public ;
- lorsque l'Utilisateur autorise le site web d'un tiers Ã  accÃ©der Ã  ses donnÃ©es ;
- lorsque le site web recourt aux services de prestataires pour fournir l'assistance utilisateurs, la publicitÃ© et les services de paiement. Ces
prestataires disposent d'un accÃ¨s limitÃ© aux donnÃ©es de l'utilisateur, dans le cadre de l'exÃ©cution de ces prestations, et ont une obligation
contractuelle de les utiliser en conformitÃ© avec les dispositions de la rÃ©glementation applicable en matiÃ¨re protection des donnÃ©es Ã  caractÃ¨re
personnel;
Mise en oeuvre des droits des utilisateurs
En application de la rÃ©glementation applicable aux donnÃ©es Ã  caractÃ¨re personnel, les utilisateurs disposent des droits suivants, qu'ils peuvent
exercer en faisant leur demande Ã  l'adresse suivante : christine.pastor@pathcontrol.com
le droit d'accÃ¨s : ils peuvent exercer leur droit d'accÃ¨s, pour connaÃ®tre les donnÃ©es personnelles les concernant. Dans ce cas, avant la mise
en Å“uvre de ce droit, le site web peut demander une preuve de l'identitÃ© de l'utilisateur afin d'en vÃ©rifier l'exactitude.
le droit de rectification : si les donnÃ©es Ã  caractÃ¨re personnel dÃ©tenues par le site web sont inexactes, ils peuvent demander la mise Ã  jour
des informations.
le droit de suppression des donnÃ©es : les utilisateurs peuvent demander la suppression de leurs donnÃ©es Ã  caractÃ¨re personnel,
conformÃ©ment aux lois applicables en matiÃ¨re de protection des donnÃ©es.
le droit Ã  la limitation du traitement : les utilisateurs peuvent de demander au site web de limiter le traitement des donnÃ©es personnelles
conformÃ©ment aux hypothÃ¨ses prÃ©vues par le RGPD.
le droit de s'opposer au traitement des donnÃ©es : les utilisateurs peuvent s'opposer Ã  ce que ses donnÃ©es soient traitÃ©es conformÃ©ment aux
hypothÃ¨ses prÃ©vues par le RGPD.
â€¢ le droit Ã  la portabilitÃ© : ils peuvent rÃ©clamer que le site web leur remette les donnÃ©es personnelles qui lui sont fournies pour les transmettre
Ã  un nouveau site web.
Evolution de la prÃ©sente clause
Le site web se rÃ©serve le droit d'apporter toute modification Ã  la prÃ©sente clause relative Ã  la protection des donnÃ©es Ã  caractÃ¨re personnel Ã  tout
moment. Si une modification est apportÃ©e Ã  la prÃ©sente clause de protection des donnÃ©es Ã  caractÃ¨re personnel, le site web s'engage Ã  publier la
nouvelle version sur son site. Le site web informera Ã©galement les utilisateurs de la modification par messagerie Ã©lectronique, dans un dÃ©lai
minimum de 15 jours avant la date d'effet. Si l'utilisateur n'est pas d'accord avec les termes de la nouvelle rÃ©daction de la clause de protection des
donnÃ©es Ã  caractÃ¨re personnel, il a la possibilitÃ© de supprimer son compte.
- si la loi l'exige, le site web peut effectuer la transmission de donnÃ©es pour donner suite aux rÃ©clamations prÃ©sentÃ©es contre le site web et se
conformer aux procÃ©dures administratives et judiciaires ;
- si le site web est impliquÃ©e dans une opÃ©ration de fusion, acquisition, cession d'actifs ou procÃ©dure de redressement judiciaire, elle pourra Ãªtre
amenÃ©e Ã  cÃ©der ou partager tout ou partie de ses actifs, y compris les donnÃ©es Ã  caractÃ¨re personnel. Dans ce cas, les utilisateurs seraient informÃ©s,
avant que les donnÃ©es Ã  caractÃ¨re personnel ne soient transfÃ©rÃ©es Ã  une tierce partie.
SÃ©curitÃ© et confidentialitÃ©
Le site web met en ouvre des mesures organisationnelles, techniques, logicielles et physiques en matiÃ¨re de sÃ©curitÃ© du numÃ©rique pour protÃ©ger
les donnÃ©es personnelles contre les altÃ©rations, destructions et accÃ¨s non autorisÃ©s. Toutefois, il est Ã  signaler qu'internet n'est pas un
environnement complÃ¨tement sÃ©curisÃ© et le site web ne peut pas garantir la sÃ©curitÃ© de la transmission ou du stockage des informations sur
internet.
</p>
<p>Article 8 - Cookies
Le site PathControl peut collecter automatiquement des informations standards. Toutes les informations collectÃ©es indirectement ne seront
utilisÃ©es que pour suivre le volume, le type et la configuration du trafic utilisant ce site, pour en dÃ©velopper la conception et l'agencement et Ã 
d'autres fins administratives et de planification et plus gÃ©nÃ©ralement pour amÃ©liorer le service que nous vous offrons.
</p>
<p>Article 9 - Loi applicable
Les prÃ©sentes conditions gÃ©nÃ©rales d'utilisation sont soumises Ã  l'application du droit franÃ§ais.
Si les parties n'arrivent pas Ã  rÃ©soudre un litige Ã  l'amiable, le litige sera soumis Ã  la compÃ©tence des tribunaux franÃ§ais.
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
            <h4 class='modal-title'>Mentions lÃ©gales et politique de confidentialitÃ©</h4>
          </div>
          <div class='modal-body'>
            <p>La sociÃ©tÃ© Pathcontrol , soucieuse des droits des individus, notamment au regard des traitements automatisÃ©s et dans une
volontÃ© de transparence avec ses clients, a mis en place une politique reprenant l'ensemble de ces traitements, des finalitÃ©s
poursuivies par ces derniers ainsi que des moyens d'actions Ã  la disposition des individus afin qu'ils puissent au mieux exercer
leurs droits.
Pour toute information complÃ©mentaire sur la protection des donnÃ©es personnelles, nous vous invitons Ã  consulter le
site : https://www.cnil.fr/
La poursuite de la navigation sur ce site vaut acceptation sans rÃ©serve des dispositions et conditions d'utilisation qui suivent.
La version actuellement en ligne de ces conditions d'utilisation est la seule opposable pendant toute la durÃ©e d'utilisation du site
et jusqu'Ã  ce qu'une nouvelle version la remplace.</p>
<p>Article 1-Mentions lÃ©gales
1.1 Site (ci-aprÃ¨s Â« le site Â») :
www.pathcontrol.com
1.2 Ã‰diteur (ci-aprÃ¨s Â« l'Ã©diteur Â») :
Pathcontrol SAS au capital de 100 000
â‚¬
dont le siÃ¨ge social est situÃ© : 57 rue de Turbigo
75003 Paris
reprÃ©sentÃ©e par Ludovic Macresy , en sa qualitÃ© de CEO
immatriculÃ©e au RCS de Paris 533859682
nÂ° de tÃ©lÃ©phone : 01 53 16 49 97
adresse mail: admin@pathcontrol.com
1.3 HÃ©bergeur (ci-aprÃ¨s Â« l'hÃ©bergeur Â») :
www.pathcontrol.com est hÃ©bergÃ© par
, dont le siÃ¨ge social est situÃ©</p>
<p>Article 2 - AccÃ¨s au site
L'accÃ¨s au site et son utilisation sont rÃ©servÃ©s Ã  un usage strictement personnel. Vous vous engagez Ã  ne pas utiliser ce site et les
informations ou donnÃ©es qui y figurent Ã  des fins commerciales, politiques, publicitaires et pour toute forme de sollicitation
commerciale et notamment l'envoi de courriers Ã©lectroniques non sollicitÃ©s.</p>
<p>Article 3 - Contenu du site
Toutes les marques, photographies, textes, commentaires, illustrations, images animÃ©es ou non, sÃ©quences vidÃ©o, sons, ainsi que
toutes les applications informatiques qui pourraient Ãªtre utilisÃ©es pour faire fonctionner ce site et plus gÃ©nÃ©ralement tous les
Ã©lÃ©ments reproduits ou utilisÃ©s sur le site sont protÃ©gÃ©s par les lois en vigueur au titre de la propriÃ©tÃ© intellectuelle.
Ils sont la propriÃ©tÃ© pleine et entiÃ¨re de l'Ã©diteur ou de ses partenaires. Toute reproduction, reprÃ©sentation, utilisation ou
adaptation, sous quelque forme que ce soit, de tout ou partie de ces Ã©lÃ©ments, y compris les applications informatiques, sans
l'accord prÃ©alable et Ã©crit de l'Ã©diteur, sont strictement interdites. Le fait pour l'Ã©diteur de ne pas engager de procÃ©dure dÃ¨s la
prise de connaissance de ces utilisations non autorisÃ©es ne vaut pas acceptation desdites utilisations et renonciation aux
poursuites.</p>
<p>Article 4 - Gestion du site
Pour la bonne gestion du site, l'Ã©diteur pourra Ã  tout moment :
suspendre, interrompre ou limiter l'accÃ¨s Ã  tout ou partie du site, rÃ©server l'accÃ¨s au site, ou Ã  certaines parties du site, Ã  une
catÃ©gorie dÃ©terminÃ©e d'internautes ;
- supprimer toute information pouvant en perturber le fonctionnement ou entrant en contravention avec les lois nationales ou
internationales;
suspendre le site afin de procÃ©der Ã  des mises Ã  jour.</p>
<p>Article 5 - ResponsabilitÃ©s
La responsabilitÃ© de l'Ã©diteur ne peut Ãªtre engagÃ©e en cas de dÃ©faillance, panne, difficultÃ© ou interruption de fonctionnement,
empÃªchant l'accÃ¨s au site ou Ã  une de ses fonctionnalitÃ©s.
Le matÃ©riel de connexion au site que vous utilisez est sous votre entiÃ¨re responsabilitÃ©. Vous devez prendre toutes les mesures
appropriÃ©es pour protÃ©ger votre matÃ©riel et vos propres donnÃ©es notamment d'attaques virales par Internet. Vous Ãªtes par
ailleurs seul responsable des sites et donnÃ©es que vous consultez.
L'Ã©diteur ne pourra Ãªtre tenu responsable en cas de poursuites judiciaires Ã  votre encontre :
du fait de l'usage du site ou de tout service accessible via Internet ;
du fait du non-respect par vous des prÃ©sentes conditions gÃ©nÃ©rales.
L'Ã©diteur n'est pas responsable des dommages causÃ©s Ã  vous-mÃªme, Ã  des tiers et/ou Ã  votre Ã©quipement du fait de votre
connexion ou de votre utilisation du site et vous renoncez Ã  toute action contre lui de ce fait.
Si l'Ã©diteur venait Ã  faire l'objet d'une procÃ©dure amiable ou judiciaire en raison de votre utilisation du site, il pourra se retourner
contre vous pour obtenir l'indemnisation de tous les prÃ©judices, sommes, condamnations et frais qui pourraient dÃ©couler de cette
procÃ©dure.</p>
<p>Article 6 - Liens hypertextes
La mise en place par les utilisateurs de tous liens hypertextes vers tout ou partie du site est strictement interdite, sauf
autorisation prÃ©alable et Ã©crite de l'Ã©diteur.
L'Ã©diteur est libre de refuser cette autorisation sans avoir Ã  justifier de quelque maniÃ¨re que ce soit sa dÃ©cision. Dans le cas oÃ¹
l'Ã©diteur accorderait son autorisation, celle-ci n'est dans tous les cas que temporaire et pourra Ãªtre retirÃ©e Ã  tout moment, sans
obligation de justification Ã  la charge de l'Ã©diteur.
Toute information accessible via un lien vers d'autres sites n'est pas publiÃ©e par l'Ã©diteur. L'Ã©diteur ne dispose d'aucun droit sur
le contenu prÃ©sent dans ledit lien.</p>
<p>Article 7 - Collecte et protection des donnÃ©es
Vos donnÃ©es sont collectÃ©es par la sociÃ©tÃ© Pathcontrol
Une donnÃ©e Ã  caractÃ¨re personnel dÃ©signe toute information concernant une personne physique identifiÃ©e ou identifiable
(personne concernÃ©e); est rÃ©putÃ©e identifiable une personne qui peut Ãªtre identifiÃ©e, directement ou indirectement, notamment
par rÃ©fÃ©rence Ã  un nom, un numÃ©ro d'identification ou Ã  un ou plusieurs Ã©lÃ©ments spÃ©cifiques, propres Ã  son identitÃ© physique,
physiologique, gÃ©nÃ©tique, psychique, Ã©conomique, culturelle ou sociale.
Les informations personnelles pouvant Ãªtre recueillies sur le site sont principalement utilisÃ©es par l'Ã©diteur pour la gestion des
relations avec vous, et le cas Ã©chÃ©ant pour le traitement de vos commandes.
Les donnÃ©es personnelles collectÃ©es sont les suivantes :
- nom et prÃ©nom
- adresse mail</p>
<p>Article 8 - Droit d'accÃ¨s, de rectification et de dÃ©rÃ©fÃ©rencement de vos donnÃ©es
En application de la rÃ©glementation applicable aux donnÃ©es Ã  caractÃ¨re personnel, les utilisateurs disposent des droits suivants :
le droit d'accÃ¨s : ils peuvent exercer leur droit d'accÃ¨s, pour connaÃ®tre les donnÃ©es personnelles les concernant, en Ã©crivant
Ã  l'adresse Ã©lectronique ci-dessous mentionnÃ©e. Dans ce cas, avant la mise en Å“uvre de ce droit, la Plateforme peut
demander une preuve de l'identitÃ© de l'utilisateur afin d'en vÃ©rifier l'exactitude ;
â€¢ le droit de rectification : si les donnÃ©es Ã  caractÃ¨re personnel dÃ©tenues par la Plateforme sont inexactes, ils peuvent
demander la mise Ã  jour des informations ;
â€¢ le droit de suppression des donnÃ©es : les utilisateurs peuvent demander la suppression de leurs donnÃ©es Ã  caractÃ¨re
personnel, conformÃ©ment aux lois applicables en matiÃ¨re de protection des donnÃ©es ;
le droit Ã  la limitation du traitement : les utilisateurs peuvent de demander Ã  la Plateforme de limiter le traitement des
donnÃ©es personnelles conformÃ©ment aux hypothÃ¨ses prÃ©vues par le RGPD;
le droit de s'opposer au traitement des donnÃ©es : les utilisateurs peuvent s'opposer Ã  ce que leurs donnÃ©es soient traitÃ©es
conformÃ©ment aux hypothÃ¨ses prÃ©vues par le RGPD;
le droit Ã  la portabilitÃ© : ils peuvent rÃ©clamer que la Plateforme leur remette les donnÃ©es personnelles qu'ils ont
fournies pour les transmettre Ã  une nouvelle Plateforme.
Vous pouvez exercer ce droit en nous contactant, Ã  l'adresse suivante :
57 rue de Turbigo 75003 Paris
Ou par email, Ã  l'adresse :
admin@pathcontrol.com
Toute demande doit Ãªtre accompagnÃ©e de la photocopie d'un titre d'identitÃ© en cours de validitÃ© signÃ© et faire mention de
l'adresse Ã  laquelle l'Ã©diteur pourra contacter le demandeur. La rÃ©ponse sera adressÃ©e dans le mois suivant la rÃ©ception de la
demande. Ce dÃ©lai d'un mois peut Ãªtre prolongÃ© de deux mois si la complexitÃ© de la demande et/ou le nombre de demandes
l'exigent.
De plus, et depuis la loi nÂ°2016-1321 du 7 octobre 2016, les personnes qui le souhaitent, ont la possibilitÃ© d'organiser le sort de
leurs donnÃ©es aprÃ¨s leur dÃ©cÃ¨s. Pour plus d'information sur le sujet, vous pouvez consulter le site Internet de la
CNIL:https://www.cnil.fr/
Les utilisateurs peuvent aussi introduire une rÃ©clamation auprÃ¨s de la CNIL sur le site de la CNIL : https://www.cnil.fr.
Nous vous recommandons de nous contacter dans un premier temps avant de dÃ©poser une rÃ©clamation auprÃ¨s de la CNIL., car
nous sommes Ã  votre entiÃ¨re disposition pour rÃ©gler votre problÃ¨me.</p>
<p>Article 9 - Utilisation des donnÃ©es
Les donnÃ©es personnelles collectÃ©es auprÃ¨s des utilisateurs ont pour objectif la mise Ã  disposition des services de la Plateforme,
leur amÃ©lioration et le maintien d'un environnement sÃ©curisÃ©. La base lÃ©gale des traitements est l'exÃ©cution du contrat entre
l'utilisateur et la Plateforme. Plus prÃ©cisÃ©ment, les utilisations sont les suivantes :
- accÃ¨s et utilisation de la Plateforme par l'utilisateur ;
- gestion du fonctionnement et optimisation de la Plateforme :
â€¢ mise en Å“uvre d'une assistance utilisateurs
- vÃ©rification, identification et authentification des donnÃ©es transmises par l'utilisateur ;
- personnalisation des services en affichant des publicitÃ©s en fonction de l'historique de navigation de l'utilisateur, selon ses
prÃ©fÃ©rences:
- prÃ©vention et dÃ©tection des fraudes, malwares (malicious softwares ou logiciels malveillants) et gestion des incidents de
sÃ©curitÃ©:
- gestion des Ã©ventuels litiges avec les utilisateurs :
- envoi d'informations commerciales et publicitaires, en fonction des prÃ©fÃ©rences de l'utilisateur ;</p>
<p>Article 10 - Politique de conservation des donnÃ©es
La Plateforme conserve vos donnÃ©es pour la durÃ©e nÃ©cessaire pour vous fournir ses services ou son assistance.
Dans la mesure raisonnablement nÃ©cessaire ou requise pour satisfaire aux obligations lÃ©gales ou rÃ©glementaires, rÃ©gler des
litiges, empÃªcher les fraudes et abus ou appliquer nos modalitÃ©s et conditions, nous pouvons Ã©galement conserver certaines de
vos informations si nÃ©cessaire, mÃªme aprÃ¨s que vous ayez fermÃ© votre compte ou que nous n'ayons plus besoin pour vous
fournir nos services.</p>
<p>Article 11-Partage des donnÃ©es personnelles avec des tiers
Les donnÃ©es personnelles peuvent Ãªtre partagÃ©es avec des sociÃ©tÃ©s tierces exclusivement dans l'Union europÃ©enne, dans les cas
suivants:
- lorsque l'utilisateur publie, dans les zones de commentaires libres de la Plateforme, des informations accessibles au public ;
- quand l'utilisateur autorise le site web d'un tiers Ã  accÃ©der Ã  ses donnÃ©es :
quand la Plateforme recourt aux services de prestataires pour fournir l'assistance utilisateurs, la publicitÃ© et les services de
paiement. Ces prestataires disposent d'un accÃ¨s limitÃ© aux donnÃ©es de l'utilisateur, dans le cadre de l'exÃ©cution de ces
prestations, et ont l'obligation contractuelle de les utiliser en conformitÃ© avec les dispositions de la rÃ©glementation applicable en
matiÃ¨re protection des donnÃ©es Ã  caractÃ¨re personnel
- si la loi l'exige, la Plateforme peut effectuer la transmission de donnÃ©es pour donner suite aux rÃ©clamations prÃ©sentÃ©es contre
la Plateforme et se conformer aux procÃ©dures administratives et judiciaires.</p>
<p>Article 12-Offres commerciales
Vous Ãªtes susceptible de recevoir des offres commerciales de l'Ã©diteur. Si vous ne le souhaitez pas, veuillez cliquer sur le lien
suivant: admin@pathcontrol.com
Vos donnÃ©es sont susceptibles d'Ãªtre utilisÃ©es par les partenaires de l'Ã©diteur Ã  des fins de prospection commerciale, si vous ne le
souhaitez pas, veuillez cliquer sur le lien suivant : admin@pathcontrol.com
Si, lors de la consultation du site, vous accÃ©dez Ã  des donnÃ©es Ã  caractÃ¨re personnel, vous devez vous abstenir de toute collecte,
de toute utilisation non autorisÃ©e et de tout acte pouvant constituer une atteinte Ã  la vie privÃ©e ou Ã  la rÃ©putation des personnes.
L'Ã©diteur dÃ©cline toute responsabilitÃ© Ã  cet Ã©gard.
Les donnÃ©es sont conservÃ©es et utilisÃ©es pour une durÃ©e conforme Ã  la lÃ©gislation en vigueur.</p>
<p>Article 13 - Cookies
Qu'est-ce qu'un Â« cookie Â» ?
Un Â« Cookie Â» ou traceur est un fichier Ã©lectronique dÃ©posÃ© sur un terminal (ordinateur, tablette, smartphone,...) et lu par
exemple lors de la consultation d'un site internet, de la lecture d'un courrier Ã©lectronique, de l'installation ou de l'utilisation d'un
logiciel ou d'une application mobile et ce, quel que soit le type de terminal utilisÃ© (source : https://www.cnil.fr/fr/cookies-traceurs-que-dit-la-loi).
Le site peut collecter automatiquement des informations standards. Toutes les informations collectÃ©es indirectement ne seront utilisÃ©es que pour
suivre le volume, le type et la configuration du trafic utilisant ce site, pour en dÃ©velopper la conception et l'agencement et Ã  d'autres fins
administratives et de planification et plus gÃ©nÃ©ralement pour amÃ©liorer le service que nous vous offrons.
Le cas Ã©chÃ©ant, des Â« cookies Â» Ã©manant de l'Ã©diteur du site et/ou des sociÃ©tÃ©s tiers pourront Ãªtre dÃ©posÃ©s sur votre terminal,
avec votre accord. Dans ce cas, lors de la premiÃ¨re navigation sur ce site, une banniÃ¨re explicative sur l'utilisation des
Â« cookies Â» apparaÃ®tra. Avant de poursuivre la navigation, le client et/ou le prospect devra accepter ou refuser l'utilisation
desdits Â« cookies Â». Le consentement donnÃ© sera valable pour une pÃ©riode de treize (13) mois. L'utilisateur a la possibilitÃ© de
dÃ©sactiver les cookies Ã  tout moment.
Les cookies suivants sont prÃ©sents sur ce site :
La durÃ©e de vie de ces cookies est de treize mois.</p>
<p>Article 14-Photographies et reprÃ©sentation des produits
Les photographies de produits, accompagnant leur description, ne sont pas contractuelles et n'engagent pas l'Ã©diteur.</p>
<p>Article 15 - Loi applicable
Les prÃ©sentes conditions d'utilisation du site sont rÃ©gies par la loi franÃ§aise et soumises Ã  la compÃ©tence des tribunaux du siÃ¨ge
social de l'Ã©diteur, sous rÃ©serve d'une attribution de compÃ©tence spÃ©cifique dÃ©coulant d'un texte de loi ou rÃ©glementaire
particulier.</p>
<p>Article 16 - Contactez-nous
Pour toute question, information sur les produits prÃ©sentÃ©s sur le site, ou concernant le site lui-mÃªme, vous pouvez laisser un
message Ã  l'adresse suivante : admin@pathcontrol.com</p>
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