<?php include "includes/header.php"; ?>

    <h1 class="heading">All Student Information</h1>

    <?php foreach ($students as $student) { ?>
        <div class="div">
            <h1>Student Name :  <?php echo $student['name']; ?> </h1>
            <p>Student ID : <?php echo $student['id']; ?> </p>
            <p>Student Email : <?php echo $student['email']; ?> </p>
            <p>Student Mobile : <?php echo $student['mobile']; ?></p>
            <p>Student Image : <img src="<?php echo $student['image']; ?>" height="300" alt=""/> </p>
        </div>
    <?php } ?>

<?php include "includes/footer.php"; ?>