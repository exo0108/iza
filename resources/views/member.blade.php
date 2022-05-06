<head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/Format.css" >
    <link rel="stylesheet" href="css/member.css" >
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
            <div class="container">
                <div class="title">
                    <div class="line"></div>
                    <h2>會員設定</h2>
                    <div class="line"></div>
                </div>

                <div class="member_data"> 
                    <form>
                        <table>
                          <tr>
                            <td><h3>姓&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 名：</h3></td>
                            <td><input type="text" name="name"  value="白白" ></td>
                          </tr>

                          <tr>
                            <td><h3>電子郵件：</h3></td>
                            <td><input type="email" name="email" value="a0910288299@gmail.com" ></td>
                          </tr>

                          <tr>
                            <td><h3>電話號碼：</h3></td>
                            <td><input type="tel" name="Phone"  value="+886 0910****99" ></td>
                          </tr>

                          <tr>
                            <td><h3>密&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 碼：</h3></td>
                            <td><input  type="password" name="password"  value="546546546556" ></td>
                          </tr>
                        </table>

                        <div class="pwbtn">
                          <!-- Button trigger modal -->
                          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            更改密碼
                          </button>

                          <!-- Modal -->
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
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">取消</button>
                                  <button type="button" class="btn btn-primary">確定更改</button>
                                </div>
                              </div>
                            </div>
                          </div>


                        </div>
                            
                       
                        <div class="submit">
                          <a href="member_a">
                            <input type="button" value="取消" class="button1" style="width: 361.75px; ackground-color: rgb(221, 221, 221); ">
                          </a>
                          <a href="member_a">
                            <input type="button" value="儲存修改" class="button2" style="width: 361.75px;  background-color:rgb(110, 108, 91) ;">
                          </a>
                            
                            
                        </div>
                    </form>
                </div>


            </div>
        </div>




</x-app-layout>