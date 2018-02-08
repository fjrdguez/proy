<?php

/* entrenador/new.html.twig */
class __TwigTemplate_3be97599c9735415c16ec26296de8878ec1307479ba35c7e34c0ce5420e65e68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "entrenador/new.html.twig", 1);
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
        $__internal_9dfca52ea27697d3ac821979afa01d0bfffd0a12d5917da5c043143625bcdba6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dfca52ea27697d3ac821979afa01d0bfffd0a12d5917da5c043143625bcdba6->enter($__internal_9dfca52ea27697d3ac821979afa01d0bfffd0a12d5917da5c043143625bcdba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "entrenador/new.html.twig"));

        $__internal_2fb789a3dc14bc2bef0c52a37f633e8faef997fdae31868add13f0d2fd44c5d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fb789a3dc14bc2bef0c52a37f633e8faef997fdae31868add13f0d2fd44c5d6->enter($__internal_2fb789a3dc14bc2bef0c52a37f633e8faef997fdae31868add13f0d2fd44c5d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "entrenador/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9dfca52ea27697d3ac821979afa01d0bfffd0a12d5917da5c043143625bcdba6->leave($__internal_9dfca52ea27697d3ac821979afa01d0bfffd0a12d5917da5c043143625bcdba6_prof);

        
        $__internal_2fb789a3dc14bc2bef0c52a37f633e8faef997fdae31868add13f0d2fd44c5d6->leave($__internal_2fb789a3dc14bc2bef0c52a37f633e8faef997fdae31868add13f0d2fd44c5d6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d90f19bc2899137c24c97dc09701661518f7b671b7134a70e0343fcebb4355a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d90f19bc2899137c24c97dc09701661518f7b671b7134a70e0343fcebb4355a->enter($__internal_4d90f19bc2899137c24c97dc09701661518f7b671b7134a70e0343fcebb4355a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cc872ff0bb938f061865ffc1ad2db43996b1ab8ca6f31294e7a8b8ca84fc6d3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc872ff0bb938f061865ffc1ad2db43996b1ab8ca6f31294e7a8b8ca84fc6d3a->enter($__internal_cc872ff0bb938f061865ffc1ad2db43996b1ab8ca6f31294e7a8b8ca84fc6d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Entrenador creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("entrenador_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_cc872ff0bb938f061865ffc1ad2db43996b1ab8ca6f31294e7a8b8ca84fc6d3a->leave($__internal_cc872ff0bb938f061865ffc1ad2db43996b1ab8ca6f31294e7a8b8ca84fc6d3a_prof);

        
        $__internal_4d90f19bc2899137c24c97dc09701661518f7b671b7134a70e0343fcebb4355a->leave($__internal_4d90f19bc2899137c24c97dc09701661518f7b671b7134a70e0343fcebb4355a_prof);

    }

    public function getTemplateName()
    {
        return "entrenador/new.html.twig";
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
    <h1>Entrenador creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('entrenador_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "entrenador/new.html.twig", "C:\\http\\php\\proy\\app\\Resources\\views\\entrenador\\new.html.twig");
    }
}
