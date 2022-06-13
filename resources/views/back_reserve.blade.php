<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="css/Format.css">
  <link rel="stylesheet" href="css/back_reserve.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="icon" href="index_img/bgremove_logo.ico" type="image/x-icon" />
  <title>IZA'Furry</title>
  <script type="text/javascript">
    //按鈕監聽
    $(document).ready(function() {
      $(".edit_btn").click(function() {
        console.log($(this));

        var id = $(this).data('id');
        var userName = $(this).data('userName');
        var storeName = $(this).data('storeName');
        var date = $(this).data('date');
        var period = $(this).data('period');
        var caseName = $(this).data('caseName');

        $('#modal_id').val(id);
        $('#modal_userName').val(userName);
        $('#modal_storeName').val(storeName);
        $('#modal_date').val(date);
        $('#modal_period').val(period);
        $('#modal_caseName').val(caseName);
        $('#myModal').modal('show');
      });
    });
  </script>
</head>

<div class="header">
  <div class="logo">
    <a href="index.html">
      <h1>客戶預約紀錄</h1>
    </a>
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
  <div class="reserve">


    <div class="during" style="display: flex; align-items: center; justify-content: flex-start;">
      <form action=" {{ route('reserve_search') }} " method="GET">
        @csrf
        <input type="text" name="name" placeholder="客戶名稱" class="inp">
        <input type="submit" value="查詢" class="btn">
      </form>

    </div>

    <hr class="re_hr">
    <table class="table table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">客戶名稱</th>
          <th scope="col">預約地點</th>
          <th scope="col">預約日期</th>
          <th scope="col">預約時段</th>
          <th scope="col">預約方案</th>
          <th scope="col"></th>
        </tr>
      </thead>

      <tbody>
        @foreach($reservations as $reservation)
        <tr>
          <td scope="row">{{$reservation->id}}</td>
          <td>{{$reservation->userName}}</td>
          <td>{{$reservation->storeName}}</td>
          <td>{{$reservation->date}}</td>
          <td>{{$reservation->period}}</td>
          <td>{{$reservation->caseName}}</td>
          <td>
            <form action=" {{ route('deleteReservation', $reservation->id) }} " method="POST">
              @csrf
              @method('delete')
              <!-- <button data id="btn_{{$reservation->id}}" type="button" class="btn btn-outline-info edit_btn" data-userName="{{$reservation->userName}}" data-storeName="{{$reservation->storeName}}" data-date="{{$reservation->date}}" data-period=">{{$reservation->period}}" data-caseName="{{$reservation->caseName}}" data-id="{{$reservation->id}}">Edit</button> -->
              <button type="submit" class="btn btn-outline-info" style=" background-color: rgb(202, 93, 93);">刪除</button>
            </form>
          </td>

        </tr>
        @endforeach
      </tbody>
    </table>

    <div class="modal fade bd-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <form action=" {{ route('back_program') }} " method="POST">
          @csrf
          <div id="tmpModal" class="modal-content">

            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">修改商品</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

              <div class="itembody">
                <div class="itemNot">方案編號：<input type="text" name="{{$reservation->id}}" id="modal_id" readonly></div>
                <div class="item">方案名稱<input type="text" name="{{$reservation->userName}}" id="modal_userName" required></div>
                <div class="item">方案價格<input type="text" name="{{$reservation->storeName}}" id="modal_storeName" required></div>
                <div class="item">方案介紹<input type="text" name="{{$reservation->date}}" id="modal_date" required></div>
                <div class="item">方案介紹<input type="text" name="{{$reservation->period}}" id="modal_period" required></div>
                <div class="item">方案介紹<input type="text" name="{{$reservation->caseName}}" id="modal_caseName" required></div>
              </div>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary " data-bs-dismiss="modal" style="background-color: rgb(205, 205, 205);">取消</button>
              <button type="submit" class="btn btn-primary">確定更改</button>
            </div>

          </div>
        </form>
      </div>

    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>