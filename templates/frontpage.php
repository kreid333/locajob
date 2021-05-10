<?php include_once "includes/header.php" ?>
<main>
    <div class="container">

        <div class="p-5 mb-4 bg-light rounded-3">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">Find A Job</h1>
                <form method="GET" action="index.php">
                    <select name="category" class="form-control">
                        <option value="0">Choose Category</option>
                        <?php foreach ($categories as $category) : ?>
                            <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>

                        <?php endforeach; ?>
                    </select>
                    <br/>
                    <button type="submit" class="btn btn-lg btn-success">FIND</button>
                </form>
            </div>
        </div>

        <h3><?php echo $title; ?></h3>

        <?php foreach ($jobs as $job) : ?>

            <div class="row">
                <div class="col-md-10">
                    <h2><?php echo $job->job_title; ?></h2>
                    <p><?php echo $job->description; ?></p>
                </div>
                <div class="col-md-2">
                    <a class="btn btn-success" href="job.php?id=<?php echo $job->id; ?>">View</a>
                </div>
            </div>

        <?php endforeach ?>

</main>
<?php include_once "includes/footer.php" ?>