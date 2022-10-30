<meta charset="utf-8" />
<meta http-equiv="content-language" content="pt-br" />
<meta http-equiv="Content-Type" content="text/html;">
<meta http-equiv="Expires" content="0">
<meta http-equiv="Cache-Control" content="no-cache, must-revalidate">
<meta http-equiv="Pragma" content="no-cache">
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no" />
<meta name="keywords" content="<?php echo $Tags ?>" />
<meta name="author" content="<?php echo $empresa ?>" />
<meta property="article:author" content="<?php echo $facebook ?>" />
<meta name="robots" content="index,follow" />
<meta name="googlebot" content="index,follow" />
<meta http-equiv="content-language" content="pt_BR" />
<meta name="service" content="<?php echo $descricaoCompartilhamento ?>" />
<meta itemprop="name" content="<?php echo $tituloPagina ?>">
<meta itemprop="image" content="<?php echo $imagemCompartilhamento ?>" />
<meta itemprop="description" content="<?php echo $descricaoCompartilhamento ?>" />
<meta property="og:url" content="<?php echo $urlPagina ?>" />
<meta property="og:image" content="<?php echo $imagemCompartilhamento ?>" />
<meta name="twitter:title" content="<?php echo $tituloPagina ?>">
<meta name="twitter:description" content="<?php echo $descricaoCompartilhamento ?>">
<meta name="twitter:image" content="<?php echo $imagemCompartilhamento ?>">
<meta name="twitter:domain" content="<?php echo $urlPagina ?>">
<meta property="og:locale" content="pt_BR" />
<meta property="og:site_name" content="<?php echo $empresa ?>" />
<meta property="og:type" content="article" />
<meta property="og:image:type" content="image/jpeg" />
<meta property="og:image:width" content="470" />
<meta property="og:image:height" content="276" />
<meta property="fb:app_id" content="" />
<meta name="twitter:card" content="summary">
<meta name="format-detection" content="telephone=yes" />
<link href="<?php echo $images ?>favicon_new.png" rel="icon" type="image/x-icon" />
<!-- <link rel="apple-touch-icon" href="<?php echo $images ?>touch-icon-iphone.png" />
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo $images ?>touch-icon-ipad.png" />
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo $images ?>touch-icon-iphone-retina.png" />
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo $images ?>touch-icon-ipad-retina.png" /> -->
<link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,900&display=swap" rel="stylesheet">

<script>
	var randomNumber = Math.floor(Math.random() * (99999 - 10000) + 10000);
	document.write(' <link type="text/css" rel="stylesheet" href="<?php echo $url ?>assets/css/estrutura.css?v'+randomNumber+'" media="all" /> ')
</script>


<!-- Global site tag (gtag.js) - Google Ads: 11012355706 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11012355706"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'AW-11012355706');
</script>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-208176042-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-208176042-1');
</script>


<!-- Event snippet for Click LP [VL] conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
<script>
    function gtag_report_conversion(praca) {
        var callback = function() {
            if (typeof(praca) != 'undefined') {
                window.location = praca;
            }
        };
        gtag('event', 'conversion', {
            'send_to': 'AW-306559596/0EipCJezjPECEOz0lpIB',
            'event_callback': callback
        });
        return false;
    }
</script>

<!-- TAG GOOGLE DE REMARKETING -->
<script>
    gtag('event', 'page_view', {
        'send_to': 'AW-11012355706',
        'value': 'replace with value',
        'items': [{
            'google_business_vertical': 'custom'
        }]
    });
</script>




<!-- Facebook Pixel Code -->
<script>
    ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1193549701119367');
    fbq('track', 'PageView');
</script>

<noscript>
    <img height="1" width="1" src="https://www.facebook.com/tr?id=1193549701119367&ev=PageView
&noscript=1" />
</noscript>
<!-- End Facebook Pixel Code -->


<script>
    function gTagPixel(praca) {
        gtag_report_conversion(praca)
        fbq('track', 'AddToWishlist')
    }
</script>