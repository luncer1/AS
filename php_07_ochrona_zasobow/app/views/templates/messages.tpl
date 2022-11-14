{if $messages->isError()}
    <div class="messages err">
        <ol>
        {foreach $messages->getErrors() as $err}
        {strip}
            <li>{$err}</li>
        {/strip}
        {/foreach}
        </ol>
    </div>
    {/if}
    {if $messages->isInfo()}
    <div class="messages inf bottom-margin">
        <ol>
        {foreach $messages->getInfos() as $inf}
        {strip}
            <li>{$inf}</li>
        {/strip}
        {/foreach}
        </ol>
    </div>
    {/if}
    