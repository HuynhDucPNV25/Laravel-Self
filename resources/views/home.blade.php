<h2 style="text-align: center;">home page</h2>
<?php
    echo date('Y-m-d H:i:s'); 
    echo '<p></p>';
    if (env('APP_ENV')=="production") {
        echo "Call API Live";
    }
    else {
        echo "Call API sandbox";
    }
?>
