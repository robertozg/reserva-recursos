@if(Auth::check())

Página del Admin


{{  HTML::link('usuarios','Usuarios')  }} -------
{{  HTML::link('recursos','Recursos')  }} --------
{{  HTML::link('logout','Logout')  }}

@endif