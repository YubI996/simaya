<?php 

include_once("./serv-conf.php");
$root = BASE_URL;
$state = STATE;

function fungsi_name($s) {
    $c = array (' ');
    $d = array ('-','/','\\',',','.','#',':',';','\'','"','[',']','{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+');

    $s = str_replace($d, '', $s); // Hilangkan karakter yang telah disebutkan di array $d
    
    $s = strtolower(str_replace($c, '-', $s)); // Ganti spasi dengan tanda - dan ubah hurufnya menjadi kecil semua
    return $s;
}

function filename($s) {
    $c = array (' ');
    
    $s = strtolower(str_replace($c, '-', $s)); // Ganti spasi dengan tanda - dan ubah hurufnya menjadi kecil semua
    return $s;
}

if (isset($_POST['user-setting-status'])) {
	$user 		= $_SESSION["access-login"];
	$uTarget	= $_POST['id'];
	$uStatus	= $_POST['stat'];

	if ($uStatus == "g") {
		$status = "green";
	} elseif ($uStatus == "b") {
		$status = "blue";
	} else {
		$status = "orange";
	}

	if ($user != "") {
		//begin transaction
		$pdo->beginTransaction();
		try {
			$putQry 	= "UPDATE mem SET `sttus`=:status, `modified_by`=:user WHERE `mem_id`=:id";
			$putUStat 	= $pdo->prepare($putQry);
			$putUStat->bindValue(":status", $status, PDO::PARAM_STR);
			$putUStat->bindValue(":user", $user, PDO::PARAM_STR);
			$putUStat->bindValue(":id", $uTarget, PDO::PARAM_STR);
			$putUStat->execute();

			$pdo->commit();
			echo "green";
		} catch (PDOException $e) {
			$pdo->rollback();
			if ( $state == 'devel' ) {
				echo $e;
			}elseif ($state == 'production') {
				echo $e->getCode();
			}
		}
	} else {
		echo "privilege error";
	}
}

elseif (isset($_POST['upass-put'])) {
	$user 		= $_SESSION["access-login"];
	$uTarget	= $_POST['userid'];
	$uPass		= $_POST['newpass'];

	if ($uPass == "") {
		echo "Password field yang di inputkan kosong";
	} else {
		$uPass = password_hash($uPass, PASSWORD_DEFAULT);

		if ($user != "") {
			// begin transaction
			$pdo->beginTransaction();
			try {
				$putQry 	= "UPDATE mem SET `mem_pess`=:pass, `modified_by`=:user WHERE `mem_id`=:id";
				$putUStat 	= $pdo->prepare($putQry);
				$putUStat->bindValue(":pass", $uPass, PDO::PARAM_STR);
				$putUStat->bindValue(":user", $user, PDO::PARAM_STR);
				$putUStat->bindValue(":id", $uTarget, PDO::PARAM_STR);
				$putUStat->execute();

				$pdo->commit();
				echo "green";
			} catch (PDOException $e) {
				$pdo->rollback();
				if ( $state == 'devel' ) {
					echo $e;
				}elseif ($state == 'production') {
					echo $e->getCode();
				}
			}
		} else {
			echo "privilege error";
		}
	}
}

elseif (isset($_POST['upass-check'])) {
	$uTarget	= $_POST['meid'];
	$uPass		= $_POST['oldp'];

	$QRY     	= "SELECT * FROM mem WHERE mem_id = :mem";
	$usrData 	= $pdo->prepare($QRY);
	$usrData->bindValue(":mem", $uTarget, PDO::PARAM_STR);
	$usrData->execute();

	if ($usrData->rowCount() < 1) {
	    echo "User tidak ditemukan". $uTarget;
	} else {
	    $uCount     = $usrData->rowCount();
	    $uData      = $usrData->fetch(PDO::FETCH_ASSOC);
	    $uDataPass  = $uData['mem_pess'];

	    if (password_verify($uPass, $uDataPass)) {
	    	echo "green";
	    } else {
	    	echo "Password akun yang anda masukkan salah";
	    }
	}
}

elseif (isset($_POST['uacc-put'])) {
	$user 		= $_SESSION["access-login"];
	$uTarget	= $_POST['prplid'];
	$uName		= $_POST['prplnm'];
	$uMail		= $_POST['prplml'];
	$uPhone		= $_POST['prplph'];

	if ($user != "") {
		// begin transaction
		$pdo->beginTransaction();
		try {
			if ( $_POST['prplpic-inp'] != null ) {
				$fnmTmp 	= fungsi_name($_FILES["prplpic"]["name"]);
				$fType	 	= $_FILES["prplpic"]["type"];
				$ext 		= pathinfo($_FILES["prplpic"]["name"], PATHINFO_EXTENSION);
				$fname 		= md5($uTarget) . '.' . $ext;
			} else {
				$fname = "";
			}

			$putQry		= "UPDATE mem SET `mem_nmpp`=:name, `mem_conpe`=:phone, `mem_conma`=:mail, `mem_lgpp`=:lgpp, `modified_by`=:user WHERE `mem_id`=:id";
			$putUAcc 	= $pdo->prepare($putQry);
			$putUAcc->bindValue(":name", $uName, PDO::PARAM_STR);
			$putUAcc->bindValue(":mail", $uMail, PDO::PARAM_STR);
			$putUAcc->bindValue(":phone", $uPhone, PDO::PARAM_STR);
			$putUAcc->bindValue(":lgpp", $fname, PDO::PARAM_STR);
			$putUAcc->bindValue(":user", $user, PDO::PARAM_STR);
			$putUAcc->bindValue(":id", $uTarget, PDO::PARAM_STR);
			$putUAcc->execute();

			if ($fname != "") {
				$target_dir	 = '../../profile/';
				$target_file = $target_dir . $fname;
				$upload 	 = move_uploaded_file($_FILES["prplpic"]["tmp_name"], $target_file);

				if (!$upload) {
					$pdo->rollback();
					echo "Gagal meng-upload gambar.";
				}
			}

			$pdo->commit();
			echo "green";
		} catch (PDOException $e) {
			$pdo->rollback();
			if ( $state == 'devel' ) {
				echo $e;
			}elseif ($state == 'production') {
				echo $e->getCode();
			}
		}
	} else {
		echo "privilege error";
	}
}

else {
	echo "privilege error";
}

?>
