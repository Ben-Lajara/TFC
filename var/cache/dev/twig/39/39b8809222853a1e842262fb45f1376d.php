<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* main/familia.html.twig */
class __TwigTemplate_c305aaeb78cf71514743da5942f3f624 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/familia.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/familia.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/familia.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Familia";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div id=\"familyBody\">
    <div id=\"containerCards\" class=\"container\">
        <div id=\"cardfamily1\" class=\"card\">
            <div class=\"slide slide1\">
                <div class=\"content\">
                    <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showTutores");
        echo "\" class=\"icon\">
                        <img aria-hidden=\"true\" style=\"width:300px;\"></img>
                    </a>
                </div>
            </div>
            <div class=\"slide slide2\">
                <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showTutores");
        echo "\" class=\"content\">
                    <h3>Tutor??a</h3>
                </a>
            </div>
        </div>
        <div id=\"cardfamily2\" class=\"card\">
            <div class=\"slide slide1\">
                <div class=\"content\">
                    <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showSecretaria");
        echo "\" class=\"icon\">
                        <img aria-hidden=\"true\" style=\"width:300px;\"></img>
                    </a>
                </div>
            </div>
            <div class=\"slide slide2\">
                <a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showSecretaria");
        echo "\" class=\"content\">
                    <h3>Secretar??a</h3>
                </a>
            </div>
        </div>
        <div id=\"cardfamily3\" class=\"card\">
            <div class=\"slide slide1\">
                <div class=\"content\">
                    <a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showOrientacion");
        echo "\" class=\"icon\">
                        <img aria-hidden=\"true\" style=\"width:300px;\"></img>
                    </a>
                </div>
            </div>
            <div class=\"slide slide2\">
                <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showOrientacion");
        echo "\" class=\"content\">
                    <h3>Orientaci??n</h3>
                </a>
            </div>
        </div>
    </div>
    
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "main/familia.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 45,  135 => 39,  124 => 31,  115 => 25,  104 => 17,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Familia{% endblock %}

{% block body %}
<div id=\"familyBody\">
    <div id=\"containerCards\" class=\"container\">
        <div id=\"cardfamily1\" class=\"card\">
            <div class=\"slide slide1\">
                <div class=\"content\">
                    <a href=\"{{path('showTutores')}}\" class=\"icon\">
                        <img aria-hidden=\"true\" style=\"width:300px;\"></img>
                    </a>
                </div>
            </div>
            <div class=\"slide slide2\">
                <a href=\"{{path('showTutores')}}\" class=\"content\">
                    <h3>Tutor??a</h3>
                </a>
            </div>
        </div>
        <div id=\"cardfamily2\" class=\"card\">
            <div class=\"slide slide1\">
                <div class=\"content\">
                    <a href=\"{{path('showSecretaria')}}\" class=\"icon\">
                        <img aria-hidden=\"true\" style=\"width:300px;\"></img>
                    </a>
                </div>
            </div>
            <div class=\"slide slide2\">
                <a href=\"{{path('showSecretaria')}}\" class=\"content\">
                    <h3>Secretar??a</h3>
                </a>
            </div>
        </div>
        <div id=\"cardfamily3\" class=\"card\">
            <div class=\"slide slide1\">
                <div class=\"content\">
                    <a href=\"{{path('showOrientacion')}}\" class=\"icon\">
                        <img aria-hidden=\"true\" style=\"width:300px;\"></img>
                    </a>
                </div>
            </div>
            <div class=\"slide slide2\">
                <a href=\"{{path('showOrientacion')}}\" class=\"content\">
                    <h3>Orientaci??n</h3>
                </a>
            </div>
        </div>
    </div>
    
</div>
{% endblock %}
", "main/familia.html.twig", "C:\\xampp\\htdocs\\symfony\\updatedTFC\\TFC-2469911dfba64533f7d3e3b79dc3f11bb4a2d310\\templates\\main\\familia.html.twig");
    }
}
