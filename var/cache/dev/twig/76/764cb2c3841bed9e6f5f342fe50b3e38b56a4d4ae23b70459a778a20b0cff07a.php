<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8e31b25d8ce508d2def65712595830f68af9efad999bb2daa6275d9f97044885 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_881dcb791eb803076da3565b5d35c33df07f600300d20f77f57c24378e087ad1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_881dcb791eb803076da3565b5d35c33df07f600300d20f77f57c24378e087ad1->enter($__internal_881dcb791eb803076da3565b5d35c33df07f600300d20f77f57c24378e087ad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_881dcb791eb803076da3565b5d35c33df07f600300d20f77f57c24378e087ad1->leave($__internal_881dcb791eb803076da3565b5d35c33df07f600300d20f77f57c24378e087ad1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ca2ee4e5b5fad09c57f3e9cd0140ff64c14b9e1d7b6a920a24b6dfdea55aaf91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca2ee4e5b5fad09c57f3e9cd0140ff64c14b9e1d7b6a920a24b6dfdea55aaf91->enter($__internal_ca2ee4e5b5fad09c57f3e9cd0140ff64c14b9e1d7b6a920a24b6dfdea55aaf91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ca2ee4e5b5fad09c57f3e9cd0140ff64c14b9e1d7b6a920a24b6dfdea55aaf91->leave($__internal_ca2ee4e5b5fad09c57f3e9cd0140ff64c14b9e1d7b6a920a24b6dfdea55aaf91_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f46c9f10309bc2d1987a559fee2dc742e79102b6150607b23f5af1859aa397e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f46c9f10309bc2d1987a559fee2dc742e79102b6150607b23f5af1859aa397e5->enter($__internal_f46c9f10309bc2d1987a559fee2dc742e79102b6150607b23f5af1859aa397e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f46c9f10309bc2d1987a559fee2dc742e79102b6150607b23f5af1859aa397e5->leave($__internal_f46c9f10309bc2d1987a559fee2dc742e79102b6150607b23f5af1859aa397e5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5737934e509421395572e5d3e5edcb12c1cd5b8ecffce3b387c1a85ca6bc62af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5737934e509421395572e5d3e5edcb12c1cd5b8ecffce3b387c1a85ca6bc62af->enter($__internal_5737934e509421395572e5d3e5edcb12c1cd5b8ecffce3b387c1a85ca6bc62af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_5737934e509421395572e5d3e5edcb12c1cd5b8ecffce3b387c1a85ca6bc62af->leave($__internal_5737934e509421395572e5d3e5edcb12c1cd5b8ecffce3b387c1a85ca6bc62af_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/michael/Documents/tvshow/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
