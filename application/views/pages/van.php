<body>
  <header>
    <h1><?php echo $head;?></h1>
  </header>
<div class="container">
  <div class="flex-large">
    <?php $this->load->view("nav/vanhorn_nav");?>

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione iste necessitatibus at sed sunt. Culpa error, illo tenetur qui quaerat!</p>
  </div>
  <div class="flex-small">
    <?php include("nav.php");
    echo current_url();
    ?>
  </div>
