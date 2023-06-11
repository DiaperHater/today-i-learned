<?php

class FileWriter {

    private $file;
    private $fileHandle;
    private static $writesCount = 0;

    public function __construct( $file ) {

        $this->file = $file;
        if( !is_writable( $this->file ) ) {

            throw new Exception( "Unable to open ({$this->file}) for writing" );
        }

        $this->fileHandle = fopen( $this->file, 'a' );
        echo "Open \"{$this->file}\"" . PHP_EOL;
    }

    public static function manual() {

        echo "This is man pages for FileWriter class" . PHP_EOL;
        echo "ready stady Go!!!!" . PHP_EOL;
    }
    
    public function __destruct() {
        
        if( fclose( $this->fileHandle ) ) {
            
            echo "Close \"{$this->file}\"" . PHP_EOL;
        }
    }

    public function write( $data ) {        
        
        if( fwrite( $this->fileHandle, $data . PHP_EOL ) ) {

            echo "Write \"$data\" to file \"{$this->file}\"" . PHP_EOL;

            self::$writesCount++;
        }
    }

    public static function writesCount() {

        echo self::$writesCount . PHP_EOL;
    }
}