<?php

/* entrenador/edit.html.twig */
class __TwigTemplate_2e9be0b7dd7ed404a891091dafc8a863b8dcc447a3ee58cd7cc28343ee0c5f4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "entrenador/edit.html.twig", 1);
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
        $__internal_5cf41236e314a41295300dcd35c4a9728ac8bd19057df7e9444deda3aea70b0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cf41236e314a41295300dcd35c4a9728ac8bd19057df7e9444deda3aea70b0d->enter($__internal_5cf41236e314a41295300dcd35c4a9728ac8bd19057df7e9444deda3aea70b0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "entrenador/edit.html.twig"));

        $__internal_b491fb50d392630b1b085561c369910d12404128670e14607542d2669c616be2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b491fb50d392630b1b085561c369910d12404128670e14607542d2669c616be2->enter($__internal_b491fb50d392630b1b085561c369910d12404128670e14607542d2669c616be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "entrenador/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cf41236e314a41295300dcd35c4a9728ac8bd19057df7e9444deda3aea70b0d->leave($__internal_5cf41236e314a41295300dcd35c4a9728ac8bd19057df7e9444deda3aea70b0d_prof);

        
        $__internal_b491fb50d392630b1b085561c369910d12404128670e14607542d2669c616be2->leave($__internal_b491fb50d392630b1b085561c369910d12404128670e14607542d2669c616be2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e692274fbd315279cd5c17a018090a0305b10cff995ae00f1e07ccae1bce3230 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e692274fbd315279cd5c17a018090a0305b10cff995ae00f1e07ccae1bce3230->enter($__internal_e692274fbd315279cd5c17a018090a0305b10cff995ae00f1e07ccae1bce3230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_105aa7d6df01de8d5bb6a2a53d9a436de7e301231abb0b28e2268f9affb4930f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_105aa7d6df01de8d5bb6a2a53d9a436de7e301231abb0b28e2268f9affb4930f->enter($__internal_105aa7d6df01de8d5bb6a2a53d9a436de7e301231abb0b28e2268f9affb4930f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Entrenador edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("entrenador_index");
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
        
        $__internal_105aa7d6df01de8d5bb6a2a53d9a436de7e301231abb0b28e2268f9affb4930f->leave($__internal_105aa7d6df01de8d5bb6a2a53d9a436de7e301231abb0b28e2268f9affb4930f_prof);

        
        $__internal_e692274fbd315279cd5c17a018090a0305b10cff995ae00f1e07ccae1bce3230->leave($__internal_e692274fbd315279cd5c17a018090a0305b10cff995ae00f1e07ccae1bce3230_prof);

    }

    public function getTemplateName()
    {
        return "entrenador/edit.html.twig";
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
    <h1>Entrenador edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('entrenador_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "entrenador/edit.html.twig", "C:\\http\\php\\proy\\app\\Resources\\views\\entrenador\\edit.html.twig");
    }
}
