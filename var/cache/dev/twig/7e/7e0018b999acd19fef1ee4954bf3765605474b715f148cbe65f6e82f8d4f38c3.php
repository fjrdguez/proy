<?php

/* @Prueba/Default/nombre.html.twig */
class __TwigTemplate_6f4727ac49ca0f78c7f656b24a0dcafb19b12256427a34359dd4f14cdbd2be11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Prueba/Default/nombre.html.twig", 1);
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
        $__internal_dd5e8d1eacc8eff78447e6dae243f887760dc199ebe14c351a5c63255e77c2f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd5e8d1eacc8eff78447e6dae243f887760dc199ebe14c351a5c63255e77c2f0->enter($__internal_dd5e8d1eacc8eff78447e6dae243f887760dc199ebe14c351a5c63255e77c2f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Prueba/Default/nombre.html.twig"));

        $__internal_06397812958f339471e2261ff85cb47865774d233a2d1e246d79723f685deb69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06397812958f339471e2261ff85cb47865774d233a2d1e246d79723f685deb69->enter($__internal_06397812958f339471e2261ff85cb47865774d233a2d1e246d79723f685deb69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Prueba/Default/nombre.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd5e8d1eacc8eff78447e6dae243f887760dc199ebe14c351a5c63255e77c2f0->leave($__internal_dd5e8d1eacc8eff78447e6dae243f887760dc199ebe14c351a5c63255e77c2f0_prof);

        
        $__internal_06397812958f339471e2261ff85cb47865774d233a2d1e246d79723f685deb69->leave($__internal_06397812958f339471e2261ff85cb47865774d233a2d1e246d79723f685deb69_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d2f3da43ba5b111410af86e9484c2d0af9be4c6bcfee607b2d2e604ddb25a8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d2f3da43ba5b111410af86e9484c2d0af9be4c6bcfee607b2d2e604ddb25a8d->enter($__internal_0d2f3da43ba5b111410af86e9484c2d0af9be4c6bcfee607b2d2e604ddb25a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5a50cee0b869d7d98ef912d2251281e3bbba4acf26bd4df8f42db4b696fbc13a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a50cee0b869d7d98ef912d2251281e3bbba4acf26bd4df8f42db4b696fbc13a->enter($__internal_5a50cee0b869d7d98ef912d2251281e3bbba4acf26bd4df8f42db4b696fbc13a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<br>
<img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/Logo.png"), "html", null, true);
        echo "\">
<div class=\"texto\">
    ";
        // line 6
        if (((isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new Twig_Error_Runtime('Variable "nombre" does not exist.', 6, $this->getSourceContext()); })()) == "Paco")) {
            // line 7
            echo "     Hola, si soy yo, ";
            echo twig_escape_filter($this->env, (isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new Twig_Error_Runtime('Variable "nombre" does not exist.', 7, $this->getSourceContext()); })()), "html", null, true);
            echo "
     ";
        } elseif ((        // line 8
(isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new Twig_Error_Runtime('Variable "nombre" does not exist.', 8, $this->getSourceContext()); })()) == "Maria")) {
            // line 9
            echo "     ";
            echo twig_escape_filter($this->env, (isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new Twig_Error_Runtime('Variable "nombre" does not exist.', 9, $this->getSourceContext()); })()), "html", null, true);
            echo " es un nombre de mujer
     ";
        } else {
            // line 11
            echo "     Hola ";
            echo twig_escape_filter($this->env, (isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new Twig_Error_Runtime('Variable "nombre" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
            echo "
     ";
        }
        // line 13
        echo "</div> 
";
        
        $__internal_5a50cee0b869d7d98ef912d2251281e3bbba4acf26bd4df8f42db4b696fbc13a->leave($__internal_5a50cee0b869d7d98ef912d2251281e3bbba4acf26bd4df8f42db4b696fbc13a_prof);

        
        $__internal_0d2f3da43ba5b111410af86e9484c2d0af9be4c6bcfee607b2d2e604ddb25a8d->leave($__internal_0d2f3da43ba5b111410af86e9484c2d0af9be4c6bcfee607b2d2e604ddb25a8d_prof);

    }

    public function getTemplateName()
    {
        return "@Prueba/Default/nombre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 13,  72 => 11,  66 => 9,  64 => 8,  59 => 7,  57 => 6,  52 => 4,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
<br>
<img src=\"{{ asset('img/Logo.png')}}\">
<div class=\"texto\">
    {% if nombre == \"Paco\" %}
     Hola, si soy yo, {{nombre}}
     {% elseif nombre == \"Maria\" %}
     {{nombre}} es un nombre de mujer
     {% else %}
     Hola {{nombre}}
     {%endif%}
</div> 
{% endblock %}", "@Prueba/Default/nombre.html.twig", "C:\\http\\php\\proy\\src\\PruebaBundle\\Resources\\views\\Default\\nombre.html.twig");
    }
}
