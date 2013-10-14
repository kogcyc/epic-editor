<?php
  echo "";
?>

<!DOCTYPE html>
<html>
<head>
	<script src="./epiceditor/js/epiceditor.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0;" />
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" type="text/css" charset="utf-8" />
    <link href='http://fonts.googleapis.com/css?family=Josefin+Slab' rel='stylesheet' type='text/css'>

<style type='text/css'>

.editButtons {
}

</style>	

<script>

$( document ).ready(function() {

	var opts = {
		container: 'epiceditor',
		textarea: null,
		basePath: 'epiceditor',
		clientSideStorage: false,
		localStorageName: 'epiceditor',
		useNativeFullscreen: false,
		parser: marked,
		file: {
			name: 'epiceditor',
			defaultContent: '',
			autoSave: 100
		},
		theme: {
		    base: '/themes/base/epiceditor.css',
		    preview: '/themes/preview/preview-dark.css',
		    editor: '/themes/editor/epic-dark.css'
		},
		button: {
			preview: true,
			fullscreen: false,
			bar: "auto"
		},
		focusOnLoad: false,
		shortcut: {
			modifier: 18,
			fullscreen: 70,
			preview: 80
		},
		string: {
			togglePreview: 'Toggle Preview Mode',
			toggleEdit: 'Toggle Edit Mode',
			toggleFullscreen: 'Enter Fullscreen'
		},
		autogrow: true
	}
	
	var editor = new EpicEditor(opts).load();

    $("#preview").click(function() {
        editor.preview();
        //setTimeout(function() { window.scrollTo(0, 1) }, 100);
        $('html, body').animate({scrollTop:0}, 1000);
        

    });
    $("#edit").click(function() {
        editor.edit();   
    });

});

</script>
</head>
<body>


<div style="padding-left: 4px;">
<i id="edit" class="icon-edit editButtons" style="font-size: 2.6em; padding-top: 4px; color: #444;"></i>
<i id="preview" class="icon-html5 editButtons" style="font-size: 2.6em; color: #f40;"></i>
</div>

<div id="epiceditor" style="width: 100%; height: 300px;"></div>

</body>
</html> 