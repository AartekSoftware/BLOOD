<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo $title; ?></title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('public_html/admin/css/bootstrap.min.css'); ?>" rel="stylesheet" />

    <!-- Custom CSS -->
    <link href="<?php echo base_url('public_html/admin/css/blood-admin.css'); ?>" rel="stylesheet" />

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url('public_html/admin/css/plugins/morris.css'); ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url('public_html/admin/font-awesome-4.1.0/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo site_url('admin/dashboard'); ?>">Administrator Panel</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $this->session->userdata('admin_name'); ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="<?php echo site_url('admin/dashboard/profile'); ?>"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('admin/message'); ?>"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('admin/dashboard/changepassword');?>"><i class="fa fa-fw fa-gear"></i> password</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo site_url('admin/logout'); ?>"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">                        
                        <a href="<?php echo site_url('admin/dashboard');?>"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin/user'); ?>" data-toggle="collapse" data-target="#user"><i class="fa fa-user"></i>User Management</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin/bloodbank') ?>"><i class="fa fa-file-text"></i> Blood Bank</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin/request'); ?>"><i class="fa fa-file-text"></i> Request</a>
                    </li>                                        
                    <li>                        
                        <a href="<?php echo site_url('admin/dashboard/changepassword');?>" data-toggle="collapse" data-target="#setting"><i class="fa fa-fw fa-wrench"></i> Change Password</a>
                    </li>                    
                    <li>
                        <a href="<?php echo base_url(); ?>" target="_blank">
                            <i class="fa fa-fw fa-file"></i> Visits Site
                        </a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>