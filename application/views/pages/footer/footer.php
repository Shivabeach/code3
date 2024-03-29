<footer id="bottom">
    <article class="footwrapper">
      <div class="m-nav-grid">
        <h4 class="m-nav-grid--title">VanHorn Family</h4>
        <ul class="m-nav-grid--center">

          <li class="m-nav-grid--listpad">
 <?php echo anchor('Pages/van','VanHorn History', 'title="VanHorn"');?></li>

          <li class="m-nav-grid--listpad"><?php echo anchor('Pages/vandna','VanHorn DNA', 'title="DNA"');?></li>

          <li class="m-nav-grid--listpad"><?php echo anchor('Pages/vanlinage','VanHorn Linages');?></li>

          <li class="m-nav-grid--listpad"><?php echo anchor('van/van_names','VanHorn Names');?></li>

          <li class="m-nav-grid--listpad"><?php echo anchor('pages/vtime','VanHorn Timeline');?></li>

          <li class="m-nav-grid--listpad"><?php echo anchor('pages/cousins','Shafer Family');?></li>

          <li class="m-nav-grid--listpad"><?php echo anchor('pages/admin','Admin');?></li>

        </ul>

      </div>

      <div class="m-nav-grid">
        <h4 class="m-nav-grid--title">Bostick Family</h4>
        <ul class="m-nav-grid--center">
          <li class="m-nav-grid--listpad"><?php echo anchor('Pages/bos','Bostick History');?></li>
          <li class="m-nav-grid--listpad"><?php echo anchor('Pages/bosdna','Bostick DNA');?></li>
          <li class="m-nav-grid--listpad"><?php echo anchor('Pages/boslinage','Bostick Linages');?></li>
          <li class="m-nav-grid--listpad"><?php echo anchor('van/bos_names','Bostick Names');?></li>
          <li class="m-nav-grid--listpad"><?php echo anchor('pages/btime','Bostick Timeline');?></li>
        </ul>
      </div>
      <a href="http://van-horn.us/pages/army"><span style="display: none;">zeal</span></a>
      <div class="m-nav-grid">
        <h4 class="m-nav-grid--title">General Links</h4>
        <ul class="m-nav-grid--center">
          <li class="m-nav-grid--listpad"><?php echo anchor("", "Home"); ?></li>
          <li class="m-nav-grid--listpad"><?php echo anchor("pages/map", "Ancestoral Map"); ?></li>
          <li class="m-nav-grid--listpad"><?php echo anchor("pages/notes", "Family Notes"); ?></li>
          <li class="m-nav-grid--listpad"><?php echo anchor("pages/relatives", "Family Connections"); ?>
          <li class="m-nav-grid--listpad"><?php echo anchor("pages/reading", "Reading Sources");?></li>
        </ul>
        <a href="http://van-horn.us/pages/army"><span style="display: none;">zeal</span></a>
      </div>
        <!-- <a href="http://van-horn.us/pages/army">italian-stuffy</a> -->
      <div class="m-nav-grid box20">
        <p class="small">&copy; <?php
           $fromYear = 2008;
           $thisYear = (int)date('Y');
           echo $fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : '');?> VanHorn Family.
         </p>
         <p>
           <a href="javascript:window.location.href=atob('<?= base64_encode("mailto:brad@van-horn.us?subject=Family%20Site") ?>')">E-Mail</a>

         </p>
         <p>Page loaded in {elapsed_time} seconds</p>
         <p><?php echo 'Revision <strong>' . CI_VERSION . '</strong>';?></p>
      </div>
      <span id="men"></span>
      </article>
  </footer>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
  <script async src="<?php echo base_url('assets/js/functions.js');?>"></script>
  <script async src="<?php echo base_url('assets/plugins/count.min.js');?>"></script>
  <script async src="<?php echo base_url('assets/plugins/vert/vertical-tabs.js');?>"></script>
</body>
</html>
