<?php
/*
 Для наружной рекламы новоиспечённый копирайтер Аллочка прислала Вам 5 вариантов изображений для печати на предприятии.
"Выберете подходящий дизайн" - сказала она Вам. Некоторое время спустя Вы обнаружили, что картинки не соовтетстуют
необходимым требованиям: файл должен быть в формате bmp и в разрешении 3840x2160.
Используя ООП вам, как начальнику и программисту необходимо вывести "id" картинкок согласно требованиям. Если картинка
имеет неверный формат, преобразовать его в bmp.
 */

require_once ("Pictures.php");
$image1 = new Pictures("1", "jpeg", "700kb", "1280x1024");
echo $image1->RightIdOfImage();
echo $image1->GetNewParagraph();
$image2 = new Pictures("2", "jpeg", "2.1mb", "3840x2160");
echo $image2->RightIdOfImage();
echo $image2->GetNewParagraph();
$image3 = new Pictures("3", "bmp", "1mb", "1280x1024");
echo $image3->RightIdOfImage();
echo $image3->GetNewParagraph();
$image4 = new Pictures("4", "tiff","3mb","3840x2160");
echo $image4->replaceFormat();
echo $image4->GetNewParagraph();
echo $image4->RightIdOfImage();
echo $image4->GetNewParagraph();
$image5 = new Pictures("5", "bmp", "4mb", "3840x2160");
echo $image5->RightIdOfImage();
    ?>