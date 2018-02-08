<?php

/* @Prueba/Default/redireccion.html.twig */
class __TwigTemplate_236933f3aa5b345ee05b8150b93e157fc64c4f89905a67bc75adeaba267c2dbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Prueba/Default/redireccion.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2eee5427d52550b5159f0caea4e8a3700c61bff87ab68b6525c04c11878801ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2eee5427d52550b5159f0caea4e8a3700c61bff87ab68b6525c04c11878801ae->enter($__internal_2eee5427d52550b5159f0caea4e8a3700c61bff87ab68b6525c04c11878801ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Prueba/Default/redireccion.html.twig"));

        $__internal_1084a0c0c382459b859adb2bb8e18f4773205aa763698a69fc9cb998c8d6757c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1084a0c0c382459b859adb2bb8e18f4773205aa763698a69fc9cb998c8d6757c->enter($__internal_1084a0c0c382459b859adb2bb8e18f4773205aa763698a69fc9cb998c8d6757c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Prueba/Default/redireccion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2eee5427d52550b5159f0caea4e8a3700c61bff87ab68b6525c04c11878801ae->leave($__internal_2eee5427d52550b5159f0caea4e8a3700c61bff87ab68b6525c04c11878801ae_prof);

        
        $__internal_1084a0c0c382459b859adb2bb8e18f4773205aa763698a69fc9cb998c8d6757c->leave($__internal_1084a0c0c382459b859adb2bb8e18f4773205aa763698a69fc9cb998c8d6757c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_69463263c8e3180369562591d0ff08e83f089c96dbb7a344ecc430e6b25128a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69463263c8e3180369562591d0ff08e83f089c96dbb7a344ecc430e6b25128a5->enter($__internal_69463263c8e3180369562591d0ff08e83f089c96dbb7a344ecc430e6b25128a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1f74deb185a07bcf5b26443f460550eb4099ade0fcb650c8593dbafa72666949 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f74deb185a07bcf5b26443f460550eb4099ade0fcb650c8593dbafa72666949->enter($__internal_1f74deb185a07bcf5b26443f460550eb4099ade0fcb650c8593dbafa72666949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "prueba <br>
<a href=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("prueba_homepage");
        echo "\">Inicio</a>
";
        
        $__internal_1f74deb185a07bcf5b26443f460550eb4099ade0fcb650c8593dbafa72666949->leave($__internal_1f74deb185a07bcf5b26443f460550eb4099ade0fcb650c8593dbafa72666949_prof);

        
        $__internal_69463263c8e3180369562591d0ff08e83f089c96dbb7a344ecc430e6b25128a5->leave($__internal_69463263c8e3180369562591d0ff08e83f089c96dbb7a344ecc430e6b25128a5_prof);

    }

    public function getTemplateName()
    {
        return "@Prueba/Default/redireccion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 4,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
prueba <br>
<a href=\"{{ path('prueba_homepage')}}\">Inicio</a>
{% endblock %}", "@Prueba/Default/redireccion.html.twig", "C:\\http\\php\\proy\\src\\PruebaBundle\\Resources\\views\\Default\\redireccion.html.twig");
    }
}
