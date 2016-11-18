<body>
  <?php
    $this->benchmark->mark('code_start');
   ?>
  <header>
    <h1> <?php echo $head ;?></h></h1>
  </header>
  <div class="container">
    <div class="flex1">
      <?php $this->load->view("nav/navigate");?>
    </div>
    <div class="flex-large">
      <article class="ancestry">
        <h2>Collections</h2>
        <p>This page is a collection of things that really dont fit any place else, or are not quite enough to make a story of.</p>
      </article>
      <article class="ancestry">
        <dl>
          <dt>The Hunt Family</dt>
            <dd>We know that Dad's mom was the daughter of George Hunt(b. 1865) and Alice Clay. However, the Hunt line stops at that point. We know nothing of the Hunts, including where they were from. I am going to assume it was England, but as we have no knowledge of them, I cant use them here. So for the purpose of linage, I use the Clay family as Dad's mothers ancestry. </dd>
          <dt></dt>
            <dd></dd>
          <dt></dt>
            <dd></dd>
          <dt></dt>
            <dd></dd>
          <dt></dt>
            <dd></dd>

        </dl>
      </article>
    </div>
    <div class="flex-small">
      <section class="wrapper">
          <?php include(APPPATH . "/views/pages/includes/side.php");  ?>


      </section>
    </div>
  </div>
  <?php
    $this->benchmark->mark('code_end');
   ?>
