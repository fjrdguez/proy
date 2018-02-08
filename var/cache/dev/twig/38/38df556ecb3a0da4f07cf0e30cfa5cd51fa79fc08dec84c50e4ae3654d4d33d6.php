<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0e59a3048157c489b9c2759277ad4e50e7a05b826b1e195ec7fd37c789154d57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_170d54e941a7e4311f695fa2f77541cd9f56fb47a24c8ea418f965a288fb74c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_170d54e941a7e4311f695fa2f77541cd9f56fb47a24c8ea418f965a288fb74c9->enter($__internal_170d54e941a7e4311f695fa2f77541cd9f56fb47a24c8ea418f965a288fb74c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_7b7454a50cdc8bb92edb89ccebd1ae7d6ebf5d71603ca4e393ecbb9561051cf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b7454a50cdc8bb92edb89ccebd1ae7d6ebf5d71603ca4e393ecbb9561051cf4->enter($__internal_7b7454a50cdc8bb92edb89ccebd1ae7d6ebf5d71603ca4e393ecbb9561051cf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_170d54e941a7e4311f695fa2f77541cd9f56fb47a24c8ea418f965a288fb74c9->leave($__internal_170d54e941a7e4311f695fa2f77541cd9f56fb47a24c8ea418f965a288fb74c9_prof);

        
        $__internal_7b7454a50cdc8bb92edb89ccebd1ae7d6ebf5d71603ca4e393ecbb9561051cf4->leave($__internal_7b7454a50cdc8bb92edb89ccebd1ae7d6ebf5d71603ca4e393ecbb9561051cf4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ecfc9e92a4cac18ee7b66e457d9904e0641df151de48f76ab655925259341fe5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecfc9e92a4cac18ee7b66e457d9904e0641df151de48f76ab655925259341fe5->enter($__internal_ecfc9e92a4cac18ee7b66e457d9904e0641df151de48f76ab655925259341fe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d9c5410ef374d2afef1e3f420a87ffacb24c22c948abf7d9b9d36dce4056a074 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9c5410ef374d2afef1e3f420a87ffacb24c22c948abf7d9b9d36dce4056a074->enter($__internal_d9c5410ef374d2afef1e3f420a87ffacb24c22c948abf7d9b9d36dce4056a074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d9c5410ef374d2afef1e3f420a87ffacb24c22c948abf7d9b9d36dce4056a074->leave($__internal_d9c5410ef374d2afef1e3f420a87ffacb24c22c948abf7d9b9d36dce4056a074_prof);

        
        $__internal_ecfc9e92a4cac18ee7b66e457d9904e0641df151de48f76ab655925259341fe5->leave($__internal_ecfc9e92a4cac18ee7b66e457d9904e0641df151de48f76ab655925259341fe5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_77f16fc4cba9d050e878a24d942a202a8d0ac2baf04beb210d792319ef5d30cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77f16fc4cba9d050e878a24d942a202a8d0ac2baf04beb210d792319ef5d30cc->enter($__internal_77f16fc4cba9d050e878a24d942a202a8d0ac2baf04beb210d792319ef5d30cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_dbd8399732b43b3b249a714dfd9fd33c2ec308aef2de19cc74b70886c3b4afa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbd8399732b43b3b249a714dfd9fd33c2ec308aef2de19cc74b70886c3b4afa6->enter($__internal_dbd8399732b43b3b249a714dfd9fd33c2ec308aef2de19cc74b70886c3b4afa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_dbd8399732b43b3b249a714dfd9fd33c2ec308aef2de19cc74b70886c3b4afa6->leave($__internal_dbd8399732b43b3b249a714dfd9fd33c2ec308aef2de19cc74b70886c3b4afa6_prof);

        
        $__internal_77f16fc4cba9d050e878a24d942a202a8d0ac2baf04beb210d792319ef5d30cc->leave($__internal_77f16fc4cba9d050e878a24d942a202a8d0ac2baf04beb210d792319ef5d30cc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_320eaddf940598648af905155329d023cc7fcb3219e38fd87b8f0e9563fc710c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_320eaddf940598648af905155329d023cc7fcb3219e38fd87b8f0e9563fc710c->enter($__internal_320eaddf940598648af905155329d023cc7fcb3219e38fd87b8f0e9563fc710c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a5d04096c4555d649978e4b0c021226ff8235bc73be93d469e2eca11993c3126 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5d04096c4555d649978e4b0c021226ff8235bc73be93d469e2eca11993c3126->enter($__internal_a5d04096c4555d649978e4b0c021226ff8235bc73be93d469e2eca11993c3126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_a5d04096c4555d649978e4b0c021226ff8235bc73be93d469e2eca11993c3126->leave($__internal_a5d04096c4555d649978e4b0c021226ff8235bc73be93d469e2eca11993c3126_prof);

        
        $__internal_320eaddf940598648af905155329d023cc7fcb3219e38fd87b8f0e9563fc710c->leave($__internal_320eaddf940598648af905155329d023cc7fcb3219e38fd87b8f0e9563fc710c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\http\\proy\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
