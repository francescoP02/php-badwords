<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>



<?php
    //dichiariamo le variabili

    $text = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus rerum pariatur corrupti nostrum dignissimos, laudantium, officia facilis et exercitationem obcaecati quam similique sit cupiditate nobis minima labore ipsum eveniet ut?";

?>

<h1>Il testo è:</h1>
<p>
    <?php 
    //testo non modificato
    echo $text 
    ?>
</p>

<h4>La lunghezza del testo è di:</h4>
<span>
    <?php
    //lunghezza del testo
    echo strlen($text)
    ?>
</span>

<?php $badword = $_GET["badword"]; ?>

<h4>La parola da censurare è:</h4>
<span> 
    <?php
    //parola da rimuovere nel testo
    echo $badword 
    ?> 
</span>

<?php
    $censured = str_replace($badword, "***", $text); 
    // un esempio è http://localhost/php-badwords/?badword=sit
?>

<h2>Il paragrafo censurato è:</h2>
<p><?php echo $censured ?></p>

</body>
</html>