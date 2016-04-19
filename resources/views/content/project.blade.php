<div id="content_container">
	<div id="container_top">
		<div id="content_top_edit" class="container_top_btn" onclick="show_input_box()"><i class="fa fa-edit"></i> Edit</div>
		<div id="content_top_cancel_edit" class="container_top_btn" onclick="hide_input_box()" style="display: none;"><i class="fa fa-ban"></i> Cancel Editing</div>
		<div id="content_top_submit" class="container_top_btn" onclick="submit_input()" style="display: none;"><i class="fa fa-check"></i> Submit Editing</div>
		<div id="content_delete" class="container_top_btn"><i class="fa fa-times"></i> Delete</div>
	</div>
	<div id="container_content">
		<div class="content_section">Project info</div>
		<div class="content_line">
			<div class="line_H line_W150 line_TAR line_label line_C_label"><label for="name">Name</label></div>
			<div class="line_H line_content line_C_content_text line_editable">{{ $project['name'] }}</div>
			<div class="line_H line_input line_C_content_input line_editable"><input id="name" name="name" class="line_input_control line_I_W180" type="text" value="{{ $project['name'] }}"/></div>
		</div>
		<div class="content_line">
			<div class="line_H line_W150 line_TAR line_label line_C_label"><label for="development_name">Development Name</label></div>
			<div class="line_H line_content line_C_content_text line_editable">{{ $project['development_name'] }}</div>
			<div class="line_H line_input line_C_content_input line_editable"><input id="development_name" name="development_name" class="line_input_control line_I_W180" type="text"
			                                                                         value="{{ $project['development_name'] }}"/></div>
		</div>
		<div class="content_line">
			<div class="line_H line_W150 line_TAR line_label line_C_label"><label for="description">Description</label></div>
			<div class="line_H line_content line_C_content_text line_editable">{{ $project['description'] }}</div>
			<div class="line_H line_input line_C_content_input"><textarea id="description" name="description"
			                                                              class="line_input_control line_I_W360 line_I_textarea">{{ $project['description'] }}</textarea></div>
		</div>
		<div class="content_line">
			<div class="line_H line_W150 line_TAR line_label line_C_label"><label for="status">Status</label></div>
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
			<div class="line_H line_input line_C_content_input">
				<select id="status" name="status" class="line_input_control">
					<option value="0" @if($project['status']==0) selected="selected" @endif>Unknown</option>
					<option value="1" @if($project['status']==1) selected="selected" @endif>Waiting</option>
					<option value="2" @if($project['status']==2) selected="selected" @endif>Developing</option>
					<option value="3" @if($project['status']==3) selected="selected" @endif>Done</option>
					<option value="4" @if($project['status']==4) selected="selected" @endif>Dropped</option>
					<option value="5" @if($project['status']==5) selected="selected" @endif>Deleted</option>
				</select>
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
<script>init_input_box('content.project');</script>