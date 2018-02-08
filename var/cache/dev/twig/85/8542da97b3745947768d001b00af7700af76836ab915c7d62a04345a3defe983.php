<?php

/* @Empresa/Default/nuevo.html.twig */
class __TwigTemplate_6245d14bc1dcb172f5e72bd16bb6c89ae32fc892386d2852bc23eb31bf304d62 extends Twig_Template
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
        $__internal_7efe0ba228ae5f3770f0cee6a491aa38c33d5589b55d368a1244c8f10e5cdc71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7efe0ba228ae5f3770f0cee6a491aa38c33d5589b55d368a1244c8f10e5cdc71->enter($__internal_7efe0ba228ae5f3770f0cee6a491aa38c33d5589b55d368a1244c8f10e5cdc71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Empresa/Default/nuevo.html.twig"));

        $__internal_d6ec6b0c6202bd5da5d2c9ad53ac819d0790f629cea090c2a6225cbc7690cbc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6ec6b0c6202bd5da5d2c9ad53ac819d0790f629cea090c2a6225cbc7690cbc4->enter($__internal_d6ec6b0c6202bd5da5d2c9ad53ac819d0790f629cea090c2a6225cbc7690cbc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Empresa/Default/nuevo.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1, $this->getSourceContext()); })()), 'form');
        echo "  ";
        
        $__internal_7efe0ba228ae5f3770f0cee6a491aa38c33d5589b55d368a1244c8f10e5cdc71->leave($__internal_7efe0ba228ae5f3770f0cee6a491aa38c33d5589b55d368a1244c8f10e5cdc71_prof);

        
        $__internal_d6ec6b0c6202bd5da5d2c9ad53ac819d0790f629cea090c2a6225cbc7690cbc4->leave($__internal_d6ec6b0c6202bd5da5d2c9ad53ac819d0790f629cea090c2a6225cbc7690cbc4_prof);

    }

    public function getTemplateName()
    {
        return "@Empresa/Default/nuevo.html.twig";
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
        return new Twig_Source("{{form(form)}}  ", "@Empresa/Default/nuevo.html.twig", "C:\\http\\php\\proy\\src\\EmpresaBundle\\Resources\\views\\Default\\nuevo.html.twig");
    }
}
