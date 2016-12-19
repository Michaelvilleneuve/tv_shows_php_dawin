<?php

/* AppBundle:Default:shows.html.twig */
class __TwigTemplate_79617ccc07973d865ffe45f849ead866073a44aadf8ac1910cca93ef7b6fca98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Default:shows.html.twig", 1);
        $this->blocks = array(
            'menu_shows' => array($this, 'block_menu_shows'),
            'contents' => array($this, 'block_contents'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aa8c8151895a63ac21235586e67f44ce5da9ea6ba5a50232e44394bc9148f4c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa8c8151895a63ac21235586e67f44ce5da9ea6ba5a50232e44394bc9148f4c4->enter($__internal_aa8c8151895a63ac21235586e67f44ce5da9ea6ba5a50232e44394bc9148f4c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:shows.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa8c8151895a63ac21235586e67f44ce5da9ea6ba5a50232e44394bc9148f4c4->leave($__internal_aa8c8151895a63ac21235586e67f44ce5da9ea6ba5a50232e44394bc9148f4c4_prof);

    }

    // line 3
    public function block_menu_shows($context, array $blocks = array())
    {
        $__internal_51d46ff7afd698e332db402ef3652254189fc2b057aad7d51863f0de291847af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51d46ff7afd698e332db402ef3652254189fc2b057aad7d51863f0de291847af->enter($__internal_51d46ff7afd698e332db402ef3652254189fc2b057aad7d51863f0de291847af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_shows"));

        echo "active";
        
        $__internal_51d46ff7afd698e332db402ef3652254189fc2b057aad7d51863f0de291847af->leave($__internal_51d46ff7afd698e332db402ef3652254189fc2b057aad7d51863f0de291847af_prof);

    }

    // line 5
    public function block_contents($context, array $blocks = array())
    {
        $__internal_b434abc58512ebe4306e3a5777d8922a9b30e1fa021380d7cc555c172e70f487 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b434abc58512ebe4306e3a5777d8922a9b30e1fa021380d7cc555c172e70f487->enter($__internal_b434abc58512ebe4306e3a5777d8922a9b30e1fa021380d7cc555c172e70f487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contents"));

        // line 6
        echo "    <section>
    \t<div class=\"container\">
    \t\t<h3>Liste des séries</h3>
            <div class=\"row\">
    \t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["shows"] ?? $this->getContext($context, "shows")));
        foreach ($context['_seq'] as $context["_key"] => $context["show"]) {
            // line 11
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show", array("id" => $this->getAttribute($context["show"], "id", array()))), "html", null, true);
            echo "\" class=\"tvshow col-sm-6\">
                <img class=\"pull-left\" src=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->env->getExtension('Gregwar\ImageBundle\Extensions\ImageTwig')->webImage(("uploads/" . $this->getAttribute($context["show"], "image", array()))), "resize", array(0 => 100, 1 => 100), "method"), "png", array()), "html", null, true);
            echo "\" />
                <h4>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["show"], "name", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["show"], "seasons", array())), "html", null, true);
            echo " saisons)</h4>
                ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["show"], "synopsis", array()), "html", null, true);
            echo "
            </a>
    \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['show'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "            </div>

    \t\t";
        // line 19
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 20
            echo "    \t\t\t<a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_add_show");
            echo "\">Ajouter une série</a>
    \t\t";
        }
        // line 22
        echo "    \t</div>
    </section>
";
        
        $__internal_b434abc58512ebe4306e3a5777d8922a9b30e1fa021380d7cc555c172e70f487->leave($__internal_b434abc58512ebe4306e3a5777d8922a9b30e1fa021380d7cc555c172e70f487_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default:shows.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 22,  93 => 20,  91 => 19,  87 => 17,  78 => 14,  72 => 13,  68 => 12,  63 => 11,  59 => 10,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AppBundle::layout.html.twig' %}

{% block menu_shows %}active{% endblock %}

{% block contents %}
    <section>
    \t<div class=\"container\">
    \t\t<h3>Liste des séries</h3>
            <div class=\"row\">
    \t\t{% for show in shows %}
            <a href=\"{{ path('show', {id: show.id}) }}\" class=\"tvshow col-sm-6\">
                <img class=\"pull-left\" src=\"{{ web_image('uploads/'~show.image).resize(100, 100).png }}\" />
                <h4>{{ show.name }} ({{ show.seasons|length }} saisons)</h4>
                {{ show.synopsis }}
            </a>
    \t\t{% endfor %}
            </div>

    \t\t{% if app.user %}
    \t\t\t<a href=\"{{ path('admin_add_show') }}\">Ajouter une série</a>
    \t\t{% endif %}
    \t</div>
    </section>
{% endblock %}", "AppBundle:Default:shows.html.twig", "/Users/michael/Documents/tvshow/src/AppBundle/Resources/views/Default/shows.html.twig");
    }
}
