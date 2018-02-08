<?php

/* @Empresa/empresa/show.html.twig */
class __TwigTemplate_f102158de1cff0c6a84dfdc8a8328957b9ce93d51347c7b4d299774596a29c32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Empresa/empresa/show.html.twig", 1);
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
        $__internal_58d0b98defd7231d225ed7eab615d6bc7078b84a3922af2b545f060984cb7555 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58d0b98defd7231d225ed7eab615d6bc7078b84a3922af2b545f060984cb7555->enter($__internal_58d0b98defd7231d225ed7eab615d6bc7078b84a3922af2b545f060984cb7555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Empresa/empresa/show.html.twig"));

        $__internal_e5894058f54bf24d4dfc1a83a7bcb31a970f418769716a02fe47a3f5b4e1f77f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5894058f54bf24d4dfc1a83a7bcb31a970f418769716a02fe47a3f5b4e1f77f->enter($__internal_e5894058f54bf24d4dfc1a83a7bcb31a970f418769716a02fe47a3f5b4e1f77f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Empresa/empresa/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58d0b98defd7231d225ed7eab615d6bc7078b84a3922af2b545f060984cb7555->leave($__internal_58d0b98defd7231d225ed7eab615d6bc7078b84a3922af2b545f060984cb7555_prof);

        
        $__internal_e5894058f54bf24d4dfc1a83a7bcb31a970f418769716a02fe47a3f5b4e1f77f->leave($__internal_e5894058f54bf24d4dfc1a83a7bcb31a970f418769716a02fe47a3f5b4e1f77f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc8aaa830e42b3fd985cab7dfc7c8532645573739245c5a2ed681f57b52a76e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc8aaa830e42b3fd985cab7dfc7c8532645573739245c5a2ed681f57b52a76e7->enter($__internal_fc8aaa830e42b3fd985cab7dfc7c8532645573739245c5a2ed681f57b52a76e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_93842135f3d7cda8f26836119a7757dee9e1ccb0cedec4a9097a13048c8d5b24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93842135f3d7cda8f26836119a7757dee9e1ccb0cedec4a9097a13048c8d5b24->enter($__internal_93842135f3d7cda8f26836119a7757dee9e1ccb0cedec4a9097a13048c8d5b24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Empresa</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["empresa"]) || array_key_exists("empresa", $context) ? $context["empresa"] : (function () { throw new Twig_Error_Runtime('Variable "empresa" does not exist.', 10, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["empresa"]) || array_key_exists("empresa", $context) ? $context["empresa"] : (function () { throw new Twig_Error_Runtime('Variable "empresa" does not exist.', 14, $this->getSourceContext()); })()), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ciudad</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["empresa"]) || array_key_exists("empresa", $context) ? $context["empresa"] : (function () { throw new Twig_Error_Runtime('Variable "empresa" does not exist.', 18, $this->getSourceContext()); })()), "ciudad", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Numempleados</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["empresa"]) || array_key_exists("empresa", $context) ? $context["empresa"] : (function () { throw new Twig_Error_Runtime('Variable "empresa" does not exist.', 22, $this->getSourceContext()); })()), "numEmpleados", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("empresa_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("empresa_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["empresa"]) || array_key_exists("empresa", $context) ? $context["empresa"] : (function () { throw new Twig_Error_Runtime('Variable "empresa" does not exist.', 32, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 35, $this->getSourceContext()); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 37, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_93842135f3d7cda8f26836119a7757dee9e1ccb0cedec4a9097a13048c8d5b24->leave($__internal_93842135f3d7cda8f26836119a7757dee9e1ccb0cedec4a9097a13048c8d5b24_prof);

        
        $__internal_fc8aaa830e42b3fd985cab7dfc7c8532645573739245c5a2ed681f57b52a76e7->leave($__internal_fc8aaa830e42b3fd985cab7dfc7c8532645573739245c5a2ed681f57b52a76e7_prof);

    }

    public function getTemplateName()
    {
        return "@Empresa/empresa/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 37,  100 => 35,  94 => 32,  88 => 29,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Empresa</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ empresa.id }}</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>{{ empresa.nombre }}</td>
            </tr>
            <tr>
                <th>Ciudad</th>
                <td>{{ empresa.ciudad }}</td>
            </tr>
            <tr>
                <th>Numempleados</th>
                <td>{{ empresa.numEmpleados }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('empresa_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('empresa_edit', { 'id': empresa.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "@Empresa/empresa/show.html.twig", "C:\\http\\php\\proy\\src\\EmpresaBundle\\Resources\\views\\empresa\\show.html.twig");
    }
}
