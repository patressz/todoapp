@include('partials.header')

    <header>
        <h2>
            @yield('title')
        </h2>
    </header>

    <main>

        @include('partials.errors')
        @include('partials.messages')

        @yield('form')


        @yield('content')

    </main>

@include('partials.footer')

