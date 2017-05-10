<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> Project - Template Class Web Applications </title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="css/justified-nav.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <!-- The justified navigation menu is meant for single line per list item.
         Multiple lines will require custom code not provided by Bootstrap. -->
        <div class="masthead">
            <h3 class="text-muted">Hola <?php echo $first_name . ' ' . $last_name; ?>!</h3>
            <nav>
                <ul class="nav nav-justified">
                    <li class="active"><a href="/index.php">Inicio</a></li>
                    <li><a href="?controller=posts&action=index">Posts</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Downloads</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Login</a></li>
                </ul>
            </nav>
        </div>
        <section>
            <?php require_once('routes.php'); ?>
        </section>
        <!-- Site footer -->
        <footer class="footer">
            <p>&copy; 2017</p>
        </footer>

    </div>
    <script src="/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>