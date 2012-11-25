﻿<!DOCTYPE html>
<html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>ATS : กิจกรรมที่ทำล่าสุด </title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>static/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>static/css/template.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>static/css/listview.css" />
        <script type="text/javascript" src="<?php echo base_url()?>static/js/jquery-1.8.2.min.js" ></script>
        <script type="text/javascript" src="<?php echo base_url()?>static/js/bootstrap.min.js" ></script>
    </head>

    <body>
      	<div class="container container-fluid">
        	<div id="header">
            	<div id="logo">
                	<img src="<?php echo base_url()?>static/img/template/ATS_Logo_2.png" width="430" height="92" alt="ระบบทรานสคริปกิจกรรม คณะเทคโนโลยีสารสนเทศ สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง" />
                </div>
                <div id="login_stat">
                	Login as 53070077<br>
                    ศรัญ อ่อนเอื้อน<br>
                    <button class="btn btn-mini btn-primary">Logout</button>
                </div>
            </div>
			<div class="row-fluid">
				<div class="span3 well" id="leftpanel">
                    <ul class="nav nav-list">
                      <li class="nav-header">Sidebar</li>
                      <li class="active"><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                      <li class="nav-header">Sidebar</li>
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                      <li class="nav-header">Sidebar</li>
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                      <li><a href="#">Link</a></li>
                    </ul>
                </div>
            	<div class="span9" id="rightpanel">
                	<h3>กิจกรรมที่ทำล่าสุด</h3>
			<div class="activity_table_container" id="student_table_container">
				<!--load activity!-->
				<?php $this->load->view('activity');?>
			</div>
            	</div>
				
          	</div>
        </div>        
    </body>
    
</html>
