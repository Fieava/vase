<div id="content_container">
	<div id="container_top">
		<div class="container_top_btn"><i class="fa fa-edit"></i> Edit</div>
		<div class="container_top_btn"><i class="fa fa-times"></i> Delete</div>
	</div>
	<div id="container_content">
		<div class="content_section">Project info</div>
		<div class="content_line">
			<div class="line_H line_W150 line_TAR line_label line_C_label">Name</div>
			<div class="line_H line_content line_C_content_text line_editable">{{ $project['name'] }}</div>
		</div>
		<div class="content_line">
			<div class="line_H line_W150 line_TAR line_label line_C_label">Development Name</div>
			<div class="line_H line_content line_C_content_text line_editable">{{ $project['development_name'] }}</div>
		</div>
		<div class="content_line">
			<div class="line_H line_W150 line_TAR line_label line_C_label">Description</div>
			<div class="line_H line_content line_C_content_text line_editable">{{ $project['description'] }}</div>
		</div>
		<div class="content_line">
			<div class="line_H line_W150 line_TAR line_label line_C_label">Status</div>
			<div class="line_H line_content line_C_content_text line_editable">
				@if($project['status']==0)
					Unknown
				@elseif($project['status']==1)
					Waiting
				@elseif($project['status']==2)
					Developing
				@elseif($project['status']==3)
					Done
				@elseif($project['status']==4)
					Dropped
				@elseif($project['status']==5)
					Deleted
				@endif
			</div>
		</div>
		<div class="content_line">
			<div class="line_H line_W150 line_TAR line_label line_C_label">Start At</div>
			<div class="line_H line_content line_C_content_text line_editable">{{ $project['start_at'] }}</div>
		</div>
		<div class="content_line">
			<div class="line_H line_W150 line_TAR line_label line_C_label">End At</div>
			<div class="line_H line_content line_C_content_text line_editable">{{ $project['end_at'] }}</div>
		</div>
		<div class="content_line">
			<div class="line_H line_W150 line_TAR line_label line_C_label">Version</div>
			<div class="line_H line_content line_C_content_text line_editable">{{ $project['version'] }}</div>
		</div>
		<div class="content_line">
			<div class="line_H line_W150 line_TAR line_label line_C_label">project time can be exceed</div>
			<div class="line_H line_content line_C_content_text line_editable">
				@if($project['project_time_can_be_exceed']==0)
					No
				@elseif($project['project_time_can_be_exceed']==1)
					Yes
				@endif
			</div>
		</div>
		<div class="content_line_separator"></div>
		<div class="content_section">Project statistic</div>
	</div>
</div>