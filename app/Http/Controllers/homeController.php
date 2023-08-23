<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Symfony\Component\Console\Input\Input;

class homeController extends Controller
{
    public function show()
    {
        $var = "Некая переменная";
        return view('home', ['var' => $var, 
                    'var2' => "Еще одна переменная",
                    'var3' => 88]);
    }
    public function array()
    {
        $var = ["Лена", "Ока", "Волга", "Дон"];
        return view('array', ['var' => $var]);
    }
    public function news()
    {
        $varOne = "Сингапур и Нью-Йорк возглавили рейтинг самых дорогих для жизни городов мира.";

        $varTwo = "Сингапур и Нью-Йорк возглавили рейтинг городов с самой высокой стоимостью проживания в мире, следует из рейтинга Worldwide Cost of Living от Economist Intelligence Unit, аналитического подразделения британской компании Economist Group.
        Сингапур возглавлял рейтинг с 2014 по 2019 год, затем уступив это звание Парижу и Тель-Авиву.
        За Сингапуром и Нью-Йорком в нынешнем рейтинге следуют Тель-Авив, Лос-Анджелес и Гонконг.";
        return view('news', ['varOne' => $varOne, 'varTwo' => $varTwo]);
    }
    public function newsMore()
    {
        $varThree = "Россия безвозмездно поставит шести странам Африки до 50 тысяч тонн зерна.";
        $varFour  = "О готовности Москвы продолжить поставки зерна африканским государствам — как на коммерческой основе, 
        так и безвозмездно — заявил Владимир Путин на саммите Россия — Африка, 
        который состоялся в Петербурге в конце июля.";

        $varFive = "В Ленинградском зоопарке впервые за 16 лет родился манул.";
        $varSix  = "Детеныш манула родился в Ленинградском зоопарке впервые с 2007 года, 
        сообщили в пресс-службе учреждения. 
        Приятное событие произошло в канун 158-й годовщины основания зоопарка.
        Малыш-самец стал первенцем для живущей в зоопарке пары манулов (хищники семейства кошачьих). 
        Он появился на свет в конце мая и к настоящему моменту весит 1 килограмм 94 грамма, 
        растет активным и здоровым.";

        $varSeven = "Исследование: ежедневное употребление орехов снижает риск депрессии.";
        $varEight  = "Недавнее исследование сотрудников университета Кастилия-Ла-Манча, 
        которое будет опубликовано в журнале Clinical Nutrition, доказывает, 
        что орехи могут приносить удивительную пользу для психического здоровья. 
        Эксперименты показали,что ежедневное употребление около 30 граммов этого продукта может помочь снизить риск депрессии у взрослых.";

        return view('newsMore', [
            'varThree' => $varThree, 
            'varFour' => $varFour,
            'varFive' => $varFive,
            'varSix' => $varSix,
            'varSeven' => $varSeven,
            'varEight' => $varEight,
        ]);
    }
    public function contacts() {
        $varcontact = ["+7(900)000-00-00", "+7(800)222-22-22"];
        $varadress = ["Москва, Ленинградский проспект 74А", "Москва, Дмитровское шоссе, д.33" ];
        
        return view ('contacts', ['varcontact' => $varcontact,'varadress' => $varadress]);
    }

    public function page()
    {
        
        return view('page.main');
    }

    public function master()
    {
        
        return view('page1.master');
    }
    
    public function vars()
    {
        $code = "function showM() {
        alert('Hello mans!')}";
        return view('vars', compact('code'));
    }
}