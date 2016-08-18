<body>
  <header>
    <h1><?php echo $head;?></h1>
  </header>
<div class="container">
  <div class="flex-large">
    <h3>Register or log in</h3>
    <fieldset>
      <legend>Login</legend>
      <?php
        
      ?>


    </fieldset>
  </div>
  <div class="flex-small">
    <?php
    echo current_url();
    $this->load->file(APPPATH . "/views/pages/includes/side1.php");
    ?>
  </div>
</div>
