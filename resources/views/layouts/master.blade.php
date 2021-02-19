@include('layouts.header')
@include('layouts.left-menu')
<main role="main" class="main-content">
@yield('content')
</main>
@include('layouts.notifications')
@include('layouts.footer')
