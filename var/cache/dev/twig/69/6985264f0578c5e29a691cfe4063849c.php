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

/* admin/admin.playlists.form.html.twig */
class __TwigTemplate_f2fe43fb135879bd2f5ea01d66e19c91 extends Template
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
        // line 1
        return "baseadmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin.playlists.form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin.playlists.form.html.twig"));

        $this->parent = $this->loadTemplate("baseadmin.html.twig", "admin/admin.playlists.form.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formplaylist"]) || array_key_exists("formplaylist", $context) ? $context["formplaylist"] : (function () { throw new RuntimeError('Variable "formplaylist" does not exist.', 5, $this->source); })()), 'form_start');
        echo "

    <div class=\"row\">
            <div class=\"col\">             
                <div class=\"row\">
                    <div class=\"col-auto\">
                        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formplaylist"]) || array_key_exists("formplaylist", $context) ? $context["formplaylist"] : (function () { throw new RuntimeError('Variable "formplaylist" does not exist.', 11, $this->source); })()), "name", [], "any", false, false, false, 11), 'row');
        echo "
                    </div>
                    <div class=\"col\">
                        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formplaylist"]) || array_key_exists("formplaylist", $context) ? $context["formplaylist"] : (function () { throw new RuntimeError('Variable "formplaylist" does not exist.', 14, $this->source); })()), "description", [], "any", false, false, false, 14), 'row');
        echo "
                    </div>
                    <div class=\"col\">
                        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formplaylist"]) || array_key_exists("formplaylist", $context) ? $context["formplaylist"] : (function () { throw new RuntimeError('Variable "formplaylist" does not exist.', 17, $this->source); })()), "submit", [], "any", false, false, false, 17), 'row');
        echo "
                    </div>  
                </div>
            </div>
    </div>
";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formplaylist"]) || array_key_exists("formplaylist", $context) ? $context["formplaylist"] : (function () { throw new RuntimeError('Variable "formplaylist" does not exist.', 22, $this->source); })()), 'form_end');
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
        return "admin/admin.playlists.form.html.twig";
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
        return array (  100 => 22,  92 => 17,  86 => 14,  80 => 11,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"baseadmin.html.twig\" %}

{% block body %}

{{ form_start(formplaylist) }}

    <div class=\"row\">
            <div class=\"col\">             
                <div class=\"row\">
                    <div class=\"col-auto\">
                        {{ form_row(formplaylist.name) }}
                    </div>
                    <div class=\"col\">
                        {{ form_row(formplaylist.description) }}
                    </div>
                    <div class=\"col\">
                        {{ form_row(formplaylist.submit) }}
                    </div>  
                </div>
            </div>
    </div>
{{ form_end(formplaylist) }}
{% endblock %}", "admin/admin.playlists.form.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/CNED1/templates/admin/admin.playlists.form.html.twig");
    }
}