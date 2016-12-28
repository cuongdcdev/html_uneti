   <div class="contentBox">
        <div class="innerBox">


<?php for( $i = 0 ; $i < sizeof( $_SESSION["post_array"]) ; $i++ ) { ?>

            <a href="index.php?r=single&id=<?php echo $i; ?>"  title="xem bai viet">
                <h1> <?php echo $_SESSION["post_array"][$i]["title"]; ?></h1>
            </a>

            <div class="contentText">

            </div>          
<?php }; ?>