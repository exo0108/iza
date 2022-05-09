<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/Format.css" >
    <link rel="stylesheet" href="css/checkout_final.css">
    <link rel="icon" href="index_img/bgremove_logo.ico" type="image/x-icon" />
    <title>IZA'Furry</title>
</head>

<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('IZY Furry') }}
        </h2>
    </x-slot>

    <div class="orders">
        <div class="order-title">
            <img src="img/OrderRecordImg/list.png" alt="訂單" width="60px" height="60px">
            <h2 style="font-weight: 450; margin: 0; padding-left: 10px;">訂單確認</h2>訂單編號
        </div>
        <div style="height: 4px; background-color: rgb(133,127,84,0.7); margin: 0;"></div>
        <div class="orderInfo">
            <div class="info-title">
                <div class="info-center">商品</div>
                <div class="info-center">單價</div>
                <div class="info-center">數量</div>
                <div class="info-center">金額</div>
            </div>
            <div class="items">
                <div class="items-center">
                <img src="" alt="商品圖片">
                </div>
                <div class="items-center">商品名稱</div>
                <div class="items-center">單價</div>
                <div class="items-center">數量</div>
                <div class="items-center">金額</div>
            </div>
            <div class="items">
                <div class="items-center">
                <img src="" alt="商品圖片">
                </div>
                <div class="items-center">商品名稱</div>
                <div class="items-center">單價</div>
                <div class="items-center">數量</div>
                <div class="items-center">金額</div>
            </div>
            <div class="items">
                <div class="items-center">
                <img src="" alt="商品圖片">
                </div>
                <div class="items-center">商品名稱</div>
                <div class="items-center">單價</div>
                <div class="items-center">數量</div>
                <div class="items-center">金額</div>
            </div>
            <div class="items">
                <div class="items-center">
                <img src="" alt="商品圖片">
                </div>
                <div class="items-center">商品名稱</div>
                <div class="items-center">單價</div>
                <div class="items-center">數量</div>
                <div class="items-center">金額</div>
            </div>
        </div>
        <hr style="margin: auto; margin-top: 20px; width: 75%;">
        <div class="orderConnect">
            <div class="a">
                取貨人姓名：<input type="text" name="pickerName" id="pickerName">&emsp;&emsp;
                聯絡電話：<input type="text" name="pickerPhone" id="pickerPhone">
            </div>
            <div class="a">
                縣市&nbsp;
                <select name="" id="">
                
                </select>&emsp;&emsp;
                地區&nbsp;
                <select name="" id="">
                
                </select>&emsp;&emsp;
                詳細地址：<input type="text" name="address" id="address" size="50">
            </div>
            <div class="a">
                <input type="radio" name="payType" id="" onclick="show1();">&nbsp;貨到付款&emsp;&emsp;
                <input type="radio" name="payType" id="" onclick="show2();">&nbsp;信用卡支付
            </div>
            <div id="cardInfo" class="hide">
                <hr style="margin-top: 0;">
                卡片種類&emsp;<input type="radio" name="cardType" id="">信用卡&emsp;
                            <input type="radio" name="cardType" id="">金融卡&emsp;
                            <input type="radio" name="cardType" id="">國旅卡<br><br>
                卡號&emsp;&emsp;&emsp;<input type="text" name="cardId" id=""><br><br>
                有效期限&emsp;<input type="text" name="dueTimeMonth" id=""><br>
            </div>
        </div>
        <div class="total-price">          
            <input type="button" value="確定付款" style="color: white; background-color: rgb(133,127,84); border: transparent; padding: 2px 15px;">&emsp;
            <div style="color: rgb(217,177,116); font-weight: bolder; ">NT$總金額</div>
        </div>
    </div>

    <script type="text/javascript">
    show1 = () => {
        document.getElementById('cardInfo').style.display ='none';
    }
    show2 = () => {
        document.getElementById('cardInfo').style.display = 'block';
    }
    </script>

</x-app-layout>