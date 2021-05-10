<?php
include_once "config/init.php";

$job = new Job;

$template = new Template("templates/frontpage.php");
$template->jobs = $job->getAllJobs();

echo $template;