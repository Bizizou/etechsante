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
        @foreach ($admins as $admin)
            <tr>
                <th scope="row">{{$admin->id}}</th>
                <td>{{$admin->username}}</td>
                <td>{{$admin->email}}</td>
                <td>{{$admin->password}}</td>
                <td>{{$admin->role}}</td>
                <td>{{$admin->avatar_name}}</td>
                
            </tr>

        @endforeach
    </tbody>
  </table>
  