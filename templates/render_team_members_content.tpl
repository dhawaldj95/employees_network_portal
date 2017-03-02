{*<h3>{$name_nominator}</h3>*}
{*{html_options name = $name options=$level2}<br>*}
<div class = "inlineDiv">
    <h3>{$name_nominator}</h3>
    {foreach $level2 as $value}
        <li>{$value}</li>
        {foreachelse}
    {/foreach}
</div>
