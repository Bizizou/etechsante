<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nom et prenom</th>
        <th scope="col">Adresse mail</th>
        <th scope="col">Mot de passe</th>
        <th scope="col">role</th>
        <th scope="col">Avatar</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($admins as $admin)
            <tr>
                <th scope="row">{{$admin->id}}</th>   
                <td>{{$admin->username}}</td>
                <td>{{$admin->email}}</td>
                <td>{{$admin->password}}</td>
                <td>{{$admin->role}}</td>
                <td>{{$admin->avatar_name}}</td>
                <td>
                  <div class="dropdown">
                      <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                          <i class="dw dw-more"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                          <a class="dropdown-item" ><i class="dw dw-eye"></i> Modifier</a>
                          <a class="dropdown-item" ><i class="dw dw-download"></i> Supprimer</a>
                      </div>
                  </div>
                </td>
                
            </tr>

        @endforeach
    </tbody>
  </table>
  