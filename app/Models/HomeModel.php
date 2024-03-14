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
        /*$data = $this->db->table('products')
//            ->where('id', '>', 1)
//                ->select('*')
            ->limit(3, 2)
            ->orderBy('id', 'DESC')
            ->get();*/
//        return $data;
        $data = $this->db->table('products as p')
            ->join('categories as c', 'p.category_id = c.id')
            ->join('types as t', 'p.type_id = t.id')
            ->get();
        return $data;
    }
    public function getDetailProduct($title){
        $data = $this->db->table('products')
            ->where('title', '=', $title)
            ->first();
        return $data;
    }
    public function insertCategories($data){
//        $this->db->table('categories')->insert($data);
    }
    public function updateCategories($data, $id){
        $this->db->table('categories')->where('id', '=', $id)->update($data);
    }
}
?>