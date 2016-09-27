<body>
  <header>
    <h1><?php echo $head;?></h1>
  </header>
<div class="container">
  <div class="flex-large">
    <article>
      <h3>Display of visitors to the site</h3>
      <p>
        This displays the last 20 visitors to the site
      </p>
      <!-- table here -->
      <?php
      foreach($visitor as $row)
      {
        $this->table->add_row(
          $row->date,
          $row->ip,
          $row->visits,
          $row->agent,
          $row->platform,
          $row->region . "-" . $row->country
        );
      }
      echo $this->table->generate();
       ?>
    </article>
  </div>

<div class="flex-small">
  <?php
  if($this->session->userdata('name') == true){
      echo "Hello " .  $this->session->userdata('name');
  }?>
  <hr>
  <p>
  Results
  </p>
  <hr>
  <div id="display"></div>
  <hr>
  <?php $this->load->file(APPPATH . "/views/pages/includes/side1.php"); ?>
  </div>
</div>
