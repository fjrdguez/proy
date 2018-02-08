<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_71256662afe82fe8e0ae2643d96a40a0b9d667db60f6db4f64202ce52600c26d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8af2801299f414c5f62632fac6588db06c5c04e5f55e77c193e04c7cad96f8e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8af2801299f414c5f62632fac6588db06c5c04e5f55e77c193e04c7cad96f8e4->enter($__internal_8af2801299f414c5f62632fac6588db06c5c04e5f55e77c193e04c7cad96f8e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_21928909f528ce9ebdfdd8594e6b73b5d4dde2fca4718f7c11dc156302b7f500 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21928909f528ce9ebdfdd8594e6b73b5d4dde2fca4718f7c11dc156302b7f500->enter($__internal_21928909f528ce9ebdfdd8594e6b73b5d4dde2fca4718f7c11dc156302b7f500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8af2801299f414c5f62632fac6588db06c5c04e5f55e77c193e04c7cad96f8e4->leave($__internal_8af2801299f414c5f62632fac6588db06c5c04e5f55e77c193e04c7cad96f8e4_prof);

        
        $__internal_21928909f528ce9ebdfdd8594e6b73b5d4dde2fca4718f7c11dc156302b7f500->leave($__internal_21928909f528ce9ebdfdd8594e6b73b5d4dde2fca4718f7c11dc156302b7f500_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7826869a347a71659daa9e1aaea5aae5bc237dbaf372242207fec441e2ae2a86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7826869a347a71659daa9e1aaea5aae5bc237dbaf372242207fec441e2ae2a86->enter($__internal_7826869a347a71659daa9e1aaea5aae5bc237dbaf372242207fec441e2ae2a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ec361f639c045bcd54c1e6ba485e3e22dc1fd3cb6ddaa01f3366e8c46ad1b4c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec361f639c045bcd54c1e6ba485e3e22dc1fd3cb6ddaa01f3366e8c46ad1b4c1->enter($__internal_ec361f639c045bcd54c1e6ba485e3e22dc1fd3cb6ddaa01f3366e8c46ad1b4c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_ec361f639c045bcd54c1e6ba485e3e22dc1fd3cb6ddaa01f3366e8c46ad1b4c1->leave($__internal_ec361f639c045bcd54c1e6ba485e3e22dc1fd3cb6ddaa01f3366e8c46ad1b4c1_prof);

        
        $__internal_7826869a347a71659daa9e1aaea5aae5bc237dbaf372242207fec441e2ae2a86->leave($__internal_7826869a347a71659daa9e1aaea5aae5bc237dbaf372242207fec441e2ae2a86_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_78cba6e96761cf633f933c4fe34021d48facf110748085b5649b05f13112dd86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78cba6e96761cf633f933c4fe34021d48facf110748085b5649b05f13112dd86->enter($__internal_78cba6e96761cf633f933c4fe34021d48facf110748085b5649b05f13112dd86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e648e9efc2f01b1c7e6981cb3da0d9b8e9c6dd829ab2712e2bb4268bf3edd51c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e648e9efc2f01b1c7e6981cb3da0d9b8e9c6dd829ab2712e2bb4268bf3edd51c->enter($__internal_e648e9efc2f01b1c7e6981cb3da0d9b8e9c6dd829ab2712e2bb4268bf3edd51c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_e648e9efc2f01b1c7e6981cb3da0d9b8e9c6dd829ab2712e2bb4268bf3edd51c->leave($__internal_e648e9efc2f01b1c7e6981cb3da0d9b8e9c6dd829ab2712e2bb4268bf3edd51c_prof);

        
        $__internal_78cba6e96761cf633f933c4fe34021d48facf110748085b5649b05f13112dd86->leave($__internal_78cba6e96761cf633f933c4fe34021d48facf110748085b5649b05f13112dd86_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d7fe04e765da43029dfdfba437f25e066d0cf17651d69f264e6d14efc8834801 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7fe04e765da43029dfdfba437f25e066d0cf17651d69f264e6d14efc8834801->enter($__internal_d7fe04e765da43029dfdfba437f25e066d0cf17651d69f264e6d14efc8834801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_af2086d823558f4d0488c8dbfdd112869c6b6a5cb610c5b2979615255b97175d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af2086d823558f4d0488c8dbfdd112869c6b6a5cb610c5b2979615255b97175d->enter($__internal_af2086d823558f4d0488c8dbfdd112869c6b6a5cb610c5b2979615255b97175d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_af2086d823558f4d0488c8dbfdd112869c6b6a5cb610c5b2979615255b97175d->leave($__internal_af2086d823558f4d0488c8dbfdd112869c6b6a5cb610c5b2979615255b97175d_prof);

        
        $__internal_d7fe04e765da43029dfdfba437f25e066d0cf17651d69f264e6d14efc8834801->leave($__internal_d7fe04e765da43029dfdfba437f25e066d0cf17651d69f264e6d14efc8834801_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\http\\proy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
