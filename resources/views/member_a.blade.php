<head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/Format.css" >
    <link rel="stylesheet" href="css/member_a.css" >
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
                    <form>
                      <table>
                        <tr>
                          <td><h3>姓&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 名：</h3></td>
                          <td><input  type="text" name="name"  value="白白" readonly></td>
                        </tr>

                        <tr>
                          <td><h3>電子郵件：</h3></td>
                          <td><input type="email" name="email" value="a0910288299@gmail.com" readonly></td>
                        </tr>

                        <tr>
                          <td><h3>電話號碼：</h3></td>
                          <td><input type="tel" name="Phone"  value="+886 0910****99" readonly></td>
                        </tr>

                        <tr>
                          <td><h3>密&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 碼：</h3></td>
                          <td><input type="password" name="password"  value="546546546556" readonly></td>
                          
                        </tr>
                      </table>
                        <div class="submit">
                                <a href="member">
                                <input class="button" type="button" value="修改資料" >
                                </a>
                        </div>
                    </form>
                </div>

                  
            </div>
        </div>




</x-app-layout>