<div id="page-wrapper">    
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">View All User</h1>                
            </div>
        </div>
        <!-- /.row -->
        
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-user"></i> User List</h3>
                    </div>
                    <div class="panel-body">                        
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Name</th>
                                    <th>Gender</th>
                                    <th>DOB</th>
                                    <th>BG</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>State</th>
                                    <th>City</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if(!empty($userList))
                                {
                                    $i=1;
                                    foreach($userList as $row) {
                                ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo ucwords($row->name); ?></td>
                                    <td><?php echo ucwords($row->gender); ?></td>
                                    <td><?php 
                                        if($row->dob == '0000-00-00')
                                        {
                                            echo 'NULL';
                                        } else {
                                            echo date('d-M-Y', strtotime($row->dob));
                                        }                                        
                                    ?></td>
                                    <td><?php echo $row->bg; ?></td>
                                    <td><?php echo $row->email; ?></td>
                                    <td><?php echo $row->mobile; ?></td>
                                    <td><?php echo $row->state_name; ?></td>
                                    <td><?php echo $row->city_name; ?></td>
                                    <td>
                                        <a href="#"><i class="fa fa-remove"></i></a>&nbsp;
                                        <a href="#"><i class="fa fa-remove"></i></a>&nbsp;
                                        <a href="#"><i class="fa fa-remove"></i></a>
                                    </td>
                                </tr>
                                <?php $i++; } } else { ?>
                                <tr>
                                    <td colspan="10"> !!Records Not Founds!! </td>                                    
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div> <!-- /.panel-body -->
                </div> <!-- /.panel -->
            </div> <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->