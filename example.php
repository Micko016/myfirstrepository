<script language="javascript" type="text/javascript">
function limitText(limitField, limitCount, limitNum) {
	if (limitField.value.length > limitNum) {
		limitField.value = limitField.value.substring(0, limitNum);
	} else {
		limitCount.value = limitNum - limitField.value.length;
	}
}
</script>

<form action="send.php" method="post">
	<table>
		<!-- <tr>
			<td style="padding-right: 50px;">
				Message ID:
			</td>
			<td>
				<input type="text" name="sender" id="sender"/>
			</td>
		</tr> -->
		<tr>
			<td style="padding-right: 50px;">
				Receiver:
			</td>
			<td>
				<input type="text" name="receiver" id="receiver"/><br>
				<font size="1"><br>

			</td>
		</tr>
		<tr>
			<td style="padding-right: 50px;">
				Message:
			</td>
			<td>
				<form name="myform">
					<textarea name="limitedtextarea" onKeyDown="limitText(this.form.limitedtextarea,this.form.countdown,118);" 
						onKeyUp="limitText(this.form.limitedtextarea,this.form.countdown,118);" style="width: 173px; height: 170px;">
					</textarea><br>
					<font size="1">(Maximum characters: 118)<br>
						You have <input readonly type="text" name="countdown" size="3" value="118"> characters left.</font>
				</form>
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="send" id="send" value="SEND"/>
			</td>
		</tr>
	</table>
</form>
