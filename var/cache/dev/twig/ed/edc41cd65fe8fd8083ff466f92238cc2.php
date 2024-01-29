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
class __TwigTemplate_bc8ff36345f3760ecd4a4bec0dd1e308 extends Template
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

    <div class=\"row\">
        <div class=\"col\">
            <div class=\"row\">
                <div class=\"col-auto\">
                    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formformation"]) || array_key_exists("formformation", $context) ? $context["formformation"] : (function () { throw new RuntimeError('Variable "formformation" does not exist.', 12, $this->source); })()), "title", [], "any", false, false, false, 12), 'row');
        echo "
                </div>
                <div class=\"col\">
                    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formformation"]) || array_key_exists("formformation", $context) ? $context["formformation"] : (function () { throw new RuntimeError('Variable "formformation" does not exist.', 15, $this->source); })()), "description", [], "any", false, false, false, 15), 'row');
        echo "
                </div>
                <div class=\"col\">
                    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formformation"]) || array_key_exists("formformation", $context) ? $context["formformation"] : (function () { throw new RuntimeError('Variable "formformation" does not exist.', 18, $this->source); })()), "publishedAt", [], "any", false, false, false, 18), 'row');
        echo "
                </div>
                <div class=\"col\">
                    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formformation"]) || array_key_exists("formformation", $context) ? $context["formformation"] : (function () { throw new RuntimeError('Variable "formformation" does not exist.', 21, $this->source); })()), "playlistId", [], "any", false, false, false, 21), 'row');
        echo "
                </div>
                <div class=\"col\">
                    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formformation"]) || array_key_exists("formformation", $context) ? $context["formformation"] : (function () { throw new RuntimeError('Variable "formformation" does not exist.', 24, $this->source); })()), "videoId", [], "any", false, false, false, 24), 'row');
        echo "
                </div>
                <div class=\"col\">
                    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formformation"]) || array_key_exists("formformation", $context) ? $context["formformation"] : (function () { throw new RuntimeError('Variable "formformation" does not exist.', 27, $this->source); })()), "categoriesid", [], "any", false, false, false, 27), 'widget');
        echo "
                </div>  
                <div class=\"col\">
                </div>
            </div>
        </div>
    </div>
    ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formformation"]) || array_key_exists("formformation", $context) ? $context["formformation"] : (function () { throw new RuntimeError('Variable "formformation" does not exist.', 34, $this->source); })()), 'form_end');
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
        return array (  118 => 34,  108 => 27,  102 => 24,  96 => 21,  90 => 18,  84 => 15,  78 => 12,  68 => 6,  58 => 5,  35 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# admin.formations.form #}

{% extends \"baseadmin.html.twig\" %}

{% block body %}
    {{ form_start(formformation) }}

    <div class=\"row\">
        <div class=\"col\">
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
                </div>
            </div>
        </div>
    </div>
    {{ form_end(formformation) }}
{% endblock %}", "admin/admin.formations.form.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/CNED1/templates/admin/admin.formations.form.html.twig");
    }
}
