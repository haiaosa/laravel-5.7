<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>{{ $title }}</title>
 <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
 {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css"> --}}
 <link rel="stylesheet" href="{{ asset('css/truyen1vs3.css') }}">
 {{-- <link rel="stylesheet" href="{{ asset('css/debug.css') }}"> --}}
</head>
<body class="has-navbar-fixed-bottom">
    @include('truyen.trang-chu.menu-ngang')
    {{-- @include('truyen.trang-chu.test') --}}
    <section class="hero is-black is-fullheight is-fullheight-with-navbar">
        <!-- Hero head: will stick at the top -->
        <div class="hero-head">
            @include('truyen.trang-chu.tim-kiem')
        </div>
        <!-- Hero content: will be in the middle -->
        <div class="hero-body">
            {{ $slot }}
        </div>
        <!-- Hero footer: will stick at the bottom -->
        <div class="hero-foot">
            @include('truyen.trang-chu.footer')
        </div>
    </section>
</body>
</html>