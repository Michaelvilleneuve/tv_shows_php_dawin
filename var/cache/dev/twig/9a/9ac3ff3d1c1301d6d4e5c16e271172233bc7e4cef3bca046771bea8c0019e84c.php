<?php

/* AppBundle::layout.html.twig */
class __TwigTemplate_f6c86406252232e7cd63ae6ba7f1a1beff5d169a991bd51d938b4650612e461c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'menu_shows' => array($this, 'block_menu_shows'),
            'menu_calendar' => array($this, 'block_menu_calendar'),
            'contents' => array($this, 'block_contents'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5c6142fb7825320cfcb8e17512017ead6b9c972e331e03e34bb440885cff1ec4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c6142fb7825320cfcb8e17512017ead6b9c972e331e03e34bb440885cff1ec4->enter($__internal_5c6142fb7825320cfcb8e17512017ead6b9c972e331e03e34bb440885cff1ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
        <title>TVShows</title>
\t\t<link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
\t\t<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/freelancer.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <script type=\"text/javascript\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jq.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/freelancer.min.js"), "html", null, true);
        echo "\"></script>
\t</head>
\t<body>
\t\t    <!-- Navigation -->
    <nav id=\"mainNav\" class=\"navbar navbar-default navbar-fixed-top navbar-custom\">
        <div class=\"container\">

            <div class=\"navbar-header page-scroll\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span> Menu <i class=\"fa fa-bars\"></i>
                </button>
                <a class=\"navbar-brand\" href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">TVShows</a>
            </div>


            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav navbar-left\">
                    <li class=\"hidden\">
                        <a href=\"#page-top\"></a>
                    </li>
                    <li class=\"";
        // line 31
        $this->displayBlock('menu_shows', $context, $blocks);
        echo "\">
                        <a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("shows");
        echo "\">Les séries</a>
                    </li>
                    <li class=\"";
        // line 34
        $this->displayBlock('menu_calendar', $context, $blocks);
        echo "\">
                        <a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("calendar");
        echo "\">Calendrier</a>
                    </li>
                </ul>

                <ul class=\"nav navbar-nav navbar-right\">
                    <li>
                        <form action=\"#\" method=\"post\">
                        <div class=\"input-group\">
                            <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-search\"></span></span>
                            <input class=\"form-control\" />
                        </div>
                        </form>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

\t";
        // line 55
        $this->displayBlock('contents', $context, $blocks);
        // line 56
        echo "
    <footer>
        <div class=\"container text-center\">
        ";
        // line 59
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 60
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Déconnexion admin</a>
                -
                <a href=\"";
            // line 62
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_omdb");
            echo "\">Import OMDB</a>
        ";
        } else {
            // line 64
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\">Connexion admin</a>
        ";
        }
        // line 66
        echo "        </div>
    </footer>
\t</body>
</html>
";
        
        $__internal_5c6142fb7825320cfcb8e17512017ead6b9c972e331e03e34bb440885cff1ec4->leave($__internal_5c6142fb7825320cfcb8e17512017ead6b9c972e331e03e34bb440885cff1ec4_prof);

    }

    // line 31
    public function block_menu_shows($context, array $blocks = array())
    {
        $__internal_20234055633c263b825e599464d123a7c9def312f06fd1deccc4f0b50a6fe859 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20234055633c263b825e599464d123a7c9def312f06fd1deccc4f0b50a6fe859->enter($__internal_20234055633c263b825e599464d123a7c9def312f06fd1deccc4f0b50a6fe859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_shows"));

        
        $__internal_20234055633c263b825e599464d123a7c9def312f06fd1deccc4f0b50a6fe859->leave($__internal_20234055633c263b825e599464d123a7c9def312f06fd1deccc4f0b50a6fe859_prof);

    }

    // line 34
    public function block_menu_calendar($context, array $blocks = array())
    {
        $__internal_27f32387c8c46217457af10f5be2c51e2aaa38518a9056508acb312bb0db603b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27f32387c8c46217457af10f5be2c51e2aaa38518a9056508acb312bb0db603b->enter($__internal_27f32387c8c46217457af10f5be2c51e2aaa38518a9056508acb312bb0db603b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_calendar"));

        
        $__internal_27f32387c8c46217457af10f5be2c51e2aaa38518a9056508acb312bb0db603b->leave($__internal_27f32387c8c46217457af10f5be2c51e2aaa38518a9056508acb312bb0db603b_prof);

    }

    // line 55
    public function block_contents($context, array $blocks = array())
    {
        $__internal_f5ecfc0ab4979619ea43b5a73bbb6f8f6a8ee24dc8d985d1ca33c1fb692d3766 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5ecfc0ab4979619ea43b5a73bbb6f8f6a8ee24dc8d985d1ca33c1fb692d3766->enter($__internal_f5ecfc0ab4979619ea43b5a73bbb6f8f6a8ee24dc8d985d1ca33c1fb692d3766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contents"));

        
        $__internal_f5ecfc0ab4979619ea43b5a73bbb6f8f6a8ee24dc8d985d1ca33c1fb692d3766->leave($__internal_f5ecfc0ab4979619ea43b5a73bbb6f8f6a8ee24dc8d985d1ca33c1fb692d3766_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 55,  162 => 34,  151 => 31,  140 => 66,  134 => 64,  129 => 62,  123 => 60,  121 => 59,  116 => 56,  114 => 55,  91 => 35,  87 => 34,  82 => 32,  78 => 31,  65 => 21,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
\t<head>
        <title>TVShows</title>
\t\t<link href=\"{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\" />
\t\t<link href=\"{{ asset('css/freelancer.min.css') }}\" rel=\"stylesheet\" />
        <script type=\"text/javascript\" src=\"{{ asset('js/jquery.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('js/jq.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('vendor/bootstrap/js/bootstrap.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('js/freelancer.min.js') }}\"></script>
\t</head>
\t<body>
\t\t    <!-- Navigation -->
    <nav id=\"mainNav\" class=\"navbar navbar-default navbar-fixed-top navbar-custom\">
        <div class=\"container\">

            <div class=\"navbar-header page-scroll\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span> Menu <i class=\"fa fa-bars\"></i>
                </button>
                <a class=\"navbar-brand\" href=\"{{ path('homepage') }}\">TVShows</a>
            </div>


            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav navbar-left\">
                    <li class=\"hidden\">
                        <a href=\"#page-top\"></a>
                    </li>
                    <li class=\"{% block menu_shows %}{% endblock %}\">
                        <a href=\"{{ path('shows') }}\">Les séries</a>
                    </li>
                    <li class=\"{% block menu_calendar %}{% endblock %}\">
                        <a href=\"{{ path('calendar') }}\">Calendrier</a>
                    </li>
                </ul>

                <ul class=\"nav navbar-nav navbar-right\">
                    <li>
                        <form action=\"#\" method=\"post\">
                        <div class=\"input-group\">
                            <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-search\"></span></span>
                            <input class=\"form-control\" />
                        </div>
                        </form>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

\t{% block contents %}{% endblock %}

    <footer>
        <div class=\"container text-center\">
        {% if app.user %}
                <a href=\"{{ path('logout') }}\">Déconnexion admin</a>
                -
                <a href=\"{{ path('admin_omdb') }}\">Import OMDB</a>
        {% else %}
                <a href=\"{{ path('login') }}\">Connexion admin</a>
        {% endif %}
        </div>
    </footer>
\t</body>
</html>
", "AppBundle::layout.html.twig", "/Users/michael/Documents/tvshow/src/AppBundle/Resources/views/layout.html.twig");
    }
}
