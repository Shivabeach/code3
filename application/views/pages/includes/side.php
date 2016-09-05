<?php
if($this->session->userdata('name') == true){
    echo "Hello " .  $this->session->userdata('name'). nbs(3), anchor("Pages/entry", " Enter ");
}else {
  echo " ";
}?>
<h3>Quick Facts</h3>
<ul>
  <li><i class="icon-hand-right"></i> 123 Matched relatives</li>
  <li><i class="icon-hand-right"></i> 13,200 Unmatched relatives</li>
  <li><i class="icon-hand-right"></i> 15,488 People in the current tree</li>
  <li><i class="icon-hand-right"></i> 1778 Photos</li>
  <li><i class="icon-hand-right"></i> 401 4th to 8th Cousins</li>
</ul>
<?php
$text = "mrwilson1@comcast.net";
$string = preg_replace('([_\.0-9a-z-]+@([0-9a-z][0-9a-z-]+\.)+[a-z]{2,3})','<a href="mailto:\\1">\\1</a>', $text);
echo $string;
?>
<div id="size"></div>
