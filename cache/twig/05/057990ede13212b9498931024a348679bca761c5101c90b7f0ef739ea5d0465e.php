<?php

/* home.twig */
class __TwigTemplate_5991ec8b512fcde6d89947d259277a9bd86d21e4a5fec5b4d73c7136908e6c5e extends Twig_Template
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
        // line 1
        echo "<html>
    <head>
        <meta charset=\"utf-8\"/>
        <title>Slim 3</title>
        <link href='//fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
        <link href='";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->baseUrl(), "html", null, true);
        echo "/css/style.css' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <h1>Slim</h1>
        <div>a microframework for PHP</div>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 6,  19 => 1,);
    }
}
/* <html>*/
/*     <head>*/
/*         <meta charset="utf-8"/>*/
/*         <title>Slim 3</title>*/
/*         <link href='//fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>*/
/*         <link href='{{ base_url() }}/css/style.css' rel='stylesheet' type='text/css'>*/
/*     </head>*/
/*     <body>*/
/*         <h1>Slim</h1>*/
/*         <div>a microframework for PHP</div>*/
/*     </body>*/
/* </html>*/
