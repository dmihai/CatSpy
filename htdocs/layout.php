<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>CatSpy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

<script src="jquery-1.9.1.min.js"></script>

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px;
      }
    </style>
  </head>

  <body>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">CatSpy</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
	<div class="span12" style="text-align: center">
	<iframe src="<?php echo $camServer; ?>/?action=stream" style="width: 640px; height: 480px;"></iframe>
	</div>
	<div class="span12" style="text-align: center">
	<input type="button" id="up" value="u" class="btn btn-large btn-inverse" /><br />
	<input type="button" id="left" value="l" class="btn btn-large btn-inverse" />
	<input type="button" id="down" value="d" class="btn btn-large btn-inverse" />
	<input type="button" id="right" value="r" class="btn btn-large btn-inverse" />
	</div>
    </div> <!-- /container -->
  </body>
</html>
