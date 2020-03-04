@foreach ($users as $user)

    <div class="list-group">
        <a class="list-group-item" href="{{ route('conversations.show',$user->id) }}">{{$user->name}}</a>
    </div>
    @endforeach
