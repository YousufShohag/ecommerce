<section class="promotion_section">
    <div class="container">
        <div class="row promotion_banner_wrap">
            {{-- <div class="col col-lg-6">
                <div class="promotion_banner">
                    <div class="item_image">
                        <img src="{{asset('frontend')}}/assets/images/promotion/banner_img_1.png" alt>
                    </div>
                    <div class="item_content">
                        <h3 class="item_title">Protective sleeves <span>combo.</span></h3>
                        <p>It is a long established fact that a reader will be distracted</p>
                        <a class="btn btn_primary" href="shop_details.html">Shop Now</a>
                    </div>
                </div>
            </div> --}}
            @foreach ($subcategory as $subcategory)
                
            
            <div class="col col-lg-6">
                <div class="promotion_banner">
                    <div class="item_image">
                        <img src="{{asset('backend/subcategory/'.$subcategory->image)}}" alt>
                    </div>
                    <div class="item_content">
                        <h3 class="item_title">{{$subcategory->name}}</span></h3>
                        <p>
                            It is a long established fact that a reader will be distracted
                        </p>
                        <a class="btn btn_primary" href="shop_details.html">Shop Now</a>
                    </div>
                </div>
            </div>

            @endforeach

        </div>
    </div>
</section>