<body>
  <header>
    <h1><?php echo "<small>The History of the </small>" . $head;?></h1>
  </header>
<div class="container">
  <div class="flex-large">
    <?php foreach($mainContent as $row):?>
        <?php $content = htmlspecialchars_decode($row->content);?>
        <?php $slug    = htmlspecialchars_decode($row->slug);?>
      <article class="ancestry">
        <h2 class="ancestryTitle item"><?php echo $row->title;?></h2>
        <?php echo $slug; ?>
        <div class="ancestryContent item"><?php echo $this->typography->auto_typography($content);?> </div>
        <h6 class="ancestryDate"><?php echo "Creation " . html_escape($row->date), nbs(5), "Last Updated " . html_escape($row->last_date);?></h6>
    </article>
    <?php endforeach;?>
      <?php echo $this->pagination->create_links();?>
  </div>
  <div class="flex-small">
    <?php include(APPPATH . "/views/pages/includes/side.php"); ?>
  </div>
</div>
