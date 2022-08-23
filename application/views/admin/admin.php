<body id="topdog">
 <header class="m-main">
    <h1 class="m-main--head"><?php echo $head;?></h1>
  </header>
<div class="container">
  <div class="flex-large">
  <nav>
<h3>Navigation</h3>
  <ul>
    <li><?php echo anchor("pages/entry", "Post Entry"); ?></li>
    <li><?php echo anchor("pages/cities", "Cities Entry"); ?></li>
    <li><?php echo anchor("pages/admin", "Admin Area"); ?></li>
    <li><?php echo anchor("pages/family", "Family Entry"); ?></li>
    <li><?php echo anchor("pages/lists", "Post Listing"); ?></li>
    <li><?php echo anchor("", "Home"); ?></li>
    <li><?php echo anchor("pages/map", "Ancestoral Map"); ?></li>
  </ul>
</nav>

  </div>
</div>
