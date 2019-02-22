<?php
/**
 * Created by PhpStorm.
 * User: Kovalenko Nikolaj
 * Date: 22.02.2019
 * Time: 16:50
 */
 //промежуточный скрипт запроса курса валют
 require_once '../vendor/rate/CurrencyConverter.php';

 //создаем объект  класса обработчика
 $data = new CurrencyConverter($_POST);

 //получаем и отправляем результат
 echo $data->getResult();

 exit;

