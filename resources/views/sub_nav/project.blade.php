<div id="sub_nav_container">
	<div id="sub_nav_top">
		<div class="sub_nav_top_btn" onclick="load_content(null, 'projects/add_form');"><i class="fa fa-plus" title="New"></i></div>
	</div>
	<ul id="sub_nav_list">
		@foreach($projects as $project)
			<li onclick="load_content(this, 'projects/info/{{ $project['id'] }}')" id="sub_nav_project_{{ $project['id'] }}"><i class="fa fa-archive"></i> {{ $project['development_name'] }}<span
						class="project_version">{{ $project['version'] }}</span></li>
		@endforeach
	</ul>
</div>