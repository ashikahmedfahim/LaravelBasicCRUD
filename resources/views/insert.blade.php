<div>
  <a href="/">Return to Home</a>
  <form action="new" method="post">
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name" id="name" placeholder="Name">
    <div>
      @error('name')
        {{ $message }}
      @enderror
    </div>
    <br>
    <label for="email">Email</label>
    <input type="text" name="email" id="email" placeholder="Email">
    <div>
      @error('email')
        {{ $message }}
      @enderror
    </div>
    <br>
    <label for="password">Password</label>
    <input type="text" name="password" id="password" placeholder="Password">
    <div>
      @error('password')
        {{ $message }}
      @enderror
    </div>
    <br>
    <button type="submit">Register</button>
  </form>
</div>