<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Explore a variety of brews at Basic Brew with our delicious coffee menu. Find your perfect drink today!">
    <title>Basic Brew</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>


	<!-- Header -->
 <header class="parallaximage">
    <img src="Images/logob&g.png" alt="Brew and Go logo" class="logomain" />
    <h1 class="headertitle">Brew & Go.</h1>
</header>
  

   
  <?php include 'navigationbar.php'; ?>


<main class="index-main">
<body class="body-class">
    <!-- Title Section -->
    <section class="title-section">
        <div class="title-box">
            <h1 id="top">Basic Brew</h1>
        </div>
    </section>

    <!-- Drinks Section -->
    <section class="drinks" id="drinks-part">
        <div class="drinks-row">
            <figure class="drink_container">
                <img src="images/basic/americano.jpg" alt="Americano">
                <div class="caption">
                    <dl>
                        <dt>NP:</dt>
                        <dd>RM 10.90</dd>
                        <dt>MP:</dt>
                        <dd>RM 8.90</dd>
                    </dl>
                </div>
                <figcaption class="drink-name">Americano</figcaption>
            </figure>

            <figure class="drink_container">
                <img src="images/basic/latte.jpg" alt="Latte">
                <div class="caption">
                    <dl>
                        <dt>NP:</dt>
                        <dd>RM 12.90</dd>
                        <dt>MP:</dt>
                        <dd>RM 10.90</dd>
                    </dl>
                </div>
                <figcaption class="drink-name">Latte</figcaption>
            </figure>

            <figure class="drink_container">
                <img src="images/basic/cappuccino.jpg" alt="Cappuccino">
                <div class="caption">
                    <dl>
                        <dt>NP:</dt>
                        <dd>RM 13.90</dd>
                        <dt>MP:</dt>
                        <dd>RM 11.90</dd>
                    </dl>
                </div>
                <figcaption class="drink-name">Cappuccino</figcaption>
            </figure>

            <figure class="drink_container">
                <img src="images/basic/Aerocano.jpg" alt="Aerocano">
                <div class="caption">
                    <dl>
                        <dt>NP:</dt>
                        <dd>RM 12.90</dd>
                        <dt>MP:</dt>
                        <dd>RM 10.90</dd>
                    </dl>
                </div>
                <figcaption class="drink-name">Aerocano</figcaption>
            </figure>

            <figure class="drink_container">
                <img src="images/basic/Aero_latte.jpg" alt="Aero-latte">
                <div class="caption">
                    <dl>
                        <dt>NP:</dt>
                        <dd>RM 14.90</dd>
                        <dt>MP:</dt>
                        <dd>RM 12.90</dd>
                    </dl>
                </div>
                <figcaption class="drink-name">Aero-latte</figcaption>
            </figure>
        </div>

        <!-- "Enjoy Your Favorite Brew" Box -->
        <section class="box-container" id="list-part">
            <h2>Enjoy Your Favourite Brew</h2>
            <ol>
                <li>Explore our menu and find your perfect drink.</li>
                <li>Experience the smooth and comforting taste of our classic brew, perfect for any time of the day.</li>
                <li>
                    For more treats and deals, do visit our 
                    <span class="example-2" id="icon-part">
                      <span class="icon-content">
                        <span class="tooltip">Instagram</span>
                        <a href="https://www.instagram.com/brewngo.coffee" target="_blank" aria-label="Instagram" data-social="instagram">
                          <span class="filled"></span>
                          <i class="fab fa-instagram"></i>
                        </a>
                      </span>
                  
                      <span>or</span>
                  
                      <span class="icon-content">
                        <span class="tooltip">WhatsApp</span>
                        <a href="https://wa.me/601116531886" target="_blank" aria-label="WhatsApp" data-social="whatsapp">
                          <span class="filled"></span>
                          <i class="fab fa-whatsapp"></i>
                        </a>
                      </span>
                  
                      <span>.</span>
                    </span>
                  </li>
                  
                                    
            </ol>
        </section>
        
    </section>
    

    <!-- Bottom Navigation Bar -->
    <aside class="bottom-nav" id="navigation-part">
        <a href="product.php" class="nav-link">← Back</a>
      
        <a href="#top" class="button back-to-top-btn" aria-label="Back to Top">
          <svg class="svgIcon" viewBox="0 0 384 512">
            <path
              d="M214.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 141.2V448c0 17.7 14.3 32 32 32s32-14.3 32-32V141.2L329.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160z"
            ></path>
          </svg>
        </a>
      
        <a href="artisan2.php" class="nav-link">Next →</a>
    </aside>
  </main>
  <footer><?php include 'footer.php'; ?></footer>

</body>
</html>
    
