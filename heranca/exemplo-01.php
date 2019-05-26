<?php

   ?>
    <html>
    <form action="exemplo-01.php" method="POST">
    <input type="text" name="cpf">
    <input type="submit" value="Enviar">
    </form>
    <br>
    </html>


   <?php

        class Documento{

            private $numero;

              public function getNumero(){
                
                $this->numero = $_POST['cpf'];
                return $this->numero;
             }

             public function setNumero($numero){

                $this->numero = $numero;
             }
        }

        class CPF extends Documento{

            public function validar():bool{

                

                $cpf = $this->getNumero();

                    // Extrai somente os números
                    $cpf = preg_replace( '/[^0-9]/is', '', $cpf );
                    
                    // Verifica se foi informado todos os digitos corretamente
                    if (strlen($cpf) != 11) {
                        return false;
                    }
                    // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
                    if (preg_match('/(\d)\1{10}/', $cpf)) {
                        return false;
                    }
                    // Faz o calculo para validar o CPF
                    for ($t = 9; $t < 11; $t++) {
                        for ($d = 0, $c = 0; $c < $t; $c++) {
                            $d += $cpf{$c} * (($t + 1) - $c);
                        }
                        $d = ((10 * $d) % 11) % 10;
                        if ($cpf{$c} != $d) {
                            return false;
                        }
                    }

                return true;
            }
        }

        $doc = new CPF();
        $doc->setNumero("213548848-85");
        
        if ($doc->validar() == true){
            
            echo "ta tudo certo";
        } else {
            echo "ta errado";
        }

        echo "<br>";

        echo $doc->getNumero();


?>