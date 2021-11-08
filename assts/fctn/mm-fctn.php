<?php

include_once("./serv-conf.php");
$root = BASE_URL;
$state = STATE;

if (isset($_POST['mm-signup'])) {
	$usr_name 		= $_POST['data']['usr-nm'];
	$usr_pname 		= $_POST['data']['usr-pn'];
	$usr_mail 		= $_POST['data']['usr-ml'];
	$usr_password	= password_hash($_POST['data']['usr-pss'], PASSWORD_DEFAULT);

	//begin pdo transaction
	$pdo->beginTransaction();
	try {
		$Qry = "SELECT mem_ FROM mem WHERE mem_ = :user";
		$chUsr = $pdo->prepare($Qry);
		$chUsr->bindValue(":user", $usr_name, PDO::PARAM_STR);
		$chUsr->execute();

		if ($chUsr->rowCount() > 0) {
			echo "orange";
		} else {
			try {
				$addQry = "INSERT INTO mem (mem_, mem_pess, mem_nmpp, mem_conma) VALUES (:username, :password, :parpol, :mail)";
				$addUser = $pdo->prepare($addQry);
				$addUser->bindValue(":username", $usr_name, PDO::PARAM_STR);
				$addUser->bindValue(":password", $usr_password, PDO::PARAM_STR);
				$addUser->bindValue(":parpol", $usr_pname, PDO::PARAM_STR);
				$addUser->bindValue(":mail", $usr_mail, PDO::PARAM_STR);
				$addUser->execute();
				$pdo->commit();
				echo "green";
			} catch (PDOException $e) {
				$pdo->rollback();
				if ($state == 'devel') {
					echo $e;
				} elseif ($state == 'production') {
					echo $e->getCode();
				}
			}
		}
	} catch (PDOException $e) {
		$pdo->rollback();
		if ($state == 'devel') {
			echo $e;
		} elseif ($state == 'production') {
			echo $e->getCode();
		}
	}
} elseif (isset($_POST['mm-login'])) {
	$usr_name 		= $_POST['data']['usr-nm'];
	$usr_password	= $_POST['data']['usr-pss'];


	try {
		$Qry = "SELECT * FROM mem WHERE mem_ = :user LIMIT 1";
		$chUsr = $pdo->prepare($Qry);
		$chUsr->bindValue(":user", $usr_name, PDO::PARAM_STR);
		$chUsr->execute();

		if ($chUsr->rowCount() > 0) {
			$dbData = $chUsr->fetchAll(PDO::FETCH_ASSOC);
			$dbUser = $dbData[0]['mem_'];
			$dbPass = $dbData[0]['mem_pess'];
			$dbStat = $dbData[0]['sttus'];

			if (password_verify($usr_password, $dbPass)) {
				if ($dbStat == "green"/*ad your admin level*/ or $dbStat == "blue" or $dbStat == "rainbow"/*ad your admin level*/) {
					$_SESSION["userauth_token-key"] = md5(KEY);/*add your auth token private key*/
					$_SESSION["access-login"] 		= $dbUser;
					$_SESSION["uID"]				= $dbData[0]['mem_id'];
					$_SESSION["color"]				= $dbStat;

					echo "green";
				} else {
					echo "your account is non active, please contact your admin or wait until your account is active";
				}
			} else {
				echo "iP";
			}
		} else {
			echo "nF";
		}
	} catch (PDOException $e) {
		if ($state == 'devel') {
			echo $e;
		} elseif ($state == 'production') {
			echo $e->getCode();
		}
	}
}

//LOGOUT
elseif (isset($_POST['mm-logout'])) {
	session_destroy();
	$_POST = array();
	echo "lgGreen";
} else {
	header('location: ' . $root);
}
