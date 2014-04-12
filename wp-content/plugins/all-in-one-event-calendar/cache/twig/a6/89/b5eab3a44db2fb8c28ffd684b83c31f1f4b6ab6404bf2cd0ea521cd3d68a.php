<?php

/* ai1ecen_modal_subscription.twig */
class __TwigTemplate_a689b5eab3a44db2fb8c28ffd684b83c31f1f4b6ab6404bf2cd0ea521cd3d68a extends Twig_Template
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
        echo "<div class='alerts'></div>

<div class='ai1ec_email_container form-horizontal'
     data-event_id='";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["event_id"]) ? $context["event_id"] : null), "html", null, true);
        echo "'
     data-event_instance='";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["event_instance"]) ? $context["event_instance"] : null), "html", null, true);
        echo "'>
    <p>
        ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["intro_text"]) ? $context["intro_text"] : null), "html", null, true);
        echo "
    </p>

    <div class='control-group'>
        <label class='control-label' for='ai1ec_email_subscribe'>
            ";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["label_text"]) ? $context["label_text"] : null), "html", null, true);
        echo "
        </label>

        <div class='controls'>
            <input id='ai1ec_email_subscribe' name='ai1ec_email_subscribe' placeholder='";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["input_placeholder"]) ? $context["input_placeholder"] : null), "html", null, true);
        echo "' />
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "ai1ecen_modal_subscription.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 16,  41 => 12,  33 => 7,  28 => 5,  24 => 4,  25 => 3,  36 => 4,  155 => 53,  149 => 51,  147 => 50,  144 => 49,  138 => 47,  136 => 46,  133 => 45,  127 => 43,  125 => 42,  122 => 41,  114 => 39,  112 => 38,  109 => 37,  101 => 35,  99 => 34,  96 => 33,  90 => 31,  88 => 30,  85 => 29,  79 => 27,  77 => 26,  74 => 25,  68 => 23,  66 => 22,  63 => 21,  57 => 19,  55 => 18,  50 => 15,  44 => 13,  42 => 12,  37 => 9,  31 => 7,  29 => 6,  23 => 2,  19 => 1,);
    }
}
