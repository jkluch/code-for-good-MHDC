<div id="ad_form_container">
    <div id="ad_form">
        <!-- display a table of products -->
        <h1>Client Name</h1>
        <table>
            <thead>
                <tr>
                    <th>Field</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
            <tr>
                <th>First Name</th>
                <td>John</td>
                <td><form action="." method="post">
                    <input type="hidden" name="action"
                           value="edit_form" />
                    <input type="hidden" name="form_id"
                           value="form_id_number" />
                    <input type="hidden" name="field_id"
                           value="field_id_number" />
                    <input type="submit" value="Delete" />
                </form></td>
                <th>Last Name</th>
                <td>Smith</td>
                <td><form action="." method="post">
                    <input type="hidden" name="action"
                           value="edit_form" />
                    <input type="hidden" name="form_id"
                           value="form_id_number" />
                    <input type="hidden" name="field_id"
                           value="field_id_number" />
                    <input type="submit" value="Delete" />
                </form></td>
                <th>Phone Number</th>
                <td>555-555-5555</td>
                <td><form action="." method="post">
                    <input type="hidden" name="action"
                           value="edit_form" />
                    <input type="hidden" name="form_id"
                           value="form_id_number" />
                    <input type="hidden" name="field_id"
                           value="field_id_number" />
                    <input type="submit" value="Delete" />
                </form></td>
                <th>State</th>
                <td>DE</td>
                <td><form action="." method="post">
                    <input type="hidden" name="action"
                           value="edit_form" />
                    <input type="hidden" name="form_id"
                           value="form_id_number" />
                    <input type="hidden" name="field_id"
                           value="field_id_number" />
                    <input type="submit" value="Delete" />
                </form></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <p><a href="?action=show_add_form">Add Product</a></p>
        <p><a href="?action=list_categories">List Categories</a></p>
    </div>
</div>