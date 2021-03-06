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

if(isset($_POST['prpsl-add'])) {
	$int = 0;

	$usr 			= $_SESSION["access-login"];
	$usrID			= $_SESSION["uID"];
	$pp_name 		= $_POST['pp_nm'];
	$pp_address 	= $_POST['pp_adr'];
	$pp_lead		= $_POST['pp_ld'];
	$pp_secretary	= $_POST['pp_scr'];
	$pp_exchequer	= $_POST['pp_exc'];
	$pp_skdate		= $_POST['pp_skdt'];
	$dtprv 			= date('Y-m-d', strtotime($pp_skdate));
	$pp_status		= 'publish';
	$target_dir		= '../../upl/';

	//begin pdo transaction
	$pdo->beginTransaction();
	try {

		$addQry = "INSERT INTO prpdt (mem_id, prpdt_nmpp, prpdt_drss, prpdt_nmld, prpdt_xch, prpdt_scrt, prpdt_dtprv, sttus, created_by, modified_by) VALUES (:mem_id, :prpdt_nmpp, :prpdt_drss, :prpdt_nmld, :prpdt_xch, :prpdt_scrt, :prpdt_dtprv, :sttus, :user, :user)";
		$adPrpsl = $pdo->prepare($addQry);
		$adPrpsl->bindValue(":mem_id", $usrID, PDO::PARAM_STR);
		$adPrpsl->bindValue(":prpdt_nmpp", $pp_name, PDO::PARAM_STR);
		$adPrpsl->bindValue(":prpdt_drss", $pp_address, PDO::PARAM_STR);
		$adPrpsl->bindValue(":prpdt_nmld", $pp_lead, PDO::PARAM_STR);
		$adPrpsl->bindValue(":prpdt_xch", $pp_exchequer, PDO::PARAM_STR);
		$adPrpsl->bindValue(":prpdt_scrt", $pp_secretary, PDO::PARAM_STR);
		$adPrpsl->bindValue(":prpdt_dtprv", $dtprv, PDO::PARAM_STR);
		$adPrpsl->bindValue(":sttus", $pp_status, PDO::PARAM_STR);
		$adPrpsl->bindValue(":user", $usr, PDO::PARAM_STR);
		$adPrpsl->bindValue(":user", $usr, PDO::PARAM_STR);
		$adPrpsl->execute();

		$postId = $pdo->lastInsertId();
		if ($postId == true) {
			try {

				if ( $_POST['flLabel-1'] != null ) {
					$cnfg 		= $_POST['flCnfg-1'];
					$f1nmTmp 	= fungsi_name($_FILES["flName-1"]["name"]);
					$f1name 	= $usr . '-' . $cnfg . '-' . $postId . '-' . md5($f1nmTmp) . '.pdf'; 

					$addQry 	= "INSERT INTO pile (prpdt_id, pcnfg_id, pile_, sttus, created_by, modified_by) VALUES (:prpdt_id, :cnfg, :name, :sttus, :user, :user)";
					$adFile 	= $pdo->prepare($addQry);
					$adFile->bindValue(":prpdt_id", $postId, PDO::PARAM_STR);
					$adFile->bindValue(":cnfg", $cnfg, PDO::PARAM_STR);
					$adFile->bindValue(":name", $f1name, PDO::PARAM_STR);
					$adFile->bindValue(":sttus", $pp_status, PDO::PARAM_STR);
					$adFile->bindValue(":user", $usr, PDO::PARAM_STR);
					$adFile->bindValue(":user", $usr, PDO::PARAM_STR);

					if ($adFile->execute()) {
						$target_file = $target_dir . $f1name;
						$f1 		 = move_uploaded_file($_FILES["flName-1"]["tmp_name"], $target_file);
						if (!$f1) {
							$pdo->rollback();
							echo "Gagal meng-upload file 1.";
						}
					} else {
						$pdo->rollback();
						echo "Gagal memasukkan data file 1.";
					}
				}

				if ( $_POST['flLabel-2'] != null ) {
					$cnfg 		= $_POST['flCnfg-2'];
					$f1nmTmp 	= fungsi_name($_FILES["flName-2"]["name"]);
					$f1name 	= $usr . '-' . $cnfg . '-' . $postId . '-' . md5($f1nmTmp) . '.pdf'; 

					$addQry 	= "INSERT INTO pile (prpdt_id, pcnfg_id, pile_, sttus, created_by, modified_by) VALUES (:prpdt_id, :cnfg, :name, :sttus, :user, :user)";
					$adFile 	= $pdo->prepare($addQry);
					$adFile->bindValue(":prpdt_id", $postId, PDO::PARAM_STR);
					$adFile->bindValue(":cnfg", $cnfg, PDO::PARAM_STR);
					$adFile->bindValue(":name", $f1name, PDO::PARAM_STR);
					$adFile->bindValue(":sttus", $pp_status, PDO::PARAM_STR);
					$adFile->bindValue(":user", $usr, PDO::PARAM_STR);
					$adFile->bindValue(":user", $usr, PDO::PARAM_STR);

					if ($adFile->execute()) {
						$target_file = $target_dir . $f1name;
						$f1 		 = move_uploaded_file($_FILES["flName-2"]["tmp_name"], $target_file);
						if (!$f1) {
							$pdo->rollback();
							echo "Gagal meng-upload file 2.";
						}
					} else {
						$pdo->rollback();
						echo "Gagal memasukkan data file 2.";
					}
				}

				if ( $_POST['flLabel-3'] != null ) {
					$cnfg 		= $_POST['flCnfg-3'];
					$f1nmTmp 	= fungsi_name($_FILES["flName-3"]["name"]);
					$f1name 	= $usr . '-' . $cnfg . '-' . $postId . '-' . md5($f1nmTmp) . '.pdf'; 

					$addQry 	= "INSERT INTO pile (prpdt_id, pcnfg_id, pile_, sttus, created_by, modified_by) VALUES (:prpdt_id, :cnfg, :name, :sttus, :user, :user)";
					$adFile 	= $pdo->prepare($addQry);
					$adFile->bindValue(":prpdt_id", $postId, PDO::PARAM_STR);
					$adFile->bindValue(":cnfg", $cnfg, PDO::PARAM_STR);
					$adFile->bindValue(":name", $f1name, PDO::PARAM_STR);
					$adFile->bindValue(":sttus", $pp_status, PDO::PARAM_STR);
					$adFile->bindValue(":user", $usr, PDO::PARAM_STR);
					$adFile->bindValue(":user", $usr, PDO::PARAM_STR);

					if ($adFile->execute()) {
						$target_file = $target_dir . $f1name;
						$f1 		 = move_uploaded_file($_FILES["flName-3"]["tmp_name"], $target_file);
						if (!$f1) {
							$pdo->rollback();
							echo "Gagal meng-upload file 3.";
						}
					} else {
						$pdo->rollback();
						echo "Gagal memasukkan data file 3.";
					}
				}

				if ( $_POST['flLabel-4'] != null ) {
					$cnfg 		= $_POST['flCnfg-4'];
					$f1nmTmp 	= fungsi_name($_FILES["flName-4"]["name"]);
					$f1name 	= $usr . '-' . $cnfg . '-' . $postId . '-' . md5($f1nmTmp) . '.pdf'; 

					$addQry 	= "INSERT INTO pile (prpdt_id, pcnfg_id, pile_, sttus, created_by, modified_by) VALUES (:prpdt_id, :cnfg, :name, :sttus, :user, :user)";
					$adFile 	= $pdo->prepare($addQry);
					$adFile->bindValue(":prpdt_id", $postId, PDO::PARAM_STR);
					$adFile->bindValue(":cnfg", $cnfg, PDO::PARAM_STR);
					$adFile->bindValue(":name", $f1name, PDO::PARAM_STR);
					$adFile->bindValue(":sttus", $pp_status, PDO::PARAM_STR);
					$adFile->bindValue(":user", $usr, PDO::PARAM_STR);
					$adFile->bindValue(":user", $usr, PDO::PARAM_STR);

					if ($adFile->execute()) {
						$target_file = $target_dir . $f1name;
						$f1 		 = move_uploaded_file($_FILES["flName-4"]["tmp_name"], $target_file);
						if (!$f1) {
							$pdo->rollback();
							echo "Gagal meng-upload file 4.";
						}
					} else {
						$pdo->rollback();
						echo "Gagal memasukkan data file 4.";
					}
				}

				if ( $_POST['flLabel-5'] != null ) {
					$cnfg 		= $_POST['flCnfg-5'];
					$f1nmTmp 	= fungsi_name($_FILES["flName-5"]["name"]);
					$f1name 	= $usr . '-' . $cnfg . '-' . $postId . '-' . md5($f1nmTmp) . '.pdf'; 

					$addQry 	= "INSERT INTO pile (prpdt_id, pcnfg_id, pile_, sttus, created_by, modified_by) VALUES (:prpdt_id, :cnfg, :name, :sttus, :user, :user)";
					$adFile 	= $pdo->prepare($addQry);
					$adFile->bindValue(":prpdt_id", $postId, PDO::PARAM_STR);
					$adFile->bindValue(":cnfg", $cnfg, PDO::PARAM_STR);
					$adFile->bindValue(":name", $f1name, PDO::PARAM_STR);
					$adFile->bindValue(":sttus", $pp_status, PDO::PARAM_STR);
					$adFile->bindValue(":user", $usr, PDO::PARAM_STR);
					$adFile->bindValue(":user", $usr, PDO::PARAM_STR);

					if ($adFile->execute()) {
						$target_file = $target_dir . $f1name;
						$f1 		 = move_uploaded_file($_FILES["flName-5"]["tmp_name"], $target_file);
						if (!$f1) {
							$pdo->rollback();
							echo "Gagal meng-upload file 5.";
						}
					} else {
						$pdo->rollback();
						echo "Gagal memasukkan data file 5.";
					}
				}

				if ( $_POST['flLabel-6'] != null ) {
					$cnfg 		= $_POST['flCnfg-6'];
					$f1nmTmp 	= fungsi_name($_FILES["flName-6"]["name"]);
					$f1name 	= $usr . '-' . $cnfg . '-' . $postId . '-' . md5($f1nmTmp) . '.pdf'; 

					$addQry 	= "INSERT INTO pile (prpdt_id, pcnfg_id, pile_, sttus, created_by, modified_by) VALUES (:prpdt_id, :cnfg, :name, :sttus, :user, :user)";
					$adFile 	= $pdo->prepare($addQry);
					$adFile->bindValue(":prpdt_id", $postId, PDO::PARAM_STR);
					$adFile->bindValue(":cnfg", $cnfg, PDO::PARAM_STR);
					$adFile->bindValue(":name", $f1name, PDO::PARAM_STR);
					$adFile->bindValue(":sttus", $pp_status, PDO::PARAM_STR);
					$adFile->bindValue(":user", $usr, PDO::PARAM_STR);
					$adFile->bindValue(":user", $usr, PDO::PARAM_STR);

					if ($adFile->execute()) {
						$target_file = $target_dir . $f1name;
						$f1 		 = move_uploaded_file($_FILES["flName-6"]["tmp_name"], $target_file);
						if (!$f1) {
							$pdo->rollback();
							echo "Gagal meng-upload file 6.";
						}
					} else {
						$pdo->rollback();
						echo "Gagal memasukkan data file 6.";
					}
				}

				if ( $_POST['flLabel-7'] != null ) {
					$cnfg 		= $_POST['flCnfg-7'];
					$f1nmTmp 	= fungsi_name($_FILES["flName-7"]["name"]);
					$f1name 	= $usr . '-' . $cnfg . '-' . $postId . '-' . md5($f1nmTmp) . '.pdf'; 

					$addQry 	= "INSERT INTO pile (prpdt_id, pcnfg_id, pile_, sttus, created_by, modified_by) VALUES (:prpdt_id, :cnfg, :name, :sttus, :user, :user)";
					$adFile 	= $pdo->prepare($addQry);
					$adFile->bindValue(":prpdt_id", $postId, PDO::PARAM_STR);
					$adFile->bindValue(":cnfg", $cnfg, PDO::PARAM_STR);
					$adFile->bindValue(":name", $f1name, PDO::PARAM_STR);
					$adFile->bindValue(":sttus", $pp_status, PDO::PARAM_STR);
					$adFile->bindValue(":user", $usr, PDO::PARAM_STR);
					$adFile->bindValue(":user", $usr, PDO::PARAM_STR);

					if ($adFile->execute()) {
						$target_file = $target_dir . $f1name;
						$f1 		 = move_uploaded_file($_FILES["flName-7"]["tmp_name"], $target_file);
						if (!$f1) {
							$pdo->rollback();
							echo "Gagal meng-upload file 7.";
						}
					} else {
						$pdo->rollback();
						echo "Gagal memasukkan data file 7.";
					}
				}

				if ( $_POST['flLabel-8'] != null ) {
					$cnfg 		= $_POST['flCnfg-8'];
					$f1nmTmp 	= fungsi_name($_FILES["flName-8"]["name"]);
					$f1name 	= $usr . '-' . $cnfg . '-' . $postId . '-' . md5($f1nmTmp) . '.pdf'; 

					$addQry 	= "INSERT INTO pile (prpdt_id, pcnfg_id, pile_, sttus, created_by, modified_by) VALUES (:prpdt_id, :cnfg, :name, :sttus, :user, :user)";
					$adFile 	= $pdo->prepare($addQry);
					$adFile->bindValue(":prpdt_id", $postId, PDO::PARAM_STR);
					$adFile->bindValue(":cnfg", $cnfg, PDO::PARAM_STR);
					$adFile->bindValue(":name", $f1name, PDO::PARAM_STR);
					$adFile->bindValue(":sttus", $pp_status, PDO::PARAM_STR);
					$adFile->bindValue(":user", $usr, PDO::PARAM_STR);
					$adFile->bindValue(":user", $usr, PDO::PARAM_STR);

					if ($adFile->execute()) {
						$target_file = $target_dir . $f1name;
						$f1 		 = move_uploaded_file($_FILES["flName-8"]["tmp_name"], $target_file);
						if (!$f1) {
							$pdo->rollback();
							echo "Gagal meng-upload file 8.";
						}
					} else {
						$pdo->rollback();
						echo "Gagal memasukkan data file 8.";
					}
				}

				if ($_POST['os_atk'] == "") {
					$pp_osAtk	= "0";
				} else {
					$pp_osAtk	= $_POST['os_atk'];
				}

				if ($_POST['os_fc'] == "") {
					$pp_oSFc	= "0";
				} else {
					$pp_oSFc	= $_POST['os_fc'];
				}

				if ($_POST['os_sda'] == "") {
					$pp_osSda	= "0";
				} else {
					$pp_osSda	= $_POST['os_sda'];
				}

				if ($_POST['os_hnr'] == "") {
					$pp_osHonor	= "0";
				} else {
					$pp_osHonor	= $_POST['os_hnr'];
				}

				if ($_POST['os_swa'] == "") {
					$pp_osSewa	= "0";
				} else {
					$pp_osSewa	= $_POST['os_swa'];
				}

				$addOsQry = "INSERT INTO prpdt_opskdt (prpdt_id, opskdt_atk, opskdt_fc, opskdt_sda, opskdt_hnr, opskdt_sewa, sttus, created_by, modified_by) VALUES (:prpdt_id, :opskdt_atk, :opskdt_fc, :opskdt_sda, :opskdt_hnr, :opskdt_sewa, :sttus, :user, :user)";
				$adPrpslOs = $pdo->prepare($addOsQry);
				$adPrpslOs->bindValue(":prpdt_id", $postId, PDO::PARAM_STR);
				$adPrpslOs->bindValue(":opskdt_atk", $pp_osAtk, PDO::PARAM_STR);
				$adPrpslOs->bindValue(":opskdt_fc", $pp_oSFc, PDO::PARAM_STR);
				$adPrpslOs->bindValue(":opskdt_sda", $pp_osSda, PDO::PARAM_STR);
				$adPrpslOs->bindValue(":opskdt_hnr", $pp_osHonor, PDO::PARAM_STR);
				$adPrpslOs->bindValue(":opskdt_sewa", $pp_osSewa, PDO::PARAM_STR);
				$adPrpslOs->bindValue(":sttus", $pp_status, PDO::PARAM_STR);
				$adPrpslOs->bindValue(":user", $usr, PDO::PARAM_STR);
				$adPrpslOs->bindValue(":user", $usr, PDO::PARAM_STR);
				$adPrpslOs->execute();

				$kegCount = count($_POST['kgD4tforLo0P']);

				try {
					while ( $int < $kegCount ) {
						if ($_POST['kgD4tforLo0P'][$int]['pnp_nkg'] == "") {
							$pp_ppKeg	= "kegiatan partai";
						} else {
							$pp_ppKeg	= $_POST['kgD4tforLo0P'][$int]['pnp_nkg'];
						}

						if ($_POST['kgD4tforLo0P'][$int]['pnp_atk'] == "") {
							$pp_ppAtk	= "0";
						} else {
							$pp_ppAtk	= $_POST['kgD4tforLo0P'][$int]['pnp_atk'];
						}

						if ($_POST['kgD4tforLo0P'][$int]['pnp_fc'] == "") {
							$pp_ppFc	= "0";
						} else {
							$pp_ppFc	= $_POST['kgD4tforLo0P'][$int]['pnp_fc'];
						}

						if ($_POST['kgD4tforLo0P'][$int]['pnp_mm'] == "") {
							$pp_ppMknMnm= "0";
						} else {
							$pp_ppMknMnm= $_POST['kgD4tforLo0P'][$int]['pnp_mm'];
						}

						if ($_POST['kgD4tforLo0P'][$int]['pnp_sppd'] == "") {
							$pp_ppSppd	= "0";
						} else {
							$pp_ppSppd	= $_POST['kgD4tforLo0P'][$int]['pnp_sppd'];
						}

						if ($_POST['kgD4tforLo0P'][$int]['pnp_dll'] == "") {
							$pp_ppDll	= "0";
						} else {
							$pp_ppDll	= $_POST['kgD4tforLo0P'][$int]['pnp_dll'];
						}

						$addPpQry = "INSERT INTO prpdt_pnpldt (prpdt_id, pnpldt_nm, pnpldt_atk, pnpldt_fc, pnpldt_mkmn, pnpldt_sppd, pnpldt_ln, sttus, created_by, modified_by) VALUES (:prpdt_id, :pnpldt_nm, :pnpldt_atk, :pnpldt_fc, :pnpldt_mkmn, :pnpldt_sppd, :pnpldt_ln, :sttus, :user, :user)";
						$adPrpslPp = $pdo->prepare($addPpQry);
						$adPrpslPp->bindValue(":prpdt_id", $postId, PDO::PARAM_STR);
						$adPrpslPp->bindValue(":pnpldt_nm", $pp_ppKeg, PDO::PARAM_STR);
						$adPrpslPp->bindValue(":pnpldt_atk", $pp_ppAtk, PDO::PARAM_STR);
						$adPrpslPp->bindValue(":pnpldt_fc", $pp_ppFc, PDO::PARAM_STR);
						$adPrpslPp->bindValue(":pnpldt_mkmn", $pp_ppMknMnm, PDO::PARAM_STR);
						$adPrpslPp->bindValue(":pnpldt_sppd", $pp_ppSppd, PDO::PARAM_STR);
						$adPrpslPp->bindValue(":pnpldt_ln", $pp_ppDll, PDO::PARAM_STR);
						$adPrpslPp->bindValue(":sttus", $pp_status, PDO::PARAM_STR);
						$adPrpslPp->bindValue(":user", $usr, PDO::PARAM_STR);
						$adPrpslPp->bindValue(":user", $usr, PDO::PARAM_STR);
						$adPrpslPp->execute();

						$int++;
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


			} catch (PDOException $e) {
				$pdo->rollback();
				if ( $state == 'devel' ) {
					echo $e;
				}elseif ($state == 'production') {
					echo $e->getCode();
				}
			}

		} else {
			echo "Inserted Post not found";
			$pdo->rollback();
		}

	} catch (PDOException $e) {
		$pdo->rollback();
		if ( $state == 'devel' ) {
			echo $e;
		}elseif ($state == 'production') {
			echo $e->getCode();
		}
		
	}

}

//DELETE PROPOSAL
elseif (isset($_POST['prpsl-del'])) {
	$user 		= $_SESSION["access-login"];
	$id 		= $_POST['data'];
	$status 	= "delete";

	// begin transaction
	$pdo->beginTransaction();
	try {
		$putQry 	= "UPDATE prpdt SET `sttus`=:sttus, `modified_by`=:user WHERE `prpdt_id`=:id";
		$putPrpdt 	= $pdo->prepare($putQry);
		$putPrpdt->bindValue(":sttus", $status, PDO::PARAM_STR);
		$putPrpdt->bindValue(":user", $user, PDO::PARAM_STR);
		$putPrpdt->bindValue(":id", $id, PDO::PARAM_STR);
		$putPrpdt->execute();

		try {
			$putQry = "UPDATE prpdt_opskdt SET `sttus`=:sttus, `modified_by`=:user WHERE `prpdt_id`=:id";
			$putPrpdt = $pdo->prepare($putQry);
			$putPrpdt->bindValue(":sttus", $status, PDO::PARAM_STR);
			$putPrpdt->bindValue(":user", $user, PDO::PARAM_STR);
			$putPrpdt->bindValue(":id", $id, PDO::PARAM_STR);
			$putPrpdt->execute();

			try {
				$putQry = "UPDATE prpdt_pnpldt SET `sttus`=:sttus, `modified_by`=:user WHERE `prpdt_id`=:id";
				$putPrpdt = $pdo->prepare($putQry);
				$putPrpdt->bindValue(":sttus", $status, PDO::PARAM_STR);
				$putPrpdt->bindValue(":user", $user, PDO::PARAM_STR);
				$putPrpdt->bindValue(":id", $id, PDO::PARAM_STR);
				$putPrpdt->execute();

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
		} catch (PDOException $e) {
			$pdo->rollback();
			if ( $state == 'devel' ) {
				echo $e;
			}elseif ($state == 'production') {
				echo $e->getCode();
			}
		}
	} catch (PDOException $e) {
		$pdo->rollback();
		if ( $state == 'devel' ) {
			echo $e;
		}elseif ($state == 'production') {
			echo $e->getCode();
		}
	}
}

elseif (isset($_POST['prpsl-kp-put'])) {
	$user 			= $_SESSION["access-login"];
	$pp_id 			= $_POST['data']['pp_num'];
	$pp_name 		= $_POST['data']['pp_nm'];
	$pp_address 	= $_POST['data']['pp_adr'];
	$pp_lead		= $_POST['data']['pp_ld'];
	$pp_secretary	= $_POST['data']['pp_scr'];
	$pp_exchequer	= $_POST['data']['pp_exc'];
	$pp_skdate		= $_POST['data']['pp_skdt'];
	$dtprv 			= date('Y-m-d', strtotime($pp_skdate));

	// begin transaction
	$pdo->beginTransaction();
	try {
		$putQry 	= "UPDATE prpdt SET `prpdt_nmpp`=:nmpp, `prpdt_drss`=:drss, `prpdt_nmld`=:nmld, `prpdt_xch`=:xch, `prpdt_scrt`=:scrt, `prpdt_dtprv`=:dtprv, `modified_by`=:user WHERE `prpdt_id`=:id";
		$putPrpdt 	= $pdo->prepare($putQry);
		$putPrpdt->bindValue(":nmpp", $pp_name, PDO::PARAM_STR);
		$putPrpdt->bindValue(":drss", $pp_address, PDO::PARAM_STR);
		$putPrpdt->bindValue(":nmld", $pp_lead, PDO::PARAM_STR);
		$putPrpdt->bindValue(":xch", $pp_exchequer, PDO::PARAM_STR);
		$putPrpdt->bindValue(":scrt", $pp_secretary, PDO::PARAM_STR);
		$putPrpdt->bindValue(":dtprv", $dtprv, PDO::PARAM_STR);
		$putPrpdt->bindValue(":user", $user, PDO::PARAM_STR);
		$putPrpdt->bindValue(":id", $pp_id, PDO::PARAM_STR);
		$putPrpdt->execute();

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
}

elseif (isset($_POST['prpsl-os-put'])) {
	$user 		= $_SESSION["access-login"];
	$osId 		= $_POST['data']['os_num'];
	$osAtk 		= $_POST['data']['os_atk'];
	$osFc 		= $_POST['data']['os_fc'];
	$osSda		= $_POST['data']['os_sda'];
	$osHonor	= $_POST['data']['os_hnr'];
	$osSewa 	= $_POST['data']['os_sewa'];

	// begin transaction
	$pdo->beginTransaction();
	try {
		$putQry 	= "UPDATE prpdt_opskdt SET `opskdt_atk`=:atk, `opskdt_fc`=:fc, `opskdt_sda`=:sda, `opskdt_hnr`=:hnr, `opskdt_sewa`=:swa, `modified_by`=:user WHERE `opskdt_id`=:id";
		$putOpskdt 	= $pdo->prepare($putQry);
		$putOpskdt->bindValue(":atk", $osAtk, PDO::PARAM_STR);
		$putOpskdt->bindValue(":fc", $osFc, PDO::PARAM_STR);
		$putOpskdt->bindValue(":sda", $osSda, PDO::PARAM_STR);
		$putOpskdt->bindValue(":hnr", $osHonor, PDO::PARAM_STR);
		$putOpskdt->bindValue(":swa", $osSewa, PDO::PARAM_STR);
		$putOpskdt->bindValue(":user", $user, PDO::PARAM_STR);
		$putOpskdt->bindValue(":id", $osId, PDO::PARAM_STR);
		$putOpskdt->execute();

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
}

elseif (isset($_POST['prpsl-pp-put'])) {
	$user 		= $_SESSION["access-login"];
	$cont 		= $_POST['cont'];
	$pnpId 		= $_POST['data']['pnp_num'];
	$pnpName	= $_POST['data']['pnp_nm'];
	$pnpAtk 	= $_POST['data']['pnp_atk'];
	$pnpFc 		= $_POST['data']['pnp_fc'];
	$pnpMkmn	= $_POST['data']['pnp_mkmn'];
	$pnpSppd	= $_POST['data']['pnp_sppd'];
	$pnpLain 	= $_POST['data']['pnp_ln'];

	if ( $pnpName == "") {
		$pnpName = "kegiatan partai";
	}

	if ( $pnpAtk == "") {
		$pnpAtk = "0";
	}

	if ( $pnpFc == "") {
		$pnpFc = "0";
	}

	if ( $pnpMkmn == "") {
		$pnpMkmn = "0";
	}

	if ( $pnpSppd == "") {
		$pnpSppd = "0";
	}

	if ( $pnpLain == "") {
		$pnpLain = "0";
	}

	if ($cont == "put") {
		//begin transaction
		$pdo->beginTransaction();
		try {
			$putQry 	= "UPDATE prpdt_pnpldt SET `pnpldt_nm`=:name, `pnpldt_atk`=:atk, `pnpldt_fc`=:fc, `pnpldt_mkmn`=:mkmn, `pnpldt_sppd`=:sppd, `pnpldt_ln`=:ln, `modified_by`=:user WHERE `pnpldt_id`=:id";
			$putPnpldt 	= $pdo->prepare($putQry);
			$putPnpldt->bindValue(":name", $pnpName, PDO::PARAM_STR);
			$putPnpldt->bindValue(":atk", $pnpAtk, PDO::PARAM_STR);
			$putPnpldt->bindValue(":fc", $pnpFc, PDO::PARAM_STR);
			$putPnpldt->bindValue(":mkmn", $pnpMkmn, PDO::PARAM_STR);
			$putPnpldt->bindValue(":sppd", $pnpSppd, PDO::PARAM_STR);
			$putPnpldt->bindValue(":ln", $pnpLain, PDO::PARAM_STR);
			$putPnpldt->bindValue(":user", $user, PDO::PARAM_STR);
			$putPnpldt->bindValue(":id", $pnpId, PDO::PARAM_STR);
			$putPnpldt->execute();

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
		$pdo->beginTransaction();
		try {
			$status 	= "publish";
			$addQry 	= "INSERT INTO prpdt_pnpldt (prpdt_id, pnpldt_nm, pnpldt_atk, pnpldt_fc, pnpldt_mkmn, pnpldt_sppd, pnpldt_ln, sttus, created_by, modified_by) VALUES (:prpdt_id, :pnpldt_nm, :pnpldt_atk, :pnpldt_fc, :pnpldt_mkmn, :pnpldt_sppd, :pnpldt_ln, :sttus, :user, :user)";
			$addPnpldt 	= $pdo->prepare($addQry);
			$addPnpldt->bindValue(":prpdt_id", $pnpId, PDO::PARAM_STR);
			$addPnpldt->bindValue(":pnpldt_nm", $pnpName, PDO::PARAM_STR);
			$addPnpldt->bindValue(":pnpldt_atk", $pnpAtk, PDO::PARAM_STR);
			$addPnpldt->bindValue(":pnpldt_fc", $pnpFc, PDO::PARAM_STR);
			$addPnpldt->bindValue(":pnpldt_mkmn", $pnpMkmn, PDO::PARAM_STR);
			$addPnpldt->bindValue(":pnpldt_sppd", $pnpSppd, PDO::PARAM_STR);
			$addPnpldt->bindValue(":pnpldt_ln", $pnpLain, PDO::PARAM_STR);
			$addPnpldt->bindValue(":sttus", $status, PDO::PARAM_STR);
			$addPnpldt->bindValue(":user", $user, PDO::PARAM_STR);
			$addPnpldt->bindValue(":user", $user, PDO::PARAM_STR);
			$addPnpldt->execute();

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
	}
}

elseif (isset($_POST['prpsl-file-put'])) {
	$user 	 	= $_SESSION["access-login"];
	$usrID	 	= $_SESSION["uID"];
	$cnfgId  	= $_POST['flCnPut'];
	$postId  	= $_POST['flPidPut'];
	$fileId  	= $_POST['flIdPut'];
	$flLabel 	= $_POST['flPutLabel'];
	$target_dir	= '../../upl/';


	if ($fileId != "not") {

		if ($flLabel != "") {

			$flQRY   = "SELECT pile_ as file FROM pile WHERE pile_id = :fileID LIMIT 1";
			$flData  = $pdo->prepare($flQRY);
			$flData->bindValue(":fileID", $fileId, PDO::PARAM_STR);
			$flData->execute();

			if ($flData->rowCount() > 0) {
				$flAllDt = $flData->fetchAll(PDO::FETCH_ASSOC);
				$link    = $target_dir . $flAllDt[0]['file'];
				$flname  = "(TRASH)" . $flAllDt[0]['file'];
				$status  = "delete";

				$pdo->beginTransaction();
				try {
					$delQry = "UPDATE pile SET `pile_`=:file, `sttus`=:sttus, `modified_by`=:user WHERE `pile_id`=:id";
					$delFl  = $pdo->prepare($delQry);
					$delFl->bindValue(":file", $flname, PDO::PARAM_STR);
					$delFl->bindValue(":sttus", $status, PDO::PARAM_STR);
					$delFl->bindValue(":user", $user, PDO::PARAM_STR);
					$delFl->bindValue(":id", $fileId, PDO::PARAM_STR);
					
					if ($delFl->execute()) {
						$target_file = $target_dir . "trash/" . $flname;
						$del 	 	 = rename($link, $target_file);
						if (!$del) {
							$pdo->rollback();
							echo "Gagal menghapus file upload.";
						} else {
							try {
								$status  = "publish";
								$flnmTmp 	= fungsi_name($_FILES["flPut"]["name"]);
								$flname 	= $user . '-' . $cnfgId . '-' . $postId . '-' . md5($flnmTmp) . '.pdf';

								$addQry = "INSERT INTO pile (prpdt_id, pcnfg_id, pile_, sttus, created_by, modified_by) VALUES (:prpdt_id, :cnfg, :name, :sttus, :user, :user)";
								$adFile = $pdo->prepare($addQry);
								$adFile->bindValue(":prpdt_id", $postId, PDO::PARAM_STR);
								$adFile->bindValue(":cnfg", $cnfgId, PDO::PARAM_STR);
								$adFile->bindValue(":name", $flname, PDO::PARAM_STR);
								$adFile->bindValue(":sttus", $status, PDO::PARAM_STR);
								$adFile->bindValue(":user", $user, PDO::PARAM_STR);
								$adFile->bindValue(":user", $user, PDO::PARAM_STR);

								if ($adFile->execute()) {
									$target_file = $target_dir . $flname;
									$newFUpload	 = move_uploaded_file($_FILES["flPut"]["tmp_name"], $target_file);
									if (!$newFUpload) {
										$pdo->rollback();
										echo "Gagal meng-upload file baru.";
									} else {
										$pdo->commit();
										echo "green";
									}
								} else {
									$pdo->rollback();
									echo "Gagal memasukkan data file upload baru.";
								}

							} catch (Exception $e) {
								$pdo->rollback();
								if ( $state == 'devel' ) {
									echo $e;
								}elseif ($state == 'production') {
									echo $e->getCode();
								}
							}
						}
					} else {
						$pdo->rollback();
						echo "Gagal menghapus data file upload.";
					}
				} catch (Exception $e) {
					$pdo->rollback();
					if ( $state == 'devel' ) {
						echo $e;
					}elseif ($state == 'production') {
						echo $e->getCode();
					}
				}

			} else {
				echo "gagal mengambil data file";
			}

		} else {
			echo "";
		}
	} else {
		if ($flLabel != "") {
			$flnmTmp 	= fungsi_name($_FILES["flPut"]["name"]);
			$flname 	= $user . '-' . $cnfgId . '-' . $postId . '-' . md5($flnmTmp) . '.pdf';
			$status 	= "publish";

			$pdo->beginTransaction();
			try {
				$addQry = "INSERT INTO pile (prpdt_id, pcnfg_id, pile_, sttus, created_by, modified_by) VALUES (:prpdt_id, :cnfg, :name, :sttus, :user, :user)";
				$adFile = $pdo->prepare($addQry);
				$adFile->bindValue(":prpdt_id", $postId, PDO::PARAM_STR);
				$adFile->bindValue(":cnfg", $cnfgId, PDO::PARAM_STR);
				$adFile->bindValue(":name", $flname, PDO::PARAM_STR);
				$adFile->bindValue(":sttus", $status, PDO::PARAM_STR);
				$adFile->bindValue(":user", $user, PDO::PARAM_STR);
				$adFile->bindValue(":user", $user, PDO::PARAM_STR);

				if ($adFile->execute()) {
					$target_file = $target_dir . $flname;
					$f1 		 = move_uploaded_file($_FILES["flPut"]["tmp_name"], $target_file);
					if (!$f1) {
						$pdo->rollback();
						echo "Gagal meng-upload file.";
					} else {
						$pdo->commit();
						echo "green";
					}
				} else {
					$pdo->rollback();
					echo "Gagal memasukkan data file.";
				}
			} catch (Exception $e) {
				$pdo->rollback();
				if ( $state == 'devel' ) {
					echo $e;
				}elseif ($state == 'production') {
					echo $e->getCode();
				}
			}
		} else {
			echo "";
		}
	}
}

elseif (isset($_POST['prpsl-pp-del'])) {
	$id 	= $_POST['data'];
	$user 	= $_SESSION["access-login"];
	$status = "delete";

	$pdo->beginTransaction();
	try {
		$delQry = "UPDATE prpdt_pnpldt SET `sttus`=:sttus, `modified_by`=:user WHERE `pnpldt_id`=:id";
		$delPP  = $pdo->prepare($delQry);
		$delPP->bindValue(":sttus", $status, PDO::PARAM_STR);
		$delPP->bindValue(":user", $user, PDO::PARAM_STR);
		$delPP->bindValue(":id", $id, PDO::PARAM_STR);
		$delPP->execute();

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
}

elseif (isset($_POST['prpsl-file-del'])) {
	$user 	 	= $_SESSION["access-login"];
	$usrID	 	= $_SESSION["uID"];
	$fileId 	= $_POST['data'];
	$target_dir	= '../../upl/';

	$flQRY   = "SELECT pile_ as file FROM pile WHERE pile_id = :fileID LIMIT 1";
	$flData  = $pdo->prepare($flQRY);
	$flData->bindValue(":fileID", $fileId, PDO::PARAM_STR);
	$flData->execute();

	if ($flData->rowCount() > 0) {
		$flAllDt = $flData->fetchAll(PDO::FETCH_ASSOC);
		$link    = $target_dir . $flAllDt[0]['file'];
		$flname  = "(TRASH)" . $flAllDt[0]['file'];
		$status  = "delete";

		$pdo->beginTransaction();
		try {
			$delQry = "UPDATE pile SET `pile_`=:file, `sttus`=:sttus, `modified_by`=:user WHERE `pile_id`=:id";
			$delFl  = $pdo->prepare($delQry);
			$delFl->bindValue(":file", $flname, PDO::PARAM_STR);
			$delFl->bindValue(":sttus", $status, PDO::PARAM_STR);
			$delFl->bindValue(":user", $user, PDO::PARAM_STR);
			$delFl->bindValue(":id", $fileId, PDO::PARAM_STR);

			if ($delFl->execute()) {
				$target_file = $target_dir . "trash/" . $flname;
				$del 	 	 = rename($link, $target_file);
				if (!$del) {
					$pdo->rollback();
					echo "Gagal menghapus file upload.";
				} else {
					$pdo->commit();
					echo "green";
				}
			}

		} catch (Exception $e) {
			$pdo->rollback();
			if ( $state == 'devel' ) {
				echo $e;
			}elseif ($state == 'production') {
				echo $e->getCode();
			}
		}
						
	} else {
		echo "data file tidak ditemukan";
	}
}

elseif (isset($_POST['prpsl-kp-modal'])) {
	$id 	= $_POST['data'];

	$kpQRY 	= "SELECT * FROM prpdt WHERE prpdt_id = :id LIMIT 1";
	$kpData = $pdo->prepare($kpQRY);
	$kpData->bindValue(":id", $id, PDO::PARAM_STR);
	$kpData->execute();

	if ($kpData->rowCount() < 1) {
		echo "";
	} else {
		$kpData = $kpData->fetchAll(PDO::FETCH_ASSOC);
		$kpDate = date('m/d/Y', strtotime($kpData[0]['prpdt_dtprv']));

	echo '
		<div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header header-color-modal bg-color-5">
	                <h4 class="modal-title">Ubah Data Kepengurusan</h4>
	            </div>
	            <div class="modal-body">
	                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                <div class="basic-login-inner">
	                    <form id="kp-put-form">
	                    	<input type="hidden" class="form-control" value="'.$kpData[0]['prpdt_id'].'" name="pp_num" />
	                        <div class="form-group-inner">
	                            <label class="pull-left">Nama Partai</label>
	                            <input type="text" class="form-control" placeholder="Nama Partai" value="'.$kpData[0]['prpdt_nmpp'].'" name="pp_nm" />
	                        </div>
	                        <div class="form-group-inner">
	                            <label class="pull-left">Alamat</label>
	                            <input type="text" class="form-control" placeholder="Alamat" value="'.$kpData[0]['prpdt_drss'].'" name="pp_adr" />
	                        </div>
	                        <div class="form-group-inner">
	                            <label class="pull-left">Nama Ketua</label>
	                            <input type="text" class="form-control" placeholder="Nama Ketua" value="'.$kpData[0]['prpdt_nmld'].'" name="pp_ld" />
	                        </div>
	                        <div class="form-group-inner">
	                            <label class="pull-left">Nama Bendahara</label>
	                            <input type="text" class="form-control" placeholder="Nama Bendahara" value="'.$kpData[0]['prpdt_xch'].'" name="pp_exc" />
	                        </div>
	                        <div class="form-group-inner">
	                            <label class="pull-left">Nama Sekretaris</label>
	                            <input type="text" class="form-control" placeholder="Nama Sekretaris" value="'.$kpData[0]['prpdt_scrt'].'" name="pp_scr" />
	                        </div>
	                        <div class="form-group-inner data-custon-pick" id="data_1">
	                            <label class="pull-left">Tanggal Pengesahan</label>
	                            <div class="input-group date" style="width: 100%;">
	                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
	                                <input type="text" class="form-control" value="'.$kpDate.'" name="pp_skdt">
	                            </div>
	                        </div>
	                    </form>
	                </div>
	                </div>
	            </div>
	            <div class="modal-footer">
	                <a data-dismiss="modal" href="#">Batalkan</a>
	                <a style="cursor: pointer;" id="kpPut" data-target="#kp-put-form" onClick="kpPut()">Simpan</a>
	            </div>
	        </div>
	    </div>
	    <script src="../../assts/js/datapicker/bootstrap-datepicker.js"></script>
	    <script src="../../assts/js/datapicker/datepicker-active.js"></script>
	';
	}
}

elseif (isset($_POST['prpsl-os-modal'])) {
	$id 	= $_POST['data'];

	$osQRY 	= "SELECT * FROM prpdt_opskdt WHERE opskdt_id = :id LIMIT 1";
	$osData = $pdo->prepare($osQRY);
	$osData->bindValue(":id", $id, PDO::PARAM_STR);
	$osData->execute();

	if ($osData->rowCount() < 1) {
		echo "";
	} else {
		$osData = $osData->fetchAll(PDO::FETCH_ASSOC);
	
	echo '
		<div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header header-color-modal bg-color-5">
	                <h4 class="modal-title">Ubah Data Operasional Sekretariatan</h4>
	            </div>
	            <div class="modal-body">
	                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                <div class="basic-login-inner">
	                    <form id="os-put-form">
	                    	<input type="hidden" class="form-control" value="'.$osData[0]['opskdt_id'].'" name="os_num" />
	                        <div class="form-group-inner">
	                            <label class="pull-left">ATK</label>
	                            <input type="text" class="form-control mask-currency" placeholder="Rp 0.000.000" value="'.$osData[0]['opskdt_atk'].'" name="os_atk" onkeyup="maskCurrency()" />
	                        </div>
	                        <div class="form-group-inner">
	                            <label class="pull-left">Foto Copy</label>
	                            <input type="text" class="form-control mask-currency" placeholder="Rp 0.000.000" value="'.$osData[0]['opskdt_fc'].'" name="os_fc" onkeyup="maskCurrency()" />
	                        </div>
	                        <div class="form-group-inner">
	                            <label class="pull-left">Honorarium</label>
	                            <input type="text" class="form-control mask-currency" placeholder="Rp 0.000.000" value="'.$osData[0]['opskdt_hnr'].'" name="os_hnr" onkeyup="maskCurrency()" />
	                        </div>
	                        <div class="form-group-inner">
	                            <label class="pull-left">Sewa</label>
	                            <input type="text" class="form-control mask-currency" placeholder="Rp 0.000.000" value="'.$osData[0]['opskdt_sewa'].'" name="os_sewa" onkeyup="maskCurrency()" />
	                        </div>
	                        <div class="form-group-inner">
	                            <label class="pull-left">Lainnya</label>
	                            <input type="text" class="form-control mask-currency" placeholder="Rp 0.000.000" value="'.$osData[0]['opskdt_sda'].'" name="os_sda" onkeyup="maskCurrency()" />
	                        </div>
	                    </form>
	                </div>
	                </div>
	            </div>
	            <div class="modal-footer">
	                <a data-dismiss="modal" href="#">Batalkan</a>
	                <a style="cursor: pointer;" id="osPut" data-target="#os-put-form" onClick="osPut()">Simpan</a>
	            </div>
	        </div>
	    </div>
	    <!-- input-mask JS
    	 ============================================ -->
		<script src="../../assts/js/input-mask/jquery.maskMoney.js"></script>
		<script src="../../assts/js/input-mask/maskCurrency.js"></script>
	';
	}
} 

elseif (isset($_POST['prpsl-pp-put-modal'])) {
	$id 	= $_POST['data'];
	$cont 	= $_POST['condition'];

	if ($cont == "put") {
		$ttle 	= "Ubah Data Pendidikan Politik";
		$ppQRY 	= "SELECT * FROM prpdt_pnpldt WHERE pnpldt_id = :id LIMIT 1";
		$ppData = $pdo->prepare($ppQRY);
		$ppData->bindValue(":id", $id, PDO::PARAM_STR);
		$ppData->execute();

		if ($ppData->rowCount() < 1) {
			echo "fetch data failed";
		} else {
			$ppData 	= $ppData->fetchAll(PDO::FETCH_ASSOC);
			$pnpId 		= $ppData[0]['pnpldt_id'];
			$pnpName 	= $ppData[0]['pnpldt_nm'];
			$pnpAtk 	= $ppData[0]['pnpldt_atk'];
			$pnpFc 		= $ppData[0]['pnpldt_fc'];
			$pnpMkmn 	= $ppData[0]['pnpldt_mkmn'];
			$pnpSppd 	= $ppData[0]['pnpldt_sppd'];
			$pnpLain 	= $ppData[0]['pnpldt_ln'];
		}

	} else {
		$ttle 		= "Tambah Data Pendidikan Politik";
		$pnpId 		= $id;
		$pnpName 	= "";
		$pnpAtk		= "";
		$pnpFc 		= "";
		$pnpMkmn 	= "";
		$pnpSppd 	= "";
		$pnpLain 	= "";
	}

	if (isset($cont)) {

	echo '
		<div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header header-color-modal bg-color-5">
	                <h4 class="modal-title">'.$ttle.'</h4>
	            </div>
	            <div class="modal-body">
	                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                <div class="basic-login-inner">
	                    <form id="pp-put-form">
	                    	<input type="hidden" class="form-control" value="'.$pnpId.'" name="pnp_num" />
	                    	<div class="form-group-inner">
	                            <label class="pull-left">Nama Kegiatan</label>
	                            <input type="text" class="form-control" placeholder="Nama Kegiatan" value="'.$pnpName.'" name="pnp_nm" />
	                        </div>
	                        <div class="form-group-inner">
	                            <label class="pull-left">ATK</label>
	                            <input type="text" class="form-control mask-currency" placeholder="Rp 0.000.000" value="'.$pnpAtk.'" name="pnp_atk" onkeyup="maskCurrency()" />
	                        </div>
	                        <div class="form-group-inner">
	                            <label class="pull-left">Foto Copy</label>
	                            <input type="text" class="form-control mask-currency" placeholder="Rp 0.000.000" value="'.$pnpFc.'" name="pnp_fc" onkeyup="maskCurrency()" />
	                        </div>
	                        <div class="form-group-inner">
	                            <label class="pull-left">Makan dan Minum</label>
	                            <input type="text" class="form-control mask-currency" placeholder="Rp 0.000.000" value="'.$pnpMkmn.'" name="pnp_mkmn" onkeyup="maskCurrency()" />
	                        </div>
	                        <div class="form-group-inner">
	                            <label class="pull-left">SPPD</label>
	                            <input type="text" class="form-control mask-currency" placeholder="Rp 0.000.000" value="'.$pnpSppd.'" name="pnp_sppd" onkeyup="maskCurrency()" />
	                        </div>
	                        <div class="form-group-inner">
	                            <label class="pull-left">Lainnya</label>
	                            <input type="text" class="form-control mask-currency" placeholder="Rp 0.000.000" value="'.$pnpLain.'" name="pnp_ln" onkeyup="maskCurrency()" />
	                        </div>
	                    </form>
	                </div>
	                </div>
	            </div>
	            <div class="modal-footer">
	                <a data-dismiss="modal" href="#">Batalkan</a>
	                <a style="cursor: pointer;" id="ppPut" data-target="#pp-put-form" data-cont="'.$cont.'" onClick="ppPut($(this))">Simpan</a>
	            </div>
	        </div>
	    </div>
	    <!-- input-mask JS
    	 ============================================ -->
		<script src="../../assts/js/input-mask/jquery.maskMoney.js"></script>
		<script src="../../assts/js/input-mask/maskCurrency.js"></script>
	';
	}
}

elseif (isset($_POST['prpsl-del-modal'])) {
	$id 	= $_POST['data'];

	echo '
	<div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <span class="adminpro-icon adminpro-warning modal-check-pro information-icon-pro"></span>
                <h2>Alert!</h2>
                <p>Data yang dihapus tidak dapat dikembalikan. Anda yakin ingin melanjutkan?</p>
            </div>
            <div class="modal-footer footer-modal-admin">
                <a data-dismiss="modal" style="cursor: pointer;">Batalkan</a>
                <a style="cursor: pointer;" onclick="delPrpsl('.$id.')">Hapus</a>
            </div>
        </div>
    </div>
	';
}

elseif (isset($_POST['prpsl-pp-del-modal'])) {
	$id 	= $_POST['data'];

	echo '
	<div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <span class="adminpro-icon adminpro-warning modal-check-pro information-icon-pro"></span>
                <h2>Alert!</h2>
                <p>Data yang dihapus tidak dapat dikembalikan. Anda yakin ingin melanjutkan?</p>
            </div>
            <div class="modal-footer footer-modal-admin">
                <a data-dismiss="modal" style="cursor: pointer;">Batalkan</a>
                <a style="cursor: pointer;" onclick="delPP('.$id.')">Hapus</a>
            </div>
        </div>
    </div>
	';
}

elseif (isset($_POST['prpsl-fl-modal'])) {
	$id 	= $_POST['data'];

	echo '
	<div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <span class="adminpro-icon adminpro-warning modal-check-pro information-icon-pro"></span>
                <h2>Alert!</h2>
                <p>Data yang dihapus tidak dapat dikembalikan. Anda yakin ingin melanjutkan?</p>
            </div>
            <div class="modal-footer footer-modal-admin">
                <a data-dismiss="modal" style="cursor: pointer;">Batalkan</a>';
    if ($id != "not") {
    	echo '<a style="cursor: pointer;" onclick="delFile('.$id.')">Hapus</a>';
    } else {
    	echo '<a data-dismiss="modal" style="cursor: pointer;">Hapus</a>';
    }
    echo '</div></div></div>';
}

else {
	echo "privilege error";
}

?>
