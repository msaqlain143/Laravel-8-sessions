<form action="/user" method="POST">
    @csrf
    <h2>User Login</h2>
    <div class="form-group">
        <label for="user">User Name:</label>
        <input type="text" class="form-control" name="user" placeholder=" Enter User Name" id="name">
    </div>
    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" name="password" placeholder="Enter password" id="pwd">
    </div>
    <div class="form-group form-check">
        <label class="form-check-label">
            <input class="form-check-input" type="checkbox"> Remember me
        </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>