
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Hamidreza Saberi">
    <meta name="keyword" content="404">
    <link rel="shortcut icon" href="{{asset('admin')}}/img/favicon.html">

    <title>404</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('admin')}}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('admin')}}/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="{{asset('admin')}}/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{asset('admin')}}/css/style.css" rel="stylesheet">
    <link href="{{asset('admin')}}/css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="{{asset('admin')}}/js/html5shiv.js"></script>
    <script src="{{asset('admin')}}/js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="body-404">

<div class="container">

    <section class="error-wrapper">
        <i class="icon-404"></i>
        <h1>{{ $exception->getStatusCode() }}</h1>
         @if($exception->getstatusCode()==404)
        @endif
        <p class="page-404"></p>Please Check The URL <a href="{{ asset('/') }}"> Return to main page  </a></p>
        <p class="page-404">
        The requested page was not found
        </p>
    </section>

</div>
</body>
</html>
