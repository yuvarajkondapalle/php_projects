<?php require("libs/fetchdata.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
 <link href="css/main.css" rel='stylesheet' type='text/css' />
 <link href="css/fontawesome-all.css" rel="stylesheet">
<body>
    <?php include('header.php');?>  
    <main>
        <div id="sidebar">
        <?php get_sidebar();?>
        <div id="category">
               <a href="" style="color: red">See All Categories</a>
            </div>
        </div>
        <div id="content">
            <div id="mask_group">
                <img src="images/Mask Group 1.png" alt="Mask group 1">
                <img src="images/Mask Group 2.png" alt="Mask group 1">
                <img src="images/Mask Group 3.png" alt="Mask group 1">
            </div>
            <div id="ib_tools">
                <div id="ib_head">
                <h4>IB Power Tools</h4>
                <button id="view_all">View All</button></div>
                <?php get_ib_tools();?>
            </div>
            <div id="mask_group">
                <img src="images/Mask Group 4.png" id="mask_grp4"alt="Mask Group 4">
            </div>
            <div id="ib_tools">
                <div id="ib_head">
                <h4>Best Sellers</h4>
                <button id="view_all">View All</button></div>
                <?php get_best_sellers();?>
            </div>

        </div>
    </main>
    <?php include('footer.php');?> 
</body>
</html>
