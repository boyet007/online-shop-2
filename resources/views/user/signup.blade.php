<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <h1>Sign Up</h1>
        @if(count($errors) > 0)
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">
                    <p>{{ $error }}</p>
                </div>
            @endforeach
        @endif
        <form action="" method="post">
            <div class="form-group">
                <label for="email">E-Mail</label>
                <input type="text" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </div>
            <button type="submit">Sign Up</button>
        </form>
    </div>
</div>