<body id="topdog">
 <header class="m-main">
    <h1 class="m-main--head"><?php echo $head;?></h1>
  </header>
<div class="container">
  <div class="flex-large">
  <nav>
<h3>Navigation</h3>
  <ul>
    <li><?php echo anchor("Pages/entry", "Post Entry"); ?></li>
    <li><?php echo anchor("Pages/post_up", "Post Update"); ?></li>
    <li><?php echo anchor("Pages/cities", "Cities Entry"); ?></li>
    <li><?php echo anchor("Checkin/logout", "Logout") ?></li>
    <li><?php echo anchor("Checkin/admin", "Admin Area") ?></li>
    <li><?php echo anchor("pages/family", "Family Entry") ?></li>
    <li><?php echo anchor("pages/lists", "Post Listing") ?></li>
    <li><?php echo anchor("", "Home"); ?></li>
    <li><?php echo anchor("pages/map", "Ancestoral Map"); ?></li>
  </ul>
</nav>
    <article>
      <?php
      if($this->session->userdata('name') == true){
          echo "Hello " .  $this->session->userdata('name');
      }?>
      <h3>Display of visitors to the site</h3>
      <p>
        This displays the last 20 visitors to the site
      </p>
      <!-- table here -->
      <!-- var regex = /\w+.(com|co\.kr|be)/ig; -->
      <?php
      foreach($visitor as $row)
      {
        // $subject = $row->addr;
        // $pattern = '/\w+.(com|net|co\.kr|be|uk|de|edu|us)/';
        // preg_match("/(?:.[a-z]+.[a-z]+.)\w+.(com|net|co\.kr|be|de|ua|ru|br|uk|cn|link|org|sc|pl)/", $subject, $matches);
        // $addr = $matches[0];
        $addr = gethostbyaddr($row->ip);
        $date = unix_to_human($row->date);
        $this->table->add_row(
          $date,
          $row->ip,
          $row->visits,
          $row->agent,
          $addr,
          $row->page,
          $row->region . " " . $row->country
        );
      }
      echo $this->table->generate();
       ?>
    </article>
  </div>
</div>
