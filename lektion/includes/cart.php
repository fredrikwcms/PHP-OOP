<?
class Cart {
    public $items = array();

    public function addItemToCart($item) {
        var_dump($item);
        array_push($this->items, $item);
        return $this;
        // header('Location: ../index.php');
    }
}