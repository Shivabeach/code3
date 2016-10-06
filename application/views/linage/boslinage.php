  <header>
      <h1><?php echo $head;?></h1>
    </header>
  <div class="container">
    <div class="flex-large">
      <article id="tabs">
      <ul>
        <li><a href="#tabs-1">William Stark</a></li>
        <li><a href="#tabs-2">Ephraim Wheeler</a></li>
        <li><a href="#tabs-3">Robert Pease</a></li>
      </ul>
        <!-- vertical plugin https://github.com/tjvantoll/jquery-ui-vertical-tabs -->
    <article id="tabs-1">
      <h3>William Dulluttur Stark</h3>
      <?php include("WilliamStark.html");?>
    </article>
    <article id="tabs-2">
      <h3>Ephraim Wheeler</h3>
      <?php include("wheeler.html");?>
    </article>
    <article id="tabs-3">
      <h3>Robert Pease</h3>
      <?php include("robertpease.html");?>
    </article>
    </article>
    </div>
    <!-- right hand side -->
    <div class="flex-small">
      <section class="wrapper">
        <article>
          <?php $this->load->file(APPPATH . "/views/pages/includes/side.php");?>
        </article>  
      </section>
    </div>
  </div>
