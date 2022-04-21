<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  
  <head>
   
   @include('admin.css');

   <style type="text/css">
     .center{
      margin: auto;
      width: 50%;
      border: 2px solid white;
      text-align: center;
      margin-top: 40px;
     }
     .font_size{
      text-align: center;
      font-size: 40px;
      padding-top: 20px;
     }
     .img_size{
      width: 250px;
      height: 150px;
     }
     .th_color{
      background: skyblue;
     }
     .th_deg{
      padding: 20px;
     }
   </style>

  </head>
  
  <body>
  

        @include('admin.header')

         @include('admin.sidebar')

        <div class="main-panel">
          <div class="content-wrapper">
           

            @if(session()->has('message')) 
            
            <div class="alert alert-success">
              
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button> 

              {{session()->get('message')}}

            </div>

            @endif

           

           <h2 class="font_size">All Products</h2>

           <table class="center">

             <tr class="th_color">
               <th class="th_deg">Product Title</th>
               <th class="th_deg">Description</th>
               <th class="th_deg">Quantity</th>
               <th class="th_deg">Category</th>
               <th class="th_deg">Price</th>
               <th class="th_deg">Discount Price</th>
               <th class="th_deg">Product Image</th>
               <th class="th_deg">Delete</th>
               <th class="th_deg">Edit</th>
             </tr>
              
              @foreach($product as $product)
             <tr>
               <td>{{$product->title}}</td>
               <td>{{$product->description}}</td>
               <td>{{$product->quantity}}</td>
               <td>{{$product->category}}</td>
               <td>{{$product->price}}</td>
               <td>{{$product->discount_price}}</td>
               <td>
                 <img class="img_size" src="/product/{{$product->image}}">
               </td>
               <td><a class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')" href="{{url('delete_product', $product->id)}}">Delete</a></td>

               <td><a class="btn btn-success" onclick="return confirm('Are you sure to update this?')" href="{{url('update_product', $product->id)}}">Edit</a></td>

             </tr>

             @endforeach

           </table>


        </div>
      </div>

    <!-- container-scroller -->


    <!-- plugins:js -->
    
    @include('admin.script');

    <!-- End custom js for this page -->

  </body>
</html>
