<head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/Format.css" >
    <link rel="stylesheet" href="css/login.css" >
    <link rel="icon" href="index_img/bgremove_logo.ico" type="image/x-icon" />
    <title>IZA'Furry</title>
</head>

<x-guest-layout>
    
    
    <div class="contain">
        <div class="content_left">
            <img src="img/login_img/left1.jpg" alt="" style="width: 100%; opacity: 0.7;">
        </div>
        <div class="st_line"></div>
        <div class="content_right">
        <x-auth-card  >
        <x-slot name="logo">
            <!-- <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a> -->
           
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            <div class="login_txt" style='display: flex;justify-content: center;width: 100%;'>
                            <div class="line" ></div>
                            &nbsp; 登入 &nbsp;
                            <div class="line"></div>
            </div>
            @csrf

            <!-- Email Address -->
            <div>
                

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" placeholder="電子郵件" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                placeholder="密碼"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-green shadow-sm focus:border-indigo-300 focus:ring focus:ring-green focus:ring-opacity-50 " name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('記得我') }}</span>
                </label>
            </div>

            <div class="flex items-center flex-col mt-4">
               
                 <x-button class="ml-3" style="margin: 0; margin-bottom:10px; ">
                    {{ __('登入') }}
                </x-button>
                
                <a href="register" class="inline-flex items-center  py-2 px-10 bg-gray border border-transparent rounded-md  font-semibold  text-white uppercase tracking-widest active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150"  style=" margin-bottom:10px; ">
                        {{ __('註冊') }}
                </a>

               

                
            </div> 
            @if (Route::has('password.request'))
                    <a class=" flex items-center justify-center  underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('忘記密碼?') }}
                    </a>
            @endif
        </form>

        
    </x-auth-card>
        </div>
    </div>
</x-guest-layout>
