<?php

/* @Prueba/Alumnos/index.html.twig */
class __TwigTemplate_59808f247ce7d7fa02f1ab0265b801af5b602cb8e8b78567a97f42e32a36d9b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Prueba/Alumnos/index.html.twig", 1);
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
        $__internal_80182f22559cb4a464673e7e5f9c9fddd71b05a272f8ff5e7289b883ecb369be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80182f22559cb4a464673e7e5f9c9fddd71b05a272f8ff5e7289b883ecb369be->enter($__internal_80182f22559cb4a464673e7e5f9c9fddd71b05a272f8ff5e7289b883ecb369be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Prueba/Alumnos/index.html.twig"));

        $__internal_af0e22aa304b2e55c81257f3e9f813e46af877768ac74d684ef2ad82b1c2898f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af0e22aa304b2e55c81257f3e9f813e46af877768ac74d684ef2ad82b1c2898f->enter($__internal_af0e22aa304b2e55c81257f3e9f813e46af877768ac74d684ef2ad82b1c2898f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Prueba/Alumnos/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80182f22559cb4a464673e7e5f9c9fddd71b05a272f8ff5e7289b883ecb369be->leave($__internal_80182f22559cb4a464673e7e5f9c9fddd71b05a272f8ff5e7289b883ecb369be_prof);

        
        $__internal_af0e22aa304b2e55c81257f3e9f813e46af877768ac74d684ef2ad82b1c2898f->leave($__internal_af0e22aa304b2e55c81257f3e9f813e46af877768ac74d684ef2ad82b1c2898f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_d07b36311ab88f9b669b68482f16c8464c4e1d08a3746da19e65d124513dd549 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d07b36311ab88f9b669b68482f16c8464c4e1d08a3746da19e65d124513dd549->enter($__internal_d07b36311ab88f9b669b68482f16c8464c4e1d08a3746da19e65d124513dd549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_84b026d1755543880a27851f01aaf70a3f83e5b6d062a65ed5c745ca8b89a827 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84b026d1755543880a27851f01aaf70a3f83e5b6d062a65ed5c745ca8b89a827->enter($__internal_84b026d1755543880a27851f01aaf70a3f83e5b6d062a65ed5c745ca8b89a827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
Alumnos

<ul id=\"eventos\">


</ul>
";
        
        $__internal_84b026d1755543880a27851f01aaf70a3f83e5b6d062a65ed5c745ca8b89a827->leave($__internal_84b026d1755543880a27851f01aaf70a3f83e5b6d062a65ed5c745ca8b89a827_prof);

        
        $__internal_d07b36311ab88f9b669b68482f16c8464c4e1d08a3746da19e65d124513dd549->leave($__internal_d07b36311ab88f9b669b68482f16c8464c4e1d08a3746da19e65d124513dd549_prof);

    }

    public function getTemplateName()
    {
        return "@Prueba/Alumnos/index.html.twig";
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

Alumnos

<ul id=\"eventos\">


</ul>
{% endblock %}", "@Prueba/Alumnos/index.html.twig", "C:\\http\\php\\proy\\src\\PruebaBundle\\Resources\\views\\Alumnos\\index.html.twig");
    }
}
