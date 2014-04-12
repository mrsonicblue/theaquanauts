<?php

/* ai1ecv-event-single.twig */
class __TwigTemplate_459fd657fa826395bd6509a4f51bbaa44097df8f66cf2425f501ee29cc63851c extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["venues"]) ? $context["venues"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["venue"]) {
            // line 2
            echo "\t<a href='#ai1ec-venue-details' class='ai1ecv_venue' data-toggle=\"ai1ec-modal\" data-venue_id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["venue"]) ? $context["venue"] : null), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["venue"]) ? $context["venue"] : null), "name"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["venue"]) ? $context["venue"] : null), "address"), "html", null, true);
            echo "</a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['venue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4
        echo "
<div class=\"ai1ec-modal ai1ec-fade timely\" id=\"ai1ec-venue-details\">
\t<div class=\"ai1ec-modal-dialog\">
\t\t<div class=\"ai1ec-modal-content\">
\t\t\t<div class=\"ai1ec-loading ai1ec-show\"></div>
\t\t\t<div class=\"ai1ec-ajax-placeholder\">
\t\t\t\t<!-- Form content is loaded here via AJAX. -->
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "ai1ecv-event-single.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 4,  155 => 53,  149 => 51,  147 => 50,  144 => 49,  138 => 47,  136 => 46,  133 => 45,  127 => 43,  125 => 42,  122 => 41,  114 => 39,  112 => 38,  109 => 37,  101 => 35,  99 => 34,  96 => 33,  90 => 31,  88 => 30,  85 => 29,  79 => 27,  77 => 26,  74 => 25,  68 => 23,  66 => 22,  63 => 21,  57 => 19,  55 => 18,  50 => 15,  44 => 13,  42 => 12,  37 => 9,  31 => 7,  29 => 6,  23 => 2,  19 => 1,);
    }
}
