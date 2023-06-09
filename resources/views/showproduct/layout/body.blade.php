<section class="page-section" id="contact">
<h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Product management</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
<div class="row">
        <div class="col-lg-12 margin-tb">
            
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.create') }}"> Create New Product</a>
            </div>
            
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
         <tr>
             <th>No</th>
             <th>Name</th>
             <th>Singer</th>
             <th>Price</th>
             <th>Category</th>
             <th width=400px>Image/Audio</th>
             <th width=600px>Lyric</th>
             <th>Action</th>
         </tr>
         @foreach($products as $key => $product)
         <tr>
             <td>{{$key+1}}</td>
             <td>{{ $product->name }}</td>
             <td>{{ $product->singer }}</td>
             <td>{{ $product->price }}</td>
             <td>{{ $product->category->name }}</td>
            <td>
                <img src="{{ asset('image/product/'.$product->image) }}" alt="" border=3 width=90%>
                <audio controls>
                <source src="{{ asset('audio/product/'.$product->audio) }}" type="audio/mpeg">
                Your browser does not support the audio element.
                </audio>
            </td>
             <td>{{ $product->lyric }}</td>
             <td>
                 <form action="{{ route('products.destroy',$product->id) }}" method="POST">
    
                     <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
     
                     <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
    
                     <a class="btn btn-primary" href="{{ route('products.destroy',$product->id) }}">Delete</a>
    
                 </form>
             </td>
         </tr>
         @endforeach
     </table>
</section>