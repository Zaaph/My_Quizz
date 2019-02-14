<?php

/* base.html.twig */
class __TwigTemplate_c56bfb5535de570b619612eafce0d994f7731339db6330a7225b93b3aedb5e57 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "    </head>
    <body>
    \t<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
\t\t  <a class=\"navbar-brand\" href=\"/\" >My Quizz</a>
\t\t  <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t    <ul class=\"navbar-nav mr-auto\">
\t\t      \t<li class=\"nav-item\">
\t\t      \t\t";
        // line 16
        if (((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 16, $this->source); })()) > 0)) {
            // line 17
            echo "\t\t        \t\t<a class=\"nav-link\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", array("id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 17, $this->source); })()))), "html", null, true);
            echo "\" style=\"margin-top: 10px;\">Profile</a>
\t\t      \t\t}
\t\t      \t\t";
        }
        // line 20
        echo "\t\t      \t</li>
\t\t      \t";
        // line 21
        if ( !(isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new Twig_Error_Runtime('Variable "session" does not exist.', 21, $this->source); })())) {
            // line 22
            echo "\t\t    \t<li class=\"nav-item\">
\t\t    \t\t<a class=\"nav-link\" href=\"";
            // line 23
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\" style=\"margin-top: 10px;\">Register</a>
\t\t    \t</li>
\t\t    \t";
        }
        // line 26
        echo "\t\t    </ul>
\t\t    ";
        // line 27
        if ( !(isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new Twig_Error_Runtime('Variable "session" does not exist.', 27, $this->source); })())) {
            // line 28
            echo "\t\t    <ul class=\"navbar-nav\">
\t\t\t    <li class=\"nav-item\">
\t\t\t    \t<p class=\"navbar-text text-light\" style=\"margin-top: 10px;\">Already registered?</p>
\t\t\t    </li>
\t\t\t    <li class=\"nav-item\">
\t\t\t    \t<a href=\"";
            // line 33
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\" class=\"nav-link\" style=\"margin-top: 10px;\">Log in</a>
\t\t\t    </li>
\t\t\t</ul>
\t\t\t";
        } else {
            // line 37
            echo "\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"btn btn-outline-danger my-2 my-sm-0\" href=\"";
            // line 39
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\" style=\"margin-left: 10px\">Log out</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t";
        }
        // line 43
        echo "\t\t  </div>
\t\t</nav>
\t\t<div class=\"container\">
        \t";
        // line 46
        $this->displayBlock('body', $context, $blocks);
        // line 47
        echo "    \t</div>
        ";
        // line 48
        $this->displayBlock('javascripts', $context, $blocks);
        // line 49
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        \t<link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" rel=\"stylesheet\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 48,  169 => 46,  158 => 7,  149 => 6,  131 => 5,  119 => 49,  117 => 48,  114 => 47,  112 => 46,  107 => 43,  100 => 39,  96 => 37,  89 => 33,  82 => 28,  80 => 27,  77 => 26,  71 => 23,  68 => 22,  66 => 21,  63 => 20,  56 => 17,  54 => 16,  45 => 9,  43 => 6,  39 => 5,  33 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
        \t<link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" rel=\"stylesheet\">
        {% endblock %}
    </head>
    <body>
    \t<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
\t\t  <a class=\"navbar-brand\" href=\"/\" >My Quizz</a>
\t\t  <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t    <ul class=\"navbar-nav mr-auto\">
\t\t      \t<li class=\"nav-item\">
\t\t      \t\t{% if id > 0 %}
\t\t        \t\t<a class=\"nav-link\" href=\"{{ path('user_show', {'id': id}) }}\" style=\"margin-top: 10px;\">Profile</a>
\t\t      \t\t}
\t\t      \t\t{% endif %}
\t\t      \t</li>
\t\t      \t{% if not session %}
\t\t    \t<li class=\"nav-item\">
\t\t    \t\t<a class=\"nav-link\" href=\"{{ path('register') }}\" style=\"margin-top: 10px;\">Register</a>
\t\t    \t</li>
\t\t    \t{% endif %}
\t\t    </ul>
\t\t    {% if not session %}
\t\t    <ul class=\"navbar-nav\">
\t\t\t    <li class=\"nav-item\">
\t\t\t    \t<p class=\"navbar-text text-light\" style=\"margin-top: 10px;\">Already registered?</p>
\t\t\t    </li>
\t\t\t    <li class=\"nav-item\">
\t\t\t    \t<a href=\"{{ path('login') }}\" class=\"nav-link\" style=\"margin-top: 10px;\">Log in</a>
\t\t\t    </li>
\t\t\t</ul>
\t\t\t{% else %}
\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"btn btn-outline-danger my-2 my-sm-0\" href=\"{{ path('logout') }}\" style=\"margin-left: 10px\">Log out</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t{% endif %}
\t\t  </div>
\t\t</nav>
\t\t<div class=\"container\">
        \t{% block body %}{% endblock %}
    \t</div>
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/w2web150p4/my_quizz/templates/base.html.twig");
    }
}
