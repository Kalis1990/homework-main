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

/* pages/view.html.twig */
class __TwigTemplate_1a635516378b08cf26a810e786d666c4 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/view.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/view.html.twig", 1);
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
                    <h1 class=\"fw-bold\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 8, $this->source); })()), "title", [], "any", false, false, false, 8), "html", null, true);
        echo "</h1>
                    <p class=\"text-muted\">X minutes</p>
                </div>

                <img class=\"img-fluid\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 12, $this->source); })()), "image", [], "any", false, false, false, 12), "html", null, true);
        echo "\" alt=\"\">

              
                
                ";
        // line 16
        $context["reading_time"] = $this->extensions['App\Twig\ReadingTimeExtension']->calculateReadingTime(twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 16, $this->source); })()), "text", [], "any", false, false, false, 16));
        // line 17
        echo "
                <div class=\"lead mb-4 py-5\">";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["reading_time"]) || array_key_exists("reading_time", $context) ? $context["reading_time"] : (function () { throw new RuntimeError('Variable "reading_time" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "</div>

                ";
        // line 25
        echo "
                ";
        // line 27
        echo "                ";
        // line 46
        echo "                ";
        // line 47
        echo "

                  

                <div class=\"d-grid gap-2 d-sm-flex justify-content-sm-center\">
                    <a href=\"";
        // line 52
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
        return "pages/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 52,  96 => 47,  94 => 46,  92 => 27,  89 => 25,  84 => 18,  81 => 17,  79 => 16,  72 => 12,  65 => 8,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block main %}
    <main>
        <div class=\"py-5 bg-light\">
            <div class=\"container\">
                <div class=\"py-5 text-center\">
                    <h1 class=\"fw-bold\">{{ article.title }}</h1>
                    <p class=\"text-muted\">X minutes</p>
                </div>

                <img class=\"img-fluid\" src=\"{{ article.image }}\" alt=\"\">

              
                
                {% set reading_time = article.text|reading_time %}

                <div class=\"lead mb-4 py-5\">{{ reading_time }}</div>

                {# <form action=\"{{ path('app_calculate_reading_time') }}\" method=\"GET\">
                <textarea name=\"text\"></textarea>
                <button type=\"submit\">Calculate Reading Time</button>
                </form>
                <div id=\"reading-time\"></div> #}

                {# // <script> #}
                {# //     var form = document.querySelector('form');
                //     var readingTimeElement = document.querySelector('#reading-time');

                //     form.addEventListener('submit', function(event) {
                //         event.preventDefault();

                //         var xhr = new XMLHttpRequest();

                //         xhr.onreadystatechange = function() {
                //             if (xhr.readyState === XMLHttpRequest.DONE) {
                //                 if (xhr.status === 200) {
                //                     readingTimeElement.innerText = xhr.responseText;
                //                 }
                //             }
                //         };

                //         xhr.open('GET', form.action + '?text=' + encodeURIComponent(form.elements.text.value));
                //         xhr.send();
                //     }); #}
                {# // </script> #}


                  

                <div class=\"d-grid gap-2 d-sm-flex justify-content-sm-center\">
                    <a href=\"{{ path('home') }}\" type=\"button\" class=\"btn btn-secondary btn-lg px-4 gap-3\">Back</a>
                </div>
            </div>
        </div>
    </main>
{% endblock %}
", "pages/view.html.twig", "C:\\homework-main\\code\\templates\\pages\\view.html.twig");
    }
}
