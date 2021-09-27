
<?php 
    if ($uData != "0") : 
        for ($i=0; $i < $uCount; $i++) : 
            $uId        = $uData[$i]['mem_id'];
            $uUser      = $uData[$i]['mem_'];
            $uPess      = $uData[$i]['mem_pess'];
            $uName      = $uData[$i]['mem_nmpp'];
            $uPhone     = $uData[$i]['mem_conpe'];
            $uMail      = $uData[$i]['mem_conma'];
            $uLogo      = $uData[$i]['mem_lgpp'];
            $uStat      = $uData[$i]['sttus'];
            $uCreate    = $uData[$i]['created_by'];
            $uModified  = $uData[$i]['modified_by'];
            $uCDate     = $uData[$i]['created_date'];
            $uMDate     = $uData[$i]['modified_date'];
?>

    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">

        <?php if ( $uStat == "rainbow" || $uStat == "blue" ) : ?>
            <div class="card users border-teal border-lighten-2" style="border: 1px solid #eea236 !important">
        <?php elseif ( $uStat == "green" ) : ?>
            <div class="card users border-teal border-lighten-2" style="border: 1px solid #4cae4c !important">
        <?php else : ?>
            <div class="card users border-teal border-lighten-2" style="border: 1px solid #d43f3a !important">
        <?php endif ?>

            <div class="text-center">
                <div class="card-body text-right" style="padding: 5px 5px 10px 10px">
                    <table>
                        <tr>
                            <td width="90%" style="text-align: left !important; font-style: italic !important;">
                                username: <b><?php echo $uUser; ?></b>
                            </td>
                            <td width="10%">
                                <button type="button" class="btn btn-xs btn-custon-four btn-default" style="border: none">
                                    <i class="fa fa-wrench" aria-hidden="true" data-toggle="modal" data-target="#User<?php echo $uUser?>EditModal"></i></button>
                            </td>
                            <td width="10%">
                                <button type="button" class="btn btn-xs btn-custon-four btn-default" style="border: none">
                                    <i class="fa fa-trash" aria-hidden="true"></i></button>
                                </td>
                        </tr>
                    </table>
                    <!-- <button type="button" class="btn btn-xs btn-custon-four btn-default" style="border: none">
                        <i class="fa fa-wrench" aria-hidden="true" data-toggle="modal" data-target="#User<?php echo $uUser?>EditModal"></i></button>
                    <button type="button" class="btn btn-xs btn-custon-four btn-default" style="border: none">
                        <i class="fa fa-trash" aria-hidden="true"></i></button> -->

                    <div id="User<?php echo $uUser?>EditModal" class="modal modal-adminpro-general modal-zoomInDown fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="modal-login-form-inner">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="basic-login-inner modal-basic-inner">
                                                    <h3>Change Password  ( <?php echo $uUser; ?> )</h3>
                                                    <p>Change password of selected user</p>
                                                    <form method="post" id="fm-upass-<?php echo $uUser?>" action="" enctype="multipart/form-data">
                                                        <input type="hidden" name="userid" value="<?php echo $uId ?>">
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                    <label class="login2">New Password</label>
                                                                </div>
                                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                    <input type="password" class="form-control" placeholder="password" name="newpass" required />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>

                                                        <div class="text-right">
                                                            <?php if ( $uStat == "rainbow" || $uStat == "blue" ) : ?>
                                                                <button class="btn btn-custon-four btn-warning" data-dismiss="modal" style="margin-right: 10px">Cancel</button>
                                                                <button class="btn btn-custon-four btn-warning" type="submit" id="fm-upass-<?php echo $uUser?>" onclick="uPassChange($(this))">Process</button>
                                                            <?php elseif ( $uStat == "green" ) : ?>
                                                                <button class="btn btn-custon-four btn-success" data-dismiss="modal" style="margin-right: 10px">Cancel</button>
                                                                <button class="btn btn-custon-four btn-success" type="submit" id="fm-upass-<?php echo $uUser?>" onclick="uPassChange($(this))">Process</button>
                                                            <?php else : ?>
                                                                <button class="btn btn-custon-four btn-danger" data-dismiss="modal" style="margin-right: 10px">Cancel</button>
                                                                <button class="btn btn-custon-four btn-danger" type="submit" id="fm-upass-<?php echo $uUser?>" onclick="uPassChange($(this))">Process</button>
                                                            <?php endif ?>

                                                            
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

                    <hr>

                        <?php if ( $uStat == "rainbow" || $uStat == "blue" ) : ?>
                            <div class="button-drop-style-two btn-warning-bg">
                                <button type="button" class="btn btn-sm btn-custon-four btn-warning dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-info-circle" aria-hidden="true"></i> Administrator <i class="fa fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu btn-dropdown-menu another-drop-pro-seven" role="menu">
                                    <li><a onclick="uSettingStat($(this))" data-id="<?php echo $uId ?>" data-value="g">Downgrade to Member</a></li>
                                    <li><a onclick="uSettingStat($(this))" data-id="<?php echo $uId ?>" data-value="o">Deactive Account</a></li>
                                </ul>
                            </div>
                        <?php elseif ( $uStat == "green" ) : ?>
                            <div class="button-drop-style-two btn-success-bg">
                                <button type="button" class="btn btn-sm btn-custon-four btn-success dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-info-circle" aria-hidden="true"></i> Active <i class="fa fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu btn-dropdown-menu another-drop-pro-seven" role="menu">
                                    <li><a onclick="uSettingStat($(this))" data-id="<?php echo $uId ?>" data-value="b">Become Administrator</a></li>
                                    <li><a onclick="uSettingStat($(this))" data-id="<?php echo $uId ?>" data-value="o">Deactive Account</a></li>
                                </ul>
                            </div>
                        <?php else : ?>
                            <div class="button-drop-style-two btn-danger-bg">
                                <button type="button" class="btn btn-sm btn-custon-four btn-danger dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-info-circle" aria-hidden="true"></i> Non Active <i class="fa fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu btn-dropdown-menu another-drop-pro-seven" role="menu">
                                    <li><a onclick="uSettingStat($(this))" data-id="<?php echo $uId ?>" data-value="g">Active this Account</a></li>
                                </ul>
                            </div>
                        <?php endif ?>

                </div>
            </div>
        </div>
    </div>

<?php endfor; endif ?>
