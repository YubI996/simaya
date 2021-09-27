
<div class="col-lg-12 col-md-12 hidden-sm hidden-xs">
    <div class="product-status-wrap">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-9 col-md-9">
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
                                <div class="col-lg-3 col-md-3 col-sm-0 col-xs-0 td">
                                    <span class="text-center" style="font-weight: bold;">Option</span>
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

            $fcQRY   = "SELECT pcnfg_id, pcnfg_nm FROM pile_cnfg WHERE type = 'lpj'";
            $fcData  = $pdo->prepare($fcQRY);
            $fcData->execute();

            if ($fcData->rowCount() > 0) {
                $fcDtCount  = $fcData->rowCount();
                $fcAllDt    = $fcData->fetchAll(PDO::FETCH_ASSOC);
            }

?>

                        <div id="heading11" role="tab" class="card-header">
                            <div class="custom-row">
                                <div class="col-lg-3 col-md-3 col-sm-0 col-xs-0 td pad-0-15">
                                    <span>Proposal <?php $nme = $i+1; echo $nme ." / ". $pData[$i]['prpdt_nmpp'] ." / ". $date; ?></span>
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
                                <div class="col-lg-3 col-md-3 col-sm-0 col-xs-0 td">
                                    <span class="text-right">
                                        <button data-toggle="collapse" data-parent="#accordionWrap1" href="<?php echo '#accordion'.$i ?>" class="pd-setting">Detail</button>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div id="<?php echo 'accordion'.$i ?>" role="tabpanel" aria-labelledby="heading11" class="panel-collapse panel-ic collapse" aria-expanded="true"><!-- detail accordion -->
                            <div class="card-body">
                                <div class="custom-row">
                                    <div class="col-lg-12 col-md-12 col-sm-0 col-xs-0"><!-- content left coloumn -->

                                        <!-- <div class="row"> -->
                                            <!-- <div class="col-lg-12 col-md-12 col-sm-0 col-xs-0" style="margin-top: 35px;"> -->
                                                <table class="row-detail">
                                                    <tr>
                                                        <td colspan="5">
                                                            <h4 class="mg-0">List Dokumen Upload Laporan Pertanggung Jawaban</h4>
                                                        </td>
                                                    </tr>
                                                    <tr style="border-top: 1px solid #e9ecef;border-bottom: 1px solid  #90A4AE;">
                                                        <td>No</td>
                                                        <td>Nama File</td>
                                                        <td style="text-align: center; min-width: 100px;">Link File</td>
                                                        <td colspan="2" style="text-align: center;">Action</td>
                                                    </tr>
                                        <?php 
                                            for ($a=0; $a < $fcDtCount; $a++) :
                                            $cnfgID  = $fcAllDt[$a]['pcnfg_id'];
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

                                                    <tr id="flDtM-<?php echo $i+1 ?>-<?php echo $a+1 ?>">
                                                        <td style="border-right: 1px solid #e9ecef;"><?php echo $a+1 ?></td>
                                                        <td><?php echo $fcAllDt[$a]['pcnfg_nm'] ?></td>
                                                        <td style="text-align:center; border-left: 1px solid #e9ecef;border-right: 1px solid #e9ecef;"><?php echo $link; ?></td>
                                                        <td style="text-align: right;">
                                                            <button title="Edit" class="pd-setting-ed" onclick="document.getElementById('flUpM-<?php echo $i+1 ?>-<?php echo $a+1 ?>').style.display = 'contents';document.getElementById('flDtM-<?php echo $i+1 ?>-<?php echo $a+1 ?>').style.display = 'none';"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                                        </td>
                                                        <td>
                                                            <button title="delete" class="pd-setting-ed" data-toggle="modal" data-target="#prpslFLDel" data-post="<?php echo $flId ?>" onclick="flModal($(this))"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr id="flUpM-<?php echo $i+1 ?>-<?php echo $a+1 ?>" style="display: none;">
                                                        <td style="border-right: 1px solid #e9ecef;"><?php echo $a+1 ?></td>
                                                        <td colspan="2" style="text-align:center; border-bottom: 1px solid #e9ecef;">
                                                            <form id="fl-put-M-<?php echo $i+1 ?>-<?php echo $a+1 ?>">
                                                                            
                                                                <div class="file-upload-inner file-upload-inner-right ts-forms">
                                                                    <div class="input append-small-btn">
                                                                        <div class="file-button">
                                                                            Browse
                                                                            <input type="file" accept="application/pdf" name="flPut" id="inpFile-<?php echo $i+1 ?>-<?php echo $a+1 ?>" data-target="txtFile-M-<?php echo $i+1 ?>-<?php echo $a+1 ?>" onchange="fileput($(this))">
                                                                        </div>
                                                                        <input type="text" id="txtFile-M-<?php echo $i+1 ?>-<?php echo $a+1 ?>" placeholder="no file selected" name="flPutLabel">
                                                                        <input type="hidden" name="flCnPut" value="<?php echo $cnfgID ?>">
                                                                        <input type="hidden" name="flPidPut" value="<?php echo $pId ?>">
                                                                        <input type="hidden" name="flIdPut" value="<?php echo $flId ?>">
                                                                    </div>
                                                                </div>

                                                            </form>
                                                        </td>
                                                        <td style="border-bottom: 1px solid #e9ecef; text-align: right;">
                                                            <button title="save" type="submit" id="fl-put-M-<?php echo $i+1 ?>-<?php echo $a+1 ?>" name="prpsl-file-put" class="pd-setting-ed" onclick="putFile($(this))"><i class="fa fa-check" aria-hidden="true"></i></button>
                                                        </td>
                                                        <td style="border-bottom: 1px solid #e9ecef;">
                                                            <button title="cancel" class="pd-setting-ed" onclick="document.getElementById('flDtM-<?php echo $i+1 ?>-<?php echo $a+1 ?>').removeAttribute('style');document.getElementById('flUpM-<?php echo $i+1 ?>-<?php echo $a+1 ?>').style.display = 'none';"><i class="fa fa-times" aria-hidden="true"></i></button>
                                                        </td>
                                                    </tr>
                                        <?php endfor; ?>
                                                </table>
                                            <!-- </div> -->
                                        <!-- </div> -->
                                                    
                                    </div><!-- end of content left coloumn -->
                                    
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