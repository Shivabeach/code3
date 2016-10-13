  <header>
      <h1><?php echo $head;?></h1>
    </header>
  <div class="container">
    <div class="flex-large">
      <article id="tabs">
      <ul>
        <li><a href="#tabs-1">VanHorn</a></li>
        <li><a href="#tabs-2">William Talmadge</a></li>
        <li><a href="#tabs-3">Peter Pelton</a></li>
        <li><a href="#tabs-4">Nathaniel Wheeler</a></li>
        <li><a href="#tabs-5">Thomas Gardner</a></li>
        <li><a href="#tabs-6">Kostersen Van Eeken</a></li>
        <li><a href="#tabs-7">Bartolomaus Westphal</a></li>
        <li><a href="#tabs-8">George Frye</a></li>
        <li><a href="#tabs-9">Thomas Eames</a></li>
        <li><a href="#tabs-10">Richard Osborne</a></li>

      </ul>
      <article id="tabs-1">
        <h3>Matthys Corneliussen </h3>
        <?php include("vanhorn.html");?>
      </article>
      <article id="tabs-2">
        <h3>William Talmadge</h3>
        <?php include("talmadge.html");?>
      </article>
      <article id="tabs-3">
        <h3>Peter Pelton</h3>
        <?php include("pelton.html");?>
      </article>
      <article id="tabs-4">
        <h3>Nathaniel Wheeler</h3>
        <?php include("wheeler1.html");?>
      </article>
      <article id="tabs-5">
        <h3>Thomas Gardner</h3>
        <?php include("gardner.html");?>
      </article>
      <article id="tabs-6">
        <h3>Kostersen Van Eeken</h3>
        <?php include("vanaken.html");?>
      </article>
      <article id="tabs-7">
        <h3>Bartolomaus Westphal</h3>
        <?php include("westfall.html");?>
      </article>
      <article id="tabs-8">
        <h3>George Frye</h3>
        <?php include("frye.html");?>
      </article>
      <article id="tabs-9">
        <h3>Thomas Eames</h3>
        <?php include("eames.html");?>
      </article>
      <article id="tabs-10">
        <h3>Richard Osborne</h3>
        <?php include("osborne.html");?>
      </article>

    </article> <!-- end of tabs -->
    </div> <!--end of left flex -->
    <!-- right hand side -->
    <div class="flex-small">
      <section class="wrapper">

          <?php $this->load->file(APPPATH . "/views/pages/includes/side.php");?>
        <!-- use article here -->
      </section>
    </div>
  </div>