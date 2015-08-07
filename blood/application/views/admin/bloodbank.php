<div id="page-wrapper">    
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">View All Blood Bank:</h1>                
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
                                    <th style="width:20%">Name</th>
                                    <th style="width:15%">Contact</th>
                                    <th style="width:20%">Type</th>
                                    <th style="width:15%">State</th>
                                    <th style="width:10%">City</th>
                                    <th style="width:10%">Date</th>
                                    <th style="width:7%">Action</th>
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
                                    <td><?php echo $row->contact; ?></td>
                                    <td><?php echo $row->type; ?></td>
                                    <td><?php echo $row->state; ?></td>
                                    <td><?php echo $row->city; ?></td>
                                    <td><?php echo date('d-m-Y', strtotime($row->date_time)); ?></td>
                                    <td>                                        
                                        <a href="javascript:if(confirm('Are you sure, you want to delete this records?')){location.href='<?php echo site_url('admin/bloodbank/delete/'.$row->id) ?>';}" title="Delete" class="remove"></a>
                                    </td>
                                </tr>
                                <?php $i++; } } else { ?>
                                <tr align="center">
                                    <td colspan="8">!! Records Not Founds !!</td>
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