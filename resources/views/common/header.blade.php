<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/9b8a1ac6f7.js"></script>
    <title>Freelancing portal</title>
</head>
<body>
    
<div class="wrapper" style="z-index: 1; ">
    <nav>
      <input type="checkbox" id="show-search">
      <input type="checkbox" id="show-menu">
      <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
      <div class="content">
      <div class="logo"><a href="#">FREELANCING</a></div>
        <ul class="links">
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li>
            <a href="#" class="desktop-link">Features</a>
            <input type="checkbox" id="show-features">
            <label for="show-features">Features</label>
            <ul>
              <li><a href="#">Drop Menu 1</a></li>
              <li><a href="#">Drop Menu 2</a></li>
              <li><a href="#">Drop Menu 3</a></li>
              <li><a href="#">Drop Menu 4</a></li>
            </ul>
          </li>
          <li>
            <a href="#" class="desktop-link">Services</a>
            <input type="checkbox" id="show-services">
            <label for="show-services">Services</label>
            <ul>
              <li><a href="#">Drop Menu 1</a></li>
              <li><a href="#">Drop Menu 2</a></li>
              <li><a href="#">Drop Menu 3</a></li>
              <li>
                <a href="#" class="desktop-link">More Items</a>
                <input type="checkbox" id="show-items">
                <label for="show-items">More Items</label>
                <ul>
                  <li><a href="#">Sub Menu 1</a></li>
                  <li><a href="#">Sub Menu 2</a></li>
                  <li><a href="#">Sub Menu 3</a></li>
                </ul>
              </li>
            </ul>
          </li>
   
        </ul>
      </div>
      <label for="show-search" class="search-icon"><i class="fas fa-search"></i></label>
      <form action="#" class="search-box">
        <input type="text" placeholder="Type Something to Search..." required>
        <button type="submit" class="go-icon"><i class="fas fa-long-arrow-alt-right"></i></button>
      </form>
    </nav>
  </div>