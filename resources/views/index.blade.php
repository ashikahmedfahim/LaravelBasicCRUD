<x-header/>
<div>
  <a href="/new">Register</a>
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