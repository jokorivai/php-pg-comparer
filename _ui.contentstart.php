<body class="no-skin">
		<?php include_once('_ui.topnav.php'); ?>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>
			<?php include_once('_ui.sidenav.php'); ?>
			

			
            <div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li><?php if (isset($page_name)) { echo $page_name; } ?></li>
							<li class="active"><?php if (isset($page_desc)) { echo $page_desc; } ?></li>
						</ul><!-- /.breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Cari ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- /.nav-search -->
					</div>

					<div class="page-content">
						<?php include_once('_ui.settings.php');?>

						<div class="page-header">
							<h1>
								<?php if (isset($page_name)) { echo $page_name; } ?>
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									<?php if (isset($page_desc)) { echo $page_desc; } ?>
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">