<!-- Body Section -->
<section>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="content">
                <h1 class="heading">Donor Login</h1>
                <br><br>
                <?php
                echo validation_errors();
                if(!empty($error)) {echo $error;}
				$attributes = array('class' => 'form-horizontal');
				echo form_open('login', $attributes);
                ?>
                    <div class="control-group">
                        <label class="control-label" for="inputEmail">Donor Login</label>
                        <div class="controls">
                        	<input type="text" id="inputEmail" name="login" placeholder="Login id">
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
			</div> <!-- /.content-->            
		</div> <!-- /.row-fluid -->
    </div> <!-- /.container -->
</section>
<!-- End of body section -->