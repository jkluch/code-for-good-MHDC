<div id = 'thinker_ideas'>
    <table border='1'>
        <caption><b><u>Related Ideas</u></b></caption>
        <thead>
            <tr>
                <th>ID</th>
                <th>Label</th>
            </tr>
        </thead>
        <tbody>
            <?php
                // $ideas_array = getThinkerIdeas($_POST['thinker']);
                $ideas_array = $thinker->related_ideas;
                foreach ($ideas_array as $value) {
                    $idea = getIdea($value);
                    echo    "<tr>
                                <td>$idea->ID</td>
                                <td>$idea->label</td>
                            </tr>";
                }
                if (($ideas_array == null)) {
                    echo    "<tr>
                                <td colspan=2>There are no related ideas.</td>
                            </tr>";
                }
            ?>
        </tbody>
    </table>
</div>