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
        $__internal_cf6800d245fc3a98b2fa56daf0dc37d38a00190dc75ba090787670ec4bf37f41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf6800d245fc3a98b2fa56daf0dc37d38a00190dc75ba090787670ec4bf37f41->enter($__internal_cf6800d245fc3a98b2fa56daf0dc37d38a00190dc75ba090787670ec4bf37f41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_618b9400a72e5ac77f608416fad1eff7ab5a488edae73ffacf0a1ef410704c8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_618b9400a72e5ac77f608416fad1eff7ab5a488edae73ffacf0a1ef410704c8c->enter($__internal_618b9400a72e5ac77f608416fad1eff7ab5a488edae73ffacf0a1ef410704c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_cf6800d245fc3a98b2fa56daf0dc37d38a00190dc75ba090787670ec4bf37f41->leave($__internal_cf6800d245fc3a98b2fa56daf0dc37d38a00190dc75ba090787670ec4bf37f41_prof);

        
        $__internal_618b9400a72e5ac77f608416fad1eff7ab5a488edae73ffacf0a1ef410704c8c->leave($__internal_618b9400a72e5ac77f608416fad1eff7ab5a488edae73ffacf0a1ef410704c8c_prof);

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
