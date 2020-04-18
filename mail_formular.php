<html>
<body>
<?php
    mail("marinkovic.boban29@outlook.de",$_POST["betreff"],$_POST["bachricht"], "From: " . $_POST["absender"]);
?>
</body>
</html>