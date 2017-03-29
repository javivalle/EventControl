<?php

/**
 * Created by PhpStorm.
 * User: Javier
 * Date: 29/03/2017
 * Time: 22:32
 */
interface IEntrada
{
    public function getCodigo();
    public function setCodigo($codigo);

    public function getDescripcion();
    public function setDescripcion($descripcion);
}