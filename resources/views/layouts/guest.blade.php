<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Basic Page Info -->
        <meta charset="utf-8" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <script src="/scripts/jquery.min.js"></script>
        
        
        <!-- Site favicon -->
        <link
            rel="apple-touch-icon"
            sizes="180x180"
            href="/images/apple-touch-icon.png"
        />
        <link
            rel="icon"
            type="image/png"
            sizes="32x32"
            href="/images/favicon-32x32.png"
        />
        <link
            rel="icon"
            type="image/png"
            sizes="16x16"
            href="/images/favicon-16x16.png"
        />

        <!-- Mobile Specific Metas -->
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, maximum-scale=1"
        />
        
        <!-- Google Font -->
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
            rel="stylesheet"
        />
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="/styles/core.css" />
        <link
            rel="stylesheet"
            type="text/css"
            href="/styles/icon-font.min.css"
        />
        <link
            rel="stylesheet"
            type="text/css"
            href="/plugins/jquery-steps/jquery.steps.css"
        />
        <link
            rel="stylesheet"
            type="text/css"
            href="/plugins/select2/dist/css/select2.min.css"
        />

        <link rel="stylesheet" type="text/css" href="/styles/style.css" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="login-page">
        <div class="login-header box-shadow">
            <div
                class="container-fluid d-flex justify-content-between align-items-center"
            >
                <div class="brand-logo">
                    <a href="/">
                        <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                    </a>
                </div>
                <div class="login-menu">

                     
                    <ul>
                      <li>
                        @if (Route::has('login'))
                                @auth
                                    <a href="{{ route('dashboard') }}">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}">Log In</a>
                                    @if (Route::has('register'))
                                        | <a href="{{ route('register') }}">Register</a>
                                    @endif
                                @endauth
                        @endif 
                      </li>  
                    </ul>
                </div>
            </div>
        </div>
        {{ $slot }}
        <!-- js -->
        
        <script src="/scripts/core.js"></script>
        <script src="/scripts/script.min.js"></script>
        <script src="/scripts/process.js"></script>
        <script src="/scripts/layout-settings.js"></script>
        <script src="/scripts/layout-settings.js"></script>
        <script src="/plugins/jquery-steps/jquery.steps.js"></script>
        <script src="/scripts/steps-setting.js"></script>
        <script src="/plugins/select2/dist/js/select2.full.min.js"></script>
        <script src="/scripts/mask.js"></script>
        
    </body>
</html>
<!DOCTYPE html>