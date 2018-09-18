<?php
      class GolfBall implements Sellable {
            private $color;
            private $noinstock;
            private $indents;

            public function getColor() {
                  return $this->_color;
            }

            public function setColor( $color ) {
                  $this->_color = $color;
            }

            public function getIndents() {
                  return $this->indents;
            }

            public function setIndents( $no ) {
                  $this->indents = $no;
            }

            public function addStock( $numItems ) {
                  $this->noinstock += $numItems;
            }

            public function sellItem() {
                  $returnVal = false;
                  if ( $this->noinstock > 0 ) {
                  $this->noinstock--;
                  $returnVal = true;
                  }
                  return $returnVal;
            }

            public function getStockLevel() {
                  return $this->noinstock;
            }
      }
?>
