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

/* pages/edit.html.twig */
class __TwigTemplate_bfa7b9a6d9910b0e6207693f8ed5315c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <main>
        <div class=\"py-5 bg-light\">
            <div class=\"container\">
                <div class=\"py-5 text-center\">
                    <h1 class=\"fw-bold\">Edit Page</h1>
                    <h2 class=\"fw-bold\">this</h2>
                    <h1 class=\"fw-bold\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 10, $this->source); })()), "title", [], "any", false, false, false, 10), "html", null, true);
        echo "</h1>
                </div>

                <img class=\"img-fluid\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 13, $this->source); })()), "image", [], "any", false, false, false, 13), "html", null, true);
        echo "\" alt=\"\">

                ";
        // line 16
        echo "
                <div class=\"d-grid gap-2 d-sm-flex justify-content-sm-center\">
                    <button type=\"submit\" class=\"btn btn-warning px-4\">Update</button>
                    <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" type=\"button\" class=\"btn btn-secondary btn-lg px-4 gap-3\">Back</a>
                </div>
            </div>
        </div>
    </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "pages/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 19,  78 => 16,  73 => 13,  67 => 10,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block main %}
    <main>
        <div class=\"py-5 bg-light\">
            <div class=\"container\">
                <div class=\"py-5 text-center\">
                    <h1 class=\"fw-bold\">Edit Page</h1>
                    <h2 class=\"fw-bold\">this</h2>
                    <h1 class=\"fw-bold\">{{ article.title }}</h1>
                </div>

                <img class=\"img-fluid\" src=\"{{ article.image }}\" alt=\"\">

                {# <div class=\"lead mb-4 py-5\">{{ article.text | raw }}</div> #}

                <div class=\"d-grid gap-2 d-sm-flex justify-content-sm-center\">
                    <button type=\"submit\" class=\"btn btn-warning px-4\">Update</button>
                    <a href=\"{{ path('home') }}\" type=\"button\" class=\"btn btn-secondary btn-lg px-4 gap-3\">Back</a>
                </div>
            </div>
        </div>
    </main>
{% endblock %}
", "pages/edit.html.twig", "C:\\homework-main\\code\\templates\\pages\\edit.html.twig");
    }
}
