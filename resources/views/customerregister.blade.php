<h1>Customer Register</h1>

<form action="customersignup" method="POST">
    @csrf

    <input type="text" name="cname" placeholder="enter username"/> <br>

    <br>
    <input type="text" name="cemail" placeholder="enter user email"/> <br>
    <br>

    <input type="text" name="ccontact" placeholder="contact"/> <br>
    <br>
    <input type="text" name="caddress" placeholder="address"/> <br>

    <br>

    <br>
    <button type="submit" >Register</button>
</form>
