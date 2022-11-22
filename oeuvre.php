<?php 
include('header.php');
include('oeuvres.php'); 
?>

<?php if(!empty($paintings)) : ?>
        <?php foreach($paintings as $painting) : ?>
            <?php if(!empty($painting)) : ?>
                <?php if($painting['id'] == $_GET['id']) : ?>
                    <article id="detail-oeuvre">
                        <div id="img-oeuvre">
                            <img src="<?php echo $painting['img_path'] ?>" alt="<?php echo $painting['title'] ?>">
                        </div>
                        <div id="contenu-oeuvre">
                            <h1><?php echo $painting['title'] ?></h1>
                            <p class="description"><?php echo $painting['artist'] ?></p>
                            <p class="description-complete"><?php echo $painting['desc'] ?></p>
                        </div>
                    </article>
                <?php endif; ?>
            <?php endif; ?>
        <?php endforeach; ?>
<?php endif; ?>

<?php include('footer.php'); ?>