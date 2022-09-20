jQuery(document).ready(function(){
    jQuery(".cartbtn").click(function(){
        var pid = jQuery(this).val();
        $.ajax({
            url:"/addtocart/"+pid,
            type:"get",
            dataType:"JSON",
            success:function(response){
                alert("Item Added");
                showcart();
            }

        })
    })

    showcart();

    function showcart(){
        $.ajax({
            url:"/showcart",
            type:"get",
            dataType:"JSON",
            success:function(response){
                jQuery(".cart_counter").text(response.count);
                var allData = "";
                var subTotal = 0;
                
                $.each(response.data,function(key, item){
                    subTotal += item.price;
                    allData +='<li>\
                    <div class="item_image">\
                        <img src="http://127.0.0.1:8000/backend/product/'+item.image+'" alt="image_not_found">\
                    </div>\
                    <div class="item_content">\
                        <h4 class="item_title">'+item.name+'</h4>\
                        <span class="item_price">'+item.price+'</span>\
                    </div>\
                    <button value="'+item.id+'" class="addtocartdelete remove_btn"><i class="fal fa-trash-alt"></i></button>\
                </li>';
                })
                jQuery('.cart_items_list').html(allData);
                jQuery('.subTotal').text("$"+subTotal);
                var tax = (subTotal*(5/100));
                jQuery('.showVat').text("$"+tax);
                var dis = (subTotal*(20/100));
                jQuery('.dis').text("-"+"$"+dis);
                var total = ((subTotal+tax)-dis);
                jQuery('.grandTotal').text("$"+total);

            }

        })
    }


    jQuery(document).on("click",".addtocartdelete",function(){
       var id = jQuery(this).val();
       $.ajax({
        url:"/removecart/"+id,
        type:"GET",
        dataType:"JSON",
        success:function(response){
            jQuery('.msg').html("<div class='alert alert-danger' role='alert'>Cart Delete</div>");
            jQuery('.msg').fadeOut(2000);
            showcart();
        }
       })
    })

    // jQuery(document).on("click",".input_number_increment",function(){
    //     alert("OK");
    // })
    $("input").keyup(function(){
        alert("OK");
      });
   


})
