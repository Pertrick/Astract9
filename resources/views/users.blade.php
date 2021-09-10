@extends('layouts.app')

@section('content')
	
 <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center">User List to Approve</div>

                <div class="panel-body">
                   <div class="card-body text-center">
						@if(session('message'))

							<div class="alert alert-success" role="alert">
								{{session('message') }}
							</div>
						@endif

						<table class="table">
							<tr >
								<th class="text-center">S/N</th>
								<th class="text-center">User name</th>
								<th class="text-center">Email</th>
								<th class="text-center">Registered at</th>
								<th></th>
							</tr>

							@forelse($users as $user)

							<tr>
								<td>{{$sn++}}</td>	
								<td>{{$user->name}}</td>
								<td>{{$user->email}}</td>
								<td>{{$user->created_at}}</td>

								@if($user->approved_at)
									<td><a href="{{route('admin.users.disapprove' , $user->id)}}"
								class="btn btn-primary btn-sm">Disapprove</a></td>
								@else
								<td><a href="{{route('admin.users.approve' , $user->id)}}"
								class="btn btn-primary btn-sm">Approve</a></td>

								@endif
							</tr>

							@empty
							<tr>
								<td colspan="4">No User to Approve</td>
							</tr>
							@endforelse
						</table>

					</div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection