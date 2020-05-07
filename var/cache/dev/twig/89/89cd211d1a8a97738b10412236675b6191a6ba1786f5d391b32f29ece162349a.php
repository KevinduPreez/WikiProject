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

/* result.html.twig */
class __TwigTemplate_8b6c54ecfc5fe4a6199f764c50fb8778b0804a85165cb20f84a590ef4d2e2706 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "result.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "result.html.twig"));

        // line 1
        $this->loadTemplate("base.html.twig", "result.html.twig", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 5, $this->source); })()), 'form_start');
        echo "
            ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 6, $this->source); })()), 'widget');
        echo "
        ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 7, $this->source); })()), 'form_end');
        echo "
    </div>


    <div class=\"container\">
        <div class=\"card\" style=\"width: 20rem;\">
           ";
        // line 14
        echo "            <div class=\"card-body\">
                <h5 class=\"card-title\">";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["searchTitle"]) || array_key_exists("searchTitle", $context) ? $context["searchTitle"] : (function () { throw new RuntimeError('Variable "searchTitle" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "</h5>
                <p class=\"card-text\">";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["searchInfo"]) || array_key_exists("searchInfo", $context) ? $context["searchInfo"] : (function () { throw new RuntimeError('Variable "searchInfo" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "</p>
                <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["searchUrl"]) || array_key_exists("searchUrl", $context) ? $context["searchUrl"] : (function () { throw new RuntimeError('Variable "searchUrl" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "\" class=\"btn btn-primary\">Visit Page</a>
            </div>
        </div>
    </div>







";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 17,  95 => 16,  91 => 15,  88 => 14,  79 => 7,  75 => 6,  71 => 5,  68 => 4,  49 => 3,  46 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%  include 'base.html.twig' %}

{% block body %}
    <div class=\"container\">
        {{ form_start(searchForm) }}
            {{ form_widget(searchForm ) }}
        {{ form_end(searchForm) }}
    </div>


    <div class=\"container\">
        <div class=\"card\" style=\"width: 20rem;\">
           {# <img src=\"{{ searchImage }}\" class=\"card-img-top\" alt=\"...\"> #}
            <div class=\"card-body\">
                <h5 class=\"card-title\">{{ searchTitle }}</h5>
                <p class=\"card-text\">{{ searchInfo }}</p>
                <a href=\"{{ searchUrl }}\" class=\"btn btn-primary\">Visit Page</a>
            </div>
        </div>
    </div>







{% endblock %}", "result.html.twig", "/Users/Kevin/CodeProjetcs/WikiProject/templates/result.html.twig");
    }
}
