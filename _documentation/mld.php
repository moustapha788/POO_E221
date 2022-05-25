<div class="mt-5">
    <form>
        <div class="row">
            <div class="">
                <label>Login</label>
                <input type="text" class="form-control" />
            </div>
            <div class="    ">
                <label>Mot de passe</label>
                <input type="text" class="form-control" />
            </div>
        </div>

        <button class="btn btn-primary btn-sm mt-3 offset-5">Se connecter</button>
    </form>
</div>
<?php
/* 



HÉRITAGE
Modèle logique de données(MLD)
    =>   HÉRITAGE( 3 Approches)
        ! Single Table
            Toutes les tables qui participent dans cette héritage seront dans une table qui sera généralement la classe mère
                ++=> peronne(id,nom_complet,role,login,password,grade,matricule,sexe,adresse)
        ! Joined
            On crée autant de tables que de classes mais la clé de la classe mère migre comme clé étrangère au niveau des classes filles
                ++=> peronne(id,nom_complet,role)
                ++=> user(login,password,#peronne_id)
                ++=> profeseur(grade,#peronne_id)
                ++=> rp(#peronne_id)
                ++=> ac(#peronne_id)
                ++=> etudiant(matricule,sexe,adresse,#peronne_id)
        ! fusion des 2 aproches précédentes
    => Convention BDD
        ! Nom des tables et des colonnes 
            snake_case
        ! clé étrangère
            nom_table_id
        ! Un seul id qui est destiné à la classe mère
        ! Classe d'association
            table1_table2
    => Convention mld multiplicité
        ! Clé du faible qui migre au niveau du fort
            Transformation des associations
                !***! ==> 1->*      //OneToMany
                !***! ==> *->1      //ManyToOne
                !***! ==> 1    //OneToOne(1,1)
                !***! ==> *->*      //ManyToMany

                !   OneToMany   ->  ManyToOne
                annee_scolaire(id,annee)
                inscription(id,#annee_scolaire_id)

                !   ManyToMany   ->  ManyToMany =>(classe d'association)
                classe(id,libele,filiere,niveau)
                professeur_classe(#classe_id,#profeseur_id)
                professeur(grade,#peronne_id)
 */


/* http://localhost/POO_E221/public/ */

// ini_set("display_errors", 1);
// ini_set("display_startup_errors", 1);
// error_reporting(E_ALL);

// use App\Model\AC;
// use App\Model\RP;
// use App\Model\Etudiant;
// use App\Model\Professeur;

// $rp = new RP();
// $ac = new AC();
// $prof = new Professeur();
// $etudiant = new Etudiant();


// var_dump(
//     ' rp: ' .
//         $rp->getRole(),
//     ' ac: ' .
//         $ac->getRole(),
//     ' prof: ' .
//         $prof->getRole(),
//     ' etudiant: ' .
//         $etudiant->getRole()
// );


/* 
"App\\Src\\": "src/",
"App\\Controller\\": "controllers/",
"App\\Core\\": "core/",
"App\\Model\\": "models/",
"App\\Exeption\\": "exeptions/"








require_once(dirname(dirname(__FILE__)) . "/models/Personne.php");
require_once(dirname(dirname(__FILE__)) . "/models/User.php");
require_once(dirname(dirname(__FILE__)) . "/models/RP.php");
require_once(dirname(dirname(__FILE__)) . "/models/AC.php");
require_once(dirname(dirname(__FILE__)) . "/models/Etudiant.php");
require_once(dirname(dirname(__FILE__)) . "/models/Professeur.php");
require_once(dirname(dirname(__FILE__)) . "/models/AnneeScolaire.php");
require_once(dirname(dirname(__FILE__)) . "/models/Classe.php");
require_once(dirname(dirname(__FILE__)) . "/models/Demande.php");
require_once(dirname(dirname(__FILE__)) . "/models/Inscription.php");
require_once(dirname(dirname(__FILE__)) . "/models/Module.php");


                OU AVEC L'AUTOLOADING

require_once("../vendor/autoload.php");
use App\Model\Personne;
use App\Model\User;
use App\Model\Professeur;
use App\Model\RP;
use App\Model\AC;
use App\Model\Etudiant;
use App\Model\AnneeScolaire;
use App\Model\Classe;
use App\Model\Module;
use App\Model\Demande;
use App\Model\Inscription;
use App\Core\Model;






echo 'findAll de toutes les classes:personne et héritiers(users et professeurs)';
echo "<br>";

echo "<br>Model<br>";
Model::findAll();
echo "<br>Personne<br>";
Personne::findAll();
echo "<br>User<br>";
User::findAll();
echo "<br>RP<br>";
RP::findAll();
echo "<br>AC<br>";
AC::findAll();
echo "<br>Etudiant<br>";
Etudiant::findAll();
echo "<br>Professeur<br>";
Professeur::findAll();

echo "<br><br><br><br>";
echo 'findAll de toutes les autres classes:(non humains)';
echo "<br>";

echo "<br>AnneeScolaire<br>";
AnneeScolaire::findAll();
echo "<br>Classe<br>";
Classe::findAll();
echo "<br>Demande<br>";
Demande::findAll();
echo "<br>Inscription<br>";
Inscription::findAll();
echo "<br>Module<br>";
Module::findAll();





echo "<br>";
echo 'delete de toutes les classes:personne et héritiers(users et professeurs)';
echo "<br>";

echo "<br>Model<br>";
Model::delete(1);
echo "<br>Personne<br>";
Personne::delete(1);
echo "<br>User<br>";
User::delete(1);
echo "<br>RP<br>";
RP::delete(1);
echo "<br>AC<br>";
AC::delete(1);
echo "<br>Etudiant<br>";
Etudiant::delete(1);
echo "<br>Professeur<br>";
Professeur::delete(1);

echo "<br><br><br><br>";
echo 'delete de toutes les autres classes:(non humains)';
echo "<br>";

echo "<br>AnneeScolaire<br>";
AnneeScolaire::delete(1);
echo "<br>Classe<br>";
Classe::delete(1);
echo "<br>Demande<br>";
Demande::delete(1);
echo "<br>Inscription<br>";
Inscription::delete(1);
echo "<br>Module<br>";
Module::delete(1);




echo "<br>";
echo 'findById de toutes les classes:personne et héritiers(users et professeurs)';
echo "<br>";

echo "<br>Model<br>";
Model::findById(1);
echo "<br>Personne<br>";
Personne::findById(1);
echo "<br>User<br>";
User::findById(1);
echo "<br>RP<br>";
RP::findById(1);
echo "<br>AC<br>";
AC::findById(1);
echo "<br>Etudiant<br>";
Etudiant::findById(1);
echo "<br>Professeur<br>";
Professeur::findById(1);

echo "<br><br><br><br>";
echo 'findById de toutes les autres classes:(non humains)';
echo "<br>";

echo "<br>AnneeScolaire<br>";
AnneeScolaire::findById(1);
echo "<br>Classe<br>";
Classe::findById(1);
echo "<br>Demande<br>";
Demande::findById(1);
echo "<br>Inscription<br>";
Inscription::findById(1);
echo "<br>Module<br>";
Module::findById(1);










findAll de toutes les classes:personne et héritiers(users et professeurs)

Model
SELECT * FROM model
Personne
SELECT * FROM personne WHERE `role` like `ROLE_PERSONNE`
User
SELECT * FROM personne WHERE `role` like `ROLE_USER`
RP
SELECT * FROM personne WHERE `role` like `ROLE_RP`
AC
SELECT * FROM personne WHERE `role` like `ROLE_AC`
Etudiant
SELECT * FROM personne WHERE `role` like `ROLE_ETUDIANT`
Professeur
SELECT * FROM personne WHERE `role` like `ROLE_PROFESSEUR`



findAll de toutes les autres classes:(non humains)

AnneeScolaire
SELECT * FROM annee_scolaire
Classe
SELECT * FROM classe
Demande
SELECT * FROM demande
Inscription
SELECT * FROM inscription
Module
SELECT * FROM module
delete de toutes les classes:personne et héritiers(users et professeurs)

Model
DELETE FROM model WHERE id =?
Personne
DELETE FROM personne WHERE id =?
User
DELETE FROM personne WHERE id =?
RP
DELETE FROM personne WHERE id =?
AC
DELETE FROM personne WHERE id =?
Etudiant
DELETE FROM personne WHERE id =?
Professeur
DELETE FROM personne WHERE id =?



delete de toutes les autres classes:(non humains)

AnneeScolaire
DELETE FROM annee_scolaire WHERE id =?
Classe
DELETE FROM classe WHERE id =?
Demande
DELETE FROM demande WHERE id =?
Inscription
DELETE FROM inscription WHERE id =?
Module
DELETE FROM module WHERE id =?
findById de toutes les classes:personne et héritiers(users et professeurs)

Model
SELECT * FROM model WHERE id =?
Personne
SELECT * FROM personne WHERE id =?
User
SELECT * FROM personne WHERE id =?
RP
SELECT * FROM personne WHERE id =?
AC
SELECT * FROM personne WHERE id =?
Etudiant
SELECT * FROM personne WHERE id =?
Professeur
SELECT * FROM personne WHERE id =?



findById de toutes les autres classes:(non humains)

AnneeScolaire
SELECT * FROM annee_scolaire WHERE id =?
Classe
SELECT * FROM classe WHERE id =?
Demande
SELECT * FROM demande WHERE id =?
Inscription
SELECT * FROM inscription WHERE id =?
Module
SELECT * FROM module WHERE id =?





















*/

/* 
INSERTION D'Etudiant
*/
/* 
$et = new Etudiant();
$et->setNomComplet("Moustapha");
$et->setLogin("Moustapha123");
$et->setPassword("Moustapha123");
$et->setMatricule("P0490");
$et->setSexe("Masculin");
$et->setAdresse("Darou");
$et->insert();

$etudiant=Etudiant::findAll();
vardump($etudiant);
 */











/* 
INSERTION DE PROFESSEURS
*/
/* 
$prof = new Professeur();
$prof->setNomComplet("Mr Diop");
$prof->setGrade("Docteur");
$prof->insert();

$profs = Professeur::findAll();
var_dump($profs); 
*/







/* 
INSERTION DE ACs
*/

/*
 $ac = new AC();
$ac->setNomComplet("Mr Diop");
$ac->setLogin("Ac123");
$ac->setPassword("Ac123");
$ac->insert();




$ac = new AC();
$ac->setNomComplet("Mr Dioum");
$ac->setLogin("Ac1234");
$ac->setPassword("Ac1234");
$ac->insert();

$acs = AC::findAll();
var_dump($acs);
 */








 /* 
INSERTION DE RPs
*/
/* 
$ac = new RP();
$ac->setNomComplet("Mr Fall");
$ac->setLogin("Rp123");
$ac->setPassword("Rp123");
$ac->insert();

$rps = RP::findAll();
var_dump($rps);







$userConnect=User::findUserByLoginAndPassword("Ac1234","Ac123");
die_dump($userConnect);

*/


/* 
<tbody class="text-white bg-black bg-opacity-50 h4">

            <?php $i = 1;
            foreach ($acs as $attache) :
                $attache->numero = $i++; ?>
                <tr>
                    <?php
                    $columns = ["numero", "nom_complet", "login", "role"];
                    $HtmlProvider::tds($columns, $attache);
                    ?>

                    <td class="text-center">
                        <button class="btn btn-outline-warning btn-sm">Modifier</button>
                        <button class="btn btn-outline-danger btn-sm">Supprimer</button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
         */