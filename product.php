<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Brew & Go. Coffee Menu</title>
  <link rel="stylesheet" href="style.css">
</head>
<body class="main-body">

  <!-- Back to Homepage Button -->
  <a href="index.php" class="back-home-btn">Back to Homepage</a>

  <!-- Logo -->
  <img src="Images/logob&g.png" alt="Brew & Go Logo" class="logo">

  <div class="main-menu">
    <h1 class="menu-title" id="coffee-menu">Brew & Go. Coffee Menu ☕</h1>

    <section class="menu-title-section">
      <h2>"Signature Brews"</h2>
    </section>

    <div class="signature-brews" id="signature-brews-part">
      <!-- Best Seller 1 -->
      <div class="best-seller-floating-box">
        <article>
          <a href="artisan2.php">
            <div class="box">
              <div class="image-container">
                <img src="images/top_seller/Matcha_Latte-removebg-preview.png" alt="Yuri Matcha">
              </div>
            </div>
            <h3 class="top-seller"> 2nd<br>Yuri Matcha</h3>
          </a>
        </article>
      </div>

      <!-- Best Seller 2 -->
      <div class="best-seller-floating-box">
        <article>
          <a href="artisan2.php">
            <div class="box">
              <div class="image-container">
                <img src="images/top_seller/Vienna_latte-removebg-preview.png" alt="Vienna Latte">
              </div>
            </div>
            <h3 class="top-seller"> 1st<br>Vienna Latte</h3>
          </a>
        </article>
      </div>

      <!-- Best Seller 3 -->
      <div class="best-seller-floating-box">
        <article>
          <a href="artisan2.php">
            <div class="box">
              <div class="image-container">
                <img src="images/top_seller/Butterscotch_latte_1-removebg-preview.png" alt="Butterscotch Latte">
              </div>
            </div>
            <h3 class="top-seller"> 3rd<br>Butterscotch Latte</h3>
          </a>
        </article>
      </div>
    </div>

    <!-- Slider -->
    <section class="slider-section" id="slider-section-part">
      <div class="wrapper">
        <div class="container">
          <div class="card card1">
            <div class="row">
              <div class="icon">1</div>
              <div class="description">
                <a href="basic1.php"><h3>Basic Brew</h3></a>
              </div>
              <div class="description-wrapper">
                <p>Simple yet delicious coffee</p>
              </div>
            </div>
          </div>
      
          <div class="card card2">
            <div class="row">
              <div class="icon">2</div>
              <div class="description">
                <a href="artisan2.php"><h3>Artisan Brew</h3></a>
              </div>
              <div class="description-wrapper">
                <p>Crafted for coffee lovers</p>
              </div>
            </div>
          </div>
      
          <div class="card card3">
            <div class="row">
              <div class="icon">3</div>
              <div class="description">
                <a href="non3.php"><h3>Non-Coffee</h3></a>
              </div>
              <div class="description-wrapper">
                <p>Refreshing alternatives</p>
              </div>
            </div>
          </div>
      
          <div class="card card4">
            <div class="row">
              <div class="icon">4</div>
              <div class="description">
                <a href="hot4.php"><h3>Hot Beverages</h3></a>
              </div>
              <div class="description-wrapper">
                <p>Warm and comforting drinks</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</body>
</html>