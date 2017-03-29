<?php
/**
 * Created by PhpStorm.
 * User: Javier
 * Date: 29/03/2017
 * Time: 23:23
 */

require_once '../Entrada.php';
require_once '../Exceptions/EventControlException.php';

use PHPUnit\Framework\TestCase;

class EntradaTest extends TestCase
{
    public function testNewEntrada(){
        $entrada = new Entrada();
        $this->assertTrue(is_string($entrada->getCodigo()));
        $this->assertTrue(is_string($entrada->getDescripcion()));
        $this->assertEquals($entrada->getCodigo(), "");
        $this->assertEquals($entrada->getDescripcion(), "");
    }

    /**
     * @param $codigo
     * @dataProvider codigoCorrectoProvider
     */
    public function testCodigoCorrecto($codigo){
        $entrada = new Entrada();
        $entrada2 = $entrada->setCodigo($codigo);
        $this->assertInstanceOf("Entrada", $entrada2);
        $this->assertEquals($entrada, $entrada2);
        $this->assertEquals($codigo, $entrada->getCodigo());
    }

    public function codigoCorrectoProvider(){
        return [
            ["abcde"],
            ["1"],
            ["\!\""]
        ];
    }

    /**
     * @param $codigo
     * @dataProvider codigoIncorrectoProvider
     * @expectedException EventControlException
     */
    public function testCodigoIncorrecto($codigo){
        $entrada = new Entrada();
        $entrada->setCodigo($codigo);
    }

    public function codigoIncorrectoProvider(){
        return [
            [""],
            [1],
            [new DateTime()],
            [123.4]
        ];
    }

    /**
     * @param string $descripcion
     * @dataProvider descripcionCorrectaProvider
     */
    public function testDescripcionCorrecta($descripcion){
        $entrada = new Entrada();
        $entrada2 = $entrada->setDescripcion($descripcion);
        $this->assertInstanceOf("Entrada", $entrada2);
        $this->assertEquals($entrada, $entrada2);
        $this->assertEquals($descripcion, $entrada->getDescripcion());
    }

    public function descripcionCorrectaProvider(){
        return [
            ["abcde"],
            ["1"],
            ["\!\""]
        ];
    }

    /**
     * @param string $descripcion
     * @dataProvider descripcionIncorrectaProvider
     * @expectedException EventControlException
     */
    public function testDescripcionIncorrecta($descripcion){
        $entrada = new Entrada();
        $entrada->setDescripcion($descripcion);
    }

    public function descripcionIncorrectaProvider(){
        return [
            [""],
            [1],
            [new DateTime()],
            [123.4]
        ];
    }
}
