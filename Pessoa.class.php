<?php

class Pessoa{
    //Atribuindo variáveis privadas//
    private $nome; //Declarando Nome (privado)
    private $endereco; //Declarando Endereço (privado)
    private $bairro; //Declarando Bairro (privado)
    private $cep; //Declarando CEP (privado)
    private $cidade; //Declarando Cidade (privado)
    private $estado; //Declarando Estado (privado)

    //Iniciando encapsulamento com métodos set e get
    public function setNome($nome){ //atribuindo função Nome
        $this->nome = $nome; //aplicando this para indicar que esta é a variável global($nome)
    }

    public function setEndereco($endereco){ //atribuindo função Endereco
        $this->endereco = $endereco; //aplicando this para indicar que esta é a variável global($endereco)
    }

    public function setBairro($bairro){ //atribuindo função Bairro
        $this->bairro = $bairro; //aplicando this para indicar que esta é a variável global($bairro)
    }

    public function setCep($cep){ //atribuindo função Cep
        $this->cep = $cep; //aplicando this para indicar que esta é a variavel global($cep)
    }

    public function setCidade($cidade){ //atribuindo função Cidade
        $this->cidade = $cidade; //aplicando this para indicar que esta é a variavel global($cidade)
    }

    public function setEstado($estado){ //atribuindo função Estado
        $this->estado = $estado; //aplicando this para indicar que esta é a variavel global($estado)
    }

    public function getNome(){ //recebendo função Nome
        return $this->nome; //retornando para variável ($nome)
    }

    public function getEndereco(){ //recebendo função Endereco
        return $this->endereco; //retornando para variável ($endereco)
    }

    public function getBairro(){ //recebendo função Bairro
        return $this->bairro; //retornando para a variável ($bairro)
    }

    public function getCep(){ //recebendo função Cep
        return $this->cep; //retornando para a variável ($cep)
    }

    public function getCidade(){ //recebendo função Cidade
        return $this->cidade; //retornando para a variável ($cidade)
    }

    public function getEstado(){ //recebendo função Estado
        return $this->estado; //retornando para a variável ($estado)
    }
}
?>