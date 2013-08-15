

Página del Admin

{{  HTML::link('usuarios','Usuarios')  }} -------
{{  HTML::link('recursos'						,'Recursos')  }} -------
{{  HTML::link('reservas','Reservas')  }} ------  
{{  HTML::link('logout','Logout')  }}
@if(Auth::check())
@endif
