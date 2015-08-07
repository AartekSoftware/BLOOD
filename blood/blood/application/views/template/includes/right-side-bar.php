<div class="donor">    
    <?php	
	$attributes = array('class' => 'find-form');
    echo form_open('search', $attributes);
	?>
        <fieldset>
            <legend>Find Donor</legend>
            <label>State</label>
            <select id="findState" name="state" required="required">
                <option value="">Select State</option>
                <?php foreach($state as $row) { ?>
                <option value="<?php echo $row->state_id; ?>"><?php echo $row->state; ?></option>
                <?php } ?>
            </select>
            <label>City</label>
            <select id="findCity" name="city">
                <option value="">Select City</option>
            </select>            
            <label>Blood Group</label>
            <select name="group" required="required">
                <option value="">Select Group</option>
                <option value="1"> A1+ </option>
                <option value="2"> A1- </option>
                <option value="3"> A2+ </option>
                <option value="4"> A2- </option>
                <option value="5"> B+ </option>
                <option value="6"> B- </option>
                <option value="7"> A1B+ </option>
                <option value="8"> A1B- </option>
                <option value="9"> A2B+ </option>
                <option value="10"> A2B- </option>
                <option value="11"> AB+ </option>
                <option value="12"> AB- </option>
                <option value="13"> O+ </option>
                <option value="14"> O- </option>
                <option value="15"> A+ </option>
                <option value="16"> A- </option>
            </select>
            <label>&nbsp;</label>
            <input type="submit" name="submit" value="Find Donor" class="btn btn-danger" />
        </fieldset>
    <?php echo form_close(); ?>
</div> <!-- /.donor -->
