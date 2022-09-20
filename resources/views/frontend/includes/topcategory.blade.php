<div class="top_category_wrap">
    <div class="sec-title-link">
        <h3>Top categories</h3>
    </div>
    <div class="top_category_carousel2" data-slick='{"dots": false}'>

       @foreach ($categories as $category)
       <div class="slider_item">
        <div class="category_boxed">
            <a href="#!">
                <span class="item_image">
                    <img src="{{asset('backend/category/'.$category->image)}}">
                </span>
                <span class="item_title">{{$category->name}}</span>
            </a>
        </div>
        </div>
       @endforeach

        

    </div>
    <div class="carousel_nav carousel-nav-top-right">
        <button type="button" class="tc_left_arrow"><i class="fal fa-long-arrow-alt-left"></i></button>
        <button type="button" class="tc_right_arrow"><i class="fal fa-long-arrow-alt-right"></i></button>
    </div>
</div>