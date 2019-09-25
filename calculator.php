<?php
function start_page($title)
{
    echo '<!DOCTYPE html>
        <html lang="fr">
        <head><title>' . PHP_EOL . $title . '</title></head><body>' . PHP_EOL;
};
?>
<?php function end_page()
{
    echo '<hr/><br/><strong>Test</strong><br/><hr/>';
};
?>

<?php $operator = '*+-/'; ?>


<?php start_page(Calculatrice);?>

<?php
    echo '<p>
    <form action="calcul.php" method="post">';
        for($cpt = 1; $cpt <= 2; ++$cpt)
        {
            echo 'Opérant n°' . $cpt . ' : ' . "\t" . '<input ';
            echo 'type="number" name="op'. $cpt . '" value="opérant n°'.$operator[$cpt] . '"/>' . '<br/><br/>';
        }
        for($cpt = 0; $cpt <= 3; ++$cpt)
        {
            echo '<input ';
            echo 'type="submit" name="op" value="'.$operator[$cpt] . '"/>' . "\t";
        }
        echo '</form></p>';
?>
