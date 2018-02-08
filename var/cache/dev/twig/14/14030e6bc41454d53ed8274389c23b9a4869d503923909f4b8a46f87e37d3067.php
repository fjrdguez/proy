<?php

/* base.html.twig */
class __TwigTemplate_2678591f62af89d90ab7dddb52c900318afd55d1486fda13fd22b00f25ce66ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

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
        $__internal_f7465952c2dfeaa075e14cc4cd111d6e96066f51ff94b4e2b642786650af25cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7465952c2dfeaa075e14cc4cd111d6e96066f51ff94b4e2b642786650af25cc->enter($__internal_f7465952c2dfeaa075e14cc4cd111d6e96066f51ff94b4e2b642786650af25cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_156035dc68c02c4a707e1719aef9df2548c083b0e700d16aa98f6ac59f86574f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_156035dc68c02c4a707e1719aef9df2548c083b0e700d16aa98f6ac59f86574f->enter($__internal_156035dc68c02c4a707e1719aef9df2548c083b0e700d16aa98f6ac59f86574f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
    
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "    </body>
</html>
";
        
        $__internal_f7465952c2dfeaa075e14cc4cd111d6e96066f51ff94b4e2b642786650af25cc->leave($__internal_f7465952c2dfeaa075e14cc4cd111d6e96066f51ff94b4e2b642786650af25cc_prof);

        
        $__internal_156035dc68c02c4a707e1719aef9df2548c083b0e700d16aa98f6ac59f86574f->leave($__internal_156035dc68c02c4a707e1719aef9df2548c083b0e700d16aa98f6ac59f86574f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_710069af419d2e0306d5c1722000849b2e37522ee90a66b9d00c75a77f433c9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_710069af419d2e0306d5c1722000849b2e37522ee90a66b9d00c75a77f433c9d->enter($__internal_710069af419d2e0306d5c1722000849b2e37522ee90a66b9d00c75a77f433c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7644ad4b76dd0b87840ea48a5b016a57c115db9bad1c1f424bfbac3eae1879ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7644ad4b76dd0b87840ea48a5b016a57c115db9bad1c1f424bfbac3eae1879ca->enter($__internal_7644ad4b76dd0b87840ea48a5b016a57c115db9bad1c1f424bfbac3eae1879ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7644ad4b76dd0b87840ea48a5b016a57c115db9bad1c1f424bfbac3eae1879ca->leave($__internal_7644ad4b76dd0b87840ea48a5b016a57c115db9bad1c1f424bfbac3eae1879ca_prof);

        
        $__internal_710069af419d2e0306d5c1722000849b2e37522ee90a66b9d00c75a77f433c9d->leave($__internal_710069af419d2e0306d5c1722000849b2e37522ee90a66b9d00c75a77f433c9d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_24a08157a900725163e2737a2ec409b17f4eee62ce8201eb3d87312f98b1133b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24a08157a900725163e2737a2ec409b17f4eee62ce8201eb3d87312f98b1133b->enter($__internal_24a08157a900725163e2737a2ec409b17f4eee62ce8201eb3d87312f98b1133b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8aedf300a92d0f3560bc422acf56980cc26f2872ff44af67ffcbda82ee089486 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aedf300a92d0f3560bc422acf56980cc26f2872ff44af67ffcbda82ee089486->enter($__internal_8aedf300a92d0f3560bc422acf56980cc26f2872ff44af67ffcbda82ee089486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/estilos.css"), "html", null, true);
        echo " \" rel=\"stylesheet\">
        ";
        
        $__internal_8aedf300a92d0f3560bc422acf56980cc26f2872ff44af67ffcbda82ee089486->leave($__internal_8aedf300a92d0f3560bc422acf56980cc26f2872ff44af67ffcbda82ee089486_prof);

        
        $__internal_24a08157a900725163e2737a2ec409b17f4eee62ce8201eb3d87312f98b1133b->leave($__internal_24a08157a900725163e2737a2ec409b17f4eee62ce8201eb3d87312f98b1133b_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_20b9e60481678c9c16d2ad73b9131f19217a042b954f2c36c94b265d8c1e0550 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20b9e60481678c9c16d2ad73b9131f19217a042b954f2c36c94b265d8c1e0550->enter($__internal_20b9e60481678c9c16d2ad73b9131f19217a042b954f2c36c94b265d8c1e0550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_677c28611f68a29650e91c4dedfc810e3daa9363b2821adb327c7011c8378abc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_677c28611f68a29650e91c4dedfc810e3daa9363b2821adb327c7011c8378abc->enter($__internal_677c28611f68a29650e91c4dedfc810e3daa9363b2821adb327c7011c8378abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_677c28611f68a29650e91c4dedfc810e3daa9363b2821adb327c7011c8378abc->leave($__internal_677c28611f68a29650e91c4dedfc810e3daa9363b2821adb327c7011c8378abc_prof);

        
        $__internal_20b9e60481678c9c16d2ad73b9131f19217a042b954f2c36c94b265d8c1e0550->leave($__internal_20b9e60481678c9c16d2ad73b9131f19217a042b954f2c36c94b265d8c1e0550_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0b5d13ddc52c1e29da295bbae97f3fff2cf80a429d7223d84ff157ced8a5c8c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b5d13ddc52c1e29da295bbae97f3fff2cf80a429d7223d84ff157ced8a5c8c9->enter($__internal_0b5d13ddc52c1e29da295bbae97f3fff2cf80a429d7223d84ff157ced8a5c8c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2df68fa33a4de02c294701490ffb72bb5f9a34dd0cef9c2dede6712a041f751a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2df68fa33a4de02c294701490ffb72bb5f9a34dd0cef9c2dede6712a041f751a->enter($__internal_2df68fa33a4de02c294701490ffb72bb5f9a34dd0cef9c2dede6712a041f751a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2df68fa33a4de02c294701490ffb72bb5f9a34dd0cef9c2dede6712a041f751a->leave($__internal_2df68fa33a4de02c294701490ffb72bb5f9a34dd0cef9c2dede6712a041f751a_prof);

        
        $__internal_0b5d13ddc52c1e29da295bbae97f3fff2cf80a429d7223d84ff157ced8a5c8c9->leave($__internal_0b5d13ddc52c1e29da295bbae97f3fff2cf80a429d7223d84ff157ced8a5c8c9_prof);

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
        return array (  123 => 14,  106 => 13,  93 => 7,  84 => 6,  66 => 5,  54 => 15,  51 => 14,  49 => 13,  41 => 9,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
        <link href=\"{{ asset('css/estilos.css')}} \" rel=\"stylesheet\">
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
    
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\http\\php\\proy\\app\\Resources\\views\\base.html.twig");
    }
}
