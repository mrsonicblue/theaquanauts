<?php

/* event-popup.twig */
class __TwigTemplate_3cef51dabefdb9b57cec516deaab4b368519f5048e86757ddf763616cc69a037 extends Twig_Template
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
        echo "<div class=\"ai1ec-popover ai1ec-popup ";
        echo twig_escape_filter($this->env, (isset($context["popup_classes"]) ? $context["popup_classes"] : null), "html", null, true);
        echo "\">

\t";
        // line 3
        $context["category_colors"] = $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "category_colors"), "method");
        // line 4
        echo "\t";
        if ((!twig_test_empty((isset($context["category_colors"]) ? $context["category_colors"] : null)))) {
            // line 5
            echo "\t\t<div class=\"ai1ec-color-swatches\">";
            echo (isset($context["category_colors"]) ? $context["category_colors"] : null);
            echo "</div>
\t";
        }
        // line 7
        echo "
\t<span class=\"ai1ec-popup-title\">
\t\t<a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "instance_permalink"), "method"), "html_attr");
        echo "\"
\t\t\t>";
        // line 10
        echo $this->env->getExtension('ai1ec')->truncate($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "filtered_title"), "method"));
        echo "</a>
\t\t";
        // line 11
        if (((isset($context["show_location_in_title"]) ? $context["show_location_in_title"] : null) && (!twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "venue"), "method"))))) {
            // line 12
            echo "\t\t\t<span class=\"ai1ec-event-location\"
\t\t\t\t>";
            // line 13
            echo twig_escape_filter($this->env, sprintf(Ai1ec_I18n::__("@ %s"), $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "venue"), "method")), "html", null, true);
            echo "</span>
\t\t";
        }
        // line 15
        echo "\t\t";
        if (((isset($context["is_ticket_button_enabled"]) ? $context["is_ticket_button_enabled"] : null) && (!twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "ticket_url"), "method"))))) {
            // line 16
            echo "\t\t\t<a class=\"ai1ec-pull-right ai1ec-btn ai1ec-btn-primary ai1ec-btn-xs
\t\t\t\tai1ec-buy-tickets\" target=\"_blank\"
\t\t\t\thref=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "ticket_url"), "method"), "html_attr");
            echo "\"
\t\t\t\t>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "ticket_url_label"), "method"), "html", null, true);
            echo "</a>
\t\t";
        }
        // line 21
        echo "\t</span>

\t";
        // line 23
        $context["edit_post_link"] = $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "edit_post_link"), "method");
        // line 24
        echo "\t";
        if ((!twig_test_empty((isset($context["edit_post_link"]) ? $context["edit_post_link"] : null)))) {
            // line 25
            echo "\t\t<a class=\"post-edit-link\" href=\"";
            echo (isset($context["edit_post_link"]) ? $context["edit_post_link"] : null);
            echo "\">
\t\t\t<i class=\"ai1ec-fa ai1ec-fa-pencil\"></i> ";
            // line 26
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Edit"), "html", null, true);
            echo "
\t\t</a>
\t";
        }
        // line 29
        echo "
\t<div class=\"ai1ec-event-time\">
\t\t";
        // line 31
        if (twig_test_empty((isset($context["popup_timespan"]) ? $context["popup_timespan"] : null))) {
            // line 32
            echo "\t\t\t";
            echo $this->env->getExtension('ai1ec')->timespan((isset($context["event"]) ? $context["event"] : null), "short");
            echo "
\t\t";
        } else {
            // line 34
            echo "\t\t\t";
            echo (isset($context["popup_timespan"]) ? $context["popup_timespan"] : null);
            echo "
\t\t";
        }
        // line 36
        echo "\t</div>

\t";
        // line 38
        echo $this->env->getExtension('ai1ec')->avatar((isset($context["event"]) ? $context["event"] : null), array(0 => "post_thumbnail", 1 => "content_img", 2 => "location_avatar", 3 => "category_avatar"));
        // line 43
        echo "

\t";
        // line 45
        $context["post_excerpt"] = trim($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "post_excerpt"), "method"));
        // line 46
        echo "\t";
        if ((!twig_test_empty((isset($context["post_excerpt"]) ? $context["post_excerpt"] : null)))) {
            // line 47
            echo "\t\t<div class=\"ai1ec-popup-excerpt\">";
            echo (isset($context["post_excerpt"]) ? $context["post_excerpt"] : null);
            echo "</div>
\t";
        }
        // line 49
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "event-popup.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 117,  270 => 113,  247 => 101,  240 => 97,  237 => 96,  230 => 92,  214 => 84,  208 => 81,  181 => 70,  179 => 69,  142 => 54,  129 => 48,  119 => 43,  295 => 76,  278 => 120,  261 => 72,  255 => 70,  217 => 85,  215 => 56,  187 => 46,  171 => 65,  167 => 39,  124 => 46,  120 => 29,  298 => 115,  288 => 112,  281 => 111,  263 => 103,  250 => 97,  244 => 94,  228 => 87,  226 => 61,  220 => 58,  177 => 61,  130 => 40,  121 => 37,  103 => 21,  618 => 70,  615 => 67,  612 => 66,  605 => 28,  601 => 27,  592 => 25,  589 => 24,  578 => 170,  572 => 166,  570 => 165,  554 => 163,  552 => 162,  535 => 160,  528 => 155,  523 => 153,  520 => 152,  518 => 151,  508 => 147,  503 => 144,  499 => 142,  496 => 141,  492 => 139,  490 => 138,  479 => 134,  473 => 133,  467 => 132,  461 => 131,  455 => 130,  451 => 129,  446 => 128,  443 => 127,  440 => 126,  438 => 125,  434 => 124,  430 => 123,  422 => 121,  415 => 120,  410 => 119,  406 => 118,  402 => 117,  398 => 116,  393 => 114,  389 => 113,  381 => 111,  364 => 110,  359 => 107,  355 => 105,  323 => 95,  310 => 90,  305 => 88,  292 => 85,  279 => 110,  262 => 80,  253 => 104,  251 => 75,  235 => 73,  218 => 71,  205 => 52,  200 => 76,  196 => 77,  191 => 47,  160 => 37,  105 => 37,  72 => 18,  38 => 6,  47 => 12,  75 => 18,  308 => 88,  306 => 118,  302 => 116,  299 => 87,  294 => 78,  284 => 73,  271 => 68,  266 => 66,  264 => 65,  258 => 101,  209 => 79,  194 => 50,  192 => 49,  188 => 48,  175 => 60,  169 => 47,  159 => 60,  152 => 58,  141 => 45,  102 => 26,  94 => 29,  51 => 13,  98 => 31,  39 => 10,  291 => 77,  283 => 105,  276 => 73,  269 => 106,  259 => 71,  242 => 98,  236 => 89,  233 => 65,  227 => 60,  221 => 83,  216 => 82,  210 => 54,  202 => 59,  199 => 78,  184 => 71,  174 => 49,  170 => 57,  162 => 38,  140 => 53,  137 => 52,  134 => 34,  132 => 40,  128 => 31,  107 => 29,  91 => 17,  87 => 24,  83 => 25,  62 => 19,  58 => 15,  45 => 11,  249 => 95,  245 => 93,  231 => 64,  224 => 89,  222 => 87,  211 => 83,  207 => 56,  201 => 79,  198 => 77,  195 => 48,  189 => 73,  186 => 72,  180 => 65,  178 => 50,  173 => 65,  165 => 63,  163 => 54,  158 => 51,  153 => 51,  150 => 57,  148 => 32,  143 => 44,  116 => 38,  111 => 24,  108 => 38,  106 => 34,  97 => 28,  93 => 27,  86 => 30,  81 => 29,  53 => 13,  82 => 20,  73 => 19,  64 => 22,  61 => 16,  70 => 17,  67 => 17,  26 => 3,  21 => 2,  617 => 344,  609 => 338,  602 => 334,  597 => 26,  593 => 331,  590 => 330,  587 => 329,  584 => 5,  575 => 321,  566 => 315,  560 => 312,  551 => 306,  542 => 300,  537 => 297,  534 => 296,  527 => 290,  521 => 288,  514 => 150,  512 => 284,  506 => 280,  500 => 278,  493 => 275,  491 => 274,  486 => 136,  478 => 265,  470 => 260,  456 => 249,  450 => 245,  444 => 243,  441 => 242,  433 => 237,  426 => 122,  424 => 231,  418 => 227,  412 => 225,  405 => 222,  403 => 221,  397 => 217,  391 => 215,  384 => 112,  382 => 211,  377 => 208,  371 => 203,  365 => 201,  358 => 198,  356 => 197,  351 => 194,  346 => 101,  340 => 99,  337 => 98,  331 => 97,  325 => 180,  322 => 179,  320 => 94,  316 => 93,  313 => 91,  307 => 170,  304 => 169,  296 => 114,  293 => 75,  289 => 84,  287 => 83,  280 => 72,  274 => 69,  267 => 112,  265 => 111,  260 => 108,  254 => 97,  248 => 67,  241 => 92,  239 => 92,  234 => 89,  225 => 59,  219 => 86,  212 => 116,  204 => 80,  197 => 51,  193 => 72,  183 => 45,  176 => 68,  172 => 93,  166 => 57,  157 => 52,  118 => 43,  100 => 32,  95 => 26,  92 => 25,  78 => 23,  76 => 32,  71 => 23,  69 => 19,  65 => 18,  59 => 15,  56 => 16,  54 => 11,  49 => 12,  46 => 11,  35 => 6,  30 => 5,  40 => 9,  32 => 8,  22 => 2,  164 => 37,  156 => 36,  151 => 35,  145 => 55,  139 => 44,  135 => 51,  131 => 42,  123 => 29,  117 => 34,  104 => 52,  89 => 23,  84 => 25,  80 => 24,  60 => 13,  52 => 15,  43 => 12,  34 => 5,  27 => 4,  48 => 11,  41 => 10,  33 => 7,  28 => 3,  24 => 3,  25 => 3,  36 => 7,  155 => 59,  149 => 47,  147 => 50,  144 => 46,  138 => 47,  136 => 46,  133 => 49,  127 => 47,  125 => 47,  122 => 45,  114 => 40,  112 => 36,  109 => 23,  101 => 34,  99 => 34,  96 => 19,  90 => 31,  88 => 26,  85 => 31,  79 => 21,  77 => 23,  74 => 21,  68 => 22,  66 => 14,  63 => 16,  57 => 20,  55 => 16,  50 => 12,  44 => 10,  42 => 9,  37 => 8,  31 => 5,  29 => 4,  23 => 3,  19 => 1,);
    }
}
