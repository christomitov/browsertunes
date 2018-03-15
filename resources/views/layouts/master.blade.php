
<html>

<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-32349895-7"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-32349895-7');
  </script>

  <title>BrowserTunes</title>
  <meta charSet="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="description" content="BrowserTunes is a browser extension that unifies all your music content providers in one place.">
  <meta property="og:image" content="/images/icon128.png">
  <meta property="og:title" content="BrowserTunes - All your music in one place." />
  <meta property="og:url" content="https://www.browsertunes.com" />
  <meta property="og:description" content="BrowserTunes is a browser extension that unifies all your music content providers.">
  <link rel="shortcut icon" href="/favicon.ico" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

  <link rel="stylesheet" href="/css/styles.css">

</head>

<body class="font-friendly">

  @yield('content')

  <!-- begin olark code -->
  <script type="text/javascript" async>
    ;(function(o,l,a,r,k,y){if(o.olark)return;
    r="script";y=l.createElement(r);r=l.getElementsByTagName(r)[0];
    y.async=1;y.src="//"+a;r.parentNode.insertBefore(y,r);
    y=o.olark=function(){k.s.push(arguments);k.t.push(+new Date)};
    y.extend=function(i,j){y("extend",i,j)};
    y.identify=function(i){y("identify",k.i=i)};
    y.configure=function(i,j){y("configure",i,j);k.c[i]=j};
    k=y._={s:[],t:[+new Date],c:{},l:a};
    })(window,document,"static.olark.com/jsclient/loader.js");
    /* Add configuration calls below this comment */
    olark.identify('5204-243-10-5444');</script>
    <!-- end olark code -->
</body>
</html>