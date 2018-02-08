<?php

/* @Empresa/Default/listaNombres.html.twig */
class __TwigTemplate_8a3817347fc1a5716974ceabd50fd3dfd45ed4fc297a5be053e9bb05e59150ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Empresa/empresa.html.twig", "@Empresa/Default/listaNombres.html.twig", 1);
        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Empresa/empresa.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e06ec9826a1128d6ca5b5608ab4820d1e0fa5a3e583c3fb7fbd7de20443e78c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e06ec9826a1128d6ca5b5608ab4820d1e0fa5a3e583c3fb7fbd7de20443e78c5->enter($__internal_e06ec9826a1128d6ca5b5608ab4820d1e0fa5a3e583c3fb7fbd7de20443e78c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Empresa/Default/listaNombres.html.twig"));

        $__internal_9037de749d652bc77a7ec166fd19118305e2507355350942a7704c3031c1e51a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9037de749d652bc77a7ec166fd19118305e2507355350942a7704c3031c1e51a->enter($__internal_9037de749d652bc77a7ec166fd19118305e2507355350942a7704c3031c1e51a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Empresa/Default/listaNombres.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e06ec9826a1128d6ca5b5608ab4820d1e0fa5a3e583c3fb7fbd7de20443e78c5->leave($__internal_e06ec9826a1128d6ca5b5608ab4820d1e0fa5a3e583c3fb7fbd7de20443e78c5_prof);

        
        $__internal_9037de749d652bc77a7ec166fd19118305e2507355350942a7704c3031c1e51a->leave($__internal_9037de749d652bc77a7ec166fd19118305e2507355350942a7704c3031c1e51a_prof);

    }

    // line 2
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_d50fd4c564cfc3f351f0ca0d987f55a710c639c018b7f56a1c46f727e38ea51b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d50fd4c564cfc3f351f0ca0d987f55a710c639c018b7f56a1c46f727e38ea51b->enter($__internal_d50fd4c564cfc3f351f0ca0d987f55a710c639c018b7f56a1c46f727e38ea51b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        $__internal_d69863529420e5073d373e58091c61fee3cf1e2f57e36dd6037fd836bc794e82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d69863529420e5073d373e58091c61fee3cf1e2f57e36dd6037fd836bc794e82->enter($__internal_d69863529420e5073d373e58091c61fee3cf1e2f57e36dd6037fd836bc794e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 3
        echo "<ul>
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nombres"]) || array_key_exists("nombres", $context) ? $context["nombres"] : (function () { throw new Twig_Error_Runtime('Variable "nombres" does not exist.', 4, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["nombre"]) {
            if (($context["nombre"] != "Paco")) {
                // line 5
                echo "    <li>";
                echo twig_escape_filter($this->env, $context["nombre"], "html", null, true);
                echo "</li>
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nombre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "
</ul>
";
        
        $__internal_d69863529420e5073d373e58091c61fee3cf1e2f57e36dd6037fd836bc794e82->leave($__internal_d69863529420e5073d373e58091c61fee3cf1e2f57e36dd6037fd836bc794e82_prof);

        
        $__internal_d50fd4c564cfc3f351f0ca0d987f55a710c639c018b7f56a1c46f727e38ea51b->leave($__internal_d50fd4c564cfc3f351f0ca0d987f55a710c639c018b7f56a1c46f727e38ea51b_prof);

    }

    public function getTemplateName()
    {
        return "@Empresa/Default/listaNombres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 7,  57 => 5,  52 => 4,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Empresa/empresa.html.twig' %}
{% block contenido %}
<ul>
{% for nombre in nombres if nombre!= \"Paco\" %}
    <li>{{nombre}}</li>
{% endfor %}

</ul>
{% endblock %}", "@Empresa/Default/listaNombres.html.twig", "C:\\http\\php\\proy\\src\\EmpresaBundle\\Resources\\views\\Default\\listaNombres.html.twig");
    }
}
