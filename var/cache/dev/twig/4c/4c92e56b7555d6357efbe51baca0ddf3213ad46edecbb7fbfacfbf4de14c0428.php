<?php

/* AppBundle:Default:login.html.twig */
class __TwigTemplate_4d7a5aeb9cd1d2fbd8cd40e869d141515277ef2fa7b93edfa3b30536b52e07b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Default:login.html.twig", 1);
        $this->blocks = array(
            'contents' => array($this, 'block_contents'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4ba92eff02c3aa3ca95153b16a6194bbedf98254165deda7842a0fb5e68dfafd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ba92eff02c3aa3ca95153b16a6194bbedf98254165deda7842a0fb5e68dfafd->enter($__internal_4ba92eff02c3aa3ca95153b16a6194bbedf98254165deda7842a0fb5e68dfafd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ba92eff02c3aa3ca95153b16a6194bbedf98254165deda7842a0fb5e68dfafd->leave($__internal_4ba92eff02c3aa3ca95153b16a6194bbedf98254165deda7842a0fb5e68dfafd_prof);

    }

    // line 3
    public function block_contents($context, array $blocks = array())
    {
        $__internal_501536a9a819147a2e4e5182cdfa5ebce7ba57f128f92f52fe4f2dbce6dcaa8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_501536a9a819147a2e4e5182cdfa5ebce7ba57f128f92f52fe4f2dbce6dcaa8a->enter($__internal_501536a9a819147a2e4e5182cdfa5ebce7ba57f128f92f52fe4f2dbce6dcaa8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contents"));

        // line 4
        echo "    <section>
    \t<div class=\"container\">
    \t\t<h3>Identification</h3>
    \t\t<form class=\"form-horizontal\" method=\"post\" action=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\">
\t\t\t <div class=\"form-group\">
\t\t\t    <label for=\"inputLogin\" class=\"col-sm-2 control-label\">Identifiant</label>
\t\t\t    <div class=\"col-sm-10\">
\t\t\t      <input type=\"text\" class=\"form-control\" id=\"inputLogin\" name=\"_username\"
\t\t\t       placeholder=\"Identifiant\">
\t\t\t    </div>
\t\t\t  </div>

\t\t\t <div class=\"form-group\">
\t\t\t    <label for=\"inputPassword\" class=\"col-sm-2 control-label\">Mot de passe</label>
\t\t\t    <div class=\"col-sm-10\">
\t\t\t      <input type=\"password\" class=\"form-control\" id=\"inputPassword\" name=\"_password\"
\t\t\t       placeholder=\"Mot de passe\">
\t\t\t    </div>
\t\t\t </div>

\t\t\t <div class=\"form-group\">
\t\t\t    <label class=\"col-sm-2\"></label>
\t\t\t    <div class=\"col-sm-10\">
\t\t\t      <input type=\"submit\" value=\"Envoyer\" class=\"form-control btn btn-primary\" />
\t\t\t    </div>
\t\t\t </div>
\t\t\t</form>
    </section>
";
        
        $__internal_501536a9a819147a2e4e5182cdfa5ebce7ba57f128f92f52fe4f2dbce6dcaa8a->leave($__internal_501536a9a819147a2e4e5182cdfa5ebce7ba57f128f92f52fe4f2dbce6dcaa8a_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
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

{% block contents %}
    <section>
    \t<div class=\"container\">
    \t\t<h3>Identification</h3>
    \t\t<form class=\"form-horizontal\" method=\"post\" action=\"{{ path('login_check') }}\">
\t\t\t <div class=\"form-group\">
\t\t\t    <label for=\"inputLogin\" class=\"col-sm-2 control-label\">Identifiant</label>
\t\t\t    <div class=\"col-sm-10\">
\t\t\t      <input type=\"text\" class=\"form-control\" id=\"inputLogin\" name=\"_username\"
\t\t\t       placeholder=\"Identifiant\">
\t\t\t    </div>
\t\t\t  </div>

\t\t\t <div class=\"form-group\">
\t\t\t    <label for=\"inputPassword\" class=\"col-sm-2 control-label\">Mot de passe</label>
\t\t\t    <div class=\"col-sm-10\">
\t\t\t      <input type=\"password\" class=\"form-control\" id=\"inputPassword\" name=\"_password\"
\t\t\t       placeholder=\"Mot de passe\">
\t\t\t    </div>
\t\t\t </div>

\t\t\t <div class=\"form-group\">
\t\t\t    <label class=\"col-sm-2\"></label>
\t\t\t    <div class=\"col-sm-10\">
\t\t\t      <input type=\"submit\" value=\"Envoyer\" class=\"form-control btn btn-primary\" />
\t\t\t    </div>
\t\t\t </div>
\t\t\t</form>
    </section>
{% endblock %}", "AppBundle:Default:login.html.twig", "/Users/michael/Documents/tvshow/src/AppBundle/Resources/views/Default/login.html.twig");
    }
}
