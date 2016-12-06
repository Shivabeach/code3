
  <footer>
      <div class="nav-grid">
        <h6 class="centered">VanHorn Family</h6>
        <ul>
          <li class="line"><i class="fa fa-link" aria-hidden="true"></i>
 <?php echo anchor('Pages/van','VanHorn History', 'title="VanHorn"');?></li>
          <li class="line"><i class="fa fa-link" aria-hidden="true"></i>
 <?php echo anchor('Pages/vandna','VanHorn DNA', 'title="DNA"');?></li>
          <li class="line"><i class="fa fa-link" aria-hidden="true"></i>
 <?php echo anchor('Pages/vanlinage','VanHorn Linages');?></li>
          <li class="line"><i class="fa fa-link" aria-hidden="true"></i>
 <a href="#">Stories</a></li>
        </ul>
      </div>
      <div class="nav-grid">
        <h6 class="centered">Bostick Family</h6>
        <ul>
          <li class="line"><i class="fa fa-link"></i>
 <?php echo anchor('Pages/bos','Bostick History');?></li>
          <li class="line"><i class="fa fa-link"></i>
 <?php echo anchor('Pages/bosdna','Bostick DNA');?></li>
          <li class="line"><i class="fa fa-link" aria-hidden="true"></i>
 <?php echo anchor('Pages/boslinage','Bostick Linages');?></li>
          <li class="line"><i class="fa fa-link" aria-hidden="true"></i>
 <a href="#">Stories</a></li>
        </ul>
      </div>
      <div class="nav-grid">
        <h6 class="centered">General Links</h6>
        <ul>
          <li class="line"><i class="fa fa-home" aria-hidden="true"></i>
 <?php echo anchor("", "Home"); ?></li>
          <li class="line"><i class="fa fa-link" aria-hidden="true"></i>
 <?php echo anchor("pages/map", "Ancestoral Map"); ?></li>
          <li class="line"><i class="fa fa-link" aria-hidden="true"></i>
 <?php echo anchor("checkin", "Log In"); ?></li>
          <li class="line"><i class="fa fa-link" aria-hidden="true"></i>
            <?php echo anchor("pages/notes", "Family Notes"); ?></li>
          <li><i class="fa fa-link" aria-hidden="true"></i>
            <?php echo anchor("pages/relatives", "Family Connections"); ?>
          </li>
        </ul>
        <a href="http://van-horn.us/pages/army"><span style="display: none;">zeal</span></a>
      </div>

      <div class="nav-grid box20">
        <p class="small">&copy; <?php
           $fromYear = 2008;
           $thisYear = (int)date('Y');
           echo $fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : '');?> VanHorn Family.
         </p>
         <p>
           Mail to: <a href="mailto:&#98;&#114;&#97;&#100;&#64;&#118;&#97;&#110;&#45;&#104;&#111;&#114;&#110;&#46;&#117;&#115;">&#98;&#114;&#97;&#100;&#64;&#118;&#97;&#110;&#45;&#104;&#111;&#114;&#110;&#46;&#117;&#115;</a>
         </p>
         <p>Page loaded in {elapsed_time} seconds</p>
      </div>
      <span id="men"></span>
  </footer>
  <!-- <script src="<?php echo base_url('bower_components/jquery/dist/jquery.min.js');?>"></script> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-migrate-3.0.0.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
  <script src="<?php echo base_url('assets/js/functions.js');?>"></script>
  <script src="<?php echo base_url('assets/plugins/count.min.js');?>"></script>
  <script src="<?php echo base_url('assets/plugins/vert/vertical-tabs.js');?>"></script>
<?php //echo $this->benchmark->elapsed_time('code_start', 'code_end');?>
<!--<br> -->
<?php //echo $this->benchmark->elapsed_time();?>
</body>
</html>
