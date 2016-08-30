<?php
if($this->session->userdata('name') == true){
    echo "Hello " .  $this->session->userdata('name'). nbs(3), anchor("Pages/entry", " Enter ");
}else {
  echo " ";
}?>
<h3>Quick Facts</h3>
<ul>
  <li><i class="icon-hand-right"></i> 120 Matched relatives</li>
  <li><i class="icon-hand-right"></i> 12,400 Unmatched relatives</li>
  <li><i class="icon-hand-right"></i> 15,233 People in the current tree</li>
  <li><i class="icon-hand-right"></i> 1617 Photos</li>
  <li><i class="icon-hand-right"></i> 375 4th or closer Cousins</li>
</ul>

<div id="size"></div>
