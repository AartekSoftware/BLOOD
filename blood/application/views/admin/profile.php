<div id="page-wrapper">    
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Profile</h1>
            </div>
        </div>
        <!-- /.row -->
        
        <div class="row">
            <?php
            if(!empty($row))
            {
                if(!empty($success)) echo $success;
                $month = array('1'=>'Jan', '2'=>'Feb', '3'=>'Mar', '4'=>'Apr', '5'=>'May', '6'=>'Jun', '7'=>'Jul', '8'=>'Aug', '9'=>'Sep', '10'=>'Oct', '11'=>'Nov', '12'=>'Dec');
            ?>
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-user"></i> Profile</h3>
                    </div>
                    <div class="panel-body">
                        <?php echo form_open('admin/dashboard/profile', array('role'=>'form')) ?>
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" value="<?php echo $row->name; ?>" class="form-control" placeholder="Enter name ..." />
                            </div>
                            <div class="form-group">
                                <label>User Name</label>
                                <input type="text" name="username" value="<?php echo $row->user_name; ?>" class="form-control" placeholder="Enter user name ..." readonly="readonly" />
                            </div>
                            <div class="form-group">
                                <label style="float:left;width:100%">Date of Birth</label>
                                <select name="day" class="form-control dob" required="required">
                                    <option value="">DD</option>
                                    <?php for($i=1;$i<=31;$i++) { ?>
                                    <option value="<?php echo $i; ?>" <?php if($i == date('d', strtotime($row->dob))){echo 'selected';} ?>><?php echo $i; ?></option>
                                    <?php } ?>
                                </select>
                                <select name="month" class="form-control dob" required="required">
                                    <option value="">MM</option>
                                    <?php foreach($month as $key => $val) { ?>
                                    <option value="<?php echo $key; ?>" <?php if($key == date('m', strtotime($row->dob))){echo 'selected';} ?>><?php echo $val; ?></option>
                                    <?php } ?>
                                </select>
                                <select name="year" class="form-control dob" required="required">
                                    <option value="">YYYY</option>
                                    <?php for($i=1950;$i<=date('Y');$i++) { ?>
                                    <option value="<?php echo $i; ?>" <?php if($i == date('Y', strtotime($row->dob))){echo 'selected';} ?>><?php echo $i; ?></option>
                                    <?php } ?>
                                </select>
                                <div style="clear:both"></div>
                            </div>
                            <div class="form-group">
                                <label>Gender</label>
                                <input type="radio" name="gender" value="male" <?php if($row->gender == 'male'){echo 'checked';} ?> /> Male
                                <input type="radio" name="gender" value="female" <?php if($row->gender == 'female'){echo 'checked';} ?> /> Female
                            </div>
                            <div class="form-group">
                                <label>Blood Group</label>
                                <select name="blood_group" class="form-control" required="required">
                                    <option value="">Select </option>
                                    <?php foreach($blood as $rows) { ?>
                                    <option value="<?php echo $rows->id; ?>" <?php if($rows->id == $row->blood_group){echo 'selected';} ?>><?php echo $rows->blood_group; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Weight</label>
                                <input type="text" name="weight" value="<?php echo $row->weight; ?>" class="form-control" placeholder="Enter weight ..." />
                            </div>
                            <div class="form-group">
                                <label>Mobile No</label>
                                <input type="text" name="mobile" value="<?php echo $row->mobile; ?>" class="form-control" placeholder="Enter contact ..." />                                
                            </div>
                            <div class="form-group">
                                <label>Residence No</label>
                                <input type="text" name="residence" value="<?php echo $row->residence; ?>" class="form-control" placeholder="Enter contact ..." />                                
                            </div>
                            <div class="form-group">
                                <label>Office No</label>
                                <input type="text" name="Office" value="<?php echo $row->office; ?>" class="form-control" placeholder="Enter contact ..." />                                
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" value="<?php echo $row->email; ?>" class="form-control" placeholder="Enter email ..." />
                            </div>
                            <input type="submit" name="Submit" value="Update" class="btn btn-default" />
                            <a href="<?php echo site_url('admin/dashboard'); ?>" class="btn btn-default">Back</a>
                        <?php echo form_close(); ?>
                    </div> <!-- /.panel-body -->
                </div> <!-- panel -->
            </div> <!-- /.col-lg-6 -->
            <?php } else { ?>
                <p>!! Records Not Founds !!</p>
            <?php } ?>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->