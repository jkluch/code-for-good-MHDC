<div id = 'thinker_table'>
    <table border='1'>
        <caption><b><u>Thinker</u></b></caption>
        <tbody>
            <tr>
                <th>Thinker</th>
                <?php echo "<td style=\"text-align: center;\"'><a href=\"https://inpho.cogs.indiana.edu$thinker->url\">$thinker->label</a></td>" ?>
            </tr>
            <tr>
                <th>Date of Birth</th>
                <?php echo "<td>$thinker->death_string</td>" ?>
            </tr>
            <tr>
                <th>Date of Death</th>
                <?php echo "<td>$thinker->birth_string</td>" ?>
            </tr>
        </tbody>
    </table>
</div>