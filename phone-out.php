<?php
echo "<link rel='stylesheet' href='style-out.css'>";

$phone = $_POST['phone'];
$name = $_POST['name'];


$adminemail="novvadim1@yandex.ru";  // e-mail админа
$date=date("d.m.y"); // число.месяц.год
$time=date("H:i"); // часы:минуты:секунды
$backurl="https://touchtex.000webhostapp.com/";  // На какую страничку переходит после отправки письма

if(!isset($_POST['name']))
{
    if (!preg_match("/^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){10,14}(\s*)?$/", strtolower($phone)))
    {

        print "<script language='Javascript'><!-- 
        function reload() {location = \"$backurl\"}; setTimeout('reload()', 3000); 
        //--></script> 
        <div class='reaction'>
                    <img src='img/no.png' alt='Провал!'>
                    <p>Повторите отправку! Неверный формат телефона !</p>
                    </div>";

    }
    else
    {
        $msg=" Телефон:$phone ";


        mail($adminemail,

            "Новое сообщение с сайта (от : $msg)","Номер для перезвона: $msg");

        // Выводим сообщение пользователю

        print "<script language='Javascript'><!-- 
        function reload() {location = \"$backurl\"}; setTimeout('reload()', 2000); 
        //--></script> 
    
        <div class='reaction'>
            <img src='img/ok.png' alt='Отправлено!'>
            <p>Сообщение отправлено! </p>
        
        </div>
        ";
        exit;

    }
}
else
    {
        if (!preg_match("/^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){10,14}(\s*)?$/", strtolower($phone))) {

            print "<script language='Javascript'><!-- 
            function reload() {location = \"$backurl\"}; setTimeout('reload()', 3000); 
            //--></script> 
            <div class='reaction'>
                        <img src='img/no.png' alt='Провал!'>
                        <p>Повторите отправку! Неверный формат телефона !</p>
                        </div>";

        } else {
            $msg = " Телефон:$phone 
                    Имя:$name";


            mail($adminemail,

                "Новое сообщение с сайта (от : $msg)", "Перезвоните мне пожайлуста: $msg");

            // Выводим сообщение пользователю

            print "<script language='Javascript'><!-- 
            function reload() {location = \"$backurl\"}; setTimeout('reload()', 2000); 
            //--></script> 
        
            <div class='reaction'>
                <img src='img/ok.png' alt='Отправлено!'>
                <p>Сообщение отправлено! </p>
            
            </div>
            ";
            exit;
        }
    }