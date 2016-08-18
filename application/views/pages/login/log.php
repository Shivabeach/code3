<body>
  <header>
    <h1><?php echo $head;?></h1>
  </header>
<div class="container">
  <div class="flex-large">
    <h3>Register or log in</h3>
    <fieldset>
      <legend>Login</legend>

      <?php
      $attr = [
        'id'    => 'ajax',
        "class" => "pure-form pure-form-stacked"
      ];
      echo form_open("/checkin/process", $attr)?>
<p>

<label for="name"> name </label> <br />
<input type="text" name="name" id="name" />
<p/>

<p>
  <?php
  $attr1 = [
    'style' => 'width: 50%',
    'id' => 'password',
    'name' => 'password'
];
   ?>
<label for="password"> password </label> <br />
<?php echo form_input($attr1);?>
<p/>

<p>
  <?php
  $attr2 = [
    'style' => 'width: 50%',
    'id' => 'password2',
    'name' => 'password2'
];
   ?>
<label for="password2"> password2 </label> <br />
<?php echo form_input($attr2);?>
<p/>

<p>
<label for="email"> email </label> <br />
<input type="email" name="email" id="email" />
<p/>

<div class="pure-controls">
  <?php
  echo '<button type="submit" class="pure-button pure-button-active">Submit</button>';
  echo '<button type="reset" class="pure-button pure-button-active">Reset</button>';
  echo form_close();
  ?>

    </fieldset>
  </div>
  <div class="flex-small">
    <?php
    echo current_url();
    $this->load->file(APPPATH . "/views/pages/includes/side1.php");
    ?>
  </div>
</div>
