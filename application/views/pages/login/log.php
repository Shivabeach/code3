<body>
  <header>
    <h1><?php echo $head;?></h1>
  </header>
<div class="container">
  <div class="flex-large">
    <h3>Register or log in</h3>
     <?php echo $this->session->userdata('name');?>
     <?php //echo $_SESSION['username']; ?>
    <fieldset>
      <legend>Login</legend>
      <?php echo validation_errors('<li class="error">', '</li>');

      $attr = [
        'id'      => 'ajax1',
        "class"   => "pure-form pure-form-stacked"
      ];
      echo form_open("/checkin/legal", $attr)?>
<p>
  <?php
  $attr4 = [
    'style' => 'width: 50%',
    'id' => 'name',
    'name' => 'name',
    'placeholder' => 'Name'
  ];
   ?>
<label for="name"> Name </label>
<?php echo form_input($attr4);?>
<p/>

<p>
  <?php
  $attr1 = [
    'style' => 'width: 50%',
    'id' => 'pass',
    'name' => 'pass',
    'placeholder' => 'Password'
];
   ?>
<label for="pass"> password </label>
<?php echo form_input($attr1);?>
<p/>

<!-- <p>
 <?php
  $attr2 = [
    'style' => 'width: 50%',
    'id' => 'password2',
    'name' => 'password2'
];
   ?>
<label for="password2"> password2 </label> <br />
<?php echo form_input($attr2);?>
<p/> -->

<p>
  <?php
  $attr3 = [
    'style' => 'width: 50%',
    'id' => 'emails',
    'name' => 'email',
    'placeholder' => 'email'
];
   ?>
<label for="email"> email </label>
<?php echo form_input($attr3);?>
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
    if($this->session->userdata('name') == true){
        echo "Hello " .  $this->session->userdata('name'). nbs(3), anchor("Pages/entry", " Enter ");
    }else {
      echo "";
    }?>
    <?php
    $this->load->file(APPPATH . "/views/pages/includes/side.php");
    ?>
    <div id="display"></div>
  </div>
</div>
