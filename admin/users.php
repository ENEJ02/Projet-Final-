<?php
$title = "Users";
require_once "../inc/functions.inc.php";
require_once "../inc/header.inc.php";

?>


<div class="d-flex flex-column m-5  table-responsive">
    <h2 class="text-center fw-bolder mb-5">Liste des utilisateurs</h2>
    <table class="table table-bordered mt-5">
        <thead>
            <tr>
                <th>ID</th>
                <th>Pseudo</th>
                <th>FirstName</th>
                <th>LastName</th>
                <th>Address</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Civility</th>
                
            </tr>
        </thead>
        <tbody>

            <?php
            $users = allUsers();

            foreach ($users as $user) {


                ?>
                <tr>
                    <td><?= $user['id_user'] ?></td>
                    <td><?= ucfirst($user['firstName']) ?></td>
                    <td><?= ucfirst($user['lastName']) ?></td>
                    <td><?= $user['pseudo'] ?></td>
                    <td><?= $user['email'] ?></td>
                    <td><?= $user['role'] ?></td>
                    
                    
                    <td class="text-center">
                        <a href="dashboard.php?users_php&action=delete&id_user=<?= $user['id_user'] ?>"><i
                                class="bi bi-trash3-fill text-success"></i></a>
                    </td>
                    <td class="text-center">
                        <a href="dashboard.php?users_php&action=update&id_user=<?= $user['id_user'] ?>"
                            class="btn btn-success"><?= ($user['role']) == 'ROLE_ADMIN' ? 'Rôle user' : 'Rôle admin' ?>
                    </td>
                </tr>

                <?php
            }
            ?>
        </tbody>

    </table>
</div>




<?php
require_once "../inc/footer.inc.php";
?>