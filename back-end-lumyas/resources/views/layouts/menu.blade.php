<ul class="navbar-nav me-auto">
    @permission('User', 'read')
        <li class="mx-4"><a href="{{ route('users.index') }}" style="text-decoration: none;">Users</a></li>
    @endpermission
    @permission('Role', 'read')
        <li class="mx-4"><a href="{{ route('roles.index') }}" style="text-decoration: none;">Roles</a></li>
    @endpermission
    <li class="mx-4"><a href="#" style="text-decoration: none;">Categori</a></li>
    <li class="mx-4"><a href="#" style="text-decoration: none;">Product</a></li>
</ul>
