<?php
class Product extends Controller {
    public array $data = [];
    public function list_product(): void {
        $product = $this->model('ProductModel');
        $dataProduct = $product->getProductLists();

        $title = 'Danh sách sản phẩm';
        $this->data['sub_content']['product_list'] = $dataProduct;
        $this->data['sub_content']['product_title'] = $title;
        $this->data['page_title'] = 'Sản phẩm';
        $this->data['content'] = 'products/list'; // Trả dữ liệu ra view
        // Render view
        $this->render('layouts/app_layout', $this->data);
    }

    public function detail( $id = 0): void {
        $product = $this->model('ProductModel');
        $this->data['info'] = $product->getProductLists();
        $this->render('products/detail');
    }
}
?>