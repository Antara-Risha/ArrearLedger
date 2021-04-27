<h1>Login<br><small>Shopkeeper</small></h1>

<form action="shopkeeperlogin" method="POST">
    @csrf
    <input type="text" name="email" placeholder="Enter Email"/>
    <span style="color:red">@error('email'){{$message}}@enderror</span><br>

    <br>
    <input type="password" name="password" placeholder="Enter  Password"/>
    <span style="color:red">@error('password'){{$message}}@enderror</span><br>

    <br>

    <button type="submit" > Login</a>
        </button>

    <p class="message">NOT Registered? <button><a class="btn alime-btn btn-2 mt-30 wow fadeInUp" data-wow-delay="500ms" href="./shopkeepersignup">Register</a>
        </button>
    </p>
</form>
