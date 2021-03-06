@extends("lms::layouts.app")

@section("content")
	
	
	<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 mb-3">
	       @include("lms::admin.components.alert")
	        <div class="card">
                <div class="card-header bg-primary text-white">Curricula for {{$user->name}}</div>
		        <div class="card-body">
			        <form action="{{route('users.curricula', $user)}}"
			              method="POST">
	                
		                {{csrf_field()}}
				
				        <div class="form-group">
	                            <label for="name"
	                                   class="col-form-label">Name</label>
	
	                                <input id="email"
	                                       class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
	                                       name="name" value="{{ old('name') }}"
	                                       required autofocus>
					
					        @if ($errors->has('name'))
						        <span class="invalid-feedback">
	                                        <strong>{{ $errors->first('name') }}</strong>
	                                    </span>
					        @endif
	                </div>
				        
				        <div class="form-group">
                                <button type="submit" class="btn btn-success">
                                    Create
                                </button>

                                <a class="btn btn-link btn-outline-primary"
                                   href="{{ route('curricula.index') }}">
                                    Back
                                </a>
                        </div>
	
		               
	                </form>
		        </div>
            </div>
        </div>
    </div>
	</div>
@endsection