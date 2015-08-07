<div id="page-wrapper">    
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Read Message:</h1>                
            </div>
        </div>
        <!-- /.row -->
        
        <div class="row">
            <div class="col-lg-12">                
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-fw fa-envelope"></i> Message Body</h3>
                    </div>
                    <div class="panel-body">                        
                        <table class="table">
                            <?php if(!empty($message)) { ?>
                            <tr>
                                <td style="width:15%">Name</td>
                                <td style="width:5%">:</td>
                                <td style="width:80%"><?php echo $message->name; ?></td>
                            </tr>
                            <tr>
                                <td>Subject</td>
                                <td>:</td>
                                <td><?php echo $message->subject; ?></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td><?php echo $message->email; ?></td>
                            </tr>
                            <tr>
                                <td>Contact No</td>
                                <td>:</td>
                                <td><?php echo $message->contact; ?></td>
                            </tr>
                            <tr>
                                <td>Message</td>
                                <td>:</td>
                                <td><?php echo $message->message; ?></td>
                            </tr>
                            <tr>
                                <td>Date Time</td>
                                <td>:</td>
                                <td><?php echo $message->date_time; ?></td>
                            </tr>
                            <?php } else { ?>
                            <tr>
                                <td colspan="3">!! Records Not Founds !!</td>
                            </tr>
                            <?php } ?>
                        </table>
                    </div> <!-- /.panel-body -->
                </div> <!-- /.panel -->
                <?php echo anchor('admin/message', 'Back', array('class'=>'btn btn-default')) ?>
            </div> <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->