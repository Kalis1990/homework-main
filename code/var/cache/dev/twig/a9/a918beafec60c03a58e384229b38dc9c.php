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
class __TwigTemplate_2766c3ff971b1f37033825468e5e1cb1 extends Template
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
                    <h2 class=\"fw-bold\">of</h2>
                    <h1 class=\"fw-bold\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 10, $this->source); })()), "title", [], "any", false, false, false, 10), "html", null, true);
        echo "</h1>
                </div>

                

                ";
        // line 16
        echo "            </div>
        
         <div class=\"container col-lg-6 col-md-6 col-sm-12 mb-5 \" style=\"padding: 25px 25px 0 25px; border: 1px solid #00000050; border-radius: 0.5rem; box-shadow: 0 0 10px #00000050;\">
            <div class=\"container\">
                <h2 class=\"text-center mb-2\"> Edit Article</h2>
                
                ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), 'form_start');
        echo "
                <div class=\"form-group mb-4\">
                    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "title", [], "any", false, false, false, 24), 'label');
        echo "
                    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "title", [], "any", false, false, false, 25), 'widget');
        echo "
                    <div class=\"text-danger\">
                        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "title", [], "any", false, false, false, 27), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"form-group mb-4\">
                <img class=\"img-fluid\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 31, $this->source); })()), "image", [], "any", false, false, false, 31), "html", null, true);
        echo "\" alt=\"\" width=\"100px\">
                    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "image", [], "any", false, false, false, 32), 'label');
        echo "
                    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "image", [], "any", false, false, false, 33), 'widget');
        echo "
                    <div class=\"text-danger\">
                        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "image", [], "any", false, false, false, 35), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"form-group mb-4\">
                    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "text", [], "any", false, false, false, 39), 'label');
        echo "
                    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "text", [], "any", false, false, false, 40), 'widget');
        echo "
                    <div class=\"text-danger\">
                        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "text", [], "any", false, false, false, 42), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"btn-group my-4\">
                    <button type=\"submit\" class=\"btn btn-warning px-4\">Update</button>
                    <a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" type=\"button\" class=\"btn btn-secondary\">Back</a>
                </div>
                ";
        // line 49
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), 'form_end');
        echo "
                ";
        // line 51
        echo "            </div>
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
        return array (  150 => 51,  146 => 49,  141 => 47,  133 => 42,  128 => 40,  124 => 39,  117 => 35,  112 => 33,  108 => 32,  104 => 31,  97 => 27,  92 => 25,  88 => 24,  83 => 22,  75 => 16,  67 => 10,  59 => 4,  52 => 3,  35 => 1,);
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
                    <h2 class=\"fw-bold\">of</h2>
                    <h1 class=\"fw-bold\">{{ article.title }}</h1>
                </div>

                

                {# <div class=\"lead mb-4 py-5\">{{ article.text | raw }}</div> #}
            </div>
        
         <div class=\"container col-lg-6 col-md-6 col-sm-12 mb-5 \" style=\"padding: 25px 25px 0 25px; border: 1px solid #00000050; border-radius: 0.5rem; box-shadow: 0 0 10px #00000050;\">
            <div class=\"container\">
                <h2 class=\"text-center mb-2\"> Edit Article</h2>
                
                {{ form_start(form) }}
                <div class=\"form-group mb-4\">
                    {{ form_label(form.title) }}
                    {{ form_widget(form.title) }}
                    <div class=\"text-danger\">
                        {{ form_errors(form.title) }}
                    </div>
                </div>
                <div class=\"form-group mb-4\">
                <img class=\"img-fluid\" src=\"{{ article.image }}\" alt=\"\" width=\"100px\">
                    {{ form_label(form.image) }}
                    {{ form_widget(form.image) }}
                    <div class=\"text-danger\">
                        {{ form_errors(form.image) }}
                    </div>
                </div>
                <div class=\"form-group mb-4\">
                    {{ form_label(form.text) }}
                    {{ form_widget(form.text) }}
                    <div class=\"text-danger\">
                        {{ form_errors(form.text) }}
                    </div>
                </div>
                <div class=\"btn-group my-4\">
                    <button type=\"submit\" class=\"btn btn-warning px-4\">Update</button>
                    <a href=\"{{ path('home') }}\" type=\"button\" class=\"btn btn-secondary\">Back</a>
                </div>
                {{ form_end(form) }}
                {# </form> #}
            </div>
        </div>
        </div>
    </main>
{% endblock %}
", "pages/edit.html.twig", "C:\\homework-main\\code\\templates\\pages\\edit.html.twig");
    }
}
