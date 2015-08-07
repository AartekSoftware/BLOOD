<!-- Body content -->
<section>
    <div class="slider">
        <div class="container">
            <div id="myCarousel" class="carousel slide">
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                  <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item">
                    <img src="<?php echo base_url('public_html/img'); ?>/banner1.png" alt="banner images">
                    <div class="carousel-caption">
                      <h4>Are you ready to save a life?</h4>
                      <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. <input type="button" name="button" value="Register Here" class="btn btn-large btn-danger" />
                    </div>
                  </div>
                  <div class="item active">
                    <img src="<?php echo base_url('public_html/img'); ?>/banner2.png" alt="banner images">
                    <div class="carousel-caption">
                      <h4>Are you ready to save a life?</h4>
                      <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. <input type="button" name="button" value="Register Here" class="btn btn-large btn-danger" />
                    </div>
                  </div>
                  <div class="item">
                    <img src="<?php echo base_url('public_html/img'); ?>/banner3.png" alt="banner images">
                    <div class="carousel-caption">
                      <h4>Are you ready to save a life?</h4>
                      <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. <input type="button" name="button" value="Register Here" class="btn btn-large btn-danger" />
                      </p>
                    </div>
                  </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
          </div>
        </div> <!-- /.container -->
    </div> <!-- /.slider -->
    
    <div class="search-box">
        <div class="container">
            <div class="find-donor">
                <h3>Find Donor </h3>
            </div>
            <div class="search-form">
                <?php	
                $attributes = array('class' => 'form-inline');
                echo form_open('search', $attributes);
                ?>                
                    <select id="findState" name="state" required="required">
                        <option value="">Select State</option>
                        <?php foreach($state as $row) { ?>
                        <option value="<?php echo $row->state_id; ?>"><?php echo $row->state; ?></option>
                        <?php } ?>
                    </select>
                    <select id="findCity" name="city">
                        <option value="">Select City</option>
                    </select>                 
                    <select name="group">
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
                    <input type="submit" name="submit" value="Search" class="btn btn-danger" />
                <?php echo form_close(); ?>
            </div>                
        </div> <!-- /.container -->
    </div> <!-- /.search-box -->
    
    <div class="container">
        <div class="row-fluid">
            <div class="span4">
                <ul class="media-list">
                    <li class="media">                        
                        <div class="media-body">
                            <h4 class="media-heading">Media heading</h4>
                            <img src="<?php echo base_url('public_html/img'); ?>/heart.png" alt="image" height="64" width="64"class="media-object pull-left" data-src="holder.js/64x64" />
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <p><a href="" class="btn btn-danger">Read more ...</a></p>
                        </div>
                    </li>
                </ul>
            </div> <!-- /.span4 -->
            <div class="span4">
                <ul class="media-list">
                    <li class="media">                        
                        <div class="media-body">
                            <h4 class="media-heading">Media heading</h4>
                            <img src="<?php echo base_url('public_html/img'); ?>/heart.png" alt="image" height="64" width="64" class="media-object pull-left" data-src="holder.js/64x64" />
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <p><a href="" class="btn btn-danger">Read more ...</a></p>
                        </div>
                    </li>
                </ul>
            </div> <!-- /.span4 -->
            <div class="span4">
                <ul class="media-list">
                    <li class="media">                        
                        <div class="media-body">
                            <h4 class="media-heading">Media heading</h4>
                            <img src="<?php echo base_url('public_html/img'); ?>/heart.png" alt="image" height="64" width="64" class="media-object pull-left" data-src="holder.js/64x64" />
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <p><a href="" class="btn btn-danger">Read more ...</a></p>
                        </div>
                    </li>
                </ul>
            </div> <!-- /.span4 -->
        </div> <!-- /.row-fluid -->
    </div> <!-- /.container -->
    
    <!-- scrollup icon -->
    <a href="#" class="scrollup">Back to top</a>
    <!-- /.scrollup icon -->
</section>
<!-- End of body content -->