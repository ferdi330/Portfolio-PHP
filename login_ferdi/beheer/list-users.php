<? include "../includes/config.php";
$sql = "SELECT * FROM users";
$sth = $db->prepare($sql);
$sth->execute();
?>
    
    <div class ="container-table">
        <div class="w3-container">
            <table id="customers">
                <thead>
                    <h1 class="text-info">Add users</h1>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>First name</th>
                            <th>Last name</th>
                            <th>E-mail</th>
                            <th>Phone</th>
                            <th>Last login</th>
                            <th class="table"><a href="create-user-form.php" class="hidden">Add <i class="fas fa-user-plus"></i></a></th>
                        </tr>
                </thead>
                    <tbody>
                            <? while($row = $sth->fetch()) {?>
                                <tr>
                                    <td><?= $row["user_id"]; ?></td>
                                    <td><?= $row["user_name"]; ?></td>
                                    <td><?= $row["user_firstname"]; ?></td>
                                    <td><?= $row["user_lastname"]; ?></td>
                                    <td><?= $row["user_mail"]; ?></td>
                                    <td><?= $row["user_phone"]; ?></td>
                                    <td><?= $row["last_login"]; ?></td>
                                    <td>
                                        <a href="update-user-form.php?user_id=<?=$row["user_id"]; ?>" class="button">Edit</a>
                                        <a href="delete-user.php?user_id=<?=$row["user_id"]; ?>" class="button2" onclick="return confirm('Are you sure you want to delete this')">Delete</a>
                                    </td>
                                </tr>
                            <?
                            }
                            ?>
                    </tbody>
            </table>
        </div>
    </div>
