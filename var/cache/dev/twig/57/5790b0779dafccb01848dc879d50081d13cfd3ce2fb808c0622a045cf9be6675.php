<?php

/* @Empresa/empresa/new.html.twig */
class __TwigTemplate_c48f16ed0e14fe96411d39d5cc9c29c92773a6ab2f6d045ecbf9725493b9b0ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Empresa/empresa/new.html.twig", 1);
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
        $__internal_b90dfc4e6d1c73a8e1519b2089e90610c2dd48a9ddc6c4b353dac3ae830fb5fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b90dfc4e6d1c73a8e1519b2089e90610c2dd48a9ddc6c4b353dac3ae830fb5fc->enter($__internal_b90dfc4e6d1c73a8e1519b2089e90610c2dd48a9ddc6c4b353dac3ae830fb5fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Empresa/empresa/new.html.twig"));

        $__internal_22955f4ea01b29e5cb95fd760236dc56477a79a1a54c8908b0562b7bcfbed4d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22955f4ea01b29e5cb95fd760236dc56477a79a1a54c8908b0562b7bcfbed4d2->enter($__internal_22955f4ea01b29e5cb95fd760236dc56477a79a1a54c8908b0562b7bcfbed4d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Empresa/empresa/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b90dfc4e6d1c73a8e1519b2089e90610c2dd48a9ddc6c4b353dac3ae830fb5fc->leave($__internal_b90dfc4e6d1c73a8e1519b2089e90610c2dd48a9ddc6c4b353dac3ae830fb5fc_prof);

        
        $__internal_22955f4ea01b29e5cb95fd760236dc56477a79a1a54c8908b0562b7bcfbed4d2->leave($__internal_22955f4ea01b29e5cb95fd760236dc56477a79a1a54c8908b0562b7bcfbed4d2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c29e88eaed492ef86782eb9ddb548795ba1a5ba40e23a0a35656a12331260db7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c29e88eaed492ef86782eb9ddb548795ba1a5ba40e23a0a35656a12331260db7->enter($__internal_c29e88eaed492ef86782eb9ddb548795ba1a5ba40e23a0a35656a12331260db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_22549a14ee79311be90633bc7338a61de5de6743ea5bc79adab47479dbd5aece = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22549a14ee79311be90633bc7338a61de5de6743ea5bc79adab47479dbd5aece->enter($__internal_22549a14ee79311be90633bc7338a61de5de6743ea5bc79adab47479dbd5aece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Empresa creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("empresa_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_22549a14ee79311be90633bc7338a61de5de6743ea5bc79adab47479dbd5aece->leave($__internal_22549a14ee79311be90633bc7338a61de5de6743ea5bc79adab47479dbd5aece_prof);

        
        $__internal_c29e88eaed492ef86782eb9ddb548795ba1a5ba40e23a0a35656a12331260db7->leave($__internal_c29e88eaed492ef86782eb9ddb548795ba1a5ba40e23a0a35656a12331260db7_prof);

    }

    public function getTemplateName()
    {
        return "@Empresa/empresa/new.html.twig";
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
    <h1>Empresa creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('empresa_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "@Empresa/empresa/new.html.twig", "C:\\http\\php\\proy\\src\\EmpresaBundle\\Resources\\views\\empresa\\new.html.twig");
    }
}
