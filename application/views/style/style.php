<body>
  <header>
    <h1><?php echo $head;?></h1>
  </header>
<div class="container">
  <div class="flex1">
    <?php $this->load->view("nav/navigate");?>
  </div>
  <div class="flex-large">
    <div class="box box1">Kular2</div>
    <div class="box box2">Kular3</div>
    <div class="box box3">Kular4</div>
    <div class="box box4">Kular5</div>
    <div class="box box5">Kular6</div>
    <div class="box box6">Kular7</div>
    <div class="box box7">Kular10</div>
  </div>
  <div class="flex-small">
    <section class="wrapper">
      <?php include(APPPATH . "/views/pages/includes/side.php"); ?>
    </section>
  </div>
</div>
