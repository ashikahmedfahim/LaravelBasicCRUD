<div>
  <a href="/">Return to Home</a>
  <form action="/update" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $user['id'] }}">
    <label for="name">Name </label>
    <input type="text" name="name" id="name" value="{{ $user['name'] }}">
    <div>
      @error('name')
        {{ $message }}
      @enderror
    </div>
    <br>
    <label for="email">Email</label>
    <input type="text" name="email" id="email" value="{{ $user['email'] }}">
    <div>
      @error('email')
        {{ $message }}
      @enderror
    </div>
    <br>
    <button type="submit">Save</button>
  </form>
</div>