<?php include ('head.php'); ?>

        <div class="breadcome-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcome-list single-page-breadcome">
                            <div class="row">

                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-0">
                                    <div class="breadcome-heading">
                                        
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <ul class="breadcome-menu">
                                        <li><a href="./">Home</a> <span class="bread-slash">/</span></li>
                                        <li><span class="bread-blod">Ganti Recovery</span></li>
                                        <li style="padding: 0px 10px"></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php

$uId        = $_SESSION["uID"];
$udtQRY     = "SELECT * FROM mem WHERE mem_id = :mem";
$usrData    = $pdo->prepare($udtQRY);
$usrData->bindValue(":mem", $uId, PDO::PARAM_STR);
$usrData->execute();

if ($usrData->rowCount() < 1) {
    $uData = "0";
} else {
    $uCount     = $usrData->rowCount();
    $uData      = $usrData->fetch(PDO::FETCH_ASSOC);

    $uStat      = $uData['sttus'];
    $uUser      = $uData['mem_'];
    $uLogo      = $uData['mem_lgpp'];
    $uName      = $uData['mem_nmpp'];
    $uMail      = $uData['mem_conma'];
    $uPhone     = $uData['mem_conpe'];
}

if ($uData == "0") :
    session_destroy();
else :

?>
    <div class="users-section">
        <div class="container-fluid">
            <div class="custom-row">

                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                    <div class="sparkline8-list mt-b-30">
                        <div class="sparkline8-graph">
                            <div class="basic-login-form-ad">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="basic-login-inner">
                                            <h3>Change Password</h3>
                                            <p>Change your account password</p>
                                            <form method="post" id="fm-upass" action="" enctype="multipart/form-data">
                                                <input type="hidden" name="userid" value="<?php echo $uId?>" required />
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <label>Password Lama</label>
                                                        </div>
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <input type="password" class="form-control" placeholder="password lama" name="oldpass" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <label>Password Baru</label>
                                                        </div>
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <input type="password" class="form-control" placeholder="password baru" name="newpass" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <label>Ulangi Password Baru</label>
                                                        </div>
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <input type="password" class="form-control" placeholder="ulangi password baru" name="repass" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>

                                                <div class="login-btn-inner">
                                                    <div class="inline-remember-me">
                                                        <button class="btn btn-sm btn-primary pull-right login-submit-cs" type="submit" id="fm-upass" onclick="uPassChangeCheck($(this))">Process</button>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

<?php endif ?>

    <div class="users-section mt-b-30">
        <div class="container-fluid">
            <div class="row"></div>
        </div>
    </div>

    <div class="users-section">
        <div class="container-fluid">
            <div class="row"></div>
        </div>
    </div>


<?php include ('../footer.php'); ?>