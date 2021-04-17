<div>
  <a href="/">Return to Home</a>
  <h1>{{ $user['name'] }}</h1>
  <h2>{{ $user['email'] }}</h2>
  <a href="/edit/{{ $user['id']}}">Edit User</a>
  <a href="/delete/{{ $user['id'] }}">Delete</a>
  </form>
</div>