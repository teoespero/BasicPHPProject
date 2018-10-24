<!--    
    Teo Espero
    BS Cloud and Systems Administration
    Western Governors University

    #Web-Dev-Bootcamp-Lynda
-->

<!-- handle the title  -->
<?php 
    if(!isset($page_title)){
        $page_title = 'Staff Menu';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="../stylesheets/normalize.css" rel="stylesheet" type="text/css">
    <link href="../stylesheets/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo '<title>' . $page_title . ' - Globe Bank CMS Project | teoespero ' . '</title>'; ?>
</head>
<body>
    <header>
        <div class="container">
            <h1>Globe Bank CMS - Staff Area</h1>
        </div>
    </header>

    <nav>
            <ul>
                <li><a href="index.php">Menu</a></li>
            </ul>
    </nav>