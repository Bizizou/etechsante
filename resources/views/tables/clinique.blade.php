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
                
            </tr>

        @endforeach
    </tbody>
  </table>
  