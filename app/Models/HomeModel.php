<?php
class HomeModel extends Model {
    private $__table = 'products';

    function tableFill() {
       return 'products';
    }
    function fieldFill() {
        return '*';
    }
    function primaryKey() {
        return 'id';
    }
    public function getList() {
        $data = $this->db->query( " SELECT " . self::fieldFill() . " FROM " . self::tableFill() )->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    public function getListProducts() {
        $data = $this->db->table('products')
//            ->where('id', '>', 3)
            ->whereLike('title', '%Textile Platform Sneakers%')
//            ->select('title')
            ->get();
        return $data;
    }
    public function getDetailProduct($title){
        $data = $this->db->table('products')
            ->where('title', '=', $title)
            ->first();
        return $data;
    }
}
?>