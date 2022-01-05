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
                
                let length = $("#product-list-main .col-product__item ").length
                let totals = Math.ceil(length/9)
                console.log(totals);
                let htmls = ''
                for (var i = 1; i <= totals; i++) {
                    htmls += `
                    <li class="page-item">
                    <a class="page-link" href="?act=product&cate=2&page=${i}">${i}</a></li>
                    `;
                }
                console.log(htmls);
                $('.pagination').html(htmls)
                console.log();
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
        }
    })
}


// SELECT * 
// FROM danhmuc, loaisanpham, sanpham
// WHERE danhmuc.MaDM = loaisanpham.MaDM and sanpham.MaLSP = loaisanpham.MaLSP
// and danhmuc.TenDM = 'Bánh kẹo'
// ORDER BY TenSP ASC