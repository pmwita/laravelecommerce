<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    
    <base href="/public">

    @include('admin.css')


     <style type="text/css">
    	.div_center{
    		text-align: center;
    		padding-top: 40px;
    	}
    	.font_size{
    		font-size: 40px;
    		padding-bottom: 40px;
    	}
      .text_color{
        color: black;
        padding-bottom: 20px;
      }
      .center{
        margin: auto;
        width: 50%;
        text-align: center;
        margin-top: 30px;
        border: 3px solid white;
      }
      label{
      	display: inline-block;
      	width: 200px;
      }
      .div_design{
      	padding-bottom: 15px;
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
          
           <div class="div_center">
           	
           	<h1 class="font_size">Update Product</h1>
            
            <form action="{{url('/update_product_confirm', $product->id)}}" method="POST" enctype="multipart/form-data">
              
              @csrf

           	<div class="div_design">
            <label>Product Title:</label>
            <input type="text" class="text_color" name="title" placeholder="Write a Title" required="" value="{{$product->title}}">
            </div>
           

           <div class="div_design">
            <label>Product Description:</label>
            <input type="text" class="text_color" name="description" placeholder="Write a Description" required="" value="{{$product->description}}">
            </div>

            <div class="div_design">
            <label>Product Price:</label>
            <input type="number" class="text_color" name="price" placeholder="Write a Price" required="" value="{{$product->price}}">
            </div>

            <div class="div_design">
            <label>Discount Price:</label>
            <input type="number" class="text_color" name="discount_price" placeholder="Write the Discount Price" value="{{$product->dis_price}}">
            </div>

            <div class="div_design">
            <label>Product Quantity:</label>
            <input type="number" class="text_color" min="0" name="quantity" placeholder="Write the Quantity" required="" value="{{$product->quantity}}">
            </div>


            <div class="div_design">
            <label>Product Category:</label>
            <select class="text_color" name="category" required="">
            	<option value="{{$product->category}}" selected="">{{$product->category}}</option>

            	@foreach($category as $category)

            	<option value="{{$category->category_name}}">{{$category->category_name}}</option>

            	@endforeach
            </select>
            </div>
             
               <div class="div_design">
            <label>Current Product Image:</label>
            <img style="margin:auto;" height="100" width="100" src="/product/{{$product->image}}">
            </div>

            <div class="div_design">
            <label>Change Product Image:</label>
            <input type="file" name="image" required="">
            </div>

            <div class="div_design">
            <input type="submit" value="Update Product" class="btn btn-primary">
            </div>
            </form>

           </div>

     	</div>
     </div>
         

      <!-- container-scroller -->

    <!-- plugins:js -->

    @include('admin.script')

    <!-- End custom js for this page -->
    
  </body>
</html>