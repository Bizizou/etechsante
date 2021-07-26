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
        @foreach ($radiologues as $radiologue)
            <tr>
                <th scope="row">{{$radiologue->id}}</th>
                <td>{{$radiologue->username}}</td>
                <td>{{$radiologue->email}}</td>
                <td>{{$radiologue->password}}</td>
                <td>{{$radiologue->role}}</td>
                <td>{{$radiologue->avatar_name}}</td>
                
            </tr>

        @endforeach
    </tbody>
  </table>
  