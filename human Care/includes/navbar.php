  <header class="navigation-bar">

    <span id="manu-bar"  class="fa-solid fa-bars" ></span>

    <div class="logo"><img src="abt-imges/hptl-web-icon.png" alt="">Human Care</div>

    <div class="nav-bar">
      <ul class="nav-items">
        <a href="index.php"><li <?php echo (isset($activePage) && $activePage == 'home') ? 'id="page-number"' : ''; ?>>HOME</li></a>
        <a href="abt.php"><li <?php echo (isset($activePage) && $activePage == 'about') ? 'id="page-number"' : ''; ?>>ABOUT US</li></a>
        <li>
          <div class="dropdown">
            <button class="menu-btn">OUR SECTIONS</button>
            <div class="menu-content">
              <a href="O-S-H.php">Our Services & Help</a>
              <a href="meet-doc.php">Meet Our Doctors</a>
            </div>
          </div></li>
        <a href="O-DPT.php"><li <?php echo (isset($activePage) && $activePage == 'department') ? 'id="page-number"' : ''; ?>>OUR DEPARTMENT</li></a>
        <a href="M-K-P.php"><li><button class="apo-btn">Make an Apointment</button></li></a>

        <div class="logos" id="for-rispns">
          <span id="fb-lgo" class="fa-brands fa-square-facebook" ></span>
          <span id="gle-lgo" class="fa-brands fa-google" ></span>
          <span id="tw-lgo" class="fa-brands fa-twitter" ></span>
        </div>

      </ul>
    </div>
  </header>
