<?php 
/**
 * this class generates a Movie
 */
class Movie {
    public $title;
    public $plot;
    public $ticket_price;
    public $image;

    /**
     * Construct as a new Movie
     *
     * @param string $title  title film
     * @param string $plot film description
     * @param float $ticket_price  price ticket
     * @param [type] $image
     */
    public function __construct(string $title , string $plot, float $ticket_price, $image) {
        $this -> title= $title;
        $this -> plot = $plot;
        $this-> ticket_price = $ticket_price;
        $this-> image = $image;
    }

    public function getLenghtplot(){
        return strlen ($this -> plot);
    }

    public function getPrice(){
        return ceil ($this -> ticket_price);
    }


    
}



?>
