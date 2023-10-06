<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>
<body>

<?php 
    include('header.php'); 
    include('oeuvres.php');
    echo $_GET['id'];
?>

<main>

<?php 
    foreach ($oeuvres as $element) {
    if ($element ['id'] == $_GET ['id']) {
?>

    <article id="detail-oeuvre">
        <div id="img-oeuvre">
            <img src="<?php echo $element['image']; ?>" alt="<?php echo $element['title']; ?>">
        </div>
        <div id="contenu-oeuvre">
            <h1><?php echo $element['title']; ?></h1>
            <p class="description"><?php echo $element['author']; ?></p>
            <p class="description-complete"><?php echo $element['description']; ?></p>
        </div>
    </article>

<?php 
}
}
?>

</main>

<?php include('footer.php'); ?>

</body>
</html>