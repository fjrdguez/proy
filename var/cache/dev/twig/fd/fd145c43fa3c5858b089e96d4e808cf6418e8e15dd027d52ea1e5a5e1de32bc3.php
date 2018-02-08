<?php

/* equipo/new.html.twig */
class __TwigTemplate_97ecdf346a6d49ee81771815b5fc9a06db7a1c5d5e4abe07922e85e68c0dd307 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "equipo/new.html.twig", 1);
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
        $__internal_bb969f0a14195d0ee4e46701f389750268755e45098b740456db54bc8deec5ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb969f0a14195d0ee4e46701f389750268755e45098b740456db54bc8deec5ef->enter($__internal_bb969f0a14195d0ee4e46701f389750268755e45098b740456db54bc8deec5ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "equipo/new.html.twig"));

        $__internal_753c1901b32c39eed553566dbffefe5f754f7e4a1db2c9c4eb629d0a3e28d940 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_753c1901b32c39eed553566dbffefe5f754f7e4a1db2c9c4eb629d0a3e28d940->enter($__internal_753c1901b32c39eed553566dbffefe5f754f7e4a1db2c9c4eb629d0a3e28d940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "equipo/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb969f0a14195d0ee4e46701f389750268755e45098b740456db54bc8deec5ef->leave($__internal_bb969f0a14195d0ee4e46701f389750268755e45098b740456db54bc8deec5ef_prof);

        
        $__internal_753c1901b32c39eed553566dbffefe5f754f7e4a1db2c9c4eb629d0a3e28d940->leave($__internal_753c1901b32c39eed553566dbffefe5f754f7e4a1db2c9c4eb629d0a3e28d940_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3a0187d6f52d1b4cb91bbad8b784ed042a51b12ebbba063bd26536e9bf9c2f46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a0187d6f52d1b4cb91bbad8b784ed042a51b12ebbba063bd26536e9bf9c2f46->enter($__internal_3a0187d6f52d1b4cb91bbad8b784ed042a51b12ebbba063bd26536e9bf9c2f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_afb010ae0d3eff958b12e69548a7abea6e5836c661c0d3d9cc59fc56e30f68df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afb010ae0d3eff958b12e69548a7abea6e5836c661c0d3d9cc59fc56e30f68df->enter($__internal_afb010ae0d3eff958b12e69548a7abea6e5836c661c0d3d9cc59fc56e30f68df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Equipo creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("equipo_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_afb010ae0d3eff958b12e69548a7abea6e5836c661c0d3d9cc59fc56e30f68df->leave($__internal_afb010ae0d3eff958b12e69548a7abea6e5836c661c0d3d9cc59fc56e30f68df_prof);

        
        $__internal_3a0187d6f52d1b4cb91bbad8b784ed042a51b12ebbba063bd26536e9bf9c2f46->leave($__internal_3a0187d6f52d1b4cb91bbad8b784ed042a51b12ebbba063bd26536e9bf9c2f46_prof);

    }

    public function getTemplateName()
    {
        return "equipo/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Equipo creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('equipo_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "equipo/new.html.twig", "C:\\http\\php\\proy\\app\\Resources\\views\\equipo\\new.html.twig");
    }
}
