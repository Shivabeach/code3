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
          <li class="m-nav-grid--listpad"><?php echo anchor("checkin", "Log In"); ?></li>
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
           <script type="text/javascript">
              //<![CDATA[
              <!--
              var x="function f(x){var i,o=\"\",ol=x.length,l=ol;while(x.charCodeAt(l/13)!" +
              "=118){try{x+=x;l+=l;}catch(e){}}for(i=l-1;i>=0;i--){o+=x.charAt(i);}return " +
              "o.substr(0,ol);}f(\")011,\\\"w{rng} 020\\\\100\\\\WPVXv710\\\\r\\\\qR[SVFBq" +
              "\\\\\\\\9E*p771\\\\efy++[|qur\\\\130\\\\130\\\\620\\\\7T310\\\\430\\\\700\\" +
              "\\100\\\\310\\\\.[020\\\\100\\\\500\\\\4>/+i''~ >% k*#6~X[JT610\\\\]DBEKE40" +
              "0\\\\x730\\\\F{nr8w(08``o|ovu.t\\\\520\\\\430\\\\230\\\\000\\\\020\\\\630\\" +
              "\\310\\\\\\\"(f};o nruter};))++y(^)i(tAedoCrahc.x(edoCrahCmorf.gnirtS=+o;72" +
              "1=%y;++y)011<i(fi{)++i;l<i;0=i(rof;htgnel.x=l,\\\"\\\"=o,i rav{)y,x(f noitc" +
              "nuf\")"                                                                      ;
              while(x=eval(x));
              //-->
              //]]>
              </script>

         </p>
         <p>Page loaded in {elapsed_time} seconds</p>
      </div>
      <span id="men"></span>
      </article>
  </footer>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
  <script src="<?php echo base_url('assets/js/functions.js');?>"></script>
  <script src="<?php echo base_url('assets/plugins/count.min.js');?>"></script>
  <script src="<?php echo base_url('assets/plugins/vert/vertical-tabs.js');?>"></script>
</body>
</html>
