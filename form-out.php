<?php
echo "<link rel='stylesheet' href='style-out.css'>";

if(isset($_POST['Whatsapp']))
{
    $whatsapp = "Whatsapp";
}

if(isset($_POST['Phone']))
{
    $checkphone = "Телефону";
}

if(isset($_POST['SMS']))
{
    $SMS = "SMS";
}





$name = $_POST['name'];
$address = $_POST['address'];
$area = $_POST['area'];
$rooms = $_POST['rooms'];
$floor = $_POST['floor'];
$years = $_POST['years'];
$phone = $_POST['phone'];





$adminemail="novvadim1@yandex.ru";  // e-mail админа
$date=date("d.m.y"); // число.месяц.год
$time=date("H:i"); // часы:минуты:секунды
$backurl="https://touchtex.000webhostapp.com/";  // На какую страничку переходит после отправки письма


if(!isset($_POST['phone']))
{
    

    if(!isset($_POST['name'])) {
    
        if (!preg_match("/^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){10,14}(\s*)?$/", strtolower($phone))) {
    
            print "<script language='Javascript'><!-- 
                function reload() {location = \"$backurl\"}; setTimeout('reload()', 3000); 
                //--></script> 
                <div class='reaction'>
                            <img src='img/no.png' alt='Провал!'>
                            <p>Повторите отправку! Неверный формат телефона !</p>
                            </div>";
    
        } else {
            $msg = " 
                
    
            Адресс:$address
            Площадь:$area
            Кол комнат:$rooms
            Этаж:$floor
            Год постройки:$years
            Телефон:$phone
    
            ";
    
    
            mail($adminemail,
    
                "Новое сообщение с сайта (от : $phone)", "Свяжитесь со мной по СМС: $msg");
    
            // Выводим сообщение пользователю
    
            print "<script language='Javascript'><!-- 
                function reload() {location = \"$backurl\"}; setTimeout('reload()', 2000); 
                //--></script> 
            
                <div class='reaction'>
                    <img src='img/ok.png' alt='Отправлено!'>
                    <p>Сообщение отправлено ! </p>
                
                </div>
                ";
            exit;
    
        }
    }
    else
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
            $msg=" 
        Имя: $name
        E-mail: $phone
        Адресс:$address
        Площадь:$area
        Кол комнат:$rooms
        Этаж:$floor
        Год постройки:$years
        Телефон:$phone
        Использовать для связи удобнее: $whatsapp, $checkphone, $SMS
    ";
    
    
            mail($adminemail,
    
                "Новое сообщение с сайта (от : $name $phone)","СВЯЖИТЕСЬ СО МНОЙ ПО СМС: $msg");
    
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

}
else
{
    print "<script language='Javascript'>
            function empty() {
                alert('Заполните обязательное поле!');
              
            }
            </script> ";
}

