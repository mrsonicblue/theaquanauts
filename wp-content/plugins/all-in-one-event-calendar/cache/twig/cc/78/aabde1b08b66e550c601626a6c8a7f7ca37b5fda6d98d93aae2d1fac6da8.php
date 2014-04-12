<?php

/* ai1ecv-venue-details.twig */
class __TwigTemplate_cc78aabde1b08b66e550c601626a6c8a7f7ca37b5fda6d98d93aae2d1fac6da8 extends Twig_Template
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
        echo "<div class=\"ai1ec-modal-header\">
\t<button type=\"button\" class=\"ai1ec-close\" data-dismiss=\"ai1ec-modal\">×</button>
\t<h2>";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "</h2>
</div>

";
        // line 6
        if ((isset($context["image"]) ? $context["image"] : null)) {
            // line 7
            echo "\t<img src='";
            echo twig_escape_filter($this->env, (isset($context["image"]) ? $context["image"] : null), "html", null, true);
            echo "' alt='' class='ai1ecv-details-image' />
";
        }
        // line 9
        echo "
<div class=\"ai1ec-event-details ai1ec-clearfix\">

\t";
        // line 12
        if ((!twig_test_empty((isset($context["map_address"]) ? $context["map_address"] : null)))) {
            // line 13
            echo "\t\t<div id='ai1ecv_map_container' class='ai1ec-col-sm-7' data-address='";
            echo twig_escape_filter($this->env, (isset($context["map_address"]) ? $context["map_address"] : null), "html", null, true);
            echo "'></div>
\t";
        }
        // line 15
        echo "
\t<div class=\"ai1ec-time ai1ec-row\">
\t\t<div class=\"ai1ec-field-value ai1ec-col-sm-4\">
\t\t\t";
        // line 18
        if ((!twig_test_empty((isset($context["description"]) ? $context["description"] : null)))) {
            // line 19
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, (isset($context["description"]) ? $context["description"] : null), "html_attr");
            echo "<br />
\t\t\t";
        }
        // line 21
        echo "
\t\t\t";
        // line 22
        if ((!twig_test_empty((isset($context["address"]) ? $context["address"] : null)))) {
            // line 23
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, (isset($context["address"]) ? $context["address"] : null), "html_attr");
            echo "<br />
\t\t\t";
        }
        // line 25
        echo "
\t\t\t";
        // line 26
        if ((!twig_test_empty((isset($context["contact_name"]) ? $context["contact_name"] : null)))) {
            // line 27
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, (isset($context["contact_name"]) ? $context["contact_name"] : null), "html_attr");
            echo "<br />
\t\t\t";
        }
        // line 29
        echo "
\t\t\t";
        // line 30
        if ((!twig_test_empty((isset($context["phone"]) ? $context["phone"] : null)))) {
            // line 31
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, (isset($context["phone"]) ? $context["phone"] : null), "html_attr");
            echo "<br />
\t\t\t";
        }
        // line 33
        echo "
\t\t\t";
        // line 34
        if ((isset($context["email"]) ? $context["email"] : null)) {
            // line 35
            echo "\t\t\t\t<a href='mailto:";
            echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : null), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : null), "html", null, true);
            echo "</a><br />
\t\t\t";
        }
        // line 37
        echo "
\t\t\t";
        // line 38
        if ((isset($context["url"]) ? $context["url"] : null)) {
            // line 39
            echo "\t\t\t\t<a href='";
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "' target='_blank'>";
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Website"), "html", null, true);
            echo "</a><br />
\t\t\t";
        }
        // line 41
        echo "
\t\t\t";
        // line 42
        if ((!twig_test_empty((isset($context["capacity"]) ? $context["capacity"] : null)))) {
            // line 43
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, (isset($context["capacity"]) ? $context["capacity"] : null), "html_attr");
            echo "<br />
\t\t\t";
        }
        // line 45
        echo "
\t\t\t";
        // line 46
        if ((!twig_test_empty((isset($context["handicap"]) ? $context["handicap"] : null)))) {
            // line 47
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Handicap accessible"), "html", null, true);
            echo "
\t\t\t";
        }
        // line 49
        echo "
\t\t\t";
        // line 50
        if ((!twig_test_empty((isset($context["parking"]) ? $context["parking"] : null)))) {
            // line 51
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, (isset($context["parking"]) ? $context["parking"] : null), "html_attr");
            echo "<br />
\t\t\t";
        }
        // line 53
        echo "
\t\t</div>
\t</div>

</div>

";
    }

    public function getTemplateName()
    {
        return "ai1ecv-venue-details.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 53,  149 => 51,  147 => 50,  144 => 49,  138 => 47,  136 => 46,  133 => 45,  127 => 43,  125 => 42,  122 => 41,  114 => 39,  112 => 38,  109 => 37,  101 => 35,  99 => 34,  96 => 33,  90 => 31,  88 => 30,  85 => 29,  79 => 27,  77 => 26,  74 => 25,  68 => 23,  66 => 22,  63 => 21,  57 => 19,  55 => 18,  50 => 15,  44 => 13,  42 => 12,  37 => 9,  31 => 7,  29 => 6,  23 => 3,  19 => 1,);
    }
}
