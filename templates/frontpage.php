<?php include_once "includes/header.php" ?>
<main>
    <div class="container">

        <div class="p-5 mb-4 bg-light rounded-3">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">Custom jumbotron</h1>
                <p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
                <button class="btn btn-primary btn-lg" type="button">Example button</button>
            </div>
        </div>

        <?php foreach($jobs as $job): ?>

        <div class="row">
            <div class="col-md-10">
                <h2><?php echo $job->job_title; ?></h2>
                <p><?php echo $job->description; ?></p>
            </div>
            <div class="col-md-2">
                <button class="btn btn-success" type="button">Example button</button>
            </div>
        </div>

        <?php endforeach ?>

</main>
<?php include_once "includes/footer.php" ?>