<?php

/* @Prueba/Alumnos/list.html.twig */
class __TwigTemplate_7758e1166f5e700623ecbdd03568bc348c28e486cf24aceb77ad95f15359cb82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Prueba/Alumnos/list.html.twig", 1);
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
        $__internal_3155bf2d860d40e6c89d407b208eff3e05d4dab74fea3512d9ab7d4481059895 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3155bf2d860d40e6c89d407b208eff3e05d4dab74fea3512d9ab7d4481059895->enter($__internal_3155bf2d860d40e6c89d407b208eff3e05d4dab74fea3512d9ab7d4481059895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Prueba/Alumnos/list.html.twig"));

        $__internal_8bdca261fd6985be063f54f9c67c03d805d87133842aab0d3df33c53e19c627c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bdca261fd6985be063f54f9c67c03d805d87133842aab0d3df33c53e19c627c->enter($__internal_8bdca261fd6985be063f54f9c67c03d805d87133842aab0d3df33c53e19c627c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Prueba/Alumnos/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3155bf2d860d40e6c89d407b208eff3e05d4dab74fea3512d9ab7d4481059895->leave($__internal_3155bf2d860d40e6c89d407b208eff3e05d4dab74fea3512d9ab7d4481059895_prof);

        
        $__internal_8bdca261fd6985be063f54f9c67c03d805d87133842aab0d3df33c53e19c627c->leave($__internal_8bdca261fd6985be063f54f9c67c03d805d87133842aab0d3df33c53e19c627c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_16c7bf0fd11b1da1ce29d36d931a8f3f67003aacaca6b07f72937d4c5198c889 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16c7bf0fd11b1da1ce29d36d931a8f3f67003aacaca6b07f72937d4c5198c889->enter($__internal_16c7bf0fd11b1da1ce29d36d931a8f3f67003aacaca6b07f72937d4c5198c889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ff4255161a4ef7cd33fea321b712d1f87c697ccf75fc955cf46438078a2e1534 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff4255161a4ef7cd33fea321b712d1f87c697ccf75fc955cf46438078a2e1534->enter($__internal_ff4255161a4ef7cd33fea321b712d1f87c697ccf75fc955cf46438078a2e1534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
alumnos

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
        
        $__internal_ff4255161a4ef7cd33fea321b712d1f87c697ccf75fc955cf46438078a2e1534->leave($__internal_ff4255161a4ef7cd33fea321b712d1f87c697ccf75fc955cf46438078a2e1534_prof);

        
        $__internal_16c7bf0fd11b1da1ce29d36d931a8f3f67003aacaca6b07f72937d4c5198c889->leave($__internal_16c7bf0fd11b1da1ce29d36d931a8f3f67003aacaca6b07f72937d4c5198c889_prof);

    }

    public function getTemplateName()
    {
        return "@Prueba/Alumnos/list.html.twig";
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

alumnos

<ul id=\"eventos\">
{% for evento in eventos %}
    <li>{{evento.nombreEvento}}</li>
{% endfor %}

</ul>
{% endblock %}", "@Prueba/Alumnos/list.html.twig", "C:\\http\\php\\proy\\src\\PruebaBundle\\Resources\\views\\Alumnos\\list.html.twig");
    }
}
