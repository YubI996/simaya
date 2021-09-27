<?php include ('./head.php'); ?>

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
                                        <li><span class="bread-blod">Users Settings</span></li>
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

    <div class="advanced-form-area mg-tb-15">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="tab-content-details mg-b-30">
                        <h2>List Registered Users</h2>
                    </div>
                </div>
            </div>

        </div>
    </div>

<?php

$dtQRY      = "SELECT * FROM mem WHERE sttus != 'rainbow' ORDER BY created_date DESC";
$allData    = $pdo->prepare($dtQRY);
$allData->execute();

if ($allData->rowCount() < 1) {
    $uData = "0";
} else {
    $uCount     = $allData->rowCount();
    $uData      = $allData->fetchAll(PDO::FETCH_ASSOC);
}

?>

    <div class="users-section">
        <div class="container-fluid">
            <div class="custom-row">

    		<?php include ('../../lmnts/adm-dsh-usrl.php'); ?>

            </div>
        </div>
    </div>

<?php include ('../footer.php'); ?>