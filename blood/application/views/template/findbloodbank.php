<!-- Body Section -->
<section>
    <div class="container-fluid">
        <div class="row-fluid">            
            <div  class="content">
                <h1 class="heading">Search Blood Bank</h1>
                <?php echo form_open('findbloodbank', array('class' => 'registration')); ?>
                    <fieldset>
                        <div class="span4">
                            <label>State<span>*</span></label>
                            <select id="state" name="state" required="required">
                                <option value="">---Select State---</option>
                                <?php foreach($state as $row) { ?>
                                <option value="<?php echo $row->state_id; ?>"><?php echo $row->state; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="span4">
                            <label>City<span>*</span></label>                                
                            <select id="city" name="city" required="required">
                                <option value="">--Select City--</option>
                            </select>
                        </div>
                        <div class="">
                            <label>&nbsp;</label>
                            <input type="submit" name="submit" value="Search Blood Bank" class="btn btn-danger" />
                        </div>
                    </fieldset>
                <?php echo form_close(); ?>                
                <table class="table">
                    <thead>
                        <tr>
                            <th style="width:5%">SN</th>
                            <th style="width:25%">Name</th>
                            <th style="width:15%">Phone</th>
                            <th style="width:20%">State</th>
                            <th style="width:15%">City</th>
                            <th style="width:20%">Type</th>
                        </tr>
                    </thead>
                    <?php if(!empty($bloodbank)) { ?>
                    <tbody>
                        <?php $i=1; foreach($bloodbank as $row) { ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $row->name; ?></td>
                            <td><?php echo $row->contact; ?></td>
                            <td><?php echo $row->state; ?></td>
                            <td><?php echo $row->city; ?></td>
                            <td><?php echo $row->type; ?></td>
                        </tr>
                        <?php $i++; } ?>
                    </tbody>
                    <?php } else { ?>
                    <tfoot>
                        <tr align="center">
                            <td colspan="6">!! Records Not Founds !!</td>
                        </tr>
                    </tfoot>
                    <?php } ?>
                </table>
            </div> <!-- /.content -->
        </div> <!-- /.row-fluid -->
    </div> <!-- /.container-fluid -->
</section>
<!-- End of body section -->