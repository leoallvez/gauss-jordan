<?php
    class Gauss {
    
        private $linhas;
        private $colunas;
        private $matriz;
    
        /**
        * Construtor. Define a matriz a ser solucionada, obtem o numero de linhas e colunas.
        * @param array matriz
        * @return void
        */
        public function __construct($matriz){
            $this->matriz  = $matriz;
            $this->linhas  = count($matriz);
            $this->colunas = count($matriz['1']);
        }
        /**
        * Obtem a solução da matriz pelo metodo de gauss
        * @param void
        * @return void
        */
        public function getGaussSolution(){

            //$this->mostrarMatriz();
            
            for($x = 1; $x <= $this->linhas; $x++){
                $pivote = $this->matriz[$x][$x];
                for($i = $x; $i <= $this->linhas; $i++ ){
                    for($j = $x; $j <= $this->colunas; $j++ ){
                        if($i == $x) {
                            $this->matriz[$i][$j] /= $pivote;
                            continue;
                        } elseif($j == $x && $i != $x){
                            $aux = $this->matriz[$i][$j] * (-1);
                        }
                        $this->matriz[$i][$j] =	$this->matriz[$x][$j] * $aux + $this->matriz[$i][$j];
                    }
                    //$this->mostrarMatriz();
                }
            }
            
            for($x = 4; $x > 0; $x--){
                //$pivote = $this->matriz[$x][$x];
                for($i = $x-1; $i > 0; $i-- ){
                    for($j = $x; $j <= $this->colunas; $j++ ){
                        if($j == $x){
                            $aux = $this->matriz[$i][$j] * (-1);
                        }
                        if (isset($this->matriz[$x][$j])){
                            $this->matriz[$i][$j] =	$this->matriz[$x][$j] * $aux + $this->matriz[$i][$j];
                        }
                    }
                    //$this->mostrarMatriz();
                }
            }
            
            $this->mostrarMatriz();
        }
        
        /**
        * Imprime a matriz
        * @param void
        * @return void
        */
        private function mostrarMatriz(){
            echo '<table border="1">';
            for($i = 1; $i <= $this->linhas; $i++ ){
                echo '<tr>';
                for($j = 1; $j <= $this->colunas; $j++ ){
                    echo '<td>';
                    echo '<p>'.round($this->matriz[$i][$j], 2).'</p>';
                    echo '</td>';
                }
                echo '</tr>';
            }
            echo '</table>';
            echo '<style>table{margin-bottom:10px;} table tr td {width:20px;}</style>';
        }
    }
?>