<!DOCTYPE html>
<html lang="fr">
     <head>
          <meta charset="UTF-8">
          <title>BDD</title>
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
          <link rel="stylesheet" href="css.css">
     </head>
     <body>
          <div class="container-fluid">
               <div class="row">
                    <div class="">
                         <div id="top">
                              <nav>
                                   <div class="nav-wrapper">
                                        <a href="#" class="brand-logo">All</a>
                                        <ul id="nav-mobile" class="right hide-on-med-and-down">
                                             <li><a href="#top">HAUT</a></li>
                                             <li><a href="#un">PALMER</a></li>
                                             <li><a href="#de">FEMME</a></li>
                                             <li><a href="#tr">PAYS</a></li>
                                             <li><a href="#qu">GOOGLE</a></li>
                                             <li><a href="#si">INSERT</a></li>
                                             <li><a href="#ci">TRIE</a></li>
                                             <li><a href="#se">GENDRE</a></li>
                                             <li><a href="#hu">AGE</a></li>
                                             <li><a href="#ne">MOYENNE</a></li>
                                             <li><a href="#di">ACS</a></li>
                                        </ul>
                                   </div>
                              </nav>
                         </div>
                         <?php 
                         $dsn = 'mysql:host=localhost;dbname=arnaudw_BDD1;port=3306;charset=utf8';
                         $pdo = new PDO($dsn, 'arnaudw' , '22mlh2YiC3');
                         $query = $pdo->query("SELECT * FROM `iad`");
                         $resultat = $query->fetchAll();
                         print("<table border=\"5\">");
                         foreach ($resultat as $key => $variable)
                         {
                              print("<tr>");
                              print("<td>".$resultat[$key]['id']."</td>");
                              print("<td>".$resultat[$key]['first_name']."</td>");
                              print("<td>".$resultat[$key]['last_name']."</td>");
                              print("<td>".$resultat[$key]['email']."</td>");
                              print("<td>".$resultat[$key]['gender']."</td>");
                              print("<td>".$resultat[$key]['ip_address']."</td>");
                              print("<td>".$resultat[$key]['birth_date']."</td>");
                              print("<td>".$resultat[$key]['zip_code']."</td>");
                              print("<td>".$resultat[$key]['avatar_url']."</td>");
                              print("<td>".$resultat[$key]['state_code']."</td>");
                              print("<td>".$resultat[$key]['country_code']."</td>");
                              print("<tr>");          }
                         ?>
                         <?php
                         $query = $pdo->query("SELECT * FROM `iad` WHERE last_name = 'palmer' ");
                         $resultat = $query->fetchAll();
                         print("<table border=\"5\">");
                         foreach ($resultat as $key => $variable)
                         {
                              print("<tr>");
                              print("<td>".$resultat[$key]['id']."</td>");
                              print("<td>".$resultat[$key]['first_name']."</td>");
                              print("<td>".$resultat[$key]['last_name']."</td>");
                              print("<td>".$resultat[$key]['email']."</td>");
                              print("<td>".$resultat[$key]['gender']."</td>");
                              print("<td>".$resultat[$key]['ip_address']."</td>");
                              print("<td>".$resultat[$key]['birth_date']."</td>");
                              print("<td>".$resultat[$key]['zip_code']."</td>");
                              print("<td>".$resultat[$key]['avatar_url']."</td>");
                              print("<td>".$resultat[$key]['state_code']."</td>");
                              print("<td>".$resultat[$key]['country_code']."</td>");
                              print("<tr>");          }
                         ?>    
                         <div id="un">
                              <nav>
                                   <div class="nav-wrapper">
                                        <a href="#" class="brand-logo">"Palmer"</a>
                                        <ul id="nav-mobile" class="right hide-on-med-and-down">
                                             <li><a href="#top">HAUT</a></li>
                                             <li><a href="#un">PALMER</a></li>
                                             <li><a href="#de">FEMME</a></li>
                                             <li><a href="#tr">PAYS</a></li>
                                             <li><a href="#qu">GOOGLE</a></li>
                                             <li><a href="#si">INSERT</a></li>
                                             <li><a href="#ci">TRIE</a></li>
                                             <li><a href="#se">GENDRE</a></li>
                                             <li><a href="#hu">AGE</a></li>
                                             <li><a href="#ne">MOYENNE</a></li>
                                             <li><a href="#di">ACS</a></li>
                                        </ul>
                                   </div>
                              </nav>
                         </div>
                         <?php
                         $query = $pdo->query("SELECT * FROM `iad` WHERE gender = 'female' ");
                         $resultat = $query->fetchAll();
                         print("<table border=\"5\">");
                         foreach ($resultat as $key => $variable)
                         {
                              print("<tr>");
                              print("<td>".$resultat[$key]['id']."</td>");
                              print("<td>".$resultat[$key]['first_name']."</td>");
                              print("<td>".$resultat[$key]['last_name']."</td>");
                              print("<td>".$resultat[$key]['email']."</td>");
                              print("<td>".$resultat[$key]['gender']."</td>");
                              print("<td>".$resultat[$key]['ip_address']."</td>");
                              print("<td>".$resultat[$key]['birth_date']."</td>");
                              print("<td>".$resultat[$key]['zip_code']."</td>");
                              print("<td>".$resultat[$key]['avatar_url']."</td>");
                              print("<td>".$resultat[$key]['state_code']."</td>");
                              print("<td>".$resultat[$key]['country_code']."</td>");
                              print("<tr>");      
                         }
                         ?>
                         <div id="de">
                              <nav>
                                   <div class="nav-wrapper">
                                        <a href="#" class="brand-logo">Female Only</a>
                                        <ul id="nav-mobile" class="right hide-on-med-and-down">
                                             <li><a href="#top">HAUT</a></li>
                                             <li><a href="#un">PALMER</a></li>
                                             <li><a href="#de">FEMME</a></li>
                                             <li><a href="#tr">PAYS</a></li>
                                             <li><a href="#qu">GOOGLE</a></li>
                                             <li><a href="#si">INSERT</a></li>
                                             <li><a href="#ci">TRIE</a></li>
                                             <li><a href="#se">GENDRE</a></li>
                                             <li><a href="#hu">AGE</a></li>
                                             <li><a href="#ne">MOYENNE</a></li>
                                             <li><a href="#di">ACS</a></li>
                                        </ul>
                                   </div>
                              </nav>
                         </div>
                         <?php
                         $query = $pdo->query("SELECT * FROM `iad` WHERE country_code LIKE 'N%' ");
                         $resultat = $query->fetchAll();
                         print("<table border=\"5\">");
                         foreach ($resultat as $key => $variable)
                         {
                              print("<tr>");
                              print("<td>".$resultat[$key]['id']."</td>");
                              print("<td>".$resultat[$key]['first_name']."</td>");
                              print("<td>".$resultat[$key]['last_name']."</td>");
                              print("<td>".$resultat[$key]['email']."</td>");
                              print("<td>".$resultat[$key]['gender']."</td>");
                              print("<td>".$resultat[$key]['ip_address']."</td>");
                              print("<td>".$resultat[$key]['birth_date']."</td>");
                              print("<td>".$resultat[$key]['zip_code']."</td>");
                              print("<td>".$resultat[$key]['avatar_url']."</td>");
                              print("<td>".$resultat[$key]['state_code']."</td>");
                              print("<td>".$resultat[$key]['country_code']."</td>");
                              print("<tr>");
                         }
                         ?>
                         <div id="tr">
                              <nav>
                                   <div class="nav-wrapper">
                                        <a href="#" class="brand-logo">N Country</a>
                                        <ul id="nav-mobile" class="right hide-on-med-and-down">
                                             <li><a href="#top">HAUT</a></li>
                                             <li><a href="#un">PALMER</a></li>
                                             <li><a href="#de">FEMME</a></li>
                                             <li><a href="#tr">PAYS</a></li>
                                             <li><a href="#qu">GOOGLE</a></li>
                                             <li><a href="#si">INSERT</a></li>
                                             <li><a href="#ci">TRIE</a></li>
                                             <li><a href="#se">GENDRE</a></li>
                                             <li><a href="#hu">AGE</a></li>
                                             <li><a href="#ne">MOYENNE</a></li>
                                             <li><a href="#di">ACS</a></li>
                                        </ul>
                                   </div>
                              </nav>
                         </div>
                         <?php
                         $query = $pdo->query("SELECT * FROM `iad` WHERE email LIKE '%google%' ");
                         $resultat = $query->fetchAll();
                         print("<table border=\"5\">");
                         foreach ($resultat as $key => $variable)
                         {
                              print("<tr>");
                              print("<td>".$resultat[$key]['id']."</td>");
                              print("<td>".$resultat[$key]['first_name']."</td>");
                              print("<td>".$resultat[$key]['last_name']."</td>");
                              print("<td>".$resultat[$key]['email']."</td>");
                              print("<td>".$resultat[$key]['gender']."</td>");
                              print("<td>".$resultat[$key]['ip_address']."</td>");
                              print("<td>".$resultat[$key]['birth_date']."</td>");
                              print("<td>".$resultat[$key]['zip_code']."</td>");
                              print("<td>".$resultat[$key]['avatar_url']."</td>");
                              print("<td>".$resultat[$key]['state_code']."</td>");
                              print("<td>".$resultat[$key]['country_code']."</td>");
                              print("<tr>");
                         }
                         ?>
                         <div id="qu">
                              <nav>
                                   <div class="nav-wrapper">
                                        <a href="#" class="brand-logo">google</a>
                                        <ul id="nav-mobile" class="right hide-on-med-and-down">
                                             <li><a href="#top">HAUT</a></li>
                                             <li><a href="#un">PALMER</a></li>
                                             <li><a href="#de">FEMME</a></li>
                                             <li><a href="#tr">PAYS</a></li>
                                             <li><a href="#qu">GOOGLE</a></li>
                                             <li><a href="#si">INSERT</a></li>
                                             <li><a href="#ci">TRIE</a></li>
                                             <li><a href="#se">GENDRE</a></li>
                                             <li><a href="#hu">AGE</a></li>
                                             <li><a href="#ne">MOYENNE</a></li>
                                             <li><a href="#di">ACS</a></li>
                                        </ul>
                                   </div>
                              </nav>
                         </div>
                         <?php
                         $query = $pdo->query("SELECT country_code, COUNT(country_code) FROM `iad` GROUP BY country_code ORDER BY COUNT(country_code) ASC");
                         $resultat = $query->fetchAll();
                         print("<table border=\"5\">");
                         foreach ($resultat as $key => $variable)
                         {
                              print("<tr>");
                              print("<td>".$resultat[$key]['country_code']."</td>");
                              print("<td>".$resultat[$key]['COUNT(country_code)']."</td>");
                              print("<tr>");
                         }
                         ?>
                         <div id="si">
                              <nav>
                                   <div class="nav-wrapper">
                                        <a href="#" class="brand-logo">add remove</a>
                                        <ul id="nav-mobile" class="right hide-on-med-and-down">
                                             <li><a href="#top">HAUT</a></li>
                                             <li><a href="#un">PALMER</a></li>
                                             <li><a href="#de">FEMME</a></li>
                                             <li><a href="#tr">PAYS</a></li>
                                             <li><a href="#qu">GOOGLE</a></li>
                                             <li><a href="#si">INSERT</a></li>
                                             <li><a href="#ci">TRIE</a></li>
                                             <li><a href="#se">GENDRE</a></li>
                                             <li><a href="#hu">AGE</a></li>
                                             <li><a href="#ne">MOYENNE</a></li>
                                             <li><a href="#di">ACS</a></li>
                                        </ul>
                                   </div>
                              </nav>
                              <p>
                                   Ajout <br>
                                   $insert = "INSERT INTO `iad` VALUES ('1001','WAWRZYNIAK','Arnaud','arnaud.wawrzyniak@gmail.com','Male',NULL,'27-04-1991',NULL, NULL, NULL, 'FR')";<br>
                                   $pdo->exec($insert);
                              </p>
                              <p>
                                   Modif<br>
                                   $modif = "UPDATE `iad` SET email = 'arnaudw@fhgjhcodeur.online' WHERE last_name = 'Arnaud'"; <br>
                                   $pdo->exec($modif);
                              </p>
                              <p>
                                   Suppr<br>
                                   $delete = "DELETE FROM `iad` WHERE id = 1001";<br>
                                   $pdo->exec($delete);
                              </p>
                         </div>
                         <div id="ci">
                              <nav>
                                   <div class="nav-wrapper">
                                        <a href="#" class="brand-logo">Filtre états</a>
                                        <ul id="nav-mobile" class="right hide-on-med-and-down">
                                             <li><a href="#top">HAUT</a></li>
                                             <li><a href="#un">PALMER</a></li>
                                             <li><a href="#de">FEMME</a></li>
                                             <li><a href="#tr">PAYS</a></li>
                                             <li><a href="#qu">GOOGLE</a></li>
                                             <li><a href="#si">INSERT</a></li>
                                             <li><a href="#ci">TRIE</a></li>
                                             <li><a href="#se">GENDRE</a></li>
                                             <li><a href="#hu">AGE</a></li>
                                             <li><a href="#ne">MOYENNE</a></li>
                                             <li><a href="#di">ACS</a></li>
                                        </ul>
                                   </div>
                              </nav>
                         </div>
                         <?php
                         $query = $pdo->query("SELECT gender, COUNT(gender) FROM `iad` GROUP BY gender ORDER BY COUNT(gender)");
                         $resultat = $query->fetchAll();
                         print("<table border=\"5\">");
                         foreach ($resultat as $key => $variable)
                         {
                              print("<tr>");
                              print("<td>".$resultat[$key]['gender']."</td>");
                              print("<td>".$resultat[$key]['COUNT(gender)']."</td>");
                              print("<tr>");
                         }
                         ?>
                         <div id="se">
                              <nav>
                                   <div class="nav-wrapper">
                                        <a href="#" class="brand-logo">Gender</a>
                                        <ul id="nav-mobile" class="right hide-on-med-and-down">
                                             <li><a href="#top">HAUT</a></li>
                                             <li><a href="#un">PALMER</a></li>
                                             <li><a href="#de">FEMME</a></li>
                                             <li><a href="#tr">PAYS</a></li>
                                             <li><a href="#qu">GOOGLE</a></li>
                                             <li><a href="#si">INSERT</a></li>
                                             <li><a href="#ci">TRIE</a></li>
                                             <li><a href="#se">GENDRE</a></li>
                                             <li><a href="#hu">AGE</a></li>
                                             <li><a href="#ne">MOYENNE</a></li>
                                             <li><a href="#di">ACS</a></li>
                                        </ul>
                                   </div>
                              </nav>
                         </div>
                         <table>
                              <?php
                              $reponse = $pdo->query('SELECT last_name, birth_date, CURDATE(), TIMESTAMPDIFF(YEAR,birth_date,CURDATE()) AS age 
                    FROM iad WHERE birth_date is not NULL;');
                              while ($donnees = $reponse->fetch())
                              {
                                   echo '<tr><td>'.$donnees['last_name'].'</td><td>'.$donnees['age'].'ans</td></tr>'; '<br />';
                              }
                              $reponse->closeCursor();
                              ?>
                              <div id="hu">
                                   <nav>
                                        <div class="nav-wrapper">
                                             <a href="#" class="brand-logo">AGE</a>
                                             <ul id="nav-mobile" class="right hide-on-med-and-down">
                                                  <li><a href="#top">HAUT</a></li>
                                                  <li><a href="#un">PALMER</a></li>
                                                  <li><a href="#de">FEMME</a></li>
                                                  <li><a href="#tr">PAYS</a></li>
                                                  <li><a href="#qu">GOOGLE</a></li>
                                                  <li><a href="#si">INSERT</a></li>
                                                  <li><a href="#ci">TRIE</a></li>
                                                  <li><a href="#se">GENDRE</a></li>
                                                  <li><a href="#hu">AGE</a></li>
                                                  <li><a href="#ne">MOYENNE</a></li>
                                                  <li><a href="#di">ACS</a></li>
                                             </ul>
                                        </div>
                                   </nav>
                              </div>
                         </table>
                         <div id="ne">
                              <nav>
                                   <div class="nav-wrapper">
                                        <a href="#" class="brand-logo">MOYENNE</a>
                                        <ul id="nav-mobile" class="right hide-on-med-and-down">
                                             <li><a href="#top">HAUT</a></li>
                                             <li><a href="#un">PALMER</a></li>
                                             <li><a href="#de">FEMME</a></li>
                                             <li><a href="#tr">PAYS</a></li>
                                             <li><a href="#qu">GOOGLE</a></li>
                                             <li><a href="#si">INSERT</a></li>
                                             <li><a href="#ci">TRIE</a></li>
                                             <li><a href="#se">GENDRE</a></li>
                                             <li><a href="#hu">AGE</a></li>
                                             <li><a href="#ne">MOYENNE</a></li>
                                             <li><a href="#di">ACS</a></li>
                                        </ul>
                                   </div>
                              </nav>
                         </div>
                         <table>
                              <?php
                              $moy = $pdo->query('SELECT gender, YEAR(NOW())-AVG(YEAR(birth_date)) AS moy_age from iad where birth_date not in ("0000-00-00") GROUP BY gender ');
                              while ($donnees = $moy->fetch())
                              {
                                   echo '<tr><td>'.$donnees['gender'].'</td><td>'.ROUND($donnees['moy_age']).'Ans</td></tr><br>';
                              }
                              $moy->closeCursor();
                              ?>
                         </table>
                         <div id="di">
                              <nav>
                                   <div class="nav-wrapper">
                                        <a href="#" class="brand-logo">ACS</a>
                                        <ul id="nav-mobile" class="right hide-on-med-and-down">
                                             <li><a href="#top">HAUT</a></li>
                                             <li><a href="#un">PALMER</a></li>
                                             <li><a href="#de">FEMME</a></li>
                                             <li><a href="#tr">PAYS</a></li>
                                             <li><a href="#qu">GOOGLE</a></li>
                                             <li><a href="#si">INSERT</a></li>
                                             <li><a href="#ci">TRIE</a></li>
                                             <li><a href="#se">GENDRE</a></li>
                                             <li><a href="#hu">AGE</a></li>
                                             <li><a href="#ne">MOYENNE</a></li>
                                             <li><a href="#di">ACS</a></li>
                                        </ul>
                                   </div>
                              </nav>
                         </div>
                         <?php
                         $query = $pdo->query("SELECT acsnames.ID,acsnames.NOM,acsnames.PRENOM,acsnames.DPT,departement.departement_nom FROM acsnames INNER JOIN departement WHERE acsnames.DPT = departement.departement_code LIMIT 0,300");
                         $resultat = $query->fetchAll();
                         print("<table border=\"5\">");
                         foreach ($resultat as $key => $variable)
                         {
                              print("<tr>");
                              print("<td>".$resultat[$key]['ID']."</td>");
                              print("<td>".$resultat[$key]['NOM']."</td>");
                              print("<td>".$resultat[$key]['PRENOM']."</td>");
                              print("<td>".$resultat[$key]['DPT']."</td>");
                              print("<td>".$resultat[$key]['departement_nom']."</td>");
                              print("<tr>");
                         }
                         ?>
                    </div>
               </div>
          </div>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
     </body>
</html>