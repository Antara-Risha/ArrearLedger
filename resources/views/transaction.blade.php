<h1>Transaction</h1>

<form action="addtransaction" method="POST">
    @csrf

    <input type="text" name="product" placeholder="enter Productname"/> <br>

    <br>
    <input type="text" name="price" placeholder="enter product price"/> <br>
    <br>

    <input type="date" name="date" placeholder="date"/> <br>
    <br>
    <input type="text" name="total" placeholder="total"/> <br>

    <br>

    <br>
    <button type="submit" >Register</button>
</form>
