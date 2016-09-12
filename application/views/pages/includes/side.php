<?php
if($this->session->userdata('name') == true){
    echo "Hello " .  $this->session->userdata('name'). nbs(3), anchor("Pages/entry", " Enter ");
}else {
  echo " ";
}?>
<h3>Quick Facts</h3>
<ul>
  <li><i class="icon-hand-right"></i> 123 Matched relatives</li>
  <li><i class="icon-hand-right"></i> 13,400 Unmatched relatives</li>
  <li><i class="icon-hand-right"></i> 15,511 People in the current tree</li>
  <li><i class="icon-hand-right"></i> 1784 Photos</li>
  <li><i class="icon-hand-right"></i> 410 4th to 8th Cousins</li>
</ul>

<div id="size"></div>
