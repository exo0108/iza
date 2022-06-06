<head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/Format.css">
    <link rel="stylesheet" href="css/back_reserve.css">
    
    
    <link rel="icon" href="index_img/bgremove_logo.ico" type="image/x-icon" />
    <title>IZA'Furry</title>
  </head>

    <div class="header">
            <div class="logo"> 
              <a href="index.html"><h1>會員資料</h1></a>
            </div>
            <hr>
            <div style="display: flex;align-items: center;" >
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
              <form action=" {{ route('member_search') }} " method="GET">
                @csrf
                  <input type="text" name="phone" placeholder="行動電話" class="inp">
                  <input type="submit" value="查詢" class="btn">
              </form>
            </div>
          
          <hr class="re_hr">
          <table class="table table-sm">
            <thead>
              <tr>
                <th scope="col">編號</th>
                <th scope="col">姓名</th>
                <th scope="col">電子郵件</th>
                <th scope="col">行動電話</th>
              </tr>
            </thead>

            <tbody>
                @foreach ($member as $user)
                  <tr>
                      <th scope="row">{{$user->id}}</th>
                      <th >{{$user->name}}</th>
                      <th >{{$user->email}}</th>
                      <th >{{$user->phone}}</th>
                        
                  </tr>
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
