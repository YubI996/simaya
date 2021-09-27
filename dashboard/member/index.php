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
                                        <li><span class="bread-blod">Dashboard</span></li>
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

?>

    <div class="users-section">
        <div class="container-fluid">
            <div class="custom-row">

            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">

        <?php if ( $uStat == "rainbow" || $uStat == "blue" ) : ?>
            <div class="card users border-teal border-lighten-2" style="border: 1px solid #eea236 !important">
        <?php elseif ( $uStat == "green" ) : ?>
            <div class="card users border-teal border-lighten-2" style="border: 1px solid #4cae4c !important">
        <?php else : ?>
            <div class="card users border-teal border-lighten-2" style="border: 1px solid #d43f3a !important">
        <?php endif ?>

            <div class="text-center">
                <div class="card-body text-right" style="padding: 5px 5px 10px 10px">
                    <button type="button" class="btn btn-xs btn-custon-four btn-default" style="border: none">
                        <i class="fa fa-wrench" aria-hidden="true" data-toggle="modal" data-target="#User<?php echo $uUser?>EditModal"></i></button>

                    <div id="User<?php echo $uUser?>EditModal" class="modal modal-adminpro-general modal-zoomInDown fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="modal-login-form-inner">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="basic-login-inner modal-basic-inner">
                                                    <h3>Profile</h3>
                                                    <p>Change your saccount profile</p>
                                                    <form method="post" id="fm-uacc-<?php echo $uUser?>" action="" enctype="multipart/form-data">
                                                        <input type="hidden" name="prplid" value="<?php echo $uId ?>">
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                    <label class="login2">Nama Partai Politik</label>
                                                                </div>
                                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                    <input type="text" class="form-control" placeholder="Nama Parpol" name="prplnm" value="<?php echo $uName ?>" required />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                    <label class="login2">Email</label>
                                                                </div>
                                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                    <input type="text" class="form-control" placeholder="Email" name="prplml" value="<?php echo $uMail ?>" required />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                    <label class="login2">Phone</label>
                                                                </div>
                                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                    <input type="text" class="form-control" placeholder="Phone / Handphone" name="prplph" value="<?php echo $uPhone ?>" required />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                    <label class="login2">Profile Picture</label>
                                                                </div>
                                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                    <div class="file-upload-inner file-upload-inner-right ts-forms">
                                                                        <div class="input append-small-btn">
                                                                            <div class="file-button">
                                                                                Browse
                                                                                <input type="file" accept="image/*" name="prplpic" id="prfpic" data-target="prfpic-inp" onchange="profilepic($(this))">
                                                                            </div>
                                                                            <input type="text" id="prfpic-inp" placeholder="no file selected" name="prplpic-inp">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </form>

                                                        <div class="text-right">
                                                            <button class="btn btn-custon-four btn-success" data-dismiss="modal" style="margin-right: 10px">Cancel</button>
                                                            <button class="btn btn-custon-four btn-success" type="submit" id="fm-uacc-<?php echo $uUser?>" onclick="uAccChange($(this))">Process</button>
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

                <div class="card-body" style="padding-top: 0px;">
                    <?php if ($uLogo != ""): ?>
                        <img src="<?php echo BASE_URL ?>profile/<?php echo $uLogo ?>" class="rounded-circle  height-150" alt="Card image">
                    <?php else : ?>
                        <img src="<?php echo BASE_URL ?>profile/no-images.jpg" class="rounded-circle  height-150" alt="Card image">
                    <?php endif ?>
                </div>
                <div class="card-body" style="padding-top: 0px;">

                    <?php if ($uName != ""): ?>
                        <h4 class="card-title"><?php echo $uName; ?></h4>
                    <?php else: ?>
                        <h4 class="card-title">Parpol Belum Memiliki Nama</h4>
                    <?php endif ?>

                    <?php if ($uMail != ""): ?>
                        <h5 class="card-subtitle text-muted"><?php echo $uMail; ?></h5>
                    <?php endif ?>

                    <?php if ($uPhone != ""): ?>
                        <h5 class="card-subtitle text-muted"><?php echo $uPhone; ?></h5>
                    <?php endif ?>

                </div>
            </div><!-- end text center -->
            </div><!-- end card -->
            </div><!-- end col -->

            </div><!-- end custom row -->

            <div class="row">
                <div class="col-lg-12"><hr></div>
            </div>
        </div>
    </div>

<?php
$dtQRY      = "SELECT * FROM prpdt WHERE mem_id = :mem AND sttus = 'publish' ORDER BY created_date DESC";
$allData    = $pdo->prepare($dtQRY);
$allData->bindValue(":mem", $uId, PDO::PARAM_STR);
$allData->execute();

if ($allData->rowCount() < 1) {
    $pData = "0";
} else {
    $pCount     = $allData->rowCount();
    $pData      = $allData->fetchAll(PDO::FETCH_ASSOC);
}

?>

    <!-- div class="product-status mg-tb-15" style="min-height: 67vh">
        <div class="container-fluid">
            <div class="row"> --><!-- first row -->

                <!-- <@?php include ('../../lmnts/mem-dsh-ind.php'); ?>

                <@?php include ('../../lmnts/mem-dsh-indm.php'); ?> -->

            <!--</div>--><!-- end first row -->
        <!-- </div>
    </div> -->

<?php include ('../../lmnts/ind-mdls.php'); include ('../footer.php'); ?>