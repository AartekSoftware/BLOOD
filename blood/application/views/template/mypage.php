<!-- Body Section -->
<section>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="content">
                <h1 class="heading">Welcome user</h1>
                <br><br>
                <h1 style="text-align:center">
                    Welcome 
                <?php                
                echo $this->session->userdata('user_name');
				?>
                </h1>
                <br><br>
			</div> <!-- /.content-->            
		</div> <!-- /.row-fluid -->
    </div> <!-- /.container -->
</section>
<!-- End of body section -->