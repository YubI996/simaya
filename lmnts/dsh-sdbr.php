    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">

            <div class="sidebar-header">
                <a href="./"><img class="main-logo" src="./assts/img/logo/logo." alt="" /></a>
                <strong><img src="./assts/img/logo/logosn.png" alt="" /></strong>
            </div>

            <div class="left-custom-menu-adp-wrap comment-scrollbar">

                <nav class="sidebar-nav left-sidebar-menu-pro">

                    <ul class="metismenu" id="menu1">

                    <!-- MEMBER SIDEBAR
                    ============================================ -->
                    <?php if ( $_SESSION['color'] == "green" ) : ?>
                        <li class="active">
                            <a class="" href="./">
                                <i class="fa big-icon fa-home icon-wrap"></i>
                                <span class="mini-click-non">Beranda</span>
                            </a>
                        </li>
                        <li>
                            <a class="" href="./rab.php" title="Rancangan Anggaran Belanja" >
                            	<i class="fa fa-credit-card sub-icon-mg" aria-hidden="true"></i>
                            	<span class="mini-sub-pro">Proposal</span>
                            </a>
                        </li>
                        <li>
                        	<a class="" href="./realisasi.php" title="Realisasi Anggaran Belanja" >
                        		<i class="fa fa-calendar-o sub-icon-mg" aria-hidden="true"></i>
                        		<span class="mini-sub-pro">Realisasi</span>
                        	</a>
                        </li>
                        <li>
                        	<a class="" href="./lpj.php" title="Laporan Pertanggung Jawaban" >
                        		<i class="fa fa-file sub-icon-mg" aria-hidden="true"></i>
                        		<span class="mini-sub-pro">LPJ</span>
                        	</a>
                        </li>
                        <li>
                            <a class="has-arrow" href="" aria-expanded="false"><i class="fa big-icon fa-cog icon-wrap"></i> <span class="mini-click-non">Akun Setting</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li>
                                    <a class="" href="./change-password.php" title="Ganti Password" ><i class="fa fa-lock sub-icon-mg" aria-hidden="true"></i><span class="mini-sub-pro">Ganti Password</span></a>
                                </li>
                            </ul>
                        </li>
                    <?php endif; ?>

                    <!-- ADMIN SIDEBAR
                    ============================================ -->
                    <?php if ( $_SESSION['color'] == "blue" || $_SESSION['color'] == "rainbow" ) : ?>
                        <li class="active">
                            <a class="" href="./">
                                <i class="fa big-icon fa-home icon-wrap"></i>
                                <span class="mini-click-non">Beranda</span>
                            </a>
                        </li>
                        <li>
                            <a class="" href="./proposal.php" aria-expanded="false"><i class="fa big-icon fa-files-o icon-wrap"></i> <span class="mini-click-non">List Proposal</span></a>
                        </li>
                        <li>
                            <a class="has-arrow" href="" aria-expanded="false"><i class="fa big-icon fa-users icon-wrap"></i> <span class="mini-click-non">Users Setting</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li>
                                    <a title="List Semua User" href="./users-settings.php"><i class="fa fa-user sub-icon-mg" aria-hidden="true"></i><span class="mini-sub-pro">List User</span></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="" aria-expanded="false"><i class="fa big-icon fa-cog icon-wrap"></i> <span class="mini-click-non">Akun Setting</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li>
                                    <a class="" href="./change-password.php" title="Ganti Password" ><i class="fa fa-lock sub-icon-mg" aria-hidden="true"></i><span class="mini-sub-pro">Ganti Password</span></a>
                                </li>
                            </ul>
                        </li>
                    <?php endif; ?>

                    </ul>
                </nav>

            </div>
        </nav>
    </div>
 