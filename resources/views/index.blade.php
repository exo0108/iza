<head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/Format.css" >
    <link rel="stylesheet" href="css/index.css" >
    <link rel="icon" href="index_img/bgremove_logo.ico" type="image/x-icon" />
    <title>IZA'Furry</title>
  </head>

<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('IZY Furry') }}
    </h2>
  </x-slot>



  <div class="img_toggle" >
            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                <img src="img/index_img/pet1.jpg"  class="d-block w-100" alt="...">

            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="img/index_img/pet2.jpg" class="d-block w-100" alt="...">
            
            </div>
            <div class="carousel-item">
                <img src="img/index_img/pet3.webp" class="d-block w-100" alt="...">
            
            </div>
        </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next" style="position: absolute;z-index: 0;">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>


        </div>

        <div class="body_conter">
          <div class="container-fluid">
            <div class="services">
              <div class="wrap b-box">
                <div class="services1 col-3">
                <img class="services_icon" src="img/index_img/nail-clippers.png">
                  <div class="services_text"> 
                    <h5>精緻美容</h5>
                    <p>奪獎金牌專業造型師為您提供專屬美容服務，
                    客製多元化造型！</p>
                  </div>
                </div>

                <div class="services1 col-3">
                  <img class="services_icon" src="img/index_img/grooming.png">
                    <div class="services_text"> 
                      <h5>頂級SPA</h5>
                      <p>針對不同毛髮與皮膚量身打造專屬保養，深層清潔、水療按摩、促進新陳代謝。</p>
                    </div>
                  </div>

                  <div class="services1 col-3">
                    <img class="services_icon" src="img/index_img/spray-bottle.png">
                      <div class="services_text"> 
                        <h5>美容用品</h5>
                        <p>重金引進頂級SPA設備，完全人類化的管理療程，由內而外的呵護。</p>
                      </div>
                    </div>

                    <div class="services1 col-3">
                      <img class="services_icon" src="img/index_img/pet-shop.png">
                        <div class="services_text"> 
                          <h5>預約美容服務</h5>
                          <p>為提供您更舒適和貼心的服務，即刻來電或線上預約，由專人為您服務。</p>
                        </div>
                      </div>
            
                
              </div>

              

            </div>
            

           

            <div class="exhibit">
              
                <div class="title">
                  <div class="line"></div>
                  <h2>寵物萌照</h2>
                  <div class="line"></div>
                </div>
                <div class="exhibit_img">
                  <div class="img__wrap">
                    <img class="img__img" src="img/index_img/exhibit1.jpg" />
                    <div class="img__description_layer">
                      <p class="img__description">This image looks super neat.</p>
                    </div>
                  </div>
                  <div class="img__wrap">
                    <img class="img__img" src="img/index_img/exhibit2.jpg" />
                    <div class="img__description_layer">
                      <p class="img__description">This image looks super neat.</p>
                    </div>
                  </div>
                  <div class="img__wrap">
                    <img class="img__img" src="img/index_img/exhibit3.jpg" />
                    <div class="img__description_layer">
                      <p class="img__description">This image looks super neat.</p>
                    </div>
                  </div>
                  <div class="img__wrap">
                    <img class="img__img" src="img/index_img/exhibit4.jpg" />
                    <div class="img__description_layer">
                      <p class="img__description">This image looks super neat.</p>
                    </div>
                  </div>

                </div>

            </div>
            
            
        
          <div id="about" class="about">
                <h1 class="about_h1">關於我們</h1>
              <p>
                
                IZA是一個以飼主疼愛毛孩的心為出發點，致力提供給毛孩最好品質和環境的寵物美容品牌，
                也是目前唯一結合店內及到府服務的領導者，以快速便利的線上預約模式和全透明化的價目及
                作業流程，讓毛孩每次的美容時光都是一次放鬆的護膚美容，我們堅秉持著全程一對一的全手吹服務
                ，以頂級進口洗毛精，為每隻毛孩提供專業品質的美容服務。
                <br><br>

                IZA精緻優雅的法式風格、乾淨無異味的環境、提供毛孩開放自由的空間，捨棄傳統關籠方式
                ，讓毛孩美容前後的時光能在店內自由無拘束地玩耍休息，把您的孩子，當作自己的孩子，
                我們也因此誕生。</p>

          </div>

          <div class="openhour">
                  <div class="openhour_txt">
                      <h2>營業時間</h2>
                      <h5>每週二~週日 早上10點到晚上8點</h5>
                      <h5>例假日和國定假日照常營業<br> (每週一固定公休)</h5>
                  </div>
                  <img src="img/index_img/openhour.jpg">
                
          </div>

        </div>
      </div>


</x-app-layout>