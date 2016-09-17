<?php
if($this->session->userdata('name') == true){
    echo "Hello " .  $this->session->userdata('name') . nbs(3), anchor("Pages/entry", " Enter ");
    echo "<hr>";
}?>
<h3>Quick Facts</h3>
<ul>
  <li><i class="icon-hand-right"></i> 123 Matched relatives</li>
  <li><i class="icon-hand-right"></i> 13,400 Unmatched relatives</li>
  <li><i class="icon-hand-right"></i> 15,511 People in the current tree</li>
  <li><i class="icon-hand-right"></i> 1784 Photos</li>
  <li><i class="icon-hand-right"></i> 410 4th to 8th Cousins</li>
</ul>
<hr>
<div id="size"></div>
<hr>
<?php
$date = new DateTime;
$ancestor = (new DateTime)->setDate(1640,01,01)->setTime(00,00,00);
$timeago = $date->diff($ancestor);
echo $timeago->format('Matthys was born %y Years ago');
?>
