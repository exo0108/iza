<head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/Format.css" >
    <link rel="stylesheet" href="css/shop_content.css" >
    <link rel="icon" href="index_img/bgremove_logo.ico" type="image/x-icon" />
    <title>IZA'Furry</title>
  </head>

<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('IZY Furry') }}
    </h2>

    
  </x-slot>
  <div class="body_center">
            <div class="shop_body">
                <div class="shop_img">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner ">
                        <div class="carousel-item active">
                            <img src="img/shop_content/shop1.webp" class="d-block w-100" >
                        </div>
                        <div class="carousel-item">
                            <img src="img/shop_content/shop2.webp" class="d-block w-100 " >
                        </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    
                    
                </div>

                <div class="content">
                    <h5>汪喵星球 濕式衛生紙 可沖馬桶 46抽/包 寵物溼紙巾
                        12包特價$750 毛孩專用濕巾 【KT222517】</h5>
                    <br>
                    <P class="money">NT.120</P>
                    
                    <div class="car_quantity">
                        <form id='myform' method='POST' action='#'>
                        <label for="">

                        </label>
                        <input type='button' value='-' class='qtyminus' field='quantity' /><!--
                        --><input type='text' name='quantity' value='0' class='qty'/><!--
                    --><input type='button' value='+' class='qtyplus' field='quantity'/>
                        </form>

                    </div>

                    <div class="button">
                        <button class="car">加入購物車</button>
                        <button class="buy"><a href="checkout_final.html">立即購買</a></button>
                    </div>
                </div>
            </div>
            <div class="illustrate">

            
            
            <div class="txt">
                <h3>商品說明</h3>
                <br>
                <h6>【十二萬分感謝您的惠顧】
                <br>
                <br>1.本網站僅提供台灣本島寄送服務(不接受郵政信箱地址)，指定商品採新竹物流配送，(暫無提供離島/店到店服務/郵局寄送) ，確認付款完成我們會於1~3個工作日內將商品寄到您的收貨地址
                <br>#黑貓宅急便固定周日不配送
                <br>#無夜間6點後配送服務
                <br>#新竹物流配送物品暫無提供貨到付款服務
                <br>
                <br>2.飼料出貨皆有保證四個月以上保存期限，如期限太短會主動提前告知客人，與您確認是否有需要訂購，如飼料因期限問題，需退換貨需自行負擔運費。
                <br>(即期品會在標題標示效期以及優惠購買金額，不在保證四個月效期的範疇內)
                <br>
                <br>3.貨到付款除需收取運費外 ，每筆加收60元貨到付款手續費
                <br>
                <br>4.本系統保留取消訂單權利
                </h6>
            </div>
        </div>

        </div>




</x-app-layout>