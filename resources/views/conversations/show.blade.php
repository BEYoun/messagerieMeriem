@extends('layouts.app')


@section('content')


<div class="row">

    <div class="col-md-3">

        @include('conversations.users',['users'=>$users]);
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">{{$user->name}}</div>
                <div class="card-body conversations">
                    @foreach ($messages as $message)
                        <div class="row">
                        <div class="col-md-10 {{ $message->from->id !== $user->id ? 'offset-md-2 text-right' : ''}}">
                                <p>
                                <strong>{{$message->from->name}}</strong><br>
                                {{$message->content}}
                                </p>
                            </div>
                        </div>
                    @endforeach
                    <form action="" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <textarea name="content" placeholder="ecriver votre message" class="form-control">

                            </textarea>
                            <button class="btn btn-primary">Envoyer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
