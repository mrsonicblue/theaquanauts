<?php

/* tags-select.twig */
class __TwigTemplate_4c1667724a02b6e3ff762901e55bfe105eb43980a28b43d4e1e508b43fa37f1e extends Twig_Template
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
        echo "<input type=\"text\" class=\"ai1ec-tags-selector\"
\tid=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "\"
\tplaceholder=\"";
        // line 3
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Tags (optional)"), "html_attr");
        echo "\"
\tdata-placeholder=\"";
        // line 4
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Tags (optional)"), "html_attr");
        echo "\"
\tdata-ai1ec-tags='";
        // line 5
        echo (isset($context["tags_json"]) ? $context["tags_json"] : null);
        echo "'
\tvalue=\"";
        // line 6
        echo (isset($context["selected_tag_ids"]) ? $context["selected_tag_ids"] : null);
        echo "\" />
";
    }

    public function getTemplateName()
    {
        return "tags-select.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  32 => 4,  22 => 2,  164 => 83,  156 => 77,  151 => 74,  145 => 71,  139 => 68,  135 => 67,  131 => 66,  123 => 64,  117 => 61,  104 => 52,  89 => 42,  84 => 40,  80 => 39,  60 => 28,  52 => 23,  43 => 17,  34 => 11,  27 => 7,  48 => 16,  41 => 12,  33 => 7,  28 => 3,  24 => 4,  25 => 3,  36 => 5,  155 => 53,  149 => 51,  147 => 50,  144 => 49,  138 => 47,  136 => 46,  133 => 45,  127 => 65,  125 => 42,  122 => 41,  114 => 60,  112 => 38,  109 => 37,  101 => 35,  99 => 34,  96 => 46,  90 => 31,  88 => 30,  85 => 29,  79 => 27,  77 => 38,  74 => 37,  68 => 33,  66 => 22,  63 => 21,  57 => 19,  55 => 18,  50 => 15,  44 => 13,  42 => 12,  37 => 9,  31 => 7,  29 => 6,  23 => 2,  19 => 1,);
    }
}
