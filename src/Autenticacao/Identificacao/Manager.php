<?php
namespace Ecompassaro\Autenticacao\Identificacao;

use Ecompassaro\Autenticacao\Identificacao;

class Manager
{
    private $repository;

    /**
     *
     * @param IdentificacaoRepository $repository
     */
    public function __construct(Repository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Obtem o Repository dessa entidade
     * @return IdentificacaoRepository
     */
    private function getRepository()
    {
        return $this->repository;
    }

    /**
     * Salva a identificação passada por parâmetro
     */
    public function save(Identificacao $identificacao)
    {
        return $this->getRepository()->save($identificacao);
    }

    /**
     * Obtem a identificação atual (se houver)
     * @return Identificacao
     */
    public function get()
    {
        return $this->getRepository()->find();
    }
}