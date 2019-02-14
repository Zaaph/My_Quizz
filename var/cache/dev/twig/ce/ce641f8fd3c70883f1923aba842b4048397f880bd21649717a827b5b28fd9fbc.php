<?php

/* quizz/quizz.html.twig */
class __TwigTemplate_1065a618d9e624ed9e67326bbe3b5bd0d225b8a8c6c394d802bb48eef51fcc40 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "quizz/quizz.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "quizz/quizz.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "quizz/quizz.html.twig"));

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

        echo "Quizz ";
        echo twig_escape_filter($this->env, (isset($context["quizzname"]) || array_key_exists("quizzname", $context) ? $context["quizzname"] : (function () { throw new Twig_Error_Runtime('Variable "quizzname" does not exist.', 3, $this->source); })()), "html", null, true);
        echo " - MyQuizz";
        
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
        echo "\t<div class=\"container\" style=\"margin-top: 30px\">
\t\t<h2>Quizz ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["quizzname"]) || array_key_exists("quizzname", $context) ? $context["quizzname"] : (function () { throw new Twig_Error_Runtime('Variable "quizzname" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "</h2>
\t\t<h4 style=\"margin-top: 15px; border-bottom: solid grey 1px;\">Question n° ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["question_number"]) || array_key_exists("question_number", $context) ? $context["question_number"] : (function () { throw new Twig_Error_Runtime('Variable "question_number" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "</h4>
\t\t<h6>";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["question_text"]) || array_key_exists("question_text", $context) ? $context["question_text"] : (function () { throw new Twig_Error_Runtime('Variable "question_text" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "</h6>
\t\t<div class=\"row\">
\t\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["answers"]) || array_key_exists("answers", $context) ? $context["answers"] : (function () { throw new Twig_Error_Runtime('Variable "answers" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["ans"]) {
            // line 12
            echo "\t\t\t\t<div class=\"radio col-sm-3\">
\t\t\t\t\t <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quizz", array("id" =>             // line 14
(isset($context["cat_id"]) || array_key_exists("cat_id", $context) ? $context["cat_id"] : (function () { throw new Twig_Error_Runtime('Variable "cat_id" does not exist.', 14, $this->source); })()), "question" => (            // line 15
(isset($context["question_number"]) || array_key_exists("question_number", $context) ? $context["question_number"] : (function () { throw new Twig_Error_Runtime('Variable "question_number" does not exist.', 15, $this->source); })()) + 1), "r" => twig_get_attribute($this->env, $this->source,             // line 16
$context["ans"], "expected", array()))), "html", null, true);
            // line 17
            echo "\">
\t\t\t\t\t \t";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ans"], "reponse", array()), "html", null, true);
            echo "
\t\t\t\t\t </a>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['ans'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "\t\t</div>

\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "quizz/quizz.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 22,  105 => 18,  102 => 17,  100 => 16,  99 => 15,  98 => 14,  97 => 13,  94 => 12,  90 => 11,  85 => 9,  81 => 8,  77 => 7,  74 => 6,  65 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Quizz {{ quizzname }} - MyQuizz{% endblock %}

{% block body %}
\t<div class=\"container\" style=\"margin-top: 30px\">
\t\t<h2>Quizz {{ quizzname }}</h2>
\t\t<h4 style=\"margin-top: 15px; border-bottom: solid grey 1px;\">Question n° {{ question_number }}</h4>
\t\t<h6>{{ question_text }}</h6>
\t\t<div class=\"row\">
\t\t\t{% for key,ans in answers %}
\t\t\t\t<div class=\"radio col-sm-3\">
\t\t\t\t\t <a href=\"{{ path('quizz', {
\t\t\t\t\t \t'id': cat_id,
\t\t\t\t\t \t'question': question_number + 1,
\t\t\t\t\t \t'r': ans.expected
\t\t\t\t\t}) }}\">
\t\t\t\t\t \t{{ ans.reponse }}
\t\t\t\t\t </a>
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>

\t</div>
{% endblock %}", "quizz/quizz.html.twig", "/var/www/html/w2web150p4/my_quizz/templates/quizz/quizz.html.twig");
    }
}
