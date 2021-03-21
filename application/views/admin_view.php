<div class="container-form">
<form class="row g-3" method="POST" action="/admin" >
  <div class="col-auto"> 
  <label for="inputLogin" class="visually-hidden">Login</label>
    <input type="text" class="form-control" id="inputLogin" name="inputLogin" placeholder="Login">
  </div>
  <div class="col-auto">
    <label for="inputPassword" class="visually-hidden">Password</label>
    <input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="Password">
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
  </div>
</form>
</div>