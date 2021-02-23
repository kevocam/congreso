@include('layouts.header')
@include('layouts.left-menu')
<main role="main" class="main-content ">
    <h2>@yield("title")</h2>
@yield('content')
</main>
@include('layouts.notifications')
@include('layouts.footer')
