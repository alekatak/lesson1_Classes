<?php

class Pictures
{
    private $formatOfImage;
    private $sizeOfImage;
    private $resolutionOfImage;
    private $defaultFormatOfImage = "bmp";
    private $defaultResolutionOfImage = "3840x2160";
    private $idOfImage;
    private   $br = "<br/>";


    public function __construct($idOfImage, $formatOfImage, $sizeOfImage, $resolutionOfImage)
    {
        $this->idOfImage = $idOfImage;
        $this->formatOfImage = $formatOfImage;
        $this->sizeOfImage = $sizeOfImage;
        $this->resolutionOfImage = $resolutionOfImage;
    }

    public function setDefaultFormatOfImage($defaultFormatOfImage)
    {
        $this->defaultFormatOfImage = $defaultFormatOfImage;
    }

    public function getDefaultFormatOfImage()
    {
        return $this->defaultFormatOfImage;
    }

    public function getDefaultResolutionOfImage()
    {
        return $this->defaultResolutionOfImage;
    }

    public  function setFormatOfImage($formatOfImage)
    {
    $this->formatOfImage = $formatOfImage;
    }

    public function getFormatOfImage()
    {
        return $this->formatOfImage;
    }

    public function getResolutionOfImage()

    {
        return $this->resolutionOfImage;
    }

    public function setResolutionOfImage($resolutionOfImage)
    {
        $this->resolutionOfImage = $resolutionOfImage;
    }

    public function replaceFormat()

    {
       if($this->formatOfImage != "bmp")
       {
           $this->formatOfImage = $this->getDefaultFormatOfImage();
           return ("Изображению"." ".$this->getIdOfImage()." "."присвоен формат:"." ".$this->formatOfImage );
       }
    }

    public function getIdOfImage()
    {
        return  ($this->idOfImage);
    }

   public function  RightIdOfImage()
    {

        if (($this->formatOfImage == "bmp") && ($this->resolutionOfImage == "3840x2160"))
        {
            return  ("Номер изображения, который соответствует требованиям:"." ". $this->getIdOfImage());
        }
        else
        {
          echo "Изображение не соответстует требованиям";
        }
    }


     public function GetNewParagraph()
    {
        return $this->br;
    }


}