<?php
#[AllowDynamicProperties] class ProductModel extends Model {
    #[\Override] function tableFill()
    {
        return 'productssf';
    }

    #[\Override] function fieldFill()
    {
        return '*';
    }
    /*public function getData() {
        try {
            $statement = $this->__conn->prepare("SELECT * FROM products");

            if ($statement->execute()) :
                $data = [];

                while ($row = $statement->fetch(PDO::FETCH_ASSOC)) :
                    $data[] = $row;
                endwhile;

                return $data;
            endif;
        }catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }*/
    public function getProductLists() {
        return [
            'SP 1',
            'SP 2',
            'SP 3'
        ];
    }
}
?>