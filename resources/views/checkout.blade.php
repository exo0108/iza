<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


    <link rel="stylesheet" href="css/Format.css">
    <link rel="stylesheet" href="{{ asset('css/checkout_final.css') }}">
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
            <h2 style="font-weight: 450; margin: 0; padding-left: 10px;">訂單確認</h2>
        </div>
        <div style="height: 4px; background-color: rgb(133,127,84,0.7); margin: 0;"></div>
        <div class="orderInfo">


            <table class="table table-sm">
                <thead>
                    <tr class="info-title">
                        <th scope="col"></th>
                        <th scope="col" style="width: 50%; ">商品</th>
                        <th scope="col">單價</th>
                        <th scope="col">數量</th>
                        <th scope="col">金額</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>
                            <div class="items-center-img"><img src="img\shop_content\shop13.webp"></div>
                        </td>
                        <td>樂健飛 L.C.F 超級褐藻潔牙粉 毛小孩專用/狗用 20g</td>
                        <td>NT.430</td>
                        <td>1</td>
                        <td>NT.430</td>
                    </tr>

                    <tr>
                        <td>
                            <div class="items-center-img"><img src="img\shop_content\shop1.webp"></div>
                        </td>
                        <td>汪喵星球 濕式衛生紙 可沖馬桶 46抽/包 寵物溼紙巾 毛孩專用濕巾</td>
                        <td>NT.120</td>
                        <td>1</td>
                        <td>NT.120</td>
                    </tr>

                    <tr>
                        <td>
                            <div class="items-center-img"><img src="img\shop_content\shop3.jpg"></div>
                        </td>
                        <td>Petz Route 沛滋露 水果村系列橡膠順毛梳 寵物皮膚/寵物梳</td>
                        <td>NT.419</td>
                        <td>2</td>
                        <td>NT.838</td>
                    </tr>

                </tbody>
            </table>
        </div>
        <hr style="margin: auto; margin-top: 20px; width: 70%;">
        <div class="orderConnect">
            <div class="a">
                取貨人姓名：<input type="text" name="pickerName" id="pickerName">&emsp;&emsp;
                聯絡電話：<input type="text" name="pickerPhone" id="pickerPhone">
            </div>
            <div class="a">
                <!-- 縣市&nbsp;
                <select name="" id="">
                
                </select>&emsp;&emsp;
                地區&nbsp;
                <select name="" id="">
                
                </select>&emsp;&emsp; -->
                地址：<input type="text" name="address" id="address" size="50">
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
            <a href="shop "  onclick="javascript:alert('下單成功!')"><input type="button" value="確定付款" style="color: white; background-color: rgb(133,127,84); border: transparent; padding: 2px 15px;"></a>
            <div style="color: rgb(217,177,116); font-weight: bolder;margin-right: 20px; ">NT.1388</div>
        </div>
    </div>

    <script type="text/javascript">
        show1 = () => {
            document.getElementById('cardInfo').style.display = 'none';
        }
        show2 = () => {
            document.getElementById('cardInfo').style.display = 'block';
        }




       
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</x-app-layout>