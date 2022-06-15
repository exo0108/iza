<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <link rel="stylesheet" href="css/back_reserve.css">
  <link rel="stylesheet" href="css/Format.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="icon" href="index_img/bgremove_logo.ico" type="image/x-icon" />
  <title>IZA'Furry</title>
  <script type="text/javascript">
    //按鈕監聽
    $(document).ready(function() {
      $(".edit_btn").click(function() {
        console.log($(this));

        var id = $(this).data('id');
        var name = $(this).data('name');
        var price = $(this).data('price');
        var img = $(this).data('img');

        $('#modal_img').attr('src', img);
        $('#modal_id').val(id);
        $('#modal_name').val(name);
        $('#modal_price').val(price);
        $('#myModal').modal('show');
      });
    });
  </script>
</head>

<div class="header">
  <div class="logo">
    <a href="#">
      <h1>商品資料</h1>
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

    <div style="display: flex;justify-content: flex-start;">
      <div class="during">
        <form action=" {{ route('shop_search') }} " method="GET">
          @csrf
          <input type="text" name="id" placeholder="商品編號" class="inp">
          <input type="text" name="type" placeholder="商品分類" class="inp">
          <input type="text" name="name" placeholder="商品名稱" class="inp">
          <input type="submit" value="查詢" class="btn">
        </form>
      </div>

      <!-- <div class="edit">
        <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal" style="  background-color: rgb(102, 141, 127);">
          新增
        </button>
      </div> -->
    </div>
    <hr class="re_hr">
    <table class="table table-sm">
      <thead>
        <tr>
          <th scope="col">商品編號</th>
          <th scope="col">商品名稱</th>
          <th scope="col">商品分類</th>
          <th scope="col">商品價格</th>
          <th scope="col">編輯</th>
        </tr>
      </thead>

      <tbody>

        @foreach ($goods as $good)
        <tr>
          <td scope="row">{{$good->id}}</td>
          <td>{{$good->name}}</td>
          <td>{{$good->type}}</td>
          <td>NT.{{$good->price}}</td>
          <td>
            <button data id="btn_{{$good->id}}" type="button" class="btn btn-outline-info edit_btn" data-name="{{$good->name}}" data-price="{{$good->price}}" data-img="{{$good->img}}" data-id="{{$good->id}}">Edit</button>
          </td>
        </tr>
        @endforeach

      </tbody>


    </table>

    <div class="modal fade bd-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <form action=" {{ route('back_shop') }} " method="POST">
          @csrf
          <div id="tmpModal" class="modal-content">

            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">修改商品</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
              <div class="img">
                <img id="modal_img" name="img">
                <input type="file" name="po_image">

              </div>
              <div class="itembody">
                <div class="itemNot">商品編號：<input type="text" name="id" id="modal_id" readonly></div>
                <div class="item">商品名稱：<input type="text" name="name" id="modal_name" required></div>
                <div class="item">商品價格：<input type="text" name="price" id="modal_price" required></div>
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


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">新增商品</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <form action=" {{ route('AddToShop',$good->id) }} " method="POST">
            @csrf
            <div class="itembody2" style="  width: 85%;   margin:auto ; height: 80%;">
              <div class="item">商品圖片：<input type="file" name="img"></div>
              <div class="item">商品名稱：<input type="text" name="name" required></div>
              <div class="item">商品價格：<input type="text" name="price" required></div>
              <div class="item">商品詳細：<input type="text" name="describe" required></div>
              <div class="item"><select name="type" id="type">

                  <option value="1">電剪、針梳、指甲剪</option>
                  <option value="2">毛髮清潔、護膚保養</option>
                  <option value="3">口腔清潔</option>
                  <option value="4">耳朵清潔</option>
                  <option value="5">除臭液、除臭劑、清潔劑、香水</option>
                </select></div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary " data-bs-dismiss="modal">取消</button>
              <button type="submit" class="btn btn-primary">確定送出</button>

            </div>
          </form>
        </div>
      </div>
    </div>






  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>