  <footer>
      <div class="nav-grid">
        <h6 class="centered">VanHorn Family</h6>
        <ul>
          <li class="line"><i class="icon-asterisk"></i> <?php echo anchor('Pages/van','VanHorn History', 'title="VanHorn"');?></li>
          <li class="line"><i class="icon-asterisk"></i> <?php echo anchor('Pages/vandna','VanHorn DNA', 'title="DNA"');?></li>
          <li class="line"><i class="icon-asterisk"></i> <a href="#">Linages</a></li>
          <li class="line"><i class="icon-asterisk"></i> <a href="#">Stories</a></li>
        </ul>
      </div>
      <div class="nav-grid">
        <h6 class="centered">Bostick Family</h6>
        <ul>
          <li class="line"><i class="icon-asterisk"></i> <?php echo anchor('Pages/bos','Bostick History');?></li>
          <li class="line"><i class="icon-asterisk"></i> <?php echo anchor('Pages/bosdna','Bostick DNA');?></li>
          <li class="line"><i class="icon-asterisk"></i> <a href="#">Linages</a></li>
          <li class="line"><i class="icon-asterisk"></i> <a href="#">Stories</a></li>
        </ul>
      </div>
      <div class="nav-grid">
        <h6 class="centered">General Links</h6>
        <ul>
          <li class="line"><i class="icon-home"></i><?php echo anchor("", "Home"); ?></li>
          <li class="line"><i class="icon-asterisk"></i> <?php echo anchor("checkin", "Log In"); ?></li>
          <li class="line"><i class="icon-asterisk"></i> <?php echo anchor("Pages/logout", "Log Out"); ?></li>
          <li class="line"><i class="icon-asterisk"></i> <a href="#">Stories</a></li>
        </ul>
      </div>

      <div class="nav-grid">
        <p class="small">&copy; <?php
           $fromYear = 2008;
           $thisYear = (int)date('Y');
           echo $fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : '');?> VanHorn Family.
         </p>
      </div>

  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-migrate-3.0.0.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
  <script src="<?php echo base_url('assets/js/functions.min.js');?>"></script>
  <script src="<?php echo base_url('assets/plugins/count.min.js');?>"></script>

</body>
</html>
