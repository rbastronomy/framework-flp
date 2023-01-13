@include('layouts.master')
<!-- component -->
<section class="bg-white dark:bg-gray-900">
    <div class="container px-6 py-10 mx-auto">
        <h1 class="text-3xl font-semibold text-gray-800 capitalize lg:text-4xl dark:text-white">Pagina Blog</h1>

        <body class="antialiased">
            <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif

        <div class="grid grid-cols-1 gap-8 mt-8 md:mt-16 md:grid-cols-2">
            @foreach ($posts as $post)


            <div class="lg:flex">
                <img class="object-cover w-full h-56 rounded-lg lg:w-64" src="/storage/{{ $post->image_url }}" alt="">

                <div class="flex flex-col justify-between py-6 lg:mx-6">
                    <a href="{{ route('posts.view',$post->id) }}" class="text-xl font-semibold text-gray-800 hover:underline dark:text-white ">
                        {{ $post->title }}
                    </a>

                    <span class="text-sm text-gray-500 dark:text-gray-300">En: {{ \Carbon\Carbon::parse($post->created_at)->format('l jS \\of F Y h:i:s A') }}</span>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
