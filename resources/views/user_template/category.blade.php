@extends('user_template.layouts.template')
@section('main-contant')
    <div class="fashion_section">
        <div id="main_slider">
            <div class="container">
                <h1 class="fashion_taital">{{ $category->category_name }} - ({{ $category->product_count }})</h1>
                <div class="fashion_section_2">
                    <div class="row">
                        @foreach ($products as $product)
                            <div class="col-lg-4 col-sm-4">
                                <div class="box_main">
                                    <h4 class="shirt_text">{{ $product->product_name }}</h4>
                                    <p class="price_text">Price <span style="color: #262626;">{{ $product->price }}</span>
                                    </p>
                                    <div class="tshirt_img"><img src="{{ asset($product->product_img) }}">
                                    </div>
                                    <div class="btn_main">
                                        <form action="{{ route('addproducttocart') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                                            <input type="hidden" name="price" value="{{ $product->price }}">
                                            <input type="hidden" name="quantity" value="1">
                                            <br>
                                            <input type="submit" value="Buy Now" class="btn btn-warning">
                                        </form>
                                        <div class="seemore_bt"><a
                                                href="{{ route('singleproduct', [$product->id, $product->slug]) }}">See
                                                More</a></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
