<?php

/* categories-select.twig */
class __TwigTemplate_d5534964082ced02ecd994d75005f0d9b866395f204fe90183b80f1c95fa81d5 extends Twig_Template
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
        echo "<select class=\"ai1ec-categories-selector ai1ec-select2-multiselect-selector\"
\tid=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "\"
\tplaceholder=\"";
        // line 3
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Categories (optional)"), "html_attr");
        echo "\"
\tdata-placeholder=\"";
        // line 4
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("Categories (optional)"), "html_attr");
        echo "\"
\tmultiple=\"multiple\">
\t";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["term"]) {
            // line 7
            echo "\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "term_id"), "html", null, true);
            echo "\"
\t\t\t";
            // line 8
            if (twig_in_filter($this->getAttribute((isset($context["term"]) ? $context["term"] : null), "term_id"), (isset($context["selected_cat_ids"]) ? $context["selected_cat_ids"] : null))) {
                // line 9
                echo "      \tselected=\"selected\"
      ";
            }
            // line 11
            echo "\t\t\t";
            if ((!twig_test_empty($this->getAttribute((isset($context["term"]) ? $context["term"] : null), "description")))) {
                // line 12
                echo "\t\t\t\tdata-description=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "description"), "html_attr");
                echo "\"
\t\t\t";
            }
            // line 14
            echo "\t\t\t";
            if ((!twig_test_empty($this->getAttribute((isset($context["term"]) ? $context["term"] : null), "color")))) {
                // line 15
                echo "\t\t\t\tdata-color=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "color"), "html_attr");
                echo "\"
\t\t\t";
            }
            // line 17
            echo "\t\t\t>
\t\t\t";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "name"), "html", null, true);
            echo "
\t\t</option>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['term'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "</select>
";
    }

    public function getTemplateName()
    {
        return "categories-select.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 21,  73 => 18,  64 => 15,  61 => 14,  70 => 17,  67 => 23,  26 => 4,  21 => 2,  617 => 344,  609 => 338,  602 => 334,  597 => 332,  593 => 331,  590 => 330,  587 => 329,  584 => 327,  575 => 321,  566 => 315,  560 => 312,  551 => 306,  542 => 300,  537 => 297,  534 => 296,  527 => 290,  521 => 288,  514 => 285,  512 => 284,  506 => 280,  500 => 278,  493 => 275,  491 => 274,  486 => 271,  478 => 265,  470 => 260,  456 => 249,  450 => 245,  444 => 243,  441 => 242,  433 => 237,  426 => 232,  424 => 231,  418 => 227,  412 => 225,  405 => 222,  403 => 221,  397 => 217,  391 => 215,  384 => 212,  382 => 211,  377 => 208,  371 => 203,  365 => 201,  358 => 198,  356 => 197,  351 => 194,  346 => 190,  340 => 187,  337 => 186,  331 => 183,  325 => 180,  322 => 179,  320 => 178,  316 => 176,  313 => 174,  307 => 170,  304 => 169,  296 => 163,  293 => 162,  289 => 160,  287 => 159,  280 => 154,  274 => 152,  267 => 149,  265 => 148,  260 => 145,  254 => 140,  248 => 138,  241 => 135,  239 => 134,  234 => 131,  225 => 124,  219 => 121,  212 => 116,  204 => 110,  197 => 106,  193 => 105,  183 => 98,  176 => 94,  172 => 93,  166 => 89,  157 => 82,  118 => 59,  100 => 48,  95 => 45,  92 => 43,  78 => 34,  76 => 32,  71 => 29,  69 => 28,  65 => 26,  59 => 23,  56 => 19,  54 => 17,  49 => 14,  46 => 8,  35 => 9,  30 => 7,  40 => 11,  32 => 4,  22 => 2,  164 => 83,  156 => 77,  151 => 78,  145 => 74,  139 => 71,  135 => 70,  131 => 66,  123 => 64,  117 => 61,  104 => 52,  89 => 42,  84 => 40,  80 => 39,  60 => 28,  52 => 11,  43 => 12,  34 => 11,  27 => 7,  48 => 9,  41 => 7,  33 => 7,  28 => 3,  24 => 3,  25 => 3,  36 => 5,  155 => 53,  149 => 51,  147 => 50,  144 => 49,  138 => 47,  136 => 46,  133 => 45,  127 => 65,  125 => 63,  122 => 41,  114 => 58,  112 => 38,  109 => 55,  101 => 35,  99 => 34,  96 => 46,  90 => 31,  88 => 30,  85 => 39,  79 => 27,  77 => 38,  74 => 37,  68 => 33,  66 => 23,  63 => 21,  57 => 18,  55 => 12,  50 => 15,  44 => 13,  42 => 12,  37 => 6,  31 => 7,  29 => 6,  23 => 3,  19 => 1,);
    }
}
