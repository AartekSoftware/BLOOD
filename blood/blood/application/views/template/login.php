<!-- Body content -->
<section>
	<div class="container">
    	<div class="row-fluid">
        	<div class="span8">
                <h3>Donor Login</h3>
                <br><br>
                <?php
				$attributes = array('class' => 'form-horizontal');
				echo form_open('login', $attributes);
                ?>
                    <div class="control-group">
                        <label class="control-label" for="inputEmail">Donor Login</label>
                        <div class="controls">
                        	<input type="text" id="inputEmail" name="donor" placeholder="Donor Login">
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="inputPassword">Password</label>
                        <div class="controls">
                        	<input type="password" name="password" id="inputPassword" placeholder="Password">
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <div class="controls">
                            <label class="checkbox">
                            <input type="checkbox"> Remember me
                            </label>
                            <input type="submit" name="submit" value="Login" class="btn btn-danger" />
                        </div>
                    </div>
                <?php echo form_close(); ?>

			</div> <!-- /.span8-->
            <div class="span4">
            	<?php $this->load->view($rightSide); ?>
            </div> <!-- /span4 -->
		</div> <!-- /.row-fluid -->
    </div> <!-- /.container -->
</section>
<!-- End of body section -->