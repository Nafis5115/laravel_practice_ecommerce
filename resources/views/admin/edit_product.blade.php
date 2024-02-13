123
<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    <!-- Required meta tags -->
    @include('admin.css')

    <style>
        .div_center {
            text-align: center;
            padding-top: 40px;
        }

        .h2_font {
            font-size: 40px;
            padding-bottom: 40px;
        }

        .input_color {
            color: black;
        }

        .center {
            margin: auto;
            width: 50%;
            text-align: center;
            margin-top: 30px;
            border: 3px solid gray;
        }

        label {
            display: inline-block;
            width: 200px;
        }

        .div_design {
            padding-bottom: 15px;
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            @include('admin.header')
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">

                    <div class="div_center">
                        @if (session()->has('message'))

                        <div class="alert alert-dismissable alert-success">
                            {{session()->get('message')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        @endif
                        <h2 class="h2_font">Edit Product</h2>
                        <form action="{{url('/update_product', $product->id)}}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="div_design">
                                <label>Product Title</label>
                                <input type="text" class="input_color" name="title" placeholder="Write a title"
                                    required="" value="{{$product->title}}">
                            </div>

                            <div class="div_design">
                                <label>Product Description</label>
                                <input type="text" class="input_color" name="description"
                                    placeholder="Write a description" required="" value="{{$product->description}}">
                            </div>

                            <div class="div_design">
                                <label>Product Price</label>
                                <input type="number" class="input_color" name="price" placeholder="Write a price"
                                    required="" value="{{$product->price}}">
                            </div>

                            <div class="div_design">
                                <label>Discount Price</label>
                                <input type="number" class="input_color" name="discount_price"
                                    placeholder="Write a discount_price" required=""
                                    value="{{$product->discount_price}}">
                            </div>

                            <div class="div_design">
                                <label>Product Quantity</label>
                                <input type="number" min="0" class="input_color" name="quantity"
                                    placeholder="Write a quantity" required="" value="{{$product->quantity}}">
                            </div>

                            <div class="div_design">
                                <label>Product Category</label>
                                <select class="input_color" name="category" required="" value="{{$product->category}}">
                                    <option value="{{$product->category}}" selected="">{{$product->category}}</option>

                                    @foreach ($category as $category )
                                    <option value="{{$category->category_name}}">
                                        {{$category->category_name}}
                                    </option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="div_design">
                                <label>Current Image Here: </label>
                                <img src="/product/{{$product->image}}" height="100" width="100" style="margin:auto">
                            </div>

                            <div class="div_design">
                                <label>Change Product Image Here :</label>
                                <input type="file" name="image" required="">
                            </div>

                            <div class="div_design"> <input type="submit" class="btn btn-primary" name="submit"
                                    value="Update Product">
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
</body>

</html>
