<md-content class="Page-container">
	<div class="Page-container" style="margin: 5%;">
	
		<!-- add todo's form -->
		<form method="post" name="add_todo_form" id="add_todo_form" action="/save_todo">
		    {{ csrf_field() }}
		    <input type="text" name="todo_input" id="todo_input" class="form-control">
		    <button type="submit" ng-click="addTodo()">Add</button>
	    </form>

	    <!-- displaying to-do's list -->
		<div class="todo_list">
			<ul style="list-style: none;margin-left: -3%;">
			 	@foreach($todos as $todo)
        
				<li style="background-color: #f2f2f2;padding: 10px;margin-top: 2px;width: 25%;border: 1px solid #ccc;">{{ $todo -> name }} <span><a href="/delete_todo/{{ $todo -> id }}"><button style="float: right;margin-top: -2%;">Delete</button></a></span></li>
				@endforeach
			</ul>
		</div>
	</div>
</md-content>