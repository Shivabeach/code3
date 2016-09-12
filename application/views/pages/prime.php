  <body>
    <header>
      <h1>The Family's Story</h1>
    </header>
    <div class="container">
      <div class="flex-large">
        <article class="ancestry">
          <h2 class="ancestryTitle item">Family History</h2>
          <button class="grab">Read More</button>
          <div class="ancestryContent item">
            <p> Where we are from in the last 500 years or so!
        <blockquote>
          <ul>
            <li>65% of our ancestry comes from Great Britain, with outliers from Scotland, France and the Netherlands</li>
            <li>14% is from Western Europe. Germany, France, Netherlands, Austria and Switzerland.</li>
            <li>10% Comes from Scandinavia. Sweden, Norway, Denmark and just a wee bit of Finland</li>
            <li>6% comes from Ireland</li>
            <li>2% Comes from Spain and the local Mediterranean areas</li>
            <li>2% comes from the Caucasus areas. That would be Turkey, Iran, Iraq, Turkmenistan, and Afghanistan.</li>
          </ul>
        </blockquote>

        <p>You may well ask how can there be bleed over from one area to the other. It is a good question. Remember, those of our English ancestors also had Scottish, French and Dutch ancestors themselves. We pick that up in our DNA. Our Caucasus DNA is slightly deeper and more on Mom's side than Dad's. Remember the path out of Africa passed through the middle east on their way to Europe, Mediterranean, Russia and beyond.</p>
        <p>Our deep ancestry is shown on the VanHorn and Bostick pages.</p>
          </div>
          <h6 class="ancestryDate">2/20/2016</h6>
        </article>
            <?php foreach($mainContent as $row):?>
              <?php $content = htmlspecialchars_decode($row->content);?>
              <?php $slug = htmlspecialchars_decode($row->slug);?>
              <article class="ancestry">
                <h2 class="ancestryTitle item"><?php echo html_escape($row->title);?></h2>
                <?php echo $slug;?>
                <div class="ancestryContent item"><?php echo $this->typography->auto_typography($content);?> </div>
                <h6 class="ancestryDate"><?php echo "Creation " . html_escape($row->date), nbs(5), "Last Updated " . html_escape($row->last_date);?></h6>
            </article>
          <?php endforeach;?>
          <?php echo $this->pagination->create_links();?>
          <div class="bookmarks">
            <ul>
              <li> <sup> 1 </sup><a href="http://www.ncbi.nlm.nih.gov/pubmed/22096215" rel="external">The Expansion of mtDNA Haplogroup L3 within and out of Africa.</a></li>
              <li></li>
            </ul>
          </div>
      </div>
      <div class="flex-small">
        <?php include(APPPATH . "/views/pages/includes/side.php"); ?>
      </div>
  </div>
