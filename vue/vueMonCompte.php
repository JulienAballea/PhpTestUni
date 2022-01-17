<?php
require_once "PDO/PersonneDB.php";
require_once "vue/Vue.php";
class vueMonCompte extends Vue
{
	function affiche()
	{
		//parametre de connexion à la base de donnée
		$strConnection = Constantes::TYPE . ':host=' . Constantes::HOST . ';dbname=' . Constantes::BASE;
		$arrExtraParam = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
		$db = new PDO($strConnection, Constantes::USER, Constantes::PASSWORD, $arrExtraParam);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		include "header.html";
		include "menu.php";
		$dbp = new PersonneDB($db);
		$user = $dbp->selectionId($_SESSION['id']);
		//TODO
		echo "<form method='post' action='index.php?action=validCompte&id=".$_SESSION['token']."required'>";
			echo " <div class='form-group'>";
				echo " <div class='form-row'>";
					echo "<label>Login</label>";
					echo '<input type="text" class="form-control" name="login" value='.$user->getLogin().'>';
				echo '</div>';
				echo " <div class='form-row'>";
					echo "<label>Nom</label>";
					echo '<input type="text" class="form-control" name="nom" value='.$user->getNom().'>';
				echo '</div>';
				echo " <div class='form-row'>";
					echo "<label>Prenom</label>";
					echo '<input type="text" class="form-control" name="prenom" value='.$user->getPrenom().'>';
				echo '</div>';
				echo " <div class='form-row'>";
					echo "<label>Date de naissance</label>";
					echo '<input type="date" class="form-control" name="datenaissance" value='.$user->getDatenaissance()->format('Y-m-d').'>';
				echo '</div>';
				echo " <div class='form-row'>";
					echo "<label>Telephone</label>";
					echo '<input type="tel" class="form-control" name="telephone" value='.$user->getTelephone().'>';
				echo '</div>';
				echo " <div class='form-row'>";
					echo "<label>Email</label>";
					echo '<input type="email" class="form-control" name="email" value='.$user->getEmail().'>';
				echo '</div>';
				echo'<button class="btn btn-primary" type="submit">Modifier</button>';
			echo "</div>";
		echo "</form>";

include "footer.html";
		}

}
