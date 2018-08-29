<?php
include( 'config.php' );
include( 'functions.php' );

$project_id     = $_GET[ 'id' ];
$project        = getItem( $db, 'projects', $project_id );
$page_title     = $project[ 'title' ];

include( 'top.php' );
?>

<main>

    <div id="project">

        <!--IMAGE-->
        <div id="project-image">
            <img class="print-shadow"
                src="/img/projects/full/<?php echo $project[ 'image' ] ?>"
                alt="<?php echo $project[ 'title' ] ?> by Jordan Alamilla" />
        </div>

        <!--TITLE-->
        <div id="project-title"><h2><?php echo $project[ 'title' ] ?></h2></div>

        <!--DESCRIPTION-->
        <div id="project-description"><?php echo $project[ 'description' ] ?></div>

        <!--SIGNATURE-->
        <div id="project-signature">

            <!-- DESKTOP -->
            <img id="project-signature-desktop"
                 src="/img/signature-invert.png"
                 alt="Signature" />

            <!-- MOBILE -->
            <img id="project-signature-mobile"
                 src="/img/signature-invert.png"
                 alt="Signature" />

        </div>
    </div>
</main>

<?php include( 'bottom.php' ) ?>
