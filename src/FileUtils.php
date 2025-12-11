<?php

namespace Kucil;

/**
 * @author  Menyong Menying <menyongmenying.main@gmail.com>
 * 
 * @version 0.0.1
 * 
 * 
 * 
 */
class FileUtils
{
    /**
     * Meneruskan hasil pemeriksaan apakah filepath yang diberikan valid.
     * 
     * NOTE:
     * Jika nilai yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     *
     * @param  ?string $source Nilai filepath yang akan diperiksa.
     *
     * @return ?bool           Hasil pemeriksaan apakah $source ada.
     * 
     * @see    FileTests::testFileExists()
     * 
     * 
     */
    public static function fileExists(?string $source = null): ?bool
    {
        $null = null;
        if ($source === $null) {
            return $null;
        }        

        $fileExists = file_exists($source);
        return $fileExists;
    }



    /**
     * Meneruskan isi dari file.
     * 
     * NOTE:
     * Jika nilai yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     *
     * @param  ?string $source Nilai filepath yang akan diambil.
     *
     * @return ?bool           Nilai $source.
     * 
     * @see    FileTests::testGetFiles()
     * 
     * 
     */
    public static function getFiles(?string $source): ?string
    {
        $null = null;
        if ($source === $null || !self::fileExists($source)) {
            return $null;
        }

        $getFiles = file_get_contents($source);
        return $getFiles;
    }
}