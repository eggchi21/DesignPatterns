<?php
require_once('Reader.class.php');
require_once('CSVFileReader.class.php');
require_once('XMLFileReader.class.php');

/**
 * Readerクラスのインスタンス生成を行なうクラスです
 */
class ReaderFactory
{
    /**
     * Readerクラスのインスタンスを生成します
     */
    public function create($filename)
    {
        $reader = $this->createReader($filename);
        return $reader;
    }

    /**
     * Readerクラスのサブクラスを条件判定し、生成します
     */
    private function createReader($filename)
    {
        $posCsv = stripos($filename, '.csv');
        $posXml = stripos($filename, '.xml');

        if ($posCsv !== false) {
            $r = new CSVFileReader($filename);
            return $r;
        } elseif ($posXml !== false) {
            return new XMLFileReader($filename);
        } else {
            die('This filename is not supported : ' . $filename);
        }
    }
}