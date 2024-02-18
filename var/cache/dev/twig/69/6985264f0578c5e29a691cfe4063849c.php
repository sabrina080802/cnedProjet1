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
        // line 4
        return "baseadmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin.playlists.form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin.playlists.form.html.twig"));

        $this->parent = $this->loadTemplate("baseadmin.html.twig", "admin/admin.playlists.form.html.twig", 4);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formplaylist"]) || array_key_exists("formplaylist", $context) ? $context["formplaylist"] : (function () { throw new RuntimeError('Variable "formplaylist" does not exist.', 8, $this->source); })()), 'form_start');
        echo "
    <div class=\"form-container\">
        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formplaylist"]) || array_key_exists("formplaylist", $context) ? $context["formplaylist"] : (function () { throw new RuntimeError('Variable "formplaylist" does not exist.', 10, $this->source); })()), "name", [], "any", false, false, false, 10), 'row');
        echo "
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formplaylist"]) || array_key_exists("formplaylist", $context) ? $context["formplaylist"] : (function () { throw new RuntimeError('Variable "formplaylist" does not exist.', 11, $this->source); })()), "description", [], "any", false, false, false, 11), 'row');
        echo "
        ";
        // line 12
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playlist"]) || array_key_exists("playlist", $context) ? $context["playlist"] : (function () { throw new RuntimeError('Variable "playlist" does not exist.', 12, $this->source); })()), "formations", [], "any", false, false, false, 12)) > 0)) {
            // line 13
            echo "            <div class=\"formations-list\">
                <h4>Liste des formations de cette playlist :</h4>
                ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["playlist"]) || array_key_exists("playlist", $context) ? $context["playlist"] : (function () { throw new RuntimeError('Variable "playlist" does not exist.', 15, $this->source); })()), "formations", [], "any", false, false, false, 15));
            foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
                // line 16
                echo "                    <div>-> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "title", [], "any", false, false, false, 16), "html", null, true);
                echo "</div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "            </div>
        ";
        }
        // line 20
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formplaylist"]) || array_key_exists("formplaylist", $context) ? $context["formplaylist"] : (function () { throw new RuntimeError('Variable "formplaylist" does not exist.', 20, $this->source); })()), "submit", [], "any", false, false, false, 20), 'row', ["label" => "Valider"]);
        echo "
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
        return array (  113 => 22,  107 => 20,  103 => 18,  94 => 16,  90 => 15,  86 => 13,  84 => 12,  80 => 11,  76 => 10,  71 => 8,  68 => 7,  58 => 6,  35 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("{# admin.playlists.form #}


{% extends \"baseadmin.html.twig\" %}

{% block body %}

{{ form_start(formplaylist) }}
    <div class=\"form-container\">
        {{ form_row(formplaylist.name) }}
        {{ form_row(formplaylist.description) }}
        {% if playlist.formations|length > 0 %}
            <div class=\"formations-list\">
                <h4>Liste des formations de cette playlist :</h4>
                {% for formation in playlist.formations %}
                    <div>-> {{ formation.title }}</div>
                {% endfor %}
            </div>
        {% endif %}
        {{form_row(formplaylist.submit, {'label': 'Valider'})}}
    </div>
{{ form_end(formplaylist) }}
{% endblock %}", "admin/admin.playlists.form.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/CNED1/templates/admin/admin.playlists.form.html.twig");
    }
}
