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
                <th scope="col">Budget</th>
                <th scope="col">Academy Award Nominations</th>
                <th scope="col">Academy Award Wins</th>
                <th scope="col">Rotten Tomatoes Score</th>
            </tr>
            </thead>
            <tbody>

            <?php
            $counter = 1;
            foreach ($movieDetails as $detail):
                ?>
                <tr>
                    <th scope="row"><?php echo $counter++; ?></th>
                    <td><?php echo $detail->getName()?></td>
                    <td><?php echo $detail->getBudgetInMillions()?> Million</td>
                    <td><?php echo $detail->getAcademyAwardNominations()?></td>
                    <td><?php echo $detail->getAcademyAwardWins()?></td>
                    <td><?php echo $detail->getRottenTomatoesScore()?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <a href="<?php echo $routes->get('homepage')->getPath(); ?>">Back to homepage</a>
    <section>

<?php include 'layouts/endSection.php'; ?>