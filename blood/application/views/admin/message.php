<div id="page-wrapper">    
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">View All Message:</h1>                
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
                                    <th style="width:15%">Name</th>
                                    <th style="width:15%">Subject</th>
                                    <th style="width:10%">Conatact</th>
                                    <th style="width:15%">Email</th>
                                    <th style="width:27%">Message</th>
                                    <th style="width:10%">Date</th>
                                    <th style="width:5%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if(!empty($message))
                                {
                                    $i=1;
                                    foreach($message as $row) {
                                ?>
                                <tr style="<?php if($row->status == 0){echo 'background-color: #FFECEC;';} ?>">
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo ucwords($row->name); ?></td>
                                    <td><?php echo $row->subject; ?></td>
                                    <td><?php echo $row->contact; ?></td>
                                    <td><?php echo $row->email; ?></td>
                                    <td><?php echo substr($row->message, 0, 100).'...'.anchor('admin/message/read/'.$row->id, 'Read more', array('class'=>'readmore')); ?></td>
                                    <td><?php echo date('d-m-Y', strtotime($row->date_time)); ?></td>
                                    <td>                                        
                                        <a href="javascript:if(confirm('Are you sure, you want to delete this records?')){location.href='<?php echo site_url('admin/message/delete/'.$row->id) ?>';}" title="Delete" class="remove"></a>
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