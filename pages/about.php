<?php include "includes/header.php"; ?>


<?php foreach ($products as $product) { ?>

    <h1>Student Name :  <?php echo $product['name']; ?> </h1>
    <p>Student ID : <?php echo $product['id']; ?> </p>
    <p>Student Email : <?php echo $product['price']; ?> </p>
    <p>Student Mobile : <?php echo $product['description']; ?></p>
    <p>Student Image : <img src="<?php echo $product['image']; ?>" alt=""/> </p>

<?php } ?>

<?php include "includes/footer.php"; ?>