<?php
interface LoggerInterface {
    public function log($message);
}

class FileLogger implements LoggerInterface {
    private $filePath;

    public function __construct($filePath) {
        $this->filePath = $filePath;
    }

    public function log($message) {
        file_put_contents($this->filePath, $message . PHP_EOL, FILE_APPEND);
        echo "Logged to file: $message\n";
    }
}

class DatabaseLogger implements LoggerInterface {
    public function log($message) {
        echo "Logged to database: $message\n";
    }
}

$fileLogger = new FileLogger('log.txt');
$fileLogger->log("File log message 1");

$databaseLogger = new DatabaseLogger();
$databaseLogger->log("Database log message 1");
?>
