<?php
class FabricaController {
    private $fabrica;

    public function __construct($fabrica) {
        $this->fabrica = $fabrica;
    }

    public function listar() {
        return [
            'view' => 'listar.php',
            'dados' => ['carros' => $this->fabrica->getCarros()]
        ];
    }

    public function fabricar($modelo, $cor) {
        $msg = $this->fabrica->fabricarCarro($modelo, $cor);

        return [
            'view' => 'home.php',
            'dados' => ['mensagem' => $msg]
        ];
    }

    public function vender($id) {
        $msg = $this->fabrica->venderCarro($id);

        return [
            'view' => 'listar.php',
            'dados' => [
                'mensagem' => $msg,
                'carros' => $this->fabrica->getCarros()
            ]
        ];
    }

    public function deletar($id) {
        $this->fabrica->deletarCarro($id);

        return $this->listar();
    }
}