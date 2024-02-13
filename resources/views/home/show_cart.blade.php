<!DOCTYPE html>
<html>

<head>

    <base href="/public">
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/favicon.png" type="">
    <title>Famms - Fashion HTML Template</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
    <!-- font awesome style -->
    <link href="home/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="home/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="home/css/responsive.css" rel="stylesheet" />

    <style type="text/css">
        .center {
            margin: auto;
            text-align: center;
            padding: 30px;


        }

        table,
        th,
        td {
            border: 1px solid grey;
        }

        .th_deg {
            font-size: 30px;
            padding: 5px;
            background: lightcoral
        }
    </style>
</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        @include('home.header')



        <div class="center">
            <table>
                <tr>
                    <th class="th_deg">Product title</th>
                    <th class="th_deg">Product Quantity</th>
                    <th class="th_deg">Price</th>
                    <th class="th_deg">Image</th>
                    <th class="th_deg">Action</th>
                </tr>
                <?php $totalprice=0?>
                @foreach ($cart as $cart)
                <tr>
                    <td>{{$cart->product_title}}</td>
                    <td>
                        <input style="text-align: center" type="number" name="quantity" value="{{$cart->quantity}}">
                    </td>
                    <td>${{$cart->product_price}}</td>
                    <td><img style="height: 150px; width:150px" src="/product/{{$cart->image}}" alt="" srcset=""></td>
                    <td><a href="{{url('remove_cart',$cart->id)}}" class="btn btn-danger ml-3 mr-3"
                            onClick="return confirm('Are you sure?')">Remove Product</a>
                    </td>
                </tr>
                <?php $totalprice=$totalprice=$totalprice + $cart->product_price?>

                @endforeach

            </table>
            <div>
                <h1 style="font-size:30px; padding:40px;font-family: 'Lato'">
                    Total price: ${{$totalprice}}
                </h1>
            </div>
        </div>
        <!-- why section -->

        <!-- footer start -->

        <!-- footer end -->
        <div class="cpy_">
            <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>

                Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>

            </p>
        </div>
        <!-- jQery -->
        <script src="home/js/jquery-3.4.1.min.js"></script>
        <!-- popper js -->
        <script src="home/js/popper.min.js"></script>
        <!-- bootstrap js -->
        <script src="home/js/bootstrap.js"></script>
        <!-- custom js -->
        <script src="home/js/custom.js"></script>
</body>

</html>
