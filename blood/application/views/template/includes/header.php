<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bloold Bank</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('public_html/css/style.css'); ?>" media="all" />
</head>
<body>
<!-- wrapper -->
<div class="wrapper">
	<!-- Header -->
    <header>
        <div class="container-fluid">
        	<div class="row-fluid">
            	<div class="span3">
                	<div class="logo">
                        <a href="<?php echo base_url(); ?>" title="Blood Bank">
                            <img src="<?php echo base_url('public_html/images/logo.png'); ?>" alt="Company Logo" />
                        </a>
                    </div>
                </div>
                <div class="span9">
                	<div class="top-menu">                        
                    	<ul class="nav nav-pills pull-right">
                            <?php
                            if($this->session->userdata('user_id') == '') {
                            ?>
                            <li <?php if($this->uri->segment(1)=='login'){echo 'class="active"';} ?>><?php echo anchor('login', 'Donor Login'); ?></li>
                            <?php } else { ?>
                            <li class="active"><?php echo anchor('mypage/logout', 'Welcome Mr. '.$this->session->userdata('user_name').' Logout', array('title'=>'Click here for Logout!')); ?></li>
                            <?php } ?>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="social-icon">
                    	<ul class="social pull-right">
                        	<li><a href="#" class="fb">Facebook</a></li>
                            <li><a href="#" class="tw">twitter</a></li>
                            <li><a href="#" class="gp">Google+</a></li>
                            <li><a href="#" class="li">Lindin</a></li>
                            <li><a href="#" class="yt">YouTube</a></li>
                            <li><a href="#" class="pr">Pintrest</a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>                    
                </div>
            </div> <!-- /.row-fluid -->
            <div class="row-fluid">
            	<div class="span12">
                	<div id="mainemenu">
                        <ul>
                            <li <?php if($this->uri->segment(1)=='registration'){echo 'class="active"';} ?>><?php echo anchor('registration', 'Register Donor'); ?></li>
                            <li <?php if($this->uri->segment(1)=='bloodbank'){echo 'class="active"';} ?>><?php echo anchor('bloodbank', 'Register A Blood Bank'); ?></li>
                            <li <?php if($this->uri->segment(1)=='request'){echo 'class="active"';} ?>><?php echo anchor('request', 'request'); ?></li>
                            <li <?php if($this->uri->segment(1)=='whydonote'){echo 'class="active"';} ?>><?php echo anchor('whydonote', 'Why Donote'); ?></li>
                            <li <?php if($this->uri->segment(1)=='whoneed'){echo 'class="active"';} ?>><?php echo anchor('whoneed', 'Who Need Blood'); ?></li>
                            <li <?php if($this->uri->segment(1)=='contact'){echo 'class="active"';} ?>><?php echo anchor('contact', 'Contact'); ?></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div> <!-- /.row-fluid -->
            <div class="row-fluid">
            	<div class="banner">
                    <div class="span3">
                        <div class="search">
                            <?php	
                            $attributes = array('class' => 'find-form');
                            echo form_open('search', $attributes);
                            ?>
                                <fieldset>
                                    <legend>Find Donor</legend>
                                    <p>
                                        <select id="findState" name="state" required="required">
                                            <option value="">Select State</option>
                                            <?php foreach($state as $row) { ?>
                                            <option value="<?php echo $row->state_id; ?>"><?php echo $row->state; ?></option>
                                            <?php } ?>
                                        </select>
                                    </p>
                                    <p>
                                        <select id="findCity" name="city">
                                            <option value="">Select City</option>
                                        </select>
                                    </p>
                                    <p>
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
                                    </p>
                                    <p>
                                        <input type="submit" name="submit" value="Find Donor" class="btn btn-danger" />
                                    </p>            
                                </fieldset>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                    <div class="span9">
                    	<ul class="bxslider">
                        	<li><img src="<?php echo base_url('public_html/images/banner1.png') ?>" alt="Banner Images" width="735" height="255" /></li>
                            <li><img src="<?php echo base_url('public_html/images/banner2.png') ?>" alt="Banner Images"  /></li>
                            <li><img src="<?php echo base_url('public_html/images/banner3.png') ?>" alt="Banner Images" /></li>
                            <li><img src="<?php echo base_url('public_html/images/banner4.png') ?>" alt="Banner Images" /></li>
                        </ul>                    	
                    </div>                    
                    <div class="clearfix"></div>
                </div> <!-- /.banner -->
            </div> <!-- /.row-fluid -->
        </div> <!-- /.container-fluid -->
    </header>
    <!-- /.End of header -->