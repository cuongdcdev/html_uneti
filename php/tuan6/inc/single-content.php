   <div class="contentBox">
        <div class="innerBox">

<?php 
    if( !empty($_GET["id"]) ){

        $index = $_GET["id"];

?>
        <h1>
            <?php echo $_SESSION["post_array"][$index]["title"]; ?>
        </h1>

            <div class="contentText">
                <?php echo $_SESSION["post_array"][$index]["content"]; ?>
            </div>
            

<?php }else{ ?>

    <h2>noi dung ko ton tai </h2>
<?php } ?>