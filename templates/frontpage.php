<?php include 'inc/header.php'; ?>
<!-- <?php echo $title; ?> -->
<?php include 'inc/footer.php'; ?>

<div class="container mt-5 border bg-secondary">
    <center>
        <h1 class="mt-5"> Find A Job </h1>
        <div class="m-3 p-5 text-white rounded">
            <center>
                <form action="" method="">
                    <select class="form-control" name="category">
                        <option value="0">Choose Category</option>

                    </select>
                    <br>
                    <input type="submit" value="View" class="btn btn-lg btn-primary">
                </form>
        </div>
</div>
<h3 class="mt-3"><?php echo $title  ?></h3>

<div class="container mt-4 row">
    <div class="col-md-10">
        <h4>Job Name</h4>
        <p> Description</p>
    </div>
    <div class="col-md-2 ps-5 text-end ">
        <a href="#" class="btn btn-secondary py-3">View</a>
    </div>
</div>
