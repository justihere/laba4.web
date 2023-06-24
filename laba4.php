<?php
	

	/*-- VARIABLES --*
	    $name = 'Ira'; // string
	    $age = 19; // int
	    $has_kids = false; // bool
	    $cash = 20.75; // float
	


	    $sports_string = "football,volleyball,tennis";
	    $sports_array = explode(",", $sports_string);
	    print_r($sports_array);
	

	    $items_array = array("table", "door", "chair");
	    $items_string = implode(",", $items_array);
	    echo $items_string;
	
	    $num = 5;
	    $ref =& $num; // reference
	    $ref = 10;
	    echo $num;

	    $a = 5;
	    $b = '5';
	    $c = 7;
	    if($a == $b) {
	        echo 'same values';
	    } else{
	        echo 'different values';
	    }
	    if($a === $b) {
	        echo 'same values and type';
	    } else{
	        echo 'different values or type';
	    }
	    if($a != $b) {
	        echo 'different values';
	    } else{
	        echo 'same values';
	    }
	

	
	    $x = "123.45";
	    $y = (int)$x;
	    var_dump($y);
	

	
	    $x = 123;
	    $y = (string)$x;
	    var_dump($y);
	

	
	    $x = "some value";
	    $y = (bool)$x;
	    var_dump($y);
	

	    $z = 0;
	    $w = (bool)$z;
	    var_dump($w);
	

	
	    class Fruit{
	        public $name;
	        public $color;
	

	        public function __construct($name, $color){
	            $this->name = $name;
	            $this->color = $color;
	        }
	

	        function get_name(){
	            return $this->name;
	        }
	

	        function get_color(){
	            return $this->color;
	        }
	    }
	

	    class Pear extends Fruit{
	        public function __construct($name)
	        {
	            parent::__construct($name, "green");
	        }
	    }
	

	    $apple = new Fruit("Apple", "red");
	    $pear = new Pear("Pear name");
	    echo $apple->get_name();
	    echo $apple->get_color();
	    echo $pear->get_color();
	

	
	    class Singleton{
	        private static $instance = null;
	        private function __construct(){
	            echo "Connect";
	        }
	        public static function getInstance(){
	            if(self::$instance === null){
	                self::$instance = new static();
	            } else{
	                echo "Already connected";
	            }
	            return self::$instance;
	        }
	    }
	    $obj1 = Singleton::getInstance();
	    $obj2 = Singleton::getInstance();
	

	
	    class Person {
	        private $name;
	        private $age;
	

	        public function __construct($name, $age) { // цей метод викликається при створенні нового об'єкта
	            $this->name = $name;
	            $this->age = $age;
	        }
	

	        public function __toString() { // цей метод викликається при використанні об'єкта як рядка
	            return "{$this->name}, {$this->age}";
	        }
	

	        public function __get($name) { // цей метод викликається при спробі отримати значення недоступного властивості об'єкта
	            return "{$name} does not exist";
	        }
	

	        public function __set($name, $value) { // цей метод викликається при спробі присвоїти значення недоступній властивості об'єкта
	            $this->$name = $value;
	        }
	

	        public function __call($name, $arguments) { // цей метод викликається при спробі викликати недоступний метод об'єкта
	            return "Method {$name} does not exist with arguments (" . implode(',', $arguments) . ")";
	        }
	    }
	

	    $person1 = new Person("John", 30);
	    echo $person1;
	

	    echo $person1->address;
	

	    $person1->address = "New York";
	    echo $person1->address;
	

	    echo $person1->say_hello("world");
	

	        $numbers = [1, 44, 55, 22];
	        $fruits = array('apple', 'orange', 'pear');
	

	        //var_dump($numbers);
	        echo $fruits[1];
	
	        $colors = [
	            1 => 'red',
	            4 => 'blue',
	            6 => 'green'
	        ];
	        echo $colors[4];
	

	        $hex = [
	            'red' => '#f00',
	            'blue' => '#0f0',
	            'green' => '#00f'
	        ];
	        echo $hex['blue'];
	

	        $person = [
	            'first_name' => 'ira',
	            'last_name' => 'orhish',
	            'email' => '123@gmail.com'
	        ];
	        echo $person['first_name'];
	

	        $people = [
	            [
	                'first_name' => 'ira',
	                'last_name' => 'orhish',
	                'email' => ' 123@gmail.com'
	            ],
	            [
	                'first_name' => 'jakob',
	                'last_name' => 'pushkarenko',
	                'email' => '123@gmail.com'
	            ],
	            [
	                'first_name' => 'anya',
	                'last_name' => 'yakubova',
	                'email' => ' 123@gmail.com'
	            ]
	        ];
	        echo $people[1]['email'];
	

	        var_dump(json_encode($people)); 
	
	        $age = 20;
	        if($age >= 18){
	            echo 'You are old enough to vote';
	        } else {
	            echo 'Sorry, you are not old enough';
	        }
	

	        $date = date('H');
	        if($date < 12){
	            echo 'Good morning';
	        } elseif($date < 17){
	            echo 'Good afternoon';
	        } else {
	            echo 'Good evening';
	        }
	

	        if(true){
	            echo all;
	        }
	

	        $posts = ['First post'];
	        if(!empty($posts)){
	            echo $posts[0];
	        } else {
	            echo 'No posts';
	        }
	

	        echo !empty($posts) ? $posts[0] : 'No posts';
	

	        $firstPost = !empty($posts) ? $posts[0] : 'No posts';
	        $firstPost = !empty($posts) ? $posts[0] : null;
	        $firstPost = $posts[0] ?? null;
	        echo $firstPost;
	
	        $favColor = 'red';

	        switch ($favColor){
	            case 'red':
	                echo 'Your favorite color is red';
	                break;
	            case 'blue':
	                echo 'Your favorite color is blue';
	                break;
	            case 'green':
	                echo 'Your favorite color is green';
	                break;
	            default:
	                echo 'Your favorite color is unknown';
	        }
	
	        for($i = 0; $i <= 10; $i++){
	            echo $i;
	        }
	

	        $i = 1;
	        while($i <=15){
	            echo 'Number' . $i . '<br>';
	            $i++;
	        }
	

	        $i = 1;
	        do{
	            echo 'Number' . $i . '<br>';
	            $i++;
	        } while($i <= 5);
	

	        $posts = ['First post', 'Seconds post', 'Third post'];
	        for($i = 0; $i < count($posts); $i++){
	            echo $posts[$i];
	        }
	        foreach($posts as $post){
	            echo $post;
	        }
	        foreach($posts as $index => $post){
	            echo $index . ' - ' . $post . '<br>';
	        }

	        $person = [
	            'first_name' => 'ira',
	            'last_name' => 'orhish',
	            'email' => ' 123@gmail.com'
	        ];
	        foreach($person as $key => $value){
	            echo "$key - $value<br>";
	        }
	

	/*-- functions --*/
	        function registerUser($name){ 
	            echo $name . ' registered';
	        }
	        registerUser('Olya'); //parameter
	

	        function sum($n1 = 4, $n2 = 5){
	            return $n1 + $n2;
	        }
	        $number = sum(5, 5);
	        echo $number;
	        $number = sum();
	        echo $number;
	

	        $subtract = function ($n1, $n2){ 
	            return $n1 - $n2;
	        }; // ! need a semicolon here
	        echo $subtract(10, 5);
	

	        $multiply = fn($n1, $n2) => $n1 * $n2; 
	        echo $multiply(9, 9);
	
	        $fruits = ['apple', 'orange', 'pear'];
	

	        echo count($fruits);
	

	        var_dump(in_array('apple', $fruits));
	

	        $fruits[] = 'grape';
	        array_push($fruits, 'blueberry', 'strawberry');
	        array_unshift($fruits, 'mango');
	

	        array_pop($fruits);
	        array_shift($fruits);
	        unset($fruits[2]);
	

	        $chunked_array = array_chunk($fruits, 2);
	

	        print_r($chunked_array);
	

	        print_r($fruits);
	

	        $arr1 = [1, 2, 3];
	        $arr2 = [4, 5, 6];
	        $arr3 = array_merge($arr1, $arr2);
	        $arr4 = [...$arr1, ...$arr2];
	

	        print_r($arr3, $arr4);
	

	        $a = ['blue', 'pink', 'grey'];
	        $b = [' passion fruit', ' kiwi', 'orange'];
	

	        $c = array_combine($a ,$b);
	

	        print_r($c);
	

	        $keys = array_keys($c);
	        print_r($keys);
	

	        $flipped = array_flip($c);
	        print_r($flipped);
	

	        $numbers = range(1, 20);
	        print_r($numbers);
	

	        $newNumbers = array_map(function($number){
	            return "Number ${number}";
	        }, $numbers);
	        print_r($newNumbers);
	

	        $lessThan10 = array_filter($numbers, fn($number) => $number <= 10);
	        print_r($lessThan10);
	

	        $sum = array_reduce($numbers, fn($carry, $num) => $carry + $num);
	        var_dump($sum);
	
	        $string = 'Hello World';
	        echo strlen($string);
	        echo strpos($string, 'o');
	        echo strrpos($string, 'o');
	        echo strrev($string);
	        echo strtolower($string);
	        echo strtoupper($string);
	        echo ucwords($string);
	        echo str_replace('World', 'Everyone', $string);
	        echo substr($string, 0, 5);
	        echo substr($string, 5);
	        if(str_starts_with($string, 'Hello')){
	            echo 'Yes';
	        }
	        if(str_ends_with($string, 'ld')){
	            echo 'Yes';
	        }
	

	        $string2 = '<h1>Hello</h1>';
	        echo $string2; // parsed by browser
	

	        $string3 = '<script>alert(1)</script>';
	        echo htmlspecialchars($string3); //outputs actual
	

	        printf('%s likes to %s', 'Brad', 'code');
	        printf('1+1=%f', 1+1);
	

	/*-- superglobals --*/
	    var_dump($_SERVER);
	

	/*-- get and post --*/
	    if(isset($_POST['submit'])){
	       
	        $name = filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);
	        $age = htmlspecialchars($_POST['age']);
	        echo $name;
	    }
	

	/*-- cookies --*/
	    setcookie('name', 'ira', time() + 86400);
	

	    if(isset($_COOKIE['name'])){
	        echo $_COOKIE['name'];
	    }
	

	    setcookie('name', '', time() - 86400);
	

	?>
	

	<!--<a href="--><?php //echo $_SERVER['PHP_SELF']; ?><!--?name=Brad&-->
	<!--age=30">Click</a>-->
	

	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
	    <div>
	        <label for="username">
	            Username:
	        </label>
	        <input type="text" name="username"/>
	    </div>
	    <div>
	        <label for="password">
	            Password:
	        </label>
	        <input type="text" name="password"/>
	    </div>
	    <input type="submit" value="Submit" name="submit"/>
	</form>
