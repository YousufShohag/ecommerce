<header class="header_section header-style-no-collapse">
    <div class="header_top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col col-md-6">
                    <ul class="header_select_options ul_li">
                        <li>
                            <div class="select_option">
                                <div class="flug_wrap">
                                    <img src="{{asset('frontend')}}/assets/images/flug/flug_uk.png" alt="image_not_found">
                                </div>
                                <select>
                                    <option data-display="Select Option">Select Your Language</option>
                                    <option value="1" selected>English</option>
                                    <option value="2">Bangla</option>
                                    <option value="3" disabled>Arabic</option>
                                    <option value="4">Hebrew</option>
                                </select>
                            </div>
                        </li>
                        
                    </ul>
                </div>
                <div class="col col-md-6">
                    <p class="header_hotline">Call us toll free: <strong>+8801608  550 445</strong></p>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-2 alert alert-warning" role="alert">
        <i class="fas fa-volume-up"></i> This is Demo Ecommerce site Frontend and Backend both, Please give your register role an admin, if you give role user, You dont show Backend. Some work are under taken  <i class="fas fa-wrench"></i>  in my localhost.Thank you! <i class="fas fa-smile"></i>
      </div>
<marquee behavior="" direction="" style="color: red;"> </marquee>
    <div class="header_middle">
        <div class="container">
            <div class="row align-items-center">
                <div class="col col-lg-3 col-md-3 col-sm-12">
                    <div class="brand_logo">
                        <a class="brand_link" href="index.html">
                            <h3>Yousuf || Shohag</h3>
                        </a>
                    </div>
                </div>
                <div class="col col-lg-6 col-md-6 col-sm-12">
                    <form action="#">
                        <div class="advance_serach">
                            <div class="select_option mb-0 clearfix">
                                <select>
                                    <option data-display="All Categories">Select A Category</option>
                                    @foreach ($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                    
                                  
                                </select>
                            </div>
                            <div class="form_item">
                                <input type="search" name="search" placeholder="Search Prudcts...">
                                <button type="submit" class="search_btn"><i class="far fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col col-lg-3 col-md-3 col-sm-12">
                    <button class="mobile_menu_btn2 navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_menu_dropdown" aria-controls="main_menu_dropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fal fa-bars"></i>
                    </button>
                    <button type="button" class="cart_btn">
                       <ul class="header_icons_group ul_li_right">
                            <li>
                                <a href="wishlist.html">
                                    <svg role="img" xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewBox="0 0 24 24" stroke="#051d43" stroke-width="1" stroke-linecap="square" stroke-linejoin="miter" fill="none" color="#2329D6"> <title>Favourite</title> <path d="M12,21 L10.55,19.7051771 C5.4,15.1242507 2,12.1029973 2,8.39509537 C2,5.37384196 4.42,3 7.5,3 C9.24,3 10.91,3.79455041 12,5.05013624 C13.09,3.79455041 14.76,3 16.5,3 C19.58,3 22,5.37384196 22,8.39509537 C22,12.1029973 18.6,15.1242507 13.45,19.7149864 L12,21 Z"/> </svg>
                                    <span class="wishlist_counter">3</span>
                                </a>
                            </li>
                            <li>
                                <span class="cart_icon">
                                    <i class="icon icon-ShoppingCart"></i>
                                    <small class="cart_counter">0</small>
                                </span>
                            </li>
                       </ul>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="header_bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col col-md-3">
                    <div class="allcategories_dropdown">
                        <button class="allcategories_btn" type="button" data-bs-toggle="collapse" data-bs-target="#allcategories_collapse" aria-expanded="false" aria-controls="allcategories_collapse">
                            <svg role="img" xmlns="http://www.w3.org/2000/svg" width="32px" height="32px" viewBox="0 0 24 24" aria-labelledby="statsIconTitle" stroke="#000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="none" color="#000"> <title id="statsIconTitle">Stats</title> <path d="M6 7L15 7M6 12L18 12M6 17L12 17"/> </svg>
                            Browse categories
                        </button>
                        <div class="allcategories_collapse" id="allcategories_collapse">
                            <div class="card card-body">
                                <ul class="allcategories_list ul_li_block">

                                    @foreach ($categories as $categories)
                                    <li><a href="shop_list.html"><i class="fas fa-chevron-right"></i> {{$categories->name}}</a></li>
                                    @endforeach
                                    

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col col-md-6">
                    <nav class="main_menu navbar navbar-expand-lg">
                        <div class="main_menu_inner collapse navbar-collapse" id="main_menu_dropdown">
                            <button type="button" class="offcanvas_close">
                                <i class="fal fa-times"></i>
                            </button>
                            <ul class="main_menu_list ul_li">
                                <li><a class="nav-link" href="#">Home</a></li>
                                <li><a class="nav-link" href="#">About us</a></li>
                                <li><a class="nav-link" href="#">Shop</a></li>
                                <li><a class="nav-link" href="#">Contact Us</a></li>
                            </ul>
                        </div>
                    </nav>
                    <div class="offcanvas_overlay"></div>
                </div>

                <div class="col col-md-3">
                    <ul class="header_icons_group ul_li_right">
                         <li>
                            <a href="#"></a>
                        </li>
                        
                        <li>
                            <a href="{{route('login')}}">
                                Login
                            </a>
                        </li>
                       
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>