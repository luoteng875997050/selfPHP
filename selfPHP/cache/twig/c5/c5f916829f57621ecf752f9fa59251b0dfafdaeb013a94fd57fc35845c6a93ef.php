<?php

/* index.html */
class __TwigTemplate_0fd3ad2b62d801eaf036c193e33e37baaa6bd3564baa5793fd494955157a08bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "index.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo twig_escape_filter($this->env, (isset($context["data"]) ? $context["data"] : null), "html", null, true);
        echo "

<form name=\"myForm\" enctype=\"multipart/form-data\" method=\"POST\" action=\"/index/test\">
    <input type=\"file\" name=\"files[]\">
    <input type=\"file\" name=\"files[]\">
    <input type=\"file\" name=\"files[]\">
    <input type=\"submit\" name=\"submit\" value=\"上传\">
</form>
";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html\" %}
{% block content %}
{{data}}

<form name=\"myForm\" enctype=\"multipart/form-data\" method=\"POST\" action=\"/index/test\">
    <input type=\"file\" name=\"files[]\">
    <input type=\"file\" name=\"files[]\">
    <input type=\"file\" name=\"files[]\">
    <input type=\"submit\" name=\"submit\" value=\"上传\">
</form>
{% endblock %}", "index.html", "H:\\WWW\\selfPHP\\mobile\\views\\index.html");
    }
}
