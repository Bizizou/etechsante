<form method="POST" action="{{  route('create') }}">
    @csrf
    <div class="form-group">
        <label for="username">Nom et prenom</label>
        <input name="username" type="text" class="form-control" id="username"  placeholder="Entrer le nom et prenom">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input name="password"  type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    
    <div class="form-group">
        <label for="exampleFormControlSelect1">Role</label>
        <select name="role" class="form-control" id="exampleFormControlSelect1">
          <option disabled="disabled" selected="selected">Choisir le role</option>
          <option  value="admin">administrateur</option>
          <option  value="clinique">clinique</option>
          <option  value="radiologue">radiologue</option>
        </select>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  