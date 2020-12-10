<?php
    // Humanクラスを作ってHelloと出力

    // step1 クラスを宣言
    class Human{
        // step3 プロパティ
        public $name;

        // step4 メソッド
        function greeting($greeting){
            echo $this->name . 'の' . $greeting;
        }
        
        function setName($namae){
            $this->name = $namae;
            // $this：このクラス：
        }

    }

    // step2 インスタンス作成
    $human = new Human();
    $human->setName('比奈子');
    $human->greeting('こんにちは'); //function greetingを呼び出し
    // $human->greeting('おはようございます');
    // $human->greeting('こんばんは');
    // -> アロー演算子：～の

    $human1 = new Human();
    $human1->setName('ギョンス');
    $human1->greeting('アンニョンハセヨ'); 