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
                <div>Catégories : </div>
                <form method=\"POST\" action=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.playlists.findallcontain", ["champ" => "id", "table" => "categories"]), "html", null, true);
        echo "\">
                    <select class=\"form-select form-select-sm\" name=\"recherche\" id=\"recherche\" onchange=\"this.form.submit()\">
                        <option value=\"\"></option>
                        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 19
            echo "                            <option
                                ";
            // line 20
            if ((((array_key_exists("valeur", $context)) ? (_twig_default_filter((isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 20, $this->source); })()))) : ("")) && ((isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new RuntimeError('Variable "valeur" does not exist.', 20, $this->source); })()) == twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 20)))) {
                echo " 
                                    selected
                                ";
            }
            // line 22
            echo " 
                                value=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 23), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "name", [], "any", false, false, false, 23), "html", null, true);
            echo "
                            </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                    </select>
                </form>
            </div>
            <div class=\"field\">
                <div>Trier par titre :</div>
                <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.playlists.tri", ["champ" => "name", "ordre" => "DESC"]), "html", null, true);
        echo "\" class=\"btn btn-info btn-sm active  btn-up\" role=\"button\" aria-pressed=\"true\"><</a>
                <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.playlists.tri", ["champ" => "name", "ordre" => "ASC"]), "html", null, true);
        echo "\" class=\"btn btn-info btn-sm active  btn-up\" role=\"button\" aria-pressed=\"true\">></a>
            </div>
        </div>
    </div>
    <div class=\"category-list\">
        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["playlists"]) || array_key_exists("playlists", $context) ? $context["playlists"] : (function () { throw new RuntimeError('Variable "playlists" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["playlist"]) {
            // line 38
            echo "            <div class=\"category\">
                <h4>
                    ";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["playlist"], "name", [], "any", false, false, false, 40), "html", null, true);
            echo "
                </h4>
                <div class=\"text-left category-max-h\">
                    ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["playlist"], "formations", [], "any", false, false, false, 43));
            foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
                // line 44
                echo "                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "title", [], "any", false, false, false, 44), "html", null, true);
                echo "<br />
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "                </div>
                <div class=\"menu\">
                    <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.playlists.form", ["id" => twig_get_attribute($this->env, $this->source, $context["playlist"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\" class=\"btn btn-info\">Modifier</a>
                    ";
            // line 49
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["playlist"], "formations", [], "any", false, false, false, 49)) == 0)) {
                // line 50
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.playlists.remove", ["id" => twig_get_attribute($this->env, $this->source, $context["playlist"], "id", [], "any", false, false, false, 50)]), "html", null, true);
                echo "\" class=\"btn btn-danger\" onclick=\"return confirm('Etes-vous sûr de vouloir supprimer ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["playlist"], "name", [], "any", false, false, false, 50), "html", null, true);
                echo " ?')\">Supprimer</a>
                    ";
            } else {
                // line 52
                echo "                        <button class=\"btn btn-danger\" onclick=\"alert('Vous ne pouvez pas supprimer votre playlist car elle est liée à une ou plusieurs formations.')\">Supprimer</button>
                    ";
            }
            // line 54
            echo "                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['playlist'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
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
        return array (  205 => 57,  197 => 54,  193 => 52,  185 => 50,  183 => 49,  179 => 48,  175 => 46,  166 => 44,  162 => 43,  156 => 40,  152 => 38,  148 => 37,  140 => 32,  136 => 31,  129 => 26,  118 => 23,  115 => 22,  109 => 20,  106 => 19,  102 => 18,  96 => 15,  87 => 9,  81 => 8,  77 => 7,  71 => 4,  68 => 3,  58 => 2,  35 => 1,);
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
                <div>Catégories : </div>
                <form method=\"POST\" action=\"{{ path('admin.playlists.findallcontain', {champ:'id', table:'categories'}) }}\">
                    <select class=\"form-select form-select-sm\" name=\"recherche\" id=\"recherche\" onchange=\"this.form.submit()\">
                        <option value=\"\"></option>
                        {% for categorie in categories %}
                            <option
                                {% if valeur|default and valeur==categorie.id %} 
                                    selected
                                {% endif %} 
                                value=\"{{ categorie.id }}\">{{ categorie.name }}
                            </option>
                        {% endfor %}
                    </select>
                </form>
            </div>
            <div class=\"field\">
                <div>Trier par titre :</div>
                <a href=\"{{ path('admin.playlists.tri', {champ: 'name', ordre: 'DESC'}) }}\" class=\"btn btn-info btn-sm active  btn-up\" role=\"button\" aria-pressed=\"true\"><</a>
                <a href=\"{{ path('admin.playlists.tri', {champ: 'name', ordre: 'ASC'}) }}\" class=\"btn btn-info btn-sm active  btn-up\" role=\"button\" aria-pressed=\"true\">></a>
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
                <div class=\"menu\">
                    <a href=\"{{ path('admin.playlists.form', {id: playlist.id})}}\" class=\"btn btn-info\">Modifier</a>
                    {% if playlist.formations|length == 0 %}
                        <a href=\"{{ path('admin.playlists.remove', {id: playlist.id}) }}\" class=\"btn btn-danger\" onclick=\"return confirm('Etes-vous sûr de vouloir supprimer {{ playlist.name }} ?')\">Supprimer</a>
                    {% else %}
                        <button class=\"btn btn-danger\" onclick=\"alert('Vous ne pouvez pas supprimer votre playlist car elle est liée à une ou plusieurs formations.')\">Supprimer</button>
                    {% endif %}
                </div>
            </div>
        {% endfor %}
    </div>
{% endblock %}
", "admin/admin.playlists.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/CNED1/templates/admin/admin.playlists.html.twig");
    }
}
