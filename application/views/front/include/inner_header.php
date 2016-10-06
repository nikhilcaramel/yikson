	<!-- header start -->
		<section class="clearfix navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-11 col-lg-offset-1 col-md-12 col-sm-12 col-xs-12 mbl_padd">
					<div class="col-lg-2 col-xs-1 mbl_padd col-sm-1 col-md-2">
						<a href="<?php echo site_url('dashboard'); ?>" class="img"><img class="img-responsive" src="<?php echo base_url(); ?>assets/front/images/ico/logo_original.png" alt="logo" ></a>
					</div>
					<div class="col-lg-10 mbl_padd col-xs-11 col-sm-11 col-md-10">
						<ul class="menu_list">
							<li><a href="<?php echo site_url('all_images'); ?>" class="first images"></a></li>
							<li><a href="<?php echo site_url('all_videos'); ?>" class="video"></a></li>							
							<li><a href="<?php echo site_url('all_articals'); ?>" class="article"></a></li>
							<li><button type="button" data-toggle="modal" data-target="#myModal" class="addpost"></button></li>
							
							<li class="search_width hidden-xs">
								<form id="newpost_frm" method="get" action="<?php echo site_url('search_users'); ?>" >
									<div class="input-group">
										<input class="form-control pull-left form-custom" type="text" name="txtSearch" id="txtSearch" placeholder="Search..." style="border-width:1px;">
										<span class="input-group-btn">
											<button class="btn btn-search" title="Search" type="submit"><i class="fa fa-search"></i></button>
										</span>
									</div>
								</form>
							</li>
							<!----mobile search--->
							<li class="visible-xs hidden-sm hidden-lg hidden-md"><span  class="search" id="users_search" style="cursor:pointer;"></span></li>
							<li class="profil_name"><a href="<?php echo site_url('edit_profile'); ?>"><span class="hidden-xs name font_16 pad_tp3_px"><?php 
							
							if(strlen($this->session->userdata('full_name'))>6)
							{
								echo substr($this->session->userdata('full_name'),0,6)."..";
							}
							else
							{
								echo $this->session->userdata('full_name');
							}
							
							
							?> </span><img class="vertl_tp" src="<?php echo base_url(); ?>assets/front/images/page_2/profile_pic_left.png" alt="Profile Pic"></a></li>
							
							<li class="active "><a href="<?php echo site_url('dashboard'); ?>" class=""><span class=" name font_16 pad_tp3_px">Feed </span></a></li>
							
							<!----mobile Timeline--->
							<li><span   id="users_details" class="cursr"><img id='arrowRotate4' width="22px" style="margin-top: 6px" class="cursr" src='assets/images/page_2/users.png' data-swap='assets/images/page_2/users_act.png' /></span></li>
							
							
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!----mobile search--->
	<div class="mbl_search" id="users_vserc" style="display:none;">
		<div class="">
			<div class="input-group"><input class="form-control pull-left form-custom" type="text" placeholder="Search..." style="border-width:1px;">
				<span class="input-group-btn">
					<button class="btn btn-search" title="Search" type="button"><i class="fa fa-search"></i></button>
				</span>
			</div>
		</div>
	</div>
	<!-- users notifications -->
	<div class="users_notify" id="users_view" style="display:none;">
		<div>

			<!-- Nav tabs -->
			<ul class="nav nav-tabs tabs_a" role="tablist">
				<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab" style="padding-top: 8px">Friends</a></li>
				<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Notifications <span class="notify">3</span></a></li>
			</ul>

			<!-- Tab panes -->
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="home">
					<div class="row">
						<div class="col-lg-12 col-xs-12 col-sm-12 col-md-12">
							<div class="col-lg-6 col-xs-6 col-sm-6 col-md-6">
								<div class="font_12 ash"><img src="<?php echo base_url(); ?>assets/images/page_2/request.png"> User01</div>
							</div>
							<div class="col-lg-3 col-xs-3 col-md-3 col-md-3">
								<a class="btn pull-right btn-orange_small" href="#">Accept</a>
							</div>
							<div class="col-lg-3 col-xs-3 col-md-3 col-md-3">
								<a class="btn pull-right btn-orange_small" href="#">Decline</a>
							</div>
						</div>
						<div class="col-lg-12 col-xs-12 col-sm-12 col-md-12 mrg_tp5_px">
							<div class="col-lg-6 col-xs-6 col-sm-6 col-md-6">
								<div class="font_12 ash"><img src="<?php echo base_url(); ?>assets/images/page_2/request.png"> User01</div>
							</div>
							<div class="col-lg-3 col-xs-3 col-md-3 col-md-3">
								<a class="btn pull-right btn-orange_small" href="#">Accept</a>
							</div>
							<div class="col-lg-3 col-xs-3 col-md-3 col-md-3">
								<a class="btn pull-right btn-orange_small" href="#">Decline</a>
							</div>
						</div>
						<div class="col-lg-12 col-xs-12 col-sm-12 col-md-12 mrg_tp5_px">
							<div class="col-lg-6 col-xs-6 col-sm-6 col-md-6">
								<div class="font_12 ash"><img src="<?php echo base_url(); ?>assets/images/page_2/request.png"> User01</div>
							</div>
							<div class="col-lg-3 col-xs-3 col-md-3 col-md-3">
								<a class="btn pull-right btn-orange_small" href="#">Accept</a>
							</div>
							<div class="col-lg-3 col-xs-3 col-md-3 col-md-3">
								<a class="btn pull-right btn-orange_small" href="#">Decline</a>
							</div>
						</div>
						<div class="col-lg-12 col-xs-12 col-sm-12 col-md-12 mrg_tp5_px">
							<div class="col-lg-6 col-xs-6 col-sm-6 col-md-6">
								<div class="font_12 ash"><img src="<?php echo base_url(); ?>assets/images/page_2/request.png"> User01</div>
							</div>
							<div class="col-lg-3 col-xs-3 col-md-3 col-md-3">
								<a class="btn pull-right btn-orange_small" href="#">Accept</a>
							</div>
							<div class="col-lg-3 col-xs-3 col-md-3 col-md-3">
								<a class="btn pull-right btn-orange_small" href="#">Decline</a>
							</div>
						</div>
						<div class="col-lg-12 col-xs-12 col-sm-12 col-md-12 mrg_tp5_px">
							<div class="col-lg-6 col-xs-6 col-sm-6 col-md-6">
								<div class="font_12 ash"><img src="<?php echo base_url(); ?>assets/images/page_2/request.png">  User01</div>
							</div>
							<div class="col-lg-3 col-xs-3 col-md-3 col-md-3">
								<a class="btn pull-right btn-orange_small" href="#">Accept</a>
							</div>
							<div class="col-lg-3 col-xs-3 col-md-3 col-md-3">
								<a class="btn pull-right btn-orange_small" href="#">Decline</a>
							</div>
						</div>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane" id="profile">
					<div class="notificate">
						<p>User01 has accepted your friend request</p>
						<p>User01 has Liked your post</p>
						<p>User01 has commented your post</p>
						<p>User01 has accepted your friend request</p>
					</div>
				</div> 
			</div>

		</div>
	</div>
	<!-- header end -->