<?php 


class Emdereco
{
    private string $cidade;
    private string $bairro;
    private string $rua;
    private string $numero;
    //private float $cep;
    //private string $complemento;


    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

                    // get = recupero
    public function __recuperacidade(): string
    {
        return $this->cidade;
    }

    public function __recuperabairro(): string
    {
        return $this->bairro;
    }

    public function __recuperarua(): string
    {
        return $this->rua;
    }

    public function __recuperanumero(): string
    {
        return $this->numero;
    }


}


