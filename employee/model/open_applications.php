<?php
echo "<table>";
//query type should change based on what employee chooses to filter results by
$querytype = "pending approval";
$result = $wpdb->get_results("SELECT ___formid, name, status___ FROM ___homerepair-intake___ WHERE ___ status = $querytype ___");
foreach( $result as $results ) {
    echo "<tr>";
    foreach( $results as $field ) {
        echo "<td>$field</td>";
    }
    echo "</tr>";
}
echo "</table>";

?>
