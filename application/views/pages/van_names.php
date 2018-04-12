<body id="van_names">
  <header class="m-main">
    <h1 class="heading"><?php echo $head;?></h1>
  </header>
<div class="container">
  <div class="flex1">
    <?php $this->load->view("nav/navigate");?>
  </div>
  <div class="flex-large">
    <div class="wrap">
      <div class="col-12">
      <p>
				The following names are the names from the list of VanHorn and Hunt ancestors that connect us to other people from Ancestry.com.</p>
				<p>This is not a comprehensive list of our ancesteral tree. For example, the womans name "Covenhoven" has the number 5 next to it. That means we have 5 relatives who are related to us through Annejte Covenhoven. Incidently, she is the wife of the man who first used the VanHorn name in our line.
			</p>
      </div>
    </div>
    <div class="names">
      <h3><?php echo $maname;?></h3>
      <ul>
    <?php foreach($male as $row) {
      echo "<li class='inline-name bold-6'>$row->guys [$row->total]</li>";
    }?>
    </ul>
    </div>
    <div class="names">
      <h3><?php echo $fename;?></h3>
      <ul>
    <?php foreach($female as $row) {
      echo "<li class='inline-name bold-6'>$row->girls [$row->total]</li>";
    }?>
  </ul>
    </div>

    </div>

  </div>

</div>
