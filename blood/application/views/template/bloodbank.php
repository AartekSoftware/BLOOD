<!-- Body Section -->
<section>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="content">
                <h1 class="heading">Blood Bank Registration Form</h1>
                <?php if(!empty($success)){echo $success;} ?>
                <?php echo form_open('bloodbank', array('class' => 'registration')); ?>
                    <fieldset>
                        <div class="span6">
                            <label>Blood bank/Voluntary Organization name<span>*</span></label>
                            <input type="text" name="name" placeholder="Enter name..." required="required">
                            <em>&nbsp;</em>
                            <label>State<span>*</span></label>
                            <select id="state" name="state" required="required">
                                <option value="">---Select State---</option>
                                <?php foreach($state as $row) { ?>
                                <option value="<?php echo $row->state_id; ?>"><?php echo $row->state; ?></option>
                                <?php } ?>
                            </select>
                            <label>Registration type :</label>
                            <input type="radio" name="type" value="Blood Bank" /> Blood Bank<br>
                            <input type="radio" name="type" value="Voluntary Organization" /> Voluntary Organization<br>
                            <label>&nbsp;</label>
                        </div> <!-- /.span6 -->
                        <div class="span6">
                            <label>Phone/Mobile No<span>*</span></label>
                            <input type="text" name="contact" placeholder="Enter contact no..." required="required">
                            <em>Seperate multiple nos by commas.</em>
                            <label>City<span>*</span></label>                                
                            <select id="city" name="city" required="required">
                                <option value="">--Select City--</option>
                            </select>
                        </div> <!-- /.span6 -->
                        <div class="row-fluid">
                            <div class="span12">
                                <input type="submit" name="submit" value="Register Blood Bank" class="btn btn-danger" />
                                <?php echo anchor('findbloodbank', 'Search Blood Bank', array('class'=>'btn btn-success')); ?>
                            </div>
                        </div>
                    </fieldset>
                <?php echo form_close(); ?>
            </div> <!-- /.content -->
            
        </div> <!-- /.row-fluid -->
    </div> <!-- /.container-fluid -->
</section>
<!-- End of body section -->