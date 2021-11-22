$(document).ready(function(){
    console.log('hhahah');
    $('.search-box-action input[type="text"]').on("keyup input", function(){
        var inputVal= $(this).val();
        var resultDropdown= $(".search-results");
        console.log(resultDropdown);
        if(inputVal.length){
            $.get("Views/backend-search.php", {term: inputVal}).done(function(data){
                console.log(resultDropdown);
                resultDropdown.html(data);
                console.log('vap data',data);
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