<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name = "viewport" content="width=device-width, inital-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Запчасти</title>
</head>
<body>
   <div class="header">
           <img src="img/logo.png" alt="" class="logo">
   </div>
    <div class="container mt-5">
       
        <h3 class="mb-5 title">Запчасти для мотоцикла Yamaha XV1900 Raider</h3>
        
        <div class="d-flex flex-wrap cards">
            <?php 
                $arr = ['Бак топливный 2',
                        'Боковая крышка',
                        'Вал переключения',
                        'Вал переключения2',
                        'Вилка передней оси',
                        'Впускная система 2',
                        'Впускная система',
                        'Выхлопная система',
                        'Генератор',
                        'Головка цилиндра',
                        'Заднее колесо',
                        'Задний рычаг _ Подвеска',
                        'Задний тормозной суппорт',
                        'Задний тормозной цилиндр',
                        'Задний фонарь (Стоп-сигнал)',
                        'Картер двигателя',
                        'Клапан',
                        'Коленчатый вал _ Поршень',
                        'Крыло',
                        'Крышки картера 1',
                        'Масляный насос',
                        'Панель приборов',
                        'Переднее колесо',
                        'Передний тормоз',
                        'Передний тормозной цилиндр',
                        'Поворотники',
                        'Подножки _ Подставка',
                        'Привод стартера',
                        'Промежуточная передача',
                        'Пульт управления рулевой _ Рычаг',
                        'Рама',
                        'Распредвал _ Цепь ГРМ',
                        'Рулевой механизм',
                        'Руль _ Тросики',
                        'Сиденье',
                        'Сцепление',
                        'Топливный бак',
                        'Трансмиссия',
                        'Фара',
                        'Цилиндр',
                        'Электрооборудование 1',
                        'Электрооборудование 2',
                        ];
            
                $length = count($arr);
	
                for ($i = 0; $i < $length; $i++):
            ?>
            <div class="card mb-4 rounded-3 shadow-sm mb-3">
                <div class="card-img">
                    <img class = "detail_moto_img" src="img/<?php echo $arr[$i] ?>.png" alt="">
                </div>
                <div class="card-body">
                    <span><?php echo $arr[$i] ?></span>
                </div>
            </div>
            <?php endfor ?>
        </div>
    </div>
   <footer class="mt-5">
          <div class="foot_logo">
              <img src="img/logo.png" alt="" class="logo">
          </div>
           
           <div class="soc_seti">
               <a href="" class="soc_seti_links"><img src="img/soc_seti/mail.png" alt="" class="soc_seti_img"></a>
               <a href="" class="soc_seti_links"><img src="img/soc_seti/vk.png" alt="" class="soc_seti_img"></a>
               <a href="" class="soc_seti_links"><img src="img/soc_seti/inst.png" alt="" class="soc_seti_img"></a>
               <a href="" class="soc_seti_links"><img src="img/soc_seti/wa.png" alt="" class="soc_seti_img"></a>
               <a href="" class="soc_seti_links"><img src="img/soc_seti/yt.png" alt="" class="soc_seti_img"></a>
           </div>
    </footer>
</body>
</html>