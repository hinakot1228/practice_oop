<?php
    // Humanクラスを作ってHelloと出力

    // step1 クラスを宣言
    class Human{
        // step3 プロパティ
        private $name; // 人間は名前を持つ

        // step4 メソッド（関数）
            // 人間の技（挨拶するとか）
            
        // セッター：プロパティに値をセットするメソッド＝
        // function setName($namae){
        //     $this->name = $namae;  // nameプロパティに対して実際の値をセットするメソッド
        // $this：このクラス：
        // }

        // ゲッター：nameプロパティをゲット
        function greeting($greeting){
            echo $this->name . 'の' . $greeting;
        } 

        // function getName(){
        //     return $this->name;
            // return：呼び出し元に返す
        // }

        // コンストラクタ
        function __construct($namae){
            $this->name = $namae;
        }
    }

    // step2 インスタンス作成
    $human = new Human('比奈子');
    // $human->name = 'ひなこ';
    // $human->setName('比奈子');
    $human->greeting('こんにちは'); //function greetingを呼び出し
    // echo $human->getName() . 'です';
    // $human->greeting('おはようございます');
    // $human->greeting('こんばんは');
    // -> アロー演算子：～の

    $human1 = new Human('ギョンス');
    // $human1->setName('ギョンス');
    $human1->greeting('アンニョンハセヨ'); 