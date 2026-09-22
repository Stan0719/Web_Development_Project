<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Brew & Go - Home</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>

 <header class="parallaximage">
    <img src="Images/logob&g.png" alt="Brew and Go logo" class="logomain" />
    <h1 class="headertitle">Brew & Go.</h1>
</header>


<?php include 'navigationbar.php'; ?>


  <!-- Main Content -->
  <main class="index-main" id="main-content">
    <!-- Welcome part -->
    <section class="section-container" id="welcome-section">
      <h2>Welcome to Brew & Go.</h2>
      <p>Your daily dose of handcrafted coffee & cozy vibes, made fresh with love.</p>
    </section>
    <!-- What Are We -->
    <section class="section-container" id="about-section">
      <h2>What Are We?</h2>
      <p>Brew & Go is a local favorite for authentic coffee experiences, combining premium beans with artisan brewing and a welcoming community vibe.</p>
    </section>

    <!-- Meet the Team -->
    <section class="section-container" id="team-section">
      <h2>Meet the Team</h2>
      <div class="stan-team-row">
        <div class="stan-team-member">
          <div class="stan-card" id="owner-card">
            <div class="stan-front">
              <div class="stan-card-top">
                <p class="stan-card-top-para">Owner</p>
              </div>
              <p class="stan-photo"><img src="images/Boss.png" alt="Boss" /></p>
              <p class="stan-heading">Darryl</p>
            </div>
            <div class="stan-back">
              <p class="stan-heading">Connect With Me</p>
              <div class="stan-icons">
                <ul class="stan-wrapper">
                  <li class="stan-icon stan-facebook">
                    <span class="stan-tooltip">Facebook</span>
                    <div class="stan-icon-container">
                      <a href="https://www.facebook.com/profile.php?id=61554234958482&sk=about" target="_blank">
                        <img src="images/facebook.svg" alt="Facebook" />
                      </a>
                    </div>
                  </li>
                  <li class="stan-icon stan-instagram">
                    <span class="stan-tooltip">Instagram</span>
                    <div class="stan-icon-container">
                      <a href="https://www.instagram.com" target="_blank">
                        <img src="images/instagram.svg" alt="Instagram" />
                      </a>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="stan-team-member">
          <div class="stan-card">
            <div class="stan-front">
              <div class="stan-card-top">
                <p class="stan-card-top-para">Manager</p>
              </div>
              <p class="stan-photo"><img src="images/manager3.png" alt="Manager" /></p>
              <p class="stan-heading">Eddie</p>
            </div>
            <div class="stan-back">
              <p class="stan-heading">Connect With Me</p>
              <div class="stan-icons">
                <ul class="stan-wrapper">
                  <li class="stan-icon stan-facebook">
                    <span class="stan-tooltip">Facebook</span>
                    <div class="stan-icon-container">
                      <a href="https://www.facebook.com/profile.php?id=61554234958482&sk=about" target="_blank">
                        <img src="images/facebook.svg" alt="Facebook" />
                      </a>
                    </div>
                  </li>
                  <li class="stan-icon stan-instagram">
                    <span class="stan-tooltip">Instagram</span>
                    <div class="stan-icon-container">
                      <a href="https://www.instagram.com/eddiesu1212/" target="_blank">
                        <img src="images/instagram.svg" alt="Instagram" />
                      </a>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="stan-team-member">
          <div class="stan-card">
            <div class="stan-front">
              <div class="stan-card-top">
                <p class="stan-card-top-para">Assistant</p>
              </div>
              <p class="stan-photo"><img src="images/assistant.png" alt="Assistant" /></p>
              <p class="stan-heading">Jeniffer</p>
            </div>
            <div class="stan-back">
              <p class="stan-heading">Connect With Me</p>
              <div class="stan-icons">
                <ul class="stan-wrapper">
                  <li class="stan-icon stan-facebook">
                    <span class="stan-tooltip">Facebook</span>
                    <div class="stan-icon-container">
                      <a href="https://www.facebook.com/profile.php?id=61554234958482&sk=about" target="_blank">
                        <img src="images/facebook.svg" alt="Facebook" />
                      </a>
                    </div>
                  </li>
                  <li class="stan-icon stan-instagram">
                    <span class="stan-tooltip">Instagram</span>
                    <div class="stan-icon-container">
                      <a href="https://www.instagram.com/jenniferrccy/" target="_blank">
                        <img src="images/instagram.svg" alt="Instagram" />
                      </a>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Signature Brews -->
    <section class="section-container" id="bestsellers-section">
      <h2>Our Best Sellers</h2>
      <section class="stan-featured-drinks">
        <!-- Best Seller 1 -->
        <div class="stan-drink-card">
          <article>
            <a href="artisan2.php">
              <div class="stan-drink-box" id="matcha-box">
                <div class="stan-drink-image-wrapper">
                  <img src="images/top_seller/Matcha_Latte-removebg-preview.png" alt="Yuri Matcha">
                </div>
              </div>
              <h3 class="stan-drink-title"> 2nd<br>Yuri Matcha</h3>
            </a>
          </article>
        </div>

        <!-- Best Seller 2 -->
        <div class="stan-drink-card">
          <article>
            <a href="artisan2.php">
              <div class="stan-drink-box">
                <div class="stan-drink-image-wrapper">
                  <img src="images/top_seller/Vienna_latte-removebg-preview.png" alt="Vienna Latte">
                </div>
              </div>
              <h3 class="stan-drink-title"> 1st<br>Vienna Latte</h3>
            </a>
          </article>
        </div>

        <!-- Best Seller 3 -->
        <div class="stan-drink-card">
          <article>
            <a href="artisan2.php">
              <div class="stan-drink-box">
                <div class="stan-drink-image-wrapper">
                  <img src="images/top_seller/Butterscotch_latte_1-removebg-preview.png" alt="Butterscotch Latte">
                </div>
              </div>
              <h3 class="stan-drink-title"> 3rd<br>Butterscotch Latte</h3>
            </a>
          </article>
        </div>
      </section>
      <a href="product.php" class="stan-menu-link">View Menu</a>
    </section>

    <!-- Activities -->
    <section class="section-container" id="activities-section">
      <h2>Activities</h2>
      <div class="activities-container">
        <div class="activity-card">
          <div class="activity-icon">🕰️</div>
          <h3>Past Activities</h3>
          <p>Christmas Dreamville, Kongsi Raya Pop-up and more!</p>
          <a href="Pass_Activities.php" class="activity-link">Learn More</a>
        </div>
        <div class="activity-card">
          <div class="activity-icon">🔥</div>
          <h3>Current Activities</h3>
          <p>Mini Seni Kita: Open haus</p>
          <a href="Current.php" class="activity-link">Learn More</a>
        </div>
        <div class="activity-card">
          <div class="activity-icon">🔮</div>
          <h3>Upcoming Activities</h3>
          <p>Mini Seni Kita: Open haus</p>
          <a href="Coming_Soon.php" class="activity-link">Learn More</a>
        </div>
      </div>
    </section>

    <!-- Promotions and News -->
    <section class="section-container" id="promotions-section">
      <h2>Promotions and News</h2>
      <p>Check out our new or upcoming promo and news in our Socials!</p>
      <div class="promocard">
        <a href="https://www.instagram.com/brewngo.coffee/" target="_blank" class="socialContainer containerOne">
          <img src="images/instagram.svg" alt="Instagram" class="socialIcon" />
        </a>
        <a href="https://www.tiktok.com/@brewngo.coffee" target="_blank" class="socialContainer containerTwo">
          <img src="images/titkok.svg" alt="TikTok" class="socialIcon" />
        </a>
        <a href="https://www.facebook.com/people/Brew-Go-Coffee/61554234958482/" target="_blank" class="socialContainer containerThree">
          <img src="images/facebook.svg" alt="Facebook" class="socialIcon" />
        </a>
        <a href="https://wa.link/20yrgu" target="_blank" class="socialContainer containerFour">
          <img src="images/whatsapp.svg" alt="WhatsApp" class="socialIcon" />
        </a>
      </div>
    </section>

    <!-- Our Locations -->
    <section class="section-container" id="locations-section">
      <h2>Our Locations</h2>
      <div class="location-wrapper">
        <div class="location-card">
          <h3>Main Branch</h3>
          <p>📍<a href="https://maps.app.goo.gl/Vxwd9Z1CpmXjLUme7">Onejaya Shopping Complex, Kuching</a></p>
          <p>📞 <a href="tel:+601116531886">+60 11-1653 1886</a></p>
        </div>
        <div class="location-card">
          <h3>Sub Branch</h3>
          <p>📍<a href="https://maps.app.goo.gl/H5fonQmqZP8jsLKP8">Plaza Merdeka Level 1, Kuching</a></p>
          <p>📞 <a href="tel:+601116531886">+60 11-1653 1886</a></p>
        </div>
      </div>
    </section>
  </main>

  <footer><?php include 'footer.php'; ?></footer>

</body>
</html>