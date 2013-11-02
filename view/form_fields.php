<?php
$data = file_get_contents('~/code-for-good-MHDC/model/homerepair-intake.html');
$dom = new domDocument;

$dom->loadHTML($data);
$tables = $dom->getElementsByTagName('table');

$rows = $tables->item(1)->getElementsByTagName('tr');

foreach ($rows as $row) {
    $cols = $row->getElementsByTagName('td');
    if (strpos($cols[3], '?') !== false) {
        echo "$cols[3]
            <input type='radio' value='yes'>Yes<br>
            <input type='radio' value='no'>No";
    } else {
        echo "$cols[3]: <input type='text' name='$cols[3]'>";
    }
}

?>
