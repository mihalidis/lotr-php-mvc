<?php
include 'layouts/headSection.php';
?>

    <section>
    <div class="container">
        <h1>Lord of the Rings Books</h1>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
            </tr>
            </thead>
            <tbody>

            <?php
            $counter = 1;
            foreach ($bookDetails as $detail):
                ?>
                <tr>
                    <th scope="row"><?php echo $counter++; ?></th>
                    <td><?php echo $detail->getName()?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <a href="<?php echo $routes->get('homepage')->getPath(); ?>">Back to homepage</a>
    <section>

<?php include 'layouts/endSection.php'; ?>