<?php
//temporary place for the about page until I work out the link structure we should use
//DELETE WHEN GOING LIVE - This is for testing
error_reporting( E_ALL);
ini_set("display_errors",1);
require_once "controller/base.php";
require_once "controller/init.php";
$page = new Page;

$page->header(); ?>

<div id="about" class="">
    <section class="hero is-large is-primary is-bold">
    <div class="hero-body">
        <div class="container">
            <h1 class="title">
                About Us
            </h1>
            <h2 class="subtitle">
                We are Owned and Operated by The Daily Yawn
            </h2>
        </div>
    </div>
    </section>
</div>


<?php $page->footer(); ?>
