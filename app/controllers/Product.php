<?php
class Product extends Controller {
    public array $data = [];
    public function list_product(): void {
        $product = $this->model('ProductModel');
        $dataProduct = $product->getProductLists();

        $title = 'Danh sách sản phẩm';
        $this->data['product_list'] = $dataProduct;
        $this->data['page_title'] = $title;
        // Render view
        $this->render('products/list', $this->data);
    }

    public function detail(): void {
        $this->render('products/detail');
    }
}