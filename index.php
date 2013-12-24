<!doctype html>
<!--[if lt IE 7]>    <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>     <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>     <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Snapper</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="bower_components/dropzone/downloads/css/dropzone.css"/>
    <style>
      h1 {
        text-align: center;
      }
    </style>
  </head>
  <body>
  <h1>Drag an image file below to share it.</h1>
  <form id="file-dropzone" action="/php/upload.php" class="dropzone"></form>
  <script src="bower_components/dropzone/downloads/dropzone.min.js"></script>
  <script src="scripts/main.js"></script>
  </body>
</html>
