{if $admin}
<h1>User Panel</h1>
<div class="col-md-8">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>User name</th>
				<th>Permissions</th>
			</tr>
		</thead>
		<tbody>
			{foreach from=$users item=user}
			<tr>
				<td>
					{$user['nickName']}
					<a href="borrarUsuario/{$user['id_user']}"><span class="glyphicon glyphicon-trash"></span></a>
				</td>
				<td>
				{if $user['permissions'] == 1}				
					admin
				{else}
                	normal user
                {/if}
                    <a href="cambiarPermiso/{$user['id_user']}"><span class="glyphicon glyphicon-edit"></span>Change permission</a>
				</td>
			</tr>
			{/foreach}
		</tbody>
	</table>
</div>
{/if}