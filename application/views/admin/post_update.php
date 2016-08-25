<body>
  <header>
    <h1><?php echo $head;?></h1>
  </header>
<div class="container">
  <div class="flex-large">
  <?php include("update.php");?>
  </div>
  <div class="flex-small">
    <?php
    echo current_url();
    $this->load->file(APPPATH . "/views/pages/includes/side1.php");
    ?>
    <div id="display"></div>

  </div>
</div>
