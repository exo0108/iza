<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/Format.css" >
    <link rel="stylesheet" href="css/orderRecord_final.css" >
    <link rel="icon" href="index_img/bgremove_logo.ico" type="image/x-icon" />
    <title>IZA'Furry</title>
</head>

<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('IZY Furry') }}
        </h2>
    </x-slot>

    <div class="menu">
        <button id="btnReserve" onclick="showReserve()"><h3>預約紀錄</h3></button>
        <button id="btnOrder" onclick="showOrder()"><h3>訂單紀錄</h3></button>
    </div>

    <div class="reserve" id="reserve">
        <div style="display: flex; align-items: center;">
        <div class="during">
            <input type="date" name="from" id="from">&emsp;至&emsp;
            <input type="date" name="to" id="to">&emsp;
            <input type="button" value="查詢" class="btn">
        </div>
        </div>
        <hr style="margin: 10px ;">
        <div class="reserve-info">
        <div class="recordInfo">預約地點</div>
        <div class="recordInfo">預約日期</div>
        <div class="recordInfo">預約時間</div>
        <div class="recordInfo">預約方案</div>
        <div class="recordInfo">預約價格</div>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cencel" style="background-color: rgb(133, 127, 84, 0.8); margin: auto; padding: 3px 8px; font-size: 18px; border: none; box-shadow: none;">
            取消預約
        </button>
        </div>
        <div class="reserve-info">
        <div class="recordInfo">預約地點</div>
        <div class="recordInfo">預約日期</div>
        <div class="recordInfo">預約時間</div>
        <div class="recordInfo">預約方案</div>
        <div class="recordInfo">預約價格</div>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cencel" style="background-color: rgb(133, 127, 84, 0.8); margin: auto; padding: 3px 8px; font-size: 18px; border: none; box-shadow: none;">
            取消預約
        </button>
        </div>
        <div class="reserve-info">
        <div class="recordInfo">預約地點</div>
        <div class="recordInfo">預約日期</div>
        <div class="recordInfo">預約時間</div>
        <div class="recordInfo">預約方案</div>
        <div class="recordInfo">預約價格</div>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cencel" style="background-color: rgb(133, 127, 84, 0.8); margin: auto; padding: 3px 8px; font-size: 18px; border: none; box-shadow: none;">
            取消預約
        </button>
        </div>
        <div class="reserve-info">
        <div class="recordInfo">預約地點</div>
        <div class="recordInfo">預約日期</div>
        <div class="recordInfo">預約時間</div>
        <div class="recordInfo">預約方案</div>
        <div class="recordInfo">預約價格</div>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cencel" style="background-color: rgb(133, 127, 84, 0.8); margin: auto; padding: 3px 8px; font-size: 18px; border: none; box-shadow: none;">
            取消預約
        </button>
        </div>
        <div class="reserve-info">
        <div class="recordInfo">預約地點</div>
        <div class="recordInfo">預約日期</div>
        <div class="recordInfo">預約時間</div>
        <div class="recordInfo">預約方案</div>
        <div class="recordInfo">預約價格</div>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cencel" style="background-color: rgb(133, 127, 84, 0.8); margin: auto; padding: 3px 8px; font-size: 18px; border: none; box-shadow: none;">
            取消預約
        </button>
        </div>
        <div class="reserve-info">
        <div class="recordInfo">預約地點</div>
        <div class="recordInfo">預約日期</div>
        <div class="recordInfo">預約時間</div>
        <div class="recordInfo">預約方案</div>
        <div class="recordInfo">預約價格</div>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cencel" style="background-color: rgb(133, 127, 84, 0.8); margin: auto; padding: 3px 8px; font-size: 18px; border: none; box-shadow: none;">
            取消預約
        </button>
        </div>
        <div class="reserve-info">
        <div class="recordInfo">預約地點</div>
        <div class="recordInfo">預約日期</div>
        <div class="recordInfo">預約時間</div>
        <div class="recordInfo">預約方案</div>
        <div class="recordInfo">預約價格</div>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cencel" style="background-color: rgb(133, 127, 84, 0.8); margin: auto; padding: 3px 8px; font-size: 18px; border: none; box-shadow: none;">
            取消預約
        </button>
        </div>
        <div class="modal fade" id="cencel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">取消預約</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                確定取消預約？
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" style="background-color: rgb(232, 232, 232); color: black; border: none; box-shadow: none;">確定取消</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">關閉</button>
            </div>
            </div>
        </div>
        </div>
    </div>

    <div class="order" id="order">
        <div style="display: flex; align-items: center;">
        <div class="during">
            <input type="date" name="from" id="from">&emsp;至&emsp;
            <input type="date" name="to" id="to">&emsp;
            <input type="button" value="查詢" class="btn">
        </div>
        </div>
        <hr style="margin: 10px;">
        <div class="order-info">
        <div style="display: flex;">
            <div style="width: 20%; text-align: center;">訂單編號</div>
            <div style="width: 20%; text-align: center;">訂單日期</div>
            <div style="width: 20%; text-align: center;">付款方式</div>
            <div style="width: 20%; text-align: center;">總額</div>              
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: rgb(133, 127, 84, 0.8); margin: auto; padding: 3px 8px; font-size: 18px; border: none; box-shadow: none;">
            詳細資訊
            </button>
        </div>            
        </div>
        <div class="order-info">
        <div style="display: flex;">
            <div style="width: 20%; text-align: center;">訂單編號</div>
            <div style="width: 20%; text-align: center;">訂單日期</div>
            <div style="width: 20%; text-align: center;">付款方式</div>
            <div style="width: 20%; text-align: center;">總額</div>              
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: rgb(133, 127, 84, 0.8); margin: auto; padding: 3px 8px; font-size: 18px; border: none; box-shadow: none;">
            詳細資訊
            </button>
        </div>            
        </div>
        <div class="order-info">
        <div style="display: flex;">
            <div style="width: 20%; text-align: center;">訂單編號</div>
            <div style="width: 20%; text-align: center;">訂單日期</div>
            <div style="width: 20%; text-align: center;">付款方式</div>
            <div style="width: 20%; text-align: center;">總額</div>              
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: rgb(133, 127, 84, 0.8); margin: auto; padding: 3px 8px; font-size: 18px; border: none; box-shadow: none;">
            詳細資訊
            </button>
        </div>            
        </div>
        <div class="order-info">
        <div style="display: flex;">
            <div style="width: 20%; text-align: center;">訂單編號</div>
            <div style="width: 20%; text-align: center;">訂單日期</div>
            <div style="width: 20%; text-align: center;">付款方式</div>
            <div style="width: 20%; text-align: center;">總額</div>              
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: rgb(133, 127, 84, 0.8); margin: auto; padding: 3px 8px; font-size: 18px; border: none; box-shadow: none;">
            詳細資訊
            </button>
        </div>            
        </div>
        <div class="order-info">
        <div style="display: flex;">
            <div style="width: 20%; text-align: center;">訂單編號</div>
            <div style="width: 20%; text-align: center;">訂單日期</div>
            <div style="width: 20%; text-align: center;">付款方式</div>
            <div style="width: 20%; text-align: center;">總額</div>              
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: rgb(133, 127, 84, 0.8); margin: auto; padding: 3px 8px; font-size: 18px; border: none; box-shadow: none;">
            詳細資訊
            </button>
        </div>            
        </div>
        <div class="order-info">
        <div style="display: flex;">
            <div style="width: 20%; text-align: center;">訂單編號</div>
            <div style="width: 20%; text-align: center;">訂單日期</div>
            <div style="width: 20%; text-align: center;">付款方式</div>
            <div style="width: 20%; text-align: center;">總額</div>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: rgb(133, 127, 84, 0.8); margin: auto; padding: 3px 8px; font-size: 18px; border: none; box-shadow: none;">
            詳細資訊
            </button>
        </div>
        </div>
        <div class="order-info">
        <div style="display: flex;">
            <div style="width: 20%; text-align: center;">訂單編號</div>
            <div style="width: 20%; text-align: center;">訂單日期</div>
            <div style="width: 20%; text-align: center;">付款方式</div>
            <div style="width: 20%; text-align: center;">總額</div>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: rgb(133, 127, 84, 0.8); margin: auto; padding: 3px 8px; font-size: 18px; border: none; box-shadow: none;">
            詳細資訊
            </button>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">訂單編號</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <div style="display: flex; text-align: center; margin-bottom: 10px; justify-content: space-evenly;">
                    <div>商品名稱</div>
                    <div>數量</div>
                    <div>單價</div>
                </div>
                <div style="display: flex; text-align: center; margin-bottom: 10px; justify-content: space-evenly;">
                    <div>商品名稱</div>
                    <div>數量</div>
                    <div>單價</div>
                </div>
                <div style="display: flex; text-align: center; margin-bottom: 10px; justify-content: space-evenly;">
                    <div>商品名稱</div>
                    <div>數量</div>
                    <div>單價</div>
                </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
            </div>
        </div>
        </div>
        {{ Auth::user()->id }}
            {{ Auth::user()->phone }}
    </div>

    <script>
    showReserve = () => {
    document.getElementById('reserve').style.display = 'block';
    document.getElementById('order').style.display ='none';
    document.getElementById('btnReserve').style= "color: white; background-color: rgb(133, 127, 84);"
    document.getElementById('btnOrder').style= "color: black; background-color: rgb(228, 228, 228);"
    }
    showOrder = () => {
    document.getElementById('order').style.display = 'block';
    document.getElementById('reserve').style.display ='none';
    document.getElementById('btnReserve').style= "color: black; background-color: rgb(228, 228, 228);"
    document.getElementById('btnOrder').style= "color: white; background-color: rgb(133, 127, 84);"
    }
    </script>

</x-app-layout>