<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruity Fresh</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./public/css/main.css">
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="./public/css/reset.css">
    <link rel="stylesheet" href="./public/css/product.css">
    <link rel="stylesheet" href="./public/css/login.css">
</head>
<body>
    <?php
    require_once("footer_header/header.php");
    ?>
     <?php
     //điều hướng
    require_once("navigation.php");
    ?>
   <?php
     require_once("footer_header/footer.php");
    ?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./public/lib/owl.carousel.min.js"></script>
    <script>
        $('#owl-slider-dry').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:5
                }
            }
        })
    </script>
    <script src="./public/js/main.js"></script>
    <script>
        var $sliderBanner = $('.slider-list')
        $sliderBanner.owlCarousel({
            margin:10,
            loop: true,
            nav:true,
            responsive:{
                1000:{
                    items:1
                }
            }
    });
    </script>
</body>
</html>