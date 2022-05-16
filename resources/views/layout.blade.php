<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/layout.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
          content="Dit is een website die door een HBO-ICT student van het HZ University Of Applied Sciences is gemaakt">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Cache-control" content="no-cache">
    <script src="https://kit.fontawesome.com/5f690037a3.js" crossorigin="anonymous"></script>
    @yield('head')
</head>

<body>
<header>
    <!--Navigatie Menu-->
    <nav>
        <ul>
            <li class="{{ Request::path() === '/' ? 'active' : '' }}"><a href="/"><i class="fas fa-home"></i></a></li>
            <li class="{{ Request::path() === 'profile' ? 'active' : '' }}"><a href="/profile">Profile</a></li>
            <li class="{{ Request::path() === 'portfolio' ? 'active' : '' }}"><a href="/portfolio">Portfolio</a></li>
            <li class="{{ Request::path() === 'dashboard' ? 'active' : '' }}"><a href="/dashboard">Dashboard</a></li>
            <li class="{{ Request::path() === 'index' ? 'active' : '' }}"><a href="/articles/index">Blog</a></li>
            <li class="{{ Request::path() === 'faqs' ? 'active' : '' }}"><a href="{{ route('faqs.index') }}">FAQ</a></li>
        </ul>
    </nav>
</header>
<section>
    @yield('content')
</section>
</body>

</html>
