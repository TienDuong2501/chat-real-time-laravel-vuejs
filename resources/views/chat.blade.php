<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Document</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<style>
		.list-group{
			overflow-y: scroll;
				height: 300px;
		}
	</style>
</head>
<body>
	
	<div class="container" id="app">
		<div class="row">
			<div class="offset-4 col-4 offset-sm-1 col-sm-10">
				<li class="list-group-item active ">Chat Room <span class="badge badge-danger badge-pill">@{{ numberOfUser }}</span> </li>
				<ul class="list-group" v-chat-scroll>
					
					<span class="badge badge-pill badge-primary">@{{ typing }} </span>
					<message v-for="value,index in chat.message"
					:key=value.index
					:color=chat.color[index]
					:user = chat.user[index]
					:time = chat.time[index]> @{{ value }} </message>
				</ul>
				<input type="text" class="form-control"
				placeholder="type your message here" 
				v-model="message" 
				@keyup.enter = "send"
				>
				<br>
				<a href="" class="btn btn-warning btn-sm" @click.prevent="deleteSession">Delete Chats</a>
			</div>
			
		</div>
	</div>
	


	<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>