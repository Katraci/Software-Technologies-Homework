<?php
namespace CalculatorBundle\Entity;

class Calculator{
    /**
     * @var float
     */
    private $leftOperand;
    /**
     * @var float
     */
    private $rightOperand;
    /**
     * @var string
     */
    private $operator;
    /**
     * Get left operand
     *
     * @ retutn float
     */
    public function getLeftOperand(){
        return $this->leftOperand;
    }
    /**
     * Set left operand
     *
     * @param float $operand
     *
     * @return Calculator
     */
    public function setLeftOperand($operand){
        $this->leftOperand = $operand;
        return $this;
    }
    /**
     * Get right operand
     *
     * @ retutn float
     */
    public function getRightOperand(){
        return $this->rightOperand;
    }
    /**
     * Set right operand
     *
     * @param float $operand
     *
     * @return Calculator
     */
    public function setRightOperand($operand){
        $this->rightOperand = $operand;
        return $this;
    }
    /**
     * Get operator
     *
     * @ retutn string
     */
    public function getOperator(){
        return $this->operator;
    }
    /**
     * Set operator
     *
     * @param string $operand
     *
     * @return Calculator
     */
    public function setOperator($operand){
        $this->operator = $operand;
        return $this;
    }
}

?>