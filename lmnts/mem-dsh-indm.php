
<div class="hidden-lg hidden-md col-sm-12 col-xs-12">
    <div class="product-status-wrap">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-9 col-xs-9">
                            <h1>List Proposal</h1>
                        </div>
                        <div class="col-sm-3 hidden-xs hidden-lg hidden-md">
                            <div class="add-product">
                                <a href="./pengajuan-proposal.php">Add Proposal</a>
                            </div>
                        </div>
                        <div class="col-xs-3 hidden-sm hidden-lg hidden-md">
                            <div class="add-product">
                                <a href="./pengajuan-proposal.php"><i class="fa fa-plus" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="accordionWrapM" role="tablist" aria-multiselectable="true"><!-- content div -->
                    <div class="card collapse-icon panel mb-0 box-shadow-0 border-0">

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
                $fcDtCount  = $fcData->rowCount();
                $fcAllDt    = $fcData->fetchAll(PDO::FETCH_ASSOC);
            }

?>

                        <div id="headingM" role="tab" class="card-header">
                            <div class="custom-row">
                                <div class="hidden-lg hidden-md col-sm-12 col-xs-12 td pad-0">
                                    <table class="tabHeadM">
                                        <tr>
                                            <td colspan="3">Proposal <?php $nme = $i+1; echo $nme ." / ". $pData[$i]['prpdt_nmpp'] ." / ". $date; ?></td>
                                            <td id="minwid-130" class="text-right pad-0">
                                                <button tooltip-toggle="tooltip" data-toggle="modal" data-target="#prpslDelete" data-post="<?php echo $pId ?>" title="Trash" class="pd-setting-ed" onclick="delModal($(this))"><i class="fa fa-trash-o" aria-hidden="true" ></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Operasional</td>
                                            <td>:</td>
                                            <td colspan="2" class="text-right">Rp <?php echo number_format($ttlOS,0,",","."); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Pendidikan Politik</td>
                                            <td>:</td>
                                            <td colspan="2" class="text-right">Rp <?php echo number_format($ttlPP,0,",","."); ?></td>
                                        </tr>
                                        <tr style="font-weight: bold">
                                            <td>Total RAB</td>
                                            <td>:</td>
                                            <td colspan="2" class="text-right">Rp <?php echo number_format($ttlRAB,0,",","."); ?></td>
                                        </tr>
                                        <tr style="font-weight: bold">
                                            <td colspan="2"></td>
                                            <td colspan="2" class="text-right">
                                                <span>
                                                    <button data-toggle="collapse" data-parent="#accordionWrapM" href="<?php echo '#accordionM'.$i ?>" class="pd-setting">Detail</button>
                                                </span>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div id="<?php echo 'accordionM'.$i ?>" role="tabpanel" aria-labelledby="heading11" class="panel-collapse panel-ic collapse accordionM" aria-expanded="true"><!-- detail accordion -->
                            <div id="detailM" class="card-body">
                                <div class="custom-row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"><!-- content left coloumn -->

                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <table class="row-detail">
                                                    <tr>
                                                        <td colspan="2">
                                                            <h4 class="mg-0">Data Kepengurusan</h4>
                                                        </td>
                                                        <td>
                                                            <span><button id="btnPrpslKPPut" data-toggle="modal" data-target="#prpslKPPut" data-post="<?php echo $pData[$i]['prpdt_id']; ?>" title="Edit" class="pd-setting-ed" onclick="kgModal($(this))"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></span>
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
                                                        <td><?php echo $pData[$i]['prpdt_npwp']; ?></td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 35px;">
                                                <table class="row-detail">
                                                    <tr>
                                                        <td colspan="5">
                                                            <h4 class="mg-0">List Dokumen Upload</h4>
                                                        </td>
                                                    </tr>
                                                    <tr style="border-top: 1px solid #e9ecef;border-bottom: 1px solid  #90A4AE;">
                                                        <!-- <td>No</td> -->
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

                                                    <tr id="flDt-<?php echo $i+1 ?>-<?php echo $a+1 ?>">
                                                        <!-- <td style="border-right: 1px solid #e9ecef;"><?php echo $a+1 ?></td> -->
                                                        <td><?php echo $fcAllDt[$a]['pcnfg_nm'] ?></td>
                                                        <td style="text-align:center; border-left: 1px solid #e9ecef;border-right: 1px solid #e9ecef;"><?php echo $link; ?></td>
                                                        <td>
                                                            <button title="Edit" class="pd-setting-ed" onclick="document.getElementById('flUp-<?php echo $i+1 ?>-<?php echo $a+1 ?>').style.display = 'contents';document.getElementById('flDt-<?php echo $i+1 ?>-<?php echo $a+1 ?>').style.display = 'none';"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                                        </td>
                                                        <td>
                                                            <button title="delete" class="pd-setting-ed" data-toggle="modal" data-target="#prpslFLDel" data-post="<?php echo $flId ?>" onclick="flModal($(this))"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr id="flUp-<?php echo $i+1 ?>-<?php echo $a+1 ?>" style="display: none;">
                                                        <td style="border-right: 1px solid #e9ecef;"><?php echo $a+1 ?></td>
                                                        <td style="text-align:center; border-bottom: 1px solid #e9ecef;">
                                                            <form id="fl-put-<?php echo $i+1 ?>-<?php echo $a+1 ?>">
                                                                            
                                                                <div class="file-upload-inner file-upload-inner-right ts-forms">
                                                                    <div class="input append-small-btn">
                                                                        <div class="file-button">
                                                                            Browse
                                                                            <input type="file" accept="application/pdf" name="flPut" id="inpFile-<?php echo $i+1 ?>-<?php echo $a+1 ?>" data-target="txtFile-<?php echo $i+1 ?>-<?php echo $a+1 ?>" onchange="fileput($(this))">
                                                                        </div>
                                                                        <input type="text" id="txtFile-<?php echo $i+1 ?>-<?php echo $a+1 ?>" placeholder="no file selected" name="flPutLabel">
                                                                        <input type="hidden" name="flCnPut" value="<?php echo $cnfgID ?>">
                                                                        <input type="hidden" name="flPidPut" value="<?php echo $pId ?>">
                                                                        <input type="hidden" name="flIdPut" value="<?php echo $flId ?>">
                                                                    </div>
                                                                </div>

                                                            </form>
                                                        </td>
                                                        <td style="border-bottom: 1px solid #e9ecef;">
                                                            <button title="save" type="submit" id="fl-put-<?php echo $i+1 ?>-<?php echo $a+1 ?>" name="prpsl-file-put" class="pd-setting-ed" onclick="putFile($(this))"><i class="fa fa-check" aria-hidden="true"></i></button>
                                                        </td>
                                                        <td style="border-bottom: 1px solid #e9ecef;">
                                                            <button title="cancel" class="pd-setting-ed" onclick="document.getElementById('flDt-<?php echo $i+1 ?>-<?php echo $a+1 ?>').removeAttribute('style');document.getElementById('flUp-<?php echo $i+1 ?>-<?php echo $a+1 ?>').style.display = 'none';"><i class="fa fa-times" aria-hidden="true"></i></button>
                                                        </td>
                                                    </tr>
                                        <?php endfor; ?>
                                                </table>
                                            </div>
                                        </div>
                                                    
                                    </div><!-- end of content left coloumn -->
                                    <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12"> </div><!-- coloumn space -->
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12" style="margin-top: 30px;"><!-- content right coloumn -->
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <table class="row-detail">
                                                    <tr>
                                                        <td><h4 class="mg-0">Operasional Sekretariatan</h4></td>
                                                        <td class="text-right">
                                                            <span class="pull-right"><button tooltip-toggle="tooltip" data-toggle="modal" data-target="#prpslOSPut" data-post="<?php echo $osAllDt[0]['opskdt_id']; ?>" title="Edit" class="pd-setting-ed" onclick="osModal($(this))"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></span>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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

                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 20px;">
                                                <table class="row-detail">
                                                    <tr>
                                                        <td><h4 class="mg-0">Pendidikan Politik</h4></td>
                                                        <td class="text-right">
                                                            <span class="pull-right"><button tooltip-toggle="tooltip" data-toggle="modal" data-target="#prpslPPPut" data-post="<?php echo $pId ?>" data-ttl="add" title="Add" class="pd-setting-ed" onclick="ppModal($(this))"><i class="fa fa-plus" aria-hidden="true"></i></button></span>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <table class="row-detail">

                                        <?php 
                                            for ($a=0; $a < $ppCount; $a++) : 
                                        ?>

                                                    <tr style="border-top: 1px solid #e9ecef;border-bottom: 1px solid  #90A4AE;">
                                                        <td colspan="3" style="text-transform: capitalize; font-weight: bold;"><?php echo $ppAllDt[$a]['pnpldt_nm']; ?></td>
                                                        <td class="text-right">
                                                            <span>
                                                                <button tooltip-toggle="tooltip" data-toggle="modal" data-target="#prpslPPPut" data-post="<?php echo $ppAllDt[$a]['pnpldt_id']; ?>" data-ttl="put" title="Edit" class="pd-setting-ed" onclick="ppModal($(this))"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span>
                                                                <button tooltip-toggle="tooltip" data-toggle="modal" data-target="#prpslPPDel" data-post="<?php echo $ppAllDt[$a]['pnpldt_id']; ?>" data-ttl="del" title="Trash" class="pd-setting-ed" onclick="ppModal($(this))"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                            </span>
                                                        </td>
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
                                                        <td colspan="2" class="text-right"><?php echo number_format($ttlPP,0,",",".") ?></td>
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
                            
                            <!--div class="custom-pagination">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                    </ul>
                                </nav>
                            </div-->
        </div>
    </div>
</div>