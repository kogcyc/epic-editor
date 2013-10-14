<?php
  echo "";
?>

<!DOCTYPE html>
<html>
<head>

	<script src="./epiceditor/js/epiceditor.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0" />
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" type="text/css" charset="utf-8" />
 
 <style type='text/css'>

</style>	

<script>

$( document ).ready(function() {

    var opts = unescape('%7B%0A%09%09%63%6F%6E%74%61%69%6E%65%72%3A%20%27%65%70%69%63%65%64%69%74%6F%72%27%2C%0A%09%09%74%65%78%74%61%72%65%61%3A%20%6E%75%6C%6C%2C%0A%09%09%62%61%73%65%50%61%74%68%3A%20%27%65%70%69%63%65%64%69%74%6F%72%27%2C%0A%09%09%63%6C%69%65%6E%74%53%69%64%65%53%74%6F%72%61%67%65%3A%20%66%61%6C%73%65%2C%0A%09%09%6C%6F%63%61%6C%53%74%6F%72%61%67%65%4E%61%6D%65%3A%20%27%65%70%69%63%65%64%69%74%6F%72%27%2C%0A%09%09%75%73%65%4E%61%74%69%76%65%46%75%6C%6C%73%63%72%65%65%6E%3A%20%66%61%6C%73%65%2C%0A%09%09%70%61%72%73%65%72%3A%20%6D%61%72%6B%65%64%2C%0A%09%09%66%69%6C%65%3A%20%7B%0A%09%09%09%6E%61%6D%65%3A%20%27%65%70%69%63%65%64%69%74%6F%72%27%2C%0A%09%09%09%64%65%66%61%75%6C%74%43%6F%6E%74%65%6E%74%3A%20%27%27%2C%0A%09%09%09%61%75%74%6F%53%61%76%65%3A%20%31%30%30%0A%09%09%7D%2C%0A%09%09%74%68%65%6D%65%3A%20%7B%0A%09%09%20%20%20%20%62%61%73%65%3A%20%27%2F%74%68%65%6D%65%73%2F%62%61%73%65%2F%65%70%69%63%65%64%69%74%6F%72%2E%63%73%73%27%2C%0A%09%09%20%20%20%20%70%72%65%76%69%65%77%3A%20%27%2F%74%68%65%6D%65%73%2F%70%72%65%76%69%65%77%2F%62%61%72%74%69%6B%2E%63%73%73%27%2C%0A%09%09%20%20%20%20%65%64%69%74%6F%72%3A%20%27%2F%74%68%65%6D%65%73%2F%65%64%69%74%6F%72%2F%65%70%69%63%2D%64%61%72%6B%2E%63%73%73%27%0A%09%09%7D%2C%0A%09%09%62%75%74%74%6F%6E%3A%20%7B%0A%09%09%09%70%72%65%76%69%65%77%3A%20%66%61%6C%73%65%2C%0A%09%09%09%66%75%6C%6C%73%63%72%65%65%6E%3A%20%66%61%6C%73%65%2C%0A%09%09%09%62%61%72%3A%20%22%68%69%64%65%22%0A%09%09%7D%2C%0A%09%09%66%6F%63%75%73%4F%6E%4C%6F%61%64%3A%20%66%61%6C%73%65%2C%0A%09%09%61%75%74%6F%67%72%6F%77%3A%20%66%61%6C%73%65%0A%09%7D');
	
	var editor = new EpicEditor(opts).load();

    $("#preview").click(function() {
        editor.preview();
        $('html, body').animate({scrollTop:0}, 1000);
    });

    $("#edit").click(function() {
        editor.edit();   
    });

});

</script>
</head>
<body>


<div style="padding-left: 0px;">
<i id="edit" class="icon-edit" style="font-size: 2.6em; color: #444;"></i>
<i id="preview" class="icon-html5" style="font-size: 2.6em; color: #f40;"></i>
</div>

<div id="epiceditor" style="width: 100%; height: 300px;"></div>

</body>
</html> 