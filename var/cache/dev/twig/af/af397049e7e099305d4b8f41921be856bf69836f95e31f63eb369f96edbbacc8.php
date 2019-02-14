<?php

/* default/index.html.twig */
class __TwigTemplate_fe8b9454d66be5d658c51feabb46177a861034150283c06a0272096a8189a82a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome to my_quizz!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "

<div class=\"container text-center\" style=\"margin-top: 30px\">
\t";
        // line 9
        if ((isset($context["welcome"]) || array_key_exists("welcome", $context) ? $context["welcome"] : (function () { throw new Twig_Error_Runtime('Variable "welcome" does not exist.', 9, $this->source); })())) {
            // line 10
            echo "\t    <h1>My Quizz</h1>
\t    ";
            // line 11
            if ( !(isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new Twig_Error_Runtime('Variable "session" does not exist.', 11, $this->source); })())) {
                // line 12
                echo "\t    \t<p>Welcome to My Quizz! Wanna test your knowledge?</p>
\t    ";
            } else {
                // line 14
                echo "\t    \t<p>Welcome back ";
                echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new Twig_Error_Runtime('Variable "username" does not exist.', 14, $this->source); })()), "html", null, true);
                echo " ! Good to see you again :)</p>
\t    ";
            }
            // line 16
            echo "\t";
        } else {
            // line 17
            echo "\t\t<h1>Quizzes</h1>
\t";
        }
        // line 19
        echo "
    <table class=\"table table-striped table-bordered\">
    \t<tbody>
    \t\t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new Twig_Error_Runtime('Variable "categories" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["cat"]) {
            // line 23
            echo "\t\t\t    <tr><td>
\t\t\t    \t<a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quizz", array("id" => (            // line 25
$context["key"] + 1), "question" => 1)), "html", null, true);
            // line 27
            echo "\">
\t\t\t    \t\t";
            // line 28
            echo twig_escape_filter($this->env, $context["cat"], "html", null, true);
            echo "
\t\t\t    \t</a>
\t\t\t    </td></tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    \t</tbody>
\t</table>
</ul>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 32,  119 => 28,  116 => 27,  114 => 25,  113 => 24,  110 => 23,  106 => 22,  101 => 19,  97 => 17,  94 => 16,  88 => 14,  84 => 12,  82 => 11,  79 => 10,  77 => 9,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Welcome to my_quizz!{% endblock %}

{% block body %}


<div class=\"container text-center\" style=\"margin-top: 30px\">
\t{% if welcome %}
\t    <h1>My Quizz</h1>
\t    {% if not session %}
\t    \t<p>Welcome to My Quizz! Wanna test your knowledge?</p>
\t    {% else %}
\t    \t<p>Welcome back {{ username }} ! Good to see you again :)</p>
\t    {% endif %}
\t{% else %}
\t\t<h1>Quizzes</h1>
\t{% endif %}

    <table class=\"table table-striped table-bordered\">
    \t<tbody>
    \t\t{% for key,cat in categories %}
\t\t\t    <tr><td>
\t\t\t    \t<a href=\"{{ path('quizz', {
\t\t\t    \t\t'id' : key + 1,
\t\t\t    \t\t'question': 1
\t\t\t    \t}) }}\">
\t\t\t    \t\t{{ cat }}
\t\t\t    \t</a>
\t\t\t    </td></tr>
\t\t\t{% endfor %}
    \t</tbody>
\t</table>
</ul>
</div>
{% endblock %}
", "default/index.html.twig", "/var/www/html/w2web150p4/my_quizz/templates/default/index.html.twig");
    }
}
