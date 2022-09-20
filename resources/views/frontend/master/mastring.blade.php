
<!doctype html>
<html lang="en">
<head>
    @include('frontend/includes/head')
</head>

<body>

    <!-- body_wrap - start -->
    <div class="body_wrap">
        
        <!-- backtotop - start -->
        <div class="backtotop">
            <a href="#" class="scroll">
                <i class="far fa-arrow-up"></i>
            </a>
        </div>
        <!-- backtotop - end -->

        <!-- preloader - start -->
        <div id="preloader"></div>
        <!-- preloader - end -->

        
        <!-- header_section - start
        ================================================== -->
        @include('frontend/includes/header')
        <!-- header_section - end
        ================================================== -->
        
        <!-- main body - start
        ================================================== -->
        <main>
            
            <!-- sidebar cart - start
            ================================================== -->
            @include('frontend/includes/sidebar')
            <!-- sidebar cart - end
            ================================================== -->

            
            <!-- product quick view modal - start
            ================================================== -->
            @include('frontend/includes/productquick')
            <!-- product quick view modal - end
            ================================================== -->

            
            <!-- slider_section - start
            ================================================== -->
            @include('frontend/includes/slider')
            <!-- slider_section - end
            ================================================== -->
            
            <!-- policy_section - start
            ================================================== -->
            @include('frontend/includes/policy')
            <!-- policy_section - end
            ================================================== -->
        
            
            <!-- products-with-sidebar-section - start
            ================================================== -->
            <section class="products-with-sidebar-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 order-lg-3">
                            @include('frontend/includes/bestselling')
                            
                            @include('frontend/includes/topcategory')
                        </div>
                        @include('frontend/includes/latestproduct')
                    </div>
                </div> <!-- end container  -->
            </section>
            <!-- products-with-sidebar-section - end
            ================================================== -->
            
            
            <!-- promotion_section - start
            ================================================== -->
            @include('frontend/includes/promotion')
            <!-- promotion_section - end
            ================================================== -->
            
            <!-- new_arrivals_section - start
            ================================================== -->
            @include('frontend/includes/newarrival')
            <!-- new_arrivals_section - end
            ================================================== -->
            
            <!-- brand_section - start
            ================================================== -->
            @include('frontend/includes/band')
            <!-- brand_section - end
            ================================================== -->
            
            <!-- viewed_products_section - start
            ================================================== -->
            @include('frontend/includes/viewedproduct')
            <!-- viewed_products_section - end
            ================================================== -->
            
            <!-- newsletter_section - start
            ================================================== -->
            @include('frontend/includes/newsletter')
            <!-- newsletter_section - end
            ================================================== -->
        
        </main>
        <!-- main body - end
        ================================================== -->
        
        <!-- footer_section - start
        ================================================== -->
        @include('frontend/includes/footer')
        <!-- footer_section - end
        ================================================== -->

    </div>
    <!-- body_wrap - end -->

    @include('frontend/includes/script')

</body>
</html>