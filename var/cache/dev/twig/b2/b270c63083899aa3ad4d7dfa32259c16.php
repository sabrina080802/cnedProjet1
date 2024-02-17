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

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return "baseadmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin.formations.form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin.formations.form.html.twig"));

        $this->parent = $this->loadTemplate("baseadmin.html.twig", "admin/admin.formations.form.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formformation"]) || array_key_exists("formformation", $context) ? $context["formformation"] : (function () { throw new RuntimeError('Variable "formformation" does not exist.', 6, $this->source); })()), 'form_start');
        echo "
    <div class=\"form-container\">
        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formformation"]) || array_key_exists("formformation", $context) ? $context["formformation"] : (function () { throw new RuntimeError('Variable "formformation" does not exist.', 8, $this->source); })()), "title", [], "any", false, false, false, 8), 'row');
        echo "
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formformation"]) || array_key_exists("formformation", $context) ? $context["formformation"] : (function () { throw new RuntimeError('Variable "formformation" does not exist.', 9, $this->source); })()), "description", [], "any", false, false, false, 9), 'row');
        echo "
        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formformation"]) || array_key_exists("formformation", $context) ? $context["formformation"] : (function () { throw new RuntimeError('Variable "formformation" does not exist.', 10, $this->source); })()), "publishedAt", [], "any", false, false, false, 10), 'row');
        echo "
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formformation"]) || array_key_exists("formformation", $context) ? $context["formformation"] : (function () { throw new RuntimeError('Variable "formformation" does not exist.', 11, $this->source); })()), "playlist", [], "any", false, false, false, 11), 'row');
        echo "
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formformation"]) || array_key_exists("formformation", $context) ? $context["formformation"] : (function () { throw new RuntimeError('Variable "formformation" does not exist.', 12, $this->source); })()), "videoId", [], "any", false, false, false, 12), 'row');
        echo "
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formformation"]) || array_key_exists("formformation", $context) ? $context["formformation"] : (function () { throw new RuntimeError('Variable "formformation" does not exist.', 13, $this->source); })()), "categories", [], "any", false, false, false, 13), 'widget');
        echo "
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formformation"]) || array_key_exists("formformation", $context) ? $context["formformation"] : (function () { throw new RuntimeError('Variable "formformation" does not exist.', 14, $this->source); })()), "submit", [], "any", false, false, false, 14), 'row', ["label" => "Valider"]);
        echo "
    </div>
    ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formformation"]) || array_key_exists("formformation", $context) ? $context["formformation"] : (function () { throw new RuntimeError('Variable "formformation" does not exist.', 16, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  103 => 16,  98 => 14,  94 => 13,  90 => 12,  86 => 11,  82 => 10,  78 => 9,  74 => 8,  68 => 6,  58 => 5,  35 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# admin.formations.form #}

{% extends \"baseadmin.html.twig\" %}

{% block body %}
    {{ form_start(formformation) }}
    <div class=\"form-container\">
        {{ form_row(formformation.title) }}
        {{ form_row(formformation.description) }}
        {{ form_row(formformation.publishedAt) }}
        {{ form_row(formformation.playlist) }}
        {{ form_row(formformation.videoId) }}
        {{ form_widget(formformation.categories) }}
        {{form_row(formformation.submit, {'label': 'Valider'})}}
    </div>
    {{ form_end(formformation) }}
{% endblock %}", "admin/admin.formations.form.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/CNED1/templates/admin/admin.formations.form.html.twig");
    }
}
