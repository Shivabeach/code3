  <footer>
      <div class="nav-grid box1">
        <h6 class="centered">VanHorn Family</h6>
        <ul>
          <li class="line"><?php echo anchor('Pages/van','VanHorn History', 'title="VanHorn"');?></li>
          <li class="line"><?php echo anchor('Pages/vandna','VanHorn DNA', 'title="DNA"');?></li>
          <li class="line"><a href="#">Linages</a></li>
          <li class="line"><a href="#">Stories</a></li>
        </ul>
      </div>
      <div class="nav-grid box2">
        <h6 class="centered">Bostick Family</h6>
        <ul>
          <li class="line"><?php echo anchor('Pages/bos','Bostick History');?></li>
          <li class="line"><a href="#">DNA</a></li>
          <li class="line"><a href="#">Linages</a></li>
          <li class="line"><a href="#">Stories</a></li>
        </ul>
      </div>
      <div class="nav-grid box3">
        <h6 class="centered">General Links</h6>
        <ul>
          <li class="line"><?php echo anchor("", "Home"); ?></li>
          <li class="line"><?php echo anchor("Pages/entry", "Entry"); ?></li>
          <li class="line"><?php echo anchor("Pages/post_up", "Update"); ?></li>
          <li class="line"><?php echo anchor("Pages/cities", "Cities"); ?></li>
          <li class="line"><a href="#">Stories</a></li>
        </ul>
      </div>

      <div class="nav-grid box5">
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

</body>
</html>
