<div id="page-wrapper">    
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Change User Password</h1>
            </div>
        </div>
        <!-- /.row -->
        
        <div class="row">
            <?php
            if(!empty($success)) echo $success;
            echo validation_errors();
            ?>
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-user"></i> Change Password</h3>
                    </div>
                    <div class="panel-body">
                        <?php echo form_open('admin/user/changepassword/'.$userId, array('role'=>'form')) ?>
                            <div class="form-group">
                                <label>Enter New Password</label>
                                <input type="password" name="pass1" class="form-control" placeholder="Enter new password ..." />
                                <input type="hidden" name="userId" value=<?php echo $userId; ?>" />
                            </div>
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" name="pass2" class="form-control" placeholder="Confirm password ..." />
                            </div>
                            <input type="submit" name="Submit" value="Change Password" class="btn btn-default" />
                            <input type="reset" name="reset" class="btn btn-default" value="Reset" />
                            <a href="<?php echo site_url('admin/user'); ?>" class="btn btn-default">Back</a>
                        <?php echo form_close(); ?>
                    </div> <!-- /.panel-body -->
                </div> <!-- panel -->
            </div> <!-- /.col-lg-6 -->
            
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->