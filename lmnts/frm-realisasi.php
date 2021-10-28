<div class="row">

    <form method="post" id="fm-rlss" action="" enctype="multipart/form-data">

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="sparkline10-list mg-tb-30">
                <!-- form header -->
                <div class="sparkline10-hd">
                    <div class="main-sparkline10-hd">
                        <h1>Realisasi</h1>
                    </div>
                    <?php
                    // $qry = "SELECT COUNT(`pnpldt_id`) AS JML FROM `prpdt_pnpldt` WHERE `prpdt_id`= :id";
                    // $jml = $pdo->prepare($qry);
                    // $jml->bindValue(":id", $pId, PDO::PARAM_STR);
                    // $jml->execute();
                    // $hasil = $jml->fetchAll();
                    print("<pre>" . print_r($pId, true) . "</pre>");

                    ?>
                    <div class="panel-group adminpro-custon-design" id="accordion">

                        <div class="panel panel-default">
                            <a data-toggle="collapse" data-parent="#accordion4" href="#collapse1">
                                <div class="panel-heading accordion-head">
                                    <h4 class="panel-title">Pendidikan Politik</h4>
                                </div>
                            </a>

                            <!-- pendidikan politik collapse content -->
                            <div id="collapse1" class="panel-collapse panel-ic collapse">
                                <!-- pendidikan politik collapse content wrapper -->
                                <div class="panel-body admin-panel-content">
                                    <!-- file-repeater class -->
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 file-repeater" style="padding: 0;">
                                        <div class="button-drop-style-one btn-danger-bg pull-right">
                                            <button type="button" data-repeater-create class="btn btn-custon-four btn-danger danger-btn-cl">
                                                <i class="fa fa-plus adminpro-warning-danger" aria-hidden="true"></i> Tambah Kegiatan
                                            </button>
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 " style="padding: 0;">
                                            <!-- form repeater start -->
                                            <div data-repeater-list="kgD4tforLo0P">
                                                <div data-repeater-item>
                                                    <!-- form wrapper start -->
                                                    <div class="sparkline10-list" style="margin-top: 10px;">

                                                        <!-- <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="btn-group btn-custom-groups btn-custom-groups-one pull-right">
                                                                    <button type="button" data-repeater-delete class="btn btn-primary"><i class="fa fa-times adminpro-danger-error" aria-hidden="true"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> -->

                                                        <?php
                                                        $fileQRY   = "SELECT id_item, item FROM item_kegiatan WHERE kategori_item = 'a'";
                                                        $fileData  = $pdo->prepare($fileQRY);
                                                        $fileData->execute();

                                                        if ($fileData->rowCount() > 0) :
                                                            $fileDtCount  = $fileData->rowCount();
                                                            $fileAllDt    = $fileData->fetchAll(PDO::FETCH_ASSOC);

                                                            for ($i = 0; $i < $fileDtCount; $i++) : $ind = $i + 1;
                                                        ?>
                                                                <div class="form-group-inner">
                                                                    <div class="row">
                                                                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                                            <label class="login2 pull-left pull-left-pro"><?php echo $fileAllDt[$i]['item']; ?></label>
                                                                        </div>
                                                                        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="input-mark-inner mg-b-22">
                                                                                <input type="<?php if ($fileAllDt[$i]['item'] != 'Nama Kegiatan') {
                                                                                                    echo 'number"';
                                                                                                } else {
                                                                                                    echo 'text';
                                                                                                }
                                                                                                ?>" class="form-control <?php if ($fileAllDt[$i]['item'] != 'Nama Kegiatan') {
                                                                                                                            echo 'mask-currency"';
                                                                                                                        }
                                                                                                                        ?>" placeholder="<?php if ($fileAllDt[$i]['item'] == 'Nama Kegiatan') {
                                                                                                                                                echo 'Nama Kegiatan';
                                                                                                                                            } else {
                                                                                                                                                echo 'Rp 0.000.000';
                                                                                                                                            }
                                                                                                                                            ?>" name="<?php echo $fileAllDt[$i]['id_item'] . $fileAllDt[$i]['item']; ?>" <?php if ($fileAllDt[$i]['item'] != 'Nama Kegiatan') {
                                                                                                                                                                                                                                echo 'onkeyup="maskCurrency()"';
                                                                                                                                                                                                                            }
                                                                                                                                                                                                                            ?> />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                        <?php endfor;
                                                        endif; ?>


                                                    </div><!-- form wrapper end -->

                                                </div>
                                            </div><!-- form repeater end -->
                                        </div>
                                    </div><!-- file-repeater class end -->
                                </div><!-- pendidikan politik collapse content wrapper end -->

                            </div><!-- pendidikan politik collapse content end -->
                        </div>

                        <div class="panel panel-default">
                            <a data-toggle="collapse" data-parent="#accordion2" href="#collapse2">
                                <div class="panel-heading accordion-head">
                                    <h4 class="panel-title">Operasional Sekretariatan</h4>
                                </div>
                            </a>
                            <div id="collapse2" class="panel-collapse panel-ic collapse">
                                <div class="panel-body admin-panel-content">



                                    <?php
                                    $QRY   = "SELECT id_item,kategori_item, item FROM item_kegiatan WHERE NOT kategori_item = 'a'";
                                    $Data  = $pdo->prepare($QRY);
                                    $Data->execute();

                                    if ($Data->rowCount() > 0) :
                                        $DtCount  = $Data->rowCount();
                                        $AllDt    = $Data->fetchAll(PDO::FETCH_ASSOC);
                                        foreach ($AllDt as $key => $item) {
                                            $arr[$item['kategori_item']][$key] = $item;
                                        }

                                        ksort($arr, SORT_NUMERIC);
                                        for ($i = 0; $i < $DtCount; $i++);
                                        foreach ($arr as $key => $val) {
                                            switch ($key) {
                                                case 1:
                                                    $judul = "ADMINISTRASI UMUM";
                                                    break;

                                                case 2:
                                                    $judul = "BERLANGGANAN DAYA DAN JASA";
                                                    break;

                                                case 3:
                                                    $judul = "PEMELIHARAAN DATA DAN ARSIP";
                                                    break;

                                                case 4:
                                                    $judul = "PEMELIHARAAN PERALATAN KANTOR";
                                                    break;

                                                default:
                                                    $judul = "Tidak terdefinisi";
                                                    break;
                                            }
                                    ?>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <label class="login2 pull-left"> <?php echo $key . ". " . $judul; ?></label>
                                            </div>
                                            <?php
                                            // var_dump("key : " . $key . ":");
                                            foreach ($val as $key2 => $datas) {
                                                // var_dump("data : " . $datas["item"]);

                                            ?>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                            <label class="login2 pull-left pull-left-pro"><?php echo $datas["item"]; ?></label>
                                                        </div>
                                                        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="input-mark-inner mg-b-22">
                                                                <input type="<?php if ($fileAllDt[$i]['item'] != 'Nama Kegiatan') {
                                                                                    echo 'number"';
                                                                                } else {
                                                                                    echo 'text';
                                                                                }
                                                                                ?>" class="form-control mask-currency" placeholder="<?php if ($datas["item"] == 'Nama Kegiatan') {
                                                                                                                                        echo 'Nama Kegiatan';
                                                                                                                                    } else {
                                                                                                                                        echo 'Rp 0.000.000';
                                                                                                                                    }
                                                                                                                                    ?>" name="<?php echo $datas["id_item"] . $datas["item"]; ?>" <?php if ($AllDt[$i]['item'] != 'Nama Kegiatan') {
                                                                                                                                                                                                        echo 'onkeyup="maskCurrency()"';
                                                                                                                                                                                                    }
                                                                                                                                                                                                    ?> />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                    <?php }
                                        }
                                    endif; ?>

                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <a data-toggle="collapse" data-parent="#accordion3" href="#collapse3">
                                <div class="panel-heading accordion-head">
                                    <h4 class="panel-title">Total RAB</h4>
                                </div>
                            </a>
                            <div id="collapse3" class="panel-collapse panel-ic collapse in">
                                <div class="panel-body admin-panel-content">
                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                <label class="login2 pull-right pull-right-pro">Total</label>
                                            </div>
                                            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                                <input type="text" class="form-control mask-currency" placeholder="Rp 0.000.000" name="ttl_rab" onkeyup="maskCurrency()" />
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

    </form>

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group-inner">
            <div class="login-btn-inner">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5"></div>
                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                        <div class="login-horizental cancel-wp pull-left">
                            <button class="btn btn-white" type="submit" onclick="cancelPrpsl($(this))">Cancel</button>
                            <button class="btn btn-sm btn-primary login-submit-cs" type="submit" id="fm-prpsl" name="prpsl-add" value="save" onclick="addPrpsl($(this))">Save Change</button>
                            <!-- <button class="btn btn-sm btn-primary login-submit-cs" type="submit" id="fm-prpsl" name="prpsl-add" value="save" onclick="console.log($(this))">Save Change</button> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- repeater JS
    ============================================ -->
<script src="../../assts/js/repeater/jquery.repeater.min.js"></script>
<!-- Custom repeater JS
        ============================================ -->
<script src="../../assts/js/repeater/form-repeater.js"></script>
<!-- input-mask JS
     ============================================ -->
<script src="../../assts/js/input-mask/jquery.maskMoney.js"></script>
<!-- custom script input-mask JS
     ============================================ -->
<script src="../../assts/js/input-mask/maskCurrency.js"></script>