<div class="best-selling-products">
    <div class="sec-title-link">
        <h3>Best selling</h3>
        <div class="view-all"><a href="#">View all<i class="fal fa-long-arrow-right"></i></a></div>
    </div>
    <div class="product-area clearfix">
        @foreach ($products as $product)
        <div class="grid">
            <div class="product-pic">
                <img src="{{asset('backend/product/'.$product->thumbnails)}}" alt>
                <span class="theme-badge">Sale</span>
                <div class="actions">
                    <ul>
                        <li>
                            <a href="#"><svg role="img" xmlns="http://www.w3.org/2000/svg" width="48px" height="48px" viewBox="0 0 24 24" stroke="#2329D6" stroke-width="1" stroke-linecap="square" stroke-linejoin="miter" fill="none" color="#2329D6"> <title>Favourite</title> <path d="M12,21 L10.55,19.7051771 C5.4,15.1242507 2,12.1029973 2,8.39509537 C2,5.37384196 4.42,3 7.5,3 C9.24,3 10.91,3.79455041 12,5.05013624 C13.09,3.79455041 14.76,3 16.5,3 C19.58,3 22,5.37384196 22,8.39509537 C22,12.1029973 18.6,15.1242507 13.45,19.7149864 L12,21 Z"/> </svg></a>
                        </li>
                        <li>
                            <a href="#"><svg role="img" xmlns="http://www.w3.org/2000/svg" width="48px" height="48px" viewBox="0 0 24 24"  stroke="#2329D6" stroke-width="1" stroke-linecap="square" stroke-linejoin="miter" fill="none" color="#2329D6"> <title>Shuffle</title> <path d="M21 16.0399H17.7707C15.8164 16.0399 13.9845 14.9697 12.8611 13.1716L10.7973 9.86831C9.67384 8.07022 7.84196 7 5.88762 7L3 7"/> <path d="M21 7H17.7707C15.8164 7 13.9845 8.18388 12.8611 10.1729L10.7973 13.8271C9.67384 15.8161 7.84196 17 5.88762 17L3 17"/> <path d="M19 4L22 7L19 10"/> <path d="M19 13L22 16L19 19"/> </svg></a>
                        </li>
                        <li>
                            <a class="quickview_btn"  data-bs-toggle="modal"  href="#quickview_popup{{$product->id}}" role="button" tabindex="0"><svg width="48px" height="48px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" stroke="#2329D6" stroke-width="1" stroke-linecap="square" stroke-linejoin="miter" fill="none" color="#2329D6"> <title>Visible (eye)</title> <path d="M22 12C22 12 19 18 12 18C5 18 2 12 2 12C2 12 5 6 12 6C19 6 22 12 22 12Z"/> <circle cx="12" cy="12" r="3"/> </svg></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="details">
                <h4><a href="#">{{$product->product_name}}</a></h4>
                <p><a href="#">{{$product->short_description}}</a></p>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span class="price">
                    <ins>
                        <span class="woocommerce-Price-amount amount">
                            <bdi>
                                <span class="woocommerce-Price-currencySymbol">$</span>{{$product->product_price}}
                            </bdi>
                        </span>
                    </ins>
                </span>
                <div class="add-cart-area">
                    <button value="{{$product->id}}" class="cartbtn add-to-cart">Add to cart</button>
                </div>
            </div>
        </div>




        {{-- ---START -----This is Best Selling product View Model----- --}}

        <div class="modal fade"  id="quickview_popup{{$product->id}}" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalToggleLabel2">Product Quick View</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="product_details">
                            <div class="container">
                                <div class="row">
                                   
                                    <div class="col col-lg-6">
                                        <div class="product_details_image p-0">
                                            <img src="{{asset('backend/product/'.$product->thumbnails)}}">
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-6">
                                        <div class="product_details_content">
                                            <h2 class="item_title">{{$product->product_name}}</h2>
                                            <p>
                                                {{$product->long_description}}
                                            </p>
                                            <div class="item_review">
                                                <ul class="rating_star ul_li">
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                                <span class="review_value">3 Rating(s)</span>
                                            </div>
                                            <div class="item_price">
                                                <span>{{$product->product_price}}</span>
                                                <del>720.00</del>
                                            </div>
                                            <hr>
                                            
                                            
                                            <div class="quantity_wrap">
                                                <form action="#">
                                                    <div class="quantity_input">
                                                        <button type="button" class="input_number_decrement">
                                                            <i class="fal fa-minus"></i>
                                                        </button>
                                                        <input class="input_number" type="text" value="1">
                                                        <button type="button" class="input_number_increment">
                                                            <i class="fal fa-plus"></i>
                                                        </button>
                                                    </div>
                                                </form>
                                                <div class="total_price">
                                                    Total: $620,99
                                                </div>
                                            </div>
                                            
                                            <ul class="default_btns_group ul_li">
                                                <li><a class="addtocart_btn" href="#!">Add To Cart</a></li>
                                                <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                                <li><a href="#!"><i class="fas fa-heart"></i></a></li>
                                            </ul>
                                            
                                            
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        @endforeach
    </div>
</div>