<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
     <p>
      <?php
        // クラスの定義（例：class Product { …… }）
        class Food {
            // プロパティの定義（例：public $name;）
            private $name;
            private $price;
        
            // コンストラクタの定義
            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }
            // メソッドを定義する
            public function show_price() {
                echo $this->price. '<br>';
                // $this->name = $name;
                // $this->price = $price;
                // 中身やっていることはコンストラクタとかわらないため
            }
        }
        
        // インスタンス化（例：$shampoo = new Product();）
        $potato = new Food('potato',250);
        
        // プロパティへのアクセス（例：$shampoo->name;）
        // $potato->set_name('potato');
        // $potato->show_name();
        // // メソッドへのアクセス（例：$shampoo->show_name();）
        // $potato->set_name('potato');
        // $potato->show_name();

        // インスタンス$userの各プロパティの値を出力する
        // メソッドを定義したものを呼び出している
        // print_r($potato);
        // echo $potato->show_price();

        // 25行目で既にechoしているため
        
        class Animal {
            // プロパティの定義（例：public $name;）
            private $name;
            private $height;
            private $weight;
        
            // コンストラクタの定義
            public function __construct(string $name, int $height, int $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
            // メソッドを定義する
            public function show_height() {
                echo $this->height;
                // $this->name = $name;
                // $this->price = $price;
                // 中身やっていることはコンストラクタとかわらないため
            }
        }
        
        // インスタンス化（例：$shampoo = new Product();）
        $dog = new Animal('dog', 60, 5000);
        
        // プロパティへのアクセス（例：$shampoo->name;）
        // $potato->set_name('potato');
        // $potato->show_name();
        // // メソッドへのアクセス（例：$shampoo->show_name();）
        // $potato->set_name('potato');
        // $potato->show_name();

        // インスタンス$userの各プロパティの値を出力する
        // メソッドを定義したものを呼び出している
        // print_r($potato);
        // echo $potato->show_price();
        
        print_r($potato);
        echo '<br>';
        print_r($dog);
        echo '<br>';
        
        $potato->show_price();
        // echo '<br>';
        $dog->show_height();
        // echo '<br>';
        // 25行目で既にechoしているため
      ?>
     </p>
 </body>
 </html>
 
 <!--2024年2月18日（日）いまここ-->
 <!--https://terakoya.sejuku.net/practices/01H1TSS1JFMN8WSHQPVMVTD3VX/body-->
<!-- 不明な点-->
<!--// メソッドの定義（例：public show_name() { …… }）-->
<!--とか、「show_」とかはどういう根拠で記述するのか-->
<!--そもそもオブジェクトはこの章のキャプチャにある「potato」でいいのか？何も教材では触れてないが-->
<!--お題にある「show_price」メソッドって250のpriceはしなくてよいのか？-->