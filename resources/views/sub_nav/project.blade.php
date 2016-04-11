<div id="sub_nav_container">
	<ul id="sub_nav_project_list">
		@foreach($projects as $project)
			<li><i class="fa fa-archive"></i> {{ $project['development_name'] }}<span class="project_version">{{ $project['version'] }}</span></li>
		@endforeach
	</ul>
</div>