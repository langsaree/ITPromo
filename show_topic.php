<?php
require 'menu/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>ITPROMO&TRACK | Propose Topic page</title>
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
        <li class="nav-item d-none d-sm-inline-block">
          <a href="auth/login.php" class="nav-link">Login</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="auth/register.php" class="nav-link">Register</a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index.php" class="brand-link">
        <img src="dist/img/n2.png" width="100%">
        <span class="brand-text font-weight-light"></span>
      </a>
      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview ">
              <a href="Annoucement.php" class="nav-link ">
                <i class="nav-icon fa fa-bullhorn"></i>
                <p>
                  Announcements
                  <span class="right badge badge-danger"></span>
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="show_topic.php" class="nav-link active">
                <i class="nav-icon fa fa-file"></i>
                <p>
                  Topics
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="proposal_project.php" class="nav-link">
                <i class="nav-icon fa fa-book"></i>
                <p>
                  Proposal Project
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="guide.php" class="nav-link">
                <i class="nav-icon fa fa-bars"></i>
                <p>
                  Guide
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="course_syllabus.php" class="nav-link">
                <i class="nav-icon fa fa-calendar"></i>
                <p>
                  Schedule
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="form.php" class="nav-link">
                <i class="nav-icon fa fa-edit"></i>
                <p>
                  Forms
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="booked.php" class="nav-link">
                <i class="nav-icon fa fa-book"></i>
                <p>
                  Books
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Propose Topic</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">

              <?php

$strSQL = "SELECT  news_topic.news_id,news_topic.news_topic, news_topic.news_detail, news_topic.news_date,member.member_fullname,news_topic.parent_comment_id FROM news_topic
            LEFT JOIN member ON news_topic.member_id = member.member_id
            WHERE news_topic.news_id and parent_comment_id='parent_comment_id' ";
             if ($objQuery = $db->query($strSQL)) {
              while ($objResult = $objQuery->fetch_object()) {
        ?>
              <div class="callout callout-info">
                <img class="img-circle img-bordered-sm" src="dist/img/user.png" alt="user image" width="30" height="30">
                <span class="username" style="font-size: 15px;">
                  &nbsp;&nbsp;<?php echo $objResult->member_fullname; ?>
                  <span class="float-right">
                    <span class="description" style="font-size: 13px;">Shared publicly -
                      <?php echo $objResult->news_date; ?></span>
                  </span>
                  <!-- /.user-block -->
                  <p>
                    <class style="font-size: 16px;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <b> <?php echo $objResult->news_topic; ?></b>
                  </p>
                  <class style="font-size: 15px;"> <?php echo $objResult->news_detail; ?>
                    <p>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <span class="float-right">
                        <a href="view_newstopic.php?id=<?php echo $objResult->news_id; ?>">
                          Reply </a>
                      </span>
                    </p>
                    </p>
              </div>
              <!-- /.post -->
              <?php
              }
            }
          ?>
              <!-- /.content -->
              </br>
            </div>
            </class>
            </class>
            </p>
            </span>
          </div>
        </div>
    </div>
    <!-- /.content-wrapper -->
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.0.3-pre
      </div>
      <class style="font-size: 12px;"><strong>Copyright &copy; 2019-2020 <a href="#">IT PROJECT</a>.</strong> All rights
        reserved.
    </footer>
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE -->
    <script src="dist/js/adminlte.js"></script>

    <!-- OPTIONAL SCRIPTS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <script src="dist/js/demo.js"></script>
    <script src="dist/js/pages/dashboard3.js"></script>
</body>

</html>