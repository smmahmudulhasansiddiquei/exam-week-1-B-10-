<?php

    class Movie {
        // TODO: Add properties as Private
        private $title;
        private $availableCopies;

        // Constructor
        public function __construct($title, $availableCopies) {
            // TODO: Initialize properties
            $this->title = $title;
            $this->availableCopies = $availableCopies;
        }

        // TODO: Add getTitle method
        public function getTitle() {
            return $this->title;
        }

        // TODO: Add getAvailableCopies method
        public function getAvailableCopies() {
            return $this->availableCopies;
        }

        // TODO: Add rentMovie method
        public function rentMovie() {
            if ($this->availableCopies > 0) {
                $this->availableCopies--;
            }
        }

        // TODO: Add returnMovie method
        public function returnMovie() {
            $this->availableCopies++;
        }
    }

    class Customer {
        // TODO: Add properties as Private
        private $name;

        // Constructor
        public function __construct($name) {
        // TODO: Initialize properties
        $this->name = $name;
        }

        // TODO: Add getName method
        public function getName() {
        return $this->name;
        }

        // TODO: Add rentMovie method
        public function rentMovie(Movie $movie) {
        $movie->rentMovie();
        }

        // TODO: Add returnMovie method
        public function returnMovie(Movie $movie) {
        $movie->returnMovie();
        }
    }

    // ---------------- Usage ----------------

    // TODO: Create 2 movies:
    
    // Movie 1 - Title: Inception, Available Copies: 4
    // Movie 2 - Title: Interstellar, Available Copies: 2
    $movie1 = new Movie("Inception", 4);
    $movie2 = new Movie("Interstellar", 2);

    // TODO: Create 2 customers:
    // Customer 1 - Name: Alice
    // Customer 2 - Name: Bob
    $customer1 = new Customer("Alice");
    $customer2 = new Customer("Bob");

    // TODO: Apply rentMovie method to each customer
    $customer1->rentMovie($movie1); // Alice rents Inception
    $customer2->rentMovie($movie2); // Bob rents Interstellar

    // TODO: Print Available Copies with their names
    echo "Available Copies of '" . $movie1->getTitle() . "': " . $movie1->getAvailableCopies() . "<br>";
    echo "Available Copies of '" . $movie2->getTitle() . "': " . $movie2->getAvailableCopies() . "<br>";

?>
