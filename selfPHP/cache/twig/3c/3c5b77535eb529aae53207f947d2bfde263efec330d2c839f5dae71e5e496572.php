<?php

/* layout.html */
class __TwigTemplate_049bcd4d23be97828cc2aa858fe93a0629f69b55b5054f3d06146dd8ca2c0f55 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
        <!--<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">-->
        <!--<meta name=\"renderer\" content=\"webkit\">-->
        <!--<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">-->
        <!--<meta name=\"keywords\" content=\"selfPHP\">-->
        <!--<meta name=\"description\" content=\"selfPHP\">-->
        <title>起步,selfPHP</title>
        <link href=\"/www/uikit/css/uikit.min.css\" rel=\"stylesheet\">
        <script src=\"/www/js/jquery-1.7.2/jquery.js\"></script>
        <script src=\"/www/uikit/js/uikit.min.js\"></script>
        <!--<link type=\"image/x-icon\" href=\"favicon.ico\" rel=\"shortcut icon\">-->
        <!--<link href=\"favicon.ico\" rel=\"bookmark icon\">-->
    <style>
        .header-height{
            height: 68px;
            background: black;
            filter:alpha(Opacity=60);-moz-opacity:0.6;opacity: 0.6;
        }
        .test{
            background: red;
        }
    </style>
</head>
<body>
    <div class=\"uk-alert-danger uk-margin-remove uk-padding-remove\">
        <div class=\"uk-width-large-1-1 uk-grid uk-block-primary header-height\" data-uk-grid-match>
            <div class=\"uk-container uk-container-center test\">
                111111111
            </div>
        </div>
    </div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
        <!--<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">-->
        <!--<meta name=\"renderer\" content=\"webkit\">-->
        <!--<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">-->
        <!--<meta name=\"keywords\" content=\"selfPHP\">-->
        <!--<meta name=\"description\" content=\"selfPHP\">-->
        <title>起步,selfPHP</title>
        <link href=\"/www/uikit/css/uikit.min.css\" rel=\"stylesheet\">
        <script src=\"/www/js/jquery-1.7.2/jquery.js\"></script>
        <script src=\"/www/uikit/js/uikit.min.js\"></script>
        <!--<link type=\"image/x-icon\" href=\"favicon.ico\" rel=\"shortcut icon\">-->
        <!--<link href=\"favicon.ico\" rel=\"bookmark icon\">-->
    <style>
        .header-height{
            height: 68px;
            background: black;
            filter:alpha(Opacity=60);-moz-opacity:0.6;opacity: 0.6;
        }
        .test{
            background: red;
        }
    </style>
</head>
<body>
    <div class=\"uk-alert-danger uk-margin-remove uk-padding-remove\">
        <div class=\"uk-width-large-1-1 uk-grid uk-block-primary header-height\" data-uk-grid-match>
            <div class=\"uk-container uk-container-center test\">
                111111111
            </div>
        </div>
    </div>
</body>
</html>", "layout.html", "H:\\WWW\\selfPHP\\app\\views\\layout.html");
    }
}
