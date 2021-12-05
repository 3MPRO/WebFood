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
});

///
$(document).ready(function(){
    
    $('.name-login input[type="text"]').on("keyup input", function(){
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".search-result");
        if(inputVal.length){
            console.log('con chim');
            $.get("./Views/backend-infor.php",{term: inputVal}).done(function(data){
                resultDropdown.html(data);
            });
        }else{
            resultDropdown.empty();
        }
    });
    $(document).on("click", ".search-result p", function(){
        $(this).parents(".name-login").find('input[type="text"]').val($(this).text());
        $(this).parent(".search-result").empty();
    });
});
// filter product 
function filterProduct(action,name, danhmuc) {
    var action = action
    var danhmuc = danhmuc
    var name = name
    $.ajax({
        url: "Models/get_data.php",
        method: 'POST',
        data: {action: action,name: name, danhmuc: danhmuc},
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