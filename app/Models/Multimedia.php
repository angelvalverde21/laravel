<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Multimedia extends Model
{
    use HasFactory;

    
    const TYPE_FOTO = 1;
    const TYPE_COLOR = 2;
    const TYPE_SESION_FOTO = 3;
    const DIRECTORY = 'multimedia';

    public static function rgbColor($rutaImagen)
    {
        //do whatever you want to do
        // obtenemos el tipo mime de la imagen (desde PHP 5.3)
        $finfo=finfo_open(FILEINFO_MIME_TYPE);
        $fileMime=finfo_file($finfo, $rutaImagen);
    
        // abrimos la imagen
        if($fileMime=="image/jpeg" || $fileMime=="image/pjpeg")
            $imgId=imagecreatefromjpeg($rutaImagen);
        elseif($fileMime=="image/gif")
            $imgId=imagecreatefromgif($rutaImagen);
        elseif($fileMime=="image/png")
            $imgId=imagecreatefrompng($rutaImagen);
        else
            return array(0,0,0);
    
        $red=0;
        $green=0;
        $blue=0;
        $total=0;
    
        // Recorremos todos los valores horizontales
        for ($x=0;$x<imagesx($imgId);$x++)
        {
            // Recorremos todos los valores verticales
            for ($y=0;$y<imagesy($imgId);$y++)
            {
                // Obtenemos los valores red, green, blue de cada pixel de la imagen
                // (http://php.net/manual/en/function.imagecolorat.php)
                $rgb=imagecolorat($imgId,$x,$y);
    
                // devuelve el indice de cada color
                $red+=($rgb >> 16) & 0xFF;
                $green+=($rgb >> 8) & 0xFF;
                $blue+=$rgb & 0xFF;
    
                $total++;
            }
        }
        $redPromedio = round($red/$total);
        $greenPromedio = round($green/$total);
        $bluePromedio = round($blue/$total);

        //return array($redPromedio,$greenPromedio,$bluePromedio);
        return $redPromedio.$greenPromedio.$bluePromedio;

    }

}
