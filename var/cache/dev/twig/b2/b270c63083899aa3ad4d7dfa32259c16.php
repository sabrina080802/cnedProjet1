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

/* admin/admin.formations.form.html.twig */
class __TwigTemplate_eb1d06e4751180237ad35458e094a7c8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin.formations.form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin.formations.form.html.twig"));

        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formformation"]) || array_key_exists("formformation", $context) ? $context["formformation"] : (function () { throw new RuntimeError('Variable "formformation" does not exist.', 2, $this->source); })()), 'form_start');
        echo "

<div class=\"row\">
    <div class=\"col>
        <div class=\"row\">
            <div class=\"col-auto\">
                ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formformation"]) || array_key_exists("formformation", $context) ? $context["formformation"] : (function () { throw new RuntimeError('Variable "formformation" does not exist.', 8, $this->source); })()), "title", [], "any", false, false, false, 8), 'row');
        echo "
            </div>
            <div class=\"col\">
                ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formformation"]) || array_key_exists("formformation", $context) ? $context["formformation"] : (function () { throw new RuntimeError('Variable "formformation" does not exist.', 11, $this->source); })()), "description", [], "any", false, false, false, 11), 'row');
        echo "
            </div>
            <div class=\"col\">
                ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formformation"]) || array_key_exists("formformation", $context) ? $context["formformation"] : (function () { throw new RuntimeError('Variable "formformation" does not exist.', 14, $this->source); })()), "publishedAt", [], "any", false, false, false, 14), 'row');
        echo "
            </div>
            <div class=\"col\">
                ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formformation"]) || array_key_exists("formformation", $context) ? $context["formformation"] : (function () { throw new RuntimeError('Variable "formformation" does not exist.', 17, $this->source); })()), "playlistId", [], "any", false, false, false, 17), 'row');
        echo "
            </div>
              <div class=\"col\">
                ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formformation"]) || array_key_exists("formformation", $context) ? $context["formformation"] : (function () { throw new RuntimeError('Variable "formformation" does not exist.', 20, $this->source); })()), "videoId", [], "any", false, false, false, 20), 'row');
        echo "
            </div>
            <div class=\"col\">
                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formformation"]) || array_key_exists("formformation", $context) ? $context["formformation"] : (function () { throw new RuntimeError('Variable "formformation" does not exist.', 23, $this->source); })()), "categoriesid", [], "any", false, false, false, 23), 'widget');
        echo "
            </div>  
            <div class=\"col\">
                ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formformation"]) || array_key_exists("formformation", $context) ? $context["formformation"] : (function () { throw new RuntimeError('Variable "formformation" does not exist.', 26, $this->source); })()), "submit", [], "any", false, false, false, 26), 'row');
        echo "
            </div>
        </div>
    </div>
</div>
";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formformation"]) || array_key_exists("formformation", $context) ? $context["formformation"] : (function () { throw new RuntimeError('Variable "formformation" does not exist.', 31, $this->source); })()), 'form_end');
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/admin.formations.form.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  96 => 31,  88 => 26,  82 => 23,  76 => 20,  70 => 17,  64 => 14,  58 => 11,  52 => 8,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# admin.formations.form #}
{{ form_start(formformation) }}

<div class=\"row\">
    <div class=\"col>
        <div class=\"row\">
            <div class=\"col-auto\">
                {{ form_row(formformation.title) }}
            </div>
            <div class=\"col\">
                {{ form_row(formformation.description) }}
            </div>
            <div class=\"col\">
                {{ form_row(formformation.publishedAt) }}
            </div>
            <div class=\"col\">
                {{ form_row(formformation.playlistId) }}
            </div>
              <div class=\"col\">
                {{ form_row(formformation.videoId) }}
            </div>
            <div class=\"col\">
                {{ form_widget(formformation.categoriesid) }}
            </div>  
            <div class=\"col\">
                {{ form_row(formformation.submit) }}
            </div>
        </div>
    </div>
</div>
{{ form_end(formformation) }}", "admin/admin.formations.form.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/ProjetCned1/mediatekformation/templates/admin/admin.formations.form.html.twig");
    }
}
