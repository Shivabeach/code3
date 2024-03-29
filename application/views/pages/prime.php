<body id="prime">
  <header class="m-main">
    <h1 class="m-main--head">The Family</h1>
  </header>
    <div class="container">
      <div class="flex1">
        <?php $this->load->view("nav/navigate");?>
      </div>
      <div class="flex-large">
      <div class="ancestry--container">
        <article class="ancestry">
        <header>
          <h3 class="ancestry--ancestryTitle item">Family History</h3>
        </header>
          <div class="slug">
            <p>A short description of our DNA that covers the last 500 years</p>
          </div>
          <button class="grab">Read</button>
          <div class="ancestry--ancestryContent">
            <p> Where we are from in the last 500 years or so.
            <blockquote>
              <ul>
                <li>46% of our ancestry comes from Great Britain, with outliers from Scotland, France and the Netherlands</li>
                <li>20% comes from Scotland</li>
                <li>17% is from Sweden & Denmark.</li>
                <li>11% comes from Germanic Europe. Primarily located in: Germany, Switzerland
                <li>3% Comes from Wales</li>
                <li>2% comes from the Ireland.</li>
              </ul>
            </blockquote>
            <p>You may well ask how can there be bleed over from one area to the other. It is a good question. Remember, those of our English ancestors also had Scottish, French and Dutch ancestors themselves. We pick that up in our DNA. Our Caucasus DNA is slightly deeper and more on Mom's side than Dad's. Remember the path out of Africa passed through the middle east on their way to Europe, Mediterranean, Russia and beyond.</p>
            <p>
              Dad's family is much more on the side of Denmark, Germany, French, Netherlands and Sweden.
            </p>
            <p>Our deep ancestry is shown on the <?php echo $van;?> and <?php echo $bos;?> pages.</p>

            <h6 class="ancestry--ancestryDate">2/20/2016</h6>
        </div>
        </article>
        </div>
        <!-- from pages/index -->

        <?php
          foreach($mainContent as $row):?>
          <?php $content = htmlspecialchars_decode($row->content);?>
          <?php $slug = htmlspecialchars_decode($row->slug);?>
          <div class="ancestry--container">
          <article class="ancestry">
            <header>
              <h3 class="ancestry--ancestryTitle"><?php echo $row->title;?></h3>
            </header>
            <div class="slug">
              <?php echo  $this->typography->auto_typography($slug);?>
              <h5><?php echo $row->last_date;?></h5>
            </div>
            <button class="grab">Read</button>
            <div class="ancestry--ancestryContent">
              <?php echo $this->typography->auto_typography($content);?>
            </div>

        </article>
        </div>
      <?php endforeach;?>
          <?php echo $this->pagination->create_links();?>


      </div>

      <!-- <div class="flex-small">
        <section class="wrapper">
            <?php //include(APPPATH . "/views/pages/includes/side.php");  ?>
          <!-- <article>
            <?php
            //$user_ip = getenv('REMOTE_ADDR');
            // $geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));
            // $city = $geo["geoplugin_city"];
            // $region = $geo["geoplugin_regionName"];
            // $country = $geo["geoplugin_countryName"];
            // echo "City: ".$city."<br>";
            // echo "Region: ".$region."<br>";
            // echo "Country: ".$country."<br>";
            ?>
            <a class="lower" href="http://www.geoplugin.com/geolocation/" target="_new">IP Geolocation</a> by <a href="http://www.geoplugin.com/" target="_new">geoPlugin</a>
          </article> -->
        </section>

      </div>
    </div>
    <?php
      $this->benchmark->mark('code_end');
     ?>
