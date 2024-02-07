<!DOCTYPE html>
<html lang="ja">

 <head>
  <meta charset="UTF-8">
  <title>PHP課題16</title>
 </head>

 <body>
  <?php
  //Foodクラスを作成する
  class Food {

  //プロパティを作成
  private $name;
  private $price;

  //メソッドを作成
  public function set_price(int $price){
    $this->price = $price;
  }
  public function show_price(){
    echo $this->price . '<br>';
  }

  //コントラクタを作成
  public function __construct(string $name, int $price) {
    $this->name = $name;
    $this->price = $price;
  }
  }
  $food = new Food('potato', 250);
  print_r($food) . '<br>';


  //Animalクラスを作成する
  class Animal {
   private $name;
   private $height;
   private $weight;

   //メソッドを作成
   public function set_height(int $height) {
    $this->height = $height;
   }
   public function show_height(){
    echo $this->height;
   }

   //コンストラクタを作成
   public function __construct(string $name, int $height, int $weight) {
    $this->name = $name;
    $this->height = $height;
    $this->weight = $weight;
   }
  }
 
  $animal = new Animal('dog', 60, 5000);
  print_r($animal) ;

  //改行する
  echo '<br>';

  $potato = new Food('potato', 250);
  $potato->set_price(250);
  $potato->show_price();


  $dog = new Animal('dog', 60, 5000);
  $dog->set_height(60);
  $dog->show_height();

  ?>
 </body>
</html>