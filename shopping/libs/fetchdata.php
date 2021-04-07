<?php 
function runsqlcmd($sql){
	require("db_connect.php");
	if (mysqli_query($con,$sql))
	{ 
      		
		echo 'inserted';
    }
    else{
        echo 'not inserted';
    }
    
}
function get_sidebar(){
	require("db_connect.php");
	$sql="SELECT * FROM category LIMIT 16";
	if ($result=mysqli_query($con,$sql))
	{
      
		$rowcount=mysqli_num_rows($result);
      
		if ($rowcount==0) {
      		
			echo 'No Posts To Fetch';
		}
      
		foreach ($result as $category => $categoryitem) {
        echo '<div id="category">
        <img src="Icons/Category Icons/png/'.$categoryitem["Image"].'" alt="'.$categoryitem["cate"].'"><a href="">'.$categoryitem["cate"].'</a>
        </div>';
            
        }
    }
}
function get_ib_tools(){
	require("db_connect.php");
	$sql="SELECT * FROM products LIMIT 12";
	if ($result=mysqli_query($con,$sql))
	{
      
		$rowcount=mysqli_num_rows($result);
      
		if ($rowcount==0) {
      		
			echo 'No Posts To Fetch';
		}
      
		foreach ($result as $product => $productitem) {
        echo '<div id="product">
        <center>
        <img src="images/'.$productitem["Image"].'" alt="'.$productitem["product_name"].'"></center>
        <h1 id="prod_name">'.$productitem["product_name"].'</h1>
        <p id="d_price"><del>'.$productitem["price"].'</del> &nbsp;&emsp14; 50% OFF</p>
        <h3 id="price">Rs.'.$productitem["d_price"].'</h3>
    </div>';
            
        }
    }
}
function get_best_sellers(){
	require("db_connect.php");
	$sql="SELECT * FROM products LIMIT 12";
	if ($result=mysqli_query($con,$sql))
	{
      
		$rowcount=mysqli_num_rows($result);
      
		if ($rowcount==0) {
      		
			echo 'No Posts To Fetch';
		}
      
		foreach ($result as $product => $productitem) {
        echo '<div id="product">
        <center>
        <img src="images/'.$productitem["Image"].'" alt="'.$productitem["product_name"].'"></center>
        <h1 id="prod_name">'.$productitem["product_name"].'</h1>
        <p id="d_price"><del>'.$productitem["price"].'</del> &nbsp;&emsp14; 50% OFF</p>
        <h3 id="price">Rs.'.$productitem["d_price"].'</h3>
    </div>';
            
        }
    }
} 
function get_cate(){
	require("db_connect.php");
	$sql="SELECT * FROM category";
    $count = 0;
	if ($result=mysqli_query($con,$sql))
	{
      
		$rowcount=mysqli_num_rows($result);
      
		if ($rowcount==0) {
      		
			echo 'No Posts To Fetch';
		}
        echo '<tr>';
		foreach ($result as $category => $categoryitem) {
            $count +=1;
            if($count == 5){
                echo '</tr> <tr>';
            }
            else{
            echo ' <td>'.$categoryitem["cate"].'</td>';
            }
        }
        echo '</tr>';
    }
}
?>
