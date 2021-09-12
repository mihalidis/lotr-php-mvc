<?php
include 'layouts/headSection.php';
?>

    <section>
        <div class="container">
            <h1>Lord of the Rings Characters</h1>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Race</th>
                    <th scope="col">Realm</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $counter = 1;
                foreach ($characterDetails as $detail):
                    ?>
                    <tr>
                        <th scope="row"><?php echo $counter++; ?></th>
                        <td><?php echo $detail->getName(); ?></td>
                        <td><?php echo $detail->getRace(); ?></td>
                        <td><?php echo $detail->getRealm(); ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <a href="<?php echo $routes->get('homepage')->getPath(); ?>">Back to homepage</a>
    <section>

<?php include 'layouts/endSection.php'; ?>