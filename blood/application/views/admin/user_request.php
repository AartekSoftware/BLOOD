<div id="page-wrapper">    
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">View All Blood Request:</h1>                
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
                                    <th style="width:3%">SN</th>
                                    <th style="width:14%">Name</th>
                                    <th style="width:12%">Father Name</th>
                                    <th style="width:4%">Gender</th>
                                    <th style="width:10%">DOB</th>
                                    <th style="width:3%">BG</th>
                                    <th style="width:16%">Address</th>
                                    <th style="width:10%">Contact No</th>
                                    <th style="width:16%">Message</th>
                                    <th style="width:10%">Date</th>
                                    <th style="width:2%">#</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if(!empty($userList))
                                {
                                    $i=1;
                                    foreach($userList as $row) {
                                    $name = $row->first_name.' '.$row->last_name;
                                ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo ucwords($name); ?></td>
                                    <td><?php echo ucwords($row->father_name); ?></td>
                                    <td><?php echo ucwords($row->gender); ?></td>
                                    <td><?php 
                                        if($row->dob == '0000-00-00')
                                        {
                                            echo 'NULL';
                                        } else {
                                            echo date('d-m-Y', strtotime($row->dob));
                                        }                                        
                                    ?></td>                                    
                                    <td><?php echo $row->bg; ?></td>
                                    <td><?php echo $row->address.', City:'.$row->city_name.', State:'.$row->state_name; ?></td>
                                    <td><?php echo $row->contact; ?></td>
                                    <td><?php echo $row->message; ?></td>
                                    <td><?php echo date('d-m-Y', strtotime($row->date_time)); ?></td>
                                    <td>                                        
                                        <a href="javascript:if(confirm('Are you sure, you want to delete this records?')){location.href='<?php echo site_url('admin/request/delete/'.$row->id) ?>';}" title="Delete" class="remove"></a>
                                    </td>
                                </tr>
                                <?php $i++; } } else { ?>
                                <tr align="center">
                                    <td colspan="11">!! Records Not Founds !!</td>
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