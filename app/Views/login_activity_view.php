<?= $this->extend('layouts/main'); ?>

<?= $this->section('page_title'); ?>
<?=$page_title;?>
<?=$this->endSection();?>

<?= $this->section('page'); ?>

<?=$this->include('layouts/aside');?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard v2</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v2</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      	<div class="jumbotron">
      		<?php if($userdata->profile_pic != '') : ?>

      		<?php else: ?>
      			<img src="<?=base_url()?>/public/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image" height="80">
      		<?php endif; ?>
      		<h2>Welcome <?=ucfirst($userdata->username)?></h2>
      		<h4>Mobile: <?=$userdata->mobile?></h4>
      		<h4>Email : <?=$userdata->email?></h4>

      	</div>
        <div class="card card-outline card-primary">
          <div class="card-header">
            <h4>Login Activity</h4>
          </div>
          <div class="card-body">
            <?php if(count($login_info)>0) : ?>
              <table class="table">
                <thead>
                  <tr>
                    <th>Login Time</th>
                    <th>Logout Time</th>
                    <th>User Agent</th>
                    <th>IP Address</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($login_info as $info) : ?>
                    <tr>
                      <td><?=date('l dS M Y h:i:s a',strtotime($info->login_time))?></td>
                      <td><?=date('l dS M Y h:i:s a',strtotime($info->logout_time))?></td>
                      <td><?=$info->agent?></td>
                      <td><?=$info->ip?></td>
                    </tr>
                  <?php endforeach;?>
                </tbody>
              </table>
            <?php else : ?>
              <h5>Sorry! No Information found.</h5>
            <?php endif;?>
          </div>
        </div>
	  </div>
	</section>
</div>

<?= $this->endSection(); ?>