<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_7a94e7e1f63481b0a1ac5b1938a9d10289ebec42b0acd427b7504008d212a925 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2148bf62e950b5c5c275037e0324bb300d2972be1ee6dc890a5977bbc0a4b60a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2148bf62e950b5c5c275037e0324bb300d2972be1ee6dc890a5977bbc0a4b60a->enter($__internal_2148bf62e950b5c5c275037e0324bb300d2972be1ee6dc890a5977bbc0a4b60a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2148bf62e950b5c5c275037e0324bb300d2972be1ee6dc890a5977bbc0a4b60a->leave($__internal_2148bf62e950b5c5c275037e0324bb300d2972be1ee6dc890a5977bbc0a4b60a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_699e0246381f80164a657ae41672a0f7fe6c7fd94f8483cd23e11e8979faf5e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_699e0246381f80164a657ae41672a0f7fe6c7fd94f8483cd23e11e8979faf5e5->enter($__internal_699e0246381f80164a657ae41672a0f7fe6c7fd94f8483cd23e11e8979faf5e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_699e0246381f80164a657ae41672a0f7fe6c7fd94f8483cd23e11e8979faf5e5->leave($__internal_699e0246381f80164a657ae41672a0f7fe6c7fd94f8483cd23e11e8979faf5e5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ef9ef40b9bb5e23841b8178c375ae7f3ec800ebf915dfa243a03d33380ae4564 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef9ef40b9bb5e23841b8178c375ae7f3ec800ebf915dfa243a03d33380ae4564->enter($__internal_ef9ef40b9bb5e23841b8178c375ae7f3ec800ebf915dfa243a03d33380ae4564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ef9ef40b9bb5e23841b8178c375ae7f3ec800ebf915dfa243a03d33380ae4564->leave($__internal_ef9ef40b9bb5e23841b8178c375ae7f3ec800ebf915dfa243a03d33380ae4564_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_eaa2a5bdf0fa079476dce362cccd420eff0f00c223ef7c4f72c7e1c1d935b156 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaa2a5bdf0fa079476dce362cccd420eff0f00c223ef7c4f72c7e1c1d935b156->enter($__internal_eaa2a5bdf0fa079476dce362cccd420eff0f00c223ef7c4f72c7e1c1d935b156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_eaa2a5bdf0fa079476dce362cccd420eff0f00c223ef7c4f72c7e1c1d935b156->leave($__internal_eaa2a5bdf0fa079476dce362cccd420eff0f00c223ef7c4f72c7e1c1d935b156_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/michael/Documents/tvshow/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
