<div id = 'thinker_related'>
    <table border='1'>
        <caption><b><u>Related Thinkers</u></b></caption>
        <thead>
            <tr>
                <th>Influencer</th>
                <th>Influencee</th>
                <th>Date of Birth</th>
                <th>Date of Death</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $influenced_by = $thinker->influenced_by;
                foreach ($influenced_by as $value) {
                    $in_by_thinker = getThinker($value);
                    echo    "<tr>
                                <td>$in_by_thinker->label</td>
                                <td>$thinker->label</td>
                                <td>$in_by_thinker->death_string</td>
                                <td>$in_by_thinker->birth_string</td>
                            </tr>";
                }

                $influenced = $thinker->influenced;
                foreach ($influenced as $value) {
                    $in_thinker = getThinker($value);
                    echo    "<tr>
                                <td>$thinker->label</td>
                                <td>$in_thinker->label</td>
                                <td>$in_thinker->death_string</td>
                                <td>$in_thinker->birth_string</td>
                            </tr>";
                }
                if (($influenced_by == null)&&($influenced == null)) {
                    echo "<tr><td colspan=4>There are no related thinkers.</td></tr>";
                }
            ?>
        </tbody>
    </table>
</div>