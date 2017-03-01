<?php

/* layout.html */
class __TwigTemplate_b395412d67cdce96101c366e568b1038a787376056c309ac9f900d72644a75fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<body>
<header>头部</header>
<content>
    ";
        // line 6
        $this->displayBlock('content', $context, $blocks);
        // line 8
        echo "</content>
<footer>尾部</footer>
</body>
</html>";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "    ";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  36 => 6,  29 => 8,  27 => 6,  20 => 1,);
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
<body>
<header>头部</header>
<content>
    {% block content %}
    {% endblock %}
</content>
<footer>尾部</footer>
</body>
</html>", "layout.html", "H:\\WWW\\selfPHP\\mobile\\views\\layout.html");
    }
}
