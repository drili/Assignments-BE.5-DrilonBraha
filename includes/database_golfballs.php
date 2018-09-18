<?php
      class Golfballs {
            private $color, $noinstock, $dimples;

            public function __construct($dbRow) {
                  $this->color = $dbRow['color'];
                  $this->noinstock = $dbRow['noinstock'];
                  $this->dimples = $dbRow['dimples'];
            }

            public function getColor() {
                  return $this->color;
            }

            public function getNoinstock() {
                  return $this->noinstock;
            }

            public function getDimples() {
                  return $this->dimples;
            }
      }
?>
