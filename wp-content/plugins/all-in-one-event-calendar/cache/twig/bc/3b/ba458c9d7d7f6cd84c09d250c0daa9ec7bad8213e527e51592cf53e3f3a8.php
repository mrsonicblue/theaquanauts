<?php

/* event-single.twig */
class __TwigTemplate_bc3bba458c9d7d7f6cd84c09d250c0daa9ec7bad8213e527e51592cf53e3f3a8 extends Twig_Template
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
        echo "<div class=\"timely ai1ec-single-event
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
        echo "\">

<a id=\"ai1ec-event\"></a>

";
        // line 8
        if (((isset($context["show_subscribe_buttons"]) ? $context["show_subscribe_buttons"] : null) || (!twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "ticket_url"), "method"))))) {
            // line 9
            echo "\t<div class=\"ai1ec-actions\">
\t\t<div class=\"ai1ec-btn-group-vertical ai1ec-clearfix\">
\t\t\t";
            // line 11
            echo (isset($context["back_to_calendar"]) ? $context["back_to_calendar"] : null);
            echo "
\t\t</div>

\t\t<div class=\"ai1ec-btn-group-vertical ai1ec-clearfix\">
\t\t\t";
            // line 15
            if ((!twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "ticket_url"), "method")))) {
                // line 16
                echo "\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "ticket_url"), "method"), "html_attr");
                echo "\" target=\"_blank\"
\t\t\t\t\tclass=\"ai1ec-tickets ai1ec-btn ai1ec-btn-sm ai1ec-btn-primary\">
\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-ticket ai1ec-fa-fw\"></i>
\t\t\t\t\t";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "tickets_url_label"), "method"), "html", null, true);
                echo "
\t\t\t\t</a>
\t\t\t";
            }
            // line 22
            echo "\t\t\t";
            if ((isset($context["show_subscribe_buttons"]) ? $context["show_subscribe_buttons"] : null)) {
                // line 23
                echo "\t\t\t\t<a class=\"ai1ec-btn ai1ec-btn-default ai1ec-btn-sm ai1ec-subscribe\"
\t\t\t\t\thref=\"";
                // line 24
                echo twig_escape_filter($this->env, (isset($context["subscribe_url"]) ? $context["subscribe_url"] : null), "html_attr");
                echo "\"
\t\t\t\t\ttitle=\"";
                // line 25
                echo twig_escape_filter($this->env, Ai1ec_I18n::__("Add this event to your favourite calendar program (iCal, Outlook, etc.)"), "html", null, true);
                echo "\" >
\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-plus ai1ec-fa-fw\"></i>
\t\t\t\t\t";
                // line 27
                echo twig_escape_filter($this->env, Ai1ec_I18n::__("Add to Calendar"), "html", null, true);
                echo "</a>
\t\t\t\t<a class=\"ai1ec-btn ai1ec-btn-default ai1ec-btn-sm
\t\t\t\t\t\tai1ec-subscribe-google\"
\t\t\t\t\ttarget=\"_blank\"
\t\t\t\t\thref=\"";
                // line 31
                echo twig_escape_filter($this->env, (isset($context["google_url"]) ? $context["google_url"] : null), "html_attr");
                echo "\"
\t\t\t\t\ttitle=\"";
                // line 32
                echo twig_escape_filter($this->env, Ai1ec_I18n::__("Add this event to your Google Calendar"), "html", null, true);
                echo "\">
\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-google-plus ai1ec-fa-lg ai1ec-fa-fw\"></i>
\t\t\t\t\t";
                // line 34
                echo twig_escape_filter($this->env, Ai1ec_I18n::__("Add to Google"), "html", null, true);
                echo "
\t\t\t\t</a>
\t\t\t";
            }
            // line 37
            echo "\t\t\t";
            if ((isset($context["extra_buttons"]) ? $context["extra_buttons"] : null)) {
                // line 38
                echo "\t\t\t\t";
                echo (isset($context["extra_buttons"]) ? $context["extra_buttons"] : null);
                echo "
\t\t\t";
            }
            // line 40
            echo "\t\t</div>
\t</div>
";
        }
        // line 43
        echo "
<div class=\"ai1ec-event-details ai1ec-clearfix\">

\t<div class=\"ai1ec-time ai1ec-row\">
\t\t<div class=\"ai1ec-field-label ai1ec-col-sm-3\">";
        // line 47
        echo twig_escape_filter($this->env, Ai1ec_I18n::__("When:"), "html", null, true);
        echo "</div>
\t\t<div class=\"ai1ec-field-value ai1ec-col-sm-9\">";
        // line 48
        echo $this->env->getExtension('ai1ec')->timespan((isset($context["event"]) ? $context["event"] : null));
        echo "</div>
\t</div>

\t";
        // line 51
        $this->env->loadTemplate("recurrence.twig")->display($context);
        // line 52
        echo "
\t";
        // line 53
        if ((!twig_test_empty((isset($context["location"]) ? $context["location"] : null)))) {
            // line 54
            echo "\t\t<div class=\"ai1ec-location ai1ec-row\">
\t\t\t<div class=\"ai1ec-field-label ai1ec-col-sm-3\">";
            // line 55
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Where:"), "html", null, true);
            echo "</div>
\t\t\t<div class=\"ai1ec-field-value ai1ec-col-sm-9\">
\t\t\t\t";
            // line 57
            if ((!twig_test_empty((isset($context["map"]) ? $context["map"] : null)))) {
                // line 58
                echo "\t\t\t\t\t<div class=\"ai1ec-row\">
\t\t\t\t\t\t<div class=\"ai1ec-col-md-6\">";
                // line 59
                echo (isset($context["location"]) ? $context["location"] : null);
                echo "</div>
\t\t\t\t\t\t<div class=\"ai1ec-map ai1ec-col-md-6\">";
                // line 60
                echo (isset($context["map"]) ? $context["map"] : null);
                echo "</div>
\t\t\t\t\t</div>
\t\t\t\t";
            } else {
                // line 63
                echo "\t\t\t\t\t";
                echo (isset($context["location"]) ? $context["location"] : null);
                echo "
\t\t\t\t";
            }
            // line 65
            echo "\t\t\t</div>
\t\t</div>
\t";
        }
        // line 68
        echo "
\t";
        // line 69
        if (((!twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "cost"), "method"))) || $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "is_free"))) {
            // line 70
            echo "\t\t<div class=\"ai1ec-cost ai1ec-row\">
\t\t\t<div class=\"ai1ec-field-label ai1ec-col-sm-3\">";
            // line 71
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Cost:"), "html", null, true);
            echo "</div>
\t\t\t<div class=\"ai1ec-field-value ai1ec-col-sm-9\">
\t\t\t\t";
            // line 73
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "is_free")) ? (Ai1ec_I18n::__("Free")) : ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get", array(0 => "cost"), "method"))), "html", null, true);
            echo "
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 77
        echo "
\t";
        // line 78
        if ((!twig_test_empty((isset($context["contact"]) ? $context["contact"] : null)))) {
            // line 79
            echo "\t\t<div class=\"ai1ec-contact ai1ec-row\">
\t\t\t<div class=\"ai1ec-field-label ai1ec-col-sm-3\">";
            // line 80
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Contact:"), "html", null, true);
            echo "</div>
\t\t\t<div class=\"ai1ec-field-value ai1ec-col-sm-9\">";
            // line 81
            echo (isset($context["contact"]) ? $context["contact"] : null);
            echo "</div>
\t\t</div>
\t";
        }
        // line 84
        echo "
\t";
        // line 85
        if ((!twig_test_empty((isset($context["categories"]) ? $context["categories"] : null)))) {
            // line 86
            echo "\t\t<div class=\"ai1ec-categories ai1ec-row\">
\t\t\t<div class=\"ai1ec-field-label ai1ec-col-sm-3 ai1ec-col-xs-1\">
\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-folder-open ai1ec-tooltip-trigger\"
\t\t\t\t\ttitle=\"";
            // line 89
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Categories"), "html_attr");
            echo "\"></i>
\t\t\t</div>
\t\t\t<div class=\"ai1ec-field-value ai1ec-col-sm-9 ai1ec-col-xs-10\">
\t\t\t\t";
            // line 92
            echo (isset($context["categories"]) ? $context["categories"] : null);
            echo "
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 96
        echo "
\t";
        // line 97
        if ((!twig_test_empty((isset($context["tags"]) ? $context["tags"] : null)))) {
            // line 98
            echo "\t\t<div class=\"ai1ec-tags ai1ec-row\">
\t\t\t<div class=\"ai1ec-field-label ai1ec-col-sm-3 ai1ec-col-xs-1\">
\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-tags ai1ec-tooltip-trigger\"
\t\t\t\t\ttitle=\"";
            // line 101
            echo twig_escape_filter($this->env, Ai1ec_I18n::__("Tags"), "html_attr");
            echo "\"></i>
\t\t\t</div>
\t\t\t<div class=\"ai1ec-field-value ai1ec-col-sm-9 ai1ec-col-xs-10\">
\t\t\t\t";
            // line 104
            echo (isset($context["tags"]) ? $context["tags"] : null);
            echo "
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 108
        echo "
</div>

";
        // line 111
        if ((!(isset($context["hide_featured_image"]) ? $context["hide_featured_image"] : null))) {
            // line 112
            echo "\t";
            if (twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "content_img_url"), "method"))) {
                // line 113
                echo "\t\t";
                echo $this->env->getExtension('ai1ec')->avatar((isset($context["event"]) ? $context["event"] : null), array(0 => "post_thumbnail", 1 => "location_avatar", 2 => "category_avatar"), "timely alignleft", false);
                // line 117
                echo "
\t";
            }
        }
        // line 120
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "event-single.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 117,  270 => 113,  247 => 101,  240 => 97,  237 => 96,  230 => 92,  214 => 84,  208 => 81,  181 => 70,  179 => 69,  142 => 54,  129 => 48,  119 => 43,  295 => 76,  278 => 120,  261 => 72,  255 => 70,  217 => 85,  215 => 56,  187 => 46,  171 => 65,  167 => 39,  124 => 30,  120 => 29,  298 => 115,  288 => 112,  281 => 111,  263 => 103,  250 => 97,  244 => 94,  228 => 87,  226 => 61,  220 => 58,  177 => 61,  130 => 40,  121 => 37,  103 => 21,  618 => 70,  615 => 67,  612 => 66,  605 => 28,  601 => 27,  592 => 25,  589 => 24,  578 => 170,  572 => 166,  570 => 165,  554 => 163,  552 => 162,  535 => 160,  528 => 155,  523 => 153,  520 => 152,  518 => 151,  508 => 147,  503 => 144,  499 => 142,  496 => 141,  492 => 139,  490 => 138,  479 => 134,  473 => 133,  467 => 132,  461 => 131,  455 => 130,  451 => 129,  446 => 128,  443 => 127,  440 => 126,  438 => 125,  434 => 124,  430 => 123,  422 => 121,  415 => 120,  410 => 119,  406 => 118,  402 => 117,  398 => 116,  393 => 114,  389 => 113,  381 => 111,  364 => 110,  359 => 107,  355 => 105,  323 => 95,  310 => 90,  305 => 88,  292 => 85,  279 => 110,  262 => 80,  253 => 104,  251 => 75,  235 => 73,  218 => 71,  205 => 52,  200 => 76,  196 => 77,  191 => 47,  160 => 37,  105 => 37,  72 => 18,  38 => 6,  47 => 12,  75 => 18,  308 => 88,  306 => 118,  302 => 116,  299 => 87,  294 => 78,  284 => 73,  271 => 68,  266 => 66,  264 => 65,  258 => 101,  209 => 79,  194 => 50,  192 => 49,  188 => 48,  175 => 60,  169 => 47,  159 => 60,  152 => 58,  141 => 45,  102 => 26,  94 => 32,  51 => 13,  98 => 30,  39 => 10,  291 => 77,  283 => 105,  276 => 73,  269 => 106,  259 => 71,  242 => 98,  236 => 89,  233 => 65,  227 => 60,  221 => 83,  216 => 82,  210 => 54,  202 => 59,  199 => 78,  184 => 71,  174 => 49,  170 => 57,  162 => 38,  140 => 53,  137 => 52,  134 => 34,  132 => 40,  128 => 31,  107 => 29,  91 => 17,  87 => 24,  83 => 27,  62 => 19,  58 => 18,  45 => 11,  249 => 95,  245 => 93,  231 => 64,  224 => 89,  222 => 87,  211 => 83,  207 => 56,  201 => 79,  198 => 77,  195 => 48,  189 => 73,  186 => 72,  180 => 65,  178 => 50,  173 => 65,  165 => 63,  163 => 54,  158 => 51,  153 => 51,  150 => 57,  148 => 32,  143 => 44,  116 => 35,  111 => 24,  108 => 38,  106 => 22,  97 => 28,  93 => 27,  86 => 30,  81 => 29,  53 => 15,  82 => 20,  73 => 19,  64 => 22,  61 => 17,  70 => 17,  67 => 17,  26 => 3,  21 => 2,  617 => 344,  609 => 338,  602 => 334,  597 => 26,  593 => 331,  590 => 330,  587 => 329,  584 => 5,  575 => 321,  566 => 315,  560 => 312,  551 => 306,  542 => 300,  537 => 297,  534 => 296,  527 => 290,  521 => 288,  514 => 150,  512 => 284,  506 => 280,  500 => 278,  493 => 275,  491 => 274,  486 => 136,  478 => 265,  470 => 260,  456 => 249,  450 => 245,  444 => 243,  441 => 242,  433 => 237,  426 => 122,  424 => 231,  418 => 227,  412 => 225,  405 => 222,  403 => 221,  397 => 217,  391 => 215,  384 => 112,  382 => 211,  377 => 208,  371 => 203,  365 => 201,  358 => 198,  356 => 197,  351 => 194,  346 => 101,  340 => 99,  337 => 98,  331 => 97,  325 => 180,  322 => 179,  320 => 94,  316 => 93,  313 => 91,  307 => 170,  304 => 169,  296 => 114,  293 => 75,  289 => 84,  287 => 83,  280 => 72,  274 => 69,  267 => 112,  265 => 111,  260 => 108,  254 => 97,  248 => 67,  241 => 92,  239 => 92,  234 => 89,  225 => 59,  219 => 86,  212 => 116,  204 => 80,  197 => 51,  193 => 72,  183 => 45,  176 => 68,  172 => 93,  166 => 57,  157 => 52,  118 => 59,  100 => 31,  95 => 26,  92 => 25,  78 => 25,  76 => 32,  71 => 23,  69 => 28,  65 => 17,  59 => 15,  56 => 16,  54 => 11,  49 => 12,  46 => 11,  35 => 6,  30 => 4,  40 => 8,  32 => 8,  22 => 2,  164 => 37,  156 => 36,  151 => 35,  145 => 55,  139 => 44,  135 => 51,  131 => 42,  123 => 29,  117 => 34,  104 => 52,  89 => 23,  84 => 25,  80 => 23,  60 => 13,  52 => 15,  43 => 12,  34 => 5,  27 => 5,  48 => 8,  41 => 10,  33 => 7,  28 => 3,  24 => 3,  25 => 4,  36 => 9,  155 => 59,  149 => 47,  147 => 50,  144 => 46,  138 => 47,  136 => 46,  133 => 45,  127 => 39,  125 => 47,  122 => 37,  114 => 40,  112 => 32,  109 => 23,  101 => 34,  99 => 34,  96 => 19,  90 => 31,  88 => 26,  85 => 31,  79 => 21,  77 => 23,  74 => 24,  68 => 22,  66 => 14,  63 => 16,  57 => 20,  55 => 16,  50 => 13,  44 => 7,  42 => 9,  37 => 8,  31 => 5,  29 => 4,  23 => 3,  19 => 1,);
    }
}
