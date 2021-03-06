<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-primary" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4 text-center">
                <h2>Sales Information</h2>
                <p><a class="btn btn-lg btn-primary" href="/sale/index">View All Sales Data</a></p>
                <p><a class="btn btn-lg btn-primary" href="/sale/view?id=1">View Items in Sales</a></p>
            </div>
            <div class="col-lg-4 text-center">
                <h2>Item Information</h2>
                <p><a class="btn btn-lg btn-primary" href="/item/index">View All Item Data</a></p>
            </div>
            <div class="col-lg-4 text-center">
                <h2>Customer Information</h2>
                <p><a class="btn btn-lg btn-primary" href="/customer/index">View All Customer Data</a></p>
                <p><a class="btn btn-lg btn-primary" href="/customer/create">Create New Customer Record</a></p>
            </div>
            <!--
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-primary" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
            -->
        </div>

    </div>
</div>
