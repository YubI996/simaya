<?php include('head.php'); ?>

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

<div class="product-status mg-tb-15" style="min-height: 67vh">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 hidden-sm hidden-xs">
                <div class="tab-content-details mg-b-30">
                    <h2>Laporan Realisasi <br>Dana Bantuan Keuangan Partai Politik</h2>
                </div>
            </div>
            <div class="hidden-lg hidden-md col-sm-12 col-xs-12">
                <div class="tab-content-details mg-b-30">
                    <h2>Laporan Realisasi <br>Dana Bantuan Keuangan<br> Partai Politik</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- first row -->

            <?php include('../../lmnts/mem-realisasi.php'); ?>

            <!-- <?php //include ('../../lmnts/mem-realisasim.php'); 
                    ?> -->

        </div><!-- end first row -->
    </div>
</div>

<?php include('../../lmnts/ind-mdls.php');
include('../footer.php'); ?>