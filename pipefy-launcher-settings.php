<div class="wrap">
	<h1>Insert Pipefy Form Launcher</h1>
	<p>To configure the Pipefy Form Launcher on this website you just need to copy and paste the public form code.</p>
	<form action="<?php esc_html_e( str_replace('%7E', '~', $_SERVER['REQUEST_URI']), 'formAction' ) ?>" method="post">
		<table class="form-table" role="presentation">
			<tbody>
				<tr>
					<th scope="row"><label for="whl_page">Public Form</label></th>
					<td>
						<code>http://app.pipefy.com/public/form/</code><input type="text" value="<?php esc_html_e($formVar, 'formVar' ) ?>" size="10" name="formfield" placeholder="xxxxxxxx"><br>
						<p class="description">Get the public form code on the Pipe share settings.<br>Your form needs to be public.</p>
					</td>
				</tr>
				<tr>
					<th scope="row"><label for="whl_page">Call to action</label></th>
					<td>
						<input type="text" value="<?php esc_html_e( $nameVar, 'nameVar' ) ?>" size="30" name="namefield" placeholder="Type the call to action"><br>
						<p class="description">Type the call to action to open the form.</p>
					</td>
				</tr>
        <tr>
          <th scope="row"><label for="whl_page">Launcher color</label></th>
          <td>
            <input id="color_code" class="color-picker" type="text" value="<?php esc_html_e( $colorVar, 'colorVar' ) ?>" size="10" name="colorfield" placeholder="#3b5bfd"><br>
            <p class="description">This is the color of the launcher on your website.<br>#3b5bfd is the default.</p>
          </td>
        </tr>
				<tr>
					<th scope="row"><label for="whl_page">Full page experience</label></th>
					<td>
					<input name="fullpagefield" value="0" type="hidden">
					<input type="checkbox" name="fullpagefield" value="1" <?php checked(1, $fullpageVar, true); ?> /><br>
						<p class="description">Check it if you want a full page experience.</p>
					</td>
				</tr>
			</tbody>
		</table>
		<input name="change-clicked" type="hidden" value="1" /><br>
		<input class="button button-primary" type="submit" value="Save" />
	</form>
</div>
