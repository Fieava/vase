<div id="content_container">
	<div id="container_top">
		<div id="content_top_submit" class="container_top_btn" onclick="submit_input()"><i class="fa fa-check"></i> 添加</div>
	</div>
	<div id="container_content">
		<div class="content_section">Project info</div>
		<div class="content_validate_info"></div>
		<form id="content_project" action="projects/add">
			<div class="content_line">
				<div class="line_H line_W150 line_TAR line_label line_C_label"><label for="name">Name</label></div>
				<div class="line_H line_input line_C_content_input line_editable"><input id="name" name="name" class="line_input_control line_I_W180" type="text"/>
				</div>
			</div>
			<div class="content_line">
				<div class="line_H line_W150 line_TAR line_label line_C_label"><label for="development_name">Development Name</label></div>
				<div class="line_H line_input line_C_content_input line_editable"><input id="development_name" name="development_name" class="line_input_control line_I_W180" type="text"/></div>
			</div>
			<div class="content_line">
				<div class="line_H line_W150 line_TAR line_label line_C_label"><label for="description">Description</label></div>
				<div class="line_H line_input line_C_content_input"><textarea id="description" name="description" class="line_input_control line_I_W360 line_I_textarea"></textarea></div>
			</div>
			<div class="content_line">
				<div class="line_H line_W150 line_TAR line_label line_C_label"><label for="status">Status</label></div>
				<div class="line_H line_input line_C_content_input">
					<select id="status" name="status" class="line_input_control">
						<option value="0" disabled="disabled">Unknown</option>
						<option value="1">Waiting</option>
						<option value="2">Developing</option>
						<option value="3">Done</option>
						<option value="4">Dropped</option>
						<option value="5">Deleted</option>
					</select>
				</div>
			</div>
			<div class="content_line">
				<div class="line_H line_W150 line_TAR line_label line_C_label">Start At</div>
				<div class="line_H line_input line_C_content_input line_editable"><input id="start_at" name="start_at" class="line_input_control line_I_W180" type="text"/></div>
			</div>
			<div class="content_line">
				<div class="line_H line_W150 line_TAR line_label line_C_label">End At</div>
				<div class="line_H line_input line_C_content_input line_editable"><input id="end_at" name="end_at" class="line_input_control line_I_W180" type="text"/></div>
			</div>
			<div class="content_line">
				<div class="line_H line_W150 line_TAR line_label line_C_label">Version</div>
				<div class="line_H line_input line_C_content_input line_editable"><input id="version" name="version" class="line_input_control line_I_W180" type="text"/></div>
			</div>
			<div class="content_line">
				<div class="line_H line_W150 line_TAR line_label line_C_label">project time can be exceed</div>
				<div class="line_H line_input line_C_content_input">
					<select id="project_time_can_be_exceed" name="project_time_can_be_exceed" class="line_input_control">
						<option value="0">No</option>
						<option value="1">Yes</option>
					</select>
				</div>
			</div>
			<div class="content_line_separator"></div>
			<input id="csrf_token" type="hidden" name="_token" value="{{ csrf_token() }}"/>
		</form>
	</div>
</div>
<script>init_input_box('content.project.add_form');</script>