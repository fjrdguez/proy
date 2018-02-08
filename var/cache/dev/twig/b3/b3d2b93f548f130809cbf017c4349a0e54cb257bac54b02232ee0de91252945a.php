<?php

/* @Prueba/Eventos/all.html.twig */
class __TwigTemplate_c0fd10fd5b11bdc5bfcc4c0d7c01779b188a18a6df4537fe35401ac966363294 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Prueba/Eventos/all.html.twig", 1);
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
        $__internal_47bb3089b4d114bd052d0517fd16e68c5af01a9911e60538c292549c5d45943e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47bb3089b4d114bd052d0517fd16e68c5af01a9911e60538c292549c5d45943e->enter($__internal_47bb3089b4d114bd052d0517fd16e68c5af01a9911e60538c292549c5d45943e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Prueba/Eventos/all.html.twig"));

        $__internal_2d7253140b288238117b5cfb9c32211a89bb9bedfa08386699ad0716a9428eed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d7253140b288238117b5cfb9c32211a89bb9bedfa08386699ad0716a9428eed->enter($__internal_2d7253140b288238117b5cfb9c32211a89bb9bedfa08386699ad0716a9428eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Prueba/Eventos/all.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47bb3089b4d114bd052d0517fd16e68c5af01a9911e60538c292549c5d45943e->leave($__internal_47bb3089b4d114bd052d0517fd16e68c5af01a9911e60538c292549c5d45943e_prof);

        
        $__internal_2d7253140b288238117b5cfb9c32211a89bb9bedfa08386699ad0716a9428eed->leave($__internal_2d7253140b288238117b5cfb9c32211a89bb9bedfa08386699ad0716a9428eed_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_1786a6c18fe5e7cc19028d4bf2d5896ea279cb4ef376a50d2b70444e7fa760ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1786a6c18fe5e7cc19028d4bf2d5896ea279cb4ef376a50d2b70444e7fa760ca->enter($__internal_1786a6c18fe5e7cc19028d4bf2d5896ea279cb4ef376a50d2b70444e7fa760ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_857aa29e31402677bb1e7bfbf3028cb9fb8b0d6584916a7f633a83760fbaede8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_857aa29e31402677bb1e7bfbf3028cb9fb8b0d6584916a7f633a83760fbaede8->enter($__internal_857aa29e31402677bb1e7bfbf3028cb9fb8b0d6584916a7f633a83760fbaede8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
eventos

<ul id=\"eventos\">
";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["eventos"]) || array_key_exists("eventos", $context) ? $context["eventos"] : (function () { throw new Twig_Error_Runtime('Variable "eventos" does not exist.', 7, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["evento"]) {
            // line 8
            echo "    <li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["evento"], "nombreEvento", array()), "html", null, true);
            echo "</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
</ul>
";
        
        $__internal_857aa29e31402677bb1e7bfbf3028cb9fb8b0d6584916a7f633a83760fbaede8->leave($__internal_857aa29e31402677bb1e7bfbf3028cb9fb8b0d6584916a7f633a83760fbaede8_prof);

        
        $__internal_1786a6c18fe5e7cc19028d4bf2d5896ea279cb4ef376a50d2b70444e7fa760ca->leave($__internal_1786a6c18fe5e7cc19028d4bf2d5896ea279cb4ef376a50d2b70444e7fa760ca_prof);

    }

    public function getTemplateName()
    {
        return "@Prueba/Eventos/all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 10,  59 => 8,  55 => 7,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}

eventos

<ul id=\"eventos\">
{% for evento in eventos %}
    <li>{{evento.nombreEvento}}</li>
{% endfor %}

</ul>
{% endblock %}", "@Prueba/Eventos/all.html.twig", "C:\\http\\php\\proy\\src\\PruebaBundle\\Resources\\views\\Eventos\\all.html.twig");
    }
}
