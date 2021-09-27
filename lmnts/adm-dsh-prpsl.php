
<div class="col-lg-12 col-md-12 hidden-sm hidden-xs">
    <div class="product-status-wrap">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <h1>List Proposal</h1>
                        </div>
                    </div>
                </div>

                <div id="accordionWrap1" role="tablist" aria-multiselectable="true"><!-- content div -->
                    <div class="card collapse-icon panel mb-0 box-shadow-0 border-0">

                        <div id="heading11" role="tab" class="card-header">
                            <div class="custom-row">
                                <div class="col-lg-3 col-md-3 col-sm-0 col-xs-0 td pad-0-15">
                                    <span> </span>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-0 col-xs-0 td pad-0-15">
                                    <span class="text-center" style="font-weight: bold;">Total Operasional Sekretariatan</span>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 td pad-0-15">
                                    <span class="text-center" style="font-weight: bold;">Total Pendidikan Politik</span>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-0 col-xs-0 td pad-0-15">
                                    <span class="text-center" style="font-weight: bold;">Total RAB</span>
                                </div>
                                <div class="col-lg-1 col-md-1 col-sm-0 col-xs-0 td">
                                    <span class="text-center"></span>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-0 col-xs-0 td">
                                    <span class="text-center" style="font-weight: bold;">Setting</span>
                                </div>
                            </div>
                        </div>

<?php 
    if ($pData != "0") : 
        for ($i=0; $i < $pCount; $i++) : 
            $date    = date('d M Y', strtotime($pData[$i]['created_date']));
            $datePrv = date('d M Y', strtotime($pData[$i]['prpdt_dtprv']));
            $pId     = $pData[$i]['prpdt_id'];
            $ttlOS   = 0;
            $ttlPP   = 0;

            $osQRY   = "SELECT * FROM prpdt_opskdt WHERE prpdt_id = :postID AND sttus = 'publish' ";
            $osData  = $pdo->prepare($osQRY);
            $osData->bindValue(":postID", $pId, PDO::PARAM_STR);
            $osData->execute();

            if ($osData->rowCount() > 0) {
                $osCount = $osData->rowCount();
                $osAllDt = $osData->fetchAll(PDO::FETCH_ASSOC);

                $osAtk   = str_replace(".", "", $osAllDt[0]['opskdt_atk']); 
                $osFc    = str_replace(".", "", $osAllDt[0]['opskdt_fc']);
                $osSda   = str_replace(".", "", $osAllDt[0]['opskdt_sda']);
                $osHnr   = str_replace(".", "", $osAllDt[0]['opskdt_hnr']);
                $osSwa   = str_replace(".", "", $osAllDt[0]['opskdt_sewa']);
                $osModal = str_replace(".", "", $osAllDt[0]['opskdt_mdl']);
                $osPrpl  = str_replace(".", "", $osAllDt[0]['opskdt_prpl']);
                $osPrlkn = str_replace(".", "", $osAllDt[0]['opskdt_pmkpn']);
                $osPrltn = str_replace(".", "", $osAllDt[0]['opskdt_pmltn']);
                $osTrans = str_replace(".", "", $osAllDt[0]['opskdt_trns']);
                $osLain  = str_replace(".", "", $osAllDt[0]['opskdt_ln']);

                $ttlOS   = $osAtk+$osFc+$osSda+$osHnr+$osSwa+$osModal+$osPrpl+$osPrlkn+$osPrltn+$osTrans+$osLain;
            }

            $ppQRY   = "SELECT * FROM prpdt_pnpldt WHERE prpdt_id = :postID AND sttus = 'publish' ";
            $ppData  = $pdo->prepare($ppQRY);
            $ppData->bindValue(":postID", $pId, PDO::PARAM_STR);
            $ppData->execute();

            if ($ppData->rowCount() > 0) {
                $ppCount = $ppData->rowCount();
                $ppAllDt = $ppData->fetchAll(PDO::FETCH_ASSOC);

                for ($a=0; $a < $ppCount; $a++) {
                    $ppAtk      = str_replace(".", "", $ppAllDt[$a]['pnpldt_atk']);
                    $ppFc       = str_replace(".", "", $ppAllDt[$a]['pnpldt_ctk']);
                    $ppMkmn     = str_replace(".", "", $ppAllDt[$a]['pnpldt_mkmn']);
                    $ppSppd     = str_replace(".", "", $ppAllDt[$a]['pnpldt_sppd']);
                    $ppHnr      = str_replace(".", "", $ppAllDt[$a]['pnpldt_hnr']);
                    $ppTrns     = str_replace(".", "", $ppAllDt[$a]['pnpldt_trns']);
                    $ppSwa      = str_replace(".", "", $ppAllDt[$a]['pnpldt_swa']);
                    $ppSku      = str_replace(".", "", $ppAllDt[$a]['pnpldt_sku']);
                    $ppDll      = str_replace(".", "", $ppAllDt[$a]['pnpldt_ln']);

                    $ByKeg      = $ppAtk+$ppFc+$ppMkmn+$ppSppd+$ppHnr+$ppTrns+$ppSwa+$ppSku+$ppDll;
                    $ttlPP      += $ByKeg;
                }
            }

            $ttlRAB = $ttlOS + $ttlPP;

            $fcQRY   = "SELECT pcnfg_id, pcnfg_nm FROM pile_cnfg WHERE type = 'rab'";
            $fcData  = $pdo->prepare($fcQRY);
            $fcData->execute();

            if ($fcData->rowCount() > 0) {
                $fcRabCount  = $fcData->rowCount();
                $fcRabDt     = $fcData->fetchAll(PDO::FETCH_ASSOC);
            }

            $fcQRY   = "SELECT pcnfg_id, pcnfg_nm FROM pile_cnfg WHERE type = 'realisasi'";
            $fcData  = $pdo->prepare($fcQRY);
            $fcData->execute();

            if ($fcData->rowCount() > 0) {
                $fcReaCount  = $fcData->rowCount();
                $fcReaDt     = $fcData->fetchAll(PDO::FETCH_ASSOC);
            }

            $fcQRY   = "SELECT pcnfg_id, pcnfg_nm FROM pile_cnfg WHERE type = 'lpj'";
            $fcData  = $pdo->prepare($fcQRY);
            $fcData->execute();

            if ($fcData->rowCount() > 0) {
                $fcLpjCount  = $fcData->rowCount();
                $fcLpjDt     = $fcData->fetchAll(PDO::FETCH_ASSOC);
            }

?>

                        <div id="heading11" role="tab" class="card-header">
                            <div class="custom-row">
                                <div class="col-lg-3 col-md-3 col-sm-0 col-xs-0 td pad-0-15">
                                    <span>Proposal <?php $nme = $i+1; echo $pData[$i]['prpdt_nmpp'] ." / ". $date; ?></span>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-0 col-xs-0 td pad-0-15">
                                    <span>Rp <?php echo number_format($ttlOS,0,",",".") ?></span>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-0 col-xs-0 td pad-0-15">
                                    <span class="text-center">Rp <?php echo number_format($ttlPP,0,",",".") ?></span>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-0 col-xs-0 td pad-0-15">
                                    <span class="text-center">Rp <?php echo number_format($ttlRAB,0,",",".") ?></span>
                                </div>
                                <div class="col-lg-1 col-md-1 col-sm-0 col-xs-0 td">
                                    <span class="text-center"></span>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-0 col-xs-0 td">
                                    <span class="text-right">
                                        <button data-toggle="collapse" data-parent="#accordionWrap1" href="<?php echo '#accordion'.$i ?>" class="pd-setting">Detail</button>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div id="<?php echo 'accordion'.$i ?>" role="tabpanel" aria-labelledby="heading11" class="panel-collapse panel-ic collapse" aria-expanded="true"><!-- detail accordion -->
                            <div class="card-body">
                                <div class="custom-row">
                                    <div class="col-lg-6 col-md-6 col-sm-0 col-xs-0"><!-- content left coloumn -->

                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-0 col-xs-0">
                                                <table class="row-detail">
                                                    <tr>
                                                        <td colspan="3">
                                                            <h4 class="mg-0">Data Kepengurusan</h4>
                                                        </td>
                                                    </tr>
                                                    <tr style="border-top: 1px solid #e9ecef;">
                                                        <td>Nama Partai</td>
                                                        <td>:</td>
                                                        <td><?php echo $pData[$i]['prpdt_nmpp']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Alamat</td>
                                                        <td>:</td>
                                                        <td><?php echo $pData[$i]['prpdt_drss']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nama Ketua</td>
                                                        <td>:</td>
                                                        <td><?php echo $pData[$i]['prpdt_nmld']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nama Bendahara</td>
                                                        <td>:</td>
                                                        <td><?php echo $pData[$i]['prpdt_xch']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nama Sekretaris</td>
                                                        <td>:</td>
                                                        <td><?php echo $pData[$i]['prpdt_scrt']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tanggal Pengesahan</td>
                                                        <td>:</td>
                                                        <td><?php echo $datePrv ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nomor NPWP</td>
                                                        <td>:</td>
                                                        <td><?php echo $pData[$i]['prpdt_npwp'] ?></td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-0 col-xs-0" style="margin-top: 35px;">
                                                <table class="row-detail">
                                                    <tr>
                                                        <td colspan="3">
                                                            <h4 class="mg-0">List Dokumen Persyaratan Proposal</h4>
                                                        </td>
                                                    </tr>
                                                    <tr style="border-top: 1px solid #e9ecef;border-bottom: 1px solid  #90A4AE;">
                                                        <td>No</td>
                                                        <td>Nama File</td>
                                                        <td style="text-align: center; min-width: 100px;">Link File</td>
                                                    </tr>
                                        <?php 
                                            for ($a=0; $a < $fcRabCount; $a++) :
                                            $cnfgID  = $fcRabDt[$a]['pcnfg_id'];
                                            $flQRY   = "SELECT pile_id as fileId, pile_ as link FROM pile WHERE prpdt_id = :postID AND pcnfg_id = :cnfgID AND sttus = 'publish' LIMIT 1";
                                            $flData  = $pdo->prepare($flQRY);
                                            $flData->bindValue(":postID", $pId, PDO::PARAM_STR);
                                            $flData->bindValue(":cnfgID", $cnfgID, PDO::PARAM_STR);
                                            $flData->execute();

                                            if ($flData->rowCount() > 0) {
                                                $flCData = $flData->rowCount();
                                                $flAllDt = $flData->fetchAll(PDO::FETCH_ASSOC);
                                                $link    = "<a href='". BASE_URL . "upl/". $flAllDt[0]['link'] ."' target='_blank'>preview</a>";
                                                $flId    = $flAllDt[0]['fileId'];
                                            } else {
                                                $link    = "<span>not found</span>";
                                                $flId    = "not";
                                            }
                                        ?>

                                                    <tr id="flDt-<?php echo $i+1 ?>-<?php echo $a+1 ?>">
                                                        <td style="border-right: 1px solid #e9ecef;"><?php echo $a+1 ?></td>
                                                        <td><?php echo $fcRabDt[$a]['pcnfg_nm'] ?></td>
                                                        <td style="text-align:center; border-left: 1px solid #e9ecef;border-right: 1px solid #e9ecef;" width="10%"><?php echo $link; ?></td>
                                                    </tr>
                                        <?php endfor; ?>
                                                </table>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-0 col-xs-0" style="margin-top: 35px;">
                                                <table class="row-detail">
                                                    <tr>
                                                        <td colspan="3">
                                                            <h4 class="mg-0">Dokumen Realisasi Dana Bantuan Politik</h4>
                                                        </td>
                                                    </tr>
                                                    <tr style="border-top: 1px solid #e9ecef;border-bottom: 1px solid  #90A4AE;">
                                                        <td>No</td>
                                                        <td>Nama File</td>
                                                        <td style="text-align: center; min-width: 100px;">Link File</td>
                                                    </tr>
                                        <?php 
                                            for ($a=0; $a < $fcReaCount; $a++) :
                                            $cnfgID  = $fcReaDt[$a]['pcnfg_id'];
                                            $flQRY   = "SELECT pile_id as fileId, pile_ as link FROM pile WHERE prpdt_id = :postID AND pcnfg_id = :cnfgID AND sttus = 'publish' LIMIT 1";
                                            $flData  = $pdo->prepare($flQRY);
                                            $flData->bindValue(":postID", $pId, PDO::PARAM_STR);
                                            $flData->bindValue(":cnfgID", $cnfgID, PDO::PARAM_STR);
                                            $flData->execute();

                                            if ($flData->rowCount() > 0) {
                                                $flCData = $flData->rowCount();
                                                $flAllDt = $flData->fetchAll(PDO::FETCH_ASSOC);
                                                $link    = "<a href='". BASE_URL . "upl/". $flAllDt[0]['link'] ."' target='_blank'>preview</a>";
                                                $flId    = $flAllDt[0]['fileId'];
                                            } else {
                                                $link    = "<span>not found</span>";
                                                $flId    = "not";
                                            }
                                        ?>

                                                    <tr id="flDt-<?php echo $i+1 ?>-<?php echo $a+1 ?>">
                                                        <td style="border-right: 1px solid #e9ecef;"><?php echo $a+1 ?></td>
                                                        <td><?php echo $fcReaDt[$a]['pcnfg_nm'] ?></td>
                                                        <td style="text-align:center; border-left: 1px solid #e9ecef;border-right: 1px solid #e9ecef;" width="10%"><?php echo $link; ?></td>
                                                    </tr>
                                        <?php endfor; ?>
                                                </table>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-0 col-xs-0" style="margin-top: 35px;">
                                                <table class="row-detail">
                                                    <tr>
                                                        <td colspan="3">
                                                            <h4 class="mg-0">Laporan pertanggung Jawaban</h4>
                                                        </td>
                                                    </tr>
                                                    <tr style="border-top: 1px solid #e9ecef;border-bottom: 1px solid  #90A4AE;">
                                                        <td>No</td>
                                                        <td>Nama File</td>
                                                        <td style="text-align: center; min-width: 100px;">Link File</td>
                                                    </tr>
                                        <?php 
                                            for ($a=0; $a < $fcLpjCount; $a++) :
                                            $cnfgID  = $fcLpjDt[$a]['pcnfg_id'];
                                            $flQRY   = "SELECT pile_id as fileId, pile_ as link FROM pile WHERE prpdt_id = :postID AND pcnfg_id = :cnfgID AND sttus = 'publish' LIMIT 1";
                                            $flData  = $pdo->prepare($flQRY);
                                            $flData->bindValue(":postID", $pId, PDO::PARAM_STR);
                                            $flData->bindValue(":cnfgID", $cnfgID, PDO::PARAM_STR);
                                            $flData->execute();

                                            if ($flData->rowCount() > 0) {
                                                $flCData = $flData->rowCount();
                                                $flAllDt = $flData->fetchAll(PDO::FETCH_ASSOC);
                                                $link    = "<a href='". BASE_URL . "upl/". $flAllDt[0]['link'] ."' target='_blank'>preview</a>";
                                                $flId    = $flAllDt[0]['fileId'];
                                            } else {
                                                $link    = "<span>not found</span>";
                                                $flId    = "not";
                                            }
                                        ?>

                                                    <tr id="flDt-<?php echo $i+1 ?>-<?php echo $a+1 ?>">
                                                        <td style="border-right: 1px solid #e9ecef;"><?php echo $a+1 ?></td>
                                                        <td><?php echo $fcLpjDt[$a]['pcnfg_nm'] ?></td>
                                                        <td style="text-align:center; border-left: 1px solid #e9ecef;border-right: 1px solid #e9ecef;" width="10%"><?php echo $link; ?></td>
                                                    </tr>
                                        <?php endfor; ?>
                                                </table>
                                            </div>
                                        </div>
                                                    
                                    </div><!-- end of content left coloumn -->
                                    <div class="col-lg-1 col-md-1 col-sm-0 col-xs-0"> </div><!-- coloumn space -->
                                    <div class="col-lg-5 col-md-5 col-sm-0 col-xs-0" ><!-- content right coloumn -->
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-0 col-xs-0">
                                                <table class="row-detail">
                                                    <tr>
                                                        <td><h4 class="mg-0">Operasional Sekretariatan</h4></td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-0 col-xs-0">
                                                <table class="row-detail">
                                                    <tr style="border-top: 1px solid #e9ecef;">
                                                        <td>ATK</td>
                                                        <td>:</td>
                                                        <td> Rp </td>
                                                        <td class="text-right"><?php echo $osAllDt[0]['opskdt_atk']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Foto Copy</td>
                                                        <td>:</td>
                                                        <td> Rp </td>
                                                        <td class="text-right"><?php echo $osAllDt[0]['opskdt_fc']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Honorarium</td>
                                                        <td>:</td>
                                                        <td> Rp </td>
                                                        <td class="text-right"><?php echo $osAllDt[0]['opskdt_hnr']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Belanja SDA / Tagihan</td>
                                                        <td>:</td>
                                                        <td> Rp </td>
                                                        <td class="text-right"><?php echo $osAllDt[0]['opskdt_sda']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Belanja Modal / Pengadaan</td>
                                                        <td>:</td>
                                                        <td> Rp </td>
                                                        <td class="text-right"><?php echo $osAllDt[0]['opskdt_mdl']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Biaya Sewa</td>
                                                        <td>:</td>
                                                        <td> Rp </td>
                                                        <td class="text-right"><?php echo $osAllDt[0]['opskdt_sewa']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Belanja Peralatan dan Perlengkapan Kantor</td>
                                                        <td>:</td>
                                                        <td> Rp </td>
                                                        <td class="text-right"><?php echo $osAllDt[0]['opskdt_prpl']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Belanja Pemeliharaan Perlengkapan Kantor</td>
                                                        <td>:</td>
                                                        <td> Rp </td>
                                                        <td class="text-right"><?php echo $osAllDt[0]['opskdt_pmkpn']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Belanja Pemeliharaan Peralatan Kantor</td>
                                                        <td>:</td>
                                                        <td> Rp </td>
                                                        <td class="text-right"><?php echo $osAllDt[0]['opskdt_pmltn']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>BBM / Biaya Transportasi</td>
                                                        <td>:</td>
                                                        <td> Rp </td>
                                                        <td class="text-right"><?php echo $osAllDt[0]['opskdt_trns']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Lainnya</td>
                                                        <td>:</td>
                                                        <td> Rp </td>
                                                        <td class="text-right"><?php echo $osAllDt[0]['opskdt_ln']; ?></td>
                                                    </tr>
                                                    <tr style="border-top: 1px solid  #90A4AE; font-weight: bold;">
                                                        <td>Total</td>
                                                        <td>:</td>
                                                        <td> Rp </td>
                                                        <td class="text-right"><?php echo number_format($ttlOS,0,",",".") ?></td>
                                                    </tr>
                                                </table>
                                            </div>

                                            <div class="col-lg-12 col-md-12 col-sm-0 col-xs-0" style="margin-top: 20px;">
                                                <table class="row-detail">
                                                    <tr>
                                                        <td><h4 class="mg-0">Pendidikan Politik</h4></td>
                                                        <td class="text-right">
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-0 col-xs-0">
                                                <table class="row-detail">

                                        <?php 
                                            for ($a=0; $a < $ppCount; $a++) : 
                                        ?>

                                                    <tr style="border-top: 1px solid #e9ecef;border-bottom: 1px solid  #90A4AE;">
                                                        <td colspan="4" style="text-transform: capitalize; font-weight: bold;"><?php echo $ppAllDt[$a]['pnpldt_nm']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>ATK</td>
                                                        <td>:</td>
                                                        <td> Rp </td>
                                                        <td class="text-right"><?php echo $ppAllDt[$a]['pnpldt_atk']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Belanja Cetak</td>
                                                        <td>:</td>
                                                        <td> Rp </td>
                                                        <td class="text-right"><?php echo $ppAllDt[$a]['pnpldt_ctk']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Makan dan Minum</td>
                                                        <td>:</td>
                                                        <td> Rp </td>
                                                        <td class="text-right"><?php echo $ppAllDt[$a]['pnpldt_mkmn']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>SPPD</td>
                                                        <td>:</td>
                                                        <td> Rp </td>
                                                        <td class="text-right"><?php echo $ppAllDt[$a]['pnpldt_sppd']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Honorarium</td>
                                                        <td>:</td>
                                                        <td> Rp </td>
                                                        <td class="text-right"><?php echo $ppAllDt[$a]['pnpldt_hnr']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Transportasi</td>
                                                        <td>:</td>
                                                        <td> Rp </td>
                                                        <td class="text-right"><?php echo $ppAllDt[$a]['pnpldt_trns']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Uang Saku</td>
                                                        <td>:</td>
                                                        <td> Rp </td>
                                                        <td class="text-right"><?php echo $ppAllDt[$a]['pnpldt_sku']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Biaya Gedung</td>
                                                        <td>:</td>
                                                        <td> Rp </td>
                                                        <td class="text-right"><?php echo $ppAllDt[$a]['pnpldt_swa']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Lainnya</td>
                                                        <td>:</td>
                                                        <td> Rp </td>
                                                        <td class="text-right"><?php echo $ppAllDt[$a]['pnpldt_ln']; ?></td>
                                                    </tr>

                                        <?php endfor; ?>

                                                    <tr style="border-top: 1px solid  #90A4AE; font-weight: bold;">
                                                        <td>Total</td>
                                                        <td>:</td>
                                                        <td> Rp </td>
                                                        <td class="text-right"><?php echo number_format($ttlPP,0,",",".") ?></td>
                                                    </tr>
                                                </table>

                                            </div>

                                        </div>
                                    </div><!-- end of content right coloumn -->
                                </div><!-- end of custom row -->
                            </div>
                        </div><!-- end of detail accordion -->

<?php endfor; endif; ?>
                    
                    </div>
                </div><!-- end of content div -->
            </div><!-- end of card-content div -->

        </div>
    </div>
</div>