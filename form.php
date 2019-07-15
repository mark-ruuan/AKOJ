<?php

$comment = null;

if($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['preview-form-area'])){
    $comment = $_POST['preview-form-area'];
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>CodeMirror</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" type="text/css" href="plugin/codemirror/lib/codemirror.css">
</head>
<body>
    <form id="preview-form" method="post" action="">
        <textarea class="codemirror-textarea" name="preview-form-area" id="preview-form-area"></textarea>
        <br>
        <input type="submit" name="preview-form-submit" id="preview-form-submit" value="Submit">
    </form>
    <div id="preview-comment"><?php echo $comment;?></div>
    <!-- js files -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    
</body>
<script>
</html>