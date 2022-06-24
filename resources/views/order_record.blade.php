<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/Format.css">
    <link rel="stylesheet" href="css/orderRecord_final.css">
    <link rel="icon" href="index_img/bgremove_logo.ico" type="image/x-icon" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript">
        //按鈕監聽
        $(document).ready(function() {
            $(".delete").click(function() {

                var id = $(this).data('id');
                console.log(id);

                $('#deleteForm').attr('action', '/order_record/deleteFrontReservation/' + id);
            });
        });
    </script>
    <title>IZA'Furry</title>
</head>

<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('IZY Furry') }}
        </h2>
    </x-slot>

    <div class="menu">
        <button id="btnReserve" onclick="showReserve()">
            <h4>預約紀錄</h4>
        </button>
        <button id="btnOrder" onclick="showOrder()">
            <h4>訂單紀錄</h4>
        </button>
    </div>

    <div class="reserve" id="reserve">
        <div style="color: rgb(133, 127, 84); font-weight: bold; padding: 10 20px; width: 96%; margin-left: 21px; font-size: 18px; display: flex; align-items: center; text-align: center;">
            <div class="recordInfo">預約地點</div>
            <div class="recordInfo">預約日期</div>
            <div class="recordInfo">預約時間</div>
            <div class="recordInfo" style="width: 23%">預約方案</div>
            <div class="recordInfo">預約價格</div>
        </div>
        <hr style="margin: 10px ;">
        @foreach($reservations as $reservation)
        <div class="reserve-info">
            <div class="recordInfo">{{$reservation->storeName}}</div>
            <div class="recordInfo">{{$reservation->date}}</div>
            <div class="recordInfo">{{$reservation->period}}</div>
            <div class="recordInfo" style="width: 23%">{{$reservation->caseName}}</div>
            <div class="recordInfo">{{$reservation->casePrice}}</div>
            <button data-id="{{$reservation->id}}" type="button" class="btn btn-primary delete" data-bs-toggle="modal" data-bs-target="#cencel" style="background-color: rgb(133, 127, 84, 0.8); margin: auto; padding: 3px 8px; font-size: 18px; border: none; box-shadow: none;">
                取消預約
            </button>
        </div>
        @endforeach
        <div class="modal fade" id="cencel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body" style="color: rgb(199, 0, 0);">
                        確定取消預約？
                    </div>
                    <div class="modal-footer">
                        <form id="deleteForm" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-primary" style="background-color: rgb(202, 93, 93) !important; color: black; border: none; box-shadow: none;">確定取消</button>
                        </form>
                        <button type="submit" name="" class="btn btn-secondary" style="border: transparent !important;" data-bs-dismiss="modal">關閉</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="order" id="order">
        <div class="order-info" style="color: rgb(133, 127, 84); font-weight: bold;">
            <div style="display: flex;">
                <div style="width: 20%; text-align: center;">成立日期</div>
                <div style="width: 20%; text-align: center;">付款方式</div>
                <div style="width: 20%; text-align: center;">總金額</div>
                <div style="width: 20%; text-align: center;">送貨狀態</div>
            </div>
        </div>
        <hr style="margin: 10px;">
        @foreach($orders as $order)
        <div class="order-info">
            <div style="display: flex;">
                <div style="width: 20%; text-align: center;">{{date('Y-m-d', strtotime($order->created_at))}}</div>
                <div style="width: 20%; text-align: center;">{{$order->payWay}}</div>
                <div style="width: 20%; text-align: center;">NT.{{$order->total}}</div>
                <div style="width: 20%; text-align: center;">{{$order->status}}</div>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{$order->id}}" style="background-color: rgb(133, 127, 84, 0.8); margin: auto; padding: 3px 8px; font-size: 18px; border: none; box-shadow: none;">
                    詳細資訊
                </button>
            </div>
        </div>
        <div class="modal fade" id="exampleModal{{$order->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">訂單編號</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div style="display: flex; text-align: center; margin-bottom: 10px; justify-content: space-evenly;">
                            <div style="width: 55%;">商品名稱</div>
                            <div>數量</div>
                            <div>單價</div>
                        </div>
                        @foreach($order->orderitems as $orderitem)
                        <div style="display: flex; text-align: left; margin-bottom: 10px; justify-content: space-evenly;">
                            <div style="width: 55%">{{$orderitem->goodName}}</div>
                            <div>{{$orderitem->amount}}</div>
                            <div>{{$orderitem->goodPrice}}</div>
                        </div>
                        @endforeach
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>

    <script>
        showReserve = () => {
            document.getElementById('reserve').style.display = 'block';
            document.getElementById('order').style.display = 'none';
            document.getElementById('btnReserve').style = "color: white; background-color: rgb(133, 127, 84);"
            document.getElementById('btnOrder').style = "color: black; background-color: rgb(228, 228, 228);"
        }
        showOrder = () => {
            document.getElementById('order').style.display = 'block';
            document.getElementById('reserve').style.display = 'none';
            document.getElementById('btnReserve').style = "color: black; background-color: rgb(228, 228, 228);"
            document.getElementById('btnOrder').style = "color: white; background-color: rgb(133, 127, 84);"
        }
    </script>

</x-app-layout>