<div class="br-sideleft sideleft-scrollbar">
    <label class="sidebar-label pd-x-10 mg-t-20 op-3">Navigation</label>
    <ul class="br-sideleft-menu">
      <li class="br-menu-item">
        <a href="{{route('dashboard')}}" class="br-menu-link active">
          <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
          <span class="menu-item-label">Dashboard</span>
        </a><!-- br-menu-link -->
      </li><!-- br-menu-item -->

      <!-- Vendor Section -->
      <li class="br-menu-item">
        <a href="#" class="br-menu-link with-sub">
          <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
          <span class="menu-item-label">Vendor</span>
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub">
          <li class="sub-item"><a href="{{route('vendor.add')}}" class="sub-link">Add Vendor</a></li>
          <li class="sub-item"><a href="{{route('vendor.manage')}}" class="sub-link">Manage Vendor</a></li>
        </ul>
      </li>

      <li class="br-menu-item">
        <a href="#" class="br-menu-link with-sub">
          <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
          <span class="menu-item-label">Slider</span>
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub">
          <li class="sub-item"><a href="{{route('slider.add')}}" class="sub-link">Add Slider</a></li>
          <li class="sub-item"><a href="{{route('slider.show')}}" class="sub-link">Manage Slider</a></li>
        </ul>
      </li>
      <li class="br-menu-item">
        <a href="#" class="br-menu-link with-sub">
          <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
          <span class="menu-item-label">Category</span>
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub">
          <li class="sub-item"><a href="{{route('category.add')}}" class="sub-link">Add Category</a></li>
        </ul>
      </li>

      <li class="br-menu-item">
        <a href="#" class="br-menu-link with-sub">
          <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
          <span class="menu-item-label">Sub - Category</span>
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub">
          <li class="sub-item"><a href="{{route('subcategoryview')}}" class="sub-link">Add Sub - Category</a></li>
        </ul>
      </li>

      <li class="br-menu-item">
        <a href="#" class="br-menu-link with-sub">
          <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
          <span class="menu-item-label">Product</span>
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub">
          <li class="sub-item"><a href="{{route('productview')}}" class="sub-link">Add Product</a></li>
          
          <li class="sub-item"><a href="{{route('manageproductview')}}" class="sub-link">Manage Product</a></li>
        </ul>
      </li>


      <li class="br-menu-item">
        <a href="#" class="br-menu-link with-sub">
          <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
          <span class="menu-item-label">Product Gallery</span>
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub">
          <li class="sub-item"><a href="{{route('productGallery.add')}}" class="sub-link">Add Image</a></li>
          <li class="sub-item"><a href="{{route('product.manage')}}" class="sub-link">Manage Image</a></li>

         
        </ul>
      </li>

      <li class="br-menu-item">
        <a href="#" class="br-menu-link with-sub">
          <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
          <span class="menu-item-label">Product Coupon</span>
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub">
          <li class="sub-item"><a href="{{route('add')}}" class="sub-link">Add Cupon </a></li>
        </ul>
      </li>

    </ul><!-- br-sideleft-menu -->

 

    <br>
  </div><!-- br-sideleft -->