<?php
include_once 'config.php';
include_once 'tools.php';
include_once 'top_menu.php';
include 'status.php';
include 'system.php';
// configuration//
$id = $_POST['id'];
if($id="svxlink") {
    shell_exec("cd /etc/svxlink/");
    $file = "svxreflector.conf";
    echo "svxreflector.conf";
}
if($id="gpio") {
    shell_exec("cd /etc/svxlink/");
    $file = "gpio.conf";
    echo "gpio.conf";
}
if($id="echolink"){
    shell_exec("cd /etc/svxlink/svxlink.d/");
    $file = "ModuleEchoLink.conf";
    echo "EchoLink.conf";
}
if($if="metarinfo"){
    shell_exec("cd /etc/svxlink/svxlink.d");
    $file = "ModuleMetarInfo.conf";
    echo "metarinfo.conf";
}
// check if form has been submitted
//$filename = by choice;

$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"."editor.php";
if (isset($_POST['text']))
{
    // save the text contents
    file_put_contents($file, $_POST['text']);

    // redirect to form again
    header(sprintf('Location: %s', $url));
    printf('<a href="%s">Moved</a>.', htmlspecialchars($url));
    exit();
}

// read the textfile
$text = file_get_contents($file);

?>
<!-- HTML form -->
<form action="/include/editor.php" method="post">
<textarea name="text"><?php echo htmlspecialchars($text); ?></textarea>
<input type="submit" />
<input type="reset" />
</form>
<?php
$fi = fopen($file, 'r');
explode("\n", fread($fi, filesize($fi)));
print_r($fi, true);

?>
