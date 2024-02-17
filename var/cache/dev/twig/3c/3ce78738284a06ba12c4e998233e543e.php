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

/* admin/admin.formations.html.twig */
class __TwigTemplate_4e9c98cecf744bcc69d2567b411c45f3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin.formations.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin.formations.html.twig"));

        $this->parent = $this->loadTemplate("baseadmin.html.twig", "admin/admin.formations.html.twig", 1);
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
        echo "    <div class=\"data-menu\">
        <a href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.formations.form");
        echo "\" class=\"btn\">Nouvelle formation</a>
        <div class=\"sort-by\">
            <div class=\"field\">
                <form action=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.formations.playlist", ["champ" => "playlist"]);
        echo "\">
                    <input type=\"text\" class=\"sm\" name=\"playlist\" value=\"";
        // line 9
        if ((((array_key_exists("valeur", $context)) ? (_twig_default_filter((isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 9, $this->source); })()))) : ("")) &&  !((array_key_exists("table", $context)) ? (_twig_default_filter((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 9, $this->source); })()))) : ("")))) {
            echo twig_escape_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 9, $this->source); })()), "html", null, true);
            echo " ";
        }
        echo "\" placeholder=\"Rechercher par playlist\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("filtre_playlist"), "html", null, true);
        echo "\">
                    <button type=\"submit\" class=\"btn btn-info\">Chercher</button>
                </form>
            </div>
            <div class=\"field ordered\">
                <div>Ordre par nom de playlist</div>
                <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.formations.tri", ["champ" => "playlist", "ordre" => "DESC"]), "html", null, true);
        echo "\" class=\"btn btn-info btn-sm active btn-up\" role=\"button\" aria-pressed=\"true\"><</a>
                <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.formations.tri", ["champ" => "playlist", "ordre" => "ASC"]), "html", null, true);
        echo "\" class=\"btn btn-info btn-sm active btn-down\" role=\"button\" aria-pressed=\"true\">></a>
            </div>
            <div class=\"field\">
                <form action=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.formations.title", ["champ" => "title"]);
        echo "\">
                    <input type=\"text\" class=\"sm\" name=\"title\" value=\"";
        // line 21
        if ((((array_key_exists("valeur", $context)) ? (_twig_default_filter((isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 21, $this->source); })()))) : ("")) &&  !((array_key_exists("table", $context)) ? (_twig_default_filter((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 21, $this->source); })()))) : ("")))) {
            echo twig_escape_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 21, $this->source); })()), "html", null, true);
        }
        echo "\" placeholder=\"Rechercher par titre\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("filtre_title"), "html", null, true);
        echo "\">
                    <button type=\"submit\" class=\"btn btn-info\">Chercher</button>
                </form>
            </div>
            <div class=\"field ordered\">
                <div>Ordre par titre </div>
                <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.formations.tri", ["champ" => "title", "ordre" => "DESC"]), "html", null, true);
        echo "\" class=\"btn btn-info btn-sm active btn-up\" role=\"button\" aria-pressed=\"true\"><</a>
                <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.formations.tri", ["champ" => "title", "ordre" => "ASC"]), "html", null, true);
        echo "\" class=\"btn btn-info btn-sm active btn-down\" role=\"button\" aria-pressed=\"true\">></a>
            </div>
        </div>
    </div>
    <div class=\"category-list\">
        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formations"]) || array_key_exists("formations", $context) ? $context["formations"] : (function () { throw new RuntimeError('Variable "formations" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 35
            echo "            <div class=\"category\">
                <h4>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "title", [], "any", false, false, false, 36), "html", null, true);
            echo "</h4>
                <div class=\"tag-list\">
                    <b>Catégories :</b>
                    ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["formation"], "categories", [], "any", false, false, false, 39));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 40
                echo "                        <span>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 40), "html", null, true);
                echo "</span>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "                </div>
                <div class=\"description\">
                    <b>Description :</b><br/>
                    ";
            // line 45
            echo twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["formation"], "description", [], "any", false, false, false, 45), ["
" => "<br>", "" => "<br>"]);
            echo "
                </div>
                <div class=\"menu\">
                    <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.formations.form", ["id" => twig_get_attribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\" class=\"btn btn-info\">Modifier</a>
                    <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.formations.remove", ["id" => twig_get_attribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\" class=\"btn btn-danger\" onclick=\"return confirm('Etes-vous sûr de vouloir supprimer ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "title", [], "any", false, false, false, 49), "html", null, true);
            echo " ?')\">Supprimer</a>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
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
        return "admin/admin.formations.html.twig";
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
        return array (  192 => 53,  180 => 49,  176 => 48,  169 => 45,  164 => 42,  155 => 40,  151 => 39,  145 => 36,  142 => 35,  138 => 34,  130 => 29,  126 => 28,  117 => 22,  111 => 21,  107 => 20,  101 => 17,  97 => 16,  88 => 10,  81 => 9,  77 => 8,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"baseadmin.html.twig\" %}

{% block body %}
    <div class=\"data-menu\">
        <a href=\"{{ path('admin.formations.form') }}\" class=\"btn\">Nouvelle formation</a>
        <div class=\"sort-by\">
            <div class=\"field\">
                <form action=\"{{ path('admin.formations.playlist', {champ: 'playlist'}) }}\">
                    <input type=\"text\" class=\"sm\" name=\"playlist\" value=\"{% if valeur|default and not table|default %}{{ valeur}} {% endif %}\" placeholder=\"Rechercher par playlist\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('filtre_playlist') }}\">
                    <button type=\"submit\" class=\"btn btn-info\">Chercher</button>
                </form>
            </div>
            <div class=\"field ordered\">
                <div>Ordre par nom de playlist</div>
                <a href=\"{{ path('admin.formations.tri', {champ: 'playlist', ordre: 'DESC'}) }}\" class=\"btn btn-info btn-sm active btn-up\" role=\"button\" aria-pressed=\"true\"><</a>
                <a href=\"{{ path('admin.formations.tri', {champ: 'playlist', ordre: 'ASC'}) }}\" class=\"btn btn-info btn-sm active btn-down\" role=\"button\" aria-pressed=\"true\">></a>
            </div>
            <div class=\"field\">
                <form action=\"{{ path('admin.formations.title', {champ: 'title'}) }}\">
                    <input type=\"text\" class=\"sm\" name=\"title\" value=\"{% if valeur|default and not table|default %}{{ valeur }}{% endif %}\" placeholder=\"Rechercher par titre\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('filtre_title') }}\">
                    <button type=\"submit\" class=\"btn btn-info\">Chercher</button>
                </form>
            </div>
            <div class=\"field ordered\">
                <div>Ordre par titre </div>
                <a href=\"{{ path('admin.formations.tri', {champ: 'title', ordre: 'DESC'}) }}\" class=\"btn btn-info btn-sm active btn-up\" role=\"button\" aria-pressed=\"true\"><</a>
                <a href=\"{{ path('admin.formations.tri', {champ: 'title', ordre: 'ASC'}) }}\" class=\"btn btn-info btn-sm active btn-down\" role=\"button\" aria-pressed=\"true\">></a>
            </div>
        </div>
    </div>
    <div class=\"category-list\">
        {% for formation in formations %}
            <div class=\"category\">
                <h4>{{ formation.title }}</h4>
                <div class=\"tag-list\">
                    <b>Catégories :</b>
                    {% for category in formation.categories %}
                        <span>{{category.name}}</span>
                    {% endfor %}
                </div>
                <div class=\"description\">
                    <b>Description :</b><br/>
                    {{ formation.description|replace({'\\n': '<br>', '\\r':'<br>'})|raw }}
                </div>
                <div class=\"menu\">
                    <a href=\"{{ path('admin.formations.form', {id: formation.id})}}\" class=\"btn btn-info\">Modifier</a>
                    <a href=\"{{ path('admin.formations.remove', {id: formation.id}) }}\" class=\"btn btn-danger\" onclick=\"return confirm('Etes-vous sûr de vouloir supprimer {{ formation.title }} ?')\">Supprimer</a>
                </div>
            </div>
        {% endfor %}
    </div>
{% endblock %}", "admin/admin.formations.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/CNED1/templates/admin/admin.formations.html.twig");
    }
}
