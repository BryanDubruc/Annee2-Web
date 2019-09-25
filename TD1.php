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

<?php
    start_page('titre');
?>

<?php
$var1 = 6;
$var2 = 1.3;
$var3 = 'Variable 3';
?>

<?php echo "$var1 + $var2";?>
<?php echo $var1 + $var2;?>
<?php echo $var1 + $var3;?>
<?php $jour = date('d/m/y'); ?>
<?php $day = date( 'F d, Y, g:i a')?>

<?php
echo '<br/></strong> Voici mon premier programme PHP </strong><br/>'."\n";
echo 'C \'est pas mal non ? <br/>';
echo $jour . '<br/>';
echo $day;
'</body>'
?>




<?php
    end_page();
?>
