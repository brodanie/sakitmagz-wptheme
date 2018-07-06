<html>
   <head>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{% if page.title %}{{ page.title }}{% else %}{{ site.title }}{% endif %}</title>
    <meta name="description" content="{% if page.description %}{{ page.description | strip_html | strip_newlines | truncate: 160 }}{% else %}{{ site.description }}{% endif %}">

    <!-- Google Authorship Markup -->
    <meta name="google-site-verification" content="fOmegEDZHzpiwzIbtrsJdpEP2QcDkzKpyVWRF9AOEN0" />
    <meta name="msvalidate.01" content="132A6C0D2FF7F7115323BB704410551A" />
    <meta name="yandex-verification" content="eda0525b828d7743" />
    <link rel="author" href="https://plus.google.com/+{{site.gplus_username}}?rel=author">

    <!-- Social: Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@{{site.twitter_username}}">
    <meta name="twitter:title" content="{% if page.title %}{{ page.title }}{% else %}{{ site.title }}{% endif %}">
    <meta name="twitter:description" content="{% if page.description %}{{ page.description | strip_html | strip_newlines | truncate: 160 }}{% else %}{{ site.description }}{% endif %}">
    {% if page.image %}
    <meta property="twitter:image:src" content="{{ site.url }}{{ site.baseurl }}{{page.image }}">
    {% else %}
    <meta property="twitter:image:src" content="{{ "/assets/img/blog-image.png" | prepend: site.baseurl | prepend: site.url }}">
    {% endif %}

    <!-- Social: Facebook / Open Graph -->
    <meta property="og:url" content="{{ page.url | replace:'index.html','' | prepend: site.baseurl | prepend: site.url }}">
    <meta property="og:title" content="{% if page.title %}{{ page.title }}{% else %}{{ site.title }}{% endif %}">
    {% if page.image %}
    <meta property="og:image" content="{{ site.url }}{{page.image }}">
    {% else %}
    <meta property="og:image" content="{{ "/assets/img/blog-image.png" | prepend: site.baseurl | prepend: site.url }}">
    {% endif %}
    <meta property="og:description" content="{% if page.description %}{{ page.description | strip_html | strip_newlines | truncate: 160 }}{% else %}{{ site.description }}{% endif %}">
    <meta property="og:site_name" content="{{ site.title }}">

    <!-- Social: Google+ / Schema.org  -->
    <meta itemprop="name" content="{% if page.title %}{{ page.title }}{% else %}{{ site.title }}{% endif %}"/>
    <meta itemprop="description" content="{% if page.description %}{{ page.description | strip_html | strip_newlines | truncate: 160 }}{% else %}{{ site.description }}{% endif %}">
    <meta itemprop="image" content="{{ "/assets/img/blog-image.png" | prepend: site.baseurl | prepend: site.url }}"/>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{site.baseurl}}/assets/img/icons/favicon.ico" type="image/x-icon" />
    <!-- Apple Touch Icons -->
    <link rel="apple-touch-icon" href="/assets/img/icons/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="/assets/img/icons/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="/assets/img/icons/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="/assets/img/icons/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="/assets/img/icons/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="60x60" href="/assets/img/icons/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="/assets/img/icons/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/icons/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="/assets/img/icons/apple-touch-icon-152x152.png" />
    <!-- Windows 8 Tile Icons -->
    <meta name="application-name" content="{{site.username}} Blog">
    <meta name="msapplication-TileColor" content="#0562DC">
    <meta name="msapplication-square70x70logo" content="smalltile.png" />
    <meta name="msapplication-square150x150logo" content="mediumtile.png" />
    <meta name="msapplication-wide310x150logo" content="widetile.png" />
    <meta name="msapplication-square310x310logo" content="largetile.png" />
    <!-- Android Lolipop Theme Color -->
    <meta name="theme-color" content="{{ page.color }}">

    <link rel="stylesheet" href="{{ "/assets/css/main.css" | prepend: site.baseurl }}">
    <link rel="canonical" href="{{ page.url | replace:'index.html','' | prepend: site.baseurl | prepend: site.url }}">
    <link rel="alternate" type="application/rss+xml" title="{{ site.title }}" href="{{ "/feed.xml" | prepend: site.baseurl | prepend: site.url }}" />
   </head>
   <body>
      <h1>Judul Artikel</h1>
      <p>Artikel yang ingin dimunculkan</p>
   </body>
</html>
