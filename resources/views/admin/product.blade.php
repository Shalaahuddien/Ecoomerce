<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')

    <style type="text/css">


        .div_center
        {
            text-Align: center;
            padding-top: 40px;
        }

        .font_size
        {
            font-size: 40px;
            padding-bottom: 40px;
        }

        .text_coLor
        {
            coLor: black;
            padding-bottom: 20px;
        }

        label
        {
            display: inline-block;
            width: 200px;
        }

        .div_design
        {
            padding-bottom: 15px;
        }


    </style>

  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->
        <div class="main-panel">

    <div class="content-wrapper">

    @if(session()->has('message'))

<div class="alert alert-succes">

<button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
{{ session()->get('message') }}

</div>

@endif


    <div class="div_center">


    <h1 class="font_size">Add Product</h1>


    <form action="{{ url('/add_product') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <div class="div_design">
        <label>Product Tittle :</label>

    <input class="text_coLor" type="text" name="title" placeholder="Write a tittle" Required="">
    </div>

    <div class="div_design">
        <label>Product Description :</label>

    <input class="text_coLor" type="text" name="description" placeholder="Write a description" Required="">
    </div>

    <div class="div_design">
        <label>Product Price :</label>

    <input class="text_coLor" type="number" name="price" placeholder="Write a price" Required="">
    </div>


    <div class="div_design">
        <label>Product Quantity :</label>

    <input class="text_coLor" type="number" name="quantity" min="0" placeholder="Write a quantity" Required="">
    </div>

    <div class="div_design">
        <label>Discount Price :</label>

    <input class="text_coLor" type="number" name="dis_price" placeholder="Write a Discount is apply" Required="">
    </div>
    

    <div class="div_design">
        <label>Product Catagory :</label>
<select class="text_coLor" name="catagory" Required="">
    <option value="" selected="">Add a catagory here</option>

        @foreach($catagory as $catagory)

    <option value="{{$catagory->catagory_name}}">{{$catagory->catagory_name}}</option>

    @endforeach

</select>
    </div>

    <div class="div_design">
        <label>Product Image Here :</label>

        <input type="file" name="image" Required="">

    </div>


    <div class="div_design">
       
        <input type="submit" value="Add Product" class="btn btn-primary">

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