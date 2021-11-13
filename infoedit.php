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
    <link rel="stylesheet" href="lib/owl.carousel.min.css">
    <link rel="stylesheet" href="lib/owl.theme.default.min.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/product.css">
    <link rel="stylesheet" href="./css/login.css">
</head>

<body>
    <div class="wrapper">
    <?php include('./header.php'); ?>
      
        <section id ="main">
            <div class="container ">
                <div class="break-crumb">
                    <div class="break-crumb__head">
                        <div class="home">
                            <a href="#">
                                <span>Trang chủ</span>
                            </a>
                                <span class="mr_lr">&nbsp;/ &nbsp;</span>
                        </div>
                        <div>
                            <strong>
                                <span>Chỉnh sửa thông tin</span>
                            </strong>
                        </div>
                    </div>
                </div>
                <div class="container-infor">
                    
                    <form action=".">
                        <label class="container-infor__title" >Thông Tin Tài Khoản</label>
                        <h2 class ="container-infor__name">Khách hàng: <span>Phạm Văn Thiên</span></h2>
                        <fieldset class="container-infor__item">
                            <label>Tên Đăng nhập</label>
                            <span class="required">*</span>
                            <input type="text" class="form-control form-control-lg" placeholder=""/>
                        </fieldset>
    
                        <fieldset class="container-infor__item">
                            <label>Họ và tên </label>
                            <span class="required">*</span>
                            <input type="text" class="form-control form-control-lg" placeholder=""/>
                        </fieldset>
    
                        <fieldset class="container-infor__item">
                            <label>Số điện thoại </label>
                            <span class="required">*</span>
                            <input type="tel" class="form-control form-control-lg" placeholder=""/>
                        </fieldset>
    
                        <fieldset class="container-infor__item">
                            <label>Địa chỉ </label>
                            <span class="required">*</span>
                            <input type="email" class="form-control form-control-lg" placeholder=""/>
                        </fieldset>
    
                        <div class="container-infor__item">
                            <input class="btn-edit" type="submit" value="Cập Nhật">
                        </div>
                       
                    </form>
                </div>
               
            </div>
        </section>
        <?php include('./footer.php'); ?>
    </div>
</body>

</html>