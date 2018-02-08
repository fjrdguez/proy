<?php

/* @Empresa/empresa/index.html.twig */
class __TwigTemplate_8c94ddcf1ebb99453997f1f022cc30f1b99f35d799abe31fd203d672cda69da6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Empresa/empresa/index.html.twig", 1);
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
        $__internal_b3d9eb0b94bdeb21500df60a7b8ba0709df771d59b5086877a9e0f0898eb0d14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3d9eb0b94bdeb21500df60a7b8ba0709df771d59b5086877a9e0f0898eb0d14->enter($__internal_b3d9eb0b94bdeb21500df60a7b8ba0709df771d59b5086877a9e0f0898eb0d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Empresa/empresa/index.html.twig"));

        $__internal_7fdbc2eee09e39bae3f1e8500703ace97d6362e3d0762badb163ea5654b92953 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fdbc2eee09e39bae3f1e8500703ace97d6362e3d0762badb163ea5654b92953->enter($__internal_7fdbc2eee09e39bae3f1e8500703ace97d6362e3d0762badb163ea5654b92953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Empresa/empresa/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3d9eb0b94bdeb21500df60a7b8ba0709df771d59b5086877a9e0f0898eb0d14->leave($__internal_b3d9eb0b94bdeb21500df60a7b8ba0709df771d59b5086877a9e0f0898eb0d14_prof);

        
        $__internal_7fdbc2eee09e39bae3f1e8500703ace97d6362e3d0762badb163ea5654b92953->leave($__internal_7fdbc2eee09e39bae3f1e8500703ace97d6362e3d0762badb163ea5654b92953_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dfabe814143568dbee3949a1e2f88bb85b64a74e53067a1139c20878f37c6d35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfabe814143568dbee3949a1e2f88bb85b64a74e53067a1139c20878f37c6d35->enter($__internal_dfabe814143568dbee3949a1e2f88bb85b64a74e53067a1139c20878f37c6d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_90f4057ed61f1ff52b7fcead333e36e462fd3ea7eb48ccc73652adb9c506b35d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90f4057ed61f1ff52b7fcead333e36e462fd3ea7eb48ccc73652adb9c506b35d->enter($__internal_90f4057ed61f1ff52b7fcead333e36e462fd3ea7eb48ccc73652adb9c506b35d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Empresas list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Ciudad</th>
                <th>Numempleados</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["empresas"]) || array_key_exists("empresas", $context) ? $context["empresas"] : (function () { throw new Twig_Error_Runtime('Variable "empresas" does not exist.', 17, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["empresa"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("empresa_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["empresa"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["empresa"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["empresa"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["empresa"], "ciudad", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["empresa"], "numEmpleados", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("empresa_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["empresa"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("empresa_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["empresa"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['empresa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("empresa_new");
        echo "\">Create a new empresa</a>
        </li>
    </ul>
";
        
        $__internal_90f4057ed61f1ff52b7fcead333e36e462fd3ea7eb48ccc73652adb9c506b35d->leave($__internal_90f4057ed61f1ff52b7fcead333e36e462fd3ea7eb48ccc73652adb9c506b35d_prof);

        
        $__internal_dfabe814143568dbee3949a1e2f88bb85b64a74e53067a1139c20878f37c6d35->leave($__internal_dfabe814143568dbee3949a1e2f88bb85b64a74e53067a1139c20878f37c6d35_prof);

    }

    public function getTemplateName()
    {
        return "@Empresa/empresa/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 40,  110 => 35,  98 => 29,  92 => 26,  85 => 22,  81 => 21,  77 => 20,  71 => 19,  68 => 18,  64 => 17,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Empresas list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Ciudad</th>
                <th>Numempleados</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for empresa in empresas %}
            <tr>
                <td><a href=\"{{ path('empresa_show', { 'id': empresa.id }) }}\">{{ empresa.id }}</a></td>
                <td>{{ empresa.nombre }}</td>
                <td>{{ empresa.ciudad }}</td>
                <td>{{ empresa.numEmpleados }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('empresa_show', { 'id': empresa.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('empresa_edit', { 'id': empresa.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('empresa_new') }}\">Create a new empresa</a>
        </li>
    </ul>
{% endblock %}
", "@Empresa/empresa/index.html.twig", "C:\\http\\php\\proy\\src\\EmpresaBundle\\Resources\\views\\empresa\\index.html.twig");
    }
}
