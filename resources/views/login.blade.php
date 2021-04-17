<div>
  <form action="/login" method="post">
    @csrf
    <label for="email">Email</label>
    <input type="text" name="email">
    <br>
    <label for="password">Password</label>
    <input type="password" name="passwprd">
    <br>
    <button type="submit">Login</button>
  </form>
</div>