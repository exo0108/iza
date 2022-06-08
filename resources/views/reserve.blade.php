<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/Format.css">
    <link rel="stylesheet" href="css/reserve.css">
    <link rel="icon" href="index_img/bgremove_logo.ico" type="image/x-icon" />
    <title>IZA'Furry</title>
</head>


<x-app-layout>


    <div class="reserve_content">
        <div>
            <?php
                $link=mysqli_connect("localhost","root","","iza")
                or die("無法開啟資料庫連接");



                mysqli_close($link);
            ?>
            <form class="choose">
                <div class="choice">
                    選擇地點<br>
                    <select name="place" id="place">
                        @foreach($stores as $store)
                        <option value="{{$store->id}}">{{$store->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="choicedt">
                    選擇日期與時間<br>
                    <div class="time">
                        <input class="DTime" type="date" name="dateTime" style="height: 66px;">
                        <label>
                            <input type="radio" name="label" value="上午">
                            <span class="round button">上午</span>
                        </label>
                        <label>
                            <input type="radio" name="label" value="下午">
                            <span class="round button">下午</span>
                        </label>

                        <!-- <label><input class="DT" type="button" value="上午">上午</label>
                <label><input class="DT" type="button" value="下午">下午</label> -->
                    </div>
                </div>
                <div class="choice">
                    選擇方案<br>
                    <select name="case" id="case">
                        @foreach($cases as $case)
                        <option value="{{$case->id}}">{{$case->name}}</option>
                        @endforeach
                    </select>
                </div>
                @if(Auth::user())
                <div class="choice">
                    <a href="javascript:alert('已送出預約!')"><input type="button" value="立即預約"></a>
                </div>
                @else
                <div class="choice">
                    <a href="javascript:alert('請先登入!')"><input type="button" value="立即預約"></a>
                </div>
                @endif
            </form>
        </div>
        <div class="casepic_other">
            <div class="casepic">
                <img src="img/reserve_img/case1.jpg" alt="">
                <img src="img/reserve_img/case2.jpg" alt="">
                <img src="img/reserve_img/case3.jpg" alt="">
                <img src="img/reserve_img/case4.jpg" alt="">
            </div>
        </div>
        <hr class="hr">
        <div class="content_bottom">
            <div class="introduce">
                @foreach($cases as $case)
                <div class="caseitem">
                    <div class="i1">
                        <h5>{{$case->name}}</h5>
                        {{$case->describe}}
                    </div>
                    <div class="i2">
                        <h5>價格</h5>
                        <p>{{$case->price}}</p>
                    </div>
                </div>
                <hr>
                @endforeach

                <!-- <div class="caseitem">
                    <div class="i1">
                        <h5>一般小美容洗澡護理</h5>
                        洗澡：二次洗毛+潤絲
                        （含：剪指甲、清耳朵、小修頭型、小修足緣、剃腳底毛、剃肛門毛擠肛門腺）
                    </div>
                    <div class="i2">
                        <h5>價格</h5>
                        <p>500元</p>
                    </div>
                </div>
                <hr>
                <div class="caseitem">
                    <div class="i1">
                        <h5>全身大美容護理</h5>
                        一般小美容洗澡護理+全身造型剪剃（手剪頭型/電剪剃身體）
                        （含：剪指甲、清耳朵、小修頭型、小修足緣、剃腳底毛、剃肛門毛擠肛門腺）
                    </div>
                    <div class="i2">
                        <h5>價格</h5>
                        <p>1000元</p>
                    </div>
                </div>
                <hr>
                <div class="caseitem">
                    <div class="i1">
                        <h5>全身純手工技術剪</h5>
                        一般小美容洗澡護理+全身造型純手工剪（頭部和全身）
                        （含：剪指甲、清耳朵、小修頭型、小修足緣、剃腳底毛、剃肛門毛擠肛門腺）
                    </div>
                    <div class="i2">
                        <h5>價格</h5>
                        <p>1500元</p>
                    </div>
                </div>
                <hr>
                <div class="caseitem">
                    <div class="i1">
                        <h5>包月洗澡方案</h5>
                        四次小美容護理（如需大美容差額另計）
                    </div>
                    <div class="i2">
                        <h5>價格</h5>
                        <p>1800元</p>
                    </div>
                </div> -->
            </div>
        </div>
    </div>

</x-app-layout>