<?php



class rental extends database{
    
    const TABLE_NAME='rental';

   public $_rental_id;
   public $_inventory_id;
   public $_customer_id;
   public $_rental_date;
   public $_return_date;
   
   protected $_last_update;

    public function __construct($rental_id,$customer_id)
    {
        $this->setrental($rental_id);
        $this->setCustomer($customer_id);
        
        
        
    }
    
    public function setrental($rental_id) {
        $this->rental_id = $rental_id;
        return $rental_id;
    }
    public function setinventory($inventory_id) {
        $this->inventory_id = $onventory_id;
        return $inventory_id;
    }


    public function setCustomer($customer_id) {
        $this->customer_id = $customer_id;
        return $customer_id;
    }
    public function setrental_date($rental_date)
    {
        $this->rental_date = $rental_date;
        return $rental_date;
    }

    public function setreturn_date($return_date)
    {
        $this->return_date = $return_date;
        return $return_date;
    }

   
 
    public function getrental() {
        return $this->rental_id;
    }
    public function getinventory() {
        return $this->inventory_id;
    }
     public function getCustomer() {
        return $this->customer_id;
    }
    public function getrental_date()
    {
        return $this->rental_date;
    }

    public function getreturn_date()
    {
        return $this->return_date;
    }



    public  function findAll() {
        $data = database::getAll("SELECT r.rental_id,r.customer_id,r.inventory_id,c.first_name,c.last_name, f.title
        FROM rental as r
        LEFT JOIN inventory AS i ON r.inventory_id = i.inventory_id
        LEFT JOIN customer AS c ON r.customer_id = c.customer_id
        LEFT JOIN film as f on i.film_id = f.film_id");
        return $data;

        
    }
}
