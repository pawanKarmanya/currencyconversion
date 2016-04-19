<?php include('submit.php');?>
<!doctype html>
<html>
    <head>
        <title>Currency Conversion</title>
    </head>
    <body>
        <form method="post">
            <P>Use Currency Codes only</P>
            Amount: <input type="text" name="amount" required>
            From: <input type="text" name="from" required>
            To: <input type="text" name="to" required>
            <input type="submit" value="Submit" name='convert'>
        </form>
        <div><br><br><?php if(isset($data[0])){
echo $data[0];}?></div>
        <article>
        </article>
    </body>
</html>