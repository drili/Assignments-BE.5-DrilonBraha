<?php
      class StoreManager {
            private $_productList = array();

            public function addProduct(Sellable $product) {
                  $this->_productList[] = $product;
            }

            public function stockUp() {
                  foreach ( $this->_productList as $product ) {
                        $product->addStock(100);
                  }
            }
      }
?>
