<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Car{
        public $color;
        public $model;
        public function __construct($color,$model){
            $this->color =$color;
            $this->model =$model;
        }
        public function message(){
            return "my car is a ".$this->color. "".$this->model. "";
        }
    }
    $mycar=new Car("black","volvo");
    echo $mycar->message(). "<br>";
    $mycar=new Car("white","bmw");
    echo $mycar->message();
?>
   
</body>
</html>