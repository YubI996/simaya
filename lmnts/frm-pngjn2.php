
<div class="row">

    <form method="post" id="fm-prpsl" action="" enctype="multipart/form-data">

    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="sparkline10-list mg-tb-30">
            <!-- form header -->
            <div class="sparkline10-hd">
                <div class="main-sparkline10-hd">
                    <h1>Data Kepengurusan</h1>
                </div>
            </div>
            <div class="sparkline10-graph">
                <div class="basic-login-form-ad">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="chosen-select-single mg-b-20">
                                <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                            <label class="login2">Nama Partai</label>
                                        </div>
                                        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                            <input type="text" class="form-control" placeholder="Nama Partai" name="pp_nm" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                            <label class="login2">Alamat</label>
                                        </div>
                                        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                            <input type="text" class="form-control" placeholder="Alamat" name="pp_adr" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                            <label class="login2">Nama Ketua</label>
                                        </div>
                                        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                            <input type="text" class="form-control" placeholder="Nama Ketua" name="pp_ld" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                            <label class="login2">Nama Bendahara</label>
                                        </div>
                                        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                            <input type="text" class="form-control" placeholder="Nama Bendahara" name="pp_exc" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                            <label class="login2">Nama Sekretaris</label>
                                        </div>
                                        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                            <input type="text" class="form-control" placeholder="Nama Sekretaris" name="pp_scr" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group-inner data-custon-pick" id="data_1">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                            <label class="login2">Tanggal Pengesahan</label>
                                        </div>
                                        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                            <div class="input-group date">
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                <input type="text" class="form-control" value="" name="pp_skdt">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group-inner data-custon-pick" id="data_1">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                            <label class="login2">Nomor NPWP</label>
                                        </div>
                                        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                            <div class="input-group date">
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                <input type="text" class="form-control" value="" name="pp_npwp">
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

        <div class="sparkline10-list mg-tb-30">
            <!-- form header -->
            <div class="sparkline10-hd">
                <div class="main-sparkline10-hd">
                    <h1>Dokumen Persyaratan</h1>
                </div>
                <div class="panel-group adminpro-custon-design" id="accordion">

                    <div class="panel panel-default">
                        <a data-toggle="collapse" data-parent="#accordionDoc" href="#collapseDoc">
                            <div class="panel-heading accordion-head">
                                <h4 class="panel-title">List Dokumen Upload</h4>
                            </div>
                        </a>
                        <div id="collapseDoc" class="panel-collapse panel-ic collapse">
                            <div class="panel-body admin-panel-content">

                                <div class="form-group-inner">
                                    <div class="row">

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <label class="login2 pull-left">Surat permohonan bantuan keuangan</label>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                            <div class="file-upload-inner file-upload-inner-right ts-forms">
                                                <div class="input append-small-btn">
                                                    <div class="file-button">
                                                        Browse
                                                        <input type="file" accept="application/pdf" name="flName-1" id="inpFile-1">
                                                    </div>
                                                    <input type="text" id="txtFile-1" placeholder="no file selected" name="flLabel-1">
                                                    <input type="hidden" name="flCnfg-1" value="1">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <label class="login2 pull-left">Surat keputusan DPP</label>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                            <div class="file-upload-inner file-upload-inner-right ts-forms">
                                                <div class="input append-small-btn">
                                                    <div class="file-button">
                                                        Browse
                                                        <input type="file" accept="application/pdf" name="flName-2" id="inpFile-2">
                                                    </div>
                                                    <input type="text" id="txtFile-2" placeholder="no file selected" name="flLabel-2">
                                                    <input type="hidden" name="flCnfg-2" value="2">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <label class="login2 pull-left">Foto copy NPWP</label>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                            <div class="file-upload-inner file-upload-inner-right ts-forms">
                                                <div class="input append-small-btn">
                                                    <div class="file-button">
                                                        Browse
                                                        <input type="file" accept="application/pdf" name="flName-3" id="inpFile-3">
                                                    </div>
                                                    <input type="text" id="txtFile-3" placeholder="no file selected" name="flLabel-3">
                                                    <input type="hidden" name="flCnfg-3" value="3">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <label class="login2 pull-left">Surat keterangan hasil pemilu</label>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                            <div class="file-upload-inner file-upload-inner-right ts-forms">
                                                <div class="input append-small-btn">
                                                    <div class="file-button">
                                                        Browse
                                                        <input type="file" accept="application/pdf" name="flName-4" id="inpFile-4">
                                                    </div>
                                                    <input type="text" id="txtFile-4" placeholder="no file selected" name="flLabel-4">
                                                    <input type="hidden" name="flCnfg-4" value="4">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <label class="login2 pull-left">Nomor rekening kas umum parpol</label>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                            <div class="file-upload-inner file-upload-inner-right ts-forms">
                                                <div class="input append-small-btn">
                                                    <div class="file-button">
                                                        Browse
                                                        <input type="file" accept="application/pdf" name="flName-5" id="inpFile-5">
                                                    </div>
                                                    <input type="text" id="txtFile-5" placeholder="no file selected" name="flLabel-5">
                                                    <input type="hidden" name="flCnfg-5" value="5">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <label class="login2 pull-left">Rencana penggunaan dana bantuan keuangan</label>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                            <div class="file-upload-inner file-upload-inner-right ts-forms">
                                                <div class="input append-small-btn">
                                                    <div class="file-button">
                                                        Browse
                                                        <input type="file" accept="application/pdf" name="flName-6" id="inpFile-6">
                                                    </div>
                                                    <input type="text" id="txtFile-6" placeholder="no file selected" name="flLabel-6">
                                                    <input type="hidden" name="flCnfg-6" value="6">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <label class="login2 pull-left">Realisasi pertanggung jawaban sebelumnya</label>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                            <div class="file-upload-inner file-upload-inner-right ts-forms">
                                                <div class="input append-small-btn">
                                                    <div class="file-button">
                                                        Browse
                                                        <input type="file" accept="application/pdf" name="flName-7" id="inpFile-7">
                                                    </div>
                                                    <input type="text" id="txtFile-7" placeholder="no file selected" name="flLabel-7">
                                                    <input type="hidden" name="flCnfg-7" value="7">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <label class="login2 pull-left">Surat pernyataan ketua parpol</label>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                            <div class="file-upload-inner file-upload-inner-right ts-forms">
                                                <div class="input append-small-btn">
                                                    <div class="file-button">
                                                        Browse
                                                        <input type="file" accept="application/pdf" name="flName-8" id="inpFile-8">
                                                    </div>
                                                    <input type="text" id="txtFile-8" placeholder="no file selected" name="flLabel-8">
                                                    <input type="hidden" name="flCnfg-8" value="8">
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

    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <div class="sparkline10-list mg-tb-30">
            <!-- form header -->
            <div class="sparkline10-hd">
                <div class="main-sparkline10-hd">
                    <h1>RAB</h1>
                </div>
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

                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="btn-group btn-custom-groups btn-custom-groups-one pull-right">
                                                                <button type="button" data-repeater-delete class="btn btn-primary"><i class="fa fa-times adminpro-danger-error" aria-hidden="true"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <label class="login2">Nama Kegiatan</label>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="input-mark-inner mg-b-22">
                                                            <input type="text" class="form-control" placeholder="Nama Kegiatan" name="pnp_nkg" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="row">
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                    <label class="login2">Nama Item</label>
                                                                </div>
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                    <input type="text" class="form-control" name="pnp_name">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="row">
                                                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                                    <div class="row">
                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                            <label class="login2">Volume / Jumlah</label>
                                                                        </div>
                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                            <input type="text" class="form-control" name="pnp_vol">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                                                                    <div class="row">
                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                            <label class="login2">Total</label>
                                                                        </div>
                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                            <input type="text" class="form-control mask-currency" placeholder="Rp 0.000.000" name="pnp_val" onkeyup="maskCurrency()" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

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

                                <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                            <label class="login2 pull-right pull-right-pro">ATK</label>
                                        </div>
                                        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                            <input type="text" class="form-control mask-currency" placeholder="Rp 0.000.000" name="os_atk" onkeyup="maskCurrency()" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                            <label class="login2 pull-right pull-right-pro">Foto Copy</label>
                                        </div>
                                        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                            <input type="text" class="form-control mask-currency" placeholder="Rp 0.000.000" name="os_fc" onkeyup="maskCurrency()" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                            <label class="login2 pull-right pull-right-pro">Honorarium</label>
                                        </div>
                                        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                            <input type="text" class="form-control mask-currency" placeholder="Rp 0.000.000" name="os_hnr" onkeyup="maskCurrency()" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                            <label class="login2 pull-right pull-right-pro">Sewa</label>
                                        </div>
                                        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                            <input type="text" class="form-control mask-currency" placeholder="Rp 0.000.000" name="os_swa" onkeyup="maskCurrency()" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                            <label class="login2 pull-right pull-right-pro">Lainnya</label>
                                        </div>
                                        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                            <input type="text" class="form-control mask-currency" placeholder="Rp 0.000.000" name="os_sda" onkeyup="maskCurrency()" />
                                        </div>
                                    </div>
                                </div>

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
                        <button class="btn btn-white" type="submit">Cancel</button>
                        <button class="btn btn-sm btn-primary login-submit-cs" type="submit" id="fm-prpsl" name="prpsl-add" value="save" onclick="addPrpsl($(this))"  >Save Change</button>
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