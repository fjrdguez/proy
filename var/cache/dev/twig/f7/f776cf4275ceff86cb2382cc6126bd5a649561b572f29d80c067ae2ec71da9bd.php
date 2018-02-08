<?php

/* @Prueba/Default/contactarVlc.html.twig */
class __TwigTemplate_998c7860fa2692c325562678988a6f3b9f91ac7c2b2e84c1e08da8d6d960f2c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Prueba/Default/contactarVlc.html.twig", 1);
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
        $__internal_79b04bbbe68d729e3f5fced729c85633d890451380f92388181b92a3571ace06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79b04bbbe68d729e3f5fced729c85633d890451380f92388181b92a3571ace06->enter($__internal_79b04bbbe68d729e3f5fced729c85633d890451380f92388181b92a3571ace06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Prueba/Default/contactarVlc.html.twig"));

        $__internal_149df86e2814124305e45b522d838c94e62cf2ecdf04b00691f6002b39bdc48b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_149df86e2814124305e45b522d838c94e62cf2ecdf04b00691f6002b39bdc48b->enter($__internal_149df86e2814124305e45b522d838c94e62cf2ecdf04b00691f6002b39bdc48b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Prueba/Default/contactarVlc.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79b04bbbe68d729e3f5fced729c85633d890451380f92388181b92a3571ace06->leave($__internal_79b04bbbe68d729e3f5fced729c85633d890451380f92388181b92a3571ace06_prof);

        
        $__internal_149df86e2814124305e45b522d838c94e62cf2ecdf04b00691f6002b39bdc48b->leave($__internal_149df86e2814124305e45b522d838c94e62cf2ecdf04b00691f6002b39bdc48b_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f2da0f9775ea811cd63bd60ba5a13ba125f10c3bd24b482d67c85d1736513f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f2da0f9775ea811cd63bd60ba5a13ba125f10c3bd24b482d67c85d1736513f4->enter($__internal_1f2da0f9775ea811cd63bd60ba5a13ba125f10c3bd24b482d67c85d1736513f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fe94aab19d1343b3579e70432be56ad9045402e9b9c4e099c46ba6ee3b98930d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe94aab19d1343b3579e70432be56ad9045402e9b9c4e099c46ba6ee3b98930d->enter($__internal_fe94aab19d1343b3579e70432be56ad9045402e9b9c4e099c46ba6ee3b98930d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "Estás contactando con Valencia
";
        
        $__internal_fe94aab19d1343b3579e70432be56ad9045402e9b9c4e099c46ba6ee3b98930d->leave($__internal_fe94aab19d1343b3579e70432be56ad9045402e9b9c4e099c46ba6ee3b98930d_prof);

        
        $__internal_1f2da0f9775ea811cd63bd60ba5a13ba125f10c3bd24b482d67c85d1736513f4->leave($__internal_1f2da0f9775ea811cd63bd60ba5a13ba125f10c3bd24b482d67c85d1736513f4_prof);

    }

    public function getTemplateName()
    {
        return "@Prueba/Default/contactarVlc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
Estás contactando con Valencia
{% endblock %}", "@Prueba/Default/contactarVlc.html.twig", "C:\\http\\php\\proy\\src\\PruebaBundle\\Resources\\views\\Default\\contactarVlc.html.twig");
    }
}
