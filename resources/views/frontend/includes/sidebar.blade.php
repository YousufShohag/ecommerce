<div class="sidebar-menu-wrapper">
    <div class="cart_sidebar">
        
        <button type="button" class="close_btn"><i class="fal fa-times"></i></button>
        <ul class="cart_items_list ul_li_block mb_30 clearfix">
           
           
                
          
            
            
        </ul>
        <div class="msg">
            
        </div>
        <ul class="total_price ul_li_block mb_30 clearfix">
            <li>
                <span>Subtotal:</span>
                <span class="subTotal"></span>
            </li>
            
            <li>
                <span>Vat 5%:</span>
                <span class="showVat"></span>
            </li>
            <li>
                <span>Discount 20%:</span>
                <span class="dis"></span>
            </li>
            <li>
                <span>Total:</span>
                <span class="grandTotal"></span>
            </li>
        </ul>

        <ul class="btns_group ul_li_block clearfix">
            <li><a class="btn btn_primary" href="{{asset('viewCart')}}">View Cart</a></li>
            <li><a class="btn btn_secondary" href="">Checkout</a></li>
        </ul>
    </div>

    <div class="cart_overlay"></div>
</div>