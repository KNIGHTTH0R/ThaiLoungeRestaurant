<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- the head section -->
<head>
    <title>Thai Republic</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<!-- the body section -->
<body>
    <div id="page">
        <div id="header">
            <h1>Sorry Error</h1>
        </div>

        <div id="main">
            <h1>Database Error</h1>
            <p>There was an error connecting to the database.</p>
            <p>Error message: <?php echo $error_message; ?></p>
            <p>&nbsp;</p>
        </div><!-- end main -->

        <div id="footer">
            <p class="copyright">
                &copy; <?php echo date("Y"); ?> Thai Republic
            </p>
        </div>

    </div><!-- end page -->
</body>
</html>