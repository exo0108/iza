<head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/Format.css" >
    <link rel="stylesheet" href="css/register.css" >
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


    <x-auth-card>
        <x-slot name="logo">
            <!-- <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a> -->
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
        <div class="login_txt" style='display: flex;justify-content: center;width: 100%;'>
                            <div class="line" ></div>
                            &nbsp; 註冊 &nbsp;
                            <div class="line"></div>
            </div>
            @csrf

            <!-- Name -->
            <div>
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" placeholder="姓名：" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" placeholder="電子郵件：" :value="old('email')" required />
            </div>

            <!-- Phone -->
            
            <div class="mt-4">
                <x-input id="phone" class="block mt-1 w-full" type="tel" name="phone" placeholder="行動電話：" :value="old('phone')" required  />
            </div>

            <!-- Password -->
            <div class="mt-4">
                

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                placeholder="密碼："
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" 
                                placeholder="確定密碼："
                                 required />
            </div>

            <div class="flex items-center justify-center mt-4">
               

                <x-button class="ml-4" style="margin: 0; margin-bottom:10px; ">
                    {{ __('註冊') }}
                </x-button>
            </div>
            <a class="flex items-center justify-center underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                {{ __('已經註冊？') }}
            </a>
        </form>
    </x-auth-card>
    </div>
    </div>
</x-guest-layout>
