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
          $row->page,
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
  <?php
    $attr = [
      'id' => 'ajax1',
      'method' =>'get'
    ];
    echo form_open("forms/abuseip", $attr);
    $attr1 = [
      'id'          => 'ip',
      'name'        => 'ip',
      'placeholder' => 'IP'
    ];
    echo form_input($attr1);
    echo form_submit("Submit", "Submit");
  ?>
  <hr>
  <div id="display"></div>
  <hr>
  <?php $this->load->file(APPPATH . "/views/pages/includes/side1.php"); ?>

</div>
</div>
