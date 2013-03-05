<?php
ini_set("display_errors", 1);

setlocale(LC_ALL, 'ja_JP.UTF-8');


$num = "ペン4";
$row = 1;
if (($handle = fopen("address.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1024, ",")) !== FALSE) {
        //print "<p>$row fields in line: <br/></p>\n";
        //$row++;
        //print_r($data);
        print "<br/>";
        //if (preg_match("/$num/", $data[3], $matches)) {
            //$name[] = $matches[1];
        //  print '検索結果は、' . implode( '<br/>', $matches). 'です';
        //}
        //if ($data[3] == $num) {
        //  $name[] = $data[3];
        //} else {
        //  print 'Not found';
        //}
        if ($name = strstr($data[3], $num)) {
            print $name;
            print_r($name);
        }
    }
    // print '検索結果は、' . implode( '<br/>', $name). 'です';
    fclose($handle);
}
?>
