<?php
// Create a new class
class My_Class {

    private function inaccessable() {
        echo "you will never access this outside the class";
    }

    // Create a function
    public function world() {
        // Return a value
        return 'hello world';
    }

    public function accessible() {
        $this->inaccessable();
    }
}

// Instantiate the class
$hello = new My_Class;

// Set a variable to the function in the class
$hello_world = $hello->world();

// You cannot access private functions in a class
//$test = $hello->inaccessable();

// But you can add the function inside a public function
// $test = $hello->accessible();

// Let's see whats in $hello_world, should have been the returned value in the function inside the class.
echo ($hello_world);


?>
