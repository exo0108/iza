<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/Format.css">
  <link rel="stylesheet" href="css/member.css">
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
    <div class="cont">
      <div class="title">
        <div class="line"></div>
        <h2>會員設定</h2>
        <div class="line"></div>
      </div>

      <div class="member_data">
        <form action=" {{ route('member') }} " method="POST">
          @csrf
          
          <table>

            <tr>
              <td>
                <h3>姓&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 名：</h3>
              </td>
              <td><input class="form-control" type="text" name="name" value="{{$member->name}}"></td>
              <td></td>
            </tr>

            <tr>
              <td>
                <h3>電子郵件：</h3>
              </td>
              <td><input type="email" name="email" value="{{$member->email}}"></td>
              <td></td>
            </tr>

            <tr>
              <td>
                <h3>電話號碼：</h3>
              </td>
              <td><input type="tel" name="phone" value="{{$member->phone}}"></td>
              <td></td>
            </tr>

            <tr>
              <td>
                <h3>密&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 碼：</h3>
              </td>
              <td><input type="password" name="password" value="{{$member->password}}"></td>
              <td>
                <div class="pwbtn">
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal">
                    更改密碼
                  </button>

                  <!-- Modal -->


                </div>
              <td>
            </tr>
          </table>

          <div class="submit">
            <a href="member_a">
              <input type="button" value="取消" class="button1" style="width: 361.75px; background-color: rgb(221, 221, 221);margin-left: 0; ">
            </a>

            <button type="submit" class="button2 " style="width: 361.75px;  ">儲存修改</button>
          </div>
        </form>
      </div>
      <!-- <form class="row g-3" action="route('member_update')" method="POST">
        <div class="col-md-4">
          <label for="validationDefault01" class="form-label">First name</label>
          <input type="text" class="form-control" id="validationDefault01" value="Mark" required>
        </div>
        <div class="col-md-4">
          <label for="validationDefault02" class="form-label">Last name</label>
          <input type="text" class="form-control" id="validationDefault02" value="Otto" required>
        </div>
        <div class="col-md-4">
          <label for="validationDefaultUsername" class="form-label">Username</label>
          <div class="input-group">
            <span class="input-group-text" id="inputGroupPrepend2">@</span>
            <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required>
          </div>
        </div>
        <div class="col-md-6">
          <label for="validationDefault03" class="form-label">City</label>
          <input type="text" class="form-control" id="validationDefault03" required>
        </div>
        <div class="col-md-3">
          <label for="validationDefault04" class="form-label">State</label>
          <select class="form-select" id="validationDefault04" required>
            <option selected disabled value="">Choose...</option>
            <option>...</option>
          </select>
        </div>
        <div class="col-md-3">
          <label for="validationDefault05" class="form-label">Zip</label>
          <input type="text" class="form-control" id="validationDefault05" required>
        </div>
        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
            <label class="form-check-label" for="invalidCheck2">
              Agree to terms and conditions
            </label>
          </div>
        </div>
        <div class="col-12">
          <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
      </form> -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">修改密碼</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="item">目前密碼&nbsp&nbsp&nbsp&nbsp：<input type="password" required></div>
              <div class="item">新密碼&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp：<input type="password" required></div>
              <div class="item">確認新密碼：<input type="password" required></div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary " data-bs-dismiss="modal">取消</button>
              <button type="button" class="btn btn-primary">確定更改</button>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>




</x-app-layout>