<html>

<?php
get_header();
?>


<div id="content_wrapper">

  <div id="content">
    <div class="area">
      <?php
      if (have_posts()) {
        while (have_posts()) {
          the_post();
          the_title('<h1>', '</h1>');
          the_content();
        }
      }
      ?>

    </div>
  </div>

  <?php
  get_sidebar();
  ?>

  <div class="break"></div>

</div>


</div>
<?php
get_footer();
?>

</body>

</html>