<div id="sub_nav_container">
	<div id="sub_nav_selector">
		<ul id="sub_nav_selector_list">
			<li><span>Project:</span>{{ $current_project['development_name'] }}</li>
			<li onclick="load_sub_nav(null,'sub_nav/tasks')">All</li>
			@foreach($projects as $project)
				@if($project['id']!=$current_project['id'])
					<li onclick="load_sub_nav(null,'sub_nav/tasks/{{ $project['id'] }}')">{{ $project['development_name'] }}</li>
				@endif
			@endforeach
		</ul>
	</div>
	{{--<div id="sub_nav_top">--}}
		{{--<div class="sub_nav_top_btn"><i class="fa fa-retweet" title="Expand / Collapse"></i></div>--}}
		{{--<div class="sub_nav_top_btn"><i class="fa fa-plus" title="New"></i></div>--}}
		{{--<div class="sub_nav_top_btn"><i class="fa fa-reorder" title="Manage"></i></div>--}}
	{{--</div>--}}
	<ul id="sub_nav_list">
	</ul>
	<script>
		show_sub_nav_models({!! $models !!});
	</script>
</div>