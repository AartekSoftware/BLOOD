<!-- Body Section -->
<section>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="content">                
                <h1 class="heading">Contact Us</h1>
                <?php
                if(!empty($success)) echo $success;
                echo validation_errors();
                ?>
                <div class="span6">
                    <?php echo form_open('contact'); ?>
                        <fieldset>
                            <label>Name<span>*</span></label>
                            <input type="text" name="name" class="input-xlarge" placeholder="Enter your name..." required="required">
                            <label>Subject<span>*</span></label>
                            <input type="text" name="subject" class="input-xlarge" placeholder="Enter your subject..." required="required">
                            <label>Email<span>*</span></label>
                            <input type="text" name="email" class="input-xlarge" placeholder="Enter your email..." required="required">
                            <label>Contact No<span>*</span></label>
                            <input type="text" name="contact" class="input-xlarge" placeholder="Enter your contact..." required="required">
                            <label>Message<span>*</span></label>
                            <textarea name="message" rows="6" class="input-xlarge" required="required"></textarea>
                            <label>&nbsp;</label>
                            <input type="submit" name="submit" value="Submit" class="btn btn-danger" />
                        </fieldset>
                    <?php echo form_close(); ?>
                </div> <!-- /.span6 -->
                <div class="span5">
                    <br><br>
                    <address>
                        <strong>Twitter, Inc.</strong><br>
                        795 Folsom Ave, Suite 600<br>
                        San Francisco, CA 94107<br>
                        <abbr title="Phone">P:</abbr> (123) 456-7890<br>
                        <abbr title="Email">email:</abbr> bloodbank@gmail.com
                    </address>
                </div> <!-- /.span5 -->
                <div class="clearfix"></div>
			</div> <!-- /.content-->            
		</div> <!-- /.row-fluid -->
    </div> <!-- /.container -->
</section>
<!-- End of body section -->