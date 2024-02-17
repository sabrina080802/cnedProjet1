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

/* admin/admin.category.html.twig */
class __TwigTemplate_a42a53bb5bd2d655be7ad3ce46cd9086 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin.category.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin.category.html.twig"));

        $this->parent = $this->loadTemplate("baseadmin.html.twig", "admin/admin.category.html.twig", 1);
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
        <div class=\"sort-by\">
            <form class=\"field\" method=\"POST\" action=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.add.category");
        echo "\">
                <input type=\"text\" class=\"sm\" name=\"name\" placeholder=\"Nom de la catégorie\">
                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("filtre_name"), "html", null, true);
        echo "\">
                <button type =\"submit\" >Ajouter une catégorie</button>
            </form>
            ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "session", [], "any", false, false, false, 11), "flashbag", [], "any", false, false, false, 11), "get", ["error"], "method", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["flashError"]) {
            // line 12
            echo "                <div class=\"alert alert-danger\">
                    ";
            // line 13
            echo twig_escape_filter($this->env, $context["flashError"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashError'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
            <div class=\"field ordered\">
                <div>Trier par nom</div>
                <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.categories.sort", ["champ" => "name", "ordre" => "ASC"]), "html", null, true);
        echo "\" class=\"btn btn-info btn-sm active btn-up\" role=\"button\" aria-pressed=\"true\"><</a>
                <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.categories.sort", ["champ" => "name", "ordre" => "DESC"]), "html", null, true);
        echo "\" class=\"btn btn-info btn-sm active btn-down\" role=\"button\" aria-pressed=\"true\">></a>
            </div>
        </div>
    </div>
    <div class=\"category-list\">
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 26
            echo "            <div class=\"category\">
                <h4>
                    ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "name", [], "any", false, false, false, 28), "html", null, true);
            echo "
                </h4>
                <div class=\"text-left category-max-h\">
                    ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["categorie"], "formations", [], "any", false, false, false, 31));
            foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
                // line 32
                echo "                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "title", [], "any", false, false, false, 32), "html", null, true);
                echo "<br />
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                </div>
                <div class=\"btn-delete\">
                    ";
            // line 36
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "formations", [], "any", false, false, false, 36)) == 0)) {
                // line 37
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.delete.category", ["id" => twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 37)]), "html", null, true);
                echo "\" class=\"btn btn-danger\" onclick=\"return confirm('Etes-vous sûr de vouloir supprimer ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "name", [], "any", false, false, false, 37), "html", null, true);
                echo " ?')\">Supprimer</a>
                    ";
            } else {
                // line 39
                echo "                        <button class=\"btn btn-danger\" onclick=\"alert('Vous ne pouvez pas supprimer votre catégories car elle est liée à une ou plusieurs formations.')\">Supprimer</button>
                    ";
            }
            // line 41
            echo "                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
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
        return "admin/admin.category.html.twig";
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
        return array (  169 => 44,  161 => 41,  157 => 39,  149 => 37,  147 => 36,  143 => 34,  134 => 32,  130 => 31,  124 => 28,  120 => 26,  116 => 25,  108 => 20,  104 => 19,  99 => 16,  90 => 13,  87 => 12,  83 => 11,  77 => 8,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"baseadmin.html.twig\" %}

{% block body %}
    <div class=\"data-menu\">
        <div class=\"sort-by\">
            <form class=\"field\" method=\"POST\" action=\"{{ path('admin.add.category') }}\">
                <input type=\"text\" class=\"sm\" name=\"name\" placeholder=\"Nom de la catégorie\">
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('filtre_name') }}\">
                <button type =\"submit\" >Ajouter une catégorie</button>
            </form>
            {% for flashError in app.session.flashbag.get('error') %}
                <div class=\"alert alert-danger\">
                    {{ flashError }}
                </div>
            {% endfor %}

            <div class=\"field ordered\">
                <div>Trier par nom</div>
                <a href=\"{{ path('admin.categories.sort', {champ:'name', ordre:'ASC'}) }}\" class=\"btn btn-info btn-sm active btn-up\" role=\"button\" aria-pressed=\"true\"><</a>
                <a href=\"{{ path('admin.categories.sort', {champ:'name', ordre:'DESC'})}}\" class=\"btn btn-info btn-sm active btn-down\" role=\"button\" aria-pressed=\"true\">></a>
            </div>
        </div>
    </div>
    <div class=\"category-list\">
        {% for categorie in categories %}
            <div class=\"category\">
                <h4>
                    {{ categorie.name }}
                </h4>
                <div class=\"text-left category-max-h\">
                    {% for formation in categorie.formations %}
                        {{ formation.title }}<br />
                    {% endfor %}
                </div>
                <div class=\"btn-delete\">
                    {% if categorie.formations|length == 0 %}
                        <a href=\"{{ path('admin.delete.category', {id:categorie.id}) }}\" class=\"btn btn-danger\" onclick=\"return confirm('Etes-vous sûr de vouloir supprimer {{ categorie.name }} ?')\">Supprimer</a>
                    {% else %}
                        <button class=\"btn btn-danger\" onclick=\"alert('Vous ne pouvez pas supprimer votre catégories car elle est liée à une ou plusieurs formations.')\">Supprimer</button>
                    {% endif %}
                </div>
            </div>
        {% endfor %}
    </div>
{% endblock %}", "admin/admin.category.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/CNED1/templates/admin/admin.category.html.twig");
    }
}
