<!-- Body Section -->
<section>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="content">
                <h1 class="heading">Request For Blood</h1>
                <?php echo validation_errors(); ?>
                <?php if(!empty($success)){echo $success;} ?>
                <?php echo form_open('request', array('class' => 'registration')); ?>
                    <fieldset>
                        <div class="span6">
                            <label>First Name<span>*</span></label>
                            <input type="text" name="fname" placeholder="Enter first name..." required="required">
                            <label>Father Name<span>*</span></label>
                            <input type="text" name="fathername" placeholder="Enter father name..." required="required">
                            <label>Date of Birth<span>*</span></label>
                            <select name="day" class="input-mini" required="required">
                                <option value="">DD</option>
                                <?php for($i=1;$i<=31;$i++) { ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php } ?>
                            </select>
                            <select name="month" class="input-mini mm" required="required">
                                <option value="">MM</option>
                                <option value="1">Jan</option>
                                <option value="2">Feb</option>
                                <option value="3">Mar</option>
                                <option value="4">Apr</option>
                                <option value="5">May</option>
                                <option value="6">Jun</option>
                                <option value="7">Jul</option>
                                <option value="8">Aug</option>
                                <option value="9">Sep</option>
                                <option value="10">Oct</option>
                                <option value="11">Nov</option>
                                <option value="12">Dec</option>
                            </select>
                            <select name="year" class="input-small yy" required="required">
                                <option value="">YYYY</option>
                                <?php for($i=1950;$i<=date('Y');$i++) { ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php } ?>
                            </select>                                
                            <label>Gender<span>*</span></label>
                            <input type="radio" name="gender" value="male" /> Male
                            <input type="radio" name="gender" value="female" /> Female
                            <label>&nbsp;</label>
                            <label>State<span>*</span></label>
                            <select id="state" name="state" required="required">
                                <option value="">---Select State---</option>
                                <?php foreach($state as $row) { ?>
                                <option value="<?php echo $row->state_id; ?>"><?php echo $row->state; ?></option>
                                <?php } ?>
                            </select>
                            <label>Phone/Mobile No<span>*</span></label>
                            <input type="text" name="contact" placeholder="Enter contact no...">
                            <em>Seperate multiple nos by commas.</em>
                            <label>&nbsp;</label>
                        </div> <!-- /.span6 -->
                        <div class="span6">
                            <label>Last name</label>
                            <input type="text" name="lname" placeholder="Enter last name..." required="required">
                            <label>Mother Name<span>*<span></label>
                            <input type="text" name="mothername" placeholder="Enter mother name..." required="required">
                            <label>Blood Group<span>*</span></label>
                            <select name="blood_group" required="required">
                                <option value="">Select </option>
                                <option value="1"> A1+ </option>
                                <option value="2"> A1- </option>
                                <option value="3"> A2+ </option>
                                <option value="4"> A2- </option>
                                <option value="5"> B+ </option>
                                <option value="6"> B- </option>
                                <option value="7"> A1B+ </option>
                                <option value="8"> A1B- </option>
                                <option value="9"> A2B+ </option>
                                <option value="10"> A2B- </option>
                                <option value="11"> AB+ </option>
                                <option value="12"> AB- </option>
                                <option value="13"> O+ </option>
                                <option value="14"> O- </option>
                                <option value="15"> A+ </option>
                                <option value="16"> A- </option>
                            </select>                                
                            <label>Address<span>*</span></label>
                            <input type="text" name="address" placeholder="Enter address..." required="required">
                            <label>City<span>*</span></label>                                
                            <select id="city" name="city" required="required">
                                <option value="">--Select City--</option>
                            </select>
                            <label>Message</label>
                            <textarea name="message" placeholder="Enter your message..."></textarea>
                        </div> <!-- /.span6 -->
                        <div class="row-fluid">
                        <div class="span12">
                            <input type="submit" name="submit" value="Request" class="btn btn-danger" />
                        </div>
                        </div>
                    </fieldset>
                <?php echo form_close(); ?>
            </div> <!-- /.content -->			
		</div> <!-- /.row-fluid -->
    </div> <!-- /.container -->
</section>
<!-- End of body section -->