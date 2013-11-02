<div id="pending_container">
    
    <div id="pending">
        <!-- <div style="float: left;">
            <form action="." method="post" id="home_rep_form">
                <input type="hidden" name="action" value="home_rep_form"/>
                <input type="submit" id="submit" value="Home Repair Program">
            </form>
        </div>
        <div style="float: left;">
            <form action="." method="post" id="self_help_form">
                <input type="hidden" name="action" value="self_help_form"/>
                <input type="submit" id="submit" value="Self Help">
            </form>
        </div> -->

        <table border='1'>
            <caption><b><u>Pending Approval</u></b></caption>
            <thead>
                <tr>
                    <th>Form Type</th>
                    <th>Client</th>
                    <th>Form Status</th>
                    <th>Documents</th>
                    <th>Pending Since</th>
                    <th>Form Link</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Self Help</td>
                    <td>John Smith</td>
                    <td>Complete</td>
                    <td>Submitted</td>
                    <td>10/25/2013</td>
                    <td><a href=".">Link</a></td>
                </tr>
                <tr>
                    <td>Home Repair</td>
                    <td>Adam Johnson</td>
                    <td>Incomplete</td>
                    <td>Submitted</td>
                    <td>10/29/2013</td>
                    <td><a href=".">Link</a></td>
                </tr>

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
</div>