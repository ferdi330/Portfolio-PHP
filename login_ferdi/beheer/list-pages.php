
<? include "../includes/config.php";
$sql = "SELECT p.*, m.module_name 
        FROM pages p 
        LEFT JOIN modules m ON m.module_id = p.module_id";
$sth = $db->prepare($sql);
$sth->execute();
?>
    
    <div class ="container-table">
        <div class="w3-container">
            <table id="customers">
                <thead>
                    <h1 class="text-info">Add pages</h1>
                        <tr>
                            <th>ID</th>
                            <th>Header</th>
                            <th>Module</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th class="table"><a href="create-pages-form.php" class="hidden">Add Page <i class="fas fa-user-plus"></i></a></th>
                        </tr>
                </thead>
                    <tbody>
                            <? 
                                while($row = $sth->fetch()) {
                                    ?>
                                        <tr>
                                            <td><?= $row["page_id"]; ?></td>
                                            <td><?= $row["page_name"]; ?></td>
                                            <td><?= $row["module_name"]; ?></td>
                                            <td><?= $row["page_header"]; ?></td>
                                            <td><?= $row["page_content"]; ?></td>
                                            <td>
                                                <a href="update-pages-form.php?page_id=<?=$row["page_id"]; ?>" class="button">Edit</a>
                                                <a href="delete-pages.php?page_id=<?=$row["page_id"]; ?>" class="button2" onclick="return confirm('Are you sure you want to delete this')">Delete</a>
                                            </td>
                                        </tr>
                                    <?
                                }
                            ?>
                    </tbody>
            </table>
        </div>
    </div>
