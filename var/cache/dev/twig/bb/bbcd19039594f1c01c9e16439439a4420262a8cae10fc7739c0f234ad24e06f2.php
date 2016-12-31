<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_71aea15600858ff939ba81b62f78a5c2df768d43c4cf9e358bef4c3ab7a62e92 extends Twig_Template
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
        $__internal_b77736d4e3807ff79aabbc97e0980234a29aeabae29e3361e1a18032d5bc9b7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b77736d4e3807ff79aabbc97e0980234a29aeabae29e3361e1a18032d5bc9b7e->enter($__internal_b77736d4e3807ff79aabbc97e0980234a29aeabae29e3361e1a18032d5bc9b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_24ff8601d68de5754793db883c269aae8b492e0434403c4fdcdf3f43d310968b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24ff8601d68de5754793db883c269aae8b492e0434403c4fdcdf3f43d310968b->enter($__internal_24ff8601d68de5754793db883c269aae8b492e0434403c4fdcdf3f43d310968b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_b77736d4e3807ff79aabbc97e0980234a29aeabae29e3361e1a18032d5bc9b7e->leave($__internal_b77736d4e3807ff79aabbc97e0980234a29aeabae29e3361e1a18032d5bc9b7e_prof);

        
        $__internal_24ff8601d68de5754793db883c269aae8b492e0434403c4fdcdf3f43d310968b->leave($__internal_24ff8601d68de5754793db883c269aae8b492e0434403c4fdcdf3f43d310968b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
