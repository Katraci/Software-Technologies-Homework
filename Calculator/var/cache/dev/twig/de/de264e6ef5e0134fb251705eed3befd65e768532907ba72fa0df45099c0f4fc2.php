<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f8c74b5054bdcf4682baf6468fd34deb15bcd37dd5cbcba599ac0b720f0aff1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_84bd70ee8f0fe2e14be17642af01920cb54e8f45ba3b0d7bba2012140358c394 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84bd70ee8f0fe2e14be17642af01920cb54e8f45ba3b0d7bba2012140358c394->enter($__internal_84bd70ee8f0fe2e14be17642af01920cb54e8f45ba3b0d7bba2012140358c394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84bd70ee8f0fe2e14be17642af01920cb54e8f45ba3b0d7bba2012140358c394->leave($__internal_84bd70ee8f0fe2e14be17642af01920cb54e8f45ba3b0d7bba2012140358c394_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a6f10346eff3aec7ba2494dd93cb6c9851d39d06660e6ba299a7ee8440124ca8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6f10346eff3aec7ba2494dd93cb6c9851d39d06660e6ba299a7ee8440124ca8->enter($__internal_a6f10346eff3aec7ba2494dd93cb6c9851d39d06660e6ba299a7ee8440124ca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a6f10346eff3aec7ba2494dd93cb6c9851d39d06660e6ba299a7ee8440124ca8->leave($__internal_a6f10346eff3aec7ba2494dd93cb6c9851d39d06660e6ba299a7ee8440124ca8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7c5d9fc63706984c81ff6ae885cce2ec06eef6e164d192e7bb5fe324b02e5a3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c5d9fc63706984c81ff6ae885cce2ec06eef6e164d192e7bb5fe324b02e5a3e->enter($__internal_7c5d9fc63706984c81ff6ae885cce2ec06eef6e164d192e7bb5fe324b02e5a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7c5d9fc63706984c81ff6ae885cce2ec06eef6e164d192e7bb5fe324b02e5a3e->leave($__internal_7c5d9fc63706984c81ff6ae885cce2ec06eef6e164d192e7bb5fe324b02e5a3e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_eb143d5a40306cde0c97373cd8403e7d9855eb7dbf4ae4732b56b2013102747a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb143d5a40306cde0c97373cd8403e7d9855eb7dbf4ae4732b56b2013102747a->enter($__internal_eb143d5a40306cde0c97373cd8403e7d9855eb7dbf4ae4732b56b2013102747a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_eb143d5a40306cde0c97373cd8403e7d9855eb7dbf4ae4732b56b2013102747a->leave($__internal_eb143d5a40306cde0c97373cd8403e7d9855eb7dbf4ae4732b56b2013102747a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
