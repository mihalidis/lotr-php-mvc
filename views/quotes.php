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
                <th scope="col">Character</th>
                <th scope="col">Movie</th>
                <th scope="col">Dialog</th>
            </tr>
            </thead>
            <tbody>

            <?php
            $counter = 1;
            foreach ($quoteDetails as $detail):
                ?>
                <tr>
                    <th scope="row"><?php echo $counter++; ?></th>
                    <td><?php echo $detail->getCharacter()?></td>
                    <td><?php echo $detail->getMovie()?></td>
                    <td><?php echo $detail->getDialog()?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <a href="<?php echo $routes->get('homepage')->getPath(); ?>">Back to homepage</a>
    <section>

<?php include 'layouts/endSection.php'; ?>