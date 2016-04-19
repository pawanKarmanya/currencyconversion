<?php include('submit.php');?>
<!doctype html>
<html>
    <head>
        <title>Currency Conversion</title>
    </head>
    <body>
        <form method="post">
            Amount: <input type="text" name="amount" required>
            From: <input type="text" name="from" required>
            To: <input type="text" name="to" required>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>