<?php

namespace CalculatorBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use CalculatorBundle\Entity\Calculator;
use CalculatorBundle\Form\CalculatorType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CalculatorController extends Controller
{
    /**
     * @param Request $request
     *
     * @Route("/", name="index")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     *
     */
    public function index(Request $request)
    {
        $calculater = new Calculator();

        $fotm = $this->createForm(CalculatorType::class, $calculater);

        $fotm->handleRequest($request);
        if ($fotm->isSubmitted()&&$fotm->isValid())
        {
            $leftOperand=$calculater->getLeftOperand();
            $rightOperand=$calculater->getRightOperand();
            $operator=$calculater->getOperator();

            $result=0;

            switch ($operator)
            {
                case $operator=="+":$result=$leftOperand+$rightOperand;break;
                case $operator=="-":$result=$leftOperand-$rightOperand;break;
                case $operator=="*":$result=$leftOperand*$rightOperand;break;
                case $operator=="/":$result=$leftOperand/$rightOperand;break;
            }
            return $this->render('calculator/index.html.twig', ['result' =>$result, 'calculater'=>$calculater,
                'form'=>$fotm->createView()]);
        }
        return $this->render('calculator/index.html.twig', ['form'=>$fotm->createView()]);

    }
}
