<x-header/>
<div>
  @if (session('email'))
  <a href="/logout">Logout</a>
  @else
  <a href="/new">Register</a>
  <a href="/login">Login</a>
  @endif
  <br>
  <ul>
    @foreach ($data as $user)
      <li>
        {{ $user['email'] }}
        <br>
        <a href="show/{{  $user['id']}}">Show</a>
      </li>
    @endforeach
  </ul>
</div>
<x-footer/>