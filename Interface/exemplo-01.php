<?PHP

interface Veiculo{
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
}

class FordKa implements Veiculo{

    public function acelerar ($velocidade){

        echo "O veículo acelerou maté" . $velocidade . " km/h.";
    }

    public function frenar ($velocidade){

        echo "O veículo frenou até ". $velocidade . " km/h.";
    }

    public function trocarMarcha ($marcha){

        echo "O veículo engatou a marcha ". $marcha ;
    }

}

$carro = new FordKa();

$carro->trocarMarcha(2);

?>