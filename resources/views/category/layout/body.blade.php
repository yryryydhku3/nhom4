<section class="page-section" id="contact">
<h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">CATEGORY</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
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
             <th>Details</th>
             <th width="280px">Action</th>
         </tr>
         @foreach($categories as $key => $category)
         <tr>
             <td>{{$key+1}}</td>
             <td>{{ $category->name }}</td>
             <td>{{ $category->description }}</td>
             <td>
                 <form action="{{ route('category.destroy',$category->id) }}" method="POST">
    
                     <a class="btn btn-info" href="{{ route('category.show',$category->id) }}">Show</a>
     
                     <a class="btn btn-primary" href="{{ route('category.edit',$category->id) }}">Edit</a>
    
                     <a class="btn btn-primary" href="{{ route('category.destroy',$category->id) }}">Delete</a>
    
                 </form>
             </td>
         </tr>
         @endforeach
     </table>

     <div class="row">
         <div class="col-lg-12 margin-tb">
             <div class="pull-right">
                
                 <a class="btn btn-primary" href="{{ route('category.create') }}"> Create New Category</a>
             </div>
         </div>
     </div>

</section>

       