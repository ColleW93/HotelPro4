@foreach($tasks as $tasks)   
    	{{ $tasks->task_name }}
    	{{ $tasks->room_no }}
        {{ $tasks->user_id }}
        {{ $tasks->user_name }}
@endforeach
