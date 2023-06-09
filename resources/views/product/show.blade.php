<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/f043ce78f1.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        *{
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            box-sizing: border-box;
        }
        .container{
            width: 100%;
            height: 100vh;
            background: #333;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
        }
        .music-player{
            background: #1abc9c;
            width: 1000px;
            padding: 25px 35px;
            text-align: center;
        }
        nav{
            display: flex;
            justify-content: space-between;
            margin-bottom: 30px;
        }
        nav .circle{
            border-radius: 50%;
            width: 50px;
            height: 50px;
            line-height: 50px;
            background: #fff;
            color: #f53192;
            box-shadow: 0 5px 10px rgba(255, 26, 26, 0.22);
            transition: 0.5s;
        }
        nav .circle .i{
            font-size: 40px;
        }

        nav .circle:hover{
            scale: 120%;
        }
        

        .song-img{
            width: 400px;
            border-radius: 50%;
            border: 8px solid #fff;
            box-shadow: 0 10px 60px rgba(255, 26, 26, 0.22);

            animation: app-logo-spin infinite 20s linear
        }
        @keyframes app-logo-spin {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }


        .music-player h1{
            font-size: 25px;
            font-weight: 400;
            color: #333;
            margin-top: 20px;
            -webkit-text-stroke: 0.5px black;
            text-stroke: 0.5px black;
        }
        .music-player p{
            font-size: 16px;
            color: #333;
        }
        #progress{
            -webkit-appearance: none;
            width: 100%;
            height: 6px;
            background: #f53192;
            border-radius: 4px;
            cursor: pointer;
            margin: 40px 0;
        }
        #progress::-webkit-slider-thumb{
            -webkit-appearance: none;
            width: 30px;
            height: 30px;
            background: #f53192;
            border-radius: 50%;
            border: 8px solid #fff;
            box-shadow: 0 5px 5px rgba(255, 26, 26, 0.22);
        }
        .controls{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .controls div{
            width: 60px;
            height: 60px;
            margin: 20px;
            background: #fff;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            color: #f53192;
            box-shadow: 0 10px 20px rgba(255, 26, 26, 0.22);
            cursor: pointer;
            transition: 0.5s;
        }
        .controls div:hover{
            scale: 120%;
        }
        .controls div:nth-child(2){
            transform: scale(1.4);
            background: #F4A460;
            color: #fff;
        }
        .lyric{
            width: 400px;
            text-align: center;
            display: inline-block;
        }
    </style>
</head>
<body>
@extends('product.layout')
  
  @section('content')
  <div class="container">
    
    <div class="music-player">
        
        <nav>
            <div class="circle"><a href="{{ route('products.index') }}"><i class="fa-solid fa-rotate-left"></i></a></div>
        </nav>
        <p>{{ $product->category->name }}</p>
        <img src="{{ asset('image/product/'.$product->image) }}" alt="" class="song-img">

        <h1>{{ $product->name }}</h1>
        <p>{{ $product->singer }}</p>

        <audio controls id="song">
            <source src="{{ asset('audio/product/'.$product->audio) }}" type="audio/mpeg">
        </audio>

        <div class="controls">
           
        </div>

        <div class="lyric">{{ $product->lyric }}</div>
    </div>
</div>
  @endsection
  
</body>
</html>