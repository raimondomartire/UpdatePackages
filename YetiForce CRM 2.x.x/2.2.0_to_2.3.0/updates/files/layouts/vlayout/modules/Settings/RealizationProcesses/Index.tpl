{*/*+***********************************************************************************************************************************
 * The contents of this file are subject to the YetiForce Public License Version 1.1 (the "License"); you may not use this file except
 * in compliance with the License.
 * Software distributed under the License is distributed on an "AS IS" basis, WITHOUT WARRANTY OF ANY KIND, either express or implied.
 * See the License for the specific language governing rights and limitations under the License.
 * The Original Code is YetiForce.
 * The Initial Developer of the Original Code is YetiForce. Portions created by YetiForce are Copyright (C) www.yetiforce.com. 
 * All Rights Reserved.
 *************************************************************************************************************************************/*}

 <div class=" supportProcessesContainer" style="margin-top:10px;">
 	<h3>{vtranslate('LBL_REALIZATION_PROCESSES', $QUALIFIED_MODULE)}</h3>&nbsp;<hr>
	
	<ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
		<li class="active"><a href="#project_configuration" data-toggle="tab">{vtranslate('LBL_PROJECT', $QUALIFIED_MODULE)} </a></li>
	</ul>
	<br />
	<div class="tab-content">
		<div class='editViewContainer tab-pane active' id="project_configuration">
			<table class="table table-bordered table-condensed themeTableColor userTable">
				<thead>
					<tr class="blockHeader" >
						<th class="mediumWidthType">
							<span>{vtranslate('LBL_INFO', $QUALIFIED_MODULE)}</span>
						</th>
						<th class="mediumWidthType">
							<span>{vtranslate('LBL_TYPE', $QUALIFIED_MODULE)}</span>
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><label>{vtranslate('LBL_PROJECT_STATUS_INFO', $QUALIFIED_MODULE)}</label></td>
						<td class="col-md-6">
							{assign var=STATUS_CLOSED value=$STATUS_NOT_MODIFY['Project']}
							<select class="chzn-select projectStatus" multiple name="projectStatus" style="width: 500px;" data-moduleid="{$STATUS_CLOSED.id}">
								{foreach  item=ITEM from=$PROJECT_STATUS}
									<option value="{$ITEM['status']}" {if in_array($ITEM['status'], $STATUS_CLOSED.status)} selected {/if}  >{$ITEM['statusTranslate']}</option>
								{/foreach}
							</select>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
