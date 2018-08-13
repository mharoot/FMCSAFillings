<?php
/* @var $this BiennialUpdateFormController */

$this->breadcrumbs=array(
	'Biennial Update Form',
);
?>
<!--<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>-->

<div>
	<h1>FORM MCS-150</h1><br />
	<table cellpadding="5" cellspacing="5">
		<tr><td><span class="formHead"">REASON FOR FILING</span> <i>(select only one)</i>:</td></tr>
		<tr>
			<td>
				<table cellspacing="5" cellspacing="5" style="border:#ccc solid 1px;">
					<tr>
						<td> 
							<input type="radio" name="filingRes"> New Application &nbsp;&nbsp;&nbsp;
							<input type="radio" name="filingRes"> Biennial Update or Changes &nbsp;&nbsp;&nbsp;
							<input type="radio" name="filingRes"> Out of Business Notification &nbsp;&nbsp;&nbsp;
							<input type="radio" name="filingRes"> Reapplication (after revocation of new entrant)
						</td>
					</tr>
				</table>
			</td>
		</tr>

		<tr><td><span class="formHead"">1. LEGAL BUSINESS NAME:</span></td></tr>
		<tr>
			<td><input type="text" name="busName"></td>
		</tr>

		<tr><td><span class="formHead"">2. DOING BUSINESS AS NAME</span> (if different from Legal Business Name):</td></tr>
		<tr>
			<td><input type="text" name="doingName"></td>
		</tr>

		<tr><td><span class="formHead"">3-7. PRINCIPAL PLACE OF BUSINESS:</span></td></tr>
		<tr>
			<td>
				<table cellspacing="5" cellspacing="5">
					<tr>
						<td>
							3. STREET ADDRESS/ROUTE NUMBER<br />
							<input type="text" name="strAdd">
						</td>
						<td>
							4. CITY<br />
							<input type="text" name="city">
						</td>
						<td>
							5. STATE/PROVINCE<br />
							<input type="text" name="state">
						</td>
						<td>
							6. ZIP CODE<br />
							<input type="text" name="zip">
						</td>
						<td>
							7. COLONIA (Mexico only)<br />
							<input type="text" name="colonia">
						</td>

					</tr>
				</table>
			</td>
		</tr>

		<tr><td>
				<span class="formHead"">8-12. MAILING ADDRESS:</span>
				<input type="radio" name="mailingAdd"> Same as Principal Address &nbsp;&nbsp;&nbsp;
				<input type="radio" name="mailingAdd"> Mailing address below:
			</td>
		</tr>
		<tr>
			<td>
				<table cellspacing="5" cellspacing="5">
					<tr>
						<td>
							8. STREET ADDRESS/ROUTE NUMBER<br />
							<input type="text" name="mailstrAdd">
						</td>
						<td>
							9. CITY<br />
							<input type="text" name="mailcity">
						</td>
						<td>
							10. STATE/PROVINCE<br />
							<input type="text" name="mailstate">
						</td>
						<td>
							11. ZIP CODE<br />
							<input type="text" name="mailzip">
						</td>
						<td>
							12. COLONIA (Mexico only)<br />
							<input type="text" name="mailcolonia">
						</td>

					</tr>
				</table>
			</td>
		</tr>

		<tr><td><span class="formHead"">13-15. CONTACT NUMBERS:</span></td></tr>
		<tr>
			<td>
				<table cellspacing="5" cellspacing="5">
					<tr>
						<td>
							13. PRINCIPAL BUSINESS PHONE NUMBER<br />
							<input type="text" name="priPhoneNo">
						</td>
						<td>
							14. PRINCIPAL CONTACT CELL PHONE NUMBER<br />
							<input type="text" name="priCellNo">
						</td>
						<td>
							15. PRINCIPAL BUSINESS FAX NUMBER<br />
							<input type="text" name="priFaxNumber">
						</td>
					</tr>
				</table>
			</td>
		</tr>

		<tr><td><span class="formHead"">16-19. IDENTIFICATION NUMBERS:</span></td></tr>
		<tr>
			<td>
				<table cellspacing="5" cellspacing="5">
					<tr>
						<td>
							16. USDOT NUMBER<br />
							<input type="text" name="usDot">
						</td>
						<td>
							17. MC or MX NUMBER<br />
							<input type="text" name="mcmx">
						</td>
						<td>
							18. DUN & BRADSTREET NUMBER 1<br />
							<input type="text" name="dun">
						</td>
						<td>
							19. IRS/TAX ID NUMBER <br /><i>(see instructions before completing this section)</i><br />
							<input type="text" name="irstax">
						</td>
					</tr>
				</table>
			</td>
		</tr>

		<tr><td>
			<span class="formHead"">20. E-MAIL ADDRESS:</span> &nbsp;&nbsp;
			<input type="text" name="emailAdd">
		</td></tr>

		<tr><td>
			<span class="formHead"">21. CARRIER MILEAGE </span> (to nearest 10,000 miles for the previous 12 months):&nbsp;&nbsp;
			<input type="text" name="carrMil">
		</td></tr>

		<tr><td style="border-bottom: #ccc solid 1px;">&nbsp;</td></tr>

		<tr><td style="padding-top: 10px;"><span class="formHead"">22. COMPANY OPERATIONS</span>&nbsp;&nbsp;(check all that apply):</td></tr>
		<tr>
			<td>
				<table cellspacing="5" cellspacing="5">
					<tr>
						<td><input type="text" name="interStCar">&nbsp;&nbsp;A. Interstate Carrier</td>
						<td><input type="text" name="interStHaz">&nbsp;&nbsp;B. Intrastate Hazmat
Carrier</td>
						<td><input type="text" name="interStNonHaz">&nbsp;&nbsp;C. Intrastate Non-Hazmat
Carrier</td>
						<td><input type="text" name="interStHazShip">&nbsp;&nbsp;D. Interstate Hazmat
Shipper</td>
						<td><input type="text" name="intraStHaz">&nbsp;&nbsp;E. Intrastate Hazmat
Shipper</td>
					</tr>
				</table>
			</td>
		</tr>


		<tr><td style="padding-top: 10px;"><span class="formHead"">23. OPERATION CLASSIFICATIONS </span>&nbsp;&nbsp;(check all that apply):</td></tr>
		<tr>
			<td valign="top">
				<table cellspacing="5" cellspacing="5">
					<tr>
						<td valign="top">
							<input type="checkbox" name="authHire">&nbsp;&nbsp;A. Authorized For-Hire<br />
							<input type="checkbox" name="exeHire">&nbsp;&nbsp;B. Exempt For-Hire<br />
							<input type="checkbox" name="pvtProty">&nbsp;&nbsp;C. Private Property
						</td>
						<td valign="top">
							<input type="checkbox" name="pvtMotBusiness">&nbsp;&nbsp;D. Private Motor Carrier of
Passengers (Business)<br />
							<input type="checkbox" name="pvtMotNonBusiness">&nbsp;&nbsp;E. Private Motor Carrier of
Passengers (Non-Business)<br />
							<input type="checkbox" name="migrant">&nbsp;&nbsp;F. Migrant
						</td>
						<td valign="top">
							<input type="checkbox" name="usmail">&nbsp;&nbsp;G. U.S. Mail<br />
							<input type="checkbox" name="federalGovt">&nbsp;&nbsp;H. Federal Government<br />
							<input type="checkbox" name="stateGovt">&nbsp;&nbsp;I. State Government<br />
							<input type="checkbox" name="localGovt">&nbsp;&nbsp;J. Local Government<br />
							<input type="checkbox" name="indianTribe">&nbsp;&nbsp;K. Indian Tribe
						</td>
						<td valign="top">
							<input type="checkbox" name="other">&nbsp;&nbsp;L. Other:<br />
							<textarea cols="25" rows="10" name="otherCont"></textarea>
						</td>
					</tr>
				</table>
			</td>
		</tr>


		<tr><td style="padding-top: 10px;"><span class="formHead"">24. CARGO CLASSIFICATIONS </span>&nbsp;&nbsp;(check all that apply):</td></tr>
		<tr>
			<td valign="top">
				<table cellspacing="5" cellspacing="5">
					<tr>
						<td valign="top">
							<input type="checkbox" name="authHire">&nbsp;&nbsp;A. General Freight<br />
							<input type="checkbox" name="exeHire">&nbsp;&nbsp;B. Household Goods<br />
							<input type="checkbox" name="pvtProty">&nbsp;&nbsp;C. Metal: Sheets, Coils, Rolls<br />
							<input type="checkbox" name="pvtProty">&nbsp;&nbsp;D. Motor Vehicles<br />
							<input type="checkbox" name="pvtProty">&nbsp;&nbsp;E. Drive Away/Towaway<br />
							<input type="checkbox" name="pvtProty">&nbsp;&nbsp;F. Logs, Poles, Beams, Lumber<br />
							<input type="checkbox" name="pvtProty">&nbsp;&nbsp;G. Building Materials<br />
							<input type="checkbox" name="pvtProty">&nbsp;&nbsp;H. Mobile Homes
						</td>
						<td valign="top">
							<input type="checkbox" name="authHire">&nbsp;&nbsp;I. Machinery, Large Objects<br />
							<input type="checkbox" name="exeHire">&nbsp;&nbsp;J. Fresh Produce<br />
							<input type="checkbox" name="pvtProty">&nbsp;&nbsp;K. Liquids/Gases<br />
							<input type="checkbox" name="pvtProty">&nbsp;&nbsp;L. Intermodal Container<br />
							<input type="checkbox" name="pvtProty">&nbsp;&nbsp;M. Passengers<br />
							<input type="checkbox" name="pvtProty">&nbsp;&nbsp;N. Oil Field Equipment<br />
							<input type="checkbox" name="pvtProty">&nbsp;&nbsp;O. Livestock<br />
							<input type="checkbox" name="pvtProty">&nbsp;&nbsp;P. Grain, Feed, Hay
						</td>
						<td valign="top">
							<input type="checkbox" name="usmail">&nbsp;&nbsp;Q. Coal/Coke<br />
							<input type="checkbox" name="federalGovt">&nbsp;&nbsp;R. Meat<br />
							<input type="checkbox" name="stateGovt">&nbsp;&nbsp;S. Garbage, Refuse, Trash<br />
							<input type="checkbox" name="localGovt">&nbsp;&nbsp;T. U.S. Mail<br />
							<input type="checkbox" name="indianTribe">&nbsp;&nbsp;U. Chemicals<br />
							<input type="checkbox" name="indianTribe">&nbsp;&nbsp;V. Commodities Dry Bulk<br />
							<input type="checkbox" name="indianTribe">&nbsp;&nbsp;W. Refrigerated Food<br />
							<input type="checkbox" name="indianTribe">&nbsp;&nbsp;X. Beverages
						</td>
						<td valign="top">
							<input type="checkbox" name="usmail">&nbsp;&nbsp;Y. Paper Product<br />
							<input type="checkbox" name="federalGovt">&nbsp;&nbsp;Z. Utility<br />
							<input type="checkbox" name="stateGovt">&nbsp;&nbsp;AA. Farm Supplies<br />
							<input type="checkbox" name="stateGovt">&nbsp;&nbsp;BB. Construction<br />
							<input type="checkbox" name="stateGovt">&nbsp;&nbsp;CC. Water Well<br />
							<input type="checkbox" name="stateGovt">&nbsp;&nbsp;DD. Other:<br />
							<textarea cols="25" rows="3" name="otherCont"></textarea>
						</td>
					</tr>
				</table>
			</td>
		</tr>

		<tr><td style="border-bottom: #ccc solid 1px;">&nbsp;</td></tr>

	</table>
</div>

<style type="text/css">
	.formHead{
		font-size: 14px;
		font-weight: bold;
		color: #444444;
		text-transform: uppercase;
	}
</style>