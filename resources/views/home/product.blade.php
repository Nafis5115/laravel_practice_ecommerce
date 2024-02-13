<section class="product_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Our <span>products</span>
            </h2>
        </div>
        <div class="row">
            @foreach ($products_data as $product_data)
            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="box">
                    <div class="option_container">
                        <div class="options">
                            <a href="{{url('product_details', $product_data->id)}}" class="option1">
                                Product Details
                            </a>
                            <form action="{{url('add_cart', $product_data->id)}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4">
                                        <input type="number" name="quantity" min="1" value="1" style="width:100px">
                                    </div>

                                    <div class="col-md-4">
                                        <input type="submit" value="Add to cart" style="border-radius: 40px">
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                    <div class="img-box">
                        <img src="/product/{{$product_data->image}}" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            {{$product_data->title}}
                        </h5>
                        @if ($product_data->discount_price!=null)
                        <h6>
                            ${{$product_data->discount_price}}
                        </h6>
                        <h6 style="text-decoration: line-through">
                            ${{$product_data->price}}
                        </h6>


                        @else
                        <h6>
                            ${{$product_data->price}}
                        </h6>

                        @endif


                    </div>
                </div>
            </div>

            @endforeach



        </div>
        <div style="margin:40px">
            {!!$products_data->withQueryString()->links('pagination::bootstrap-5')!!}
        </div>

    </div>
</section>