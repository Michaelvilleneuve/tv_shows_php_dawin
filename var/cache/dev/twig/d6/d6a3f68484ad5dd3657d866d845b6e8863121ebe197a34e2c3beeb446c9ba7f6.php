<?php

/* AppBundle:Default:show.html.twig */
class __TwigTemplate_aa11fdf16a948a7ddffa3bd839e2ac2d0c41234885ef9da1fa8f451559705a74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Default:show.html.twig", 1);
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
        $__internal_94303f2ca96b00aa7f9216d81af4bfdfb3c6dd65176636fc7b182c8c668c90e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94303f2ca96b00aa7f9216d81af4bfdfb3c6dd65176636fc7b182c8c668c90e7->enter($__internal_94303f2ca96b00aa7f9216d81af4bfdfb3c6dd65176636fc7b182c8c668c90e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94303f2ca96b00aa7f9216d81af4bfdfb3c6dd65176636fc7b182c8c668c90e7->leave($__internal_94303f2ca96b00aa7f9216d81af4bfdfb3c6dd65176636fc7b182c8c668c90e7_prof);

    }

    // line 3
    public function block_menu_shows($context, array $blocks = array())
    {
        $__internal_936e89251dfae2d4811782ea3941b1b1b243234e4571deae5c232dcb1c34956e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_936e89251dfae2d4811782ea3941b1b1b243234e4571deae5c232dcb1c34956e->enter($__internal_936e89251dfae2d4811782ea3941b1b1b243234e4571deae5c232dcb1c34956e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_shows"));

        echo "active";
        
        $__internal_936e89251dfae2d4811782ea3941b1b1b243234e4571deae5c232dcb1c34956e->leave($__internal_936e89251dfae2d4811782ea3941b1b1b243234e4571deae5c232dcb1c34956e_prof);

    }

    // line 5
    public function block_contents($context, array $blocks = array())
    {
        $__internal_658c89b811b6b08369d936aa69322043e14a991e49a2820da30db540b6f0a3fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_658c89b811b6b08369d936aa69322043e14a991e49a2820da30db540b6f0a3fd->enter($__internal_658c89b811b6b08369d936aa69322043e14a991e49a2820da30db540b6f0a3fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contents"));

        // line 6
        echo "    <section>
    \t<div class=\"container\">
            <div class=\"col-xs-2\">
                <img class=\"pull-left\" style=\"width:80%;margin:15px\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->env->getExtension('Gregwar\ImageBundle\Extensions\ImageTwig')->webImage(("uploads/" . $this->getAttribute(($context["show"] ?? $this->getContext($context, "show")), "image", array()))), "resize", array(0 => 200, 1 => 300), "method"), "png", array()), "html", null, true);
        echo "\" />
            </div>
            <div class=\"col-xs-10\">
    \t\t<h3>";
        // line 12
        echo twig_escape_filter($this->env, ($context["show"] ?? $this->getContext($context, "show")), "html", null, true);
        echo "</h3>
            <hr>
                <p></p>
                ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["show"] ?? $this->getContext($context, "show")), "synopsis", array()), "html", null, true);
        echo "
                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["show"] ?? $this->getContext($context, "show")), "seasons", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["season"]) {
            // line 17
            echo "                    <h4>Saison ";
            echo twig_escape_filter($this->env, $context["season"], "html", null, true);
            echo "</h4>
                    ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["season"], "episodes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["episode"]) {
                // line 19
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["episode"], "number", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $context["episode"], "html", null, true);
                echo " - Sorti le ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["episode"], "date", array()), "d/m/y"), "html", null, true);
                echo "
                        ";
                // line 20
                if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
                    // line 21
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_delete_episode", array("id" => $this->getAttribute($context["episode"], "id", array()))), "html", null, true);
                    echo "\" class=\"alert-danger\">Supprimer</a>
                        ";
                }
                // line 23
                echo "                        <br />
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['episode'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "                    ";
            if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
                // line 26
                echo "                        <a class=\"alert-success\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_add_episode", array("id" => $this->getAttribute($context["season"], "id", array()))), "html", null, true);
                echo "\">Ajouter un épisode</a>
                    ";
            }
            // line 28
            echo "                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 29
            echo "                <div class=\"alert alert-danger\">
                    Aucune saison pour cette série
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['season'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                ";
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 34
            echo "                <p>
                    <a class=\"alert-success\" href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_add_season", array("id" => $this->getAttribute(($context["show"] ?? $this->getContext($context, "show")), "id", array()))), "html", null, true);
            echo "\">Ajouter une saison</a>
                </p>
                ";
        }
        // line 38
        echo "        </div>
    \t</div>
    </section>
";
        
        $__internal_658c89b811b6b08369d936aa69322043e14a991e49a2820da30db540b6f0a3fd->leave($__internal_658c89b811b6b08369d936aa69322043e14a991e49a2820da30db540b6f0a3fd_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 38,  141 => 35,  138 => 34,  135 => 33,  126 => 29,  121 => 28,  115 => 26,  112 => 25,  105 => 23,  99 => 21,  97 => 20,  88 => 19,  84 => 18,  79 => 17,  74 => 16,  70 => 15,  64 => 12,  58 => 9,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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
            <div class=\"col-xs-2\">
                <img class=\"pull-left\" style=\"width:80%;margin:15px\" src=\"{{ web_image('uploads/'~show.image).resize(200, 300).png }}\" />
            </div>
            <div class=\"col-xs-10\">
    \t\t<h3>{{ show }}</h3>
            <hr>
                <p></p>
                {{ show.synopsis }}
                {% for season in show.seasons %}
                    <h4>Saison {{ season }}</h4>
                    {% for episode in season.episodes %}
                        {{ episode.number }} - {{ episode }} - Sorti le {{ episode.date|date('d/m/y') }}
                        {% if app.user %}
                            <a href=\"{{ path('admin_delete_episode', {id: episode.id}) }}\" class=\"alert-danger\">Supprimer</a>
                        {% endif %}
                        <br />
                    {% endfor %}
                    {% if app.user %}
                        <a class=\"alert-success\" href=\"{{ path('admin_add_episode', {id: season.id}) }}\">Ajouter un épisode</a>
                    {% endif %}
                {% else %}
                <div class=\"alert alert-danger\">
                    Aucune saison pour cette série
                </div>
                {% endfor %}
                {% if app.user %}
                <p>
                    <a class=\"alert-success\" href=\"{{ path('admin_add_season', {id: show.id}) }}\">Ajouter une saison</a>
                </p>
                {% endif %}
        </div>
    \t</div>
    </section>
{% endblock %}
", "AppBundle:Default:show.html.twig", "/Users/michael/Documents/tvshow/src/AppBundle/Resources/views/Default/show.html.twig");
    }
}
