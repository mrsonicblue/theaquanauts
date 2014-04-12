<?php

/* tags.twig */
class __TwigTemplate_a2a8ef2397dea5a359296657edc6d8eb9f97c684ead9fc566e38db90d8afd1e9 extends Twig_Template
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
        echo "<li class=\"ai1ec-dropdown ai1ec-tag-filter
\t";
        // line 2
        if ((!twig_test_empty((isset($context["selected_cat_ids"]) ? $context["selected_cat_ids"] : null)))) {
            echo "ai1ec-active";
        }
        echo "\">
\t<a class=\"ai1ec-dropdown-toggle\" data-toggle=\"ai1ec-dropdown\">
\t\t<i class=\"ai1ec-fa ai1ec-fa-tags\"></i>
\t\t<span class=\"ai1ec-clear-filter ai1ec-tooltip-trigger\"
\t\t\tdata-href=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["clear_filter"]) ? $context["clear_filter"] : null), "html", null, true);
        echo "\"
\t\t\t";
        // line 7
        echo (isset($context["data_type"]) ? $context["data_type"] : null);
        echo "
\t\t\ttitle=\"";
        // line 8
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Clear tag filter"), "html", null, true);
        echo "\">
\t\t\t<i class=\"ai1ec-fa ai1ec-fa-times-circle\"></i>
\t\t</span>
\t\t";
        // line 11
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Tags"), "html", null, true);
        echo "
\t\t<span class=\"ai1ec-caret\"></span>
\t</a>
\t<div class=\"ai1ec-dropdown-menu\">
\t\t";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["term"]) {
            // line 16
            echo "\t\t\t<span data-term=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "term_id"), "html", null, true);
            echo "\"
\t\t\t\t";
            // line 17
            if (twig_in_filter($this->getAttribute((isset($context["term"]) ? $context["term"] : null), "term_id"), (isset($context["selected_tag_ids"]) ? $context["selected_tag_ids"] : null))) {
                // line 18
                echo "\t\t\t\t\tclass=\"ai1ec-active\"
\t\t\t\t";
            }
            // line 19
            echo ">
\t\t\t\t<a class=\"ai1ec-load-view ai1ec-tag\"
\t\t\t\t\t";
            // line 21
            if ((!twig_test_empty($this->getAttribute((isset($context["term"]) ? $context["term"] : null), "description")))) {
                // line 22
                echo "\t\t\t\t\t\ttitle=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "description"), "html_attr");
                echo "\"
\t\t\t\t\t";
            }
            // line 24
            echo "\t\t\t\t\t";
            echo (isset($context["data_type"]) ? $context["data_type"] : null);
            echo "
\t\t\t\t\thref=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "href"), "html_attr");
            echo "\">
\t\t\t\t\t";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "name"), "html", null, true);
            echo "
\t\t\t\t</a>
\t\t\t</span>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['term'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "\t</div>
</li>
";
    }

    public function getTemplateName()
    {
        return "tags.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 30,  39 => 8,  291 => 108,  283 => 105,  276 => 104,  269 => 103,  259 => 100,  242 => 92,  236 => 89,  233 => 88,  227 => 85,  221 => 83,  216 => 81,  210 => 78,  202 => 75,  199 => 74,  184 => 63,  174 => 59,  170 => 57,  162 => 54,  140 => 47,  137 => 46,  134 => 41,  132 => 40,  128 => 38,  107 => 29,  91 => 24,  87 => 23,  83 => 22,  62 => 15,  58 => 14,  45 => 11,  249 => 95,  245 => 93,  231 => 87,  224 => 84,  222 => 87,  211 => 83,  207 => 77,  201 => 78,  198 => 77,  195 => 76,  189 => 65,  186 => 72,  180 => 62,  178 => 67,  173 => 65,  165 => 59,  163 => 54,  158 => 51,  153 => 51,  150 => 48,  148 => 47,  143 => 45,  116 => 35,  111 => 34,  108 => 33,  106 => 32,  97 => 28,  93 => 27,  86 => 25,  81 => 24,  53 => 13,  82 => 21,  73 => 22,  64 => 15,  61 => 17,  70 => 17,  67 => 19,  26 => 4,  21 => 2,  617 => 344,  609 => 338,  602 => 334,  597 => 332,  593 => 331,  590 => 330,  587 => 329,  584 => 327,  575 => 321,  566 => 315,  560 => 312,  551 => 306,  542 => 300,  537 => 297,  534 => 296,  527 => 290,  521 => 288,  514 => 285,  512 => 284,  506 => 280,  500 => 278,  493 => 275,  491 => 274,  486 => 271,  478 => 265,  470 => 260,  456 => 249,  450 => 245,  444 => 243,  441 => 242,  433 => 237,  426 => 232,  424 => 231,  418 => 227,  412 => 225,  405 => 222,  403 => 221,  397 => 217,  391 => 215,  384 => 212,  382 => 211,  377 => 208,  371 => 203,  365 => 201,  358 => 198,  356 => 197,  351 => 194,  346 => 190,  340 => 187,  337 => 186,  331 => 183,  325 => 180,  322 => 179,  320 => 178,  316 => 176,  313 => 174,  307 => 170,  304 => 169,  296 => 163,  293 => 162,  289 => 160,  287 => 106,  280 => 154,  274 => 152,  267 => 102,  265 => 148,  260 => 145,  254 => 97,  248 => 94,  241 => 92,  239 => 91,  234 => 131,  225 => 124,  219 => 82,  212 => 116,  204 => 76,  197 => 69,  193 => 105,  183 => 71,  176 => 60,  172 => 93,  166 => 89,  157 => 52,  118 => 59,  100 => 48,  95 => 25,  92 => 43,  78 => 34,  76 => 32,  71 => 21,  69 => 28,  65 => 17,  59 => 15,  56 => 16,  54 => 17,  49 => 12,  46 => 8,  35 => 7,  30 => 6,  40 => 10,  32 => 4,  22 => 2,  164 => 55,  156 => 77,  151 => 78,  145 => 49,  139 => 44,  135 => 43,  131 => 42,  123 => 64,  117 => 34,  104 => 52,  89 => 26,  84 => 25,  80 => 39,  60 => 28,  52 => 15,  43 => 12,  34 => 7,  27 => 5,  48 => 9,  41 => 10,  33 => 7,  28 => 3,  24 => 3,  25 => 4,  36 => 9,  155 => 53,  149 => 50,  147 => 50,  144 => 49,  138 => 47,  136 => 46,  133 => 45,  127 => 41,  125 => 63,  122 => 35,  114 => 33,  112 => 32,  109 => 55,  101 => 27,  99 => 26,  96 => 46,  90 => 31,  88 => 26,  85 => 39,  79 => 24,  77 => 23,  74 => 19,  68 => 33,  66 => 16,  63 => 18,  57 => 14,  55 => 13,  50 => 12,  44 => 13,  42 => 12,  37 => 6,  31 => 6,  29 => 5,  23 => 3,  19 => 1,);
    }
}
