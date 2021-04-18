<div>
  <a href="/">Return to Home</a>
  <form action="/login" method="post">
    @csrf
    <label for="email">Email</label>
    <input type="text" name="email">
    <div>
      @error('email')
        {{ $message }}
      @enderror
    </div>
    <br>
    <label for="password">Password</label>
    <input type="password" name="password">
    <div>
      @error('password')
        {{ $message }}
      @enderror
    </div>
    <br>
    <button type="submit">Login</button>
  </form>
</div>