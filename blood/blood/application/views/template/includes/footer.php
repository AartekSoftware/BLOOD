    <!-- Footer Here -->
    <footer>
    	<div class="container">
        	<div class="row-fluid">
            	<div class="span8">
                	<ul class="nav nav-pills">
                    	<li class="<?php if($this->uri->segment(1)=='about'){echo 'active';} ?>"><?php echo anchor('about','About'); ?></li>
                        <li class="<?php if($this->uri->segment(1)=='privacy'){echo 'active';} ?>"><?php echo anchor('privacy','Privacy Policy'); ?></li>
                        <li class="<?php if($this->uri->segment(1)=='terms'){echo 'active';} ?>"><?php echo anchor('terms','Terms of Service'); ?></li>
                        <li class="<?php if($this->uri->segment(1)=='press'){echo 'active';} ?>"><?php echo anchor('press','Press'); ?></li>
                    </ul>
                </div> <!-- /.span8 -->
                <div class="span4">
                	<div class="social">
                        <ul>
                            <li><a href="" class="fb" title="Facebook">Facebook</a></li>
                            <li><a href="" class="tw" title="Twitter">Twitter</a></li>
                        </ul>
                    </div>
                </div> <!-- /.span8 -->
            </div> <!-- /.row-fluid -->
        </div> <!-- /.container -->
    </footer>
    <!-- End of footer Here -->
</div>
<!-- End of wrapper Here -->
	<!-- Javscript files -->
    <script type="text/javascript" src="<?php echo base_url('public_html/js'); ?>/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url('public_html/js'); ?>/blood-carousel.js"></script>
    <script type="text/javascript" src="<?php echo base_url('public_html/js'); ?>/blood-script.js"></script>
    <script type="text/javascript" src="<?php echo base_url('public_html/js'); ?>/blood-alert.js"></script>
    <script type="text/javascript">    
    $(document).ready(function(){
        //AJAX script get city list for registration page.
        $('select#state').change(function(){
            var selectedState = $('#state option:selected').val();
            $('#response').html('Loading...');
            var ajax = $.ajax({
                type: 'POST',
                url: '<?php echo site_url(); ?>/ajax/city',
                data: {state_id: selectedState},
            });
            ajax.success(function(data){
                $('#response').html(data);
            });
            ajax.error(function(data){
                alert('Error on loading AJAX Document!');
            });
        });
        
        //AJAX script get city list for right-side page.
        $('select#findState').change(function(){
            var selectedState = $('#findState option:selected').val();
            $('#findCity').html('Loading...');
            var ajax = $.ajax({
                type: 'POST',
                url: '<?php echo site_url(); ?>/ajax/city',
                data: {state_id: selectedState},
            });
            ajax.success(function(data){
                $('#findCity').html(data);
            });
            ajax.error(function(data){
                alert('Error on loading AJAX Document!');
            });
        });
    });
    </script>
</body>
</html>