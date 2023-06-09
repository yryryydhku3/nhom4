<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@extends('product.layout')
   
   @section('content')
       <div class="row">
           <div class="col-lg-12 margin-tb">
               <div class="pull-left">
                   <h2>Edit Product</h2>
               </div>
               <div class="pull-right">
                   <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
               </div>
           </div>
       </div>
      
       @if ($errors->any())
           <div class="alert alert-danger">
               <strong>Whoops!</strong> There were some problems with your input.<br><br>
               <ul>
                   @foreach ($errors->all() as $error)
                       <li>{{ $error }}</li>
                   @endforeach
               </ul>
           </div>
       @endif
     
       <form action="{{ route('products.update',$product->id) }}" method="POST"  enctype="multipart/form-data">
           @csrf
                   <div class="row">
                       <div class="col-xs-12 col-sm-12 col-md-12">
                           <div class="form-group">
                               <strong>Name:</strong>
                               <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $product->name }}">
                           </div>
                       </div>
                       <div class="col-xs-12 col-sm-12 col-md-12">
                           <div class="form-group">
                               <strong>Singer:</strong>
                               <input type="text" name="singer" class="form-control" placeholder="Singer" value="{{ $product->singer }}">
                           </div>
                       </div>
                       <div class="col-xs-12 col-sm-12 col-md-12">
                           <div class="form-group">
                               <strong>Price:</strong>
                               <input type="number" name="price" class="form-control" placeholder="Price" value="{{ $product->price }}">
                           </div>
                       </div>
                       <div class="col-xs-12 col-sm-12 col-md-12">
                           <div class="form-group">
                               <strong>Category:</strong>
                               <select name="category" class="form-control">
                                   @foreach($categories as $category)
                                   <option value="{{$category->id}}">{{$category->name}}</option>
                                   @endforeach
                                 </select>
                           </div>
                       </div>
                       <div class="col-xs-12 col-sm-12 col-md-12">
                       <div class="form-group">
                           <div class="col-xs-12 col-sm-12 col-md-12">
                               <div class="form-group">
                                   <strong>Image:</strong>
                                   <img src="{{ asset('image/product/'.$product->image) }}" alt="" border=3 height=150 width=200>
                               </div>
                           </div>
                           <input type="file" class="form-control" placeholder="Image" value="" name="imageProduct" />
                       </div>
                       <div class="form-group">
                           <div class="col-xs-12 col-sm-12 col-md-12">
                               <div class="form-group">
                                   <strong>Audio:</strong>
                                   <img src="{{ asset('audio/product/'.$product->audio) }}" alt="" border=3>
                               </div>
                           </div>
                           <input type="file" class="form-control" placeholder="Audio" value="" name="audioProduct" />
                       </div>
                       </div>

                       <div class="col-xs-12 col-sm-12 col-md-12">
                           <div class="form-group">
                               <strong>Lyric:</strong>
                               <textarea class="form-control" style="height:150px" name="lyric" placeholder="Lyric">{{ $product->lyric }}</textarea>
                           </div>
                       </div>

                       <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                               <button type="submit" class="btn btn-primary">Submit</button>
                       </div>
                       
                   </div>
      
       </form>
   @endsection
   
</body>
</html>