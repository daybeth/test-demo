<?php 
$title = "Daybeth Vasquez";

?>

<h1><? php echo $title; ?> </h1>

<?php if(isset($_GET['reset'])){ 
    
    $the_post_id = $_GET['reset'];
    $query = "UPDATE posts SET post_views_count = 0 WHERE post_id = $the_post_id";
    $reset_query= mysqli_query($connection,$query);
    header("Location:posts.php");
 if(!$reset_query){
              die("QUERY FAILED" . mysqli_error($connection));
?>