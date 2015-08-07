<!-- Footer -->
    <footer>
    	<div class="container-fluid">
        	<div class="row-fluid">
            	<div class="footer-content">                	
                    <div class="span7">
                    	<ul class="nav nav-pills">
                        	<li><?php echo anchor(base_url(), 'Home') ?></li>
                            <li><?php echo anchor('about', 'About') ?></li>
                            <li><?php echo anchor('privacy', 'Privacy Policy'); ?></li>
                            <li><?php echo anchor('terms', 'Terms of Services'); ?></li>
                            <li><?php echo anchor('press', 'Press') ?></li>
                        </ul>
                    </div>
                    <div class="span5">
                    	<ul class="social pull-right">
                        	<li><a href="#" class="fb">Facebook</a></li>
                            <li><a href="#" class="tw">twitter</a></li>
                            <li><a href="#" class="gp">Google+</a></li>
                            <li><a href="#" class="li">Lindin</a></li>
                            <li><a href="#" class="yt">YouTube</a></li>
                            <li><a href="#" class="pr">Pintrest</a></li>
                        </ul>
                    </div>
                </div>                
                <p class="text-center">Copyright &copy; 2014. All rights reserved.</p>
            </div> <!-- /.row-fluid -->
        </div> <!-- /.container-fluid -->
    </footer>
    <!-- End of footer -->
</div>
<!-- End of wrapper -->
	<!-- Javascript files -->
    <script type="text/javascript" src="<?php echo base_url('public_html/js/jquery-latest.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('public_html/js/jquery.bxslider.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('public_html/js/blood-script.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('public_html/js/blood-alert.js'); ?>"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        //Ajax For home page to getting state to city.
        $('select#findState').change(function(){
            $('#findCity').html('Loading...');
            var selectedState = $('#findState option:selected').val();
            var ajax = $.ajax({
                url: '<?php echo site_url('ajax/city') ?>',
                type: 'POST',
                data: { state_id : selectedState }
            });
            ajax.success(function(data){
                $('#findCity').html(data);
            })
            ajax.error(function(e){
                alert('Error for loading AJAX?');
            })
        });
        //Ajax for other pages to getting state to city.
        $('select#state').change(function(){
            $('#city').html('Loading...');
            var selectedState = $('#state option:selected').val();
            var ajax = $.ajax({
                url: '<?php echo site_url('ajax/city') ?>',
                type: 'POST',
                data: {state_id : selectedState}
            });
            ajax.success(function(data){
                $('#city').html(data);
            })
            ajax.error(function(e){
                alert('Error loading for AJAX?');
            });
        });
    });
    </script>
</body>
</html>