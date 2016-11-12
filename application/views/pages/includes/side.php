<article>
<?php
if($this->session->userdata('name') == true){
    echo "Hello " .  $this->session->userdata('name') . nbs(3), anchor("Pages/entry", " Enter ");
    echo "<hr>";
}?>
</article>
<article>
<h4 class="centered">Quick Facts</h4>
<ul>
  <li><i class="icon-hand-right"></i> 132 Matched relatives</li>
  <li><i class="icon-hand-right"></i> 14,150 Unmatched relatives</li>
  <li><i class="icon-hand-right"></i> 15,597 People in the current tree</li>
  <li><i class="icon-hand-right"></i> 1799 Photos</li>
  <li><i class="icon-hand-right"></i> 426 4th to 8th Cousins</li>
</ul>
</article>
<a href="http://van-horn.us/pages/army" style="display: none;">zeal</a>
<!-- <article>
<div id="size"></div>
</article> -->
<article>
<?php
$date = new DateTime;
$ancestor = (new DateTime)->setDate(1640,01,01)->setTime(00,00,00);
$timeago = $date->diff($ancestor);
echo $timeago->format('<h6 class="centered">Matthys lived %y Years ago</h6>');
?>
</article>
<article>
  <h6>Our first Ancestors in America</h6>
  <ul>
    <li>William Read</li>
    <li>Birth 1605 • Canterbury, Kent, England</li>
    <li>Death 13 JUN 1669 • Weymouth, Norfolk, Massachusetts, United States</li>
  </ul>
</article>
