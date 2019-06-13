<?php
/**
 * Created by PhpStorm.
 * User: linqiangy
 * Date: 2019/6/13
 * Time: 下午2:23
 */

require_once __DIR__ . '/vendor/autoload.php';

$spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'Hello World');

$writer = new \PhpOffice\PhpSpreadsheet\Writer\Xls($spreadsheet);
$writer->save('./hello.xls');


