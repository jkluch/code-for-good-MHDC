<?php
if (!isset($thinker_array)) {
    $thinker_array = getThinkers();
    $serial_thinker = serialize($thinker_array);
    // echo "It isn't set2";
}
?>
<div id="tables_container">
    <div id="dropdown_container">
        <div id="dropdown">
            <form action="index.php" method="post" id="show_thinker_dropdown">
                <input type="hidden" name="action" value="thinker_dropdown" />
                <select required="true" name="thinker">
                    <option value="no_thinker">Select a Thinker</option>
                    <?php
                    foreach ($thinker_array as $value) {
                        echo "<option value=$value->ID>$value->label</option>";
                    }
                    ?>
                </select>
                <input type="submit" value="Lookup Thinker" />
                <input type="hidden" name="thinker_array" <?php echo "value=\"".htmlspecialchars(serialize($thinker_array))."\"" ?> />
            </form>
        </div>
    </div>
</div>
<!-- This is just to put space between the dropdown and the next div -->
<div style="height:40px"></div>