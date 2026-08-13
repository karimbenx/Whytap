if ($error == "") {

    $data = $firstname . "|" . $lastname . "|" . $gender . PHP_EOL;
    file_put_contents("data.txt", $data, FILE_APPEND);

    header("Location: page2.php");
    exit();

} else {

    echo "<h2>Error:</h2>";
    echo $error;

}