<?php
class FileOwners
{

    public static function groupByOwners(array $files)
    {
        $file_return = [];
        $files_copy = $files;
        foreach ($files as $x => $x_value) {
            $found = false;
            if (array_key_exists($x_value, $file_return))
                array_push($file_return[$x_value], $x);
            else {
                $file_return[$x_value] = array();
                array_push($file_return[$x_value], $x);
            }
        }
        print_r($file_return);
        return NULL;
    }
}
$files = [
    'input.txt' => 'Randy',
    'output.txt' => 'Evan',
    'test.txt' => 'Randy',
    'newtest.txt' => 'Evan'
];
$owner = new FileOwners();
echo "<pre>";print_r(FileOwners::groupByOwners($files));

?>