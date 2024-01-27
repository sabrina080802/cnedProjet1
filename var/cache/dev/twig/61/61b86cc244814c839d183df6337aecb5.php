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

/* admin/admin.playlists.html.twig */
class __TwigTemplate_a24afee256a5542701d6490435756f0e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin.playlists.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin.playlists.html.twig"));

        $this->parent = $this->loadTemplate("baseadmin.html.twig", "admin/admin.playlists.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "     <div class=\"data-menu\">
        <a href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.playlists.form");
        echo "\" class=\"btn\"> Nouvelle playlist </a>
        <div class=\"sort-by\">
        <div class=\"field\">
                <form action=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.playlists.search", ["champ" => "name"]);
        echo "\">
                    <input type=\"text\" class=\"sm\" name=\"name\" value=\"";
        // line 8
        if ((((array_key_exists("valeur", $context)) ? (_twig_default_filter((isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 8, $this->source); })()))) : ("")) &&  !((array_key_exists("table", $context)) ? (_twig_default_filter((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 8, $this->source); })()))) : ("")))) {
            echo twig_escape_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 8, $this->source); })()), "html", null, true);
        }
        echo "\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("filtre_name"), "html", null, true);
        echo "\">
                    <button type=\"submit\" class=\"btn btn-info btn-sm\">Chercher</button>
                </form>
            </div>
            <div class=\"field\">
                <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.playlists.tri", ["champ" => "name", "ordre" => "DESC"]), "html", null, true);
        echo "\" class=\"btn btn-info btn-sm active  btn-up\" role=\"button\" aria-pressed=\"true\"><</a>
                <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.playlists.tri", ["champ" => "name", "ordre" => "ASC"]), "html", null, true);
        echo "\" class=\"btn btn-info btn-sm active  btn-up\" role=\"button\" aria-pressed=\"true\">></a>
                <div>Trier par titre</div>
            </div>
        </div>
    </div>
    <div class=\"category-list\">
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["playlists"]) || array_key_exists("playlists", $context) ? $context["playlists"] : (function () { throw new RuntimeError('Variable "playlists" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["playlist"]) {
            // line 22
            echo "            <div class=\"category\">
                <h4>
                    ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["playlist"], "name", [], "any", false, false, false, 24), "html", null, true);
            echo "
                </h4>
                <div class=\"text-left category-max-h\">
                    ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["playlist"], "formations", [], "any", false, false, false, 27));
            foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
                // line 28
                echo "                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "title", [], "any", false, false, false, 28), "html", null, true);
                echo "<br />
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "                </div>
                <div class=\"btn-delete\">
                    <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.playlists.remove", ["id" => twig_get_attribute($this->env, $this->source, $context["playlist"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\" class=\"btn btn-danger\" ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["playlist"], "formations", [], "any", false, false, false, 32)) == 0)) {
                echo "onclick=\"return confirm('Etes-vous sûr de vouloir supprimer ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["playlist"], "name", [], "any", false, false, false, 32), "html", null, true);
                echo " ?')\"";
            }
            echo ">Supprimer</a>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['playlist'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/admin.playlists.html.twig";
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
        return array (  155 => 36,  139 => 32,  135 => 30,  126 => 28,  122 => 27,  116 => 24,  112 => 22,  108 => 21,  99 => 15,  95 => 14,  87 => 9,  81 => 8,  77 => 7,  71 => 4,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"baseadmin.html.twig\" %}
{% block body %}
     <div class=\"data-menu\">
        <a href=\"{{ path('admin.playlists.form') }}\" class=\"btn\"> Nouvelle playlist </a>
        <div class=\"sort-by\">
        <div class=\"field\">
                <form action=\"{{ path('admin.playlists.search', {champ: 'name'}) }}\">
                    <input type=\"text\" class=\"sm\" name=\"name\" value=\"{% if valeur|default and not table|default %}{{ valeur }}{% endif %}\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('filtre_name') }}\">
                    <button type=\"submit\" class=\"btn btn-info btn-sm\">Chercher</button>
                </form>
            </div>
            <div class=\"field\">
                <a href=\"{{ path('admin.playlists.tri', {champ: 'name', ordre: 'DESC'}) }}\" class=\"btn btn-info btn-sm active  btn-up\" role=\"button\" aria-pressed=\"true\"><</a>
                <a href=\"{{ path('admin.playlists.tri', {champ: 'name', ordre: 'ASC'}) }}\" class=\"btn btn-info btn-sm active  btn-up\" role=\"button\" aria-pressed=\"true\">></a>
                <div>Trier par titre</div>
            </div>
        </div>
    </div>
    <div class=\"category-list\">
        {% for playlist in playlists %}
            <div class=\"category\">
                <h4>
                    {{ playlist.name }}
                </h4>
                <div class=\"text-left category-max-h\">
                    {% for formation in playlist.formations %}
                        {{ formation.title }}<br />
                    {% endfor %}
                </div>
                <div class=\"btn-delete\">
                    <a href=\"{{ path('admin.playlists.remove', {id: playlist.id}) }}\" class=\"btn btn-danger\" {% if playlist.formations|length == 0 %}onclick=\"return confirm('Etes-vous sûr de vouloir supprimer {{ playlist.name }} ?')\"{% endif %}>Supprimer</a>
                </div>
            </div>
        {% endfor %}
    </div>
{% endblock %}
", "admin/admin.playlists.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/CNED1/templates/admin/admin.playlists.html.twig");
    }
}
