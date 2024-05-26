<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>クラスを2つ作ってそれぞれのインスタンスを出力しよう</title>
</head>


<body>
    <p> 
        <?php
        // クラスを定義する
        class Food{
        // プロパティを定義する
        private $name;
        private $price;

        // コンストラクタを定義する
        public function __construct(string $name , int $price) {
            $this->name = $name;
            $this->price = $price;
        }
        public function show_price() {
            echo $this->price. "<br>" ;
        }
    }

    class Animal{
         // プロパティを定義する
         private $name;
         private $height;
         private $weight;
 
         // コンストラクタを定義する
         public function __construct(string $name , int $height,int $weight) {
             $this->name = $name;
             $this->height = $height;
             $this->weight = $weight;
    }
     // height プロパティの値を出力するメソッド
     public function show_height() {
        echo $this->height. "<br>" ;
    }
}

    $food = new Food('potato',250);

        // インスタンス$Foodの各プロパティの値を出力する
        print_r($food);
        echo "<br>";

    $animal = new Animal("dog",60,5000);

    print_r($animal);
    echo "<br>";

             // Food クラスのメソッドを呼び出して height の値を出力する
             $food->show_price();
            
            // Animal クラスのメソッドを呼び出して height の値を出力する
            $animal->show_height();
        ?>
    </p>

</body>



</html>


