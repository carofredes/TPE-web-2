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
					<a href="borrarUsuario/{$id_user}"><span class="glyphicon glyphicon-trash"></span></a>
				</td>
				{if $user['permissions'] == 1}
				<td>
					admin
					<a href="borrarAdmin/{$id_user}"><span class="glyphicon glyphicon-edit"></span>Remove permission</a>
				</td>
				{else}
				<td>
                	normal user
                    <a href="agregarAdmin/{$id_user}"><span class="glyphicon glyphicon-edit"></span>Add admin permission</a>
				</td>
				{/if}
			</tr>
			{/foreach}
		</tbody>
	</table>
</div>
{/if}