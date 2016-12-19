<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a058a707c69e41fd4848e44042ba9f3e610ac03f69d9d44e9980c7d8bbc261a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_748f79a9dacf27fcad51a6850c01acb0eb9ae9c374c9f08f51a1b045b55a8a39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_748f79a9dacf27fcad51a6850c01acb0eb9ae9c374c9f08f51a1b045b55a8a39->enter($__internal_748f79a9dacf27fcad51a6850c01acb0eb9ae9c374c9f08f51a1b045b55a8a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_748f79a9dacf27fcad51a6850c01acb0eb9ae9c374c9f08f51a1b045b55a8a39->leave($__internal_748f79a9dacf27fcad51a6850c01acb0eb9ae9c374c9f08f51a1b045b55a8a39_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9a89925ca63785979c489f3e9817f14c6faa93dc6c3a6423bbac223c4aa61fd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a89925ca63785979c489f3e9817f14c6faa93dc6c3a6423bbac223c4aa61fd7->enter($__internal_9a89925ca63785979c489f3e9817f14c6faa93dc6c3a6423bbac223c4aa61fd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_9a89925ca63785979c489f3e9817f14c6faa93dc6c3a6423bbac223c4aa61fd7->leave($__internal_9a89925ca63785979c489f3e9817f14c6faa93dc6c3a6423bbac223c4aa61fd7_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_10b7080d5228328e1cebd92c7a1efe86df7d273ff4c0152acbdad83e390180a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10b7080d5228328e1cebd92c7a1efe86df7d273ff4c0152acbdad83e390180a8->enter($__internal_10b7080d5228328e1cebd92c7a1efe86df7d273ff4c0152acbdad83e390180a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_10b7080d5228328e1cebd92c7a1efe86df7d273ff4c0152acbdad83e390180a8->leave($__internal_10b7080d5228328e1cebd92c7a1efe86df7d273ff4c0152acbdad83e390180a8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_75d40943d31614e8a51f7e2c4ee5db977ff136c79d3db4235811fbef7ed55d08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75d40943d31614e8a51f7e2c4ee5db977ff136c79d3db4235811fbef7ed55d08->enter($__internal_75d40943d31614e8a51f7e2c4ee5db977ff136c79d3db4235811fbef7ed55d08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_75d40943d31614e8a51f7e2c4ee5db977ff136c79d3db4235811fbef7ed55d08->leave($__internal_75d40943d31614e8a51f7e2c4ee5db977ff136c79d3db4235811fbef7ed55d08_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/michael/Documents/tvshow/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
