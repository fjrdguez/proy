<?php

/* @Empresa/Default/update.html.twig */
class __TwigTemplate_9aa2148ff37821494485d16292932462e8fdb62d9e79908539f2e354c3780dc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bfb8dadd50b835e7b30956ae4f09485d1e6923a3c83e7b9702a077b63fe51351 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfb8dadd50b835e7b30956ae4f09485d1e6923a3c83e7b9702a077b63fe51351->enter($__internal_bfb8dadd50b835e7b30956ae4f09485d1e6923a3c83e7b9702a077b63fe51351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Empresa/Default/update.html.twig"));

        $__internal_b9e34c554b7aaf8a15beb973fd24f27b374832c918592a0098de3c06ce0e62b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9e34c554b7aaf8a15beb973fd24f27b374832c918592a0098de3c06ce0e62b0->enter($__internal_b9e34c554b7aaf8a15beb973fd24f27b374832c918592a0098de3c06ce0e62b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Empresa/Default/update.html.twig"));

        // line 1
        echo "Se ha cambiado el nombre a ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["empresa"]) || array_key_exists("empresa", $context) ? $context["empresa"] : (function () { throw new Twig_Error_Runtime('Variable "empresa" does not exist.', 1, $this->getSourceContext()); })()), "nombre", array()), "html", null, true);
        
        $__internal_bfb8dadd50b835e7b30956ae4f09485d1e6923a3c83e7b9702a077b63fe51351->leave($__internal_bfb8dadd50b835e7b30956ae4f09485d1e6923a3c83e7b9702a077b63fe51351_prof);

        
        $__internal_b9e34c554b7aaf8a15beb973fd24f27b374832c918592a0098de3c06ce0e62b0->leave($__internal_b9e34c554b7aaf8a15beb973fd24f27b374832c918592a0098de3c06ce0e62b0_prof);

    }

    public function getTemplateName()
    {
        return "@Empresa/Default/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Se ha cambiado el nombre a {{empresa.nombre}}", "@Empresa/Default/update.html.twig", "C:\\http\\php\\proy\\src\\EmpresaBundle\\Resources\\views\\Default\\update.html.twig");
    }
}
