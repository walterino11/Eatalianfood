<h2>{$name}</h2>

{if $errors}

<div class="alert error">

	<img src="../img/admin/warning.gif"/>

	<ul>

		{foreach from=$errors item=error}

			<li>{$error}</li>

		{/foreach}

	</ul>

</div>

{/if}



<p>{$message}</p>

{if $settings|@count>0}

<fieldset>

	<legend>

		{l s='Settings' mod='aaa'}

	</legend>
	<form method="POST">
		<table>
			{foreach from=$settings item=setting}
			<TR>
				<TD>{$setting.l}:</TD>
				<TD>
				{if $setting.o}
					<select name="{$setting.n}">
						{foreach from=$setting.o item=name key=val}
						<option value="{$val}"{if $setting.v==$val} selected="selected"{/if}>{$name}</option>
						{/foreach}
					</select>
				{else}
					<input type="text" name="{$setting.n}" value="{$setting.v}" />
				{/if}
				</TD>
			</TR>
			{/foreach}
			<TR>
				<TD></TD>
				<TD><input type="submit" name="updatesettings" value="{l s='Update' mod='aaa'}" class="button" /></TD>
			</TR>
		</table>
	</form>
</fieldset>
{/if}