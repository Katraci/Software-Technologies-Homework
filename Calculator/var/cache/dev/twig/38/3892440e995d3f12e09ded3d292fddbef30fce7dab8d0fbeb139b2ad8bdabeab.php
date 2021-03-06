<?php

/* base.html.twig */
class __TwigTemplate_d261bd5a7e5e97d65751a1d69df0feabeb4caa80b90f4aaa064504c67c7278f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_10f99f5e8d1a27a49a89c990d110db9a4751bdf6d51079a37dc83f2edb02a5e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10f99f5e8d1a27a49a89c990d110db9a4751bdf6d51079a37dc83f2edb02a5e4->enter($__internal_10f99f5e8d1a27a49a89c990d110db9a4751bdf6d51079a37dc83f2edb02a5e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>

<body id=\"";
        // line 19
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">

";
        // line 21
        $this->displayBlock('header', $context, $blocks);
        // line 39
        echo "
<div class=\"container body-container\">
    ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "</div>


";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
        echo "
</body>
</html>
";
        
        $__internal_10f99f5e8d1a27a49a89c990d110db9a4751bdf6d51079a37dc83f2edb02a5e4->leave($__internal_10f99f5e8d1a27a49a89c990d110db9a4751bdf6d51079a37dc83f2edb02a5e4_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_313b0c2e6acd5dbe06d1335ca70a7b99834072c0caac5025db356aa4dea47219 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_313b0c2e6acd5dbe06d1335ca70a7b99834072c0caac5025db356aa4dea47219->enter($__internal_313b0c2e6acd5dbe06d1335ca70a7b99834072c0caac5025db356aa4dea47219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Calculator";
        
        $__internal_313b0c2e6acd5dbe06d1335ca70a7b99834072c0caac5025db356aa4dea47219->leave($__internal_313b0c2e6acd5dbe06d1335ca70a7b99834072c0caac5025db356aa4dea47219_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_21293325d5bde37c0854d522b7506e169ce1283de008efa68e587191651e910d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21293325d5bde37c0854d522b7506e169ce1283de008efa68e587191651e910d->enter($__internal_21293325d5bde37c0854d522b7506e169ce1283de008efa68e587191651e910d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_21293325d5bde37c0854d522b7506e169ce1283de008efa68e587191651e910d->leave($__internal_21293325d5bde37c0854d522b7506e169ce1283de008efa68e587191651e910d_prof);

    }

    // line 19
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_74757a0a7fc5417cfa22f92a1c2c7d30639a56aac34952dd34e025ea47777994 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74757a0a7fc5417cfa22f92a1c2c7d30639a56aac34952dd34e025ea47777994->enter($__internal_74757a0a7fc5417cfa22f92a1c2c7d30639a56aac34952dd34e025ea47777994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_74757a0a7fc5417cfa22f92a1c2c7d30639a56aac34952dd34e025ea47777994->leave($__internal_74757a0a7fc5417cfa22f92a1c2c7d30639a56aac34952dd34e025ea47777994_prof);

    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        $__internal_6ac7e5f25a9e5b89c48d77de327c57c176a9004ff28529ac54e131c737e42fce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ac7e5f25a9e5b89c48d77de327c57c176a9004ff28529ac54e131c737e42fce->enter($__internal_6ac7e5f25a9e5b89c48d77de327c57c176a9004ff28529ac54e131c737e42fce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 22
        echo "    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\" class=\"navbar-brand\">CALCULATOR</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

            </div>
        </div>
    </header>
";
        
        $__internal_6ac7e5f25a9e5b89c48d77de327c57c176a9004ff28529ac54e131c737e42fce->leave($__internal_6ac7e5f25a9e5b89c48d77de327c57c176a9004ff28529ac54e131c737e42fce_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae653f7d78a9568047a900a179053cef03c66dd5eeeec3097fc313fc578b8f3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae653f7d78a9568047a900a179053cef03c66dd5eeeec3097fc313fc578b8f3b->enter($__internal_ae653f7d78a9568047a900a179053cef03c66dd5eeeec3097fc313fc578b8f3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 42
        echo "        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                ";
        // line 44
        $this->displayBlock('main', $context, $blocks);
        // line 45
        echo "            </div>
        </div>
    ";
        
        $__internal_ae653f7d78a9568047a900a179053cef03c66dd5eeeec3097fc313fc578b8f3b->leave($__internal_ae653f7d78a9568047a900a179053cef03c66dd5eeeec3097fc313fc578b8f3b_prof);

    }

    // line 44
    public function block_main($context, array $blocks = array())
    {
        $__internal_6f73edd27feaabe5e7f8ff9f38f0a4baf32f50539cf58409ad1864dd07218db0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f73edd27feaabe5e7f8ff9f38f0a4baf32f50539cf58409ad1864dd07218db0->enter($__internal_6f73edd27feaabe5e7f8ff9f38f0a4baf32f50539cf58409ad1864dd07218db0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_6f73edd27feaabe5e7f8ff9f38f0a4baf32f50539cf58409ad1864dd07218db0->leave($__internal_6f73edd27feaabe5e7f8ff9f38f0a4baf32f50539cf58409ad1864dd07218db0_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4b00c884e6e934c86702bca43595a2e970e1a4c578fe88f586ed0a1597c09b0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b00c884e6e934c86702bca43595a2e970e1a4c578fe88f586ed0a1597c09b0f->enter($__internal_4b00c884e6e934c86702bca43595a2e970e1a4c578fe88f586ed0a1597c09b0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_4b00c884e6e934c86702bca43595a2e970e1a4c578fe88f586ed0a1597c09b0f->leave($__internal_4b00c884e6e934c86702bca43595a2e970e1a4c578fe88f586ed0a1597c09b0f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 55,  201 => 54,  197 => 53,  192 => 52,  186 => 51,  175 => 44,  166 => 45,  164 => 44,  160 => 42,  154 => 41,  134 => 26,  128 => 22,  122 => 21,  111 => 19,  102 => 14,  97 => 13,  91 => 12,  79 => 11,  69 => 57,  67 => 51,  62 => 48,  60 => 41,  56 => 39,  54 => 21,  49 => 19,  42 => 16,  40 => 12,  36 => 11,  29 => 6,);
    }

    public function getSource()
    {
        return "{#
   This is the base template used as the application layout which contains the
   common elements and decorates all the other templates.
   See http://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts
#}
<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>{% block title %}Calculator{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-datetimepicker.min.css') }}\">
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>

<body id=\"{% block body_id %}{% endblock %}\">

{% block header %}
    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"{{ path('index') }}\" class=\"navbar-brand\">CALCULATOR</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

            </div>
        </div>
    </header>
{% endblock %}

<div class=\"container body-container\">
    {% block body %}
        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                {% block main %}{% endblock %}
            </div>
        </div>
    {% endblock %}
</div>


{% block javascripts %}
    <script src=\"{{ asset('js/jquery-2.2.4.min.js') }}\"></script>
    <script src=\"{{ asset('js/moment.min.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap-datetimepicker.min.js') }}\"></script>
{% endblock %}

</body>
</html>
";
    }
}
