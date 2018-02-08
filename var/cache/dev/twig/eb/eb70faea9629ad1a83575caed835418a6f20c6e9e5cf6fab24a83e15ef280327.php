<?php

/* @Empresa/empresa.html.twig */
class __TwigTemplate_b6320c2a6078208fb634eea548c7155b8f9425664b5f44bad9e491c9bdace27c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'estilos' => array($this, 'block_estilos'),
            'titulo' => array($this, 'block_titulo'),
            'contenidoIzda' => array($this, 'block_contenidoIzda'),
            'contenido' => array($this, 'block_contenido'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9041f6379f9e46a1be25cba9c55a32d5f6b4a3f557284cd872574bf94a756496 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9041f6379f9e46a1be25cba9c55a32d5f6b4a3f557284cd872574bf94a756496->enter($__internal_9041f6379f9e46a1be25cba9c55a32d5f6b4a3f557284cd872574bf94a756496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Empresa/empresa.html.twig"));

        $__internal_205870ccaf48ecbe937a1a0b873386f3e6dd355942c28eb96a8c0dc797935c68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_205870ccaf48ecbe937a1a0b873386f3e6dd355942c28eb96a8c0dc797935c68->enter($__internal_205870ccaf48ecbe937a1a0b873386f3e6dd355942c28eb96a8c0dc797935c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Empresa/empresa.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
    <meta charset=\"utf-8\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\">
    ";
        // line 6
        $this->displayBlock('estilos', $context, $blocks);
        // line 7
        echo "<title>";
        $this->displayBlock('titulo', $context, $blocks);
        echo "</title>
    </head>
    <body>
        <nav class=\"navbar navbar-inverse navbar-static-top\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a class=\"navbar-brand\" href=\"#\">EjemploDos columnas</a>
                </div>
            </div>
        </nav>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4\">";
        // line 19
        $this->displayBlock('contenidoIzda', $context, $blocks);
        echo "</div>
                <div class=\"col-md-8\">";
        // line 20
        $this->displayBlock('contenido', $context, $blocks);
        echo "</div>
            </div>
        </div>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" ></script>
         ";
        // line 24
        $this->displayBlock('js', $context, $blocks);
        // line 25
        echo "    </body>
</html>";
        
        $__internal_9041f6379f9e46a1be25cba9c55a32d5f6b4a3f557284cd872574bf94a756496->leave($__internal_9041f6379f9e46a1be25cba9c55a32d5f6b4a3f557284cd872574bf94a756496_prof);

        
        $__internal_205870ccaf48ecbe937a1a0b873386f3e6dd355942c28eb96a8c0dc797935c68->leave($__internal_205870ccaf48ecbe937a1a0b873386f3e6dd355942c28eb96a8c0dc797935c68_prof);

    }

    // line 6
    public function block_estilos($context, array $blocks = array())
    {
        $__internal_4738f7f08dd94c44faab1455e0cde1a909c07be70adc89cedba7aa04df64b24a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4738f7f08dd94c44faab1455e0cde1a909c07be70adc89cedba7aa04df64b24a->enter($__internal_4738f7f08dd94c44faab1455e0cde1a909c07be70adc89cedba7aa04df64b24a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "estilos"));

        $__internal_9c70bf01a96315e4d372565f0ef023aa9c83bc7f9493e12a6c1772e21f85b51f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c70bf01a96315e4d372565f0ef023aa9c83bc7f9493e12a6c1772e21f85b51f->enter($__internal_9c70bf01a96315e4d372565f0ef023aa9c83bc7f9493e12a6c1772e21f85b51f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "estilos"));

        
        $__internal_9c70bf01a96315e4d372565f0ef023aa9c83bc7f9493e12a6c1772e21f85b51f->leave($__internal_9c70bf01a96315e4d372565f0ef023aa9c83bc7f9493e12a6c1772e21f85b51f_prof);

        
        $__internal_4738f7f08dd94c44faab1455e0cde1a909c07be70adc89cedba7aa04df64b24a->leave($__internal_4738f7f08dd94c44faab1455e0cde1a909c07be70adc89cedba7aa04df64b24a_prof);

    }

    // line 7
    public function block_titulo($context, array $blocks = array())
    {
        $__internal_11712ef4042f033bfef2b5983bd90a052dd06c517f748d6085a184b408c21a60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11712ef4042f033bfef2b5983bd90a052dd06c517f748d6085a184b408c21a60->enter($__internal_11712ef4042f033bfef2b5983bd90a052dd06c517f748d6085a184b408c21a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        $__internal_692645faf306b8b60c7e73a3f9c508c5235569524ac561b03606fc9280418e0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_692645faf306b8b60c7e73a3f9c508c5235569524ac561b03606fc9280418e0b->enter($__internal_692645faf306b8b60c7e73a3f9c508c5235569524ac561b03606fc9280418e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        echo "Proyecto Symfony";
        
        $__internal_692645faf306b8b60c7e73a3f9c508c5235569524ac561b03606fc9280418e0b->leave($__internal_692645faf306b8b60c7e73a3f9c508c5235569524ac561b03606fc9280418e0b_prof);

        
        $__internal_11712ef4042f033bfef2b5983bd90a052dd06c517f748d6085a184b408c21a60->leave($__internal_11712ef4042f033bfef2b5983bd90a052dd06c517f748d6085a184b408c21a60_prof);

    }

    // line 19
    public function block_contenidoIzda($context, array $blocks = array())
    {
        $__internal_c4408823eb0ba997ccd81282e2e03ec6c6a0cd8e6bc6baa02a547ce6062811da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4408823eb0ba997ccd81282e2e03ec6c6a0cd8e6bc6baa02a547ce6062811da->enter($__internal_c4408823eb0ba997ccd81282e2e03ec6c6a0cd8e6bc6baa02a547ce6062811da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenidoIzda"));

        $__internal_4aba3b3adbe5df1e867a46d6949215cda390aeceee7c768f861e55b3a4e85404 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aba3b3adbe5df1e867a46d6949215cda390aeceee7c768f861e55b3a4e85404->enter($__internal_4aba3b3adbe5df1e867a46d6949215cda390aeceee7c768f861e55b3a4e85404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenidoIzda"));

        echo "Contenido izquierda";
        
        $__internal_4aba3b3adbe5df1e867a46d6949215cda390aeceee7c768f861e55b3a4e85404->leave($__internal_4aba3b3adbe5df1e867a46d6949215cda390aeceee7c768f861e55b3a4e85404_prof);

        
        $__internal_c4408823eb0ba997ccd81282e2e03ec6c6a0cd8e6bc6baa02a547ce6062811da->leave($__internal_c4408823eb0ba997ccd81282e2e03ec6c6a0cd8e6bc6baa02a547ce6062811da_prof);

    }

    // line 20
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_de261bfb978bf68622cd604375c52a73ad398d03e8ae151a4edd88e3899e1428 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de261bfb978bf68622cd604375c52a73ad398d03e8ae151a4edd88e3899e1428->enter($__internal_de261bfb978bf68622cd604375c52a73ad398d03e8ae151a4edd88e3899e1428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        $__internal_f6016ca1fc4865bd2c6e95ed8fc2f1305282b0bee23de310aeb529dab7cffa9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6016ca1fc4865bd2c6e95ed8fc2f1305282b0bee23de310aeb529dab7cffa9a->enter($__internal_f6016ca1fc4865bd2c6e95ed8fc2f1305282b0bee23de310aeb529dab7cffa9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        
        $__internal_f6016ca1fc4865bd2c6e95ed8fc2f1305282b0bee23de310aeb529dab7cffa9a->leave($__internal_f6016ca1fc4865bd2c6e95ed8fc2f1305282b0bee23de310aeb529dab7cffa9a_prof);

        
        $__internal_de261bfb978bf68622cd604375c52a73ad398d03e8ae151a4edd88e3899e1428->leave($__internal_de261bfb978bf68622cd604375c52a73ad398d03e8ae151a4edd88e3899e1428_prof);

    }

    // line 24
    public function block_js($context, array $blocks = array())
    {
        $__internal_d1fd4963210e6e6d90ea9e968e29456f563cbac884c671110106ce74e345f5c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1fd4963210e6e6d90ea9e968e29456f563cbac884c671110106ce74e345f5c9->enter($__internal_d1fd4963210e6e6d90ea9e968e29456f563cbac884c671110106ce74e345f5c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        $__internal_4fa72a16dee6665005e6b49e95dde7a4ebb2a74a66d761d133a5b00757be07c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fa72a16dee6665005e6b49e95dde7a4ebb2a74a66d761d133a5b00757be07c8->enter($__internal_4fa72a16dee6665005e6b49e95dde7a4ebb2a74a66d761d133a5b00757be07c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        
        $__internal_4fa72a16dee6665005e6b49e95dde7a4ebb2a74a66d761d133a5b00757be07c8->leave($__internal_4fa72a16dee6665005e6b49e95dde7a4ebb2a74a66d761d133a5b00757be07c8_prof);

        
        $__internal_d1fd4963210e6e6d90ea9e968e29456f563cbac884c671110106ce74e345f5c9->leave($__internal_d1fd4963210e6e6d90ea9e968e29456f563cbac884c671110106ce74e345f5c9_prof);

    }

    public function getTemplateName()
    {
        return "@Empresa/empresa.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  149 => 24,  132 => 20,  114 => 19,  96 => 7,  79 => 6,  68 => 25,  66 => 24,  59 => 20,  55 => 19,  39 => 7,  37 => 6,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
    <meta charset=\"utf-8\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\">
    {% block estilos %}{% endblock %}
<title>{% block titulo%}Proyecto Symfony{% endblock %}</title>
    </head>
    <body>
        <nav class=\"navbar navbar-inverse navbar-static-top\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a class=\"navbar-brand\" href=\"#\">EjemploDos columnas</a>
                </div>
            </div>
        </nav>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4\">{% block contenidoIzda %}Contenido izquierda{% endblock %}</div>
                <div class=\"col-md-8\">{% block contenido %}{% endblock %}</div>
            </div>
        </div>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" ></script>
         {% block js %}{% endblock %}
    </body>
</html>", "@Empresa/empresa.html.twig", "C:\\http\\php\\proy\\src\\EmpresaBundle\\Resources\\views\\empresa.html.twig");
    }
}
