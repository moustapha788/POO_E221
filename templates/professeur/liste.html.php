<div class="container mt-5 ml-5">

    <table class="table table-bordeless">
        <tr class="bg-info">
            <th>#</th>
            <th>Nom Complet</th>
            <th>Grade</th>
            <th class="text-center">Actions</th>
        </tr>

        <?php
        $i = 1;
        foreach ($profs as $prof) {
        ?>
            <tr>
                <td><?= $i++ ?></td>
                <td class="font-weight-bold"><?= $prof->nom_complet ?></td>
                <td><?= $prof->grade ?></td>
                <td class="text-center">
                    <button class="btn btn-warning btn-sm">Modifier</button>
                    <button class="btn btn-danger btn-sm">Supprimer</button>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>

</div>