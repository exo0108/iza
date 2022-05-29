<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->


    <div class="header">
        <div class="logo"> 
              <a href="index"><h1>IZA'Furry</h1></a>
            
        </div>
        <hr>
        <div class="hea">

            <nav>
                @if(Auth::user() && Auth::user()->name === 'admin')
                    <a class="back" href="back_reserve">後台管理</a>
                @endif
                <ul>
                    @if(Auth::user() && Auth::user()->name === 'admin')
                        <li><a href="{{ route('index')}}">關於我們</a> </li>
                        <li><a href="{{ route('reserve')}}">立即預約</a></li>
                        <li><a href="{{ route('shop')}}">美容用品</a></li>
                    @else
                        <li><a href="{{ route('index')}}">關於我們</a> </li>
                        <li><a href="{{ route('reserve')}}">立即預約</a></li>
                        <li><a href="{{ route('shop')}}">美容用品</a></li>
                        <li><a href="{{ route('car')}}">購物車</a></li>
                        <li><a href="{{ route('order_record')}}">訂單/預約查詢</a></li>
                    @endif

                </ul>
            </nav>



            @if (Route::has('login'))

            @auth
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content" style="    position: relative;z-index: 1;">


                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link : href="member_a" style='color:rgb(133, 127, 84); min-width: 100%;display: block;position: relative;text-decoration: none;'>
                                {{ __('會員資料') }}
                            </x-dropdown-link>

                            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                            this.closest('form').submit();" style='color:rgb(133, 127, 84);min-width: 100%;display: block;position: relative;text-decoration: none;'>
                                {{ __('登出') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
            @else
            <div style="position: absolute;z-index: 1;left: 88%;">
                <a href="{{ route('login') }}" style="color:rgb(17 24 39 );text-decoration: none; " class="login">登入</a>
            </div>
            @endauth

            @endif


        </div>
    </div>

    <!-- Settings Dropdown -->


    <!-- Hamburger -->
    <div class="-mr-2 flex items-center sm:hidden">
        <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
    </div>
    </div>

    <!-- Responsive Navigation Menu -->

</nav>