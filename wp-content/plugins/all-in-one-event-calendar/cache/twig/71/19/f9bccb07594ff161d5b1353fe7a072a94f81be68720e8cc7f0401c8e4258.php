<?php

/* event-multi.twig */
class __TwigTemplate_7119f9bccb07594ff161d5b1353fe7a072a94f81be68720e8cc7f0401c8e4258 extends Twig_Template
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
        echo "<div class=\"timely ai1ec-multi-event
\tai1ec-event-id-";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "post_id"), "method"), "html", null, true);
        echo "
\t";
        // line 3
        if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "is_multiday")) {
            echo "ai1ec-multiday";
        }
        // line 4
        echo "\t";
        if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "is_allday")) {
            echo "ai1ec-allday";
        }
        echo " \">

\t<div class=\"ai1ec-event-details ai1ec-clearfix\">

\t\t";
        // line 8
        if (((!twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "ticket_url"))) || $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "show_map"))) {
            // line 9
            echo "\t\t\t<div class=\"ai1ec-btn-group ai1ec-pull-right\">
\t\t\t\t";
            // line 10
            if ((!twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "ticket_url")))) {
                // line 11
                echo "\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "ticket_url"), "html_attr");
                echo "\" target=\"_blank\"
\t\t\t\t\t\tclass=\"ai1ec-tickets ai1ec-btn ai1ec-btn-sm ai1ec-btn-primary\">
\t\t\t\t\t\t";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "tickets_url_label"), "method"), "html", null, true);
                echo "
\t\t\t\t\t</a>
\t\t\t\t";
            }
            // line 16
            echo "\t\t\t\t";
            if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "show_map")) {
                // line 17
                echo "\t\t\t\t\t<a class=\"ai1ec-btn ai1ec-btn-default ai1ec-btn-sm\"
\t\t\t\t\t\thref=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "instance_permalink"), "method"), "html_attr");
                echo "#ai1ec-event\">
\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-map-marker\"></i>
\t\t\t\t\t\t";
                // line 20
                echo twig_escape_filter($this->env, Ai1ec_I18n::__("View Map"), "html", null, true);
                echo "
\t\t\t\t\t</a>
\t\t\t\t";
            }
            // line 23
            echo "\t\t\t</div>
\t\t";
        }
        // line 25
        echo "
\t\t<div class=\"ai1ec-time\">
\t\t\t<div class=\"ai1ec-field-label\">";
        // line 27
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("When:"), "html", null, true);
        echo "</div>
\t\t\t<div class=\"ai1ec-field-value\">";
        // line 28
        echo $this->env->getExtension('ai1ec')->timespan((isset($context["event"]) ? $context["event"] : null));
        echo "</div>
\t\t</div>

\t\t";
        // line 31
        $this->env->loadTemplate("recurrence.twig")->display($context);
        // line 32
        echo "
\t\t";
        // line 33
        if ((!twig_test_empty((isset($context["location"]) ? $context["location"] : null)))) {
            // line 34
            echo "\t\t\t<div class=\"ai1ec-location\">
\t\t\t\t<div class=\"ai1ec-field-label\">";
            // line 35
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Where:"), "html", null, true);
            echo "</div>
\t\t\t\t<div class=\"ai1ec-field-value\">";
            // line 36
            echo (isset($context["location"]) ? $context["location"] : null);
            echo "</div>
\t\t\t</div>
\t\t";
        }
        // line 39
        echo "
\t\t";
        // line 40
        if ((!twig_test_empty((isset($context["categories"]) ? $context["categories"] : null)))) {
            // line 41
            echo "\t\t\t<div class=\"ai1ec-categories\">
\t\t\t\t<div class=\"ai1ec-field-label\">
\t\t\t\t\t";
            // line 43
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Categories"), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"ai1ec-field-value\">";
            // line 45
            echo (isset($context["categories"]) ? $context["categories"] : null);
            echo "</div>
\t\t\t</div>
\t\t";
        }
        // line 48
        echo "
\t\t";
        // line 49
        if ((!twig_test_empty((isset($context["tags"]) ? $context["tags"] : null)))) {
            // line 50
            echo "\t\t\t<div class=\"ai1ec-tags\">
\t\t\t\t<div class=\"ai1ec-field-label\">
\t\t\t\t\t";
            // line 52
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Tags"), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"ai1ec-field-value\">";
            // line 54
            echo (isset($context["tags"]) ? $context["tags"] : null);
            echo "</div>
\t\t\t</div>
\t\t";
        }
        // line 57
        echo "
\t</div>

</div>
";
    }

    public function getTemplateName()
    {
        return "event-multi.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 57,  273 => 117,  270 => 113,  247 => 101,  240 => 97,  237 => 96,  230 => 92,  214 => 84,  208 => 81,  181 => 70,  179 => 69,  142 => 54,  129 => 48,  119 => 41,  295 => 76,  278 => 120,  261 => 72,  255 => 70,  217 => 85,  215 => 56,  187 => 46,  171 => 65,  167 => 39,  124 => 46,  120 => 29,  298 => 115,  288 => 112,  281 => 111,  263 => 103,  250 => 97,  244 => 94,  228 => 87,  226 => 61,  220 => 58,  177 => 61,  130 => 40,  121 => 37,  103 => 21,  618 => 70,  615 => 67,  612 => 66,  605 => 28,  601 => 27,  592 => 25,  589 => 24,  578 => 170,  572 => 166,  570 => 165,  554 => 163,  552 => 162,  535 => 160,  528 => 155,  523 => 153,  520 => 152,  518 => 151,  508 => 147,  503 => 144,  499 => 142,  496 => 141,  492 => 139,  490 => 138,  479 => 134,  473 => 133,  467 => 132,  461 => 131,  455 => 130,  451 => 129,  446 => 128,  443 => 127,  440 => 126,  438 => 125,  434 => 124,  430 => 123,  422 => 121,  415 => 120,  410 => 119,  406 => 118,  402 => 117,  398 => 116,  393 => 114,  389 => 113,  381 => 111,  364 => 110,  359 => 107,  355 => 105,  323 => 95,  310 => 90,  305 => 88,  292 => 85,  279 => 110,  262 => 80,  253 => 104,  251 => 75,  235 => 73,  218 => 71,  205 => 52,  200 => 76,  196 => 77,  191 => 47,  160 => 37,  105 => 37,  72 => 18,  38 => 6,  47 => 11,  75 => 18,  308 => 88,  306 => 118,  302 => 116,  299 => 87,  294 => 78,  284 => 73,  271 => 68,  266 => 66,  264 => 65,  258 => 101,  209 => 79,  194 => 50,  192 => 49,  188 => 48,  175 => 60,  169 => 47,  159 => 60,  152 => 58,  141 => 45,  102 => 26,  94 => 31,  51 => 13,  98 => 31,  39 => 9,  291 => 77,  283 => 105,  276 => 73,  269 => 106,  259 => 71,  242 => 98,  236 => 89,  233 => 65,  227 => 60,  221 => 83,  216 => 82,  210 => 54,  202 => 59,  199 => 78,  184 => 71,  174 => 49,  170 => 57,  162 => 38,  140 => 53,  137 => 49,  134 => 48,  132 => 40,  128 => 45,  107 => 29,  91 => 17,  87 => 26,  83 => 25,  62 => 17,  58 => 15,  45 => 10,  249 => 95,  245 => 93,  231 => 64,  224 => 89,  222 => 87,  211 => 83,  207 => 56,  201 => 79,  198 => 77,  195 => 48,  189 => 73,  186 => 72,  180 => 65,  178 => 50,  173 => 65,  165 => 63,  163 => 54,  158 => 51,  153 => 51,  150 => 57,  148 => 54,  143 => 52,  116 => 38,  111 => 24,  108 => 36,  106 => 34,  97 => 28,  93 => 28,  86 => 30,  81 => 29,  53 => 13,  82 => 20,  73 => 19,  64 => 22,  61 => 16,  70 => 20,  67 => 17,  26 => 3,  21 => 2,  617 => 344,  609 => 338,  602 => 334,  597 => 26,  593 => 331,  590 => 330,  587 => 329,  584 => 5,  575 => 321,  566 => 315,  560 => 312,  551 => 306,  542 => 300,  537 => 297,  534 => 296,  527 => 290,  521 => 288,  514 => 150,  512 => 284,  506 => 280,  500 => 278,  493 => 275,  491 => 274,  486 => 136,  478 => 265,  470 => 260,  456 => 249,  450 => 245,  444 => 243,  441 => 242,  433 => 237,  426 => 122,  424 => 231,  418 => 227,  412 => 225,  405 => 222,  403 => 221,  397 => 217,  391 => 215,  384 => 112,  382 => 211,  377 => 208,  371 => 203,  365 => 201,  358 => 198,  356 => 197,  351 => 194,  346 => 101,  340 => 99,  337 => 98,  331 => 97,  325 => 180,  322 => 179,  320 => 94,  316 => 93,  313 => 91,  307 => 170,  304 => 169,  296 => 114,  293 => 75,  289 => 84,  287 => 83,  280 => 72,  274 => 69,  267 => 112,  265 => 111,  260 => 108,  254 => 97,  248 => 67,  241 => 92,  239 => 92,  234 => 89,  225 => 59,  219 => 86,  212 => 116,  204 => 80,  197 => 51,  193 => 72,  183 => 45,  176 => 68,  172 => 93,  166 => 57,  157 => 52,  118 => 43,  100 => 32,  95 => 26,  92 => 25,  78 => 23,  76 => 23,  71 => 20,  69 => 19,  65 => 18,  59 => 16,  56 => 16,  54 => 14,  49 => 12,  46 => 11,  35 => 6,  30 => 4,  40 => 8,  32 => 6,  22 => 2,  164 => 37,  156 => 36,  151 => 35,  145 => 55,  139 => 50,  135 => 51,  131 => 42,  123 => 43,  117 => 40,  104 => 35,  89 => 23,  84 => 27,  80 => 25,  60 => 16,  52 => 15,  43 => 12,  34 => 5,  27 => 4,  48 => 12,  41 => 10,  33 => 7,  28 => 5,  24 => 3,  25 => 3,  36 => 7,  155 => 59,  149 => 47,  147 => 50,  144 => 46,  138 => 47,  136 => 46,  133 => 49,  127 => 47,  125 => 47,  122 => 45,  114 => 39,  112 => 36,  109 => 23,  101 => 34,  99 => 33,  96 => 32,  90 => 31,  88 => 28,  85 => 25,  79 => 21,  77 => 23,  74 => 21,  68 => 19,  66 => 18,  63 => 17,  57 => 20,  55 => 16,  50 => 12,  44 => 10,  42 => 9,  37 => 8,  31 => 5,  29 => 4,  23 => 3,  19 => 1,);
    }
}
