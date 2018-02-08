<?php

/* equipo/edit.html.twig */
class __TwigTemplate_30c9c3b4d9e4b99ff3e90245f0759544ef6f9754d191119769ace81e5de8d4d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "equipo/edit.html.twig", 1);
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
        $__internal_da2213fde27ec94bbf5e973aaf3747224e253b7c2a82167b4ae5da1dbc38e41a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da2213fde27ec94bbf5e973aaf3747224e253b7c2a82167b4ae5da1dbc38e41a->enter($__internal_da2213fde27ec94bbf5e973aaf3747224e253b7c2a82167b4ae5da1dbc38e41a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "equipo/edit.html.twig"));

        $__internal_0364a11367c836d176049dcbaa963a3a9d7a0ec8cf37738ff84f2c0d065778c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0364a11367c836d176049dcbaa963a3a9d7a0ec8cf37738ff84f2c0d065778c4->enter($__internal_0364a11367c836d176049dcbaa963a3a9d7a0ec8cf37738ff84f2c0d065778c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "equipo/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da2213fde27ec94bbf5e973aaf3747224e253b7c2a82167b4ae5da1dbc38e41a->leave($__internal_da2213fde27ec94bbf5e973aaf3747224e253b7c2a82167b4ae5da1dbc38e41a_prof);

        
        $__internal_0364a11367c836d176049dcbaa963a3a9d7a0ec8cf37738ff84f2c0d065778c4->leave($__internal_0364a11367c836d176049dcbaa963a3a9d7a0ec8cf37738ff84f2c0d065778c4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_02d19420a1fdd0975d8472b940d821eb71110d84c1d2c3da500bc90e8a7c921d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02d19420a1fdd0975d8472b940d821eb71110d84c1d2c3da500bc90e8a7c921d->enter($__internal_02d19420a1fdd0975d8472b940d821eb71110d84c1d2c3da500bc90e8a7c921d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1ca09e3d945bdbbc64369e5c18d431588a7104b2a7bd06232e5807c5f57e7630 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ca09e3d945bdbbc64369e5c18d431588a7104b2a7bd06232e5807c5f57e7630->enter($__internal_1ca09e3d945bdbbc64369e5c18d431588a7104b2a7bd06232e5807c5f57e7630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Equipo edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 6, $this->getSourceContext()); })()), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 7, $this->getSourceContext()); })()), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 9, $this->getSourceContext()); })()), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("equipo_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 16, $this->getSourceContext()); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 18, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_1ca09e3d945bdbbc64369e5c18d431588a7104b2a7bd06232e5807c5f57e7630->leave($__internal_1ca09e3d945bdbbc64369e5c18d431588a7104b2a7bd06232e5807c5f57e7630_prof);

        
        $__internal_02d19420a1fdd0975d8472b940d821eb71110d84c1d2c3da500bc90e8a7c921d->leave($__internal_02d19420a1fdd0975d8472b940d821eb71110d84c1d2c3da500bc90e8a7c921d_prof);

    }

    public function getTemplateName()
    {
        return "equipo/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Equipo edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('equipo_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "equipo/edit.html.twig", "C:\\http\\php\\proy\\app\\Resources\\views\\equipo\\edit.html.twig");
    }
}
