<?php

/* @Usuarios/Default/register.html.twig */
class __TwigTemplate_d05bba336f8374921ee44315f16847d6d696d60dd137f8aebe57567913a89367 extends Twig_Template
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
        $__internal_69f76ecd5bb85c966c51cf291e707a788d0f46813ed02ed0ea16e7e80183c8c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69f76ecd5bb85c966c51cf291e707a788d0f46813ed02ed0ea16e7e80183c8c5->enter($__internal_69f76ecd5bb85c966c51cf291e707a788d0f46813ed02ed0ea16e7e80183c8c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Usuarios/Default/register.html.twig"));

        $__internal_32b513ac4c23d13e78093c3a22ee718af41b68593b79922b8ecabee81beb08d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32b513ac4c23d13e78093c3a22ee718af41b68593b79922b8ecabee81beb08d4->enter($__internal_32b513ac4c23d13e78093c3a22ee718af41b68593b79922b8ecabee81beb08d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Usuarios/Default/register.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1, $this->getSourceContext()); })()), 'form_start');
        echo "
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2, $this->getSourceContext()); })()), "username", array()), 'row');
        echo "
    ";
        // line 3
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), "email", array()), 'row');
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), "plainPassword", array()), "first", array()), 'row');
        echo "
    ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->getSourceContext()); })()), "plainPassword", array()), "second", array()), 'row');
        echo "
    ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), "Salvar", array()), 'row');
        echo "
    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), "Borrar", array()), 'row');
        echo "
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_end');
        
        $__internal_69f76ecd5bb85c966c51cf291e707a788d0f46813ed02ed0ea16e7e80183c8c5->leave($__internal_69f76ecd5bb85c966c51cf291e707a788d0f46813ed02ed0ea16e7e80183c8c5_prof);

        
        $__internal_32b513ac4c23d13e78093c3a22ee718af41b68593b79922b8ecabee81beb08d4->leave($__internal_32b513ac4c23d13e78093c3a22ee718af41b68593b79922b8ecabee81beb08d4_prof);

    }

    public function getTemplateName()
    {
        return "@Usuarios/Default/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 8,  49 => 7,  45 => 6,  41 => 5,  37 => 4,  33 => 3,  29 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(form) }}
    {{ form_row(form.username) }}
    {{ form_row(form.email) }}
    {{ form_row(form.plainPassword.first) }}
    {{ form_row(form.plainPassword.second) }}
    {{ form_row(form.Salvar) }}
    {{ form_row(form.Borrar) }}
{{ form_end(form) }}", "@Usuarios/Default/register.html.twig", "C:\\http\\php\\proy\\src\\UsuariosBundle\\Resources\\views\\Default\\register.html.twig");
    }
}
