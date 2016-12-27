<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

    <link rel="stylesheet" type="text/css" href="/css/skeleton.css">
    <link rel="stylesheet" type="text/css" href="/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="/css/w3.css">
	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}

    h3{
      font-family: "Comic Sans MS", cursive, sans-serif;
      letter-spacing: 1px;
    }

	</style>
</head>
<body>

<div class = "container" >
	<h1>Welcome to CodeIgniter!</h1>

    <div class = "container">

    <a href = "/index.php/ecg">
    <input type="button" class = "button-primary u-full-width" value="Goto ECG Database">
    </a>
    </div>



    <div class = "container">
    <div class = "w3-container w3-center" style="margin-top:24px;margin-bottom:24px">
    <div class = "w3-container w3-grey w3-leftbar w3-border-green" style="border-bottom-style:dotted;border-top-style:dotted;width:100%;height:100%">
    <h3>Download Demo Files</h3>
    <a href = "/uploads" style="margin-bottom:20px">
    <input type="button" class = "w3-btn w3-white w3-border w3-border-blue" value="Download" style="margin-bottom:20px">
    </a>
    </div>
    </div>
    </div>

    <div class = "container">
    <div class = "w3-container w3-center" style="margin-top:24px;margin-bottom:24px">
    <div class = "w3-container w3-grey w3-leftbar w3-border-red" style="border-bottom-style:dotted;border-top-style:dotted;width:100%;height:100%">
    <h3>Upload File</h3>
    <a href = "/index.php/lab_upload_file" style="margin-bottom:20px">
    <input type="button" class = "button button1" value="Upload" style="margin-bottom:20px">
    </a>
    </div>
    </div>
    </div>





    <div class = "container">
    <li>
    <a href = "http://www.w3schools.com/w3css/tryw3css_templates_band.htm">template</a>
    </li>
<li>
    <a href="http://www.w3schools.com/w3css/tryw3css_templates_startup.htm">next</a>
</li>
<li>
<a href = "http://45.76.193.222/index.php/ecg/welcome#contact">welcome</a>
</li>
    </div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>
