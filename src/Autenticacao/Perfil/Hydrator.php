<?php
namespace Ecompassaro\Autenticacao\Perfil;

use Zend\Hydrator\HydratorInterface;
use Ecompassaro\Autenticacao\Perfil;

class Hydrator implements HydratorInterface
{
    /**
     * Converte um objeto perfil em vetor
     * @param Perfil $object objeto
     * @return array
     */
    public function extract($object)
    {
        if ($object instanceof Perfil) {
            return $object->toArray();
        }
    }

    /**
     * Converte um vetor em um objeto perfil
     * @param array $data vetor
     * @param Perfil $object (prototipo)
     * @return Perfil
     */
    public function hydrate(array $data, $object)
    {
        if ($object instanceof Perfil) {
            return $object->exchangeArray($data);
        }
    }
}
