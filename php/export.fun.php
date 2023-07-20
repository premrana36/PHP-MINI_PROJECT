<?php

require_once("./database.config.php");
require("./vendor/autoload.php");


//php_spreadsheet_export.php
use PhpOffice\PhpSpreadsheet\Spreadsheet;

if ($_POST["export"] ?? false) {

  $from = $_POST["from"];
  $to = $_POST["to"];

  $i = 0;
  // print_r($_POST);
  foreach ($_POST as $key => $value) {
    if ($value == "on") {
      $selectCol[$i] = $key;
      $i++;
    }
  }
  $selectColStr = implode(", ", $selectCol);

  // Connect ot database
  $conn = databaseConnector();

  // Sql query
  $sql = "SELECT " . $selectColStr . " FROM students WHERE '$from' <= submit_datetime AND submit_datetime <= '$to';";

  // Execute sql query and store result
  $result = mysqli_query($conn, $sql);


  $result = mysqli_query($conn, $sql);
  $file = new spreadsheet();
  $active_sheet = $file->getActiveSheet();

  $cellName = "A";
  for ($i = 0; $i < count($selectCol); $i++) {
    $active_sheet->setCellValue($cellName . 1, $selectCol[$i]);
    $cellName++;
  }

  // $active_sheet->setCellValue('B1', 'Last Name');
  // $active_sheet->setCellValue('C1', 'Created At');
  // $active_sheet->setCellValue('D1', 'Updated At');
  $count = 2;
  while ($row = mysqli_fetch_row($result)) {
    $cellName = "A";
    for ($i = 0; $i < count($selectCol); $i++) {
      $active_sheet->setCellValue($cellName . $count, $row[$i]);
      // $active_sheet->setCellValue('B' . $count, $row[1]);
      // $active_sheet->setCellValue('C' . $count, $row[2]);
      // $active_sheet->setCellValue('D' . $count, $row[3]);
      $cellName++;
    }
    $count = $count + 1;
  }
  $writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($file, "Xlsx");
  $file_name = "XLS_" . date("ymd") . "_" . date("His") . ".xlsx";
  $writer->save($file_name);
  header('Content-Type: application/x-www-form-urlencoded');
  header('Content-Transfer-Encoding: Binary');
  header("Content-disposition: attachment; filename=\"" . $file_name . "\"");
  readfile($file_name);
  unlink($file_name);
  exit;


  // Close database
  databaseConnectorClose($conn);
}


// Connection 


// $conn = databaseConnector();
// $sql = "SELECT * FROM students";

// $result = mysqli_query($conn, $sql);
