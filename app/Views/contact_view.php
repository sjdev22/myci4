
<?php

$page_session = \CodeIgniter\Config\Services::session();

?>

<?=$this->extend('layouts/main');?>

<?=$this->section('page');?>

<?=$this->include('layouts/aside');?>

<script>
	setTimeout(function(){
		$("#hidemsg").hide();
	},5000);
</script>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Contact Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Contact page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="">

        	<?php if($page_session->getTempdata('success')): ?>

        		<div id="hidemsg" class="alert alert-success"><?=$page_session->getTempdata('success');?></div>

        	<?php endif; ?>

        	<?php if($page_session->getTempdata('error')): ?>

        		<div id="hidemsg" class="alert alert-danger"><?=$page_session->getTempdata('error');?></div>

        	<?php endif; ?>


		      <!-- form start -->
		      <?=form_open()?>
		        
		          <div class="form-group">
		            <label for="exampleInputEmail1">Name</label>
		            <input type="text" class="form-control"  placeholder="Enter name" name="uname" value="<?=set_value('uname')?>">
		            <span class="text-danger"><?=display_error($validation,'uname')?></span>
		          </div>
		          <div class="form-group">
		            <label for="exampleInputEmail1">Email</label>
		            <input type="text" class="form-control"  placeholder="Enter email" name="email" value="<?=set_value('email')?>">
		            <span class="text-danger"><?=display_error($validation,'email')?></span>
		          </div>
		          <div class="form-group">
		            <label for="exampleInputEmail1">Mobile</label>
		            <input type="text" class="form-control"  placeholder="Enter mobile" name="mobile" value="<?=set_value('mobile')?>">
		            <span class="text-danger"><?=display_error($validation,'mobile')?></span>
		          </div>
		          <div class="form-group">
		            <label for="exampleInputEmail1">Message</label>
		            <textarea class="form-control" placeholder="Enter message..." name="message"><?=set_value('message')?></textarea>
		            <span class="text-danger"><?=display_error($validation,'message')?></span>
		          </div>
		        <div class="form-group">
		          <button type="submit" class="btn btn-primary">Submit</button>
		      	</div>
		        
		      <?=form_close()?>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?=$this->endSection();?>