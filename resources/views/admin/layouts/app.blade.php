<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset("bootstrap/css/bootstrap.min.css") }}">
    <title>OpenBusiness-@yield("title",'')</title>
</head>
<body>
    @include("admin.templates.navbar")
    <div class="container">
    @yield("content")
    @include("admin.templates.footer")
  </div>
</body>
</html>
