<?php

class Home extends Controller {
    public array $data = [];
    public $products;
    public function __construct() {
        $this->products = $this->model('HomeModel');
    }   

    public function index() {
        /* // $product = $this->model('HomeModel');
        $dataProduct = $this->products->first();
        // $title = 'Danh sách sản phẩm';
        // $this->data['sub_content']['product_list'] = $dataProduct;
        // $this->data['sub_content']['product_title'] = $title;
        // $this->data['content'] = 'products/women'; // truyền dữ liệu qua bên view
        // //$this->render('layouts/app_layout',  $this->data);
        // $this->render('products/list', $this->data);

//         $data = $this->products->getList();
        echo '<pre>';
        print_r( $dataProduct );
        echo '</pre>'; */

//        $dataProduct = $this->products->getListProducts();
//        echo '<pre>';
//        print_r( $dataProduct );
//        echo '</pre>';
//        $detail = $this->products->getDetailProduct('Textile Platform Sneakers');
//        echo '<pre>';
//        print_r( $detail );
//        echo '</pre>';
//        echo '<hr>';
//        $data = $this->products->find(1);
//        echo '<pre>';
//        print_r( $data );
//        echo '</pre>';

        $iData = [
            'name' => 'Trần Vân Anh',
            'slug' => 'tran-van-anh',
            'description' => 'Ab facere maxime nostrum dolores.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at	' => date('Y-m-d H:i:s'),
        ];
        $check = $this->db->table('types')->insert($iData);
        var_dump($check);
//        $id = $this->products->insertCategories($iData);
//        echo $id;
//        $uData = [
//            'name' => 'Trần Vân Anh',
//        ];
//        $this->products->deleteCategories(43);
        $data = $this->db->table('types')->get();
        echo '<pre>';
        print_r( $data );
        echo '</pre>';
    }

}
?>