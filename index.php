<?php

$comment = null;

if($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['preview-form-area'])){
    $comment = $_POST['preview-form-area'];
    $lang = $_POST['lang'];
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>AKOJ</title>
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap-reboot.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap-grid.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugin/codemirror/lib/codemirror.css">
    <link rel="stylesheet" type="text/css" href="plugin/codemirror/lib/rubyblue.css">
	<link rel="stylesheet" href="css/footer-distributed.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/button.css" type="text/css">
</head>
<body>
    <?php include('header.html');?>
    <br>
    <div class="panel panel-default">
        <div class="panel-heading text-center"> <h3>Halloween Sale </h3></div>
        <br>
        <div class="panel-body">
            <p class="text-left">You wish to buy video games from the famous online video game store Mist.Usually, all games are sold at the same price,  dollars. However, they are planning to have the seasonal Halloween Sale next month in which you can buy games at a cheaper price. Specifically, the first game you buy during the sale will be sold at dollars, but every subsequent game you buy will be sold at exactly  dollars less than the cost of the previous one you bought. This will continue until the cost becomes less than or equal to  dollars, after which every game you buy will cost  dollars each.
            </p>
        </div>
        <div class="panel-heading text-left"><h6>Input Format</h6></div>
        <div class="panel-body">
            <p class="text-left">The first and only line of input contains four space-separated integers p, d, m and s.</p>
        </div>
        <div class="panel-heading text-left"><h6>Constraint</h6></div>
        <div class="panel-body">
            <li>1 <= m <= 100</li>
            <li>1 <= d <= 100</li> 
        </div>
        <br>
        <div class="panel-heading text-left"><h6>Output Format</h6></div>
        <div class="panel-body">
            <p class="text-left">Print a single line containing a single integer denoting the maximum number of games you can buy.</p>
        </div>
    </div>
    <form id="preview-form" method="post" action="">

        <div class="col-lg-3 center-block">
            Select Language:</br>
            <select name="lang" id="lang">
                <option value="14">Bash (bash 4.0.35)</option>
                <option value="1">C (gcc-4.3.4)</option>
                <option value="9">C# (mono-2.8)</option>
                <option value="2" selected="selected">C++ (gcc-4.7.2)</option>
                <option value="2">C++ (gcc-4.5.1)</option>
                <option value="13">Clojure (clojure 1.1.0)</option>
                <option value="36">COBOL (open-cobol-1.0)</option>
                <option value="36">COBOL 85 (tinycobol-0.65.9)</option>
                <option value="54">Fortran (gfortran-4.3.4)</option>
                <option value="12">Haskell (ghc-6.8.2)</option>
                <option value="3">Java (sun-jdk-1.6.0.17)</option>
                <option value="20">JavaScript </option>
                <option value="25">Pascal</option>
                <option value="6">Perl (perl 5.12.1)</option>
                <option value="7">PHP (php 5.2.11)</option>
                <option value="5">Python </option>
                <option value="8">Ruby (ruby-1.9.2)</option>
                <option value="15">Scala (scala-2.8.0.final)</option>
                <option value="40">Tcl (tclsh 8.5.7)</option>
                <option value="37">Visual Basic .NET (mono-2.4.2.3)</option>
            </select></br>
        <textarea class="codemirror-textarea text-center" name="preview-form-area" id="preview-form-area"></textarea>
        </div>
        <br>
        <div class="text-center"> 
        <input type="submit" name="preview-form-submit" id="preview-form-submit" value="Submit" class="myButon">
        </div>
    </form>
    <!--
    <div id="preview-comment"><?php echo $comment;?></div>
    <div id="preview-comment"><?php echo $lang;?></div>
    -->
    <?php include('footer.php');?>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="plugin/codemirror/lib/codemirror.js"></script>
    <script type="text/javascript" src="js/default.js"></script>
</body>

</html>