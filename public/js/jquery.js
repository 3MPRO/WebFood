$(document).ready(function(){
    console.log('hhahah');
    $('.search-box-action input[type="text"]').on("keyup input", function(){
        var inputVal= $(this).val();
        var resultDropdown= $(".search-results");
        if(inputVal.length){
            $.get("Views/backend-search.php", {term: inputVal}).done(function(data){
                resultDropdown.html(data);
                
            });
        }else{
            resultDropdown.empty();
        }
    });
    $(document).on("click", ".search-results p", function(){
        $(this).parents(".search-box-action").find('input[type="text"]').val($(this).text());
        $(this).parent(".search-results").empty();
    });


    $(".city").change(function() {
        var id = $(".city").val();
        $.post("Models/choose_city/data.php", {id: id}, function(data) {
            $(".huyen").html(data);
        })
    })
    $(".huyen").change(function() {
        var idHuyen = $(".huyen").val();
        $.post("Models/choose_city/ward.php",{idHuyen: idHuyen},function(data) {
            $(".xa").html(data);
        })
    })
    $(".xa").change(function() {
        var idXa = $(".xa").val();
        $.post("Models/choose_city/village.php",{idXa: idXa},function(data) {
            $(".thon").html(data);
        })
    })
});

/// edit infor
$(document).ready(function(){
    
    $('.name-login input[type="text"]').on("keyup input", function(){
        var inputVal = $(this).val();
        var result= $(".search-result");
       /// var result = $(this).siblings(".search-result");
        if(inputVal.length){
            console.log($(this).val());
            // console.log('con chim');
           // alert('da toi day');
          $.get("Views/backend-infor.php", {term: inputVal}).done(function(data){
            result.html(data);
        });
        }else{
            result.empty();
            console.log('con');
        }
    });
    $(document).on("click", ".search-result p", function(){
        $(this).parents(".name-login").find('input[type="text"]').val($(this).text());
        $(this).parent(".search-result").empty();
    });
    function ajaxFilter() {
        var listValue = JSON.parse(localStorage.getItem("listValuePrice"))
        var danhmuc = $("#danhmuc").text();
        var loai = $("input[type=text][name=loaisp]").val();
        console.log(loai);
        if(loai === undefined) {
            loai = 'null';
        }
        $.ajax({
            url: "Models/get_data_price.php",
            method: "POST",
            // dataType:"JSON",
            data: {listValue: listValue, danhmuc: danhmuc, loai: loai},
            success: function(data) {
                $('#product-list-main').html(data)
                console.log(data);
                // if(data!=null) {
                    $('.pagination').css("display", "none");
                // }
            }
        })
    }

    $('input.toggle__input').each(function (index, value) {
        console.log($(this));
        $(this).on('click',ajaxFilter);
    })

    $(".filter__remove").on('click',ajaxFilter);

    // $('.icon-heart-element').each(function() {
    //     // console.log($(this));
    //     $(this).on('click',function() {
    //         var id = $(this).data().heart
            
    //     });
    // })

    // function ajaxAddFavorite(id) {
    //     $.ajax({
    //         url: "View/favorite/favorite.php",
    //         method: "POST",
    //         data: {id: id},
    //         success: function(data) {
    //             $('#product-list-main').html(data)
    //         }
    //     })
    // }



    // rating 
    var star = 1; 
    $('.ratingResult').val(star);
    $('.star-nomal').each(function(i,element){
        
        $(this).click(function(){
            star = (i +1);
            $('.ratingResult').val(star);
            console.log(star);
            updateRating(star);
        })
    })
    function updateRating(a){
        $('.star-nomal').each(function(i,element){
            if(i+1 <= a){
                $(this).addClass("star-active");
            }
            else{
                $(this).removeClass("star-active");
            }
        })
    }

    // rating action 

    $(".btn-rating").click(function(){
        let ratingResult =  $('.ratingResult').val();
        let comment = $('.ratingComment').val();
        let MaHD = $('.rMaHD').val();
        let MaND = $('.rMaND').val();
        let MaSP = $('.rMaSP').val();
        $('.ratingComment').val("");
        $.ajax({
            url: "Models/ajaxRating.php",
            method: 'POST',
            data: {action: "ok",ratingResult:ratingResult,comment:comment,MaHD:MaHD,MaSP:MaSP,MaND:MaND},
            success: function(data) {
               $('.show-rating').html(data);
            //    loadrating();
            }
        })

    })
    function loadrating(){
        let totalStar = Number(document.getElementById('total-star').textContent)
        let overlayImg = document.querySelector('.rating-overlay__img')
        let leftPx = Math.ceil(((totalStar) / 5) * 120);
        console.log(leftPx);
        overlayImg.style.left = leftPx + 'px'
    }

});
// filter product 
function filterProduct(action,name, danhmuc) {
    var action = action
    var danhmuc = danhmuc
    var name = name
    var loai = $("input[type=text][name=loaisp]").val();
    var listValue = JSON.parse(localStorage.getItem("listValuePrice"))
    if(loai === undefined) {
        loai = 'null';
    }
    console.log(listValue);
    if(listValue.length === 0) {
        listValue = 'null';
        console.log(listValue);
    }
    console.log('da click');
    $.ajax({
        url: "Models/get_data.php",
        method: 'POST',
        data: {action: action,name: name, danhmuc: danhmuc,loai: loai,listValue:listValue},
        success: function(data) {
            $('#product-list-main').html(data)
            $('.pagination').css("display", "none");
        }
    })


  
}





// SELECT * 
// FROM danhmuc, loaisanpham, sanpham
// WHERE danhmuc.MaDM = loaisanpham.MaDM and sanpham.MaLSP = loaisanpham.MaLSP
// and danhmuc.TenDM = 'Bánh kẹo'
// ORDER BY TenSP ASC