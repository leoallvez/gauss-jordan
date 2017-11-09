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
        public function getGaussResult(){

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
            
            $this->imprimirMatriz();
        }
        
        /**
        * Imprime a matriz
        * @param void
        * @return void
        */
        private function imprimirMatriz() {
            echo '<table class="table">';
                echo '<tbody>';
                    echo '<thead>';
                        echo '<tr>';
                            echo '<th>#</th>';
                            for($j = 1; $j <= $this->colunas; $j++ ) { 
                                echo '<th>';
                                    echo ($j != $this->colunas)?"X<sub>$j<?/sub>":"b";
                                echo '</th>';
                            }
                        echo '</tr>';
                    echo '</thead>';

                for($i = 1; $i <= $this->linhas; $i++ ) {
                    echo '<tr>';
                    echo "<th scope='row'>L<sub>".$i."</sub></th>";
                    for($j = 1; $j <= $this->colunas; $j++ ) {
                        echo "<td class=".(($j == $this->colunas)?'success':'').">";
                        //echo '<td>';
                            echo "<input type='text' class='form-control' value='".round($this->matriz[$i][$j], 3)."' disabled style='background:#FFF'>";
                        echo '</td>';
                    }
                    echo '</tr>';
                }
                echo '</tbody>';
            echo '</table>';
        }
    }  
?>
