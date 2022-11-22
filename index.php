<?php 
session_start();
include('header.php'); 
include('oeuvres.php');
?>

<div id="liste-oeuvres">

    <?php if(!empty($paintings)) : ?>
        <?php foreach($paintings as $painting) : ?>
            <?php if(!empty($painting)) : ?>
                <article class="oeuvre">
                    <a href="oeuvre.php?id=<?php echo $painting['id']?>">
                        <img src="<?php echo $painting['img_path'] ?>" alt="<?php echo $painting['title'] ?>">
                        <h2><?php echo $painting['title'] ?></h2>
                        <p class="description"><?php echo $painting['artist'] ?></p>
                    </a>
                </article>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php endif; ?>

</div>

<?php include('footer.php'); ?>
