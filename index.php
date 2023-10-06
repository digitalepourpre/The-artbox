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
        <div id="liste-oeuvres">

            <?php
            foreach($oeuvres as $element) {
            ?>

            <article class="oeuvre">
                <a href="oeuvre.php?id=<?php echo $element['id']; ?>" >
                    <img src="<?php echo $element['image']; ?>" alt="<?php echo $element['title']; ?>">
                    <h2><?php echo $element['title']; ?></h2>
                    <p class="description"><?php echo $element['author']; ?></p>
                </a>
            </article>

            <?php
            }
            ?>
            
        </div>
    </main>
<?php
    include('footer.php');
?>
</body>

</html>