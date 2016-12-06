<body>
  <header>
    <h1> <?php echo $head ;?></h></h1>
  </header>
  <div class="container">
    <div class="flex1">
      <?php $this->load->view("nav/navigate");?>
    </div>
    <div class="flex-large">
      
    </div>
    <div class="flex-small">
      <section class="wrapper">
          <?php include(APPPATH . "/views/pages/includes/side.php");  ?>
      </section>
    </div>
  </div>
