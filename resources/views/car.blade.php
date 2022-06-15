<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/Format.css">
    <link rel="stylesheet" href="css/car.css">
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
            <div class="bar">


            </div>


            <div class="item-list" id="item-list">

                @foreach ($Cart as $Carts)

                <div class="item" id="007">
                    <div class="p-checkbox">
                        <input type="checkbox" name="p-radio" value="{{$Carts->price}}" class="calculate"><label for></label>
                    </div>

                    <div class="p-goods">
                        <div class="p-img"><img src="{{$Carts->img}}"></div>
                    </div>

                    <div class="p-shop">{{$Carts->name}}</div>

                    <div class="p-price">NT.<span class="onlyPrice">{{$Carts->price}}</span></div>

                    <div class="p-quantity">
                        <input type="button" class="decrease" value="-">
                        <input type="text" class="quantity" value="{{$Carts->count}}" />
                        <input type="button" class="increase" value="+">
                    </div>

                    <div class="p-sum">NT.<span class="onlySum">{{$Carts->price}}</span></div>
                    <form action=" {{ route('deleteCart', $Carts->id) }} " method="POST">
                        @csrf
                        @method('delete')

                        <div class="p-action">

                            <input type="submit" class="deleteItem" value="刪除" />

                        </div>
                    </form>
                </div>



                @endforeach
                <div class="car_footer">
                    <div class="car_momey">
                        <h5>總金額：</h5>
                        <h4 class="sum-price"></h4>
                    </div>
                    <div>
                        <button class="goshop">
                            <a href="checkout">
                                確定下單
                            </a>
                        </button>

                    </div>
                </div>


            </div>


            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <script>
                let sum_Price = () => {
                    var radios = document.getElementsByName('p-radio');
                    let sumPrice = 0;
                    let price = 0;
                    for (k in radios) {
                        if (radios[k].checked) {
                            price = radios[k].value;
                            sumPrice += parseInt(price);
                        }
                    }
                    document.getElementsByClassName("sum-price")[0].innerHTML = sumPrice;
                }
                window.onload = function() {


                    var increment = document.getElementsByClassName("increase");

                    for (var i = 0; i < increment.length; i++) {

                        increment[i].index = i;


                        increment[i].onclick = function() {
                            var flag = this.index;

                            var q = document.getElementsByClassName("quantity")[flag];

                            var newvalue = parseInt(q.value) + 1;


                            q.setAttribute('value', newvalue);


                            changeSum(flag, newvalue);
                        }
                    }


                    var decrement = document.getElementsByClassName('decrease');


                    for (var j = 0; j < decrement.length; j++) {
                        decrement[j].index = j;

                        decrement[j].onclick = function() {
                            var flag = this.index;

                            var q = document.getElementsByClassName("quantity")[flag];

                            if (parseInt(q.value) > 1) {
                                var newvalue = parseInt(q.value) - 1;

                                q.setAttribute('value', newvalue);

                                changeSum(flag, newvalue);
                            }
                        }
                    }




                    $(".calculate").change(function() {
                        sum_Price();
                    })

                    var submit = document.getElementById("submit-order");

                    submit.onclick = function() {

                        var data = [];
                        var radios = document.getElementsByName('p-radio');
                        var count = document.getElementsByClassName("quantity");
                        var items = document.getElementsByClassName("item");

                        for (var m = 0; m < radios.length; m++) {
                            if (radios[m].checked == true) {
                                var item = {};
                                item.tradeid = items[m].getAttribute('id');
                                item.amount = count[m].value;

                                data.push(item);
                            }
                        }

                        var result = JSON.stringify(data);

                        $.ajax({
                            type: "post",

                            url: '',

                            data: result,

                            contentType: "application/json",

                            async: false,

                            success: function() {},

                            error: function() {
                                alert("订单总额为");
                            }

                        });
                    }
                }



                function changeSum(flag, num) {

                    var temp = document.getElementsByClassName("onlyPrice")[flag];
                    let a = document.getElementsByClassName("calculate")[flag];

                    var unitPrice = temp.innerHTML;


                    var newPrice = parseInt(unitPrice) * num;

                    var sum = document.getElementsByClassName("onlySum")[flag];
                    a.setAttribute('value', newPrice);
                    sum_Price();
                    sum.innerHTML = newPrice;
                }



                function setAll() {
                    var box = document.getElementById('allchecked');

                    var radios = document.getElementsByName('p-radio');


                    if (box.checked == false) {
                        for (var i = 0; i < radios.length; i++) {
                            radios[i].checked = false;
                        }
                    } else {
                        for (var i = 0; i < radios.length; i++) {
                            radios[i].checked = true;
                        }
                    }
                }
            </script>

</x-app-layout>