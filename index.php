<?php
include( 'config.php' );
include( 'functions.php' );

$page_title   = 'Gallery';
$projects     = getAllItems( $db, 'projects' );

include( 'top.php' );
?>

<main>

  <div id="gallery">

    <?php foreach( $projects as $project ) : ?>

      <a href="show.php?id=<?php echo $project[ 'id' ]; ?>">

        <!--PROJECT-->
        <div class="gallery-project">

            <!--TITLE-->
            <div class="gallery-project-title"><?php echo $project[ 'title' ]; ?></div>

            <!--IMAGE-->
            <img src="/img/projects/thumb/<?php echo $project[ 'image' ]; ?>"
                alt="<?php echo $project[ 'title' ]; ?> by Jordan Alamilla" />
        </div>

      </a>
    <?php endforeach; ?>
  </div>

</main>

<?php include( 'bottom.php' ) ?>
