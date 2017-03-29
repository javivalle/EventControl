<?php

require_once 'IEntrada.php';

/**
 * Created by PhpStorm.
 * User: Javier
 * Date: 29/03/2017
 * Time: 20:40
 */
class Entrada implements IEntrada
{
    /**
     * @var string
     */
    private $codigo;

    /**
     * @var string
     */
    private $descripcion;

    public function __construct()
    {
        $this->codigo = "";
        $this->descripcion = "";
    }

    /**
     * @return string
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * @param string $codigo
     * @return Entrada
     * @throws EventControlException
     */
    public function setCodigo($codigo)
    {
        if(is_string($codigo)){
            if(strlen($codigo) == 0){
                throw new EventControlException("Entrada->SetCodigo: no se permite un string vacio");
            }
            $this->codigo = $codigo;
            return $this;
        }else{
            if(is_object($codigo)){
                $tipo = get_class($codigo);
            }else{
                $tipo = gettype($codigo);
            }
            throw new EventControlException("Entrada->setCodigo: el parametro pasado es un ".$tipo);
        }
    }

    /**
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * @param string $descripcion
     * @return Entrada
     * @throws EventControlException
     */
    public function setDescripcion($descripcion)
    {
        if(is_string($descripcion)){
            if(strlen($descripcion) == 0){
                throw new EventControlException("Entrada->SetDescripcion: no se permite un string vacio");
            }
            $this->descripcion = $descripcion;
            return $this;
        }else{
            if(is_object($descripcion)){
                $tipo = get_class($descripcion);
            }else{
                $tipo = gettype($descripcion);
            }
            throw new EventControlException("Entrada->setDescripcion: el parametro pasado es un ".$tipo);
        }
    }


}