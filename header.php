<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Starter Wordpress Theme</title>

  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <link rel="stylesheet" href="assets/css/main.css" type="text/css">
</head>

<body class="<?= $_GET['page'] ? $_GET['page'] : 'home'; ?>">
  <div id="app-root">