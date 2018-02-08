<?php

/* @Empresa/Default/buscar.html.twig */
class __TwigTemplate_f921b9c769702edea2665bc7fabdb5b7fa652731a7e3fcf0a0c6422191815aca extends Twig_Template
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
        $__internal_4c96f8410e35ca1970d481df96157cd7ee5d64af8f575b200262f4c4977fd21a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c96f8410e35ca1970d481df96157cd7ee5d64af8f575b200262f4c4977fd21a->enter($__internal_4c96f8410e35ca1970d481df96157cd7ee5d64af8f575b200262f4c4977fd21a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Empresa/Default/buscar.html.twig"));

        $__internal_da41910af56fbfdbf42713bb71146e4c9c081957654d8c311b0c89141bf07ba9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da41910af56fbfdbf42713bb71146e4c9c081957654d8c311b0c89141bf07ba9->enter($__internal_da41910af56fbfdbf42713bb71146e4c9c081957654d8c311b0c89141bf07ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Empresa/Default/buscar.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["empresa"]) || array_key_exists("empresa", $context) ? $context["empresa"] : (function () { throw new Twig_Error_Runtime('Variable "empresa" does not exist.', 1, $this->getSourceContext()); })()), "nombre", array()), "html", null, true);
        
        $__internal_4c96f8410e35ca1970d481df96157cd7ee5d64af8f575b200262f4c4977fd21a->leave($__internal_4c96f8410e35ca1970d481df96157cd7ee5d64af8f575b200262f4c4977fd21a_prof);

        
        $__internal_da41910af56fbfdbf42713bb71146e4c9c081957654d8c311b0c89141bf07ba9->leave($__internal_da41910af56fbfdbf42713bb71146e4c9c081957654d8c311b0c89141bf07ba9_prof);

    }

    public function getTemplateName()
    {
        return "@Empresa/Default/buscar.html.twig";
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
        return new Twig_Source("{{empresa.nombre}}", "@Empresa/Default/buscar.html.twig", "C:\\http\\php\\proy\\src\\EmpresaBundle\\Resources\\views\\Default\\buscar.html.twig");
    }
}
