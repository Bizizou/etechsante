<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nom et prenom</th>
        <th scope="col">Adresse mail</th>
        <th scope="col">Mot de passe</th>
        <th scope="col">role</th>
        <th scope="col">Avatar</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($cliniques as $clinique)
            <tr>
                <th scope="row">{{$clinique->id}}</th>
                <td>{{$clinique->username}}</td>
                <td>{{$clinique->email}}</td>
                <td>{{$clinique->password}}</td>
                <td>{{$clinique->role}}</td>
                <td>{{$clinique->avatar_name}}</td>
                <td>
                  <div class="dropdown">
                      <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                          <i class="dw dw-more"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                          <a class="dropdown-item" data-toggle="modal" data-target="#editadmin{{$clinique->id}}" > Modifier</a>
                          <a class="dropdown-item" data-toggle="modal" data-target="#deleteadmin{{$clinique->id}}" > Supprimer</a>
                      </div>
                  </div>
                </td>
            </tr>
<!-- Modal -->

<div class="modal fade" id="editadmin{{$clinique->id}}" tabindex="-1" role="dialog" aria-labelledby="editadmin{{$clinique->id}}" aria-hidden="true" style="z-index: 10000;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="editadmin{{$clinique->id}}">Edit admin {{$clinique->username}}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form method="POST" action="{{  route('modify') }}" enctype="multipart/form-data">
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
              
                        
                        
                    
                    <input type="hidden" id="custIdadmin{{$clinique->id}}" name="admin_id" value="{{$clinique->id}}"> 
                    
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
            
        
    </div>
  </div>
</div>
<!-- end modify modal -->
<!-- start delete modal -->
<!-- Modal -->
<div class="modal fade" id="deleteadmin{{$clinique->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteadmin{{$clinique->id}}" aria-hidden="true" style="z-index: 10000;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="deleteadmin{{$clinique->id}}">delete admin </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
                Do you wish to delete  : {{$clinique->username}}
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <a href="/deleteadmin/?admin_id={{$clinique->id}}"><button type="submit" class="btn btn-primary">Yes</button></a>
        </div>
    </div>
  </div>
</div>
        @endforeach
    </tbody>
  </table>
  