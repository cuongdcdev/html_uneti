
   <div class="contentBox">
        <div class="innerBox">

        <?php 
            if( !empty( $_SESSION["title"] ) ){
                echo   "<h1>". $_SESSION["title"] . "</h1>";
            }else{
                echo "<h1>Nội dung bạn tìm kiếm không tồn tại</h1>";
            }
        ?>
            <div class="contentText">
            <?php 
                if( !empty( $_SESSION["content"] ) ){
                    echo "<p>" . $_SESSION["content"]. "</p>";
                }else{
                    echo "<p>Nội dung trống ! </p>";
                }
            ?>
</div>
            
