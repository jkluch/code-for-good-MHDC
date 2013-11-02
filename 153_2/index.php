<?php
//model.php has all the functions used for this website
include 'model/model.php';


if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'no_selection';
}

//No Selection just causes the dropdown to show
if($action == 'no_selection'){
    include 'view/header.php';
    include 'view/thinker_dropdown.php';
    echo '<div id="footer_space"></div>';
    include 'view/footer.php';
}
//If the dropdown has been selected this runs
//this will show the dropdown again as well as the tables
elseif ($action == 'thinker_dropdown') {
    include 'view/header.php';

    include 'view/loading_gif.php';
    include 'view/thinker_dropdown.php';

    //This 'if else' pulls the thinker list through POST if available instead of requesting from inpho.cogs.indiana.edu again
    if (isset($_POST['thinker_array'])) {
        $serial_thinker = $_POST['thinker_array'];
        $thinker_array = unserialize(htmlspecialchars_decode($serial_thinker));
    }
    else{
        $thinker_array = getThinkers();
        $serial_thinker = serialize($thinker_array);
    }

    if (($_POST['thinker'])!='no_thinker') {
        $thinker = getThinker($_POST['thinker']);

        echo "<div style=\"text-align:center; margin-bottom:30px;\">";
        echo "The thinker you're looking at is ".$thinker->label.".";
        echo "</div>";

        include 'view/tables.php';
        // include 'view/ideas_table.php';
        // include 'view/related_table.php';
        ?>
        <script>

        $(window).load(function() {
            $('#loading_container').hide();
        });
        $(window).load(function() {
            $('#tables').show();
        });

        </script>
        <?php
    }
    else{
        echo "<div style=\"text-align:center; margin-top:20px;\">";
        echo "You aren't looking at anyone.";
        echo "</div>";
    }
    
    include 'view/footer.php';
}


?>