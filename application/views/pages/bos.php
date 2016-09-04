<body>
  <header>
    <h1><?php echo $head;?></h1>
  </header>
<div class="container">
  <div class="flex-large">
    <?php foreach($mainContent as $row):?>
        <?php $content = htmlspecialchars_decode($row->content);?>
      <article class="ancestry">
        <h2 class="ancestryTitle item"><?php echo $row->title;?></h2>
        <button class="grab pure-button" title="Click to open and close">Read More</button>
        <div class="ancestryContent item"><?php echo $this->typography->auto_typography($content);?> </div>
        <h6 class="ancestryDate"><?php echo $row->date;?></h6>
    </article>
    <?php endforeach;?>
      <?php echo $this->pagination->create_links();?>
  </div>
  <div class="flex-small">
    <?php include(APPPATH . "/views/pages/includes/side.php"); ?>
  </div>
</div>
