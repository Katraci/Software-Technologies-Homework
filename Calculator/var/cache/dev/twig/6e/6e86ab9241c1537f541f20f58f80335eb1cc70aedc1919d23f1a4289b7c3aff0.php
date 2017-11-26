<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_539513fa13fc3aa9536c21c3091e809db3f9192691fa6b75370600aebf8fc6df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee6b970f1d5c035b84455e0e368c12945d4212e2cea4d71ab424e52039aab395 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee6b970f1d5c035b84455e0e368c12945d4212e2cea4d71ab424e52039aab395->enter($__internal_ee6b970f1d5c035b84455e0e368c12945d4212e2cea4d71ab424e52039aab395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee6b970f1d5c035b84455e0e368c12945d4212e2cea4d71ab424e52039aab395->leave($__internal_ee6b970f1d5c035b84455e0e368c12945d4212e2cea4d71ab424e52039aab395_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_01562c41141234c34c6c8a8800fc17f20469569b0ae80b8c47d4c2f2f408789e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01562c41141234c34c6c8a8800fc17f20469569b0ae80b8c47d4c2f2f408789e->enter($__internal_01562c41141234c34c6c8a8800fc17f20469569b0ae80b8c47d4c2f2f408789e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_01562c41141234c34c6c8a8800fc17f20469569b0ae80b8c47d4c2f2f408789e->leave($__internal_01562c41141234c34c6c8a8800fc17f20469569b0ae80b8c47d4c2f2f408789e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e6510e03ec066f9053bd2a427876d5e69bc31be04a130f1fd0bced37d5042130 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6510e03ec066f9053bd2a427876d5e69bc31be04a130f1fd0bced37d5042130->enter($__internal_e6510e03ec066f9053bd2a427876d5e69bc31be04a130f1fd0bced37d5042130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e6510e03ec066f9053bd2a427876d5e69bc31be04a130f1fd0bced37d5042130->leave($__internal_e6510e03ec066f9053bd2a427876d5e69bc31be04a130f1fd0bced37d5042130_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_32c5795cffafa7ab58dc33588b28d4a0bf6b5a8d8faecbdee77cf342ea0741b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32c5795cffafa7ab58dc33588b28d4a0bf6b5a8d8faecbdee77cf342ea0741b4->enter($__internal_32c5795cffafa7ab58dc33588b28d4a0bf6b5a8d8faecbdee77cf342ea0741b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_32c5795cffafa7ab58dc33588b28d4a0bf6b5a8d8faecbdee77cf342ea0741b4->leave($__internal_32c5795cffafa7ab58dc33588b28d4a0bf6b5a8d8faecbdee77cf342ea0741b4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
