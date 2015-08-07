<!-- Body Section -->
<section>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="content">
                <h1 class="heading">Search Result:</h1>
                <p><strong>Your Search</strong> :  <strong>Blood Group :</strong> <?php echo $bloodGroup->blood_group; ?>   <strong>State :</strong> <?php echo $stateCity->state; ?>   <strong>City :</strong> <?php echo $stateCity->city; ?></p>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th>Name</th>                            
                            <th>Gender</th>
                            <th>DOB</th>                            
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>Weight</th>
                            <th>Last Donation</th>
                        </tr>
                    </thead>
                    <?php if(!empty($search)) { ?>
                    <tbody>
                        <?php $i=1; foreach($search as $row) { ?>
                        <tr>                            
                            <td><?php echo $i; ?></td>                            
                            <td><?php echo $row->name; ?></td>
                            <td><?php echo $row->gender; ?></td>
                            <td><?php if($row->dob != '0000-00-00') {
                                echo date('d-m-Y', strtotime($row->dob));
                            } else {
                                echo $row->dob;
                            }
                            ?></td>                                
                            <td><?php echo $row->mobile; ?></td>
                            <td><?php echo $row->email; ?></td>
                            <td><?php echo $row->weight; ?></td>
                            <td><?php if($row->last_donation != '0000-00-00') {
                                echo date('d-m-Y', strtotime($row->last_donation));
                            } else {
                                echo $row->last_donation;
                            }
                            ?></td>
                        <tr>
                        <?php $i++; } ?>
                    </tbody>
                    <?php } else { ?>
                    <tfoot>
                        <tr>
                            <td colspan="8"><p class="text-error" style="text-align:center">!! Result Not Found !!</p></td>
                        </tr>
                    </tfoot>
                    <?php } ?>
                </table>
			</div> <!-- /.content-->
		</div> <!-- /.row-fluid -->
    </div> <!-- /.container -->
</section>
<!-- End of body section -->