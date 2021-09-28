@extends('layout.login')

@section('content')
    <div class="header">
        <h1>Login as a project leader</h1>
    </div>

    <div class="login-form">
        <form method="POST" action="/users">
            <p>email</p>
            <input name="email" class= "form-input" type ="text" placeholder='user@example.com' >
            <p>password</p>            
            <input name="password" class= "form-input" type ="text" > 
            <button type="submit">Log in</button> 
        </form> 
        <p>
            Dont have leader account yet, 
            <a href="/leader/register">register here</a>.
        </p>
        <p>
            If you want to enter as a founder, then go to
            <a href="/founder/login"> login as a founder </a>page.
        </p>
        <p>
            Change your mind, go back to
            <a href="/"> Finz home page</a>.
        </p>
    </div>
    
@endsection