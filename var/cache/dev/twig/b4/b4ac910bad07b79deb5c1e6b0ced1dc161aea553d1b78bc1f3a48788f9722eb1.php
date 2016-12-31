<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_81faf4f81c52739da9092b151a38cfefbcf161af21a8f60ae4983768ff068d12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c56d663d0dbd52ead3a09fef4b5d639b6c45584333ba416a8b4fedac157ae111 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c56d663d0dbd52ead3a09fef4b5d639b6c45584333ba416a8b4fedac157ae111->enter($__internal_c56d663d0dbd52ead3a09fef4b5d639b6c45584333ba416a8b4fedac157ae111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_f474c4cd3177578f55805c7852786fecc8033c49bc6968c289292cf0777043ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f474c4cd3177578f55805c7852786fecc8033c49bc6968c289292cf0777043ce->enter($__internal_f474c4cd3177578f55805c7852786fecc8033c49bc6968c289292cf0777043ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c56d663d0dbd52ead3a09fef4b5d639b6c45584333ba416a8b4fedac157ae111->leave($__internal_c56d663d0dbd52ead3a09fef4b5d639b6c45584333ba416a8b4fedac157ae111_prof);

        
        $__internal_f474c4cd3177578f55805c7852786fecc8033c49bc6968c289292cf0777043ce->leave($__internal_f474c4cd3177578f55805c7852786fecc8033c49bc6968c289292cf0777043ce_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5da1f692ecedffc89b9d2966b0446cb485f50673515b1edca5f34b5ffcadc0e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5da1f692ecedffc89b9d2966b0446cb485f50673515b1edca5f34b5ffcadc0e7->enter($__internal_5da1f692ecedffc89b9d2966b0446cb485f50673515b1edca5f34b5ffcadc0e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_82eccb7022d457f5aaf78bb0eafc80009c5a91bef3a47f0e8ae48d5962f9a465 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82eccb7022d457f5aaf78bb0eafc80009c5a91bef3a47f0e8ae48d5962f9a465->enter($__internal_82eccb7022d457f5aaf78bb0eafc80009c5a91bef3a47f0e8ae48d5962f9a465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_82eccb7022d457f5aaf78bb0eafc80009c5a91bef3a47f0e8ae48d5962f9a465->leave($__internal_82eccb7022d457f5aaf78bb0eafc80009c5a91bef3a47f0e8ae48d5962f9a465_prof);

        
        $__internal_5da1f692ecedffc89b9d2966b0446cb485f50673515b1edca5f34b5ffcadc0e7->leave($__internal_5da1f692ecedffc89b9d2966b0446cb485f50673515b1edca5f34b5ffcadc0e7_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_6251ac109faa2c76378daa82f0a0999c4e759f808b8b52b55f39f3cf2d96dd2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6251ac109faa2c76378daa82f0a0999c4e759f808b8b52b55f39f3cf2d96dd2f->enter($__internal_6251ac109faa2c76378daa82f0a0999c4e759f808b8b52b55f39f3cf2d96dd2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8d2269e31afe4603cbe230e1fee1c89ed08183f1a5125b3c1110d8f76352e5f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d2269e31afe4603cbe230e1fee1c89ed08183f1a5125b3c1110d8f76352e5f9->enter($__internal_8d2269e31afe4603cbe230e1fee1c89ed08183f1a5125b3c1110d8f76352e5f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8d2269e31afe4603cbe230e1fee1c89ed08183f1a5125b3c1110d8f76352e5f9->leave($__internal_8d2269e31afe4603cbe230e1fee1c89ed08183f1a5125b3c1110d8f76352e5f9_prof);

        
        $__internal_6251ac109faa2c76378daa82f0a0999c4e759f808b8b52b55f39f3cf2d96dd2f->leave($__internal_6251ac109faa2c76378daa82f0a0999c4e759f808b8b52b55f39f3cf2d96dd2f_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_001d8e7a26ede41953318c365b0c95b82b249297151b14b32cf54271c483a654 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_001d8e7a26ede41953318c365b0c95b82b249297151b14b32cf54271c483a654->enter($__internal_001d8e7a26ede41953318c365b0c95b82b249297151b14b32cf54271c483a654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ce2973c483bcb6cf617d428824af5e6a5342a3c095d08f2432c6441bf3c1fc3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce2973c483bcb6cf617d428824af5e6a5342a3c095d08f2432c6441bf3c1fc3b->enter($__internal_ce2973c483bcb6cf617d428824af5e6a5342a3c095d08f2432c6441bf3c1fc3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_ce2973c483bcb6cf617d428824af5e6a5342a3c095d08f2432c6441bf3c1fc3b->leave($__internal_ce2973c483bcb6cf617d428824af5e6a5342a3c095d08f2432c6441bf3c1fc3b_prof);

        
        $__internal_001d8e7a26ede41953318c365b0c95b82b249297151b14b32cf54271c483a654->leave($__internal_001d8e7a26ede41953318c365b0c95b82b249297151b14b32cf54271c483a654_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/david/Code/bluestone/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
