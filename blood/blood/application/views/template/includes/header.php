<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title; ?></title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('public_html/css'); ?>/style.css" media="all" />
</head>
<body>
<!-- Start wrapper Here -->
<div class="wrapper">
	<!-- Header -->
    <header>
    	<div class="head-top">
            <div class="container">
                <div class="row-fluid">
                    <div class="span2">
                        <div class="logo">
                            <a href="<?php echo base_url(); ?>" title="Donate Blood"><img src="<?php echo base_url('public_html/img'); ?>/logo.png" alt="Company Logo" /></a>
                        </div>
                    </div>
                    <div id="menu" class="span10">
                        <ul class="nav nav-pills">
                            <li class="<?php if($this->uri->segment(1)=='bloodbank'){echo 'active';} ?>"><?php echo anchor('bloodbank','Register a Blood bank'); ?></li>
                            <li class="<?php if($this->uri->segment(1)=='registration'){echo 'active';} ?>"><?php echo anchor('registration','Register Free'); ?></li>
                            <li class="<?php if($this->uri->segment(1)=='request'){echo 'active';} ?>"><?php echo anchor('request','Request'); ?></li>
                        	<li class="<?php if($this->uri->segment(1)=='whydonote'){echo 'active';} ?>"><?php echo anchor('whydonote','Why Donote'); ?></li>
                            <li class="<?php if($this->uri->segment(1)=='whoneed'){echo 'active';} ?>"><?php echo anchor('whoneed', 'Who Need Blood'); ?></li>
                            <li class="<?php if($this->uri->segment(1)=='contact'){echo 'active';} ?>"><?php echo anchor('contact', 'Contact Us'); ?></li>
                            <li class="<?php if($this->uri->segment(1)=='login'){echo 'active';} ?>"><?php echo anchor('login', 'Login'); ?></li>
                        </ul>
                    </div>                
                </div> <!-- /.row-fluid -->        
            </div> <!-- /.container -->
        </div> <!-- /.head-top -->        
    </header>
    <!-- End of Header -->