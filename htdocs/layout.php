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
button {
margin: 5px 3px;
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
	<iframe src="<?php echo $camServer; ?>/?action=stream" style="width: 650px; height: 490px;"></iframe>
	</div>
	<div class="span12" style="text-align: center; color: white">
<button class="btn btn-large" type="button" id="up-left"><i class="icon-arrow-left"></i> <i class="icon-arrow-up"></i>
</button><button class="btn btn-large" type="button" id="up"><i class="icon-arrow-up"></i>
</button><button class="btn btn-large" type="button" id="up-right"><i class="icon-arrow-up"></i><i class="icon-arrow-right"></i>
</button><br />
	<button class="btn btn-large" type="button" id="down-left"><i class="icon-arrow-left"></i><i class="icon-arrow-down"></i>
</button><button class="btn btn-large" type="button" id="down"><i class="icon-arrow-down"></i>
</button><button class="btn btn-large" type="button" id="down-right"><i class="icon-arrow-down"></i><i class="icon-arrow-right"></i></button>
	</div>
    </div> <!-- /container -->

<script>
function move(dir)
{
$.get('move.php?dir=' + dir, function(data) {});
}
$("#up").click(function() {
move('up');
});
$("#down").click(function() {
move('down');
});
$("#up-left").click(function() {
move('up-left');
});
$("#up-right").click(function() {
move('up-right');
});
$("#down-left").click(function() {
move('down-left');
});
$("#down-right").click(function() {
move('down-right');
});
</script>

  </body>
</html>
