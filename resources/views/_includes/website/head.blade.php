<head>
        <meta charset="UTF-8"/>
        <title>{{$page->title}}</title>

        <!-- Para mobile -->
        <meta name="viewport" content="initial-scale=1, maximum-scale=1"/>

        <link rel="icon" href="{{asset('images/ps.ico')}}" type="image/x-icon" />
        <link rel="shortcut icon" href="{{asset('images/ps.ico')}}" type="image/x-icon" />
        <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,700,900' rel='stylesheet' type='text/css'> 
        
        <!-- Para ferramentas de Busca -->
        <meta name="description" content="{{$page->description}}"/>
        <meta name="author" content="{{$page->author}}">

        <link href="http://prosecurity.com.br/" rel="canonical">

        <!-- Para Mídias Sociais -->
        @foreach($page->seoTags as $tag)<meta {{$tag->property_name}}="{{$tag->property_value}}" {{$tag->content_name}}="{{$tag->content_value}}">
        @endforeach

        <!-- Global Site Tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-3512997-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments)};
          gtag('js', new Date());

          gtag('config', 'UA-3512997-1');
        </script>

        <!-- Estilo e formatação -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/normalize.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}"/>
        <script type="text/javascript" src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jssor.slider.mini.js') }}"></script>

    </head>