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

/* main/licencias.html.twig */
class __TwigTemplate_7df70f0d5d07693c1e8b1ab93526b047 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/licencias.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/licencias.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/licencias.html.twig", 1);
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

        echo "Licencias";
        
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
        echo "    <div class=\"container\">
        <h1>Licencias de imágenes usadas en Planifica</h1>
        En la web de Planifica se utilizan una serie de imágenes que cuentan con licencias Creative Commons para su uso.
        Las imágenes pueden observarse en las tarjetas que se muestran en la página.


        <ul>
            <li>
                \"Familia\": <a href=\"https://commons.wikimedia.org/wiki/File:Family_Portrait.jpg\">\"Family
                    Portrait\"</a>,
                por <a href=\"https://www.flickr.com/photos/a4gpa/\">White Sands</a> bajo licencia <a
                    href=\"https://creativecommons.org/licenses/by-sa/2.0/deed.en\">CC BY-SA 2.0</a> / Recoloreada del
                original.
            </li>
            <ul>
                <li>
                    \"Orientación\": <a href=\"https://www.flickr.com/photos/seattlecommunitytech/33117169184\">\"Teacher
                        Helping
                        Students
                        Working At Computers In Classroom\"</a>, por <a
                        href=\"https://www.flickr.com/photos/seattlecommunitytech/\">City of Seattle Community
                        Tech</a>
                    bajo
                    licencia <a href=\"https://creativecommons.org/licenses/by-nc/2.0/\">CC BY-NC 2.0</a> / Recortada
                    y
                    recoloreada del original.
                </li>
                <li>
                    \"Tutoría\": <a
                        href=\"https://pixnio.com/es/gente/afroamericano-mujer-hablando-caucasico-macho-hembra#\">\"Hablando\"</a>
                    bajo licencia <a href=\"https://creativecommons.org/licenses/publicdomain/\">CC0</a> / Recoloreada
                    del
                    original.
                </li>
                <li>
                    \"Secretaría\": <a href=\"https://www.flickr.com/photos/austinevan/2296270551\">\"my classroom in
                        bonn\"</a>,
                    por <a href=\"https://www.flickr.com/photos/austinevan/\">Evan Bench</a> bajo licencia <a
                        href=\"https://creativecommons.org/licenses/by/2.0/\">CC BY 2.0</a> / Recoloreada del
                    original.
                </li>
            </ul>
        </ul>

        <ul>
            <li>
                \"Trabajadores\": <a
                    href=\"https://commons.wikimedia.org/wiki/File:Preparation_for_training_teachers_on_the_subject_of_Wikipedia_-_Center_for_Educational_Technology_%285%29.jpg\">Preparation
                    for training teachers on the subject of Wikipedia - Center for Educational Technology</a>, por
                <a href=\"https://commons.wikimedia.org/wiki/User:Chenspec\">Chenspec</a> bajo licencia <a
                    href=\"https://creativecommons.org/licenses/by-sa/2.0/deed.en\">CC BY-SA 2.0</a> / Recoloreada del
                original.
            </li>
            <ul>
                <li>
                    \"Próximas citas\": <a href=\"https://www.flickr.com/photos/dejankrsmanovic/42417492845\">\"It is Twelve
                        O'Clock\"</a>, por <a href=\"https://www.flickr.com/photos/dejankrsmanovic/\">Dejan Krsmanovic</a>
                    bajo
                    licencia <a href=\"https://creativecommons.org/licenses/by/2.0/\">CC BY 2.0</a>
                </li>
                <li>
                    \"Nueva disponibilidad\": <a href=\"https://www.flickr.com/photos/42931449@N07/6812481635\">\"Business
                        Calendar & Schedule\"</a>, por
                    <a href=\"https://www.flickr.com/photos/42931449@N07/\">photosteve101</a>, bajo licencia <a
                        href=\"https://creativecommons.org/licenses/by/2.0/\">CC BY 2.0</a> / Recortada y recoloreada del
                    original.
                </li>
                <li>
                    \"Crear usuario Admin\": <a href=\"https://commons.wikimedia.org/wiki/File:Programming_code.jpg\">\"HTML
                        and
                        Javascript code on
                        black background\"</a>, por <a href=\"https://martinvorel.com/\">Martin Vorel</a> bajo licencia <a
                        href=\"https://creativecommons.org/licenses/by-sa/4.0/deed.en\">CC BY-SA 4.0</a> / Recortada y
                    recoloreada del original.
                </li>
            </ul>
        </ul>
    </div>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "main/licencias.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Licencias{% endblock %}

{% block body %}
    <div class=\"container\">
        <h1>Licencias de imágenes usadas en Planifica</h1>
        En la web de Planifica se utilizan una serie de imágenes que cuentan con licencias Creative Commons para su uso.
        Las imágenes pueden observarse en las tarjetas que se muestran en la página.


        <ul>
            <li>
                \"Familia\": <a href=\"https://commons.wikimedia.org/wiki/File:Family_Portrait.jpg\">\"Family
                    Portrait\"</a>,
                por <a href=\"https://www.flickr.com/photos/a4gpa/\">White Sands</a> bajo licencia <a
                    href=\"https://creativecommons.org/licenses/by-sa/2.0/deed.en\">CC BY-SA 2.0</a> / Recoloreada del
                original.
            </li>
            <ul>
                <li>
                    \"Orientación\": <a href=\"https://www.flickr.com/photos/seattlecommunitytech/33117169184\">\"Teacher
                        Helping
                        Students
                        Working At Computers In Classroom\"</a>, por <a
                        href=\"https://www.flickr.com/photos/seattlecommunitytech/\">City of Seattle Community
                        Tech</a>
                    bajo
                    licencia <a href=\"https://creativecommons.org/licenses/by-nc/2.0/\">CC BY-NC 2.0</a> / Recortada
                    y
                    recoloreada del original.
                </li>
                <li>
                    \"Tutoría\": <a
                        href=\"https://pixnio.com/es/gente/afroamericano-mujer-hablando-caucasico-macho-hembra#\">\"Hablando\"</a>
                    bajo licencia <a href=\"https://creativecommons.org/licenses/publicdomain/\">CC0</a> / Recoloreada
                    del
                    original.
                </li>
                <li>
                    \"Secretaría\": <a href=\"https://www.flickr.com/photos/austinevan/2296270551\">\"my classroom in
                        bonn\"</a>,
                    por <a href=\"https://www.flickr.com/photos/austinevan/\">Evan Bench</a> bajo licencia <a
                        href=\"https://creativecommons.org/licenses/by/2.0/\">CC BY 2.0</a> / Recoloreada del
                    original.
                </li>
            </ul>
        </ul>

        <ul>
            <li>
                \"Trabajadores\": <a
                    href=\"https://commons.wikimedia.org/wiki/File:Preparation_for_training_teachers_on_the_subject_of_Wikipedia_-_Center_for_Educational_Technology_%285%29.jpg\">Preparation
                    for training teachers on the subject of Wikipedia - Center for Educational Technology</a>, por
                <a href=\"https://commons.wikimedia.org/wiki/User:Chenspec\">Chenspec</a> bajo licencia <a
                    href=\"https://creativecommons.org/licenses/by-sa/2.0/deed.en\">CC BY-SA 2.0</a> / Recoloreada del
                original.
            </li>
            <ul>
                <li>
                    \"Próximas citas\": <a href=\"https://www.flickr.com/photos/dejankrsmanovic/42417492845\">\"It is Twelve
                        O'Clock\"</a>, por <a href=\"https://www.flickr.com/photos/dejankrsmanovic/\">Dejan Krsmanovic</a>
                    bajo
                    licencia <a href=\"https://creativecommons.org/licenses/by/2.0/\">CC BY 2.0</a>
                </li>
                <li>
                    \"Nueva disponibilidad\": <a href=\"https://www.flickr.com/photos/42931449@N07/6812481635\">\"Business
                        Calendar & Schedule\"</a>, por
                    <a href=\"https://www.flickr.com/photos/42931449@N07/\">photosteve101</a>, bajo licencia <a
                        href=\"https://creativecommons.org/licenses/by/2.0/\">CC BY 2.0</a> / Recortada y recoloreada del
                    original.
                </li>
                <li>
                    \"Crear usuario Admin\": <a href=\"https://commons.wikimedia.org/wiki/File:Programming_code.jpg\">\"HTML
                        and
                        Javascript code on
                        black background\"</a>, por <a href=\"https://martinvorel.com/\">Martin Vorel</a> bajo licencia <a
                        href=\"https://creativecommons.org/licenses/by-sa/4.0/deed.en\">CC BY-SA 4.0</a> / Recortada y
                    recoloreada del original.
                </li>
            </ul>
        </ul>
    </div>


{% endblock %}", "main/licencias.html.twig", "C:\\xampp\\htdocs\\symfony\\updatedTFC\\TFC\\templates\\main\\licencias.html.twig");
    }
}
