<?php $this->extend("layout/layout") ?>

<?php $this->section("title") ?>
posts
<?php $this->endsection() ?>


<?php $this->section("content") ?>
<?php foreach ($posts as $post ) :?>
    <h2>
        <?php echo $post["title"] ?>
    </h2>
    <p>
        <?php echo  $post["description"] ?>
</p>
    <?php endforeach ;?>
   
<?php $this->endsection("content") ?>

    <!-- hta hada ana li derto -->
