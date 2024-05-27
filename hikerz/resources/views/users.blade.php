

@include('includes.header')
<h2>Users</h2>
<ul>
    @foreach($users as $user)
        <li>{{ $user->id}}</li>
        <li>{{ $user->lastname }}</li>
        <li>{{ $user->email}}</li>

    @endforeach
</ul>

