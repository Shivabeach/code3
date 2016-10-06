  <header>
      <h1><?php echo $head;?></h1>
    </header>
  <div class="container">
    <div class="flex-large">
      <article id="tabs">
      <ul>
        <li><a href="#tabs-1">William Talmadge</a></li>
        <li><a href="#tabs-2">VanHorn</a></li>
        <li><a href="#tabs-3">Peter Pelton</a></li>
        <li><a href="#tabs-4">Nathaniel Wheeler</a></li>
      </ul>
      <article id="tabs-1">
        <h3>William Talmadge</h3>
        <?php include("talmadge.html");?>
      </article>
      <article id="tabs-2">
        <h3>Matthys Corneliussen </h3>
        <?php include("vanhorn.html");?>
      </article>
      <article id="tabs-3">
        <h3>Peter Pelton</h3>
        <?php include("pelton.html");?>
      </article>
      <article id="tabs-4">
        <h3>Nathaniel Wheeler</h3>
        <?php include("wheeler1.html");?>
      </article>


    </article> <!-- end of tabs -->
    </div> <!--end of left flex -->
    <!-- right hand side -->
    <div class="flex-small">
      <section class="wrapper">
        <article>
          <?php $this->load->file(APPPATH . "/views/pages/includes/side.php");?>
        </article>
      </section>
    </div>
  </div>
