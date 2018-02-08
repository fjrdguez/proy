<?php

/* dosColumnas.html.twig */
class __TwigTemplate_2d9ff2a2e677b133c81f9776570a48ce78508c04bafabf97b99f88822659f8ea extends Twig_Template
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
        $__internal_29dd9b5654179e5190a109c08c83750a9db7a9d8f884e17085ef2e49c342db9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29dd9b5654179e5190a109c08c83750a9db7a9d8f884e17085ef2e49c342db9f->enter($__internal_29dd9b5654179e5190a109c08c83750a9db7a9d8f884e17085ef2e49c342db9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dosColumnas.html.twig"));

        $__internal_efa9c25b563c7c90da69138c4228b31dc0e7f0074229d4d79f415f7ee7588383 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efa9c25b563c7c90da69138c4228b31dc0e7f0074229d4d79f415f7ee7588383->enter($__internal_efa9c25b563c7c90da69138c4228b31dc0e7f0074229d4d79f415f7ee7588383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dosColumnas.html.twig"));

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
        
        $__internal_29dd9b5654179e5190a109c08c83750a9db7a9d8f884e17085ef2e49c342db9f->leave($__internal_29dd9b5654179e5190a109c08c83750a9db7a9d8f884e17085ef2e49c342db9f_prof);

        
        $__internal_efa9c25b563c7c90da69138c4228b31dc0e7f0074229d4d79f415f7ee7588383->leave($__internal_efa9c25b563c7c90da69138c4228b31dc0e7f0074229d4d79f415f7ee7588383_prof);

    }

    // line 6
    public function block_estilos($context, array $blocks = array())
    {
        $__internal_eb491c83f2b2f7509d0702b9a9ed27f71d5952b9bcd58bf79f538cc9d135cd32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb491c83f2b2f7509d0702b9a9ed27f71d5952b9bcd58bf79f538cc9d135cd32->enter($__internal_eb491c83f2b2f7509d0702b9a9ed27f71d5952b9bcd58bf79f538cc9d135cd32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "estilos"));

        $__internal_d2fd628ab103dccbc9ba882d6240bbf2766eab9a069eb4d6557c34b911747795 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2fd628ab103dccbc9ba882d6240bbf2766eab9a069eb4d6557c34b911747795->enter($__internal_d2fd628ab103dccbc9ba882d6240bbf2766eab9a069eb4d6557c34b911747795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "estilos"));

        
        $__internal_d2fd628ab103dccbc9ba882d6240bbf2766eab9a069eb4d6557c34b911747795->leave($__internal_d2fd628ab103dccbc9ba882d6240bbf2766eab9a069eb4d6557c34b911747795_prof);

        
        $__internal_eb491c83f2b2f7509d0702b9a9ed27f71d5952b9bcd58bf79f538cc9d135cd32->leave($__internal_eb491c83f2b2f7509d0702b9a9ed27f71d5952b9bcd58bf79f538cc9d135cd32_prof);

    }

    // line 7
    public function block_titulo($context, array $blocks = array())
    {
        $__internal_ea3a1b36f4e916abfc9823a924c660d38abd39138ce255a30fce5810cd0b7c67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea3a1b36f4e916abfc9823a924c660d38abd39138ce255a30fce5810cd0b7c67->enter($__internal_ea3a1b36f4e916abfc9823a924c660d38abd39138ce255a30fce5810cd0b7c67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        $__internal_8f31368ada786744b737b1576d7eb77288635da8ee22214cd790878614cd7e7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f31368ada786744b737b1576d7eb77288635da8ee22214cd790878614cd7e7f->enter($__internal_8f31368ada786744b737b1576d7eb77288635da8ee22214cd790878614cd7e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        echo "Proyecto Symfony";
        
        $__internal_8f31368ada786744b737b1576d7eb77288635da8ee22214cd790878614cd7e7f->leave($__internal_8f31368ada786744b737b1576d7eb77288635da8ee22214cd790878614cd7e7f_prof);

        
        $__internal_ea3a1b36f4e916abfc9823a924c660d38abd39138ce255a30fce5810cd0b7c67->leave($__internal_ea3a1b36f4e916abfc9823a924c660d38abd39138ce255a30fce5810cd0b7c67_prof);

    }

    // line 19
    public function block_contenidoIzda($context, array $blocks = array())
    {
        $__internal_4b75b20e138a1b670494e2615fa7ace68315c4e5da016333d731ab8aadd8b64d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b75b20e138a1b670494e2615fa7ace68315c4e5da016333d731ab8aadd8b64d->enter($__internal_4b75b20e138a1b670494e2615fa7ace68315c4e5da016333d731ab8aadd8b64d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenidoIzda"));

        $__internal_d3d88057fdfcd117b7c7e5c50dc1b38e2ed329f34e1308c519fe92cc1acf07fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3d88057fdfcd117b7c7e5c50dc1b38e2ed329f34e1308c519fe92cc1acf07fc->enter($__internal_d3d88057fdfcd117b7c7e5c50dc1b38e2ed329f34e1308c519fe92cc1acf07fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenidoIzda"));

        echo "Contenido izquierda";
        
        $__internal_d3d88057fdfcd117b7c7e5c50dc1b38e2ed329f34e1308c519fe92cc1acf07fc->leave($__internal_d3d88057fdfcd117b7c7e5c50dc1b38e2ed329f34e1308c519fe92cc1acf07fc_prof);

        
        $__internal_4b75b20e138a1b670494e2615fa7ace68315c4e5da016333d731ab8aadd8b64d->leave($__internal_4b75b20e138a1b670494e2615fa7ace68315c4e5da016333d731ab8aadd8b64d_prof);

    }

    // line 20
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_4ff2d2fb3d6577950586368eb93a41b33e797e72cd4d53558c7302d8a244c95c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ff2d2fb3d6577950586368eb93a41b33e797e72cd4d53558c7302d8a244c95c->enter($__internal_4ff2d2fb3d6577950586368eb93a41b33e797e72cd4d53558c7302d8a244c95c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        $__internal_a90fe17b702537d2468c6ff3c9861538271104972694d9b189d1e34bece0e1cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a90fe17b702537d2468c6ff3c9861538271104972694d9b189d1e34bece0e1cf->enter($__internal_a90fe17b702537d2468c6ff3c9861538271104972694d9b189d1e34bece0e1cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        
        $__internal_a90fe17b702537d2468c6ff3c9861538271104972694d9b189d1e34bece0e1cf->leave($__internal_a90fe17b702537d2468c6ff3c9861538271104972694d9b189d1e34bece0e1cf_prof);

        
        $__internal_4ff2d2fb3d6577950586368eb93a41b33e797e72cd4d53558c7302d8a244c95c->leave($__internal_4ff2d2fb3d6577950586368eb93a41b33e797e72cd4d53558c7302d8a244c95c_prof);

    }

    // line 24
    public function block_js($context, array $blocks = array())
    {
        $__internal_97085ea8b68d51c2200b2bca550c6bc186b7ab77b49f456f11b5249bb0c47dd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97085ea8b68d51c2200b2bca550c6bc186b7ab77b49f456f11b5249bb0c47dd7->enter($__internal_97085ea8b68d51c2200b2bca550c6bc186b7ab77b49f456f11b5249bb0c47dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        $__internal_15ad0c83155b98f76407f2799543ad26d798f4d468218e580d8b7638f3f20037 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15ad0c83155b98f76407f2799543ad26d798f4d468218e580d8b7638f3f20037->enter($__internal_15ad0c83155b98f76407f2799543ad26d798f4d468218e580d8b7638f3f20037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        
        $__internal_15ad0c83155b98f76407f2799543ad26d798f4d468218e580d8b7638f3f20037->leave($__internal_15ad0c83155b98f76407f2799543ad26d798f4d468218e580d8b7638f3f20037_prof);

        
        $__internal_97085ea8b68d51c2200b2bca550c6bc186b7ab77b49f456f11b5249bb0c47dd7->leave($__internal_97085ea8b68d51c2200b2bca550c6bc186b7ab77b49f456f11b5249bb0c47dd7_prof);

    }

    public function getTemplateName()
    {
        return "dosColumnas.html.twig";
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
</html>", "dosColumnas.html.twig", "C:\\http\\php\\proy\\app\\Resources\\views\\dosColumnas.html.twig");
    }
}
