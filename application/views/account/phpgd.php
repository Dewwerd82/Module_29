<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
   body { 
    background-image: url(../../../../image.png);
   }
  </style>
</head>
<body>
    
<?php
 
 $width = 800; //Ширина изображения
 
 $height = 600;        //Высота изображения
 
 $img = ImageCreate( $width, $height );// Создаем холст
 
 $white = ImageColorAllocate( $img, 255, 255, 255 );//Задаем фоновый цвет
 
 $black = ImageColorAllocate( $img, 0, 0, 0 );//Задаем цвет для линии окружности
 
 $color = ImageColorAllocate( $img, 100, 100, 100 );//Еще один цвет
 
 $center_x = (int)$width / 2;      //Определяем центр по X. Эта переменная не обязательно должна находиться по центру
 
 $center_x_1 = (int)$width / 4;       //Центр второй окружности по X для наглядности
 
 $center_y = (int)$height / 2; //Центр окружности по Y
 
 $rad_1 = 100;  //Ширина окружности
 
 $rad_2 = 50;  //Высота оружности
 
 ImageEllipse( $img, $center_x, $center_y, $rad_1, $rad_2, $black );//Рисуем окружности
 
 ImageEllipse( $img, $center_x_1, $center_y, $rad_2, $rad_1, $color );
 
 //Выводим изображение в браузер
 
 header('Content-type: image/png' );
 
 ImagePng( $img ,'image.png');
  
 
 ?>

</body>
</html>


