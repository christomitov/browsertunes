
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
  <meta name="description" content="All your music in one place.">
  <meta property="og:image" content="">
  {{--  <link rel="shortcut icon" href="https://www.launchaco.com/static/favicon.ico" />  --}}
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

  <link rel="stylesheet" href="/css/styles.css">

</head>

<body class="font-friendly">

  @yield('content')

  <a id="visual-dreamer" class="launchaco-promo" target="_blank" href="https://www.launchaco.com/">
    <svg width="40" height="40" xmlns="http://www.w3.org/2000/svg">
      <defs>
        <linearGradient x1="9.394%" y1="57.704%" x2="105.69%" y2="27.607%" id="a">
          <stop stop-color="#007FFF" offset="0%" />
          <stop stop-color="#1290FC" offset="100%" />
        </linearGradient>
        <linearGradient x1="50%" y1="0%" x2="50%" y2="137.557%" id="b">
          <stop stop-color="#FF9386" offset="0%" />
          <stop stop-color="#FF5F86" offset="100%" />
        </linearGradient>
        <linearGradient x1="30.817%" y1="-31.6%" x2="63.808%" y2="151.297%" id="c">
          <stop stop-color="#D7EDFF" offset="0%" />
          <stop stop-color="#FFF" stop-opacity="0" offset="100%" />
        </linearGradient>
      </defs>
      <g fill="none">
        <circle fill="url(#a)" cx="19.832" cy="19.832" r="19.832" />
        <path d="M26.616.325l4.308 12.587-4.669-.315L26.218.388c0-.105.091-.19.204-.191.088 0 .166.051.194.128z" fill="url(#b)" transform="rotate(45 28.571 6.555)" />
        <path d="M32.031 35.658c-6.164 2.721-12.745-4.33-11.992-10.011 2.617.782 4.626.997 7.904 2.01 2.34.769 4.152.479 5.386-1.13 1.234-1.607 1.316-3.502 0-5.158-4.826-5.49 0 0-10.516-12.264l2.923-2.95C.117 4.123 5.302 32.333 6.903 35.095c4.01 3.54 14.11 8.709 25.128.563z"
          fill="#FFF" />
        <path d="M9.782 19.176l-.034-.016c0 5.76 4.425 21.794 22.185 16.378-6.148 2.716-12.71-4.29-12.006-9.97a7.394 7.394 0 0 1-2.73.519c-3.922 0-7.135-3.047-7.415-6.911z" fill="url(#c)" />
        <ellipse fill="#354158" cx="22.185" cy="14.958" rx="2.017" ry="1.849" />
        <ellipse fill="#354158" cx="22.185" cy="14.958" rx="2.017" ry="1.849" />
      </g>
    </svg>
    <div class="launchaco-promo-speechbubble launchaco-promo-speechbubble__animate">Built With Launchaco</div>
    <div class="launchaco-promo-speechbubble">Built With Launchaco</div>
  </a>
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

<script>
  window.onscroll = function()
  {
    showAd()
  }

  function showAd()
  {
    var scrollBarPosition = window.pageYOffset | document.body.scrollTop;

    // At specifiv position do what you want
    if (scrollBarPosition > 300)
    {
      document.getElementById("visual-dreamer").className = "launchaco-promo launchaco-promo__active";
      window.onscroll = function() {};
    }
  }
</script>
</html>