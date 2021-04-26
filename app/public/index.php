<?php
include ('../inc/header.php');
try {
    echo '<br />';
    echo 'Current PHP version: ' . phpversion();
    echo '<br />';
} catch (\Throwable $t) {
    echo 'Error: ' . $t->getMessage();
    echo '<br />';
}
$pdo = new PDO('mysql:dbname=tutorial;host=mysql', 'tutorial', 'secret', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

$query = $pdo->query('SHOW VARIABLES like "version"');

$row = $query->fetch();

echo 'MySQL version:' . $row['Value'] .'<br /><br />';

$directory = '/app/public';
$scanned_directory = array_diff(scandir($directory), array('..', '.'));
?>
<div class="jumbotron">
    <div class="container">
    <h1 class="display-3">Hello, world!</h1>
    <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
    <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
    </div>
    </div>
<div class="container">
    <!-- Example row of columns -->
<?php
$i=0;
foreach ($scanned_directory as $directory) {
    if (is_dir($directory)) {
        if ($i % 4 == 0) {
            echo '<div class="row">';
            $i = 0;
        }
        echo '<div class="col-md-4">';
        echo '<h2>'.$directory.'</h2>';
        echo '<p>'.$directory .'<a href="'.$directory.'">'.$directory.'</a></p>';
        echo '</div>';
        $i++;
        if ($i % 4 == 0) {
            echo '</div><div class="row">';
            $i = 0;
        }
    }
}
?>
    <hr>
</div> <!-- /container -->

<?php
include ('../inc/footer.php');
