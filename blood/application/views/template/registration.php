<!-- Body Section -->
<section>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="content">
                <h1 class="heading">Donor Registration</h1>
                <?php if(!empty($success)){echo $success;} ?>
                <?php echo form_open('registration'); ?>
                    <fieldset>
                        <div class="span6">
                            <label>Name<span>*</span></label>
                            <input type="text" name="name" placeholder="Enter your name..." required="required">
                            <label>Password<span>*</span></label>
                            <input type="password" name="password" placeholder="password" required="required">
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
                            <em>Date of birth will not be shown to others. It's only for calculating your age.</em>
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
                            <label>Mobile<span>*</span></label>
                            <input type="text" name="mobile" placeholder="Enter your mobile no..." required="required">
                            <label>Residence</label>
                            <input type="text" name="residence" placeholder="Enter your residence no...">
                            <label>Office</label>
                            <input type="text" name="office" placeholder="Enter your office no...">
                            <p>Note: Please provide at least one contact number. But it is recommended to provide as many contact numbers as possible because it will be easier for the recipients to contact you in times of emergency. Remember a life may be depending on you!</p>
                            <label class="checkbox">
                                <input type="checkbox" name="sms" value="Yes"> SMS Alert
                            </label>
                            <em>You will receive an alert on your mobile when there is a request for your blood type within your city.</em>
                            <label>State<span>*</span></label>
                            <select id="state" name="state" required="required">
                                <option value="">Select State</option>
                                <?php foreach($state as $row) { ?>
                                <option value="<?php echo $row->state_id; ?>"><?php echo $row->state; ?></option>
                                <?php } ?>
                            </select>
                            <label>City<span>*</span></label>
                            <select id="city" name="city" required="required">
                                <option value="">--Select City--</option>
                            </select>
                            <label>How often have you donated blood in the past?</label>
                            <select name="how_often">
                                <option value="yet to donate">Yet to donate</option>
                                <option value="regular donor">Regular donor</option>
                                <option value="on need basis">On need basis</option>
                            </select>
                        </div> <!-- /.span6 -->
                        <div class="span6">
                            <label>User Name<span>*</span></label>
                            <input type="text" name="username" placeholder="Enter user name...">
                            <label>Confirm Password<span>*</span></label>
                            <input type="password" name="confirm_pass" placeholder="confirm password..." required="required">
                            <label>Gender<span>*</span></label>
                            <input type="radio" name="gender" value="male" /> Male
                            <input type="radio" name="gender" value="female" /> Female
                            <label>&nbsp;</label>
                            <label>Weight<span>*</span></label>
                            <input type="text" name="weight" placeholder="Enter your weight..." required="required" />
                            <em>(should be above 50 kg)</em>
                            <label>Email<span>*</span></label>
                            <input type="email" name="email" placeholder="Enter your email..." required="required" />
                            <em>We recommend you enter the e-mail ID, which will help us get in touch with you in case you are not reachable by phone. It will be greater help if you could provide us your personal e-mail ID besides your corporate e-mail ID. You can always be reached to save a life!</em>
                            <label>Date of last blood donation :</label>
                            <select name="dday" class="input-mini">
                                <option value="">DD</option>
                                <?php for($i=1;$i<=31;$i++) { ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php } ?>
                            </select>
                            <select name="dmonth" class="input-mini mm">
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
                            <select name="dyear" class="input-small yy">
                                <option value="">YYYY</option>
                                <?php for($i=1950;$i<=date('Y');$i++) { ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php } ?>
                            </select>
                        </div> <!-- /.span6 -->
                        <div class="row-fluid">
                        <div class="span12">
                            <h5>Please check your eligibility to donate blood :</h5>
                            <ul>
                                <li>My hemoglobin is not less than 12.5 grams</li>
                                <li>I am free from acute respiratory diseases and skin diseases</li>
                                <li>I do not carry any disease transmissible by blood transfusion</li>
                                <li>I am not under medication for Malaria / Tuberculosis / Diabetes / Fits / Convulsions</li>
                            </ul>
                            <label><strong>I have not suffered from #</strong></label>
                            <label class="checkbox">
                                <input type="checkbox" name="suffered[]" value="hepatitis" /> Hepatitis B, C<br>
                                <input type="checkbox" name="suffered[]" value="aids" /> AIDS<br>
                                <input type="checkbox" name="suffered[]" value="cancer" /> Cancer<br>
                                <input type="checkbox" name="suffered[]" value="kindney disease" /> Kidney disease<br>
                                <input type="checkbox" name="suffered[]" value="heart disease" /> Heart disease
                            </label>
                            <label>&nbsp;</label>
                            <input type="submit" name="submit" value="Submit" class="btn btn-danger" />
                        </div>
                        </div>
                    </fieldset>
                <?php echo form_close(); ?>
                <div class="clearfix"></div>
            </div>
        </div> <!-- /.row-fluid -->
    </div> <!-- /.container-fluid -->
</section>
<!-- /.End of body section -->