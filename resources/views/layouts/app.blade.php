<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/Format.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    
        <body>
            @include('layouts.navigation') 
            
            <main>
                {{ $slot }}
            </main>

            <footer>
        <hr>
        <div class="footer_content">
        <div class="footer_right">
          <h1>IZA'Furry</h1>
          <div class="footer-ul">
              <ul>
                <li>
                  <a href="#"><img src="img/index_img/Facebook.webp"></a>
                </li>
                <li>
                  <a href="#"><img src="img/index_img/Twitter.webp"></a>
                </li>
                <li>
                  <a href="#"><img src="img/index_img/LinkedIn.webp"></a>
                </li>
              </ul>
              
          </div>
          
        </div>
        <div class="footer_center">
          <h5>聯絡我們 </h5>
          <hr>
          <h6>台中市北區三民路87號 
            <br> <br>連絡電話：04-2407-9887
          </h6>
        
        </div>
        <div class="footer_left">
          <img src="img/index_img/Logo.png">

        </div>
      </div>
          <div class="footer_txt">
            ©2022 by IZA'Furry. Proudly created with .com
          </div>

         </footer>
        </body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        
</html>
