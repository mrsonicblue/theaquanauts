<?php

/* views_dropdown.twig */
class __TwigTemplate_972b1920bee3b857b152e754b9f920fe5065b8f9abc31051af675f88ead09161 extends Twig_Template
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
        if ((twig_length_filter($this->env, (isset($context["available_views"]) ? $context["available_views"] : null)) > 1)) {
            // line 2
            echo "\t<li class=\"ai1ec-views-dropdown ai1ec-dropdown\">
\t\t<a class=\"ai1ec-dropdown-toggle\" data-toggle=\"ai1ec-dropdown\">
\t\t\t<img src=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->theme_img_url(((isset($context["current_view"]) ? $context["current_view"] : null) . "-view.png")), "html", null, true);
            echo "\"
\t\t\t\talt=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view_names"]) ? $context["view_names"] : null), (isset($context["current_view"]) ? $context["current_view"] : null), array(), "array"), "html", null, true);
            echo "\" />
\t\t\t";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view_names"]) ? $context["view_names"] : null), (isset($context["current_view"]) ? $context["current_view"] : null), array(), "array"), "html", null, true);
            echo "
\t\t\t<span class=\"ai1ec-caret\"></span>
\t\t</a>
\t\t<div class=\"ai1ec-dropdown-menu\">
\t\t\t";
            // line 10
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["available_views"]) ? $context["available_views"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["args"]) {
                // line 11
                echo "\t\t\t\t<div class=\"";
                if (((isset($context["key"]) ? $context["key"] : null) == (isset($context["current_view"]) ? $context["current_view"] : null))) {
                    echo "ai1ec-active";
                }
                echo "\"
\t\t\t\t\tdata-action=\"";
                // line 12
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\">
\t\t\t\t\t<a id=\"ai1ec-view-";
                // line 13
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\"
\t\t\t\t\t\t";
                // line 14
                echo (isset($context["data_type"]) ? $context["data_type"] : null);
                echo "
\t\t\t\t\t\tclass=\"ai1ec-load-view ";
                // line 15
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\"
\t\t\t\t\t\thref=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["available_views"]) ? $context["available_views"] : null), (isset($context["key"]) ? $context["key"] : null), array(), "array"), "href"), "html", null, true);
                echo "\">
\t\t\t\t\t\t<img src=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->theme_img_url(((isset($context["key"]) ? $context["key"] : null) . "-view.png")), "html", null, true);
                echo "\"
\t\t\t\t\t\t\talt=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["available_views"]) ? $context["available_views"] : null), (isset($context["key"]) ? $context["key"] : null), array(), "array"), "desc"), "html", null, true);
                echo "\" />
\t\t\t\t\t\t";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["available_views"]) ? $context["available_views"] : null), (isset($context["key"]) ? $context["key"] : null), array(), "array"), "desc"), "html", null, true);
                echo "
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['args'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "\t\t</div>
\t</li>
";
        }
    }

    public function getTemplateName()
    {
        return "views_dropdown.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  618 => 70,  615 => 67,  612 => 66,  605 => 28,  601 => 27,  592 => 25,  589 => 24,  578 => 170,  572 => 166,  570 => 165,  554 => 163,  552 => 162,  535 => 160,  528 => 155,  523 => 153,  520 => 152,  518 => 151,  508 => 147,  503 => 144,  499 => 142,  496 => 141,  492 => 139,  490 => 138,  479 => 134,  473 => 133,  467 => 132,  461 => 131,  455 => 130,  451 => 129,  446 => 128,  443 => 127,  440 => 126,  438 => 125,  434 => 124,  430 => 123,  422 => 121,  415 => 120,  410 => 119,  406 => 118,  402 => 117,  398 => 116,  393 => 114,  389 => 113,  381 => 111,  364 => 110,  359 => 107,  355 => 105,  323 => 95,  310 => 90,  305 => 88,  292 => 85,  279 => 81,  262 => 80,  253 => 76,  251 => 75,  235 => 73,  218 => 71,  205 => 60,  200 => 58,  196 => 57,  191 => 55,  160 => 45,  105 => 36,  72 => 18,  38 => 6,  47 => 12,  75 => 18,  308 => 88,  306 => 87,  302 => 86,  299 => 87,  294 => 78,  284 => 73,  271 => 68,  266 => 66,  264 => 65,  258 => 79,  209 => 57,  194 => 50,  192 => 49,  188 => 48,  175 => 42,  169 => 47,  159 => 35,  152 => 33,  141 => 30,  102 => 26,  94 => 23,  51 => 12,  98 => 30,  39 => 10,  291 => 77,  283 => 105,  276 => 70,  269 => 67,  259 => 100,  242 => 61,  236 => 89,  233 => 72,  227 => 60,  221 => 83,  216 => 66,  210 => 62,  202 => 59,  199 => 74,  184 => 46,  174 => 49,  170 => 57,  162 => 54,  140 => 43,  137 => 46,  134 => 41,  132 => 40,  128 => 38,  107 => 29,  91 => 32,  87 => 23,  83 => 24,  62 => 19,  58 => 18,  45 => 11,  249 => 95,  245 => 93,  231 => 87,  224 => 84,  222 => 87,  211 => 83,  207 => 56,  201 => 78,  198 => 77,  195 => 76,  189 => 65,  186 => 72,  180 => 62,  178 => 50,  173 => 65,  165 => 46,  163 => 54,  158 => 51,  153 => 51,  150 => 48,  148 => 32,  143 => 44,  116 => 35,  111 => 34,  108 => 33,  106 => 28,  97 => 28,  93 => 27,  86 => 30,  81 => 29,  53 => 16,  82 => 20,  73 => 26,  64 => 22,  61 => 17,  70 => 17,  67 => 16,  26 => 5,  21 => 2,  617 => 344,  609 => 338,  602 => 334,  597 => 26,  593 => 331,  590 => 330,  587 => 329,  584 => 5,  575 => 321,  566 => 315,  560 => 312,  551 => 306,  542 => 300,  537 => 297,  534 => 296,  527 => 290,  521 => 288,  514 => 150,  512 => 284,  506 => 280,  500 => 278,  493 => 275,  491 => 274,  486 => 136,  478 => 265,  470 => 260,  456 => 249,  450 => 245,  444 => 243,  441 => 242,  433 => 237,  426 => 122,  424 => 231,  418 => 227,  412 => 225,  405 => 222,  403 => 221,  397 => 217,  391 => 215,  384 => 112,  382 => 211,  377 => 208,  371 => 203,  365 => 201,  358 => 198,  356 => 197,  351 => 194,  346 => 101,  340 => 99,  337 => 98,  331 => 97,  325 => 180,  322 => 179,  320 => 94,  316 => 93,  313 => 91,  307 => 170,  304 => 169,  296 => 86,  293 => 162,  289 => 84,  287 => 83,  280 => 72,  274 => 69,  267 => 102,  265 => 148,  260 => 64,  254 => 97,  248 => 94,  241 => 92,  239 => 91,  234 => 131,  225 => 59,  219 => 82,  212 => 116,  204 => 76,  197 => 51,  193 => 105,  183 => 52,  176 => 60,  172 => 93,  166 => 38,  157 => 52,  118 => 59,  100 => 48,  95 => 25,  92 => 43,  78 => 19,  76 => 32,  71 => 17,  69 => 28,  65 => 17,  59 => 14,  56 => 10,  54 => 17,  49 => 12,  46 => 8,  35 => 7,  30 => 5,  40 => 10,  32 => 8,  22 => 2,  164 => 37,  156 => 77,  151 => 78,  145 => 49,  139 => 44,  135 => 43,  131 => 42,  123 => 29,  117 => 34,  104 => 52,  89 => 23,  84 => 25,  80 => 23,  60 => 28,  52 => 14,  43 => 12,  34 => 10,  27 => 6,  48 => 15,  41 => 14,  33 => 6,  28 => 3,  24 => 3,  25 => 4,  36 => 8,  155 => 53,  149 => 50,  147 => 50,  144 => 31,  138 => 47,  136 => 46,  133 => 45,  127 => 41,  125 => 38,  122 => 37,  114 => 33,  112 => 32,  109 => 55,  101 => 34,  99 => 26,  96 => 24,  90 => 22,  88 => 26,  85 => 31,  79 => 19,  77 => 23,  74 => 19,  68 => 22,  66 => 14,  63 => 15,  57 => 20,  55 => 13,  50 => 13,  44 => 11,  42 => 12,  37 => 10,  31 => 7,  29 => 5,  23 => 3,  19 => 1,);
    }
}
