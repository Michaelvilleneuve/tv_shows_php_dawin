<?php

/* AppBundle:Default:index.html.twig */
class __TwigTemplate_61efbb070c96eddb98d3b368185808edeb9f0b85f8fdb6f252cc1d55e4e8b967 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'menu_home' => array($this, 'block_menu_home'),
            'contents' => array($this, 'block_contents'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c0b302c4a4fa3918fcffdc215605b0dca8173f5f060936f63209f99cb8c6dbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c0b302c4a4fa3918fcffdc215605b0dca8173f5f060936f63209f99cb8c6dbe->enter($__internal_8c0b302c4a4fa3918fcffdc215605b0dca8173f5f060936f63209f99cb8c6dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c0b302c4a4fa3918fcffdc215605b0dca8173f5f060936f63209f99cb8c6dbe->leave($__internal_8c0b302c4a4fa3918fcffdc215605b0dca8173f5f060936f63209f99cb8c6dbe_prof);

    }

    // line 3
    public function block_menu_home($context, array $blocks = array())
    {
        $__internal_031801ba8bf60ade88e2999905123e9fc9e85b96072fcfa71c8a900f9ac95211 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_031801ba8bf60ade88e2999905123e9fc9e85b96072fcfa71c8a900f9ac95211->enter($__internal_031801ba8bf60ade88e2999905123e9fc9e85b96072fcfa71c8a900f9ac95211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_home"));

        echo "active";
        
        $__internal_031801ba8bf60ade88e2999905123e9fc9e85b96072fcfa71c8a900f9ac95211->leave($__internal_031801ba8bf60ade88e2999905123e9fc9e85b96072fcfa71c8a900f9ac95211_prof);

    }

    // line 5
    public function block_contents($context, array $blocks = array())
    {
        $__internal_4873bd074fc978764ab4466bf255d3730b75e1b67ed4fefbe38ea422e04f688a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4873bd074fc978764ab4466bf255d3730b75e1b67ed4fefbe38ea422e04f688a->enter($__internal_4873bd074fc978764ab4466bf255d3730b75e1b67ed4fefbe38ea422e04f688a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contents"));

        // line 6
        echo "    <header>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <img class=\"img-responsive\" src=\"img/tv.png\" alt=\"\">
                    <div class=\"intro-text\">
                        <span class=\"name\">Ne manquez plus rien</span>
                        <hr class=\"star-light\">
                        <span class=\"skills\">
                        \tVotre programme des sorties de séries
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </header>
";
        
        $__internal_4873bd074fc978764ab4466bf255d3730b75e1b67ed4fefbe38ea422e04f688a->leave($__internal_4873bd074fc978764ab4466bf255d3730b75e1b67ed4fefbe38ea422e04f688a_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block menu_home %}active{% endblock %}

{% block contents %}
    <header>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <img class=\"img-responsive\" src=\"img/tv.png\" alt=\"\">
                    <div class=\"intro-text\">
                        <span class=\"name\">Ne manquez plus rien</span>
                        <hr class=\"star-light\">
                        <span class=\"skills\">
                        \tVotre programme des sorties de séries
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </header>
{% endblock %}", "AppBundle:Default:index.html.twig", "/Users/michael/Documents/tvshow/src/AppBundle/Resources/views/Default/index.html.twig");
    }
}
