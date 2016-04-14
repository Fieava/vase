<div id="sub_nav_container">
	<ul id="sub_nav_list">
		@foreach($projects as $project)
			<li onclick="load_content(this, 'projects/{{ $project['id'] }}/models')"><i class="fa fa-archive"></i> {{ $project['development_name'] }}<span
						class="project_version">{{ $project['version'] }}</span></li>
		@endforeach
	</ul>
</div>