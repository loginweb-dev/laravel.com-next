<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ isset($title) ? $title . ' - ' : null }}Laravel - The PHP Framework For Web Artisans</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="/img/favicon/safari-pinned-tab.svg" color="#ff2d20">
    <link rel="shortcut icon" href="/img/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#ff2d20">
    <meta name="msapplication-config" content="/img/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <!-- Load fonts -->
    <link rel="stylesheet" href="https://use.typekit.net/ins2wgm.css">

    <!-- Load styles -->
    <link rel="stylesheet" type="text/css" href="/css/app.css">

    <!-- Load JS -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>

</head>
<body class="language-php">

@yield('content')

<footer>
    <div class="footer_contain">
        <div class="contain">
            <section class="partner_block">
                <div class="content">
                    <h2>Become a Laravel Partner</h2>
                    <p>Laravel Partners are elite shops providing top-notch Laravel development and consulting. Each of our partners can help you craft a beautiful, well-architected project.</p>
                </div>
                <a href="/partners" class="btn"><span>Our Partners</span></a>
            </section>
        </div>

        <div class="footer_bg">
            <div class="contain">
                <div class="footer_content">
                    <div class="logotype">
                        <img src="/img/logotype.min.svg" alt="Laravel">
                    </div>
                    <div class="search_box">

                    </div>
                </div>
                <div class="footer_content">
                    <div class="footer_nav">
                        <div class="nav_col">
                            <span class="footer_nav_trigger">Documentation</span>
                            <div class="footer_nav_contain">
                                <ul>
                                    <li><a href="/docs/{{DEFAULT_VERSION}}/releases">Release Notes</a></li>
                                    <li><a href="/docs/{{DEFAULT_VERSION}}/installation">Getting Started</a></li>
                                    <li><a href="/docs/{{DEFAULT_VERSION}}/routing">Routing</a></li>
                                    <li><a href="/docs/{{DEFAULT_VERSION}}/blade">Blade Templates</a></li>
                                    <li><a href="/docs/{{DEFAULT_VERSION}}/authentication">Authentication</a></li>
                                    <li><a href="/docs/{{DEFAULT_VERSION}}/authorization">Authorization</a></li>
                                    <li><a href="/docs/{{DEFAULT_VERSION}}/artisan">Artisan Console</a></li>
                                    <li><a href="/docs/{{DEFAULT_VERSION}}/database">Database</a></li>
                                    <li><a href="/docs/{{DEFAULT_VERSION}}/eloquent">Eloquent ORM</a></li>
                                    <li><a href="/docs/{{DEFAULT_VERSION}}/testing">Testing</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="nav_col">
                            <span class="footer_nav_trigger">Resources</span>
                            <div class="footer_nav_contain">
                                <ul>
                                    <li><a href="https://laracasts.com">Laracasts</a></li>
                                    <li><a href="https://laravel-news.com">Laravel News</a></li>
                                    <li><a href="https://http://larajobs.com">LaraJobs</a></li>
                                    <li><a href="https://laracon.us">Laracon</a></li>
                                    <li><a href="https://certification.laravel.com/">Certification</a></li>
                                    <li><a href="https://laracasts.com/discuss">Forums</a></li>
                                    <li><a href="http://www.laravelpodcast.com/">Podcast</a></li>
                                    <li><a href="https://course.testdrivenlaravel.com/">Test-driven Laravel</a></li>
                                    <li><a href="https://statamic.com/">Statamic</a></li>
                                    <li><a href="https://styleci.io/">StyleCI</a></li>
                                    <li><a href="https://cachethq.io/">Cachet</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="nav_col">
                            <span class="footer_nav_trigger">Partners</span>
                            <div class="footer_nav_contain">
                                <ul>
                                    <li><a href="#">Vehikl</a></li>
                                    <li><a href="#">Tighten Co.</a></li>
                                    <li><a href="#">Kirschbaum</a></li>
                                    <li><a href="#">Byte 5</a></li>
                                    <li><a href="#">64Robots</a></li>
                                    <li><a href="#">Cubet</a></li>
                                    <li><a href="#">DevSquad</a></li>
                                    <li><a href="#">Ideil</a></li>
                                    <li><a href="#">Cyber-duck</a></li>
                                    <li><a href="#">Become A Partner</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="nav_col">
                            <span class="footer_nav_trigger">Ecosystem</span>
                            <div class="footer_nav_contain">
                                <ul>
                                    <li><a href="https://forge.laravel.com">Forge</a></li>
                                    <li><a href="https://envoyer.io">Envoyer</a></li>
                                    <li><a href="https://horizon.laravel.com">Horizon</a></li>
                                    <li><a href="https://lumen.laravel.com">Lumen</a></li>
                                    <li><a href="https://nova.laravel.com">Nova</a></li>
                                    <li><a href="/docs/{{DEFAULT_VERSION}}/broadcasting">Echo</a></li>
                                    <li><a href="/docs/{{DEFAULT_VERSION}}/valet">Valet</a></li>
                                    <li><a href="/docs/{{DEFAULT_VERSION}}/mix">Mix</a></li>
                                    <li><a href="https://spark.laravel.com">Spark</a></li>
                                    <li><a href="/docs/{{DEFAULT_VERSION}}/billing">Cashier</a></li>
                                    <li><a href="/docs/{{DEFAULT_VERSION}}/homestead">Homestead</a></li>
                                    <li><a href="/docs/{{DEFAULT_VERSION}}/dusk">Dusk</a></li>
                                    <li><a href="/docs/{{DEFAULT_VERSION}}/passport">Passport</a></li>
                                    <li><a href="/docs/{{DEFAULT_VERSION}}/scout">Scout</a></li>
                                    <li><a href="/docs/{{DEFAULT_VERSION}}/socialite">Socialite</a></li>
                                    <li><a href="/docs/{{DEFAULT_VERSION}}/telescope">Telescope</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="footer_info">
                        <p class="small">Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in most web projects.</p>
                        <p class="small copyright">Laravel is a Trademark of Taylor Otwell.<br>Copyright &copy;2011-{{now()->format('Y')}} Taylor Otwell.
                        </p>
                        <ul class="social_links">
                            <li><a href="https://twitter.com/laravelphp"><img src="/img/social/twitter.min.svg" alt="Twitter"></a>
                            </li>
                            <li><a href="https://github.com/laravel"><img src="/img/social/github.min.svg" alt="GitHub"></a>
                            </li>
                            <li><a href="https://discordapp.com/invite/VB3drhA"><img src="/img/social/discord.min.svg" alt="Discord"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <a href="/" class="logomark"><img src="/img/logomark.min.svg" alt="Laravel"></a>
    </div>
</footer>

<script>
    var algolia_app_id = '{{ config('algolia.connections.main.id', false) }}';
    var algolia_search_key = '{{ config('algolia.connections.main.key', false) }}';
    var version = '{{ isset($currentVersion) ? $currentVersion : DEFAULT_VERSION }}';
</script>

@include('partials.algolia_template')

<script src="/js/app.js"></script>
</body>
</html>