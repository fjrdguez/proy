<?php

/* @Empresa/Default/index.html.twig */
class __TwigTemplate_d11529ba521dcc1d25eb91bbe6d516bf4066bdbfce02eeee0c4caed24941b1a3 extends Twig_Template
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
        $__internal_344f948f0a336c854a5c9507eba15e1b96114f7010bc1e9b0374c24044aa0987 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_344f948f0a336c854a5c9507eba15e1b96114f7010bc1e9b0374c24044aa0987->enter($__internal_344f948f0a336c854a5c9507eba15e1b96114f7010bc1e9b0374c24044aa0987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Empresa/Default/index.html.twig"));

        $__internal_4f190de97e1b9722fff3715b74592cb262d1d6a09f2bb573ba1da174ba208a35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f190de97e1b9722fff3715b74592cb262d1d6a09f2bb573ba1da174ba208a35->enter($__internal_4f190de97e1b9722fff3715b74592cb262d1d6a09f2bb573ba1da174ba208a35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Empresa/Default/index.html.twig"));

        // line 1
        echo "

Has creado la empresa nº ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["empId"]) || array_key_exists("empId", $context) ? $context["empId"] : (function () { throw new Twig_Error_Runtime('Variable "empId" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "
";
        
        $__internal_344f948f0a336c854a5c9507eba15e1b96114f7010bc1e9b0374c24044aa0987->leave($__internal_344f948f0a336c854a5c9507eba15e1b96114f7010bc1e9b0374c24044aa0987_prof);

        
        $__internal_4f190de97e1b9722fff3715b74592cb262d1d6a09f2bb573ba1da174ba208a35->leave($__internal_4f190de97e1b9722fff3715b74592cb262d1d6a09f2bb573ba1da174ba208a35_prof);

    }

    public function getTemplateName()
    {
        return "@Empresa/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("

Has creado la empresa nº {{empId}}
", "@Empresa/Default/index.html.twig", "C:\\http\\php\\proy\\src\\EmpresaBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
