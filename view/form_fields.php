<?php
$data = file_get_contents('../model/homerepair-intake.html');
$dom = new domDocument;

$dom->loadHTML($data);
// $tables = $dom->getElementsByTagName('table');
// echo var_dump($tables);
// $rows = $tables->item(1)->getElementsByTagName('tr');
$rows = $dom->getElementsByTagName('tr');
echo "<form>";
foreach ($rows as $row) {
    $cols = $dom->getElementsByTagName('td');
    echo var_dump($cols[0]->nodeValue);
    if (strpos($cols[3], '?') !== false) {
        echo "$cols[3]
            <input type='radio' value='yes'>Yes<br>
            <input type='radio' value='no'>No";
    } else {
        echo "$cols[3]: <input type='text' name='$cols[3]'>";
    }
}
echo "<input type='submit' value='Submit'>";
echo "</form>";

?>
