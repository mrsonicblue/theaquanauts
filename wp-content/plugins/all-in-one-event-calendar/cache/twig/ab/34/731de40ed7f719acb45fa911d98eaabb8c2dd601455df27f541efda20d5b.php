<?php

/* event-map.twig */
class __TwigTemplate_ab34731de40ed7f719acb45fa911d98eaabb8c2dd601455df27f541efda20d5b extends Twig_Template
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
        if ((isset($context["hide_maps_until_clicked"]) ? $context["hide_maps_until_clicked"] : null)) {
            // line 2
            echo "  <div class=\"ai1ec-gmap-placeholder\"><strong>
    <i class=\"ai1ec-fa ai1ec-fa-map-marker\"></i>
    ";
            // line 4
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Click to view map"), "html", null, true);
            echo "
  </strong></div>
";
        }
        // line 7
        echo "<div class=\"ai1ec-gmap-container
  ";
        // line 8
        if ((isset($context["hide_maps_until_clicked"]) ? $context["hide_maps_until_clicked"] : null)) {
            echo "ai1ec-gmap-container-hidden";
        }
        echo "\">
\t<div id=\"ai1ec-gmap-canvas\"></div>
\t<input type=\"hidden\" id=\"ai1ec-gmap-address\"
    value=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["address"]) ? $context["address"] : null), "html_attr");
        echo "\" />
\t<a class=\"ai1ec-gmap-link ai1ec-btn ai1ec-btn-primary ai1ec-btn-xs
    ai1ec-tooltip-trigger\"
\t\thref=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["gmap_url_link"]) ? $context["gmap_url_link"] : null), "html_attr");
        echo "\" target=\"_blank\"
    title=\"";
        // line 15
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("View Full-Size Map"), "html", null, true);
        echo "\"
    data-placement=\"bottom\">
    <i class=\"ai1ec-fa ai1ec-fa-search-plus ai1ec-fa-lg\"></i>
\t</a>
</div>
";
    }

    public function getTemplateName()
    {
        return "event-map.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  47 => 12,  75 => 27,  308 => 88,  306 => 87,  302 => 86,  299 => 85,  294 => 78,  284 => 73,  271 => 68,  266 => 66,  264 => 65,  258 => 63,  209 => 57,  194 => 50,  192 => 49,  188 => 48,  175 => 42,  169 => 39,  159 => 35,  152 => 33,  141 => 30,  102 => 26,  94 => 23,  51 => 15,  98 => 30,  39 => 10,  291 => 77,  283 => 105,  276 => 70,  269 => 67,  259 => 100,  242 => 61,  236 => 89,  233 => 88,  227 => 60,  221 => 83,  216 => 81,  210 => 78,  202 => 53,  199 => 74,  184 => 46,  174 => 59,  170 => 57,  162 => 54,  140 => 47,  137 => 46,  134 => 41,  132 => 40,  128 => 38,  107 => 29,  91 => 32,  87 => 23,  83 => 22,  62 => 21,  58 => 14,  45 => 11,  249 => 95,  245 => 93,  231 => 87,  224 => 84,  222 => 87,  211 => 83,  207 => 56,  201 => 78,  198 => 77,  195 => 76,  189 => 65,  186 => 72,  180 => 62,  178 => 43,  173 => 65,  165 => 59,  163 => 54,  158 => 51,  153 => 51,  150 => 48,  148 => 32,  143 => 45,  116 => 35,  111 => 34,  108 => 33,  106 => 28,  97 => 28,  93 => 27,  86 => 30,  81 => 29,  53 => 19,  82 => 20,  73 => 26,  64 => 22,  61 => 17,  70 => 17,  67 => 19,  26 => 4,  21 => 2,  617 => 344,  609 => 338,  602 => 334,  597 => 332,  593 => 331,  590 => 330,  587 => 329,  584 => 327,  575 => 321,  566 => 315,  560 => 312,  551 => 306,  542 => 300,  537 => 297,  534 => 296,  527 => 290,  521 => 288,  514 => 285,  512 => 284,  506 => 280,  500 => 278,  493 => 275,  491 => 274,  486 => 271,  478 => 265,  470 => 260,  456 => 249,  450 => 245,  444 => 243,  441 => 242,  433 => 237,  426 => 232,  424 => 231,  418 => 227,  412 => 225,  405 => 222,  403 => 221,  397 => 217,  391 => 215,  384 => 212,  382 => 211,  377 => 208,  371 => 203,  365 => 201,  358 => 198,  356 => 197,  351 => 194,  346 => 190,  340 => 187,  337 => 186,  331 => 183,  325 => 180,  322 => 179,  320 => 178,  316 => 176,  313 => 91,  307 => 170,  304 => 169,  296 => 79,  293 => 162,  289 => 160,  287 => 106,  280 => 72,  274 => 69,  267 => 102,  265 => 148,  260 => 64,  254 => 97,  248 => 94,  241 => 92,  239 => 91,  234 => 131,  225 => 59,  219 => 82,  212 => 116,  204 => 76,  197 => 51,  193 => 105,  183 => 71,  176 => 60,  172 => 93,  166 => 38,  157 => 52,  118 => 59,  100 => 48,  95 => 25,  92 => 43,  78 => 19,  76 => 32,  71 => 17,  69 => 28,  65 => 17,  59 => 15,  56 => 16,  54 => 17,  49 => 12,  46 => 8,  35 => 7,  30 => 6,  40 => 10,  32 => 6,  22 => 2,  164 => 37,  156 => 77,  151 => 78,  145 => 49,  139 => 44,  135 => 43,  131 => 42,  123 => 29,  117 => 34,  104 => 52,  89 => 26,  84 => 25,  80 => 39,  60 => 28,  52 => 15,  43 => 12,  34 => 8,  27 => 4,  48 => 14,  41 => 9,  33 => 7,  28 => 3,  24 => 3,  25 => 4,  36 => 9,  155 => 53,  149 => 50,  147 => 50,  144 => 31,  138 => 47,  136 => 46,  133 => 45,  127 => 41,  125 => 63,  122 => 35,  114 => 33,  112 => 32,  109 => 55,  101 => 36,  99 => 26,  96 => 24,  90 => 22,  88 => 26,  85 => 39,  79 => 24,  77 => 23,  74 => 19,  68 => 23,  66 => 16,  63 => 18,  57 => 20,  55 => 13,  50 => 12,  44 => 8,  42 => 11,  37 => 8,  31 => 7,  29 => 5,  23 => 3,  19 => 1,);
    }
}