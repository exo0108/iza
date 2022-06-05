<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/Format.css">
  <link rel="stylesheet" href="css/shop.css">
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
    <div class="body_left">
      <div class="translate">

        <h5>商品分類</h5>
        <hr>
        <ul>
          <li>
            <a href="{{ route('shop')}}">所有商品</a>
          </li>
        </ul>
        @foreach($menuItem as $i => $Item)
        <ul>
          <li>
            <a href="shopSearch?type={{ $Item }}">{{$Item}}</a>
          </li>
        </ul>
        @endforeach

      </div>

    </div>

    <div class="body_right">
      @foreach ($goods->chunk(4) as $chunk)
      <div class="card-bag">
        @foreach ($chunk as $good)

        <a href="{{ route('shop_content',['id'=>$good->id]) }}" class="card" >
          <img class="card_img" src="{{ $good->img }}">
          <hr>
          <div class="card-body">
            <h5 class="card-title">{{$good->name}}</h5>
            <p class="card-text">NT.{{$good->price}}</p>
          </div>
        </a>

        @endforeach
      </div>
      @endforeach
    </div>


    
  </div>




</x-app-layout>