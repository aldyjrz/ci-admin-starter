<nav class="navbar navbar-static-top">
	<!-- Sidebar toggle button-->
	<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

	<div class="navbar-custom-menu">
		<ul class="nav navbar-nav">
			<!-- Messages: style can be found in dropdown.less-->
			 
			<li class="dropdown notifications-menu">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
				<ul class="dropdown-menu">
					<li class="header">You have new notifications</li>
					<li>
						<!-- inner menu: contains the actual data -->
						<ul class="menu">
							<li>
								<a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 Pelanggan Baru
                    </a>
							</li>
							<li>
								<a href="#">
                      <i class="fa fa-check text-yellow"></i> 100 Transaksi Peminjaman
                    </a>
							</li>
							<li>
							 
						 
						</ul>
					</li>
					<li class="footer"><a href="#">CLOSE</a></li>
				</ul>
			</li>
			<!-- Tasks: style can be found in dropdown.less -->

			<!-- User Account: style can be found in dropdown.less -->
			<li class="dropdown user user-menu">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?= base_url('assets/uploads/images/member.png'); ?>" class="user-image">
                <span class="hidden-xs"><?= $userdata->first_name; ?> <?= $userdata->last_name; ?></span>
            </a>
				<ul class="dropdown-menu">
					<!-- User image -->
					<li class="user-header">
						<img src="<?= base_url('assets/uploads/images/admin.png'); ?>" class="img-circle">
						<p>
							<?= $userdata->email; ?>
							<small>Last login :  <?= $userdata->last_login; ?></small>
							<small>IP :  <?=
getenv('REMOTE_ADDR');?></small>

						</p>
					</li>
					<!-- Menu Footer-->
					<li class="user-footer">
						<div class="pull-left">
							<a href="<?php echo base_url() ?>auth/profile/<?php echo $this->session->userdata('id_user'); ?>" class="btn btn-default btn-flat"><i class="fa fa-user" aria-hidden="true"></i> Profil</a>
						</div>
						<div class="pull-right">
							<a href="<?php echo base_url() ?>auth/logout" class="btn btn-default btn-flat"><i class="fa fa-sign-out" aria-hidden="true"></i> Keluar</a>
						</div>
					</li>
				</ul>
			</li>
			<!-- Control Sidebar Toggle Button -->
		</ul>
	</div>
</nav>
