<?php

/* ai1ecen_subscribe_button.twig */
class __TwigTemplate_fdbcd76e1e18e00c79404d9225d934edfc53e4f986ab257f592e39e765a86c42 extends Twig_Template
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
        echo "<a class=\"btn btn-small ai1ec-subscribe-mail\" href=\"#ai1ec_subscribe_email_modal\" data-toggle=\"ai1ec_modal\" title=\"";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "\">
    <i class=\"icon-envelope icon-large\"></i>
    ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
        echo "
</a>";
    }

    public function getTemplateName()
    {
        return "ai1ecen_subscribe_button.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 3,  36 => 4,  155 => 53,  149 => 51,  147 => 50,  144 => 49,  138 => 47,  136 => 46,  133 => 45,  127 => 43,  125 => 42,  122 => 41,  114 => 39,  112 => 38,  109 => 37,  101 => 35,  99 => 34,  96 => 33,  90 => 31,  88 => 30,  85 => 29,  79 => 27,  77 => 26,  74 => 25,  68 => 23,  66 => 22,  63 => 21,  57 => 19,  55 => 18,  50 => 15,  44 => 13,  42 => 12,  37 => 9,  31 => 7,  29 => 6,  23 => 2,  19 => 1,);
    }
}
