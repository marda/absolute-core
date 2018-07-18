<?php

namespace Absolute\Core\Helper;

class ImageHelper
{

  public static function pdfToImageBlob($filepath) 
  {
    $imagick = new \Imagick();
    $imagick->setResolution(300,300);
    $imagick->readimage($filepath . '[0]'); 
    $imagick->setImageFormat('jpeg');    
    $blob = $imagick->getImageBlob();
    $imagick->clear(); 
    $imagick->destroy();
    return $blob;
  }

  public static function imageToImageBlob($filepath) 
  {
    $imagick = new \Imagick($filepath);
    $blob = $imagick->getImageBlob();
    $imagick->clear(); 
    $imagick->destroy();
    return $blob;
  }
}

