<div id="sub_nav_container">
	<ul id="sub_nav_list">
		@foreach($models as $model)
			<li onclick="load_content(this, 'projects/info/{{ $model['id'] }}')"><i class="fa fa-archive"></i> {{ $model['development_name'] }}<span
						class="project_version">{{ $model['version'] }}</span></li>
		@endforeach
	</ul>
</div>