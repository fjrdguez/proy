<?php

/* @Prueba/Default/index.html.twig */
class __TwigTemplate_b1adfa4ef586dbe62bbe66d656fd6e292f0d0627d45eb69c7fcb43989898b7ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Prueba/Default/index.html.twig", 1);
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
        $__internal_40a9d12c5cae3661cb6c59497d4f8f0f9d92c40f13a813603835adae44b68808 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40a9d12c5cae3661cb6c59497d4f8f0f9d92c40f13a813603835adae44b68808->enter($__internal_40a9d12c5cae3661cb6c59497d4f8f0f9d92c40f13a813603835adae44b68808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Prueba/Default/index.html.twig"));

        $__internal_2d66d86e49061f0223b87fe344bfa19220c761973e1cbc0c34d0b836363a06bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d66d86e49061f0223b87fe344bfa19220c761973e1cbc0c34d0b836363a06bb->enter($__internal_2d66d86e49061f0223b87fe344bfa19220c761973e1cbc0c34d0b836363a06bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Prueba/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40a9d12c5cae3661cb6c59497d4f8f0f9d92c40f13a813603835adae44b68808->leave($__internal_40a9d12c5cae3661cb6c59497d4f8f0f9d92c40f13a813603835adae44b68808_prof);

        
        $__internal_2d66d86e49061f0223b87fe344bfa19220c761973e1cbc0c34d0b836363a06bb->leave($__internal_2d66d86e49061f0223b87fe344bfa19220c761973e1cbc0c34d0b836363a06bb_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_10d9673557a6632fa949515d68f07ea99f8d846806a5414080cfde3737c3c1cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10d9673557a6632fa949515d68f07ea99f8d846806a5414080cfde3737c3c1cc->enter($__internal_10d9673557a6632fa949515d68f07ea99f8d846806a5414080cfde3737c3c1cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_caf2fe8bf008bf9dcfe1f8209d243d5bbb887978d4d3a1f96f2d4016df31e040 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caf2fe8bf008bf9dcfe1f8209d243d5bbb887978d4d3a1f96f2d4016df31e040->enter($__internal_caf2fe8bf008bf9dcfe1f8209d243d5bbb887978d4d3a1f96f2d4016df31e040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
Hello World!
";
        
        $__internal_caf2fe8bf008bf9dcfe1f8209d243d5bbb887978d4d3a1f96f2d4016df31e040->leave($__internal_caf2fe8bf008bf9dcfe1f8209d243d5bbb887978d4d3a1f96f2d4016df31e040_prof);

        
        $__internal_10d9673557a6632fa949515d68f07ea99f8d846806a5414080cfde3737c3c1cc->leave($__internal_10d9673557a6632fa949515d68f07ea99f8d846806a5414080cfde3737c3c1cc_prof);

    }

    public function getTemplateName()
    {
        return "@Prueba/Default/index.html.twig";
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

Hello World!
{% endblock %}", "@Prueba/Default/index.html.twig", "C:\\http\\php\\proy\\src\\PruebaBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
