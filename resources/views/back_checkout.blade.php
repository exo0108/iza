<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="css/Format.css">
  <link rel="stylesheet" href="css/back_reserve.css">
  <link rel="icon" href="index_img/bgremove_logo.ico" type="image/x-icon" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  </script>

  <title>IZA'Furry</title>
</head>

<div class="header">
  <div class="logo">
    <h1>客戶訂單紀錄</h1>
  </div>
  <hr>
  <div style="display: flex;align-items: center;">
    <nav>
      <a class="back" href="index">返回</a>
      <ul>
        <li><a href="back_reserve">客戶預約紀錄</a> </li>
        <li><a href="back_checkout">客戶訂單紀錄</a> </li>
        <li><a href="back_shop">商品資料</a></li>
        <li><a href="back_member">會員資料</a></li>
        <li><a href="back_program">美容方案</a></li>
      </ul>
    </nav>
  </div>
</div>

<div class="reserve">
  <div class="during" style="display: flex; align-items: center; justify-content: flex-start;">
    <form action=" {{ route('back_checkout_search') }} " method="GET">
      @csrf
      <input type="text" name="phone" placeholder="客戶電話" class="inp">
      <input type="text" name="date" placeholder="成立日期" class="inp">
      <input type="submit" value="查詢" class="btn">
    </form>
  </div>
  <hr class="re_hr">
  <table class="table table-sm">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">成立日期</th>
        <th scope="col">客戶名稱</th>
        <th scope="col">客戶電話</th>
        <th scope="col">付款方式</th>
        <th scope="col">總額</th>
        <th scope="col">出貨狀態</th>
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      @foreach($orders as $order)
      <tr>
        <td scope="row">{{$order->id}}</td>
        <td>{{date('Y-m-d', strtotime($order->created_at))}}</td>
        <td>{{$order->userName}}</td>
        <td>{{$order->userPhone}}</td>
        <td>{{$order->payWay}}</td>
        <td>{{$order->total}}</td>
        <td>{{$order->status}}</td>
        <td>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{$order->id}}" style="background-color: rgb(133, 127, 84, 0.8); margin: auto; padding: 3px 8px; font-size: 18px; border: none; box-shadow: none;">
            詳細資訊
          </button>
        </td>
        @if($order->status == '配送中')
        <!-- if(strcmp($order->status, '配送中')) -->
        <td style="display: flex; align-items: center;">
          <form style="margin: 0;" action=" {{ route('back_checkout_edit', $order->id) }} " method="POST">
            @csrf
            <button type="submit" class="handle btn btn-outline-info" data-id="{{$order->id}}">送達</button>
          </form>
        </td>
        @endif
      </tr>
      <div class="modal fade" id="exampleModal{{$order->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="max-width: 700px !important;">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">訂單編號</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="flex-direction: column;">
              <div style="display: flex; margin-bottom: 10px; justify-content: space-evenly; width:100%">
                <div style="width: 50%; text-align:center;">商品名稱</div>
                <div style="width: 10%; text-align:center;">數量</div>
                <div style="width: 10%; text-align:center;">單價</div>
              </div>
              @foreach($order->orderitems as $orderitem)
              <div style="display: flex; margin-bottom: 10px; justify-content: space-evenly; width:100%;">
                <div style="width: 50%">{{$orderitem->goodName}}</div>
                <div style="width: 10%; text-align:center;">{{$orderitem->amount}}</div>
                <div style="width: 10%; text-align:center;">{{$orderitem->goodPrice}}</div>
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
    </tbody>
  </table>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>