<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"/>
    
    <link rel="stylesheet" href="public/css/admin.css">
   
</head>
<body>
<!-- Bar -->
<nav class="navbar">
    <!-- Search -->
  <div class="header__search">
    <form action="">
      <span class="input-group">
        <button class="search-submit" type="button">
          <img src="https://img.icons8.com/material-outlined/24/000000/search--v1.png"/>
        </button>
      </span>
      <input type="text" placeholder="Tìm kiếm ..." class="search-text-product">
    </form>
    <div class="result__box">
      <div class="search-results">
                                            
      </div>
    </div>
  </div>

  <div class="navbar_right">
    <ul class="navbar_nav">
      <li class="nav-item"></li>
      <li class="nav-item"></li>
      <li class="nav-item"></li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <span>admin</span>
          <i class="far fa-user-circle"></i>
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">
            <i class="fas fa-user"></i>Hồ sơ 
          </a>
          <a class="dropdown-item" href="#">
            <i class="fas fa-sign-out-alt"></i>Đăng xuất 
          </a>
        </div>
      </li>
    </ul>
  </div>
</nav>
</body>
</html>