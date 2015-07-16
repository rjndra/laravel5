<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
       
        {!! Html::style('css/bootstrap.min.css') !!} 
        {!! Html::style('css/font-awesome.min.css') !!} 
        <!-- Theme style -->
        {!! Html::style('css/template.css') !!} 

        
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="bg-black">
    	
    	@yield('content')

        {!! Html::script('js/jquery.min.js') !!} 
        {!! Html::script('js/bootstrap.min.js') !!}

	</body>
    
</html>